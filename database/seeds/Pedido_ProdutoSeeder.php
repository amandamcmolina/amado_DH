<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Pedido_ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 15 ; $i++) { 
            DB::table('pedidos_produtos')->insert([
                'produto_id' => rand(1,10),
                'pedido_id' => rand(1,10)
            ]);
        }
    }
}
