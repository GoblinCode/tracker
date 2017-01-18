<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class Category extends Model
{
    public static function getCategoryById($id)
    {
        $category_id = explode(',',$id);
        $category = DB::table('category')->whereIn('id', $category_id)->get();
        return $category;
    }
    public static function getCategoryTree()
    {
        $category = DB::table('category')->orderBy('tree')->get();
        return $category;
    }
}
