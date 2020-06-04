<?php

namespace App\Http\Controllers;

use App\Voluntary;

class VoluntaryController extends Controller
{
    public function store()
    {
        $this->validate($request, [
            'email' => 'email|required|unique:users|confirmed',
            'password' => 'required|min:6',
            'name' => 'required|string|max:50'
        ]);

        $mensaje = "OPS! Ocurrio un problema!";
        $class = "error";

        $avatar = Avatar::where('level',1)->inRandomOrder()->first();

        $user = new User();

        $user->name = ucwords(strtolower($request['name']));
        $user->password = Hash::make($request['password']);
        $user->email = $request['email'];
        $user->avatar_id = $avatar->id;

        if($user->save()) {
            $mensaje = "Usuario: ".$user->name." ".$user->lastName." ingresado correctamente!";
            $class = "success";

            if (Auth::attempt(['email' => $user->email, 'password' => $user->password])) {
                return redirect('/home');
            }

            return redirect()->route('login')->with(['message' => $mensaje, 'class' => $class]);
        }

        return redirect()->back()->with(['message' => $mensaje, 'class' => $class]);
    }
}