<?php


namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Department;
use App\Models\Article;
use App\Models\OrderDetail;
use App\Models\Warehouse;

class IndexReport extends Component
{
    public $departmentselect, $tabes = 1, $search = '10', $article_item, $orders_item;

    public function render()
    {
        $departments = Department::orderBy('id', 'ASC')->get();
        $articles = Article::orderBy('department_id', 'ASC')->orderBy('name', 'ASC')->get();
        $warehouses = Warehouse::orderBy('name','ASC')->get();
        $articlesdep = Article::where('department_id', $this->departmentselect)->orderBy('name', 'ASC')->get();

        return view('livewire.admin.index-report', compact('articles', 'warehouses','departments', 'articlesdep'));
    }

    public function updatedDepartmentselect($val)
    {
        $this->department_id_sel = $val;
    }

    public function Values($val)
    {
        $this->tabes = $val;
    }

    public function search_art()
    {
        $this->article_item = Article::where('id_dopp', 'LIKE', '%' . $this->search . '%')
            ->orWhere('id_zona', 'LIKE', '%' . $this->search . '%')
            ->orWhere('id_eetc', 'LIKE', '%' . $this->search . '%')
            ->first();

        if ($this->article_item) {
            $this->article_id = $this->article_item->id;
            $this->view_art();
        }
    }

    public function view_art()
    {
        $this->orders_item = OrderDetail::where('article_id', $this->article_id)->get();
    }
}











// namespace App\Http\Livewire\Admin;
// use Livewire\Component;
// use App\Models\Department;
// use App\Models\Station;
// use App\Models\Article;
// use App\Models\Order;
// use App\Models\ArticleWarehouse;
// use App\Models\OrderDetail;
// use App\Models\Warehouse;


// class IndexReport extends Component
// {

// public $departmentselect, $tabes =1, $search = '10', $article_item, $orders_item, $purchases_item, $article_id;




   

//     public function render()
//     {   $departments = Department::orderBy('id','ASC')->get();
//         $warehouses = Warehouse::orderBy('name','ASC')->get();
//         $articles = Article::orderBy('department_id','ASC')->orderBy('name','ASC')->get();
//         // $articlesdep = Article::orderBy('department_id','ASC')->get();
//         $articlesdep = Article::where('department_id', $this->departmentselect)->orderBy('name','ASC')->get();
//         // $this->search_art();
//         return view('livewire.admin.index-report', compact('articles', 'warehouses', 'departments','articlesdep'));
//     }


//     public function updatedDepartmentselect( $val)
//     {
//         $this->department_id_sel = $val;

//         $articlesdep = Article::where('department_id', $this->department_id_sel)->orderBy('name','ASC')->get();
      
//     }


//     public function Values($val)
//     {
//         $this->tabes = $val;
//     }



//     public function search_art()
//     {
//         $article_item = Article::where('id_dopp', 'LIKE','%'.$this->search.'%')
   
//         ->orWhere('id_zona', 'LIKE', '%'.$this->search.'%')
//         ->orWhere('id_eetc', 'LIKE', '%'.$this->search.'%')
//                     ->first();
//         $this->article_item =  $article_item;

       
//         $this->article_id = $article_item->id;
 
//     }


//     public function view_art()
//     {
//         $orders_item = OrderDetail::where('article_id', 'LIKE',$this->article_id)->get();
//         $this-> orders_item =  $orders_item;

 
//     }


// }
