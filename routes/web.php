<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DepartmentController;
use App\Http\Livewire\ShoppingCart;
use App\Http\Livewire\CreateOrder;
use App\Http\Controllers\OrderController;
use App\Models\Order;
use App\Http\Controllers\WarehouseController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', HomeController::class)->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('departamento/{department}',[DepartmentController::class,'show'] )->name('department.show');
// Route::get('Department/{department}',[DepartmentController::class, 'show'])->name('departments.Show');
Route::get('articulo/{article}',[ArticleController::class,'show' ] )->name('article.show');
// Route::get('search/articles', [IdsearchController::class,'idsearch'] )->name('search.article'); 
Route::get('shopping-cart', ShoppingCart::class)->name('shopping-cart');

Route::get('/link', function(){
  Artisan::call('storage:link');
});

Route::middleware(['auth'])->group(function(){

        Route::get('orders/create', CreateOrder::class)->name('orders.create');
        Route::get('orders/{order}', [OrderController::class, 'show'])->name('orders.show');
        Route::get('orders', [OrderController::class, 'index'])->name('orders.index');
        Route::post('orders/save', CreateOrder::class)->name('orders.save');

});

Route::get('warehouses', [WarehouseController::class, 'index'])->name('warehouses.index');






Route::get('prueba', function(){

    $hora = now()->subMinute(1);
    $orders = Order::where('status', 1)->wheretime('created_at', '<=', $hora)->get();
    
    
    foreach ($orders as $order){
        $items=json_decode($order->content);
        foreach ($items as $item) {
            increase($item);
        }
        $order->status = 3;
        $order->save();
    }   
    return "se formateo con exito" ;
});