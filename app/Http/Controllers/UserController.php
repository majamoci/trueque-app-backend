<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index () {
      $usuarios = User::all();

      return response($usuarios, 200)
        ->header('Content-Type', 'application/json');
    }
}
