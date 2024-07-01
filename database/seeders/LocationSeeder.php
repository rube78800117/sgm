<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Location;
class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Location::create([
            'name'=>'Columna 1 Nivel A',
            'sector_id' => 1,
            
                   
        ]);
        Location::create([
            'name'=>'Columna 1 Nivel B',
            'sector_id' => 2,
                   
        ]);
        Location::create([
            'name'=>'Columna 1 Nivel C',
            'sector_id' => 3,
                   
        ]);
 
    
    }
}
