<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Role;
use App\Profile;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        try {
            // validamos errores en el request
            $validator = Validator::make($request->all(), [
          'email' => 'email|exists:users,email|required',
          'password' => 'required|min:8'
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
                'name' => 'string|required',
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
                'name' => $request->name,
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
                'roles' => array('name' => 'USER'),
                'token_type' => 'Bearer',
            ]);
        } catch (Exception $error) {
            return response()->json([
            'status_code' => 500,
            'errors' => $error,
        ], 500);
        }
    }

    public function resetPassword()
    {
    }
}
