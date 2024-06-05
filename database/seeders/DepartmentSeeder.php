<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Image;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Department::create([
        //     'name'=>'Mecánico Pinzas',
        //     'slug'=>'mecanico-pinzas',
            
                   
        // ]);
        // Department::create([
        //     'name'=>'Mecánico Cabinas',
        //     'slug'=>'mecanico-cabinas',
                   
        // ]);
        // Department::create([
        //     'name'=>'Mecanico Linea',
        //     'slug'=>'mecanico-linea',
                   
        // ]);
        // Department::create([
        //     'name'=>'Mecánico Estaciones',
        //     'slug'=>'mecanico-estaciones',
                   
        // ]);
        //  Department::create([
        //     'name'=>'Hidraúlico',
        //     'slug'=>'hidraulico',
                   
        // ]);
        // Department::create([
        //     'name'=>'Eléctrico',
        //     'slug'=>'electrico',
                   
        // ]);
        // Department::create([
        //     'name'=>'Insumos',
        //     'slug'=>'insumos',
                   
        // ]);


        // Department::create([
        //     'name'=>'Lubricantes',
        //     'slug'=>'Lubricantes',
                   
        // ]);

        // Department::create([
        //     'name'=>'Herramientas',
        //     'slug'=>'Herramientas',
                   
        // ]);

        // Department::create([
        //     'name'=>'Equipos de proteccion personal (EPPs)',
        //     'slug'=>'equipos-de-proteccion-personal',
                   
        // ]);
        // Department::create([
        //     'name'=>'Accesorios',
        //     'slug'=>'accesorios',
                   
        // ]);

        $departments = [
            'HERRAMIENTAS',
            'REPUESTOS',
            'LUBRICANTES',
            'EQUIPOS DE PROTECCION PERSONAL (EPPs)',
            'ROPA DE TRABAJO',
            'INSUMOS',
            'ACCESORIOS',
            'VARIOS'
            
                     
                                  
        ];

        foreach ($departments as $department) {
            Department::create([
                'name' => $department,
                'slug' => Str::slug($department),
            ]);
        }



                $departments= Department::all();
                       
                $conta = 1;
                // Descarga de imagenes para Departamentos o categorias principales
              foreach($departments as $department){
                 



                // image::factory(1)->create([    descarga imagenes faker y crea un registro en la tabla images
                image::create([         // solo crea un registro en la tabla images
                    'imageable_id'=>$department->id,
                    'imageable_type'=>'App\Models\Department',
                    'url'=> 'categories/'.$conta++.'.png',

                ]); 
            }
    }
}
