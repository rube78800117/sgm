<?php

namespace Database\Seeders;

use App\Models\Profession;
use Illuminate\Database\Seeder;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Profession::create([
            'name'=>'Electromicanico',
            'description'=>'Ingeniero',
      
        ]);
        Profession::create([
            'name'=>'Mecanico',
            'description'=>'Ingeniero',
       
        ]);
        Profession::create([
            'name'=>'Electrico',
            'description'=>'Ingeniero',
        
        ]);
    }
}
