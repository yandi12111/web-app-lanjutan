<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get("/about-me", function () {
	return "Nama Saya <b>Muhammad Azhar Riyandi</b>";
});

Route::get("/testing-view", function () {
	return view('view-1');
});

use App\Http\Controllers\UtamaController;

Route::get("/utama/test", [UtamaController::class, "test"]);


/* Controller baru 1 */
use App\Http\Controllers\NewYnController;
Route::get("/new/yn", [NewYnController::class, "yn"]);
Route::get("/new/yandi", [NewYnController::class, "yandi"]);
Route::get("/new/azhar", [NewYnController::class, "azhar"]);
Route::get("/tema/bootstrap", [NewYnController::class, "index"]);

/* Controller baru 2 */
use App\Http\Controllers\YnController;
Route::get("yn/y1", [YnController::class, "y1"]);
Route::get("yn/y2", [YnController::class, "y2"]);
Route::get("yn/y3", [YnController::class, "y3"]);

/* router dan URL baru */
Route::get("/tgl", function () {
	return "Tanggal Lahir saya 20 Maret 2000";
});

Route::get("/makan", function () {
	return "makanan kesukaan saya <i><b>Energen Mentah</i></b>";
});

Route::get("/hobi", function () {
	return "Hobi saya <i><b>Rebahan</i></b>";
});

Route::get("/cita2", function () {
	return "Cita-cita saya <i><b>Menjadi BADBOY</i></b>";
});

Route::get("/kuliah", function () {
	return "Saya menjadi Mahasiswa di <b><i><u>Universitas Muhammadiyah Kalimantan Timur</i></u></b>";
});

