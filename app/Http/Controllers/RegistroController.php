<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistroRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistroController extends Controller
{
    public function index(){
        return view ('registro');
    }

    public function store(RegistroRequest $request){
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('site.dashboard');
    }
}