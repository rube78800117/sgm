<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Config;
class ConfigSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {

    Config::create([
      'activ_register' => '0'


    ]);
  }
}

