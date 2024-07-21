<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;

class ReturnController extends Controller
{
    public function index()
    {
        return view('returns.index', [
            'returned_orders' => Order::where('user_id',auth()->id())->count()
        ]);
    }
}