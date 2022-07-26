<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get("/home",[AdminController::class,"index"])->name("admin");

Route::get("/redirects",[AdminController::class,"redirect"]);

Route::get("/",[IndexController::class,"port"])->name("mainpage");

//Homes

Route::get("/homes",[AdminController::class,"homes"])->name("homes");

Route::post("/Shomes",[AdminController::class,"store"])->name("StoreHomes");

Route::get("Edit/{id}",[AdminController::class,"edit"])->name('Update');

Route::post("/Uhomes",[AdminController::class,"update"])->name("UpHomes");

// My work

Route::get("/mywork",[AdminController::class,"mywork"])->name("MyWork");

Route::post("/Smywork",[AdminController::class,"storemywork"])->name("StoreMywork");

Route::get("Editmywork/{id}",[AdminController::class,"editmywork"])->name('Updatemywork');

Route::post("/Umywork",[AdminController::class,"updatemywork"])->name("Upmywork");

Route::get("deletemywork/{id}",[AdminController::class,"destroy"])->name('Deletemywork');

//Potfolio
Route::get("/myportfolio",[AdminController::class,"myportfolio"])->name("MyPortfolio");

Route::post("/Sportfolio",[AdminController::class,"storeportfolio"])->name("StorePortfolio");

Route::get("Editportfolio/{id}",[AdminController::class,"editportfolio"])->name('Updateportfolio');

Route::post("/Uportfolio",[AdminController::class,"updateportfolio"])->name("Upportfolio");

Route::get("deleteportfolio/{id}",[AdminController::class,"destroyportfolio"]);

//profil

Route::get("/myprofil",[AdminController::class,"myprofil"])->name("MyProfil");

Route::post("/Sprofil",[AdminController::class,"storeprofil"])->name("Storeprofil");

Route::get("Editprofil/{id}",[AdminController::class,"editprofil"])->name('Updateprofil');

Route::post("/Uprofil",[AdminController::class,"updateprofil"])->name("Upprofil");

Route::get("deleteprofil/{id}",[AdminController::class,"destroyprofil"]);

//skill

Route::get("/myskill",[AdminController::class,"myskill"])->name("MySkills");

Route::post("/Sskill",[AdminController::class,"storeskill"])->name("Storeskill");

Route::get("Editskill/{id}",[AdminController::class,"editskill"])->name('Updateskill');

Route::post("/Uskill",[AdminController::class,"updateskill"])->name("Upskill");

Route::get("Deleteskill/{id}",[AdminController::class,"destroyskill"]);

//about
Route::get("/myabout",[AdminController::class,"myabout"])->name("MyAbout");

Route::post("/Sabout",[AdminController::class,"storeabout"])->name("StoreAbout");

Route::get("EditAbout/{id}",[AdminController::class,"editabout"])->name('Updateabout');

Route::post("/Uabout",[AdminController::class,"updateabout"])->name("Upabout");

