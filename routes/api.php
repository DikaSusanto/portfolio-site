<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::post('/contact', [ContactFormController::class, 'store'])
    ->middleware('throttle:5,1'); 

Route::fallback(function () {
    return response()->json(['message' => 'Resource not found.'], 404);
});
