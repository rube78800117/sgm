<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    //
    public function run()
    {


        $role = Role::create(['name' => 'admin']);


        User::create([
            'name' => 'Ruben Q',
            'email' => 'rube78800117@gmail.com',
            'password' => bcrypt('12345678'),
            'line_id'=> 1,
            'state' => 'Activo',
            'job_title_id' => 1,
        ])->assignRole('admin');
        User::create([
            'name' => 'User',
            'email' => 'mantto@gmail.com',
            'password' => bcrypt('Sistemas0.,'),
            'line_id'=> 1,
            'state' => 'Activo',
            'job_title_id' => 1,
        ]);
        // User::factory(10)->create();
    }
}

