<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\User;
use App\Role;
use App\Reset;
use App\Profile;
use App\Mail\SendResetPassword;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        try {
            // validamos errores en el request
            $validator = Validator::make($request->all(), [
                'email' => 'email|exists:users,email|required',
                'password' => 'required'
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status_code' => 403,
                    'errors' => $validator->errors(),
                ], 403);
            }

            // buscamos el usuario
            $user = User::where('email', $request->email)->first();
            // buscamos el rol
            $roles = Role::where('user_id', $user->id)->select('name')->get();

            if (!Hash::check($request->password, $user->password, [])) {
                return response()->json([
                'status_code' => 403,
                'errors' => array('password' => ['Contraseña incorrecta'])
            ], 403);
            }

            // asignamos el rol/es al usuario
            $_roles = [];
            foreach ($roles as $role) {
                $_roles[] = "role:{$role->name}";
            }

            // eliminamos los OTP de recuperacion
            Reset::where("email", $request->email)->delete();

            $tokenResult = $user->createToken('authToken', $_roles)->plainTextToken;
            return response()->json([
                'status_code' => 200,
                'access_token' => $tokenResult,
                'roles' => $roles,
                'token_type' => 'Bearer',
            ]);
        } catch (Exception $error) {
            return response()->json([
                'status_code' => 500,
                'errors' => $error,
            ], 500);
        }
    }

    public function register(Request $request)
    {
        try {
            // validamos errores en el request
            $validator = Validator::make($request->all(), [
                'username' => 'string|required',
                'email' => 'email|unique:users,email|required',
                'password' => 'required|min:8'
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status_code' => 403,
                    'errors' => $validator->errors(),
                ], 403);
            }

            // creamos el nuevo usuario
            $new_user = new User;
            $new_user = User::create([
                'name' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
            $new_user->save();

            // añadimos el rol USER
            $role = new Role;
            $role = Role::create([
                'name' => 'USER',
                'user_id' => $new_user->id
            ]);
            $role->save();

            // añadimos un perfil
            $profile = new Profile;
            $profile->firstname = '';
            $profile->lastname = '';
            $profile->gender = '';
            $profile->city = '';
            $profile->mobile = '';
            $new_user->profile()->save($profile);

            // generamos el token con el rol USER
            $tokenResult = $new_user->createToken('authToken', ["role:USER"])->plainTextToken;
            return response()->json([
                'status_code' => 200,
                'access_token' => $tokenResult,
                'roles' => 'USER',
                'token_type' => 'Bearer',
            ]);
        } catch (Exception $error) {
            return response()->json([
            'status_code' => 500,
            'errors' => $error,
        ], 500);
        }
    }

    public function sendResetPassword(Request $request)
    {
        try {
            // validamos errores en el request
            $validator = Validator::make($request->all(), [
                'reset_email' => 'email|exists:users,email|required',
            ]);

            // si el email no se encuentra
            if ($validator->fails()) {
                return response()->json([
                    'status_code' => 403,
                    'errors' => $validator->errors(),
                ], 403);
            }

            // generamos el OTP
            $otp = rand(100000, 999999);
            Log::info("OTP: {$otp}");

            // guardamos en la DB
            $reset = new Reset([
                'email' => $request->reset_email,
                'code' => $otp,
            ]);
            $reset->save();

            Mail::to($request->reset_email)->send(new SendResetPassword($otp));

            return response()->json([
                'message' => "Mensaje Enviado, por favor revisa tu bandeja de entrada."
            ]);
        } catch (Exception $error) {
            return response()->json([
                'status_code' => 500,
                'errors' => $error,
            ], 500);
        }
    }

    public function verifyOTP(Request $request) {
        try {
            // validamos errores en el request
            $validator = Validator::make($request->all(), [
                'verify_otp' => 'required|numeric|digits:6'
            ]);

            // si el email no se encuentra
            if ($validator->fails()) {
                return response()->json([
                    'status_code' => 403,
                    'errors' => $validator->errors(),
                ], 403);
            }

            $status_code = 200;
            $message = Reset::where('code', $request->verify_otp)
                ->select('email')->first();
            if(!$message) {
                $status_code = 403;
                $message = array("message" => "El código es incorrecto.");
            } else {
                $message = array('token' => encrypt($message->email));
            }
            return response()->json($message, $status_code);
        } catch (Exception $error) {
            return response()->json([
                'status_code' => 500,
                'errors' => $error,
            ], 500);
        }
    }

    public function resetPassword(Request $request) {
        try {
            // validamos errores en el request
            $validator = Validator::make($request->all(), [
                'reset_password' => 'required|min:8|max:32',
                'verify_password' => 'same:reset_password',
                'token' => 'required'
            ]);

            // si la validacion falla
            if ($validator->fails()) {
                return response()->json([
                    'status_code' => 403,
                    'errors' => $validator->errors(),
                ], 403);
            }

            $dep_password = decrypt($request->token);

            // buscamos el usuario
            $user = User::where('email', $dep_password)->first();
            // cambiamos la contraseña
            $user->password = Hash::make($request->reset_password);
            $user->save();

            return response()->json([
                'message' => "La contraseña se cambió.",
            ], 200);
        } catch (Exception $error) {
            return response()->json([
                'status_code' => 500,
                'errors' => $error,
            ], 500);
        }
    }
}
