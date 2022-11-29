<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function register(Request $request)
    {
        try {
            $obj = User::where('email', $request['signup-email'])->first();
            if ($obj) {
                return response()->json([
                    "status" => 500,
                    "message" => "Este correo ya ha sido registrado!",
                    "data" => 'Correo duplicado!'
                ], 500);
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
            return response()->json([
                "status" => 200,
                "message" => "Hecho!",
                "data" => $user,
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                "status" => 500,
                "message" => "Ha ocurrido un error interno!",
                "data" => ['line' => $th->getLine(), 'message' => $th->getMessage(), 'request' => $request->all()]
            ], 500);
        }
    }

    public function login(Request $request)
    {
        try {
            $user = User::where('email', $request['signin-email'])->first();
            if ($user) {
                if (Auth::guard('web')->attempt(['email' => $user->email, 'password' => $request['signin-password']], $request['remember-me'])) {
                    return response()->json([
                        "status" => 200,
                        "message" => "Hecho!",
                        "data" => $user,
                    ], 200);
                } else {
                    return response()->json([
                        "status" => 500,
                        "message" => "Contraseña incorrectas!",
                        "data" => ''
                    ], 500);
                }
            } else {
                return response()->json([
                    "status" => 500,
                    "message" => "Correo no registrado!",
                    "data" => ''
                ], 500);
            }
        } catch (\Throwable $th) {
            return response()->json([
                "status" => 500,
                "message" => "Ha ocurrido un error interno!",
                "data" => ['line' => $th->getLine(), 'message' => $th->getMessage(), 'request' => $request->all()]
            ], 500);
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
