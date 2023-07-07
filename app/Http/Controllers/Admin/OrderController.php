<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Pedido;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedido::latest()->get();

        $pedidos = Pedido::select('pedidos.id', 'pedido_code', 'cliente', 'hora', 'fecha', 'peso', 'total', 'id_category', 'category_name')
            ->join('categories', 'categories.id', '=', 'pedidos.id_category')->get();

        return view('admin.orden.index', compact('pedidos'));
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Pedido::latest()->get();

        $categories = Category::latest()->get();

        return view('admin.orden.createorden', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $number = mt_rand(100, 999);

        if ($this->pedidoCodeExists($number)) {
            $number = mt_rand(100, 999);
        }

        $request['pedido_code'] = $number;
        
        Pedido::create($request->all());

        return redirect()->route('ordenIndex')->with('message', 'Pedido Agregado con Éxito');
    }

    public function pedidoCodeExists($number)
    {
        return Pedido::wherePedidoCode($number)->exists();

        return redirect()->route('ordenIndex');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Show(int $id)
    {
        $verpedido = Pedido::where('id', '=', $id)->first();
    
        return view('admin.orden.orderdetalle', compact('verpedido'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
