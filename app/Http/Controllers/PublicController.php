<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Informacion;
use App\Models\Producto;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    private $data = array();
    private $info;

    public function __construct()
    {
        $this->info = Informacion::find('1');
        $this->data["marca"] = $this->info->marca;
        $this->data["logo"] =  $this->info->logo;
        $this->data["ruta"] = "user";
    }

    public function index(Request $request){
        $this->data["title"] = $this->data["marca"];
        $this->data["description"] = $this->data["marca"];

        $this->data["productos"] = Producto::where('estado', 'A')->orderBy('precio','desc')->take(6)->get();
        
        foreach ($this->data["productos"] as $key => $value) {
            $categoria = Categoria::find($value['categoria_id']);
            $this->data["productos"][$key]['categoria'] = $categoria;
        }

        return view($this->data["ruta"] .".index")->with($this->data);
    }
    

}
