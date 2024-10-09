<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function logar(Request $request){
        $data = [];

        if($request->isMethod("POST")){
            // Se entrar neste if aqui clico no botão logar

            $login = $request->input("login");
            $senha = $request->input("senha");

            $credential = ['login' => $login, 'password' => $senha];
            //logar
            if(Auth::attempt($credential)){
                return redirect()->route("index");
            }
            else{
                $request->session()->flash("err", "Usuario / Senha invalida");
                return redirect()->route("logar");
            }
        }

        return view('logar', $data);
    }
}
