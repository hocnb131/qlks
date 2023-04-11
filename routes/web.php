<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdiminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoomDetailController;
use App\Http\Controllers\UserController;
use App\Mail\GuiEmail;
use Illuminate\Support\Facades\Mail;
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

// Route::get('/', function () {
//     return view('trangchu');
// });
// Route::get('/', function () {
//     return view('trangchu');
// });

// Route::get("/guimail", function(){
//    Mail::mailer('mailgun')
// //    ->to('diachimail@ngườinhận.com')
//    ->to('hocnb131@gmail.com')
//    ->send( new GuiEmail() );
// });
Auth::routes();

Route::prefix('/')->group(function(){
    Route::get('/',[HomeController::class,'index'])->name('home');
    Route::get('/home',[HomeController::class,'index'])->name('home');
    Route::get('/room', [HomeController::class, 'room'])->name('room');
    Route::get('/room/{id?}', [HomeController::class, 'roomdetail'])->name('roomdetail');

});

Route::prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,'dashboard'])->name('dashboard')->middleware('checkadmin::class');
    Route::resources([
        // 'province'      =>   ProvinceController::class,
        // 'branch'        =>   BranchController::class,
        'room'          =>   RoomController::class,
        // 'service'       =>   ServiceController::class,
        'user'          =>   UserController::class,
        'roomdetail'          =>   RoomDetailController::class,
    ]);
});


