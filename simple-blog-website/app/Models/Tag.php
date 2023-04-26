<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    private static $tag;

    public static function newTag($request)
    {
        self::$tag = new Tag();
        self::$tag->name           = $request->name;
        self::$tag->description    = $request->description;
        self::$tag->save();
    }

    public static function updateTag($request, $id)
    {
        self::$tag = Tag::find($id);
        self::$tag->name           = $request->name;
        self::$tag->description    = $request->description;
        self::$tag->save();
    }

    public static function deleteTag($id)
    {
        self::$tag = Tag::find($id);
        self::$tag->delete();
    }

    public function blogs(){
        return $this->belongsToMany(Blog::class);
    }
}
