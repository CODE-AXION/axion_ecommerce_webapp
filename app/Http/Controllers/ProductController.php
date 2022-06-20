<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;
use Cart;

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

    public function cart_index()
    {

            
        
          


        return view('cart');
                                    
    }


    
    public function show_product_details($id,$slug)
    {        

       

       

        $product = Product::where(['id'=> $id,'slug'=> $slug])->first();        
        
        $popular_products = Product::latest()->limit(4)->get();

        $related_products = Product::where('category_id',$product->category_id)
                                        ->where('id', '!=', $id)
                                        ->inRandomOrder()->limit(5)->get();  


        return view('/show_products')->with('product',$product)
                                     ->with('popular_products',$popular_products)
                                     ->with('related_products',$related_products);
        
        
    }

}
