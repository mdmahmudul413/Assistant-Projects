<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(){
        return view('admin.tag.index');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name'              => 'required|unique:tags,name',
            'description'       => 'required',
        ]);
        Tag::newTag($request);
        return back()->with('message', 'New Tag Info Created Successfully.');
    }

    public function manage()
    {
        return view('admin.tag.manage', ['tags' => Tag::all()]);
    }

    public function edit($id)
    {
        return view('admin.tag.edit', ['tag' => Tag::find($id)]);
    }

    public function update(Request $request, $id)
    {
        Tag::updateTag($request, $id);
        return redirect('/tag/manage')->with('message', 'Tag Info Updated Successfully');
    }

    public function delete($id)
    {
        Tag::deleteTag($id);
        return back()->with('message', 'Tag Info Deleted Successfully');
    }
}
