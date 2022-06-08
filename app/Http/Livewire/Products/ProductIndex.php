<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;

use Auth; 
use Session;
use App\Models\Product;
use App\Models\Category;
use App\Models\Cart_Item;
use WithPagination;
use Sessions;
use Cart;

class ProductIndex extends Component
{

    public function store($id,$product_name,$product_sale_price){

        // dd($product_name);

     

       Cart::add($id,$product_name,1,$product_sale_price)->associate('App\Models\Product');
        
      
       $guestCarti = Cart::content();
       $session_id = session()->getId();
    //    if(Cart_Item::where('product_id', '=', $id)->exists()){
            
            if(Auth::check()){

                foreach($guestCarti as $guestCar){
                    
                        // dd($guestCarti);

                        Cart_Item::firstOrCreate([
                            'product_id' => $guestCar->id,
                            'session_id' => $session_id,
                            'user_id' => Auth::user()->id,
                        ]);
                }
            }
    //    }

       
      
    //    session()->flash('guest_cart_1', [
    //         'session' => session()->getId(),
    //         'data' => Cart::Content() 
    //     ]);

    //    $session_id_store = session('guest_cart_1.session');
       
        

       
     

        // $variableSetOnPageA = "Can be anything";
        // Session::put('variableSetOnPageA',$variableSetOnPageA);


    //    $model = new Cart_Item;
    //    $model->product_id = $id;

       
    //    $value = Session::get('guest_cart');

    //    $value = $model->session_id;

    //    dd($value);

    //    $model->session_id = $model->$variableSetOnPageA;


    //    $model->user_id = $model->user_id;
    //    $model->save();

    //    dd($new);
    //    $session_id_store = session('guest_cart.session');
  
    //    if(Auth::check()){

    //     foreach($new as $ne){
              
    //         // dd($guestCarti);

    //         Cart_Item::firstOrCreate([
    //             'product_id' => $ne->id,
    //             'session_id' => $ne->session_id,
    //             'user_id' => Auth::user()->id,
    //         ]);
    //      }
    //    }
       
       //    if(Auth::check()){

    //     Cart::instance('shoppingcart')->add($product_id,$product_name,1,$product_sale_price);
       
        // $value = session()->all();
        // dd($value);

        // dd('die');
        
        // $session_id = session()->getId();
        // $cart = Cart::content();
        // // // Session::flush();
        // // session()->flush();
        // dd($cart);
        // session()->flash('guest_cart', [
        //     'session' => session()->getId(),
        //     'data' => cart()->getContent() // i have a global cart() function in my app which sets the correct session
        // ]);

        return redirect()->route('product.cart');

    }

    
    public $sortBy = '';
    public $perPage = 3;


    public function render()
    {


        // if ($this->sortBy == 'featured') {
        //     $products = Product::where('featured', '1')->paginate($this->perPage);
        // } else if ($this->sortBy == 'low') {
        //     $products = Product::orderBy('sale_price', 'asc')->paginate($this->perPage);
        // } else if ($this->sortBy == 'heigh') {
        //     $products = Product::orderBy('sale_price', 'desc')->paginate($this->perPage);
        // } else if ($this->sortBy == '0') {
        //     $products = Product::paginate($this->perPage);
        // }else{
        //     $products = Product::paginate($this->perPage);
        // }

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
 
        // if(Auth::check()){

        //     Cart::instance('shoppingcart')->store('emali');
        //     // Cart::instance('shoppingcart')->store(Auth::user()->email);
        // }

        return view('livewire.products.product-index',[

            
            'products' => $products,

        ]);
    }
}
