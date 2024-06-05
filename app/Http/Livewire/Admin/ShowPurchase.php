<?php

namespace App\Http\Livewire\Admin;

use App\Models\PurchaseDetail;
use Livewire\Component;

class ShowPurchase extends Component
{




    public $purchase_id, $name_purchase, $purchase, $purchases_reg, $mypurchase;



    public function getPurchaseDetail()
    {
 
    }
         
     public function render()
     {
   
       $purchaseDetails = PurchaseDetail::where('purchase_id', $this->purchase->id)->get();
       
       // dd($countDetails);
       //  $counts_reg=CountDetail::where('count_id', $this->count->id); 
       //   dd($counts_reg);
       return view('livewire.admin.show-purchase', compact("purchaseDetails"));
     }









}
