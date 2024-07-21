<?php

namespace App\Http\Controllers\Return;

use App\Http\Controllers\Controller;
use App\Models\Order;

class ReturnController extends Controller
{
    public function show()
    {
        return view('returns.index', [
            'orders' => Order::where('user_id',auth()->id())->count()
        ]);
    }

    public function approvedReturns()
    {

    }
}