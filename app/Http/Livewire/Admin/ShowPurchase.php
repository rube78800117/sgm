<?php

namespace App\Http\Livewire\Admin;

use App\Models\PurchaseDetail;
use Livewire\Component;
use Livewire\WithPagination;
class ShowPurchase extends Component
{

 
  use WithPagination;
  public $search;
  

  

    public function updatingSearch()
    {
        $this->resetPage();
    }


    public $purchase_id, $name_purchase, $purchase, $purchases_reg, $mypurchase;



    public function getPurchaseDetail()
    {
 
    }
         
     public function render()
     {
   

      
      $purchaseTotal = PurchaseDetail::where('purchase_id', $this->purchase->id)->get();
      $purchaseFound = PurchaseDetail::where('purchase_id', $this->purchase->id)
          ->where('article_name', 'LIKE', '%' . $this->search . '%');
      $purchaseDetails = $purchaseFound
          // ->orWhere('id_dopp', 'LIKE', '%' . $this->search . '%')
          // ->orWhere('id_zona', 'LIKE', '%' . $this->search . '%')
          // ->orWhere('id_eetc', 'LIKE', '%' . $this->search . '%')
          ->paginate(10);

      //  $purchaseDetails = PurchaseDetail::where('purchase_id', $this->purchase->id)->get();
       
       // dd($countDetails);
       //  $counts_reg=CountDetail::where('count_id', $this->count->id); 
       //   dd($counts_reg);
       return view('livewire.admin.show-purchase', compact('purchaseDetails', 'purchaseTotal','purchaseFound' ));
     }









}
