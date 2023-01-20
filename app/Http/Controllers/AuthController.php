<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{

    /* 
    *CARGAR EL FORMULARIO DE REGISTRO DE USUARIOS
    */
    public function registrarse()
    {
        return view("auth.registro");
    }

    public function guardarUsuario(Request $request)
    {
        //VALIDAR
        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:users",
            "password" => "required",
            "c_password" => "required|same:password"
        ]);

        // GUARDAR

        $u = new User;
        $u->name = $request->name;
        $u->email = $request->email;
        $u->password = bcrypt($request->password);
        $u->save();

        // REDIRECCIONAR
        return redirect("/");
    }
}
