<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\HomeCategory;
use App\Models\HomeSlider;
use App\Models\Product;
use App\Models\Sale;
use App\Models\Wishlist;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DreamCartController extends Controller
{
    public $products, $homeCat, $cats_id, $categories, $qty;
    public $sale_products, $sale, $remaining_time;
    public $days, $hours, $minutes, $seconds;
    public $wishlist;
    public function index()
    {
        $this->homeCat          = HomeCategory::find(1);
        $this->cats_id          = explode(',', $this->homeCat->select_cat);
        $this->categories       = Category::whereIn('id', $this->cats_id)->get();
        $this->qty              = $this->homeCat->qty;
        $this->sale_products    = Product::where('selling_price', '>', 0)->inRandomOrder()->take(12)->get();

        $this->sale             = Sale::find(1);
        $this->remaining_time   = abs(strtotime($this->sale->sale_date) - strtotime('now'));
        $this->days             = substr(date('d H:i:s', $this->remaining_time), 0, 2);
        $this->hours            = substr(date('d H:i:s', $this->remaining_time), 3, 2);
        $this->minutes          = substr(date('d H:i:s', $this->remaining_time), 6, 2);
        $this->seconds          = substr(date('d H:i:s', $this->remaining_time), 9, 2);


        return view('website.home.index', [
            'sliders'       => HomeSlider::where('status', 1)->get(),
            'products'      => Product::where('status', 1)->orderBy('id', 'desc')->take(8)->get(),
            'cats'          => $this->categories,
            'qty'           => $this->qty,
            'sale_products' => $this->sale_products,
            'sale'          => $this->sale,
            'days'          => $this->days,
            'hours'         => $this->hours,
            'minutes'       => $this->minutes,
            'seconds'       => $this->seconds,
        ]);
    }

    public function category($id)
    {
        return view('website.category.index', [
            'products' => Product::where('category_id', $id)->orderBy('id', 'desc')->get(),
        ]);
    }

    public function subCategory($id)
    {
        return view('website.category.index', [
            'products' => Product::where('sub_category_id', $id)->orderBy('id', 'desc')->get(),
        ]);
    }

    public function detail($id)
    {
        $this->wishlist = Wishlist::where('product_id', $id)->where('status', 1)->first();
        $this->sale_products    = Product::where('selling_price', '>', 0)->get();
        $this->sale             = Sale::find(1);
        return view('website.detail.index', [
            'product'       => Product::find($id),
            'sale_products' => $this->sale_products,
            'sale'          => $this->sale,
            'wishlist'      => $this->wishlist,
        ]);
    }

    public function shop()
    {
        $this->sale_products    = Product::where('selling_price', '>', 0)->get();
        $this->sale             = Sale::find(1);
        return view('website.shop.index', [
            'products' => Product::orderBy('id', 'desc')->paginate(12),
            'sale_products' => $this->sale_products,
            'sale'          => $this->sale,
            ]);
    }

    public function onSale()
    {
        $this->products = Product::where('selling_price', '>', 0)->orderBy('id', 'desc')->paginate(15);
        return view('website.sale.index', ['products' => $this->products]);
    }
}
