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
    $purchaseFound = PurchaseDetail::where('purchase_id', $this->purchase->id);

    $purchaseDetails = $purchaseFound
        ->when($this->search, function ($query) {
            $query->whereHas('article', function ($query) {
                $query->where('id_eetc', 'LIKE', '%' . $this->search . '%')
                      ->orWhere('id_dopp', 'LIKE', '%' . $this->search . '%')
                      ->orWhere('id_zona', 'LIKE', '%' . $this->search . '%')
                      ->orWhere('name', 'LIKE', '%' . $this->search . '%'); 
            });
        })

        ->paginate(10);

    return view('livewire.admin.show-purchase', compact('purchaseDetails', 'purchaseTotal', 'purchaseFound'));
}
    // public function render()
    // {
    //     $purchaseTotal = PurchaseDetail::where('purchase_id', $this->purchase->id)->get();
    //     $purchaseFound = PurchaseDetail::where('purchase_id', $this->purchase->id);

    //     $purchaseDetails = $purchaseFound

    //         // ->Where('article_name', 'LIKE','%'.$this->search.'%')
    //         ->orWhereHas('article', function ($query) {
    //             $query->where('id_eetc', 'LIKE', '%' . $this->search . '%');
    //         })
    //         ->orWhereHas('article', function ($query) {
    //             $query->where('id_dopp', 'LIKE', '%' . $this->search . '%');
    //         })
    //         ->orWhereHas('article', function ($query) {
    //             $query->where('id_zona', 'LIKE', '%' . $this->search . '%');
    //         })

    //         ->paginate(10);

    //     return view('livewire.admin.show-purchase', compact('purchaseDetails', 'purchaseTotal', 'purchaseFound'));
    // }
}
