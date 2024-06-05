<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Type;
class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        type::create([
          'name'=>'Clase A',
          'description'=>'clase de insumo o repuesto que requiere autorizacion expresa de su superior para su uso',
                  
          ]);

        type::create([
          'name'=>'Clase B',
          'description'=>'clase de insumo o repuesto que NO requiere autorizacion inmediata para su uso',
                  
                        
          ]);
     //
    }
}
