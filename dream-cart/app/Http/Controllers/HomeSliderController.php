<?php

namespace App\Http\Controllers;

use App\Models\HomeSlider;
use Illuminate\Http\Request;

class HomeSliderController extends Controller
{
    public $slider, $sliders;
    public function index()
    {
        return view('admin.slider.index');
    }

    public function create(Request $request)
    {
        HomeSlider::newSlider($request);
        return redirect('/slider/manage')->with('message', 'Slider has been created successfully');
    }

    public function manage()
    {
        $this->sliders = HomeSlider::all();
        return view('admin.slider.manage', ['sliders' => $this->sliders]);
    }

    public function edit($id)
    {
        $this->slider = HomeSlider::find($id);
        return view('admin.slider.edit', ['slider' => $this->slider]);
    }

    public function update(Request $request, $id)
    {
        HomeSlider::updateSlider($request, $id);
        return redirect('/slider/manage')->with('message', 'Slider Updated Successfully');
    }

    public function delete( $id)
    {
        HomeSlider::deleteSlider($id);
        return back()->with('message', 'Slider Deleted Successfully');
    }
}
