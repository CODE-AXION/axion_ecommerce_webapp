<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" > -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" >
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style2.css')}}">

</head>
<body>
    


    <header class="wrapper bimage">

        <input type="checkbox" id="show_search">
        <h1 class="logo">CODE AXION</h1>
        <h1 class="logo_2">CA</h1>
    
    
        <div class="search_class" >
    
            <form action="" class="search_box" method="get"  >
    
                <input class="search_bar"  type="text" placeholder="Search for Security Articles..">
    
              <button class="go_icon"   type="submit" > <img class="search-icon" src="search_icon.svg"></button>
    
            </form>
    
        </div>  <label for="show_search" class="search_icon"><i class="fas fa-search"></i></label>
    
    
    
    
        @if(Auth::guard('web')->check())
     
    
    <div class="ecommerce_account_wrapper">
        <div class="your_account_wrapper">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
              </svg>
              <h6 class="your_account">
                  My Account
              </h6>
    
    
     
             <div class="your_account_dropdown">
    
                
                <ul class="your_acc">
                    <li class="your_acc_dropdown_level_1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                          </svg>
    
    
                         <h5 class="common_acc" >{{Auth::guard('web')->user()->name}} </h5>
                        
                        </li>
    
                       
    
    
                            <li class="your_acc_dropdown_level_1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
                                    <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
                                  </svg>
            
            
                                 <h5 class="common_acc" > Keyboard </h5>
                                
                                </li>
    
    
    
    
                                <li class="your_acc_dropdown_level_1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
                                      </svg>
                
                
                                     <h5 class="common_acc" > Settings </h5>
                                    
                                    </li>
    
    
    
                                <hr>
    
    
    
    
    
                                <li class="your_acc_dropdown_level_1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                        <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                        <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                                      </svg>
                
                
                                     <h5 class="common_acc" > Help </h5>
                                    
                                    </li>
    
    
                                <li class="your_acc_dropdown_level_1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                      </svg>
                
                
                                     <h5 class="common_acc" > 
                                     
                                        
                                         <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button class="btn-logout" type="submit">Sign Out</button>
                                          </form>
                                        
                                        </h5>
                                    
                                    </li>
                
    
    
    
    
    
                </ul>
            </div>
    
    
    
    
    
    
    
    
    
    
        </div>
    
    
        <div class="wishlist_wrapper">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-heart" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5Zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0ZM14 14V5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1ZM8 7.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
              </svg>
              <h6 class="wishlist">
                  Wishlist
              </h6>
        </div>
    
        <div class="cart_wrapper">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
              </svg>
              
            <h6 class="shopping_cart">Cart</h6>
        </div>
    </div>
    
       
        @else
        <div class="login_btn">
            <a class="cta" href="{{route('login')}}"><button class="btn_sign btn_2">Login</button></a>
        </div>
        <div class="login_btn" >
            <a class="cta" href="{{route('register')}}"><button class="btn_sign">Join</button></a>
        </div> 
        @endif
    
    
    </header>
    
    
    
    <!-- ========================================================================= -->
    
    <div class="main_dropdown_container">
       
      
        <div class="dropdown_logo_bar_li" onclick="toggle_bar()" id="toggle_bar" ><i class="fas fa-bars dropdown_logo_bar bar " ></i></div>
    
        <nav class="navbar_container toggle">
                <div class="main_navbar">
                   
                    <ul class="main_navbar_ul">
                    
                        <li class="navbar_level_1_li"><a href="" class="navbar_level_1_link">Electronics</a></li>
                        <li class="navbar_level_1_li"><a href="" class="navbar_level_1_link">Furniture</a></li>
                        <li class="navbar_level_1_li ">
                            <a href="" class="navbar_level_1_link">Clothes</a>
                        
                                <ul class="dropdown_level_1">
    
                                        <li class="navbar_level_2_li"><a href="#" class="navbar_level_2_link">STOCKS AND PROFTI</a></li>
                                        <li class="navbar_level_2_li"><a href="#" class="navbar_level_2_link">STOCKS AND PROFTI</a></li>
                                        <li class="navbar_level_2_li"><a href="#" class="navbar_level_2_link">STOCKS AND PROFTI</a></li>
                                        <li class="navbar_level_2_li"><a href="#" class="navbar_level_2_link">STOCKS AND PROFTI</a></li>
    
    
    
                                </ul>
    
                        
                        </li>
                        <li class="navbar_level_1_li">
                            Mobiles
    
    
                                    <div class="mega_dropdown_container">
    
                                            <div class="row row1">
                                                <h2 class="mega_header">Mobiles</h2>
                                                <ul class="mega_ul" id="first_ul">
    
                                                    <li class="mega_li"><a href="#" class="mega_links">Web Development</a></li>
                                                    <li class="mega_li"><a href="#" class="mega_links">Machine Learning</a></li>
                                                    <li class="mega_li"><a href="#" class="mega_links">Artificial Intelligence</a></li>
                                                    <li class="mega_li"><a href="#" class="mega_links">Cloud Computing</a></li>
                                                    <li class="mega_li"><a href="#" class="mega_links">Devops Insecure</a></li>
                                                </ul>
    
                                            </div>
                                          
                                            <div class="row row2">
                                                <h2 class="mega_header">Security</h2>
                                                <ul class="mega_ul li_border">
                                                   
                                                    <li class="mega_li"><a href="#" class="mega_links">Web Development</a></li>
                                                    <li class="mega_li"><a href="#" class="mega_links">Machine Learning</a></li>
                                                    <li class="mega_li"><a href="#" class="mega_links">Artificial Intelligence</a></li>
                                                    <li class="mega_li"><a href="#" class="mega_links">Cloud Computing</a></li>
                                                    <li class="mega_li"><a href="#" class="mega_links">Devops Insecure</a></li>
                                                </ul>
                                                
                                            </div>
    
                                            <div class="row row3">
                                                <h2 class="mega_header">Cloud</h2>
                                                <ul class="mega_ul li_border">
    
                                                    <li class="mega_li"><a href="#" class="mega_links">Web Development</a></li>
                                                    <li class="mega_li"><a href="#" class="mega_links">Machine Learning</a></li>
                                                    <li class="mega_li"><a href="#" class="mega_links">Artificial Intelligence</a></li>
                                                    <li class="mega_li"><a href="#" class="mega_links">Cloud Computing</a></li>
                                                    <li class="mega_li"><a href="#" class="mega_links">Devops Insecure</a></li>
                                                </ul>
                                                
                                            </div>
    
    
    
    
    
    
                                    </div>
    
    
                        
                        </li>
                        <li class="navbar_level_1_li"><a href="" class="navbar_level_1_link">New Releases</a></li>
    
    
                    </ul>
    
    
    
                </div>
        </nav>
    </div>
    



<!-- ======================================= M A I N   C O N T E N T ========================================== -->
    



<div class="product_details_body">

        <div class="products_details_container">

        
            <div class="checkout_section_grid">
            
                <div class="shopping_cart_wrapper">



                    <div class="cart_title_nav_wrapper">
                        <h2 class="cart_title_nav_1" >Shopping Cart</h2>
                        <h3 class="cart_title_nav_2" >3 items</h3>


                    </div>
                    <div class="select_all_cart_items">
                        
                        <a  href="">Select All Cart Items</a>
                        <hr> 
                    </div>
                    <div class="cart_table">


                    

                        @foreach (Cart::content() as $cart_item)
                        {{-- {{dd(Cart::content() )}} --}}
                 
                            
                       
                        
                        <div class=" checkout_cart_item">
                    
                            <div class="checkout_image_title_wrapper">

                                <div class="select_cart_items">
                                <input type="checkbox">
                                </div>

                                <div class="checkout_cart_item_image">

                                    <img class="checkout_image" src="/ecommerce_layouts/images/sony_headphones.jpg" alt="">
                                </div>

                                
                                <div class="checkout_cart_item_details_wrapper">

                                    <h2 class="checkout_item_title" >{{$cart_item->name}}</h2>
                                    <div class="checkout_item_details">
                                    <h2>$299.00</h2>

                                    <h4>In Stock</h4>
                                        <div class="last_row_details">
                                                <select class="quantity_select_option" name="" id="">
                                                    <option value="">Qty: 1</option>
                                                    <option value="">2</option>
                                                    <option value="">3</option>
                                                    <option value="">4</option>
                                                    <option value="">5</option>
                                                </select>

                                                <span class="save_for_later" >SAVE FOR LATER</span>
                                                <a class="remove_item" href="">Remove Item</a>
                                        </div>     
                                    </div> 
                                </div>   
                                

                            </div>


                                
                                
                                    

                        </div>
                 

                        @endforeach
                      






                    </div>



                </div>
                

                <div class="checkout_wrapper">
                    <h2 class="order-summary">order summary</h2>

                    <div class="calculation_wrapper">
                        <div class="flex-checkout sub_total">
                            <p class="total_calculation-text" >Sub total (4 Items)</p>
                            <p class="total_calculation-text" >$500.00</p>
                        </div>
                    
                        <div class="flex-checkout shipping_total">
                            <p class="total_calculation-text" >Shipping</p>
                            <p class="total_calculation-text" >$60.00</p>
                        </div>
                        <hr>
                        <div class="flex-checkout tax">
                            <p class="total_calculation-text" >Tax</p>
                            <p class="total_calculation-text" >$30.00</p>
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
                            <p><b>$580.00</b></p>
                        </div>

                        <div class="flex-checkout-btn checkout_button">
                            <button class=" btn-checkout"><span class=" btn-checkout-text"> Proceed To Buy</span></button>
                        </div>

                        <div class="flex-checkout small_text">
                            <p class="" ><a class="small_text" href="">Empty Cart ( X )</a></p>
                            <p class="" ><a class="small_text" href="">Continue Shopping</a></p>
                        </div>

                    </div>

                </div>

            </div>



        </div>

</div>







<!--======================================= MAIN FOOTER =========================== -->


<div class="footer_section">

    <!--======================================= FOOTER TOP SECTION START =========================== -->
            <div class="subscriber_head">
    
                <h1 id="free_daily_updates">Free Daily Updates</h1>
    
                
                <form action="" class="subscriber_search_box" method="get"  >
                    
                    <input class="subscriber_search_bar" type="text" placeholder="Search for datasets, APIs, ">
    
               
                    <button class="subscriber_button" type="submit" >Subscribe</button>
            </form>
    
            </div>
    
            
    <!--======================================= FOOTER TOP SECTION ENDS =========================== -->
    
    <!--======================================= FOOTER MID SECTION START =========================== -->
    
            <div class="subscriber_mid">
    
            <div class="first_para">
                <div class="footer_logo"><h1>LOGO</h1></div>
                        <div class="footer_para">
                            
                            <h3 id="footer_first_head">Start Your Jounery Now</h3>
                            <br>
                   
                            <h5>Michael-Miller99@gmail.com</h5>
                            <h5>www.Devlop-Security.com</h5>
                       
                        </div>
    
                   
                    </div>
              
                    
                 
                    <div class = "vertical2"></div>   <div class = "horizontal"></div> 
                    <div class="middle_para">
                    
                        <div class="footer_About">
                            <h4 class="footer_About_para"><a class="footer_About_head" href="#">About</a></h5>
                            <h5 class="footer_About_para"><a class="footer_About_links" href="">Terms of use</a></h5>
                            <h5 class="footer_About_para"><a class="footer_About_links" href="">Privacy Policy</a></h5>
                            <h5 class="footer_About_para"><a class="footer_About_links" href="">Risk Of Factor</a></h5>
                            <h5 class="footer_About_para"><a class="footer_About_links" href="">Risk Of Factor</a></h5>
    
    
                        </div>
    
                        <div class="footer_About">
                                <h4 class="footer_About_para"><a class="footer_About_head" href="#">Policies</a></h5>
                                <h5 class="footer_About_para"><a class="footer_About_links" href="">Terms of use</a></h5>
                                <h5 class="footer_About_para"><a class="footer_About_links" href="">Privacy Policy</a></h5>
                                <h5 class="footer_About_para"><a class="footer_About_links" href="">Risk Of Factor</a></h5>
                                <h5 class="footer_About_para"><a class="footer_About_links" href="">Risk Of Factor</a></h5>
                        </div>
    
                        <div class="footer_About">
                            <h4 class="footer_About_para"><a class="footer_About_head" href="#">What's New</a></h5>
                            <h5 class="footer_About_para"><a class="footer_About_links" href="">Terms of use</a></h5>
                            <h5 class="footer_About_para"><a class="footer_About_links" href="">Privacy Policy</a></h5>
                            <h5 class="footer_About_para"><a class="footer_About_links" href="">Risk Of Factor</a></h5>
                            <h5 class="footer_About_para"><a class="footer_About_links" href="">Risk Of Factor</a></h5>
    
    
                        </div>
    
                        <div class="footer_About">
                                <h4 class="footer_About_para"><a class="footer_About_head" href="#">Legal</a></h5>
                                <h5 class="footer_About_para"><a class="footer_About_links" href="">Terms of use</a></h5>
                                <h5 class="footer_About_para"><a class="footer_About_links" href="">Privacy Policy</a></h5>
                                <h5 class="footer_About_para"><a class="footer_About_links" href="">Risk Of Factor</a></h5>
                                <h5 class="footer_About_para"><a class="footer_About_links" href="">Risk Of Factor</a></h5>
                        </div>
    
    
                    </div>
    
                    
    
                    
                    <div class = "vertical"></div><div class = "horizontal2"></div> 
    
                <div class="last_para">
    
                    <div class="footer_last">
                        <p class="quick_signup">Quick Signup</p>
                        <h5 id="free_daily_updates">This 3 Minute Will Take Your Newslatter To Harry Potter House So Dont Forget To Subscribe</h5>
                        <form action="" class="footer_form_mid" method="get"  >
                    
                            <input class="footer_mid_subscribe_bar" type="text" placeholder="Search for datasets, APIs, ">
            
                       
                            <button class="footer_mid_subscriber_button" type="submit" >Subscribe</button>
                    </form>
                    </div>
    
                    <div class="contacts">
                        <h4>Connect:
                      
                        </h4>
                        <div class="icon_section">
                        <a class="footer_mid_icons" href=""><i class="fab fa-twitter footer_mid_icons_inner"></i></a>
                        <a class="footer_mid_icons" href=""><i class="fab fa-instagram footer_mid_icons_inner"></i></a>
                        <a class="footer_mid_icons" href=""><i class="fab fa-linkedin footer_mid_icons_inner"></i></a>
                        <a class="footer_mid_icons" href=""><i class="fab fa-youtube footer_mid_icons_inner"></i></a>
                        <a class="footer_mid_icons" href=""><i class="fab fa-twitter footer_mid_icons_inner"></i></a>
                    </div>
                    </div>
    
                </div>
    
            </div>
    
    <!--======================================= FOOTER MID SECTION ENDS =========================== -->
    
    <!--======================================= FOOTER LAST SECTION START =========================== -->
        <div class="subscriber_last">
    
    
    
            <div class="footer_logo_last"><h1>LOGO</h1></div>
            <div class = "vertical3"></div>
            <div class = "footer_last_mid_para"><p id="unleash">Unleash The Power Of Security And Development</p></div>
            <div class = "footer_last_last_para">
                <p class="copyright2">COPYRIGHT 2022 &copy; All right reserved</p>
                <p class="copyright2">ALL Trademark are registered to their respective owners bros</p>
            </div>
    
        </div>
    <!--======================================= FOOTER LAST SECTION ENDS =========================== -->
    
    </div>
    
    <!--======================================= MAIN FOOTER ENDS =========================== -->
    



<!-- ======================================= M A I N   C O N T E N T ========================================== -->




    <script>
    
            let toggle = document.getElementsByClassName('toggle_bar');
    
            function toggle_bar() {
    
             let element = document.querySelector(".toggle");
             element.classList.toggle("show")
             
             let element2 = document.querySelector(".bar")
             element2.classList.toggle("bar2")
            
             
              
                
                
            }
    
            
           
    
    </script>
    




    </body>
    </html>