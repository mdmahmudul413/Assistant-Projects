<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Blog extends Model
{
    use HasFactory;

    private static $blog, $image, $imageName, $imageUrl, $directory, $extension;

    private static function getImageUrl($request)
    {
        self::$image        = $request->file('image');
        self::$extension    = self::$image->getClientOriginalExtension();
        self::$imageName    = time() . '.' . self::$extension;
        self::$directory    = 'blog-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl     = self::$directory . self::$imageName;
        return self::$imageUrl;
    }

    public static function newBlog($request)
    {
        self::$blog                 = new Blog();
        self::$blog->user_id        = Auth::user()->id;
        self::$blog->title          = $request->title;
        self::$blog->description    = $request->description;
        self::$blog->image          = self::getImageUrl($request);
        self::$blog->save();
        return self::$blog;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public static function updateBlog($request, $id)
    {
        self::$blog = Blog::find($id);

        if($request->file('image'))
        {
            if(file_exists(self::$blog->image))
            {
                unlink(self::$blog->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$blog->image;
        }

        self::$blog->user_id        = Auth::user()->id;
        self::$blog->title          = $request->title;
        self::$blog->description    = $request->description;
        self::$blog->image          = self::$imageUrl;
        self::$blog->save();
        return self::$blog;
    }
}
