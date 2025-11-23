<?php

namespace App\Http\Controllers;

use App\Models\Quiz;

class RankingController extends Controller
{
    public function index()
    {
        $ranking = Quiz::with('user:id,name')
            ->orderBy('score', 'DESC')
            ->orderBy('total_time', 'ASC')
            ->limit(20)
            ->get();

        return response()->json($ranking);
    }
}
