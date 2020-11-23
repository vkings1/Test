<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transactions;
use Carbon\Carbon;

class TransactionsController extends Controller
{
    public function getTransactionByStartTime()
    {
        $startTime = Transactions::orderBy('start_time', 'DESC')->get();
        return response()->json($startTime);
    }

    public function getTransactionbyEndTime()
    {
        $endTime = Transactions::orderBy('end_time', 'DESC')->get();
        return response()->json($endTime);
    }
}
