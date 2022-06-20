<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;


use Auth; 
use Session;
use App\Models\Product;
use App\Models\Category;
use App\Models\Cart_Item;
use WithPagination;

use Cart;


class CategoryComponent extends Component
{


    public $category_slug;

    public $sortBy = '';
    public $perPage = 3;

    public function mount($category_slug){

        // dd($category_slug);
	    $this->category_slug = $category_slug;
    }




    public function store($id,$product_name,$product_sale_price){

        // dd($product_name);
    //     $removeDuplicates = Cart::content();


    //  foreach ($removeDuplicates as $duplicate) {
        
    //     // dd($id);
    //     if($duplicate->id == $id){
    //    return redirect()->route('shop.index');
    //     }

    //  }
        

        // $newcart = new Cart_Item();
        
        
            // dd($cartItem);
            // return $cartItem->rowId === $id;
            
        





    //  if($removeDuplicates->isNotEmpty()){
    //  }

       Cart::add($id,$product_name,1,$product_sale_price)->associate('App\Models\Product');
        
      
       $guestCarti = Cart::content();
       $session_id = session()->getId();
 
            if(Auth::check()){

                foreach($guestCarti as $guestCar){

                    // $product_1 = Cart_Item::where('product_id', '=', $guestCar->id)->exists();
                    // $user_1 = Cart_Item::find(Auth::user()->id);
                    //     if($product_1 == false or $user_1 == false ){

                            
                      


                            Cart_Item::UpdateOrCreate(['product_id' => $id], [
                                'product_id' => $id,
                                'session_id' =>  $session_id,
                                'user_id'=> Auth::user()->id,
                                'rowId'=> $guestCar->rowId,
                                'quantity' => 1,
                            ]);
            
                    }
                
                        // $product_1 = Cart_Item::where('session_id', '!=', $session_id)
                        //                                 ->where('product_id', '=', $guestCar->id)
                        //                                 ->where('user_id', '=',Auth::user()->id)
                        //                                 ->delete();
                // }         
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

        return redirect()->back()->with('message','Product ' .$product_name .'has been added to your cart');

    }















    public function render()
    {


        $categoryName = '';
        
           
             
                
                $category = Category::where('slug', $this->category_slug)->first();
          
	        	$categoryId = $category->id;
	         	$categoryName = $category->name;

                // dd($categoryName);

                 switch ($this->sortBy) {
                    case 'featured':
                        $products = Product::where('category_id',$categoryId)->where('featured', '1')->paginate($this->perPage);
                        break;
                    case 'low':
                        $products = Product::where('category_id',$categoryId)->orderBy('sale_price', 'asc')->paginate($this->perPage);
                        break;
                    case 'heigh':
                        $products = Product::where('category_id',$categoryId)->orderBy('sale_price', 'desc')->paginate($this->perPage);
                        break;
                    case '0':
                        $products = Product::where('category_id',$categoryId)->paginate($this->perPage);
    
                    default:
                        $products = Product::where('category_id',$categoryId)->paginate($this->perPage);
                }




        





        $categories = Category::all();
        // $products = Product::all();





        
        return view('livewire.products.category-component',[

            'categories'=> $categories,
            'categoryName'=> $categoryName,
        
            'products'=> $products,
        ]);
    }
}
