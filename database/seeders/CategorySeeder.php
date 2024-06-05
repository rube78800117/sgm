<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Department;
use Illuminate\Support\Str;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'REPUESTOS' => [
                'REPUESTOS - HIDRAULICOS',
                'REPUESTOS - OTROS',
                'REPUESTOS - ELECTRICOS',
                'REPUESTOS - ESPECIALES',
                'REPUESTOS - ELECTRONICOS',
                'REPUESTOS - MECANICOS',
                'REPUESTOS - MECANICOS PINZAS',
                'REPUESTOS - MECANICOS CABINAS',
                'REPUESTOS - MECANICOS LINEA',
                'REPUESTOS - MECANICOS ESTACIONES',
            ],
            'INSUMOS' => [
                'INSUMOS - MATERIAL DE LIMPIEZA',
                'INSUMOS - ELECTRONICO',
                'INSUMOS - ELECTRICO',
                'INSUMOS - QUIMICO',
                'INSUMOS - OTROS',
                'INSUMOS - PLASTICOS',
                'INSUMOS - MECANICO',
            ],
            
            'LUBRICANTES' => [
                'LUBRICANTES - ACEITES',
                'LUBRICANTES - GRASAS',
                'LUBRICANTES - OTROS',
            ],
            'ACCESORIOS' => [
                'ACCESORIOS - PARA IZAJE',
                'ACCESORIOS - PARA SEGURIDAD',
                'ACCESORIOS - ELECTRICOS',
                'ACCESORIOS - OTROS',
                'ACCESORIOS - MECANICOS',
                'ACCESORIOS - ELECTRONICOS',
            ],
            'EQUIPOS DE PROTECCION PERSONAL (EPPs)' => [
                'EPP - PROTECCION RESPIRATORIA',
                'EPP - PROTECCION AUDITIVA',
                'EPP - PROTECCION DE PIES Y PIERNAS',
                'EPP - PROTECCION DE LA CABEZA (CRANEO)',
                'EPP - PROTECCION DE MANOS Y BRAZOS',
                'EPP - PROTECCION PARA TRABAJOS EN ALTURA',
                'EPP - PROTECCION DE OJOS Y CARA',
                'EPP - PROTECCION CORPORAL Y FRONTAL',
                'EPP - OTROS',
            ],
            'HERRAMIENTAS' => [
                'HERRAMIENTAS - INSTRUMENTOS DE MEDICION',
                'HERRAMIENTAS - OTROS',
                'HERRAMIENTAS - IZAJE',
                'HERRAMIENTAS - HIDRAULICAS',
                'HERRAMIENTAS - NEUMATICAS',
                'HERRAMIENTAS - ESPECIALES',
                'HERRAMIENTAS - ELECTRICAS',
                'HERRAMIENTAS - MECANICAS',
            ],
            'ROPA DE TRABAJO' => [
                'ROPA DE TRABAJO - OTROS',
             
            ],

            'VARIOS' => [
                'VARIOS',
             
            ],
       
       
        ];

        foreach ($data as $departmentName => $categories) {
            // Find the department by name
            $department = Department::where('name', $departmentName)->first();

            if ($department) {
                foreach ($categories as $categoryName) {
                    Category::create([
                        'name' => $categoryName,
                        'department_id' => $department->id,
                        'slug' => Str::slug($categoryName),
                    ]);
                }
            }
        }


        // Category::factory(50)->create();
    }
}
