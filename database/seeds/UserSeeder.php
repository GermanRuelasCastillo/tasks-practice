<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contador = 20;
        // Crearemos 20 usuarios aleatorios para las pruebas
        for ($i=0; $i < $contador; $i++) {
            User::create([
                'name' => 'User-'.$i,
                'email' => 'user-'.$i.'@gmail.com',
                'password' => bcrypt('12345678')
            ]);
        }
    }
}
