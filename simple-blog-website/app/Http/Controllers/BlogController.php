<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\CategoryBlog;
use App\Models\Tag;
use App\Models\TagBlog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public $blog;

    public function index()
    {
        return view('admin.blog.index', [
            'tags'       => Tag::all(),
            'categories' => Category::all(),
        ]);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'tags'          => 'required',
            'categories'    => 'required',
            'title'         => 'required|unique:blogs,title',
            'description'   => 'required',
            'image'         => 'required',
        ]);
        $this->blog = Blog::newBlog($request);
        $this->blog->categories()->attach($request->categories);
        $this->blog->tags()->attach($request->tags);
        return back()->with('message', 'Blog Info Created Successfully.');
    }

    public function manage()
    {
        return view('admin.blog.manage', ['blogs' => Blog::all()]);
    }

    public function edit($id)
    {
        return view('admin.blog.edit', [
            'blog'       => Blog::find($id),
            'tags'       => Tag::all(),
            'categories' => Category::all(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->blog = Blog::updateBlog($request, $id);
        $this->blog->categories()->sync($request->categories);
        $this->blog->tags()->sync($request->tags);
        return redirect('/blog/manage')->with('message', 'Blog Info Updated Successfully');
    }

    public function delete($id)
    {
        $this->blog = Blog::find($id);

        if(file_exists($this->blog->image))
        {
            unlink($this->blog->image);
        }
        $this->blog->categories()->detach();
        $this->blog->tags()->detach();
        $this->blog->delete();
        return back()->with('message', 'Blog Info Deleted Successfully');
    }

    public function detail($id)
    {
        return view('admin.blog.detail', [
            'blog' => Blog::find($id),
        ]);
    }
}
