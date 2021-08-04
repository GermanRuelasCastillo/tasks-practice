<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = ['user_id','type','seller_id'];

    public function productos(){
        return $this->hasMany(Product::class,'invoice_id','id');
    }

    public function cantidad($id){
        $quantity = 0;
        Product::where('invoice_id', $id)->each(function($p) use (&$quantity) {
            $quantity +=  $p->quantity;
        });
        return $quantity;
    }

    public function total($id){
        $price = 0;
        Product::where('invoice_id', $id)->each(function($p) use (&$price) {
            $price += $p->price * $p->quantity;
        });
        return '$'.number_format($price,2);
    }
}
