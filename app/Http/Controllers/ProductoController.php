<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index(){
        //return view('admin/index');
        //$producto=Producto::all();
        $producto=Producto::where('state','1')->orderBy('id','desc')->paginate(3);
        return view('admin/index')->with('productop',$producto);
    }
    //create
    public function create(){
        return view('admin/producto/create');
    }
    //store - guardar datos creados del formulario
    public function store(Request $request){
        //dd($request);
        $producto=new Producto($request->all());
        $producto->save();
        return redirect()->route('productos.index');//ruta productos y funcion index 
    }
}
