<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Existences;
use Illuminate\Support\Facades\Auth;
use App\Models\Line;
use App\Models\Location;

class ArticleController extends Controller
{
    public $article, $color;

    public function show(Article $article)
    {
        $user = auth()->user();

        if ($user->hasRole('admin')) {
            // Si el usuario es admin, obtener todos los almacenes
            $warehouses = $article->warehouses;
        } else {
            // Obtener la zona de la línea del usuario autenticado
            $userLineId = $user->line_id;
            $zoneId = Line::where('id', $userLineId)->value('zone_id');

            // Filtrar los almacenes del artículo según la zona del usuario
            $warehouses = $article
                ->warehouses()
                ->whereHas('station.line.zone', function ($query) use ($zoneId) {
                    $query->where('id', $zoneId);
                })
                ->get();
        }

        return view('article.show', compact('article','warehouses'));

        // $this->article = $article->id;
        //  $volumes=$this->volume($article);
        //  return view('article.show', compact("article", "volumes") );

        // return view('article.show', compact("article"));
    }

    // public function LocationName($locationId)
    // {
    //     dd($locationId);
    //     $location = Location::findOrFail($locationId);
    //     $sector = $location->sector;
    //     $warehouse = $sector->warehouse;

    //     return $warehouse->name;
    // }
}
