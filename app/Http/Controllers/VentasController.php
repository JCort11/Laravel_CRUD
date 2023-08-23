<?php

namespace App\Http\Controllers;

use App\Models\Ventas;
use Illuminate\Http\Request;

class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas = Ventas::all();
        return $ventas;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ventas = new Ventas;
        $ventas->vendedor = $request->vendedor;
        $ventas->cantidad = $request->cantidad;
        $ventas->total = $request->total;
        $ventas->articulo_id = $request->articulo_id;
        $ventas->status = $request->status;

        if($ventas != null){
            $ventas->save();
            return $ventas;
        } else{
            return 'Error al efectuar la venta, complete todos los campos';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $ventas = Ventas::findorFail($id);
        $ventas->vendedor = $request->vendedor;
        $ventas->cantidad = $request->cantidad;
        $ventas->total = $request->total;
        $ventas->articulo_id = $request->articulo_id;
        $ventas->status = $request->status;

        $ventas->save();
        return "The sale has been updated successfully";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ventas::destroy($id);
        return "The sale has been deleted successfully";
    }
}
