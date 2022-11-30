<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    private $tools;

    public function __construct()
    {
        $this->tools = new ToolsController();
    }

    public function register(Request $request)
    {
        try {
            $obj = User::where('email', $request['signup-email'])->first();
            if ($obj) {
                return $this->tools->getErrorJsonMessage("Este correo ya ha sido registrado!", 'Correo duplicado!');
            }

            $user = new User();
            $user->nombre = $request['signup-firstname'];
            $user->apellido = $request['signup-lastname'];
            $user->celular = $request['signup-mobile'];
            $user->email = $request['signup-email'];
            $user->password = Hash::make($request['signup-password']);
            $user->estado = 'A';
            $user->tipo_usuario = 'C';
            $user->assignRole('cliente');
            $user->save();

            //, $request->input("remember")
            Auth::guard('web')->attempt(['email' => $user->email, 'password' => $user->password], true);
            return $this->tools->getSuccesJsonMessage($user);
        } catch (\Throwable $th) {
            return $this->tools->getThrowJsonMessage($th);
        }
    }

    public function login(Request $request)
    {
        try {
            $user = User::where('email', $request['signin-email'])->first();
            if ($user) {
                if (Auth::guard('web')->attempt(['email' => $user->email, 'password' => $request['signin-password']], $request['remember-me'])) {
                    return $this->tools->getSuccesJsonMessage($user);
                } else {
                    return $this->tools->getErrorJsonMessage("Contraseña incorrectas!", 'Contraseña incorrectas!');
                }
            } else {
                return $this->tools->getErrorJsonMessage("Correo no registrado!", 'Correo no registrado!');
            }
        } catch (\Throwable $th) {
            return $this->tools->getThrowJsonMessage($th);
        }
    }

    public function logout(Request $request)
    {
        try {
            Auth::guard()->logout();
            session()->invalidate();
        } catch (\Throwable $e) {
        }
        return redirect()->route('home');
    }
}
