<?php

namespace App\Models;

use App\Mail\ProductMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class Product extends Model
{
    use HasFactory;

    private static $product, $imageUrl;

    public static function createProduct($request)
    {
        $users = DB::table('users')->get();
        self::$product = new Product();
        self::$product->category_id = $request->category_id;
        self::$product->name = $request->name;
        self::$product->price = $request->price;
        self::$product->quantity = $request->quantity;
        if ($request->file('image')) {
            self::$product->image = imageUpload($request->file('image'), 'upload/product-images/');
        } else {
            self::$product->image = '';
        }
        self::$product->save();
        
        foreach($users as $user){
            Mail::to($user->email)->send(new ProductMail(self::$product));
        }
       

    }

    public static function updateProduct($request, $id)
    {
        $product = Product::find($id);
        if ($request->file('image')) {
            if (file_exists($product->image)) {
                unlink($product->image);
            }
            self::$imageUrl = imageUpload($request->image, 'upload/product-images/');
        } else {
            self::$imageUrl = $product->image;
        }
        self::saveBasicInfo($request, $product, self::$imageUrl);
    }
    private static function saveBasicInfo($request, $product, $imageUrl)
    {
        $product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->image = $imageUrl;
        $product->save();
    }

    public static function deleteProduct($id)
    {
        $product = Product::find($id);
        if (file_exists($product->image)) {
            unlink($product->image);
        }
        $product->delete();
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
