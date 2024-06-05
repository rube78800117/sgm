<?php

namespace Database\Seeders;

use App\Models\Type_voucher;
use Illuminate\Database\Seeder;

class Type_voucherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type_voucher::create([
            'name'=>'Factura'
       
        ]);
        Type_voucher::create([
            'name'=>'Recibo'
 
        ]);
        Type_voucher::create([
            'name'=>'Nota'
      
        ]);
    }
}
