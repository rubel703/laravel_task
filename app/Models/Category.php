<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public static $category;

    public static function createCategory($request)
    {
        self::$category = new Category();
        self::$category->category_name = $request->category_name;
        self::$category->save();
    }

    public static function updateCategory($request, $id)
    {
        $category = Category::find($id);
        $category->category_name = $request->category_name;
        $category->save();
    }

    public static function deleteUser($id)
    {
        $category = Category::find($id);
        $category->delete();
    }
}
