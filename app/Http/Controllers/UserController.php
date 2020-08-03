<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function findAll()
    {
        $usuarios = User::select('id', 'name', 'email')
            ->get();

        return response($usuarios, 200)
            ->header('Content-Type', 'application/json');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function showProfile($name)
    {
        $user = User::where('name', $name)->first();
        $user->profile;

        return response()->json([
            'status_code' => 200,
            'profile' => $user
        ], 200);
    }

    /**
     * Acualizamos el perfil del usuario
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function updateProfile(Request $request, $name)
    {
        $user = User::firstWhere('name', $name);
        $update_profile = Profile::firstWhere('user_id', $user->id);

        $update_profile->firstname = $request->firstname;
        $update_profile->lastname = $request->lastname;
        $update_profile->gender = $request->gender;
        $update_profile->birthday = $request->birthday;
        $update_profile->city = $request->city;
        $update_profile->telephone = $request->telephone;
        $update_profile->mobile = $request->mobile;
        $update_profile->mobile_2 = $request->mobile_2;
        $update_profile->profession = $request->profession;
        $update_profile->facebook = $request->facebook;
        $update_profile->twitter = $request->twitter;
        $update_profile->instagram = $request->instagram;
        $update_profile->whatsapp = $request->whatsapp;
        $update_profile->telegram = $request->telegram;
        $update_profile->interests = $request->interests;

        $update_profile->save();

        return response()->json([
            'status_code' => 200,
            'message' => 'Información Actualizada !'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy($name)
    {
        $user = User::where('name', $name)->first();
        $user->delete();

        return response()->json([
            'status_code' => 200,
            'message' => 'Sentimos que te vayas !'
        ], 200);
    }
}
