<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public $products, $search, $sale_products, $sale;
    public function search(Request $request)
    {
        $this->search = $request->search;
        $this->products = Product::where('status', 1)->where('name', 'LIKE', "%$this->search%")->get();
        $this->sale_products    = Product::where('selling_price', '>', 0)->get();
        $this->sale             = Sale::find(1);
        return view('website.search.index', [
            'products'      => $this->products,
            'search'        => $this->search,
            'sale_products' => $this->sale_products,
            'sale'          => $this->sale ,
            ]);
    }
}
