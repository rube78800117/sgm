<?php

namespace Database\Seeders;

use App\Models\Vendor;
use Illuminate\Database\Seeder;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vendor::create([
           
            'name_company'=> 'EETC Mi Teleferico',
            'name'=> 'Mi Teleferico ',
            'address'=> 'Est. Central Linea Roja',
            'phone'=> '22179300',
            'company_phone' => '0'

           // 'created_at' => date('Y-m-d H:m:s'),
           //'updated_at' => date('Y-m-d H:m:s')
        ]);


        $VENDORS=[
            [
           
                'name_company'=> 'TELEFERICOS DOPPELMAYR BOLIVIA S.A.',
                'name'=> 'TELEFERICOS DOPPELMAYR BOLIVIA S.A. ',
                'address'=> 'NO',
                'phone'=> '0',
                'company_phone' => '0'
    
               //'created_at' => date('Y-m-d H:m:s'),
               //'updated_at' => date('Y-m-d H:m:s')
            ],
            [
           
                'name_company'=> 'BAZAR FERRETERIA MARCEL',
                'name'=> 'BAZAR FERRETERIA MARCEL ',
                'address'=> '0',
                'phone'=> '0',
                'company_phone' => '0'
    
          
            ],
            [
           
                'name_company'=> 'FINI LAGER S.A.',
                'name'=> 'FINI LAGER S.A.',
                'address'=> '0',
                'phone'=> '0',
                'company_phone' => '0'
    
          
            ],
            [
           
                'name_company'=> 'POMA SAS SUCURSAL BOLIVIA',
                'name'=> 'POMA SAS SUCURSAL BOLIVIA',
                'address'=> '0',
                'phone'=> '0',
                'company_phone' => '0'
    
          
            ],
            [
           
                'name_company'=> 'SOCIEDAD COMERCIAL E INDUSTRIAL HANSA LTDA.',
                'name'=> 'SOCIEDAD COMERCIAL E INDUSTRIAL HANSA LTDA.',
                'address'=> '0',
                'phone'=> '0',
                'company_phone' => '0'
    
          
            ],
            
                   
        ];

      
        foreach ($VENDORS as $proveedorData) {
            Vendor::create($proveedorData);
        }
       


    }
}
