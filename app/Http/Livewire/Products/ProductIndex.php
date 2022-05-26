<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;


use App\Models\Product;
use App\Models\Category;
use WithPagination;

class ProductIndex extends Component
{


    
    public $sortBy = '';
    public $perPage = 3;


    public function render()
    {


        // if ($this->sortBy == 'featured') {
        //     $products = Product::where('featured', true)->paginate($this->perPage);
        // } else if ($this->sortBy == 'low') {
        //     $products = Product::orderBy('sale_price', 'asc')->paginate($this->perPage);
        // } else if ($this->sortBy == 'heigh') {
        //     $products = Product::orderBy('sale_price', 'desc')->paginate($this->perPage);
        // } else {
        //     $products = Product::paginate($this->perPage);;
        // }


        return view('livewire.products.product-index',[

            
            'products' => Product::orderBy('sale_price', 'asc')->simplePaginate($this->perPage),

        ]);
    }
}
