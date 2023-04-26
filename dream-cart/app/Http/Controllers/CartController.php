<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;
use Cart;
use Illuminate\Support\Carbon;

class CartController extends Controller
{
    private $product, $price, $sale, $sale_products;
    public function index(Request $request, $id)
    {
        $this->sale             = Sale::find(1);
        $this->sale_products    = Product::where('selling_price', '>', 0)->inRandomOrder()->take(12)->get();
        $this->product          = Product::find($id);
        if($this->sale_products->count() > 0 && $this->sale->status == 1 && $this->sale->sale_date > Carbon::now())
        {
            $this->price = $this->product->selling_price;
        }
        else
        {
            $this->price = $this->product->regular_price;
        }
        Cart::add([
            'id'            => $this->product->id,
            'name'          => $this->product->name,
            'price'         => $this->price,
            'quantity'      => $request->quantity,
            'attributes'    => [
                'image'             => $this->product->image,
                'category'          => $this->product->category->name,
                'brand'             => $this->product->brand->name,
            ]
        ]);
        return redirect('/cart/show-item');
    }

    public function update(Request $request, $id)
    {
        Cart::update($id, [
            'quantity' => [
                'relative'  => false,
                'value'     => $request->quantity,
            ],
        ]);
        return redirect('/cart/show-item')->with('message', 'Cart Updated Successfully');
    }

    public function show()
    {
        return view('website.cart.index', ['cart_products' => Cart::getContent()]);
    }

    public function remove($id)
    {
        Cart::remove($id);
        return redirect('/cart/show-item')->with('message', 'Cart item removed successfully.');
    }
}
