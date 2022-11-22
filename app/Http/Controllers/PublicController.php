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
    
    public function about(Request $request){
        $this->data["title"] = 'Nosotros';
        $this->data["description"] = $this->data["marca"];

        return view($this->data["ruta"] .".nosotros")->with($this->data);
    }

    public function menu(Request $request){
        $this->data["title"] = 'Carta';
        $this->data["description"] = $this->data["marca"];
        $this->data["categorias"] = Categoria::where('estado', 'A')->get();
        
        foreach ($this->data["categorias"] as $key => $value) {
            $productos = Producto::where('categoria_id', $value['id'])->orderBy('precio','desc')->get();
            $this->data["categorias"][$key]['productos'] = $productos;
        }
        
        return view($this->data["ruta"] .".carta")->with($this->data);
    }

    public function promotions(Request $request){
        $this->data["title"] = 'Promociones';
        $this->data["description"] = $this->data["marca"];
        $this->data["productos"] = Producto::where('categoria_id', 16)->orderBy('precio','desc')->get();
        foreach ($this->data["productos"] as $key => $value) {
            $categoria = Categoria::find($value['categoria_id']);
            $this->data["productos"][$key]['categoria'] = $categoria;
        }
        return view($this->data["ruta"] .".promociones")->with($this->data);
    }

    public function gallery(Request $request){
        $this->data["title"] = 'Galeria';
        $this->data["description"] = $this->data["marca"];

        return view($this->data["ruta"] .".galeria")->with($this->data);
    }

    public function contact(Request $request){
        $this->data["title"] = 'Contacto';
        $this->data["description"] = $this->data["marca"];

        return view($this->data["ruta"] .".contacto")->with($this->data);
    }
}
