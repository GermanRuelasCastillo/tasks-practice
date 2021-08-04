<?php

use App\Invoice;
use App\Product;
use App\User;
use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contador = 20;
        // Crearemos 20 facturas aleatorias
        for ($i=0; $i < $contador; $i++) {
            // Seleccionaremos un usuario random para asignar a la factura
            $usuario = User::inRandomOrder()->first();
            $invoice = Invoice::create([
                'user_id' => $usuario->id,
                'type' => 'VENTA'
            ]);
            // declararemos un numero random del 1 al 5 para generar aleatoriamente los productos de cada factura
            $randomNumber = rand(1,5);
            for ($j=0; $j < $randomNumber; $j++) {
                Product::create([
                    'invoice_id' => $invoice->id,
                    'name' => 'Producto-'.$i.'.'.$j,
                    'quantity' => rand(1,120),
                    'price' => rand(10000,40000)
                ]);
            }

        }
    }
}
