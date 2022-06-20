<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function home_show($slug){

        $categories = Category::all();
        $categories_slug = Category::where(['slug'=> $slug])->first();  
        // dd($categories->name);

        return view('product_categories_show')->with('categories',$categories)->with('categories_slug',$categories_slug);
    }
}
