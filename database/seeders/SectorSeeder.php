<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sector;
class SectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Sector::create([
            'name'=>'Estante 1',
            
                   
        ]);
        Sector::create([
            'name'=>'Estante 2',
            
                   
        ]);
        Sector::create([
            'name'=>'Estante 3',
            
                   
        ]);
        Sector::create([
            'name'=>'Estante 4',
            
                   
        ]);   Sector::create([
            'name'=>'Estante 5',
            
                   
        ]);   Sector::create([
            'name'=>'Estante 6',
            
                   
        ]);   Sector::create([
            'name'=>'Estante 7',
            
                   
        ]);   Sector::create([
            'name'=>'Estante 8',
            
                   
        ]);   Sector::create([
            'name'=>'Estante 9',
            
                   
        ]);   Sector::create([
            'name'=>'Estante 10',
            
                   
        ]);
    }
}
