<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Livewire\Admin\ShowArticles;
use App\Http\Livewire\Admin\CreateArticle;
use App\Http\Livewire\Admin\CreateBrand;
use App\Http\Livewire\Admin\EditArticle;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\LineController;
use App\Http\Livewire\Admin\ShowCategory;
use App\Http\Livewire\Admin\ShowLine;
use App\Http\Livewire\Admin\ShowStation;
use App\Http\Livewire\Admin\ShowWarehouse;
use App\Http\Controllers\Admin\WarehouseController;
use App\Http\Controllers\Admin\PurchaseController;
// use App\Http\Controllers\OrderController;
use App\Http\Livewire\Admin\CreateListDetail;
use App\Http\Livewire\Admin\UserComponent;
use App\Http\Controllers\Admin\Orders\OrderController;
use App\Http\Controllers\Admin\ConfigController;
use App\Http\Controllers\Admin\MovementController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\CountController;
use App\Http\Livewire\Admin\CreateCounts;
use App\Http\Livewire\Admin\ShowSector;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Session;
use App\Models\User;

// Route::get('',[ HomeController::class, 'index']);
Route::get('/', ShowArticles::class)->name('admin.index');

Route::get('articles/create', CreateArticle::class)->name('admin.articles.create');
Route::get('brands/create', CreateBrand::class)->name('admin.brands.create');


Route::post('articles/{article}/files', [ArticleController::class, 'files'])->name('admin.articles.files');
Route::get('articles/{article}/edit', EditArticle::class)->name('admin.articles.edit');
Route::get('categories', [CategoryController::class, 'index'])->name('admin.categories.index');
Route::get('categories/{category}',  ShowCategory::class)->name('admin.categories.show');


Route::get('lines', [LineController::class, 'index'])->name('admin.lines.index');
Route::get('lines/{line}',  ShowLine::class)->name('admin.lines.show');
Route::get('lines/line/{station}',  ShowWarehouse::class)->name('admin.warehouses.show');
Route::get('lines/line/station/{warehouse}',  ShowSector::class)->name('admin.sectors.show');

Route::get('ingresos/list/{id}', [CreateListDetail::class, 'choose'])->name('admin.create-list-detail.choose');

// Route::get('lines/{line}',  ShowStation::class)->name('admin.stations.show');


Route::resource('ingresos', '\App\Http\Controllers\Admin\PurchaseController')
    ->names('admin.purchases')
    ->parameters(['ingresos' => 'purchase']);

    


Route::get('user', UserComponent::class)->name('admin.users');
Route::get('reports', [ReportController::class,'index'])->name('admin.reports.index');




Route::get('orders', [OrderController::class, 'index'])->name('admin.orders.index');
Route::get('orders/{order}', [OrderController::class, 'show'])->name('admin.orders.show');

Route::get('config', [ConfigController::class, 'index'])->name('admin.config');
Route::get('movement', [MovementController::class, 'index'])->name('admin.movement');




Route::get('counts/create', [CountController::class, 'create'])->name('admin.counts.create');
Route::get('counts', [CountController::class, 'index'])->name('admin.counts.index');
Route::get('counts/{count}', [CountController::class, 'show'])->name('admin.counts.show');


// Route::get('purchase/{purchase}', [PurchaseController::class, 'show'])
//     ->name('admin.purchases.show');




// Redirecciona despues de guardar con un mensage de exito
Route::get('redirect', function () {
    // Session::flash('key','Mensaje de sesion');
        Toastr::success('Se guardo correctamente', 'Nuevo Ingreso', ["positionClass" => "toast-top-right"]);

    return view('admin.purchases.create');
});

// Route::get('redirect', function () {
//          Toastr::success('Se guardo correctamente', 'Nuevo Ingreso', ["positionClass" => "toast-top-right"]);

//     return view('admin.purchases.create');
// });






// RUTAS PARA FUNCIONES DE IMPOR5TACION DE DATOS DE TABLA ARTICULOS 

// para importacion de datos
Route::post('/importar-datos', 'App\Http\Controllers\admin\ConfigController@importData')->name('admin.importar.datos');

// para importar proveedores
Route::post('/import_proveedors', 'App\Http\Controllers\admin\ConfigController@importMark')->name('admin.import_proveedors');



// para relacionar proveedores
Route::post('/relation_proveedors', 'App\Http\Controllers\admin\ConfigController@relationArticleMark')->name('admin.relation_proveedors');

// para asignar id de categoria 
Route::post('/asigna-category-id', 'App\Http\Controllers\admin\ConfigController@asignCategoryId')->name('admin.asign_category_id');


// para asignar imagenes segun su id de almacen
Route::post('/asigna-imagenes', 'App\Http\Controllers\admin\ConfigController@catalogImagesCopy')->name('admin.copy_images');

