<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Producto;
use Illuminate\Http\Request;

class ToolsController
{
    public function getUserCarrito($id)
    {
        $data = Carrito::where('usuario_id', $id)->get();
        foreach ($data as $key => $value) {
            $data[$key]['producto'] = Producto::find($data[$key]['producto_id']);
        }
        return $data;
    }

    public function getSuccesJsonMessage($data)
    {
        return response()->json([
            "status" => 200,
            "message" => "Hecho!",
            "data" => $data,
        ], 200);
    }

    public function getErrorJsonMessage($msg,$data)
    {
        return response()->json([
            "status" => 500,
            "message" => $msg,
            "data" => $data
        ], 500);
    }

    
    public function getThrowJsonMessage($th){
        return response()->json([
            "status" => 500,
            "message" => "Ha ocurrido un error interno!",
            "data" => ['line' => $th->getLine(), 'message' => $th->getMessage()]
        ], 500);
    }
}
