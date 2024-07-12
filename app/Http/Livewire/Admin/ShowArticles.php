<?php

namespace App\Http\Livewire\Admin;
use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;
use Barryvdh\DomPDF\Facade\Pdf;
use Milon\Barcode\Facades\DNS1DFacade as DNS1D;

class ShowArticles extends Component
{
    use WithPagination;
    public $search, $idsearch, $nItems = 7 ;
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function updatingIdsearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $articlesTotal = Article::all();
        $articlesFound = Article::where('name', 'LIKE', '%' . $this->search . '%');
        $articles = $articlesFound
            ->orWhere('description', 'LIKE', '%' . $this->search . '%')
            ->orWhere('id_dopp', 'LIKE', '%' . $this->search . '%')
            ->orWhere('id_zona', 'LIKE', '%' . $this->search . '%')
            ->orWhere('id_eetc', 'LIKE', '%' . $this->search . '%')
            ->paginate($this->nItems);

        return view('livewire.admin.show-articles', compact('articles', 'articlesTotal', 'articlesFound'))->layout('layouts.admin');
    }


    public function pdf(){
        $articles=Article::limit(10)->get();
        $pdf=PDF::loadView('livewire.admin.pdf.articlesPdf', compact('articles'));
        return $pdf->stream();
    }
}
