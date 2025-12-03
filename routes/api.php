<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\RankingController;


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login',    [AuthController::class, 'login']);


Route::middleware('auth:sanctum')->group(function () {

    
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me',      [AuthController::class, 'me']);

    
    Route::post('/quiz/start', [QuizController::class, 'start']);  
    Route::post('/quiz/{quizId}/answer', [QuizController::class, 'answer']);  
    Route::post('/quiz/{quizId}/finish', [QuizController::class, 'finish']);  
    Route::get('/quiz/history', [QuizController::class, 'history']);

});


Route::get('/ranking', [RankingController::class, 'index']);  