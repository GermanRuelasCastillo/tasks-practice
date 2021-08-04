<?php

namespace App\Http\Controllers;

use App\Invoice;
use App\Libs\TableService;
use App\Product;
use Illuminate\Http\Request;

class Desafio1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modulo = 'Desafio 1';
        $invoices = Invoice::paginate(10);
        return view('desafio1.index',compact('modulo','invoices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if($id == 'cantidad'){
            $result = Invoice::with('productos')->whereHas('productos',function($query) {
                return $query->where('quantity','>',100) ;
            })->get();
        }else{
            $result = Product::whereRaw('quantity*price > 1000000')->get();
        }
        $manejador = new TableService();
        return response()->json([
            'success' => true,
            'result' => $id == 'cantidad' ? $manejador->invoices($result) : $manejador->products($result)
        ]);
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
