<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;
use Cart;
use Auth;
use App\Models\Cart_Item;
use Session;

class ProductDetails extends Component
{
    public $product;

    public $qty;

    public function mount(){

        $this->qty = 1;
    }

    public function increaseQuantity()
    {

        $this->qty++;
        

    }

    public function decreaseQuantity()
    {
      
        if($this->qty > 1){
            
            $this->qty--;
        }
       
    }

    public function store($id,$product_name,$product_sale_price){

        
        
     
        
       Cart::add($id,$product_name,$this->qty,$product_sale_price)->associate('App\Models\Product');
        

     

       $session_id = session()->getId();
    //    if(Cart_Item::where('product_id', '=', $id)->exists()){
            
            if(Auth::check()){

                
                Cart_Item::UpdateOrCreate(['product_id' => $id], [
                    'product_id' => $id,
                    'session_id' =>  $session_id,
                    'user_id'=> Auth::user()->id,        
                    'quantity' => $this->qty + 1,
                ]);

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

    
    
   



    public function render()
    {

        return view('livewire.products.product-details');
    }
}
