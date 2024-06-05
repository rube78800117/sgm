<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   // elimina y vuelve a crear la carpeta-> articles
        //Storage::deleteDirectory('articles');
        // Storage::makeDirectory('articles');
 $this->Call(DepartmentSeeder::class);
       
 
 //importa a los seeder creados 
        $this->Call(ZoneSeeder::class);
        $this->Call(ProfessionSeeder::class);
        $this->Call(Job_titleSeeder::class);
         $this->Call(LineSeeder::class);
        $this->Call(UserSeeder::class);
        $this->Call(TrademarkSeeder::class);
        $this->Call(UnitSeeder::class);
    //    department 
        $this->Call(CategorySeeder::class);
       
        
        
        $this->Call(TypeSeeder::class);
        // $this->Call(ArticleSeeder::class);
        
        $this->Call(type_voucherSeeder::class);
        //$this-> Call(Article_reviewSeeder::class);
        // //$this-> Call(ExistenceSeeder::class); 
        // $this-> Call(ArticleWarehouseSeeder::class);
        $this-> Call(StateSeeder::class);
        // $this-> Call(AreaSeeder::class);
         $this->Call(VendorSeeder::class);

        //  \App\Models\User::factory(50)->create();
         $this->Call(ConfigSeeder::class);
         $this->Call(StationSeeder::class);
         $this->Call(WarehouseSeeder::class);
         $this->Call(SectorSeeder::class);
         $this->Call(LocationSeeder::class);
    }
}
