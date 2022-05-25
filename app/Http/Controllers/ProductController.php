<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;

use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function home()
    {
        $products = Product::all();
        $categories = Category::all();
    
        return view('home')->with('products',$products)
                           ->with('categories',$categories);
                                    
    }

    public function shop_index()
    {
        $products = Product::all();
        $categories = Category::all();
    
        return view('shop')->with('products',$products)
                           ->with('categories',$categories);
                                    
    }

}
