<?php

namespace Database\Seeders;

use App\Models\Station;
use Illuminate\Database\Seeder;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Station::create([
            'name'=>'Estacion San Jorge',
            'slug'=>'estacion-san-jorge',
            'Line_id'=>'1',
          ]);
        Station::create([
            'name'=>'Estacion Triangular',
            'slug'=>'estacion-triangular',
            'Line_id'=>'1',
                   
        ]);
        Station::create([
            'name'=>'Estacion Busch LBL',
            'slug'=>'estacion-busch-lbl',
            'Line_id'=>'1',
                   
        ]);
        Station::create([
            'name'=>'Estacion Villarroel',
            'slug'=>'estacion-villarroel',
            'Line_id'=>'1',
                   
        ]);
        Station::create([
            'name'=>'Estacion Libertador',
            'slug'=>'estacion-libertador',
            
            'Line_id'=>'2',
                   
        ]);
        Station::create([
            'name'=>'Estacion Poeta, San Jorge',
            'slug'=>'estacion-san-jorge',
            'Line_id'=>'2',
                   
        ]);
        Station::create([
            'name'=>'Teatro, Cancha Zapata',
            'slug'=>'estacion-cancha-zapata',
            'Line_id'=>'2',
                   
        ]);
        Station::create([
            'name'=>'Estacion Prado',
            'slug'=>'estacion-prado',
            'Line_id'=>'2',
                   
        ]);
        Station::create([
            'name'=>'Estacion Busch LCA',
            'slug'=>'estacion-busch-lca',
            'Line_id'=>'3',
                   
        ]);
        Station::create([
            'name'=>'Estacion Villas',
            'slug'=>'estacion-villas',
            'Line_id'=>'3',
                   
        ]);

       // Station::factory(10)->create();
    }
    
}
