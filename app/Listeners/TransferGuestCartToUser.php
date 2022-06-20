<?php

namespace App\Listeners;


use App\Models\Cart_Item;
use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Cart;
use Auth;


class TransferGuestCartToUser
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \Illuminate\Auth\Events\Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        // cart()->session($event->user->id);
            $userCart = Cart::Content();
            $userCartItems = $userCart->toArray();

            if (session('guest_cart.data') != null ) {
                $guestCart = session('guest_cart.data');
                $session_id_store = session('guest_cart.session');
                // dd($guestCart);
                // dd($session_id_store);
                // // $guestCartItems = $guestCart->toArray();
             
                //COMMENTED OUT - IN DEVELOPMENT CODE

                foreach($guestCart as $guestCartitem){
              
                   
                    // $product = Cart_Item::where('user_id', '!=', Auth::user()->id)
                    //                                                 ->where('product_id','=',$guestCartitem->id)->exists();
                        $product = Cart_Item::find($guestCartitem->id);
                        $user_1 = Cart_Item::find(Auth::user()->id);

                            if($product == true or $user_1 == false ){

                                if(Auth::check()){
                                  
                                    Cart_Item::UpdateOrCreate([
                                        'product_id' => $guestCartitem->id,
                                        'session_id' => $session_id_store,
                                        'quantity' => $guestCartitem->qty + 1,
                                        'rowId' => $guestCartitem->rowId,
                                        'user_id' => Auth::user()->id,
                                    ]);
                             
                                    // $product_1 = Cart_Item::where('session_id', '!=', $session_id_store)
                                    // ->where('product_id', '=', $guestCartitem->id)
                                    // ->where('user_id', '=',Auth::user()->id)
                                    // ->delete();
                            }

                        }

                       
                            
                            
                          
                            // dd($CHECK);   
                     

                        // if(Auth::check()){
                        //     $product_1 = Cart_Item::where('user_id', '=', Auth::user()->id);
                    
                        //     $product_2 = Cart_Item::where('product_id', '=', $guestCartitem->id)->exists();
        
                        //     if($product_1 && $product_2){
                            
                        //         $product_2 = Cart_Item::where('product_id', '=', $guestCartitem->id)->delete();
        
                        //     }


                        // }
                       
                        
                    }

                    // if($product_1 = Cart_Item::where('product_id', '=', $guestCartitem->id)->exists()){
                    //     $product_1 = Cart_Item::where('product_id', '=', $guestCartitem->id)->delete();
                    // }
                }
                // if(Auth::check()){
                // $product = Cart_Item::where('session_id', '!=', $session_id_store)->delete();
                // //COMMENTED OUT - IN DEVELOPMENT CODE
                // }
                // dd($guestCart);
            

         




         if ($userCart->isNotEmpty() && !empty($guestCart)) {
                //COMMENTED OUT - IN DEVELOPMENT CODE
                            //     foreach($guestCart as $guestCartitem){
                            
                            //     // dd($cart__items);

                            //     Cart_Item::firstOrCreate([
                            //         'product_id' => $guestCartitem->id,
                            //         'user_id' => Auth::user()->id,
                            //     ]);
                            // }// dd($guestCartItems);
                //COMMENTED OUT - IN DEVELOPMENT CODE

                // $maxUserCartId = max(array_column($userCartItems, 'id'));

             

                // $guestCartItems = array_map(function ($item) use (&$maxUserCartId) {
                //     return array_merge($item, ['id' => ++$maxUserCartId]);
                // }, $guestCartItems);

            }







            // if ($userCart->isNotEmpty() && !empty($guestCartItems)) {

            //     // dd($guestCartItems);


            //     // $maxUserCartId = max(array_column($userCartItems, 'id'));

             

            //     // $guestCartItems = array_map(function ($item) use (&$maxUserCartId) {
            //     //     return array_merge($item, ['id' => ++$maxUserCartId]);
            //     // }, $guestCartItems);

            // }

          
            // $cart__items = (object) $guestCartItems;

            // // dd($cart__items);
     
            // // iterate through the products and store them into the database
      

            // $userCart->add($guestCartItems);

            // Cart::instance('shoppingcart')->store('email');
            // dd($userCart);

        //  $dbCart = Cart::find(session('guest_cart.session') . 'cart_items'); // <- using DB storage for cart

        //     // get all items
            // $guestCartItems = Cart::content();
            
            // foreach($guestCartItems as $guest_item){
               
            //     dd($guestCartItems);
            // }

            // dd('done');

         

                

       
    }
}
