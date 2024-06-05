<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Existence;

class ExistenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Existence::factory(100)->create();
    }
}
