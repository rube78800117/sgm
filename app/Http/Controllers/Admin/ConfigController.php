<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\CatalogArticle;
use App\Models\Category;
use App\Models\Department;
use App\Models\Trademark;
use App\Models\Type;
use App\Models\Unit;
use App\Models\User;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;

class ConfigController extends Controller
{
    public function index()
    {
        return view('admin.config');
    }

    public function importData()
    {
        // Obtener los datos de la tabla de origen
        $datos = CatalogArticle::all();

        // Insertar los datos campo por campo en la tabla de destino
        foreach ($datos as $dato) {
            // dd($dato);

            $newArticle = new Article();

            $newArticle->id_zona = '';
            $newArticle->id_dopp = $dato->id_dopp ?? '';
            $newArticle->id_eetc = $dato->id_eetc ?? '';
            $newArticle->name = $dato->name;
            $newArticle->description = $dato->description ?? '';
            $newArticle->stock_min = $dato->stock_min ?? '5';
            $newArticle->slug = $dato->slug ?? '';
            $newArticle->grupo = $dato->grupo ?? '';
            $newArticle->subgrupo = $dato->subgrupo ?? '';
            $newArticle->unidad = $dato->unidad ?? '';
            $newArticle->proveedor = $dato->proveedor ?? '';
            $newArticle->partida_presupuestaria = $dato->partida_presupuestaria ?? '';
            $newArticle->precio_unitario = $dato->precio_unitario ?? '0';
            $newArticle->precio_historico = $dato->precio_historico ?? '0';
            $newArticle->precio_usd = $dato->precio_usd ?? '0';
            $newArticle->plano = $dato->plano ?? '';
            $newArticle->posicion_plano = $dato->posicion_plano ?? '';
            $newArticle->id_plano = $dato->id_plano ?? '';
            $newArticle->trabajo = $dato->trabajo ?? '';
            $newArticle->ubicacion = $dato->ubicacion ?? '';
            $newArticle->plano = $dato->plano ?? '';

            // STAR Obtener el ID de la marca asociada catálogo--------------------------------------------------------------

            $mark = $dato->proveedor; // Asumiendo que $catalogArticle es un objeto de la clase CatalogArticle
            // dd($dato);

            // Buscar la unidad que coincide con el nombre proporcionado
            $markReg = Trademark::where('name', $mark)->first();

            if (is_null($markReg)) {
                $newArticle->trademark_id = 1;
            } else {
                // Seteamos un nuevo titulo

                $newArticle->trademark_id = $markReg->id;
                // Guardamos en base de datos
            }

            // END Obtener el ID de la marca asociada catálogo--------------------------------------------------------------

            // STAR Obtener el nombre de la unidad del artículo del catálogo--------------------------------------------------------------
            $unidad = $dato->unidad; // Asumiendo que $catalogArticle es un objeto de la clase CatalogArticle

            // Buscar la unidad que coincide con el nombre proporcionado
            $unit = Unit::where('name', $unidad)->first();

            if ($unit) {
                // Si se encuentra la unidad, asignar su ID a $newArticle->unit_id
                $newArticle->unit_id = $unit->id;
            } else {
                // Manejar el caso en que no se encuentre la unidad
                // Por ejemplo, lanzar una excepción o asignar un valor predeterminado
                $newArticle->unit_id = 1;
            }

            // $newArticle->unit_id = Unit::orderBy('id')->first();

            // END Obtener el nombre de la unidad del artículo del catálogo--------------------------------------------------------------

            $newArticle->category_id = 1;









            // // STAR ASIGNACION DE DEPARTAMENTO O CATEGORIA DEL INSUMO OREPUESTO SEGUN EL PRIMER DIGITO DEL ID DE ALMACEN
            // $department_id = strtolower($dato->id_eetc);
            // // Se verifica si el department_id es nulo
            // if ($department_id === null) {
            //     // Si es nulo, asignar department_id = 7
            //     $newArticle->category_id = 35;
            // } else {
            //     // Se extrae el primer dígito del department_id
            //     $firstDigit = substr($department_id, 0, 1);

            //     // Determine the department_id based on the first digit
            //     switch ($firstDigit){
            //         case 1:
            //             $newArticle->category_id = 37;
            //             break;
            //         case 2:
            //             $newArticle->category_id = 2;
            //             break;
            //         case 3:
            //             $newArticle->category_id = 20;
            //             break;
            //         case 4:
            //             $newArticle->category_id = 35;
            //             break;
            //         case 5:
            //             $newArticle->category_id = 44;
            //             break;
            //         case 6:
            //             $newArticle->category_id = 15;
            //             break;
            //         case 7:
            //             $newArticle->category_id = 24;
            //             break;
            //         default:
            //             $newArticle->category_id = 35;
            //             break;
            //     }
            // }













            // END ASIGNACION DE DEPARTAMENTO O CATEGORIA DEL INSUMO OREPUESTO SEGUN EL PRIMER DIGITO DEL ID DE ALMACEN

            // // se dispone de estas dos variables para obtener los datos de grupo y subgrupo respectivamente transformados a minusculas para una comparacion
            // // y determinar la clasificacion para el sistema, buscando en la cadena nic de mecanico, lic de hidraulico y asi sucesivamente
            // $department_rep = strtolower($dato->id_eetc); // Asumiendo que $catalogArticle es un objeto de la clase CatalogArticle
            // $department_rep2 = strtolower($dato->subgrupo);

            // // Verificar si la cadena 'nico' aparece en cualquier posición de $department_rep     Departament es la clasificacion equibalente de grupo y categoria es equivalente a subgrupo
            // if (strpos($department_rep, 'nic') !== false) {
            //     // Si se encuentra la cadena 'nico', asignar 1 a $dato->department_id
            //     $newArticle->department_id = 1;
            // } else {
            //     if (strpos($department_rep2, 'nic') !== false) {
            //         // Si se encuentra la cadena 'nico', asignar 1 a $dato->department_id
            //         $newArticle->department_id = 1;
            //     }
            // }

            // // para herramientas
            // if (strpos($department_rep, 'lic') !== false) {
            //     // Si se encuentra la cadena 'nico', asignar 1 a $dato->department_id
            //     $newArticle->department_id = 5;
            // } else {
            //     if (strpos($department_rep2, 'lic') !== false) {
            //         // Si se encuentra la cadena 'nico', asignar 1 a $dato->department_id
            //         $newArticle->department_id = 5;
            //     }
            // }

            // if (strpos($department_rep, 'lic') !== false) {
            //     // Si se encuentra la cadena 'nico', asignar 1 a $dato->department_id
            //     $newArticle->department_id = 5;
            // } else {
            //     if (strpos($department_rep2, 'lic') !== false) {
            //         // Si se encuentra la cadena 'nico', asignar 1 a $dato->department_id
            //         $newArticle->department_id = 5;
            //     }
            // }

            // if (strpos($department_rep, 'ric') !== false) {
            //     // Si se encuentra la cadena 'nico', asignar 1 a $dato->department_id
            //     $newArticle->department_id = 6;
            // } else {
            //     if (strpos($department_rep2, 'ric') !== false) {
            //         // Si se encuentra la cadena 'nico', asignar 1 a $dato->department_id
            //         $newArticle->department_id = 6;
            //     }
            // }

            // if (strpos($department_rep, 'sum') !== false) {
            //     // Si se encuentra la cadena 'nico', asignar 1 a $dato->department_id
            //     $newArticle->department_id = 7;
            // } else {
            //     if (strpos($department_rep2, 'sum') !== false) {
            //         // Si se encuentra la cadena 'nico', asignar 1 a $dato->department_id
            //         $newArticle->department_id = 7;
            //     }
            // }

            // if (is_null($newArticle->department_id)) {
            //     // Si $department_rep es null, asignar 8 a $dato->department_id
            //     $newArticle->department_id = 8;
            // }

            $newArticle->user_id = 1;
            $newArticle->type_id = 1;

            //  dd( $newArticle);

            //     $table->string('id_zona');
            //     $table->string('id_dopp');
            //     $table->string('id_eetc');
            //     $table->text('name');
            //     $table->text('description');
            //     $table->integer('stock_min')->default(4);
            //     $table->string('slug');

            //     //STAR TABLAS AGREGADAS DE TABLA CATALOGO
            //     $table->string('grupo')->nullable();
            //     $table->string('subgrupo')->nullable();
            //     $table->string('unidad')->nullable();
            //     $table->string('proveedor')->nullable();
            //     $table->string('partida_presupuestaria')->nullable();
            //     $table->decimal('precio_unitario', 10, 2)->nullable();
            //     $table->decimal('precio_historico', 10, 2)->nullable();
            //     $table->decimal('precio_usd', 10, 2)->nullable();
            //     $table->string('plano')->nullable();
            //     $table->string('posicion_plano')->nullable();
            //     $table->string('id_plano')->nullable();
            //     $table->string('trabajo')->nullable();
            //     $table->string('ubicacion')->nullable();

            //     //END TABLAS AGREGADAS DE CATALOGO

            //     $table->unsignedBigInteger('trademark_id')->nullable();
            //     $table->unsignedBigInteger('unit_id')->nullable();
            //     $table->unsignedBigInteger('category_id')->nullable();
            //     $table->unsignedBigInteger('department_id')->nullable();
            //     $table->unsignedBigInteger('user_id')->nullable();
            //     $table->unsignedBigInteger('type_id')->nullable();

            //     $table->foreign('trademark_id')->references('id')->on('trademarks')->onDelete('set null');
            //     $table->foreign('unit_id')->references('id')->on('units')->onDelete('set null');
            //     $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
            //     $table->foreign('department_id')->references('id')->on('departments')->onDelete('set null');
            //     //$table->foreign('stock_id')->references('id')->on('stocks')->onDelete('set null');
            //     $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            //     $table->foreign('type_id')->references('id')->on('types')->onDelete('set null');
            //    // $table->timestamps();
            // });

            // dd($newArticle);

            // Agregar más campos según sea necesario
            $newArticle->save();
        }

        return back()->with('success', 'Datos importados correctamente campo por campo.');
    }

    // funcion que importa los nombres de los proveedores de tabla catalogArticle  analogo a nombre marcas de la tabla Articles
    public function importMark()
    {
        $name_trademarks = CatalogArticle::distinct()->pluck('proveedor');

        // dd($name_trademarks);

        foreach ($name_trademarks as $mark) {
            if (is_null($mark)) {
            } else {
                $newMark = new Trademark();
                $newMark->name = $mark;
                $newMark->save();
            }
        }
    }

    // fuuncion para relacionar los articos con el proveedor o marca de la tabla trademarks

    public function relationArticleMark()
    {
        $datos = Article::all();
        foreach ($datos as $dato) {
            // STAR Obtener el nombre de la unidad del artículo del catálogo--------------------------------------------------------------

            $mark = $dato->proveedor; // Asumiendo que $catalogArticle es un objeto de la clase CatalogArticle
            // dd($dato);

            // Buscar la unidad que coincide con el nombre proporcionado
            $markReg = Trademark::where('name', $mark)->first();

            if (is_null($markReg)) {
            } else {
                // Seteamos un nuevo titulo
                $dato->trademark_id = $markReg->id;

                // Guardamos en base de datos
                $dato->save();
            }

            // END Obtener el nombre de la unidad del artículo del catálogo--------------------------------------------------------------
        }
    }

    public function asignCategoryId()
    {







        // Obtener todos los artículos
        $articles = Article::all();

        foreach ($articles as $article) {
            $departmentId = $article->id_eetc;

            if ($departmentId === null) {
                // Asignar category_id = 35 si el department_id es nulo
                $article->category_id = 35;
            } else {

                     // Se extrae el primer dígito del department_id
            $firstDigit = substr($departmentId, 0, 1);
                // Asignar category_id basado en el department_id
                switch ($firstDigit) {
                    case 1:
                        $article->category_id = 37;
                        break;
                    case 2:
                        $article->category_id = 2;
                        break;
                    case 3:
                        $article->category_id = 20;
                        break;
                    case 4:
                        $article->category_id = 35;
                        break;
                    case 5:
                        $article->category_id = 44;
                        break;
                    case 6:
                        $article->category_id = 15;
                        break;
                    case 7:
                        $article->category_id = 24;
                        break;
                    default:
                        $article->category_id = 35;
                        break;
                }
            }

            // Guardar los cambios del artículo
            $article->save();
        }
    }

    public function catalogImagesCopy()
    {
        $articles = Article::all();
        $i = 0;
        foreach ($articles as $article) {
            $id = $article->id_eetc;

            if ($id !== null) {
                // Directorios de origen y destino
                $sourceDir = 'articles/imagesCatalog/';
                $destinationDir = 'articles/';

                // Obtener todos los archivos de la carpeta de origen
                $files = Storage::files($sourceDir);

                // todos los archivos de la carpeta de origen
                //   dd($files);

                // Obtener solo el nombre del archivo sin la ruta
                $filename = basename($files[$i]);

                // dd($filename);
                // "1-01-00001.jpg"

                // Obtener los primeros 10 dígitos del nombre original del archivo
                $newFilename = substr($filename, 0, 10);
                // dd($newFilename === $id);

                while ($newFilename === $id) {
                    // Obtener la ruta completa del archivo de origen
                    $sourceFilePath = $sourceDir . $filename;

                    // Leer el contenido del archivo
                    $fileContent = Storage::get($sourceFilePath);

                    // Extensión del archivo original
                    $extension = pathinfo($filename, PATHINFO_EXTENSION);

                    // Crear el nombre completo del archivo de destino
                    $destinationFilePath = $destinationDir . $newFilename . '.' . $extension;

                    // Subir el archivo a la carpeta de destino
                    $uploadedFile = new UploadedFile($sourceFilePath, $filename);
                    Storage::putFileAs($destinationDir, $uploadedFile, $newFilename . '.' . $extension);

                    // Crear la relación en la tabla polimórfica images

                    $image = new Image();
                    $image->url = $destinationFilePath;
                    $image->imageable_type = 'App\Models\Article';
                    $image->imageable_id = $article->id;
                    $image->save();

                    $i=0;
                }
                
            }
        }
    }

    // public function catalogImagesCopy()
    // {
    //     $articles = Article::all();

    //     foreach ($articles as $article) {
    //         $id = $article->id_eetc;

    //         if ($id !== null) {
    //             // Directorios de origen y destino
    //             $sourceDir = 'articles/imagesCatalog/';
    //             $destinationDir = 'articles/';

    //             // Obtener todos los archivos de la carpeta de origen
    //             $files = Storage::files($sourceDir);

    //             // Índice inicial
    //             $i = 0;
    //             $found = false;

    //             // Mientras no se haya encontrado una coincidencia y haya elementos en el array
    //             while (!$found && $i < count($files)) {
    //                 // Obtener solo el nombre del archivo sin la ruta
    //                 $filename = basename($files[$i]);

    //                 // Obtener la ruta completa del archivo de origen
    //                 $sourceFilePath = $sourceDir . $filename;

    //                 if (Storage::exists($sourceFilePath)) {
    //                     // Leer el contenido del archivo
    //                     $fileContent = Storage::get($sourceFilePath);

    //                     // Obtener los primeros 10 dígitos del nombre original del archivo
    //                     $newFilename = substr($filename, 0, 10);

    //                     // Extensión del archivo original
    //                     $extension = pathinfo($filename, PATHINFO_EXTENSION);

    //                     // Crear el nombre completo del archivo de destino
    //                     $destinationFilePath = $destinationDir . $newFilename . '.' . $extension;

    //                     // Subir el archivo a la carpeta de destino
    //                     $uploadedFile = new UploadedFile($sourceFilePath, $filename);
    //                     Storage::putFileAs($destinationDir, $uploadedFile, $newFilename . '.' . $extension);

    //                     // Crear la relación en la tabla polimórfica images
    //                     $image = new Image();
    //                     $image->url = $destinationFilePath;
    //                     $image->imageable_type = 'App\Models\Article';
    //                     $image->imageable_id = $article->id;
    //                     $image->save();

    //                     // Marcamos que hemos encontrado una coincidencia
    //                     $found = true;
    //                 }

    //                 // Incrementamos el índice para pasar al siguiente archivo
    //                 $i++;
    //             }
    //         }
    //     }

    //     return 'Las imágenes han sido guardadas, renombradas y relacionadas con los artículos exitosamente.';
    // }
}
