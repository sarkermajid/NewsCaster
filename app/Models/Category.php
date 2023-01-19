<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    private static $image,$imageName,$directory,$category,$extension,$imageUrl;

    private static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'.self::$extension;
        self::$directory = 'category-images/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function addCategory($request)
    {
        self::$category = new Category();
        self::$category->name           = $request->name;
        self::$category->image          = self::getImageUrl($request);
        self::$category->status         = $request->status;
        self::$category->save();
    }

    public static function updateStatus($id)
    {
        self::$category = Category::find($id);
        if(self::$category->status == 1)
        {
            self::$category->status = 0;
        }
        else
        {
            self::$category->status = 1;
        }
        self::$category->save();
    }


    public static function deleteCategory($id)
    {
        self::$category = Category::find($id);
        if(file_exists(self::$category->image))
        {
            unlink(self::$category->image);
        }
        self::$category->delete();
    }
}
