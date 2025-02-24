<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;

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

// Home route
Route::get('/', [ContactController::class, 'index'])->name('home');

// Contact routes
Route::prefix('contacts')->group(function () {
    Route::post('/confirm', [ContactController::class, 'confirm'])->name('contacts.confirm');
    Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');
    Route::get('/create', [ContactController::class, 'create'])->name('contacts.create');
    Route::post('/thanks', [ContactController::class, 'thanks'])->name('contacts.thanks');
});

Route::get('/thanks', function () {
    return view('thanks');
});

// Admin routes
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/contacts', [AdminController::class, 'contacts'])->name('admin.contacts');
});

Route::get('/confirm', function () {
    $contact = [
        'name' => '山田　太郎',
        'gender' => '男性',
        'email' => 'test@example.com',
        'tel' => '080-1234-5678',
        'address' => '東京都渋谷区千駄ヶ谷1-2-3',
        'building' => '千駄ヶ谷マンション101',
        'category_id' => '商品の交換について',
        'message' => '届いた商品が注文した商品ではありませんでした。商品の取り替えをお願いします。'
    ];
    return view('confirm', compact('contact'));
})->name('confirm.example');
