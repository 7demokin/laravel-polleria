<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Categoria;
use App\Models\Informacion;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;

class PublicController extends Controller
{
    private $data = array();
    private $info;
    private $tools;

    public function __construct()
    {
        $this->info = Informacion::find('1');
        $this->data["marca"] = $this->info->marca;
        $this->data["logo"] =  $this->info->logo;
        $this->data["ruta"] = "user";
        $this->tools = new ToolsController();
    }

    public function index(Request $request)
    {
        $this->data["title"] = $this->data["marca"];
        $this->data["description"] = $this->data["marca"];

        $this->data["productos"] = Producto::where('estado', 'A')->orderBy('precio', 'desc')->take(6)->get();

        foreach ($this->data["productos"] as $key => $value) {
            $categoria = Categoria::find($value['categoria_id']);
            $this->data["productos"][$key]['categoria'] = $categoria;
        }

        return view($this->data["ruta"] . ".index")->with($this->data);
    }

    public function about(Request $request)
    {
        $this->data["title"] = 'Nosotros';
        $this->data["description"] = $this->data["marca"];

        return view($this->data["ruta"] . ".nosotros")->with($this->data);
    }

    public function menu(Request $request)
    {
        $this->data["title"] = 'Carta';
        $this->data["description"] = $this->data["marca"];
        $this->data["categorias"] = Categoria::where('estado', 'A')->get();

        foreach ($this->data["categorias"] as $key => $value) {
            $productos = Producto::where('estado', 'A')->where('categoria_id', $value['id'])->orderBy('precio', 'desc')->get();
            $this->data["categorias"][$key]['productos'] = $productos;
        }

        return view($this->data["ruta"] . ".carta")->with($this->data);
    }

    public function promotions(Request $request)
    {
        $this->data["title"] = 'Promociones';
        $this->data["description"] = $this->data["marca"];
        $this->data["productos"] = Producto::where('estado', 'A')->where('categoria_id', 16)->orderBy('precio', 'desc')->get();
        foreach ($this->data["productos"] as $key => $value) {
            $categoria = Categoria::find($value['categoria_id']);
            $this->data["productos"][$key]['categoria'] = $categoria;
        }
        return view($this->data["ruta"] . ".promociones")->with($this->data);
    }

    public function gallery(Request $request)
    {
        $this->data["title"] = 'Galeria';
        $this->data["description"] = $this->data["marca"];

        return view($this->data["ruta"] . ".galeria")->with($this->data);
    }

    public function contact(Request $request)
    {
        $this->data["title"] = 'Contacto';
        $this->data["description"] = $this->data["marca"];

        return view($this->data["ruta"] . ".contacto")->with($this->data);
    }

    public function product(Request $request, $id)
    {
        $this->data["productos"] = Producto::where('estado', 'A')->get()->random(3);
        foreach ($this->data["productos"] as $key => $value) {
            $categoria = Categoria::find($value['categoria_id']);
            $this->data["productos"][$key]['categoria'] = $categoria;
        }
        $this->data["producto"] = Producto::where('estado', 'A')->find($id);
        $this->data["producto"]['categoria'] = Categoria::find($this->data["producto"]->categoria_id);
        $this->data["title"] = $this->data["producto"]->nombre;
        $this->data["description"] = $this->data["producto"]->nombre;

        return view($this->data["ruta"] . ".producto")->with($this->data);
    }

    public function cart(Request $request)
    {
        $this->data["title"] = 'Carrito';
        $this->data["description"] = $this->data["marca"];

        if (Auth::user() && Auth::user()->hasRole('cliente')) {
            $this->data['carrito'] = $this->tools->getUserCarrito(Auth::user()->id);
        } else {
            if (session()->has('carrito')) {
                $this->data['carrito'] = session('carrito');
            }
        }
        $this->data['total'] = 0;
        foreach ($this->data['carrito'] as $carrito) {
            $this->data['total'] += $carrito['precio'] * $carrito['cantidad'];
        }

        return view($this->data["ruta"] . ".carrito")->with($this->data);
    }

    public function getCart(Request $request)
    {
        try {
            $data = [];
            if (Auth::user() && Auth::user()->hasRole('cliente')) {
                $data = $this->tools->getUserCarrito(Auth::user()->id);
            } else {
                if (session()->has('carrito')) {
                    $data = session('carrito');
                }
            }
            return $this->tools->getSuccesJsonMessage($data);
        } catch (\Throwable $th) {
            return $$this->tools->getThrowJsonMessage($th);
        }
    }

    public function addCartItem(Request $request)
    {
        try {
            $id = $request->id;
            $item['producto'] = Producto::find($id);
            $item['cantidad'] = $request->cantidad;
            $item['precio'] = $item['producto']['precio'];
            if (Auth::user() && Auth::user()->hasRole('cliente')) {
                $validacion = Carrito::where('usuario_id', Auth::user()->id)->where('producto_id', $id)->first();
                if ($validacion) {
                    $carrito = $validacion;
                    $carrito->cantidad +=  $item['cantidad'];
                    $carrito->precio = $item['producto']['precio'];
                } else {
                    $carrito = new Carrito();
                    $carrito->usuario_id = Auth::user()->id;
                    $carrito->producto_id = $id;
                    $carrito->precio = $item['producto']['precio'];
                    $carrito->cantidad = $item['cantidad'];
                }
                $carrito->save();
                $data = $this->tools->getUserCarrito(Auth::user()->id);
                return $this->tools->getSuccesJsonMessage($data);
            } else {
                if (session()->has('carrito')) {
                    $carrito = session('carrito');
                    $validacion = true;
                    foreach ($carrito as $key => $value) {
                        if ($carrito[$key]['producto']['id'] == $id) {
                            $carrito[$key]['cantidad'] += $item['cantidad'];
                            $carrito[$key]['precio'] = $item['producto']['precio'];
                            session(['carrito' => $carrito]);
                            $validacion = false;
                            break;
                        }
                    }
                    if ($validacion) {
                        array_push($carrito, $item);
                        session(['carrito' => $carrito]);
                    }
                } else {
                    session(['carrito' => [$item]]);
                }
                return $this->tools->getSuccesJsonMessage( session('carrito'));
            }
        } catch (\Throwable $th) {
            return $this->tools->getThrowJsonMessage($th);
        }
    }
}
