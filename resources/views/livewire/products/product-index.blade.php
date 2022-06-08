<div>




    <div class="card_container products_swiper swiper" >

        <div class="sort_by_wrapper">
        
            <h2>Digital Electronics</h2>

            <form action="">
                <select wire:model="sortBy" class="sorting_sys" name="" id="">
                    <option value="">Default Sorting</option>
                    <option value="low">Price By low to heigh</option>
                    <option value="heigh">Price By heigh to low</option>
                    <option value="featured">sory by popularity</option>
                 
                </select>

                <select wire:model="perPage" class="sorting_sys" name="" id="">
                    <option value="0">SORT BY page</option>
                    <option value="3">3</option>
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                </select>
            </form>
            
        </div>

      
            <div class="card_section_1 " >


           @foreach ($products as $product)
               
           

                <div class="card_1 swiper-slide ">
                    <a href="{{route('product.show',['slug'=> $product->slug,'sku'=>$product->SKU])}}">
                        <div class="card_image_1"><img src="images/lenevo_laptop_1.webp" alt=""></div>
                        <div class="card_panel">
                            <div class="card_main_title_1"><h2>{{Str::limit($product->name,40)}}</h2></div>
        
                            
                            <div class="card_readmore"><span>{{$product->sale_price}}</span></div>
                            <button class="btn-buy_now"><a href="#" wire:click.prevent="store({{ $product->id }}, '{{ $product->name }}','{{ $product->sale_price }}')" >Add To Cart</a></button>
                        </div>
                    </a>
                </div>

            @endforeach


               
                

            </div>

        

        </div>
</div>
    


{!!$products->links()!!}
	
</div>
