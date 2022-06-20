<div>
    





    <div class="product_showcase_wrapper">

        <div class="showcase_images">
               
            <div class="single_image_card">
                    <div class="product_showcase_single">
                        <img class="single_image_showcase" src="/ecommerce_layouts/images/sony_headphones.jpg" alt="">
                    </div>
            </div>

                <div class="product_showcase_multiple  owl-carousel owl-theme ">

                

                    <div class="product_images_card">
                        <div class="multiple_images_showcase">
                            <img  class="img_details img_details_1" src="/ecommerce_layouts/images/sony_headphones.jpg" alt="">
                        </div>
                    </div>
                    
                    
                    <div class="product_images_card">
                        <div class="multiple_images_showcase">
                            <img class="img_details img_details_1"  src="/ecommerce_layouts/images/beats_1.png" alt="">
                        </div>
                    </div>

                    
                    <div class="product_images_card">
                        <div class="multiple_images_showcase">
                            <img  class="img_details img_details_1" src="/ecommerce_layouts/images/PS5_pngformate.png" alt="">
                        </div>
                    </div>

                    <div class="product_images_card">
                        <div class="multiple_images_showcase">
                            <img class="img_details img_details_1"  src="/ecommerce_layouts/images/sony_headphones.jpg" alt="">
                        </div>
                    </div>

                    
                    <div class="product_images_card">
                        <div class="multiple_images_showcase">
                            <img  class="img_details img_details_1" src="/ecommerce_layouts/images/sony_headphones.jpg" alt="">
                        </div>
                    </div>

                </div>

             </div>


            <div class="product_short_details">


                <h2>{{$product->name}}</h2>

                    <div class="rating_system_wrapper">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span>(05 reviews)</span>
                    </div>

                        <div class="product_price_wrapper">

                            <div>M.R.P <span class="regular_price"> ${{$product->regular_price}}</span></div>

                            <div><span class="sale_price_text"> Price </span> <span class="sale_price">${{$product->sale_price}}</span></div>

                            @if ($product->stock_status == -1)
                            <div class="in_stock_wrapped"> Availability: <span class="in_stock" > Out Of Stock </span></div> 
                            @else
                            <div class="in_stock_wrapped"> Availability: <span class="in_stock" > In Stock </span></div> 
                            @endif
                        

                                                          @if(Session::has('message'))
                                                            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                                                            @endif

                                                          
                                                            <div class="increase--wrapper">
                                                              <div class="value-button" id="decrease" wire:click.prevent="decreaseQuantity" onclick="decreaseValue()" value="Decrease Value">-</div>
                                                              <span  wire:model="qty" style="padding-inline: 20px">{{$this->qty}}</span>
                                                            

                                                              <div class="value-button" wire:click.prevent="increaseQuantity" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                                                            </div>
                                                         


                        </div>

                            <div class="brand_short_description_wrapper">
                                
                                <ul>
                                    <li class="short_description_list" >{{$product->short_description}}</li>
                                
                                </ul>

                            </div>

                <div class="carts_wishlists_buttons_wrapper">

                    <button class="add_to_cart"><a class="add_to_cart_text" href="#"  wire:click.prevent="store({{ $product->id }}, '{{ $product->name }}','{{ $product->sale_price }}')" >ADD TO CART</a></button>
                    <button class="add_to_wishlist"><a class="add_to_wishlist_text" href="">ADD TO WISHLIST</a></button>

                </div>

            </div>

            <div class="additional_details_wrapper">
        
            <input type="radio" hidden name="slider" checked id="long_description_bullet">
            <input type="radio" hidden name="slider" id="additional_information_bullet">
            <input type="radio" hidden name="slider" id="misc_bullet">
    
            <nav>
                <label for="long_description_bullet" class="long_description_bullet">Long Description</label>
                <label for="additional_information_bullet" class="additional_information_bullet">Product Details</label>
                <label for="misc_bullet" class="misc_bullet">Misc</label>
                <div class="slider"></div>
            </nav>
    
            <section class="addition--content">
    
                <div class="content content-1">
                    <p>
    
                    {{$product->description}}
    
                    </p>
                </div>
    
                <div class="content content-2">
    
    
    
                    <p>  {{$product->product_details}}</p>
                </div>
    
                <div class="content content-3">
                    <p>Lorem ipsum dolor sit amet, an milique, et blandit scriptorem tatibus mea. Vis quaeque ocurreret ea.cu bus scripserit, modus voluptaria ex per. 
                        
                        </p>
                </div>
    
    
            </section>
    

        </div>





    </div>






</div>
