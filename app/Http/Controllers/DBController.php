<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class DBController extends Controller
{
    public function migrate() {
        Artisan::call('migrate');
        return response()->json([
            'message' => 'Database migrated',
        ], 200);
    }

    public function refresh() {
        Artisan::call('migrate:refresh');
        return response()->json([
            'message' => 'Database refreshed',
        ], 200);
    }

    public function createUsers() {
        $users_code = Artisan::call('db:seed --class=UsersTableSeeder');
        $roles_code = Artisan::call('db:seed --class=RolesTableSeeder');

        return response()->json([
            'users' => $users_code,
            'roles' => $roles_code,
        ], 200);
    }
}
