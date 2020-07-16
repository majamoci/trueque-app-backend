<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class DBController extends Controller
{
    public function migrate() {
        Artisan::call('migrate --force');
        return response()->json([
            'message' => 'Database migrated',
        ], 200);
    }

    public function refresh() {
        Artisan::call('migrate:refresh --seed --force');
        return response()->json([
            'message' => 'Database refreshed',
        ], 200);
    }
}
