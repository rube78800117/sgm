<?php

namespace App\Http\Livewire\Admin;
use Illuminate\Support\Collection;
use App\Models\Vendor;
use App\Models\Article;
use Livewire\Component;

class CreatePurchase extends Component
{
  
    public function render()
    {
        return view('livewire.admin.create-purchase');
    }

}
