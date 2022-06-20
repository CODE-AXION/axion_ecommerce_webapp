<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;

class ProductCategories extends Component
{
    public $sortBy = '';
    public $perPage = 3;
    // public $category_slug;


    // public function mount($category_slug = true)
    // {
    //     // dd($this->category_slug);
    //     $this->category_slug = $category_slug;
    //     // dd($this->category_slug);
    // }


    public function render()
    {

        // $category = Category::where('slug',$this->category_slug)->first();  

        $categories = Category::all(); 
        // $category_id = $category->id; 
        // $category_name = $category->name;

        switch ($this->sortBy) {
            case 'featured':
                $products = Product::where('featured', '1')->paginate($this->perPage);
                break;
            case 'low':
                $products = Product::orderBy('sale_price', 'asc')->paginate($this->perPage);
                break;
            case 'heigh':
                $products = Product::orderBy('sale_price', 'desc')->paginate($this->perPage);
                break;
            case '0':
                $products = Product::paginate($this->perPage);

            default:
                $products = Product::paginate($this->perPage);
        }

     

        return view('livewire.products.product-categories',[

            
            'products' => $products,
            'categories' => $categories,
            // 'category_name' => $category_name,
        

        ]);
    }
}
