<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    private static $image;

    private static $imageName;

    private static $imageUrl;

    private static $directory;

    private static $about;

    private static $extension;

    private static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'.self::$extension;
        self::$directory = 'about-images/';
        self::$image->move(self::$directory, self::$imageName);

        return self::$directory.self::$imageName;
    }

    public static function addAboutContent($request)
    {
        self::$about = new About();
        self::$about->title = $request->title;
        self::$about->image = self::getImageUrl($request);
        self::$about->description = $request->description;
        self::$about->save();
    }

    public static function updateAboutContent($request)
    {
        self::$about = About::first();
        if ($request->file('image')) {
            if (file_exists(self::$about->image)) {
                unlink(self::$about->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        } else {
            self::$imageUrl = self::$about->image;
        }
        self::$about->title = $request->title;
        self::$about->description = $request->description;
        self::$about->image = self::$imageUrl;
        self::$about->save();
    }

    public static function deleteAboutContent($id)
    {
        self::$about = About::find($id);
        if (file_exists(self::$about->image)) {
            unlink(self::$about->image);
        }
        self::$about->delete();
    }
}
