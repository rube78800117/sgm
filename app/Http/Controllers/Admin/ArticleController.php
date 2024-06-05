<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function files(Article $article, Request $request) {



//  Obtener el id_eetc del artículo
        $id_eetc = $article->id_eetc;
   
        // Extraer la extensión del archivo original
        $extension = $request->file('file')->getClientOriginalExtension();
    
        // Crear el nombre base del archivo
        $baseFilename = $id_eetc . '.' . $extension;
    
        // Verificar si ya existe un archivo con el mismo nombre en el disco
        $filename = $baseFilename;
        if (Storage::exists('articles/' . $filename)) {
            // Si existe, agregar un identificador único
            $uniqueId = Str::uuid()->toString();
            $filename = $id_eetc . '-' . $uniqueId . '.' . $extension;
        }
    
        // Guardar el archivo en la carpeta 'articles' con el nuevo nombre
        $url = Storage::putFileAs('articles', $request->file('file'), $filename);
    
        // Crear la entrada en la base de datos con la URL del archivo
        $article->image()->create([
            'url' => $url,
        ]);

       

    }
}
