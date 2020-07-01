<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function welcome()
    {
        return view('welcome',['nama' => $_POST["nama_depan"]. " ". $_POST["nama_belakang"]]);
    }
}
