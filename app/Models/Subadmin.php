<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Subadmin extends Model
{
    use HasFactory;

    private static $image,$imageName,$directory,$subadmin,$extension,$imageUrl;

    private static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'.self::$extension;
        self::$directory = 'subadmin-images/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function addSubAdmin($request)
    {
        self::$subadmin                 = new Subadmin();
        self::$subadmin->name           = $request->name;
        self::$subadmin->email          = $request->email;
        self::$subadmin->mobile         = $request->mobile;
        self::$subadmin->password       = Hash::make($request->password);
        self::$subadmin->image          = self::getImageUrl($request);
        self::$subadmin->status         = $request->status;
        self::$subadmin->save();
    }

}
