<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function autenticar(Request $request){
    
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate(); //se as credenciais forem validas

            return redirect()->intended(route('site.deshboard'));
        }

        return back()->withErrors([
                'email' => 'Credenciais Inválidas'
        ]);
        
        
    }

    public function logout(Request $request): RedirectResponse {
        Auth::logout();
    
        $request->session()->invalidate(); //invalidando a sessão anterior
    
        $request->session()->regenerateToken(); //gerando um novo tokin
    
        return redirect(route('site.index'));
    }
}