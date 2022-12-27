<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public static $products,$image,$imageUrl,$imageName,$directory,$product;

    public static function saveproduct($data)
    {
        self::$products                     = new Product();
        self::$products->name              = $data->product_name;
        self::$products->price             = $data->product_price;
        self::$products->description       = $data->product_description;
        self::$products->image              = self::getImageUrl($data);
        self::$products->save();
    }
    public static function getImageUrl($request)
    {
        self::$image = $request->file('product_image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'product-images/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function updateproduct($request,$id)
    {
        self::$product = Product::find($id);
        if ($request->file('product_image'))
        {
            if (file_exists(self::$product->image))
            {
                unlink(self::$product->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$product->image;
        }
        self::$product->name              = $request->product_name;
        self::$product->price             = $request->product_price;
        self::$product->description       = $request->product_description;
        self::$product->image              = self::$imageUrl;
        self::$product->save();
    }
}
