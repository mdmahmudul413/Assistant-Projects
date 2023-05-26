<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function index()
    {
        return view('ajax');
    }
    public function submit(Request $request)
    {
        $Employee = new Employee();
        $Employee->name  = $request->name;
        $Employee->email = $request->email;
        $Employee->save();
        return ['result' => 'Data Inserted'];
    }
}
