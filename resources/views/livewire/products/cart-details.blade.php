<div>
    <div class="products_details_container">

        
        <div class="checkout_section_grid">
        
            <div class="shopping_cart_wrapper">



                <div class="cart_title_nav_wrapper">
                    <h2 class="cart_title_nav_1" >Shopping Cart</h2>
                    <h3 class="cart_title_nav_2" >{{Cart::content()->count()}} items</h3>

                    @if(!Cart::content()->count() > 0)
                    <h2 style="font-size:1.3rem;font-weight:400;">Cart Is Currently Empty</h2>
                    @endif

                </div>
                <div class="select_all_cart_items">
                    
                    <a  href="">Select All Cart Items</a>
                    <hr> 
                </div>
                <div class="cart_table">


                    @if(Session::has('message'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                    @endif

                    @foreach (Cart::content() as $cart_item)
                                        
                                           <div class=" checkout_cart_item"  wire:key="{{ $cart_item->rowId }}">
                
                                            <div class="checkout_image_title_wrapper">
                    
                                                <div class="select_cart_items">
                                                <input type="checkbox">
                                                </div>
                    
                                                <div class="checkout_cart_item_image">
                    
                                                    <img class="checkout_image" src="/ecommerce_layouts/images/sony_headphones.jpg" alt="">
                                                </div>
                    
                                                
                                                <div class="checkout_cart_item_details_wrapper">
                                                     <a href="{{route('product.show',['id'=> $cart_item->id,'slug'=> $cart_item->model->slug])}}">   
                                                    <h2 class="checkout_item_title" >{{$cart_item->name}}</h2>
                                                    </a>      
                                                    <div class="checkout_item_details">
                                                    <h2>${{$cart_item->model->sale_price}}</h2>
                    
                                                    <h4>In Stock</h4>
                                                        <div class="last_row_details">
                                                            
                                                         
                                                            
                                                            <div class="increase--wrapper" >
                                                              <div class="value-button" id="decrease" wire:click.prevent="decreaseQuantity('{{$cart_item->rowId}}')" onclick="decreaseValue()" value="Decrease Value">-</div>
                                                              <span style="padding-inline: 20px">{{$cart_item->qty}}</span> 
                                                              <div class="value-button" wire:click.prevent="increaseQuantity('{{$cart_item->rowId}}')" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                                                            </div>
                                                          
                                                            
                                                                {{-- <select class="quantity_select_option" wire:click.prevent="increaseQuantity({{$cart_item->rowId}})"  name="" id="">
                                                                
                                                                    @for ($i = 1; $i <=$cart_item->model->quantity; $i++)
                                                                    <option {{ $cart_item->quantity == $i ? 'selected' : '' }}>{{ $i }}</option>
                                                                @endfor
                                                                       
                                                                </select> --}}
                    
                                                                {{-- <span class="save_for_later" >SAVE FOR LATER</span> --}}
                                                              <button class="removeCartitem--btn" ><a class="remove_item" href="#" wire:click.prevent="destroy('{{$cart_item->rowId}}')" >Remove Item</a></button>
                                                        </div>     
                                                    </div> 
                                                </div>   
                                               
                                                    
                    
                                            </div>
                    
                                          
                                                
                                                    
                    
                                        </div>
                                           
                                      
                 

                    @endforeach
                  
                    @if(!Cart::content()->count() > 0)
                    <h2 style="text-align: center;margin-top:100px;font-weight:400;">No Items Was Found Try To Login And See</h2>
                    @endif





                </div>



            </div>
            

            <div class="checkout_wrapper">
                <h2 class="order-summary">order summary</h2>

                <div class="calculation_wrapper">
                    <div class="flex-checkout sub_total">
                        <p class="total_calculation-text" >Sub total (4 Items)</p>
                        <p class="total_calculation-text" >${{Cart::subtotal()}}</p>
                    </div>
                
                    <div class="flex-checkout shipping_total">
                        <p class="total_calculation-text" >Shipping</p>
                        <p class="total_calculation-text" >$60.00</p>
                    </div>
                    <hr>
                    <div class="flex-checkout tax">
                        <p class="total_calculation-text" >Tax</p>
                        <p class="total_calculation-text" >${{Cart::tax()}}</p>
                    </div>

                    <div class="flex-checkout tax">
                        <p class="total_calculation-text save" >You Save</p>
                        <p class="total_calculation-text" >$29.00</p>
                    </div>

                    <div class="discount_coupan_calculation">
                        <input class="input_coupan" type="text" placeholder="DISCOUNT COUPON">
                        <button class="btn-coupan">Apply Coupon</button>

                    </div>

                    <div class="flex-checkout tax">
                        <p>Grand Total</p>
                        <p><b>${{Cart::total()}}</b></p>
                    </div>

                    <div class="flex-checkout-btn checkout_button">
                        <button class=" btn-checkout"><span class=" btn-checkout-text"> Proceed To Buy</span></button>
                    </div>

                    <div class="flex-checkout small_text">
                        <p class="" ><a class="small_text" href="" wire:click.prevent="delete"  >Empty Cart ( X )</a></p>
                        <p class="" ><a class="small_text" href="{{route('shop.index')}}">Continue Shopping</a></p>
                    </div>

                </div>

            </div>

        </div>



    </div>

</div>
