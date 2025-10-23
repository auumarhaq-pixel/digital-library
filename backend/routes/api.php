<?php
use Illuminate\Support\Facades\Route;

// 1. PASTIKAN SEMUA BARIS 'USE' INI ADA DAN TIDAK ADA TYPO
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoanController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// 2. PASTIKAN SEMUA BARIS INI BENAR (Nama Controller & Resource-nya)
Route::apiResource('members', MemberController::class); // <-- Masalahnya mungkin ada di baris ini
Route::apiResource('authors', AuthorController::class);
Route::apiResource('publishers', PublisherController::class);
Route::apiResource('books', BookController::class);
Route::apiResource('loans', LoanController::class);