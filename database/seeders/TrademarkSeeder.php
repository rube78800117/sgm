<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Trademark;
class TrademarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        trademark::create([
            'name'=>'Mobil',
            
        ]);
        trademark::create([
            'name'=>'Pilz',
           
        ]);
        trademark::create([
            'name'=>'Doppelmayr',
           
        ]);
    }
}
