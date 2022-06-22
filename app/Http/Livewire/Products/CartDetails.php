<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;
use Auth;
use Cart;
use App\Models\Cart_Item;

use Session;

class CartDetails extends Component
{
    
    // public $cart_storage = [
        
    //     'product_id' => '',
    //     'session_id' =>'' , 
    //     'user_id'=> '',
    //     'rowId'=> '',
    //     'quantity' =>'',

    // ];


    public function increaseQuantity($rowId)
    {
        
        

        $cart_item = Cart::get($rowId);

        $session_id = session()->getId();
      
        $qty = $cart_item->qty + 1;
        // $this->cart_storage=[
        //     'product_id' => $cart_item->model->id,
        //     'session_id' =>  $session_id,
        //     'user_id'=> Auth::user()->id,
        //     'rowId'=> $cart_item->rowId,
        //     'quantity' => $cart_item->qty + 1,
        // ];

        if($cart_item->model->quantity > $cart_item->qty){

            if(Auth::check()){
                
                // dd($cart_item->id);

                // $cart_table_update = Cart_Item::where('rowId', $cart_item->rowId);
                // // dd($cart_table_update);
                // // $cart_table_update = new Cart_Item();
                
                // $cart_table_update->product_id = $cart_item->id;
                // // dd($cart_table_update->product_id);
                // $cart_table_update->quantity = $cart_item->qty;  
                // $cart_table_update->user_id = Auth::user()->id;
                // $cart_table_update->rowId = $cart_item->rowId;
                // $cart_table_update->update();
                
                
                // $record = Contact::find($this->selected_id);
               
                Cart_Item::updateOrCreate(['product_id' => $cart_item->model->id], [
                    'product_id' => $cart_item->model->id,
                    'session_id' =>  $session_id,
                    'user_id'=> Auth::user()->id,
                    'rowId'=> $cart_item->rowId,
                    'quantity' => $cart_item->qty + 1,
                ]);
         
    
          
                // $product_1 = Cart_Item::where('session_id', '!=', '9NG9zVoBDucTF9uFdopq5HLxozBVzL1urKRqwgrv')
                // ->where('product_id', '=', $cart_item->model->id)
                // ->where('user_id', '=',Auth::user()->id)
                // ->delete();



                
                
               
            }


            Cart::update($rowId,$qty);
            
           
            // dd($this->cart_storage);
    
            // $product_1 = Cart_Item::where('product_id', '=', $cart_item->id)
            // ->where('user_id', '=',Auth::user()->id)
            // ->delete();

        }else{
            Session::flash('message', 'The Product Quantity Has Been Exceeded,Cannot Add More Items');
        }
        

    }

    public function checkout()
    {
        if(Auth::check()){
            return redirect()->route('checkout.index');
        }else{
            return redirect()->route('login', ['register' => 'checkout'] );
           
        }
    }

    public function setAmountCheckout()
    {
        if(!Session::has('coupan')){

        
            dd($valuee);
        }

    }

    public function decreaseQuantity($rowId)
    {
        $cart_item = Cart::get($rowId);
        $session_id = session()->getId();
        if(Auth::check()){
                
            // dd($cart_item->id);
           
            // $cart_table_update = Cart_Item::where('rowId', $cart_item->rowId);
            // // dd($cart_table_update);
            // // $cart_table_update = new Cart_Item();
            
            // $cart_table_update->product_id = $cart_item->id;
            // // dd($cart_table_update->product_id);
            // $cart_table_update->quantity = $cart_item->qty;  
            // $cart_table_update->user_id = Auth::user()->id;
            // $cart_table_update->rowId = $cart_item->rowId;
            // $cart_table_update->update();
            
            
            // $record = Contact::find($this->selected_id);

            Cart_Item::updateOrCreate(['rowId' => $cart_item->rowId], [
                'product_id' => $cart_item->model->id,
                'session_id' =>  $session_id,
                'user_id'=> Auth::user()->id,
                'rowId'=> $cart_item->rowId,
                'quantity' => $cart_item->qty - 1,
            ]);

           

            // $product_1 = Cart_Item::where('session_id', '!=', '9NG9zVoBDucTF9uFdopq5HLxozBVzL1urKRqwgrv')
            // ->where('product_id', '=', $cart_item->model->id)
            // ->where('user_id', '=',Auth::user()->id)
            // ->delete();



            

           
        }
        

        
        Cart::update($rowId,$cart_item->qty - 1);
        
        
       
    }

    public function destroy($rowId)
    {
        Cart::remove($rowId);
    }


    public function delete()
    {
        Cart::destroy();
    }

    public function render()
    {
        return view('livewire.products.cart-details');
    }
}
