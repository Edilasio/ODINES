<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\InvestigationController;
//use Auth;

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

Route::get('/', function () {
    return view('layouts.welcome'); 
});

Route::get('index', function() {
    if (Auth::check()) {
        if(Auth::user()->estado_id == 2 || Auth::user()->estado_id == 6)
        {                         
            return redirect('noAccess');
        }
        elseif(Auth::user()->estado_id == 1 && Auth::user()->rol_id == 3)
        {
            return redirect('inehome');
        }
        else{
            return redirect('home');
        }
    }
    else{            
            return redirect('login');
    }
})->name('index');

//Methods
Route::post('login', [UserController::class,'login'])->name('login');
Route::post('logout', [UserController::class,'logout'])->name('logout');
Route::post('addUser', [UserController::class,'store'])->name('addUser');
Route::post('solicit', [UserController::class,'storeSolicit'])->name('solicit');
Route::get('editProfile', [UserController::class,'editProfile'])->name('editProfile');
Route::post('recoverypwd', [UserController::class,'passwordRecovery'])->name('recoverypwd');
Route::post('investigation', [InvestigationController::class,'store'])->name('investigation');
Route::get('deleteInvest/{$id}', [InvestigationController::class,'destroy'])->name('deleteInvest');
Route::post('boards', [BoardController::class,'store'])->name('boards');

//Views
Route::get('noAccess', [ViewController::class,'noAccess'])->name('noAccess');
Route::get('authenticate', [ViewController::class,'authenticate'])->name('authenticate');
Route::get('recoveryForm', [ViewController::class,'recoveryForm'])->name('recoveryForm');
Route::get('profileForm', [ViewController::class,'profileForm'])->name('profileForm');
//INE
Route::get('inehome', [ViewController::class,'inehome'])->name('inehome');
Route::get('registerForm', [ViewController::class,'registerForm'])->name('registerForm');
Route::get('inactiveList', [ViewController::class,'inactiveList'])->name('inactiveList');
Route::get('waitingList', [ViewController::class,'waitingList'])->name('waitingList');
Route::get('dadgAnalise', [ViewController::class,'dadgAnalise'])->name('dadgAnalise');
Route::get('dadgAprovado', [ViewController::class,'dadgAprovado'])->name('dadgAprovado');
//ODINES
Route::get('home', [ViewController::class,'home'])->name('home');
Route::get('solicitForm', [ViewController::class,'solicitForm'])->name('solicitForm');
Route::get('activityBoard', [ViewController::class,'activityBoard'])->name('activityBoard');
Route::get('investigationForm', [ViewController::class,'investigationForm'])->name('investigationForm');
Route::get('showInvestigation', [ViewController::class,'showInvestigation'])->name('showInvestigation');
Route::get('BoardForm', [ViewController::class,'BoardForm'])->name('BoardForm');
Route::get('editInvest', [InvestigationController::class,'edit'])->name('editInvest');
Route::get('info', [BoardController::class,'info'])->name('info');
