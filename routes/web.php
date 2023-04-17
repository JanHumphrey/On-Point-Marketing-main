<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\OurWorkController;
use App\Http\Controllers\ThankYouController;


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

// Display contact form
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

// Handle form submission and send email
// Route::post('/contact', [ContactController::class, 'sendEmail'])->name('contact.sendEmail');


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/privacy-policy', [PrivacyPolicyController::class, 'index'])->name('privacy-policy');
Route::get('/terms-and-conditions', [TermsController::class, 'index'])->name('terms-and-conditions');
Route::get('/our-work', [OurWorkController::class, 'index'])->name('our-work');
Route::get('/thank-you', [ThankYouController::class, 'index'])->name('thank-you');
Route::get('/our-work/{card}', [OurWorkController::class, 'show'])->name('pages.our-work-show');