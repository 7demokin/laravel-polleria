<?php

namespace App\Http\Controllers;

use App\Models\Informacion;
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
        return view($this->data["ruta"] .".index")->with($this->data);
    }
    

}
