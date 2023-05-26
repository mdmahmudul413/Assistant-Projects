<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sale;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class WishlistController extends Controller
{
    public $wishlist, $product_id, $wishlist_product;
    public $sale_products, $sale;
    public function index()
    {
        $this->wishlist = Wishlist::where('user_id', Session::get('customer_id'))->where('status', 1)->get();
        $this->sale_products    = Product::where('selling_price', '>', 0)->get();
        $this->sale             = Sale::find(1);
        return view('website.wishlist.index', [
            'wishlist' => $this->wishlist,
            'sale_products' => $this->sale_products,
            'sale'          => $this->sale,
            ]);
    }

    public function add(Request $request)
    {
        if(Session::get('customer_id'))
        {
            $this->product_id           = $request->product_id;
            $this->wishlist_product     = Wishlist::where('product_id', $this->product_id)->where('user_id', Session::get('customer_id'))->first();

            if(!$this->wishlist_product)
            {
                $this->wishlist             = new Wishlist();
                $this->wishlist->user_id    = Session::get('customer_id');
                $this->wishlist->product_id = $this->product_id;
                $this->wishlist->save();
                return ['result' => 'This Product is successfully added to your wishlist', 'wishlist' => true];
            }
            else if($this->wishlist_product->status == 1)
            {
                $this->wishlist = Wishlist::find($this->wishlist_product->id);
                $this->wishlist->status = 0;
                $this->wishlist->save();
                return ['result' => 'This Product is successfully removed from your wishlist', 'wishlist' => false];
            }
            else if($this->wishlist_product->status == 0)
            {
                $this->wishlist = Wishlist::find($this->wishlist_product->id);
                $this->wishlist->status = 1;
                $this->wishlist->save();
                return ['result' => 'This Product is successfully added to your wishlist', 'wishlist' => true];
            }

        }
        else
        {
            return ['result' => 'Login first to add wishlist'];
        }
    }
}
