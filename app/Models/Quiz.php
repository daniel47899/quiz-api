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
            'quiz_id',      
            'id',           
            'id',           
            'question_id'   
        );
    }
}
