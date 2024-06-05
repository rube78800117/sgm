<?php

namespace Database\Seeders;

use App\Models\Parameter;
use Illuminate\Database\Seeder;

class ParameterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
               // Crear grupos
               $group1 = Parameter::create(['name' => 'ACCESORIOS', 'type' => 'grupo']);
               $group2 = Parameter::create(['name' => 'EQUIPOS DE PROTECCION PERSONAL (EPP\'S)', 'type' => 'grupo']);
               $group3 = Parameter::create(['name' => 'HERRAMIENTAS', 'type' => 'grupo']);
               $group4 = Parameter::create(['name' => 'INSUMOS', 'type' => 'grupo']);
               $group5 = Parameter::create(['name' => 'LUBRICANTES', 'type' => 'grupo']);
               $group6 = Parameter::create(['name' => 'REPUESTOS', 'type' => 'grupo']);
       
               // Crear subgrupos
               $subgroup1 = Parameter::create(['name' => 'PARA IZAJE', 'type' => 'subgrupo', 'parent_id' => $group1->id]);
               $subgroup2 = Parameter::create(['name' => 'PARA SEGURIDAD', 'type' => 'subgrupo', 'parent_id' => $group1->id]);
               $subgroup3 = Parameter::create(['name' => 'ELECTRICOS', 'type' => 'subgrupo', 'parent_id' => $group1->id]);
               $subgroup4 = Parameter::create(['name' => 'OTROS', 'type' => 'subgrupo', 'parent_id' => $group1->id]);
               $subgroup5 = Parameter::create(['name' => 'MECANICOS', 'type' => 'subgrupo', 'parent_id' => $group1->id]);
               $subgroup6 = Parameter::create(['name' => 'ELECTRONICOS', 'type' => 'subgrupo', 'parent_id' => $group1->id]);
       
               $subgroup7 = Parameter::create(['name' => 'PROTECCION RESPIRATORIA', 'type' => 'subgrupo', 'parent_id' => $group2->id]);
               $subgroup8 = Parameter::create(['name' => 'PROTECCION AUDITIVA', 'type' => 'subgrupo', 'parent_id' => $group2->id]);
               $subgroup9 = Parameter::create(['name' => 'PROTECCION DE PIES Y PIERNAS', 'type' => 'subgrupo', 'parent_id' => $group2->id]);
               $subgroup10 = Parameter::create(['name' => 'PROTECCION DE LA CABEZA (CRANEO)', 'type' => 'subgrupo', 'parent_id' => $group2->id]);
               $subgroup11 = Parameter::create(['name' => 'PROTECCION DE MANOS Y BRAZOS', 'type' => 'subgrupo', 'parent_id' => $group2->id]);
               $subgroup12 = Parameter::create(['name' => 'PROTECCION PARA TRABAJOS EN ALTURA', 'type' => 'subgrupo', 'parent_id' => $group2->id]);
               $subgroup13 = Parameter::create(['name' => 'PROTECCION DE OJOS Y CARA', 'type' => 'subgrupo', 'parent_id' => $group2->id]);
               $subgroup14 = Parameter::create(['name' => 'PROTECCION CORPORAL Y FRONTAL', 'type' => 'subgrupo', 'parent_id' => $group2->id]);
       
               $subgroup15 = Parameter::create(['name' => 'INSTRUMENTOS DE MEDICION', 'type' => 'subgrupo', 'parent_id' => $group3->id]);
               $subgroup16 = Parameter::create(['name' => 'OTROS', 'type' => 'subgrupo', 'parent_id' => $group3->id]);
               $subgroup17 = Parameter::create(['name' => 'IZAJE', 'type' => 'subgrupo', 'parent_id' => $group3->id]);
               $subgroup18 = Parameter::create(['name' => 'HIDRAULICAS', 'type' => 'subgrupo', 'parent_id' => $group3->id]);
               $subgroup19 = Parameter::create(['name' => 'NEUMATICAS', 'type' => 'subgrupo', 'parent_id' => $group3->id]);
               $subgroup20 = Parameter::create(['name' => 'ESPECIALES', 'type' => 'subgrupo', 'parent_id' => $group3->id]);
               $subgroup21 = Parameter::create(['name' => 'ELECTRICAS', 'type' => 'subgrupo', 'parent_id' => $group3->id]);
               $subgroup22 = Parameter::create(['name' => 'MECANICAS', 'type' => 'subgrupo', 'parent_id' => $group3->id]);
       
               $subgroup23 = Parameter::create(['name' => 'MATERIAL DE LIMPIEZA', 'type' => 'subgrupo', 'parent_id' => $group4->id]);
               $subgroup24 = Parameter::create(['name' => 'ELECTRONICO', 'type' => 'subgrupo', 'parent_id' => $group4->id]);
               $subgroup25 = Parameter::create(['name' => 'ELECTRICO', 'type' => 'subgrupo', 'parent_id' => $group4->id]);
               $subgroup26 = Parameter::create(['name' => 'QUIMICO', 'type' => 'subgrupo', 'parent_id' => $group4->id]);
               $subgroup27 = Parameter::create(['name' => 'OTROS', 'type' => 'subgrupo', 'parent_id' => $group4->id]);
               $subgroup28 = Parameter::create(['name' => 'PLASTICOS', 'type' => 'subgrupo', 'parent_id' => $group4->id]);
               $subgroup29 = Parameter::create(['name' => 'MECANICO', 'type' => 'subgrupo', 'parent_id' => $group4->id]);
       
               $subgroup30 = Parameter::create(['name' => 'ACEITES', 'type' => 'subgrupo', 'parent_id' => $group5->id]);
               $subgroup31 = Parameter::create(['name' => 'GRASAS', 'type' => 'subgrupo', 'parent_id' => $group5->id]);
               $subgroup32 = Parameter::create(['name' => 'OTROS', 'type' => 'subgrupo', 'parent_id' => $group5->id]);
       
               $subgroup33 = Parameter::create(['name' => 'HIDRAULICOS', 'type' => 'subgrupo', 'parent_id' => $group6->id]);
               $subgroup34 = Parameter::create(['name' => 'OTROS', 'type' => 'subgrupo', 'parent_id' => $group6->id]);
               $subgroup35 = Parameter::create(['name' => 'ELECTRICOS', 'type' => 'subgrupo', 'parent_id' => $group6->id]);
               $subgroup36 = Parameter::create(['name' => 'ESPECIALES', 'type' => 'subgrupo', 'parent_id' => $group6->id]);
               $subgroup37 = Parameter::create(['name' => 'ELECTRONICOS', 'type' => 'subgrupo', 'parent_id' => $group6->id]);
               $subgroup38 = Parameter::create(['name' => 'MECANICOS', 'type' => 'subgrupo', 'parent_id' => $group6->id]);
       






        Parameter::create(['name' => 'Combustibles y Lubricantes', 'type' => 'partida_presupuestaria', 'code_item' => '34110']);
        Parameter::create(['name' => 'Productos Químicos', 'type' => 'partida_presupuestaria', 'code_item' => '34200']);
        Parameter::create(['name' => 'Llantas y Neumáticos', 'type' => 'partida_presupuestaria', 'code_item' => '34300']);
        Parameter::create(['name' => 'Herramientas Menores', 'type' => 'partida_presupuestaria', 'code_item' => '34800']);
        Parameter::create(['name' => 'Material de Limpieza', 'type' => 'partida_presupuestaria', 'code_item' => '39100']);
        Parameter::create(['name' => 'Repuestos y Accesorios Eléctricos', 'type' => 'partida_presupuestaria', 'code_item' => '39700']);
        Parameter::create(['name' => 'Repuestos y Accesorios Mecánicos', 'type' => 'partida_presupuestaria', 'code_item' => '39800']);
        Parameter::create(['name' => 'Otra Maquinaria y Equipo', 'type' => 'partida_presupuestaria', 'code_item' => '43700']);
        Parameter::create(['name' => 'Productos metálicos, tubos, planchas', 'type' => 'partida_presupuestaria', 'code_item' => '34600']);
        Parameter::create(['name' => 'Productos de Minerales no Metálicos y Plásticos', 'type' => 'partida_presupuestaria', 'code_item' => '34500']);


    }
}
