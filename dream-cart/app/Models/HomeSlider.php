<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSlider extends Model
{
    use HasFactory;
    private static $slider, $image, $imageName, $imageUrl, $extension,  $directory;

    public static function getImageUrl($request)
    {
        self::$image        = $request->file('image');
        self::$extension    = self::$image->getClientOriginalExtension();
        self::$imageName    = time() . '.' . self::$extension;
        self::$directory    = 'slider-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl     = self::$directory . self::$imageName;
        return self::$imageUrl;
    }

    public static function newSlider($request)
    {
        self::$slider                 = new HomeSlider();
        self::$slider->title          = $request->title;
        self::$slider->sub_title      = $request->sub_title;
        self::$slider->price          = $request->price;
        self::$slider->link           = $request->link;
        self::$slider->image          = self::getImageUrl($request);
        self::$slider->save();
    }

    public static function updateSlider($request, $id)
    {
        self::$slider = HomeSlider::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$slider->image))
            {
                unlink(self::$slider->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$slider->image;
        }

        self::$slider->title          = $request->title;
        self::$slider->sub_title      = $request->sub_title;
        self::$slider->price          = $request->price;
        self::$slider->link           = $request->link;
        self::$slider->status         = $request->status;
        self::$slider->image          = self::$imageUrl;
        self::$slider->save();
    }

    public static function deleteSlider($id)
    {
        self::$slider = HomeSlider::find($id);
        if(file_exists(self::$slider->image))
        {
            unlink(self::$slider->image);
        }
        self::$slider->delete();
    }
}
