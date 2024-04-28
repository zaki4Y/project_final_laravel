<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\SupscriptionController;
use App\Http\Controllers\WorkaccController;
use App\Http\Controllers\WorkspaceController;
use App\Models\Reservation;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get('/about',[AboutController::class , "index"])->name("about");
Route::get('/contact',[ContactController::class , "index"])->name("contact");
Route::post('/contact/store', [ContactController::class, "store"])->name('contact.store');
Route::get('/admin',[AdminController::class , "index"])->name("admin")->middleware("role:admin");
Route::post('/booking', [BookingController::class, "store"])->name("booking.store");
Route::post('/supscription', [SupscriptionController::class, "store"])->name("supscribtion.store");
Route::post('/workacc', [WorkaccController::class, "store"])->name("workacc.store");
Route::post('/workspace', [WorkspaceController::class, "store"])->name("workspace.store");
Route::put("/booking/update/{booking}", [BookingController::class,"update"])->name("booking.update");
Route::put("/suspscription/update/{suspscription}", [SupscriptionController::class,"update"])->name("suspscription.update");
Route::put("/workacc/update/{workacc}", [WorkaccController::class,"update"])->name("workacc.update");
Route::put("/workspace/update/{workspace}", [WorkspaceController::class,"update"])->name("workspace.update");
Route::get('/reservation',[ReservationController::class , "index"])->name("reservation");
Route::post('/calendar/store',[ReservationController::class , "store"]);
Route::get("/calendar/show" , [ReservationController::class , "show"]);
Route::get('/session',[StripeController::class , "session"]);
Route::get('/success',[StripeController::class , "success"])->name("success");
Route::get('/email',[EmailController::class , "index"])->name("email")->middleware("role:admin");


Route::put("/reservation/update/{reservation}", [ReservationController::class,"update"])->name("reservation.update");
Route::delete("/reservation/delete/{reservation}", [ReservationController::class,"destroy"])->name("reservation.destroy");






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
