<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\HomeCategory;
use Illuminate\Http\Request;

class HomeCategoryController extends Controller
{
    public $select_cat = [], $qty, $home_Categories;

    public function manage()
    {
        $this->home_Categories  = HomeCategory::find(1);
        $this->select_cat       = explode(',', $this->home_Categories->select_cat);
        $this->qty              = $this->home_Categories->qty;
        return view('admin.home-categories.index', [
            'categories' => Category::all(),
            'select_cat' => $this->select_cat,
            'qty'        => $this->qty,
        ]);
    }

    public function update(Request $request)
    {
        $this->home_Categories                   = HomeCategory::find(1);
        $this->home_Categories->select_cat       = implode(',', $request->categories);
        $this->home_Categories->qty              = $request->qty;
        $this->home_Categories->save();
        return back()->with('message', 'Home Category Section Updated Successfully');
    }
}
