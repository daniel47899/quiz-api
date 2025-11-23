<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Question;
use App\Models\QuizAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    // ================================
    // INICIAR UM NOVO QUIZ
    // ================================
    public function start(Request $request)
    {
        $user = $request->user();

        // Seleciona 10 perguntas aleatórias
        $questions = Question::inRandomOrder()->limit(10)->get();

        if ($questions->count() < 10) {
            return response()->json([
                'message' => 'Banco não possui perguntas suficientes (mínimo 10).'
            ], 400);
        }

        // Cria o quiz
        $quiz = Quiz::create([
            'user_id' => $user->id,
            'score' => 0,
            'correct_answers' => 0,
            'wrong_answers' => 0,
            'total_time' => 0,
        ]);

        return response()->json([
            'message' => 'Quiz iniciado!',
            'quiz_id' => $quiz->id,
            'questions' => $questions,
        ]);
    }

    // ================================
    // RESPONDER UMA PERGUNTA
    // ================================
    public function answer(Request $request, $quizId)
    {
        $request->validate([
            'question_id' => 'required|exists:questions,id',
            'selected_option' => 'required|in:A,B,C,D',
        ]);

        $quiz = Quiz::findOrFail($quizId);
        $question = Question::findOrFail($request->question_id);

        // Verifica se já foi respondida
        $already = QuizAnswer::where('quiz_id', $quizId)
            ->where('question_id', $question->id)
            ->exists();

        if ($already) {
            return response()->json(['message' => 'Pergunta já respondida'], 400);
        }

        $isCorrect = ($request->selected_option === $question->correct_option);

        QuizAnswer::create([
            'quiz_id' => $quizId,
            'question_id' => $question->id,
            'selected_option' => $request->selected_option,
            'is_correct' => $isCorrect,
        ]);

        return response()->json([
            'message' => 'Resposta registrada!',
            'correct' => $isCorrect,
        ]);
    }

    // ================================
    // FINALIZAR QUIZ
    // ================================
    public function finish(Request $request, $quizId)
    {
        $request->validate([
            'total_time' => 'required|integer|min:1',
        ]);

        $quiz = Quiz::findOrFail($quizId);

        $correct = QuizAnswer::where('quiz_id', $quizId)
            ->where('is_correct', true)
            ->count();

        $wrong = QuizAnswer::where('quiz_id', $quizId)
            ->where('is_correct', false)
            ->count();

        // Sistema de pontuação simples
        $score = $correct * 10;

        // Atualiza quiz
        $quiz->update([
            'correct_answers' => $correct,
            'wrong_answers' => $wrong,
            'score' => $score,
            'total_time' => $request->total_time,
        ]);

        return response()->json([
            'message' => 'Quiz finalizado!',
            'quiz' => $quiz,
        ]);
    }
}
