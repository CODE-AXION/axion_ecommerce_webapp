<div>






    <div class="wrap-shop-control">

        <h1 class="shop-title">Digital & Electronics</h1>

        <div class="wrap-right">

            <div class="sort-item orderby ">
                <select name="sortBy" class="use-chosen" wire:model="sortBy">
                    <option value="" selected="selected">Default sorting</option>
                    <option value="featured">Featured</option>
                    {{-- <option value="menu_order" selected="selected">Default sorting</option> --}}
                    {{-- <option value="popularity">Sort by popularity</option>
                    <option value="rating">Sort by average rating</option>
                    <option value="date">Sort by newness</option> --}}
                    <option value="low">Sort by price: low to high</option>
                    <option value="heigh">Sort by price: high to low</option>
                </select>
            </div>


            {{-- <div class="sort-item ">
                <select name="sortBy" class="chosen" wire:model="sortBy">
                    <option value="default" selected="selected">Default sorting</option>
                    <option value="latest">Sort by Latest Product</option>
                    <option value="oldest">Sort by Oldest Product</option>
                    <option value="heigh">Sort by Featured Product</option>
                    <option value="low">Sort by price: low to high</option>
                    <option value="heigh">Sort by price: high to low</option>
                </select>
            </div> --}}



            <div class="sort-item product-per-page">
                <select name="perPage" class="use-chosen" wire:model="perPage" >
                    <option value="3" >3 per page</option>
                    <option value="16">16 per page</option>
                    <option value="18">18 per page</option>
                    <option value="21">21 per page</option>
                    <option value="24">24 per page</option>
                    <option value="30">30 per page</option>
                    <option value="32">32 per page</option>
                </select>
            </div>


            {{-- <div class="sort-item product">
                <select name="perPage" class="use-chosen" wire:model="perPage">
                    <option value="6" selected="selected">6 per page</option>
                    <option value="9">9 per page</option>
                    <option value="12">12 per page</option>
                    <option value="18">18 per page</option>
                    <option value="21">21 per page</option>
                    <option value="24">24 per page</option>
                </select>
            </div> --}}




            <div class="change-display-mode">
                <a href="#" class="grid-mode display-mode active"><i class="fa fa-th"></i>Grid</a>
                <a href="list.html" class="list-mode display-mode"><i class="fa fa-th-list"></i>List</a>
            </div>

        </div>

    </div><!--end wrap shop control-->

            <div class="row">

                    <ul class="product-list grid-products equal-container">

                    

            
                    @foreach ($products as $product)							
                    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem ">
                            <div class="product-thumnail">
                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{asset('assets/images/products/digital_20.jpg')}}" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>{{$product->name}}</span></a>
                                <div class="wrap-price"><span class="product-price">${{$product->sale_price}}</span></div>
                                <a href="#" class="btn add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </li>
                    @endforeach	
                        </ul>

            </div>



             {!! $products->links() !!}

        {{-- <div class="wrap-pagination-info">
            <ul class="page-numbers">
                <li><span class="page-number-item current" >1</span></li>
                <li><a class="page-number-item" href="#" >2</a></li>
                <li><a class="page-number-item" href="#" >3</a></li>
                <li><a class="page-number-item next-link" href="#" >Next</a></li>
            </ul>
            <p class="result-count">Showing 1-8 of 12 result</p>
        </div> --}}
    </div>



	
</div>
