<?php

use Illuminate\Database\Seeder;
use App\Producto;
use App\Marca;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $productos = factory(Producto::class)->times(50)->create();
        $marcas = factory(Marca::class)->time(10)->create();
        
        foreach($marcas as $marca){
            $marca->productos()->saveMany($productos->random(5));
        }
    }
}
