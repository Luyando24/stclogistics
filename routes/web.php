<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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


Route::get("/", [HomeController::class, "index"]);


Route::GET('/redirect', [HomeController::class, 'redirect']);
Route::get("/destinations", [PageController::class, "PageController"]);
Route::get("/details", [PageController::class, "productDetails"]);
Route::get("/rates", [PageController::class, "shippingRates"]);
Route::get("/ship", [PageController::class, "shippingController"]);
Route::get("/admin_dashboard", [AdminController::class, "Home"]);
Route::get("/new_parcels", [AdminController::class, "NewParcels"]);
Route::post("/new_parcel", [AdminController::class, "NewParcel"]);
Route::get("/view-order/{id}", [AdminController::class, "ViewOrder"]);
Route::get("/tracking", [AdminController::class, "shipmentStatus"]);
Route::post("/tracking-status", [AdminController::class, "OrderStatus"]);
Route::post("/update-shipment", [AdminController::class, "updateShipment"]);
Route::get("/sea-rates", [AdminController::class, "setSeaRates"]);
Route::post("/sea_rates", [AdminController::class, "seaRates"]);
Route::get("/shipment_not_found", [AdminController::class, "shipmentNotFound"]);
Route::get("/track_parcel", [AdminController::class, "trackParcel"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
