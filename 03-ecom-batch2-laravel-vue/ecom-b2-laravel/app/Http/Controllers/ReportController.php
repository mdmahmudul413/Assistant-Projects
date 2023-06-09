<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;
class ReportController extends Controller
{
    public function index()
    {
        return view('admin.report.monthly-order');
    }

    public function create(Request $request)
    {
        $startTimestamp = strtotime($request->start_date);
        $endTimestamp   = strtotime($request->end_date);

        if ($startTimestamp > $endTimestamp)
        {
            return redirect()->back()->with('message', 'Start date must be smaller the end date.');
        }
        $orders = Order::where('order_timestamp', '>=', $startTimestamp)
                        ->where('order_timestamp', '<=', $endTimestamp)
                        ->orderBy('id', 'desc')->get();
        return view('admin.report.search-monthly-order');
    }
}
