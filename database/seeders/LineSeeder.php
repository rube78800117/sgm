<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Line;
class LineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Line::create([
            'name'=>'LINEA BLANCA',
            'acronym'=>'LBL',
            'color'=>'black',
            'slug'=>'linea_blanca',
            'zone_id'=>'3',
            

           // 'created_at' => date('Y-m-d H:m:s'),
           //'updated_at' => date('Y-m-d H:m:s')
        ]);
        Line::create([
            'name'=>'LINEA CELESTE',
            'acronym'=>'LCE',
            'color'=>'indigo-300',
            'slug'=>'linea_celeste',
            'zone_id'=>'3',
           // 'created_at' => date('Y-m-d H:m:s'),
           //'updated_at' => date('Y-m-d H:m:s')
        ]);
        Line::create([
            'name'=>'LINEA CAFE',
            'acronym'=>'LCA',
            'color'=>'yellow-800',
            'slug'=>'linea_cafe',
            'zone_id'=>'3',
            //'created_at' => date('Y-m-d H:m:s'),
            //'updated_at' => date('Y-m-d H:m:s')
        ]);
      
    }
}
