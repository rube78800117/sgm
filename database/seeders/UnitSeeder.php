<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Unit;
class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   

        $UNIT_OF_MEASUREMENT=[
            'UNIDAD',
            'BOLSA',            
            'ROLLO',
            'GALON',
            'BOLSA',            
            'ROLLO',
            'BARRA',
            'PAR',
            'SET',
            'TAMBOR',
            'TURRIL',
            'BIDON',
            'BARRIL',
            'BALDE',
            'LITRO',
            'KILOGRAMO',
            'BOTE',
            'LATA',
            'CARTUCHO',
            'LAMINA',
            'PAQUETE',
            'PACK',
            'FRASCO',
            'KIT',
            'CAJA',
            'HOJA'

        ];



        foreach ($UNIT_OF_MEASUREMENT as $unidad) {
         Unit::create([
           
          'name' => $unidad,
        ]);
        }

   
      
    }
}
