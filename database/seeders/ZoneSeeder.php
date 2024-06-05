<?php

namespace Database\Seeders;

use App\Models\Zone;
use Illuminate\Database\Seeder;

class ZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Zone::create([
            'name'=>'ZONA 1',
            'description'=>'zona 1',
        ]);
        Zone::create([
            'name'=>'ZONA 2',
            'description'=>'zona 2',
        ]);
        Zone::create([
            'name'=>'ZONA 3',
            'description'=>'zona 3',
        ]);
        Zone::create([
            'name'=>'ZONA 4',
            'description'=>'zona 4',
        ]);
        Zone::create([
            'name'=>'ZONA 5',
            'description'=>'zona 5',
        ]);
    }
}
