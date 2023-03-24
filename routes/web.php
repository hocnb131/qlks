<?php

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
    return view('welcome');
});
Route::prefix('admin')->group(function(){
    // Route::get('/',[HomeController::class,'index'])->name('home');
    Route::get('/',[AdminController::class,'index'])->name('home')->middleware('checklogin::class');
    // Route::get('province',  'province')->name('province');
    // Route::get('role',[UserController::class,'role'])->name('user.role');
    // Route::get('create-role',[UserController::class,'create_role'])->name('create-role');
    // Route::get('permission',[UserController::class,'permission'])->name('user.permission');
    // Route::get('create-permission',[UserController::class,'create_permission'])->name('create-permission');
    Route::get('/phanquyen',[UserController::class,'phanquyen'])->name('phanquyen');
    // Route::resource('role',[UserController::class]);
    Route::resources([
        'province'      =>   ProvinceController::class,
        'branch'        =>   BranchController::class,
        'room'          =>   RoomController::class,
        'service'       =>   ServiceController::class,
        'blog'          =>   BlogController::class,
        'user'          =>   UserController::class,
        'ticket'        =>   TicketController::class,
        'coupon'        =>   CouponController::class,
        'payment'       =>   PaymentController::class,
        'review'        =>   ReviewController::class,
        'role'          =>   RoleController::class,
        'permission'    =>   PermissionController::class,
        
    ]);
});
