<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public $sale, $sale_date, $status;
    public function index()
    {
        $this->sale = Sale::find(1);
        return view('admin.sale.index', ['sale' => $this->sale]);
    }

    public function update(Request $request)
    {
        $this->sale             = Sale::find(1);
        $this->sale->sale_date  = $request->sale_date;
        $this->sale->status     = $request->status;
        $this->sale->save();
        return back()->with('message', 'Your Sale Timer Updated Successfully');
    }
}
