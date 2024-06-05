<?php

namespace App\Http\Livewire\Admin;

use App\Models\Count;
use App\Models\CountDetail;
use Livewire\Component;

class ShowCount extends Component
{
    public $count_id, $name_count, $count, $counts_reg, $mycount;



   public function getCountsDetail()
   {

   }
        
    public function render()
    {
  
      $countDetails=CountDetail::where('count_id', $this->count->id)->get();
      
      // dd($countDetails);
      //  $counts_reg=CountDetail::where('count_id', $this->count->id); 
      //   dd($counts_reg);
      return view('livewire.admin.show-count', compact("countDetails"));
    }
}
