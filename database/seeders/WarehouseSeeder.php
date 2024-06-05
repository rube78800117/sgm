<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Warehouse;
class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Warehouse::create([
        //         'name'=>'CENTRAL DE ZONA',
        //       'description'=>'Lado Sala de Motores',
        //       'warehouse_category'=>'1',  
        //       'slug'=>'central-de-zona',  
        //       'station_id'=>'4',  

                   
        // ]);
        // Warehouse::create([
        //     'name'=>'LBL  VILLARRUEL  ALMACEN 1',
        //      'description'=>'Garage de Cabinas',
        //      'warehouse_category'=>'3',
        //      'slug'=>'lbl-villarruel-almacen-1',  
        //      'station_id'=>'4',    
        // ]);
        Warehouse::create([
            'name'=>'LBL SAN JORGE ALMACEN 1',
             'description'=>'Garage de Cabinas',
             'warehouse_category'=>'3',
             'slug'=>'lbl-san-jorge-almacen-1',  
             'station_id'=>'1',  
                   
        ]);

        Warehouse::create([
            'name'=>'LCE LIBERTADOR ALMACEN 1',
             'description'=>'Garaje de cabinas',
             'warehouse_category'=>'3',     
             'slug'=>'lce-libertador-almacen-1',  
             'station_id'=>'5',  
                   
        ]);
        Warehouse::create([
            'name'=>'LCA VILLAS ALMACEN 1',
             'description'=>'Area ..',
             'warehouse_category'=>'3',      
             'slug'=>'lca-villas-almacen-1',  
             'station_id'=>'10',  
                   
        ]);
       
        //
        //No such file or directory
    }
}
