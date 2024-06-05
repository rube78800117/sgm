<?php

namespace Database\Seeders;

use App\Models\Job_title;
use App\Models\Profession;
use Illuminate\Database\Seeder;

class Job_titleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        Job_title::create([

            'name'=>'Tecnico Eléctrico Junior',
            'description'=>'Encargado del mantenimiento de todo el sistema electromecánico',
            'profession_id'=>Profession::all()->random()->id,
      
        ]);
        Job_title::create([
            'name'=>'Tecnico Mecánico Junior',
            'description'=>'Encargado del mantenimiento de todo el sistema electromecánico',
            'profession_id'=>Profession::all()->random()->id,
       
        ]);
        Job_title::create([

            'name'=>'Tecnico Eléctrico Senior',
            'description'=>'Encargado del mantenimiento de todo el sistema electromecánico',
            'profession_id'=>Profession::all()->random()->id,
      
        ]);
        Job_title::create([
            'name'=>'Tecnico Mecánico Senior',
            'description'=>'Encargado del mantenimiento de todo el sistema electromecánico',
            'profession_id'=>Profession::all()->random()->id,
       
        ]);
        Job_title::create([

            'name'=>'Supervisor Electrico',
            'description'=>'Supervisor encargado del mantenimiento de todo el sistema electromecánico',
            'profession_id'=>Profession::all()->random()->id,
      
        ]);
        Job_title::create([
            'name'=>'Supervisor Mecánico',
            'description'=>'Supervisor encargado del mantenimiento de todo el sistema electromecánico',
            'profession_id'=>Profession::all()->random()->id,
       
        ]);
        Job_title::create([
            'name'=>'Jefe Mantenimiento de Linea',
            'description'=>'Jefe encargado del mantenimiento de todo el sistema electromecánico ',
            'profession_id'=>Profession::all()->random()->id,
       
        ]);
        Job_title::create([

            'name'=>'Otro',
            'description'=>'Encargado del mantenimiento de todo el sistema electromecánico',
            'profession_id'=>Profession::all()->random()->id,
      
        ]);
    }
}
