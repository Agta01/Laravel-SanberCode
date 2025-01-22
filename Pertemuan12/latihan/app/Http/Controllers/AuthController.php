<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function regis() {
        return view('welcome');
    }

    public function home(Request $request) {
        $firstName = $request->input('firstname');
        $lastName = $request->input('lastname');

        return view('welcomePeserta', ['firstName' =>$firstName, 'lastName' =>$lastName]);
    }
}
