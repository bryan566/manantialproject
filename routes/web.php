<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CodigoController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PrendaController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\ClienteController;
use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('user_template.layouts.template');
});


//RUTAS A NIVEL DE USUARIO CON ROL CLIENTE
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'Index')->name('HomeUser');
});

Route::controller(ClienteController::class)->group(function () {

    Route::get('/category/{id}', 'Index')->name('categoryuser');
    Route::get('/single-product', 'SingleProduct')->name('singleproduct');
    Route::get('/add-to-cart', 'AddToCart')->name('addtocart');
    Route::get('/checkout', 'Checkout')->name('checkout');
    Route::get('/user-profile', 'UserProfile')->name('userprofile');
    Route::get('/new-release', 'NewRelease')->name('newrelease');
    Route::get('/todays-deal', 'TodaysDeal')->name('todaysdeal');
    Route::get('/custom-service', 'CustomerService')->name('customerservice');
});

//
Route::middleware(['auth', 'role:user'])->group(function () {

    Route::controller(ClienteController::class)->group(function () {
        Route::post('/add-to-cart', 'AddToCart')->name('addtocart');
        Route::get('/checkout', 'Checkout')->name('checkout');
        Route::get('/user-profile', 'UserProfile')->name('userprofile');
        Route::get('/new-release', 'NewRelease')->name('newrelease');
        Route::get('/todays-deal', 'TodaysDeal')->name('todaysdeal');
        Route::get('/custom-service', 'CustomerService')->name('customerservice');
    });
});

//
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'role:user'])->name('dashboard');


//
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//RUTAS INDIVIDUALES
//Route::get('/userprofile', [DashboardController::class, 'Index']);

Route::middleware(['auth', 'role:admin'])->group(function () {

    //RUTAS EN GRUPO
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/admin/dashboard', 'Index')->name('admindashboard');
        Route::get('/admin/logout', 'destroy')->name('admin.logout');
    });

    Route::controller(CategoryController::class)->group(function () {
        Route::get('/admin/all-category', 'Index')->name('allcategory');
        Route::get('/admin/add-category', 'Create')->name('addcategory');
        Route::post('/admin/store-category', 'Store')->name('storecategory');
        Route::get('/admin/edit-category/{id}', 'Edit')->name('editcategory');
        Route::post('/admin/update-category', 'Update')->name('updatecategory');
        Route::get('/admin/delete-category/{id}', 'Destroy')->name('deletecategory');
    });

    Route::controller(OrderController::class)->group(function () {
        Route::get('/admin/orden', 'Index')->name('ordenIndex');
        Route::get('/admin/create-orden', 'Create')->name('createorden');
        Route::get('/admin/ordendetalle/{id}', 'Show')->name('ordendetalle');
        Route::post('/admin/store-orden', 'Store')->name('storeorden');
    });

    Route::controller(ProductController::class)->group(function () {
        Route::get('/admin/all-products', 'Index')->name('allproducts');
        Route::get('/admin/add-product', 'Create')->name('addproduct');
        Route::post('/admin/store-product', 'StoreProduct')->name('storeproduct');

        //Route::post('/admin/product-code', 'Store')->name('storeproduct');

        Route::get('/admin/edit-product/{id}', 'Edit')->name('editproduct');
        Route::post('/admin/update-product', 'Update')->name('updateproduct');
        Route::get('/admin/delete-product/{id}', 'Destroy')->name('deleteproduct');
    });


    Route::controller(PrendaController::class)->group(function () {
        Route::get('/admin/prenda', 'Index')->name('prenda.index');
    });

    Route::controller(CodigoController::class)->group(function () {
        Route::get('/admin/codigos', 'Index')->name('codigos.index');
        Route::get('/admin/create-codigo', 'Create')->name('createcodigo');
        Route::post('/admin/store-codigo', 'Store')->name('storecodigo');
    });
});






require __DIR__ . '/auth.php';
