<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\RankingController;

// ==============================
// 🔐 ROTAS DE AUTENTICAÇÃO
// ==============================
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login',    [AuthController::class, 'login']);

// ==============================
// 🔒 ROTAS PROTEGIDAS POR SANCTUM
// ==============================
Route::middleware('auth:sanctum')->group(function () {

    // --- AUTH ---
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me',      [AuthController::class, 'me']);

    // --- QUIZ ---
    Route::post('/quiz/start', [QuizController::class, 'start']);  // Iniciar quiz
    Route::post('/quiz/{quizId}/answer', [QuizController::class, 'answer']);  // Enviar resposta
    Route::post('/quiz/{quizId}/finish', [QuizController::class, 'finish']);  // Finalizar quiz
});

// ==============================
// 🏆 RANKING (ROTA PÚBLICA)
// ==============================
Route::get('/ranking', [RankingController::class, 'index']);  // Visualizar ranking
