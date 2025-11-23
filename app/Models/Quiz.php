<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'score',
        'correct_answers',
        'wrong_answers',
        'total_time',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function answers()
    {
        return $this->hasMany(QuizAnswer::class);
    }

    public function questions()
    {
        return $this->hasManyThrough(
            Question::class,
            QuizAnswer::class,
            'quiz_id',      // foreign key on quiz_answers
            'id',           // foreign key on questions
            'id',           // local key on quizzes
            'question_id'   // local key on quiz_answers
        );
    }
}
