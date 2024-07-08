<?php

namespace App\Http\Livewire\Admin;

use App\Models\Count;
use App\Models\CountDetail;
use Livewire\Component;

class ShowCount extends Component
{
    public $search, $count_id, $name_count, $count, $counts_reg, $mycount;

    public function getCountsDetail()
    {
    }


    public function render()
    {
        $countDetailsTotal = CountDetail::where('count_id', $this->count->id)->get();
    
        $countDetailsFound = CountDetail::where('count_id', $this->count->id);
    
        $countDetails = $countDetailsFound->where(function ($query) {
            $query->where('article_name', 'LIKE', '%' . $this->search . '%')
                  ->orWhereHas('article', function ($query) {
                      $query->where('id_eetc', 'LIKE', '%' . $this->search . '%');
                  })
                  ->orWhereHas('article', function ($query) {
                      $query->where('id_dopp', 'LIKE', '%' . $this->search . '%');
                  })
                  ->orWhereHas('article', function ($query) {
                      $query->where('id_zona', 'LIKE', '%' . $this->search . '%');
                  });
        })->paginate(10);
    
        return view('livewire.admin.show-count', compact('countDetails', 'countDetailsTotal', 'countDetailsFound'))->layout('layouts.admin');
    }



    // public function render()
    // {
    //     $countDetailsTotal = CountDetail::where('count_id', $this->count->id)->get();
    //     $countDetailsFound = CountDetail::where('count_id', $this->count->id);

    //     $countDetails = $countDetailsFound->Where('article_name', 'LIKE','%'.$this->search.'%')
    //                                         ->orWhereHas('article', function ($query) {
    //                                             $query->where('id_eetc', 'LIKE', '%' . $this->search . '%');
    //                                         })
    //                                         ->orWhereHas('article', function ($query) {
    //                                             $query->where('id_dopp', 'LIKE', '%' . $this->search . '%');
    //                                         })
    //                                         ->orWhereHas('article', function ($query) {
    //                                             $query->where('id_zona', 'LIKE', '%' . $this->search . '%');
    //                                       })
          


    //         ->paginate(10);

 
    //     return view('livewire.admin.show-count', compact('countDetails','countDetailsTotal','countDetailsFound'))->layout('layouts.admin');
    // }
}
