<?php

use App\Models\OrderReturn;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompletedReturnsController extends Controller
{
    public function completedReturns(Request $request)
    {
        return view('returns.pending_returns', [
            'returns' => []
        ]);
    }
}