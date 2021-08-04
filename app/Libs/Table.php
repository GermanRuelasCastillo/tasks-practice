<?php

namespace App\Libs;

class TableService{

    public function products($products)
	{
        $tabla = '';
        foreach($products as $key => $product)
        {
            $price = '<td>$'.number_format($product->price,2).'</td>';
            $productos_incluidos = '<td>'.($product->name).'</td>';
            $cantidad = '<td>'.$product->quantity.'</td>';
            $total = '<td>$'.number_format($product->price * $product->quantity,2).'</td>';
            $tabla .= '<tr>'.$productos_incluidos.$cantidad.$price.$total.'</tr>';
        }
		return $tabla;
	}

    public function invoices($invoices)
	{
        $table = '';
        foreach($invoices as $invoice)
        {
            $i = '<td>FA-'.$invoice->id.'</td>';
            $productos_incluidos = '<td>'.count($invoice->productos).'</td>';
            $quantity = '<td>'.$invoice->cantidad($invoice->id).'</td>';
            $total = '<td>'.$invoice->total($invoice->id).'</td>';
            $table .= '<tr>'.$i.$productos_incluidos.$quantity.$total.'</tr>';
        }
		return $table;
	}

    public function logs($logs){
        $table = '';
        foreach($logs as $log)
        {
            $user = '<td>'.$log->task->user->name.'</td>';
            $description = '<td>'.$log->description.'</td>';
            $date = '<td>'.$log->created_at->format('Y-m-d').'</td>';
            $table .= '<tr>'.$user.$description.$date.'</tr>';
        }
		return $table;
    }
}
