<!-- <script>
    document.addEventListener('contextmenu', function (e) {
        e.preventDefault();
    });

</script> -->
{{-- <header class="header-area header-style-1 header-height-2">
    <div class="header-top header-top-ptb-1 d-none d-lg-block" style="background-color: black !important;">
        <div class="row m-0  align-items-center ">
            <marquee class="text-light">
                Get great devices up to 50% off <a href="#" class="text-light">View details</a>
            </marquee>
        </div>
    </div>
    <div class="header-middle py-2 d-none d-lg-block">
        <div class="container">
            <div class="header-wrap">
                <div style="width:50%;display:flex">
                    <div class="customer-support b1" aria-label="Customer Support" style="padding-right:5px">24/7 Customer Support</div>
                    <div class="contact-details" style="border-left: 2px solid;padding-left: 5px;"><a class="call b1 animated-title notranslate" target="_blank" href="/b/contact-us" aria-label="+1-844-527-4367 - open in a new tab" data-uw-rm-ext-link="" uw-rm-external-link-id="#" data-uw-rm-brl="PR" data-uw-original-href="#">+919610000114</a></div>
                </div>
                <div class="header-right text-center">
                        <div class="">
                        <a href="{{ url('/') }}">
                        <!-- <h2 class="brand_logo">Huzuur</h2> -->
                        <img src="{{asset('assets/images/logo.png')}}" width="110px" alt="">
                    </a>
                        </div>
                      </div>
                    <div class="header-action-right">
                        <div class="header-action-2">
                        <input type="text" placeholder="Search . . ." required>
                            <div class="header-action-icon-2">
                                <a href="{{ route('wishlist')}}">
                                    <i class="fa-regular fa-heart fs-5"></i>
                                    <span class="pro-count blue">4</span>
                                </a>
                            </div>
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="{{route('cart')}}">
                                    <!-- <img alt="Evara" src="{{asset('assets/images/icons/icon-cart.svg')}}"> -->
                                    <i class="fa fa-shopping-cart fs-5"></i>
                                    <span class="pro-count blue">2</span>
                                </a>
                            </div>
                            <div class="header-action-icon-2">
                                <a href="{{route ('userlogin')}}"><i class="fa-regular fa-user fs-5"></i></a>
                            </div>
                            <!-- <div class="header-action-icon-2">
                                <a href="#"><i class="fa-solid fa-location-dot"></i></a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom header-bottom-bg-color sticky-bar">
        <div class="container">
            <div class="header-wrap header-space-between position-relative">
                <div class="logo logo-width-1 d-block d-lg-none d-xl-none">
                    <a href="{{ url('/') }}">
                        <h2 class="brand_logo"><img src="assets/images/fav_logo.png" class="img-fluid" alt=""></h2>
                    </a>
                </div>
                <div class="header-nav d-none d-lg-flex">
                    <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                        <nav>
                            <ul class="d-flex">
                                <div class="align-self-center">
                                    <a href="{{ url('/') }}">
                                        <img id="image" src="assets/images/fav_logo.png" width="90px" class="mt-2 me-4"
                                            style="display: none;" alt="">
                                    </a>
                                </div>
                                <script>
                                    window.addEventListener('scroll', function () {
                                        var scrollPosition = window.scrollY;
                                        var image = document.getElementById('image');

                                        if (scrollPosition > 200 && image.style.display === 'none') {
                                            image.style.display = 'block';
                                        } else if (scrollPosition <= 100 && image.style.display === 'block') {
                                            image.style.display = 'none';
                                        }
                                    });
                                </script>
                                @foreach($formatTreeCategory as $treeCategory)  
                                        <li class="position-static" style="text-transform: uppercase;"><a href="{{ route($treeCategory->url) }}">{{$treeCategory->name}}  <i class="fa-solid fa-angle-down"></i></a>
                                            <ul class="mega-menu">
                                            @if(isset($treeCategory->children))
                                            @foreach($treeCategory->children as $treeCategoryChildren)
                                                @if($treeCategoryChildren->children->isEmpty())
                                                <li class="sub-mega-menu sub-mega-menu-width-22">
                                                    <a class="menu-title" href="javascript:void(0)">{{$treeCategoryChildren->name}}</a>
                                                    <ul>
                                                        
                                                        
                                                        @foreach($subChieldcategory as $_subChieldcategory)
                                                            @if($treeCategory->id == $_subChieldcategory->parent_category && $treeCategoryChildren->id == $_subChieldcategory->sub_category)
                                                                <li>
                                                                    <a href="{{ route('child_category_details', ['slug' => $treeCategory->url, 'child_slug' => $_subChieldcategory->url]) }}">
                                                                        <img src="{{ asset('storage/category_img/' . $_subChieldcategory->image) }}" class="stone_shape" alt="">
                                                                        {{ $_subChieldcategory->name }}
                                                                    </a>
                                                                </li>
                                                            @endif
                                                        @endforeach

                                                        
                                                        
                                                        

                                                    </ul>   
                                                </li>
                                                @endif
                                            @endforeach
                                            @endif
                                                
                                            </ul>
                                        </li>
                                        @endforeach
                                <!-- <li>
                                    <a href="{{ route('buy-Only-Gamstones') }}">BUY GEMS</i></a>
                                </li> -->
                                <li>
                                    <div>
                                        <a href="{{ route('business_us') }}" class="bg-dark text-light p-2 rounded">Business With us</i></a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a  href="{{ route('customizaton') }}" class="bg-dark text-light p-2 rounded">Customization</i></a>
                                    </div>
                                </li>
                                <!-- <li><a href="javascript:void(0)">MORE<i class="fa-solid fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="your_Donations.html">Your Donation</i></a>
                                        </li>
                                        <li>
                                            <a href="customizaton.html">Customizaton</i></a>
                                        </li>
                                       
                                    </ul>
                                </li> -->
                                <!-- <li><a href="javascript:void(0)">GIFT<i class="fa-solid fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="your_Donations.html">Under 10$</i></a>
                                        </li>
                                        <li>
                                            <a href="customizaton.html">Under 20$</i></a>
                                        </li>
                                       
                                    </ul>
                                </li> -->
                                <!-- <a href="Business_With_Us.html"
                                    class="border rounded px-2 rounded py-2 text-light fw-bold  align-self-center"
                                    style="background-color: black;">BUSINESS WITH US</i></a>
                                <a href="Customization-2.html"
                                    class="border rounded px-2 py-2 text-light rounded fw-bold  ms-3 align-self-center"
                                    style="background-color: black;;">CUSTOMIZED JEWELRY</i></a> -->
                            </ul>
                        </nav>
                    </div>
                </div>
                <p class="mobile-promotion">Happy <span class="text-brand">Mother's Day</span>. Big Sale Up to 40%</p>
                <div class="header-action-right d-block d-lg-none">
                    <div class="header-action-2">
                        <div class="header-action-icon-2">
                            <a href="shop-wishlist.html">
                                <img alt="Evara" src="assets/imgs/theme/icons/icon-heart.svg">
                                <span class="pro-count white">4</span>
                            </a>
                        </div>
                        <div class="header-action-icon-2">
                            <a class="mini-cart-icon" href="shop-cart.html">
                                <img alt="Evara" src="assets/imgs/theme/icons/icon-cart.svg">
                                <span class="pro-count white">2</span>
                            </a>
                            <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                <ul>
                                    <li>
                                        <div class="shopping-cart-img">
                                            <a href="shop-product-right.html"><img alt="Evara"
                                                    src="assets/imgs/shop/thumbnail-3.jpg"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="shop-product-right.html">Plain Striola Shirts</a></h4>
                                            <h3><span>1 × </span>$800.00</h3>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="fi-rs-cross-small"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="shopping-cart-img">
                                            <a href="shop-product-right.html"><img alt="Evara"
                                                    src="assets/imgs/shop/thumbnail-4.jpg"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="shop-product-right.html">Macbook Pro 2022</a></h4>
                                            <h3><span>1 × </span>$3500.00</h3>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="fi-rs-cross-small"></i></a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="shopping-cart-footer">
                                    <div class="shopping-cart-total">
                                        <h4>Total <span>$383.00</span></h4>
                                    </div>
                                    <div class="shopping-cart-button">
                                        <a href="shop-cart.html">View cart</a>
                                        <a href="shop-checkout.html">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="header-action-icon-2 d-block d-lg-none">
                            <a href=""><i class="fa-regular fa-user"></i></a>
                        </div> -->
                        <div class="header-action-icon-2 d-block d-lg-none">
                            <div class="profile-icon">
                                <a href="login.html"><i class="fa-regular fa-user"
                                        style="font-size: 16px; color: #000;"></i></a>
                            </div>
                        </div>
                        <div class="header-action-icon-2 d-block d-lg-none">
                            <div class="burger-icon burger-icon-white">
                                <span class="burger-icon-top"></span>
                                <span class="burger-icon-mid"></span>
                                <span class="burger-icon-bottom"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="mobile-header-active mobile-header-wrapper-style">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-top">
            <div class="mobile-header-logo">
                <a href="{{ url('/') }}">
                    <h2 class="brand_logo"><img src="assets/images/fav_logo.png" alt=""></h2>
                </a>
            </div>
            <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                <button class="close-style search-close">
                    <i class="icon-top"></i>
                    <i class="icon-bottom"></i>
                </button>
            </div>
        </div>
        <div class="mobile-header-content-area">
            <div class="mobile-search search-style-3 mobile-header-border">
                <form action="#">
                    <input type="text" placeholder="Search for items…">
                    <button type="submit"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
            <div class="mobile-menu-wrap mobile-header-border">
                <!-- mobile menu start -->
                <nav>
                    <ul class="mobile-menu">
                        <li class="menu-item-has-children"><span class="menu-expand"></span>
                            <a href="#">RINGS</a>
                            <ul class="dropdown">
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Natural
                                        Gemstones</a>
                                    <ul class="dropdown">
                                        <li><a href="javascript:void(0)">Blue Sapphire</a></li>
                                        <li><a href="javascript:void(0)">Emerald</a></li>
                                        <li><a href="javascript:void(0)">Opal</a></li>
                                        <li><a href="javascript:void(0)">Aquamarine</a></li>
                                        <li><a href="javascript:void(0)">Ruby</a></li>
                                        <li><a href="javascript:void(0)">Amethyst</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Natural
                                        Diamonds</a>
                                    <ul class="dropdown">
                                        <li><a href="javascript:void(0)">Diamond</a></li>
                                        <li><a href="javascript:void(0)">Enhanced Blue</a></li>
                                        <li><a href="javascript:void(0)">Enhanced Black</a></li>
                                        <li><a href="javascript:void(0)">Coffee Diamond</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                        href="#">Pearls</a>
                                    <ul class="dropdown">
                                        <li><a href="javascript:void(0)">Freshwater Pearl</a></li>
                                        <li><a href="javascript:void(0)">Akoya Pearl</a></li>
                                        <li><a href="javascript:void(0)">Tahitian Pearl</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">NECKLACES </a>
                            <ul class="dropdown">
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Natural
                                        Gemstones</a>
                                    <ul class="dropdown">
                                        <li><a href="javascript:void(0)">Blue Sapphire</a></li>
                                        <li><a href="javascript:void(0)">Emerald</a></li>
                                        <li><a href="javascript:void(0)">Opal</a></li>
                                        <li><a href="javascript:void(0)">Aquamarine</a></li>
                                        <li><a href="javascript:void(0)">Ruby</a></li>
                                        <li><a href="javascript:void(0)">Amethyst</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Natural
                                        Diamonds</a>
                                    <ul class="dropdown">
                                        <li><a href="javascript:void(0)">Diamond</a></li>
                                        <li><a href="javascript:void(0)">Enhanced Blue</a></li>
                                        <li><a href="javascript:void(0)">Enhanced Black</a></li>
                                        <li><a href="javascript:void(0)">Coffee Diamond</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                        href="#">Pearls</a>
                                    <ul class="dropdown">
                                        <li><a href="javascript:void(0)">Freshwater Pearl</a></li>
                                        <li><a href="javascript:void(0)">Akoya Pearl</a></li>
                                        <li><a href="javascript:void(0)">Tahitian Pearl</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">EARRINGS</a>
                            <ul class="dropdown">
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Natural
                                        Gemstones</a>
                                    <ul class="dropdown">
                                        <li><a href="javascript:void(0)">Blue Sapphire</a></li>
                                        <li><a href="javascript:void(0)">Emerald</a></li>
                                        <li><a href="javascript:void(0)">Opal</a></li>
                                        <li><a href="javascript:void(0)">Aquamarine</a></li>
                                        <li><a href="javascript:void(0)">Ruby</a></li>
                                        <li><a href="javascript:void(0)">Amethyst</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Natural
                                        Diamonds</a>
                                    <ul class="dropdown">
                                        <li><a href="javascript:void(0)">Diamond</a></li>
                                        <li><a href="javascript:void(0)">Enhanced Blue</a></li>
                                        <li><a href="javascript:void(0)">Enhanced Black</a></li>
                                        <li><a href="javascript:void(0)">Coffee Diamond</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                        href="#">Pearls</a>
                                    <ul class="dropdown">
                                        <li><a href="javascript:void(0)">Freshwater Pearl</a></li>
                                        <li><a href="javascript:void(0)">Akoya Pearl</a></li>
                                        <li><a href="javascript:void(0)">Tahitian Pearl</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">OCCASION </a>
                            <ul class="dropdown">
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                        href="#">Wedding</a>
                                    <ul class="dropdown">
                                        <li><a href="javascript:void(0)">Blue Sapphire</a></li>
                                        <li><a href="javascript:void(0)">Emerald</a></li>
                                        <li><a href="javascript:void(0)">Opal</a></li>
                                        <li><a href="javascript:void(0)">Aquamarine</a></li>
                                        <li><a href="javascript:void(0)">Ruby</a></li>
                                        <li><a href="javascript:void(0)">Amethyst</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                        href="#">Engagement</a>
                                    <ul class="dropdown">
                                        <li><a href="javascript:void(0)">Diamond</a></li>
                                        <li><a href="javascript:void(0)">Enhanced Blue</a></li>
                                        <li><a href="javascript:void(0)">Enhanced Black</a></li>
                                        <li><a href="javascript:void(0)">Coffee Diamond</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                        href="#">Pearls</a>
                                    <ul class="dropdown">
                                        <li><a href="javascript:void(0)">Freshwater Pearl</a></li>
                                        <li><a href="javascript:void(0)">Akoya Pearl</a></li>
                                        <li><a href="javascript:void(0)">Tahitian Pearl</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">BRACELETS</a>
                            <ul class="dropdown">
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Natural
                                        Gemstones</a>
                                    <ul class="dropdown">
                                        <li><a href="javascript:void(0)">Blue Sapphire</a></li>
                                        <li><a href="javascript:void(0)">Emerald</a></li>
                                        <li><a href="javascript:void(0)">Opal</a></li>
                                        <li><a href="javascript:void(0)">Aquamarine</a></li>
                                        <li><a href="javascript:void(0)">Ruby</a></li>
                                        <li><a href="javascript:void(0)">Amethyst</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Natural
                                        Diamonds</a>
                                    <ul class="dropdown">
                                        <li><a href="javascript:void(0)">Diamond</a></li>
                                        <li><a href="javascript:void(0)">Enhanced Blue</a></li>
                                        <li><a href="javascript:void(0)">Enhanced Black</a></li>
                                        <li><a href="javascript:void(0)">Coffee Diamond</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                        href="#">Pearls</a>
                                    <ul class="dropdown">
                                        <li><a href="javascript:void(0)">Freshwater Pearl</a></li>
                                        <li><a href="javascript:void(0)">Akoya Pearl</a></li>
                                        <li><a href="javascript:void(0)">Tahitian Pearl</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                href="javascript:void(0)">COLLECTIONS </a>
                            <ul class="dropdown">
                                <li><a href="javascript:void(0)">ALL COLLECTIONS</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Language</a>
                            <ul class="dropdown">
                                <li><a href="#">English</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">German</a></li>
                                <li><a href="#">Spanish</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- mobile menu end -->
            </div>
            <div class="mobile-header-info-wrap mobile-header-border">
                <div class="single-mobile-header-info mt-30">
                    <a href="page-contact.html"> Our location </a>
                </div>
                <!-- <div class="single-mobile-header-info">
                    <a href="page-login-register.html">Log In / Sign Up </a>
                </div> -->
                <div class="single-mobile-header-info">
                    <a href="#">(+01) - 2345 - 6789 </a>
                </div>
            </div>
            <div class="mobile-social-icon">
                <h5 class="mb-15 text-grey-4">Follow Us</h5>
                <a href="#"><img src="assets/imgs/theme/icons/icon-facebook.svg" alt=""></a>
                <a href="#"><img src="assets/imgs/theme/icons/icon-twitter.svg" alt=""></a>
                <a href="#"><img src="assets/imgs/theme/icons/icon-instagram.svg" alt=""></a>
                <a href="#"><img src="assets/imgs/theme/icons/icon-pinterest.svg" alt=""></a>
                <a href="#"><img src="assets/imgs/theme/icons/icon-youtube.svg" alt=""></a>
            </div>
        </div>
    </div>
</div> --}}
    <header class="header d-lg-block">
     
      <div class="logo-section-wrap flex-column flex-md-row">
          <div class="contact-section justify-content-between justify-content-md-start align-items-center">
              <div class="logo-section d-none d-lg-block">
                  <a href="#"><img src="./images/logo.png" alt></a>
              </div>
              <div class="side-bar-wrap d-lg-none">
                  <div id="mySidenav" class="sidenav">
                      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                      <a href="#">About</a>
                      <a href="#">Services</a>
                      <a href="#">Clients</a>
                      <a href="#">Contact</a>
                  </div>
                  <span onclick="openNav()"><img src="https://cdn4.iconfinder.com/data/icons/wirecons-free-vector-icons/32/menu-alt-512.png" width="40px" style="width:30px"></span>
              </div> 
          </div>
          
          <div class="user-section">
              <div class="search-input">
                  <div class="input-group">
                      <div class="search-cion">
                          <i class="bi bi-search"></i>
                      </div>
                      <input type="text" class="form-control" aria-label="Default"
                          aria-describedby="inputGroup-sizing-default" placeholder="Search product...">
                  </div>
              </div>
             <div class="icon-box-wrapper d-flex gap-3">
              <a href="#" class="user-icon icon-type text-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 -0.5 25 25" fill="none">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M17.817 16.063V14.721C17.817 14.3887 17.949 14.07 18.184 13.835L19.133 12.886C19.6223 12.3967 19.6223 11.6033 19.133 11.114L18.184 10.165C17.949 9.93001 17.817 9.61131 17.817 9.27899V7.93599C17.817 7.24398 17.256 6.68299 16.564 6.68299H15.221C14.8887 6.68299 14.57 6.55097 14.335 6.31599L13.386 5.36699C12.8967 4.87767 12.1033 4.87767 11.614 5.36699L10.665 6.31599C10.43 6.55097 10.1113 6.68299 9.77899 6.68299H8.43599C8.1035 6.68299 7.78464 6.81514 7.54963 7.05034C7.31462 7.28554 7.18273 7.6045 7.18299 7.93699V9.27899C7.18299 9.61131 7.05097 9.93001 6.81599 10.165L5.86699 11.114C5.37767 11.6033 5.37767 12.3967 5.86699 12.886L6.81599 13.835C7.05097 14.07 7.18299 14.3887 7.18299 14.721V16.063C7.18299 16.755 7.74398 17.316 8.43599 17.316H9.77899C10.1113 17.316 10.43 17.448 10.665 17.683L11.614 18.632C12.1033 19.1213 12.8967 19.1213 13.386 18.632L14.335 17.683C14.57 17.448 14.8887 17.316 15.221 17.316H16.563C16.8955 17.3163 17.2144 17.1844 17.4496 16.9493C17.6848 16.7143 17.817 16.3955 17.817 16.063Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M9.78202 10.641C9.50715 10.3662 9.42492 9.95286 9.57366 9.59375C9.7224 9.23464 10.0728 9.00049 10.4615 9.00049C10.8502 9.00049 11.2006 9.23464 11.3494 9.59375C11.4981 9.95286 11.4159 10.3662 11.141 10.641C10.7657 11.0163 10.1573 11.0163 9.78202 10.641Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M13.859 14.718C13.5841 14.4431 13.5019 14.0298 13.6506 13.6707C13.7994 13.3115 14.1498 13.0774 14.5385 13.0774C14.9272 13.0774 15.2776 13.3115 15.4263 13.6707C15.5751 14.0298 15.4928 14.4431 15.218 14.718C14.8427 15.0932 14.2343 15.0932 13.859 14.718Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round"/>
                      <path d="M15.218 9.28101L9.78101 14.719" stroke="#000000" stroke-width="1.5" stroke-linecap="round"/>
                  </svg>
                  <p class="header-icon-text">Offers</p>
              </a>
              <a href="#" class="user-icon icon-type text-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24" fill="none">
                      <path d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                  <p class="header-icon-text">Find a store</p>
              </a>
              <a href="#" class="user-icon icon-type text-center">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="800px" height="800px" viewBox="0 0 32 32" id="icon"><defs><style>.cls-1{fill:none;}</style></defs><title>blog</title><rect x="4" y="24" width="10" height="2"/><rect x="4" y="18" width="10" height="2"/><path d="M26,14H6a2,2,0,0,1-2-2V6A2,2,0,0,1,6,4H26a2,2,0,0,1,2,2v6A2,2,0,0,1,26,14ZM6,6v6H26V6Z" transform="translate(0 0)"/><path d="M26,28H20a2,2,0,0,1-2-2V20a2,2,0,0,1,2-2h6a2,2,0,0,1,2,2v6A2,2,0,0,1,26,28Zm-6-8v6h6V20Z" transform="translate(0 0)"/><rect id="_Transparent_Rectangle_" data-name="&lt;Transparent Rectangle&gt;" class="cls-1" width="32" height="32"/></svg>
                  <p class="header-icon-text">Blog</p>
              </a>
              <a href="#" class="user-icon icon-type text-center">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="800px" height="800px" viewBox="0 0 17 17" version="1.1">
                      <path d="M15.668 6.017c-0.957-3.557-3.863-6.017-7.168-6.017-3.295 0-6.212 2.464-7.168 6.017-0.747 0.082-1.332 0.712-1.332 1.483v4c0 0.625 0.382 1.16 0.924 1.385 0.194 1.747 1.663 3.115 3.461 3.115h2.707c0.207 0.581 0.757 1 1.408 1h3c0.827 0 1.5-0.673 1.5-1.5s-0.673-1.5-1.5-1.5h-3c-0.651 0-1.201 0.419-1.408 1h-2.707c-1.208 0-2.217-0.86-2.449-2h1.064v-1h1v-5h-1v-1h-0.606c0.913-2.961 3.352-5 6.106-5 2.762 0 5.193 2.037 6.106 5h-0.606v1h-1v5h1v1h1.506c0.824 0 1.494-0.673 1.494-1.5v-4c0-0.771-0.585-1.401-1.332-1.483zM8.5 15h3c0.275 0 0.5 0.224 0.5 0.5s-0.225 0.5-0.5 0.5h-3c-0.275 0-0.5-0.224-0.5-0.5s0.225-0.5 0.5-0.5zM2 12h-0.506c-0.272 0-0.494-0.224-0.494-0.5v-4c0-0.276 0.222-0.5 0.494-0.5h0.506v5zM16 11.5c0 0.276-0.222 0.5-0.494 0.5h-0.506v-5h0.506c0.272 0 0.494 0.224 0.494 0.5v4z" fill="#000000"/>
                  </svg>
                  <p class="header-icon-text">Contact us </p>
              </a>
             </div>
             <div class="icon-box-wrapper d-flex gap-3">
              <a href="#" class="user-icon icon-type text-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24" fill="none">
                      <g clip-path="url(#clip0_15_82)">
                      <rect width="24" height="24" fill="white"/>
                      <g filter="url(#filter0_d_15_82)">
                      <path d="M14.3365 12.3466L14.0765 11.9195C13.9082 12.022 13.8158 12.2137 13.8405 12.4092C13.8651 12.6046 14.0022 12.7674 14.1907 12.8249L14.3365 12.3466ZM9.6634 12.3466L9.80923 12.8249C9.99769 12.7674 10.1348 12.6046 10.1595 12.4092C10.1841 12.2137 10.0917 12.022 9.92339 11.9195L9.6634 12.3466ZM4.06161 19.002L3.56544 18.9402L4.06161 19.002ZM19.9383 19.002L20.4345 18.9402L19.9383 19.002ZM16 8.5C16 9.94799 15.2309 11.2168 14.0765 11.9195L14.5965 12.7737C16.0365 11.8971 17 10.3113 17 8.5H16ZM12 4.5C14.2091 4.5 16 6.29086 16 8.5H17C17 5.73858 14.7614 3.5 12 3.5V4.5ZM7.99996 8.5C7.99996 6.29086 9.79082 4.5 12 4.5V3.5C9.23854 3.5 6.99996 5.73858 6.99996 8.5H7.99996ZM9.92339 11.9195C8.76904 11.2168 7.99996 9.948 7.99996 8.5H6.99996C6.99996 10.3113 7.96342 11.8971 9.40342 12.7737L9.92339 11.9195ZM9.51758 11.8683C6.36083 12.8309 3.98356 15.5804 3.56544 18.9402L4.55778 19.0637C4.92638 16.1018 7.02381 13.6742 9.80923 12.8249L9.51758 11.8683ZM3.56544 18.9402C3.45493 19.8282 4.19055 20.5 4.99996 20.5V19.5C4.70481 19.5 4.53188 19.2719 4.55778 19.0637L3.56544 18.9402ZM4.99996 20.5H19V19.5H4.99996V20.5ZM19 20.5C19.8094 20.5 20.545 19.8282 20.4345 18.9402L19.4421 19.0637C19.468 19.2719 19.2951 19.5 19 19.5V20.5ZM20.4345 18.9402C20.0164 15.5804 17.6391 12.8309 14.4823 11.8683L14.1907 12.8249C16.9761 13.6742 19.0735 16.1018 19.4421 19.0637L20.4345 18.9402Z" fill="#000000"/>
                      </g>
                      </g>
                      <defs>
                      <filter id="filter0_d_15_82" x="2.55444" y="3.5" width="18.8911" height="19" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                      <feOffset dy="1"/>
                      <feGaussianBlur stdDeviation="0.5"/>
                      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_15_82"/>
                      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_15_82" result="shape"/>
                      </filter>
                      <clipPath id="clip0_15_82">
                      <rect width="24" height="24" fill="white"/>
                      </clipPath>
                      </defs>
                      </svg>
                  <p class="header-icon-text">profile</p>
              </a>
              <a href="#" class="user-icon icon-type text-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 64 64" stroke-width="3" stroke="#000000" fill="none"><path d="M9.06,25C7.68,17.3,12.78,10.63,20.73,10c7-.55,10.47,7.93,11.17,9.55a.13.13,0,0,0,.25,0c3.25-8.91,9.17-9.29,11.25-9.5C49,9.45,56.51,13.78,55,23.87c-2.16,14-23.12,29.81-23.12,29.81S11.79,40.05,9.06,25Z"/></svg>
                  <p class="header-icon-text">Wishlist</p>
              </a>
              <a href="#" class="user-icon icon-type text-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24" fill="none">
                      <path d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z" stroke="#1C274C" stroke-width="1.5"/>
                      <path d="M16.5 18.0001C17.3284 18.0001 18 18.6716 18 19.5001C18 20.3285 17.3284 21.0001 16.5 21.0001C15.6716 21.0001 15 20.3285 15 19.5001C15 18.6716 15.6716 18.0001 16.5 18.0001Z" stroke="#1C274C" stroke-width="1.5"/>
                      <path d="M2 3L2.26121 3.09184C3.5628 3.54945 4.2136 3.77826 4.58584 4.32298C4.95808 4.86771 4.95808 5.59126 4.95808 7.03836V9.76C4.95808 12.7016 5.02132 13.6723 5.88772 14.5862C6.75412 15.5 8.14857 15.5 10.9375 15.5H12M16.2404 15.5C17.8014 15.5 18.5819 15.5 19.1336 15.0504C19.6853 14.6008 19.8429 13.8364 20.158 12.3075L20.6578 9.88275C21.0049 8.14369 21.1784 7.27417 20.7345 6.69708C20.2906 6.12 18.7738 6.12 17.0888 6.12H11.0235M4.95808 6.12H7" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                      </svg>
                      <p class="header-icon-text">Cart</p>
              </a>
             </div>
             <div class="icon-box-wrapper d-flex gap-3">
              <a href="#" class="user-icon icon-type text-center">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" version="1.1" id="Layer_1" width="800px" height="800px" viewBox="0 0 256 140" enable-background="new 0 0 256 140" xml:space="preserve">
                      <path d="M103.123,97.792c-11.112,0-20.104,8.992-20.104,20.104S92.011,138,103.123,138c11.112,0,20.104-8.992,20.104-20.104  S114.235,97.792,103.123,97.792z M103.123,125.597c-4.221,0-7.7-3.479-7.7-7.7c0-4.221,3.479-7.7,7.7-7.7c4.221,0,7.7,3.479,7.7,7.7  C110.823,122.117,107.344,125.597,103.123,125.597z M215.766,97.936c-11.112,0-20.104,8.992-20.104,20.104  s8.992,20.104,20.104,20.104c11.112,0,20.104-8.992,20.104-20.104S226.878,97.936,215.766,97.936z M215.766,125.74  c-4.221,0-7.7-3.479-7.7-7.7c0-4.221,3.479-7.7,7.7-7.7c4.221,0,7.7,3.479,7.7,7.7C223.467,122.261,219.987,125.74,215.766,125.74z   M57,106.678c0,3.898,3.486,7.24,7.384,7.24h10.438c0.804,0,1.593-1.009,1.74-1.74c2.193-12.574,13.33-21.259,26.562-21.259  s24.198,8.721,26.391,21.295c0.146,0.804,0.682,1.463,1.486,1.463h20v-111H57V106.678z M252.26,99.132h-4.349V79.997  c0-6.433-4.801-11.307-11.307-11.307h-20.875c-0.439,0-0.956-0.233-1.249-0.525l-32.532-31.665c-1.462-1.462-2.829-2.747-4.949-2.82  h-19v80h30c0.804,0,1.489-0.768,1.635-1.499c2.193-12.574,12.899-22.115,26.131-22.115c13.232,0,24.198,9.577,26.391,22.151  c0.146,0.804,1.471,1.704,2.275,1.704h1.74c4.167,0,7.828-3.751,7.828-7.845v-5.41C254,99.86,253.138,99.132,252.26,99.132z   M199.203,68.689H168.76c-0.877,0-1.74-0.862-1.74-1.74L167,44.364c0-0.877,0.882-1.769,1.76-1.769h6.089  c0.439,0,1.325,0.483,1.691,0.775l23.534,22.71C200.95,67.176,200.592,68.689,199.203,68.689z M47,49.678H14v-8h33V49.678z   M47,71.678H2v8h45V71.678z M47,56.678H9v8h38V56.678z"/>
                  </svg>
                  <p class="header-icon-text">Track Your Order</p>
              </a>
              <a href="#" class="user-icon icon-type text-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24" role="img" aria-labelledby="languageIconTitle" stroke="#000000" stroke-width="1" stroke-linecap="square" stroke-linejoin="miter" fill="none" color="#000000"> <title id="languageIconTitle">Language</title> <circle cx="12" cy="12" r="10"/> <path stroke-linecap="round" d="M12,22 C14.6666667,19.5757576 16,16.2424242 16,12 C16,7.75757576 14.6666667,4.42424242 12,2 C9.33333333,4.42424242 8,7.75757576 8,12 C8,16.2424242 9.33333333,19.5757576 12,22 Z"/> <path stroke-linecap="round" d="M2.5 9L21.5 9M2.5 15L21.5 15"/> </svg>
                  <p class="header-icon-text">Language</p>
              </a>
             </div>
          </div>
      </div>
      <div class="nav-menu-wrap d-none d-lg-block">
          <nav class="nav-menu">
            {{-- This is the categories section  --}}
              {{-- <div class="menu-item-wrap">
                  <a href="#" class="menu-item">Rings</a>
                  <div class="sub-menu-bg">
                      <div class="sub-menu-wrap d-flex justify-content-between">
                          <div class="section-submenu d-flex">
                              <div class="section-submenu-inner">
                                  <div class="menu-type-heading mb-4">
                                      <h6>Natural Gemstones</h6>
                                  </div>
                                  <div class="sub-menu">

                                      <a href="#" class="image-list">
                                          <img src="./images/list-ring.webp" alt="">
                                          sub-menu-item
                                      </a>
                                      <a href="#" class="image-list">
                                          <img src="./images/list-ring.webp" alt="">
                                          sub-menu-item
                                      </a>
                                      <a href="#" class="image-list">
                                          <img src="./images/list-ring.webp" alt="">
                                          sub-menu-item
                                      </a>
                                      <a href="#" class="image-list">
                                          <img src="./images/list-ring.webp" alt="">
                                          sub-menu-item
                                      </a>
                                      <a href="#" class="image-list">
                                          <img src="./images/list-ring.webp" alt="">
                                          sub-menu-item
                                      </a>
                                      <a href="#" class="image-list">
                                          <img src="./images/list-ring.webp" alt="">
                                          sub-menu-item
                                      </a>
                                      <a href="#" class="image-list">
                                          <img src="./images/list-ring.webp" alt="">
                                          sub-menu-item
                                      </a>
                                      <a href="#" class="image-list">
                                          <img src="./images/list-ring.webp" alt="">
                                          sub-menu-item
                                      </a>
                                      <a href="#" class="image-list">
                                          <img src="./images/list-ring.webp" alt="">
                                          sub-menu-item
                                      </a>
                                      <a href="#" class="image-list">
                                          <img src="./images/list-ring.webp" alt="">
                                          sub-menu-item
                                      </a>
                                      <a class="explore-all" href="#">Explore All <i
                                              class="bi bi-chevron-right"></i></a>

                                  </div>
                              </div>
                              <div class="section-submenu-inner">
                                 <div class="d-flex flex-column">
                                  <div class="half-menu">
                                      <div class="menu-type-heading mb-4">
                                          <h6>Natural Gemstones</h6>
                                      </div>
                                      <div class="sub-menu">

                                          <a href="#" class="image-list">
                                              <img src="./images/list-ring.webp" alt="">
                                              sub-menu-item
                                          </a>
                                          <a href="#" class="image-list">
                                              <img src="./images/list-ring.webp" alt="">
                                              sub-menu-item
                                          </a>
                                          <a href="#" class="image-list">
                                              <img src="./images/list-ring.webp" alt="">
                                              sub-menu-item
                                          </a>
                                          <a class="explore-all" href="#">Explore All <i
                                                  class="bi bi-chevron-right"></i></a>

                                      </div>
                                  </div>
                                  <div class="border-bottom mt-3 mb-3"></div>
                                  <div class="half-menu">
                                      <div class="menu-type-heading mb-4">
                                          <h6>Natural Gemstones</h6>
                                      </div>
                                      <div class="sub-menu">

                                          <a href="#" class="image-list">
                                              <img src="./images/list-ring.webp" alt="">
                                              sub-menu-item
                                          </a>
                                          <a href="#" class="image-list">
                                              <img src="./images/list-ring.webp" alt="">
                                              sub-menu-item
                                          </a>
                                          <a href="#" class="image-list">
                                              <img src="./images/list-ring.webp" alt="">
                                              sub-menu-item
                                          </a>
                                          <a class="explore-all" href="#">Explore All <i
                                                  class="bi bi-chevron-right"></i></a>

                                      </div>
                                  </div>
                                  <div class="border-bottom mt-3 mb-3"></div>
                                 </div>
                              </div>
                              <div class="section-submenu-inner">
                                  <div class="d-flex flex-column">
                                   <div class="half-menu">
                                       <div class="menu-type-heading mb-4">
                                           <h6>Natural Gemstones</h6>
                                       </div>
                                       <div class="sub-menu">

                                           <a href="#" class="image-list">
                                               <img src="./images/list-ring.webp" alt="">
                                               sub-menu-item
                                           </a>
                                           <a href="#" class="image-list">
                                               <img src="./images/list-ring.webp" alt="">
                                               sub-menu-item
                                           </a>
                                           <a href="#" class="image-list">
                                               <img src="./images/list-ring.webp" alt="">
                                               sub-menu-item
                                           </a>
                                           <a class="explore-all" href="#">Explore All <i
                                                   class="bi bi-chevron-right"></i></a>

                                       </div>
                                   </div>
                                   <div class="border-bottom mt-3 mb-3"></div>
                                   <div class="half-menu">
                                       <div class="menu-type-heading mb-4">
                                           <h6>Natural Gemstones</h6>
                                       </div>
                                       <div class="sub-menu">

                                           <a href="#" class="image-list">
                                               <img src="./images/list-ring.webp" alt="">
                                               sub-menu-item
                                           </a>
                                           <a href="#" class="image-list">
                                               <img src="./images/list-ring.webp" alt="">
                                               sub-menu-item
                                           </a>
                                           <a href="#" class="image-list">
                                               <img src="./images/list-ring.webp" alt="">
                                               sub-menu-item
                                           </a>
                                           <a class="explore-all" href="#">Explore All <i
                                                   class="bi bi-chevron-right"></i></a>

                                       </div>
                                   </div>
                                   <div class="border-bottom mt-3 mb-3"></div>
                                  </div>
                               </div>
                          </div>
                          <div class="slider-submenu">
                              <div class="swiper submenu-slider">
                                  <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                      <img src="./images/log-1.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                      <img src="./images/log-1.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                      <img src="./images/log-1.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                      <img src="./images/log-1.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                      <img src="./images/log-1.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                      <img src="./images/log-1.jpg" alt="">
                                    </div>
                                   
                                  </div>
                                  <div class="swiper-button-next swiper-btn"></div>
                                  <div class="swiper-button-prev swiper-btn"></div>
                                </div>
                          </div>
                      </div>

                  </div>
              </div>
              <div class="menu-item-wrap">
                  <a href="#" class="menu-item">Necklaces</a>
              </div>
              <div class="menu-item-wrap">
                  <a href="#" class="menu-item">Earrings</a>
              </div>
              <div class="menu-item-wrap">
                  <a href="#" class="menu-item">Engagement</a>
              </div>
              <div class="menu-item-wrap">
                  <a href="#" class="menu-item">Wedding</a>
              </div>
              <div class="menu-item-wrap">
                  <a href="#" class="menu-item">Bracelets</a>
              </div>
              <div class="menu-item-wrap">
                  <a href="#" class="menu-item">Gifts</a>
              </div>
              <div class="menu-item-wrap">
                  <a href="#" class="menu-item">Collections</a>
              </div> --}}
                @foreach($formatTreeCategory as $category)
                    <div class="menu-item-wrap">
                        <a href="#" class="menu-item">{{ $category->name }}</a>
                        <div class="sub-menu-bg">
                            <div class="sub-menu-wrap d-flex justify-content-between">
                                <div class="section-submenu d-flex">
                                    <div class="section-submenu-inner">
                                        <div class="menu-type-heading mb-4">
                                            <h6>Natural Gemstones</h6>
                                        </div>
                                        <div class="sub-menu">
      
                                            <a href="#" class="image-list">
                                                <img src="./images/list-ring.webp" alt="">
                                                sub-menu-item
                                            </a>
                                            <a href="#" class="image-list">
                                                <img src="./images/list-ring.webp" alt="">
                                                sub-menu-item
                                            </a>
                                            <a href="#" class="image-list">
                                                <img src="./images/list-ring.webp" alt="">
                                                sub-menu-item
                                            </a>
                                            <a href="#" class="image-list">
                                                <img src="./images/list-ring.webp" alt="">
                                                sub-menu-item
                                            </a>
                                            <a href="#" class="image-list">
                                                <img src="./images/list-ring.webp" alt="">
                                                sub-menu-item
                                            </a>
                                            <a href="#" class="image-list">
                                                <img src="./images/list-ring.webp" alt="">
                                                sub-menu-item
                                            </a>
                                            <a href="#" class="image-list">
                                                <img src="./images/list-ring.webp" alt="">
                                                sub-menu-item
                                            </a>
                                            <a href="#" class="image-list">
                                                <img src="./images/list-ring.webp" alt="">
                                                sub-menu-item
                                            </a>
                                            <a href="#" class="image-list">
                                                <img src="./images/list-ring.webp" alt="">
                                                sub-menu-item
                                            </a>
                                            <a href="#" class="image-list">
                                                <img src="./images/list-ring.webp" alt="">
                                                sub-menu-item
                                            </a>
                                            <a class="explore-all" href="#">Explore All <i
                                                    class="bi bi-chevron-right"></i></a>
      
                                        </div>
                                    </div>
                                    <div class="section-submenu-inner">
                                       <div class="d-flex flex-column">
                                        <div class="half-menu">
                                            <div class="menu-type-heading mb-4">
                                                <h6>Natural Gemstones</h6>
                                            </div>
                                            <div class="sub-menu">
      
                                                <a href="#" class="image-list">
                                                    <img src="./images/list-ring.webp" alt="">
                                                    sub-menu-item
                                                </a>
                                                <a href="#" class="image-list">
                                                    <img src="./images/list-ring.webp" alt="">
                                                    sub-menu-item
                                                </a>
                                                <a href="#" class="image-list">
                                                    <img src="./images/list-ring.webp" alt="">
                                                    sub-menu-item
                                                </a>
                                                <a class="explore-all" href="#">Explore All <i
                                                        class="bi bi-chevron-right"></i></a>
      
                                            </div>
                                        </div>
                                        <div class="border-bottom mt-3 mb-3"></div>
                                        <div class="half-menu">
                                            <div class="menu-type-heading mb-4">
                                                <h6>Natural Gemstones</h6>
                                            </div>
                                            <div class="sub-menu">
      
                                                <a href="#" class="image-list">
                                                    <img src="./images/list-ring.webp" alt="">
                                                    sub-menu-item
                                                </a>
                                                <a href="#" class="image-list">
                                                    <img src="./images/list-ring.webp" alt="">
                                                    sub-menu-item
                                                </a>
                                                <a href="#" class="image-list">
                                                    <img src="./images/list-ring.webp" alt="">
                                                    sub-menu-item
                                                </a>
                                                <a class="explore-all" href="#">Explore All <i
                                                        class="bi bi-chevron-right"></i></a>
      
                                            </div>
                                        </div>
                                        <div class="border-bottom mt-3 mb-3"></div>
                                       </div>
                                    </div>
                                    <div class="section-submenu-inner">
                                        <div class="d-flex flex-column">
                                         <div class="half-menu">
                                             <div class="menu-type-heading mb-4">
                                                 <h6>Natural Gemstones</h6>
                                             </div>
                                             <div class="sub-menu">
      
                                                 <a href="#" class="image-list">
                                                     <img src="./images/list-ring.webp" alt="">
                                                     sub-menu-item
                                                 </a>
                                                 <a href="#" class="image-list">
                                                     <img src="./images/list-ring.webp" alt="">
                                                     sub-menu-item
                                                 </a>
                                                 <a href="#" class="image-list">
                                                     <img src="./images/list-ring.webp" alt="">
                                                     sub-menu-item
                                                 </a>
                                                 <a class="explore-all" href="#">Explore All <i
                                                         class="bi bi-chevron-right"></i></a>
      
                                             </div>
                                         </div>
                                         <div class="border-bottom mt-3 mb-3"></div>
                                         <div class="half-menu">
                                             <div class="menu-type-heading mb-4">
                                                 <h6>Natural Gemstones</h6>
                                             </div>
                                             <div class="sub-menu">
      
                                                 <a href="#" class="image-list">
                                                     <img src="./images/list-ring.webp" alt="">
                                                     sub-menu-item
                                                 </a>
                                                 <a href="#" class="image-list">
                                                     <img src="./images/list-ring.webp" alt="">
                                                     sub-menu-item
                                                 </a>
                                                 <a href="#" class="image-list">
                                                     <img src="./images/list-ring.webp" alt="">
                                                     sub-menu-item
                                                 </a>
                                                 <a class="explore-all" href="#">Explore All <i
                                                         class="bi bi-chevron-right"></i></a>
      
                                             </div>
                                         </div>
                                         <div class="border-bottom mt-3 mb-3"></div>
                                        </div>
                                     </div>
                                </div>
                                <div class="slider-submenu">
                                    <div class="swiper submenu-slider">
                                        <div class="swiper-wrapper">
                                          <div class="swiper-slide">
                                            <img src="./images/log-1.jpg" alt="">
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="./images/log-1.jpg" alt="">
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="./images/log-1.jpg" alt="">
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="./images/log-1.jpg" alt="">
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="./images/log-1.jpg" alt="">
                                          </div>
                                          <div class="swiper-slide">
                                            <img src="./images/log-1.jpg" alt="">
                                          </div>
                                         
                                        </div>
                                        <div class="swiper-button-next swiper-btn"></div>
                                        <div class="swiper-button-prev swiper-btn"></div>
                                      </div>
                                </div>
                            </div>
      
                        </div>
                    </div>
                @endforeach
              <div class="menu-item-wrap">
                  <a href="#" class="bg-dark text-light p-2" style="font-size:13px">Customize Jewellery</a>
              </div>
          </nav>
          
      </div>
      <div class="sticky-header">
          <div class="logo">
              <a href="#"><img src="./images/logo.png" alt=""></a>
          </div>
          <nav class="nav-menu">
              {{-- <div class="menu-item-wrap">
                  <a href="#" class="menu-item">Rings</a>
                  <div class="sub-menu-bg">
                      <div class="sub-menu-wrap d-flex justify-content-between">
                          <div class="section-submenu d-flex">
                              <div class="section-submenu-inner">
                                  <div class="menu-type-heading mb-4">
                                      <h6>Natural Gemstones</h6>
                                  </div>
                                  <div class="sub-menu">

                                      <a href="#" class="image-list">
                                          <img src="./images/list-ring.webp" alt="">
                                          sub-menu-item
                                      </a>
                                      <a href="#" class="image-list">
                                          <img src="./images/list-ring.webp" alt="">
                                          sub-menu-item
                                      </a>
                                      <a href="#" class="image-list">
                                          <img src="./images/list-ring.webp" alt="">
                                          sub-menu-item
                                      </a>
                                      <a href="#" class="image-list">
                                          <img src="./images/list-ring.webp" alt="">
                                          sub-menu-item
                                      </a>
                                      <a href="#" class="image-list">
                                          <img src="./images/list-ring.webp" alt="">
                                          sub-menu-item
                                      </a>
                                      <a href="#" class="image-list">
                                          <img src="./images/list-ring.webp" alt="">
                                          sub-menu-item
                                      </a>
                                      <a href="#" class="image-list">
                                          <img src="./images/list-ring.webp" alt="">
                                          sub-menu-item
                                      </a>
                                      <a href="#" class="image-list">
                                          <img src="./images/list-ring.webp" alt="">
                                          sub-menu-item
                                      </a>
                                      <a href="#" class="image-list">
                                          <img src="./images/list-ring.webp" alt="">
                                          sub-menu-item
                                      </a>
                                      <a href="#" class="image-list">
                                          <img src="./images/list-ring.webp" alt="">
                                          sub-menu-item
                                      </a>
                                      <a class="explore-all" href="#">Explore All <i
                                              class="bi bi-chevron-right"></i></a>

                                  </div>
                              </div>
                              <div class="section-submenu-inner">
                                 <div class="d-flex flex-column">
                                  <div class="half-menu">
                                      <div class="menu-type-heading mb-4">
                                          <h6>Natural Gemstones</h6>
                                      </div>
                                      <div class="sub-menu">

                                          <a href="#" class="image-list">
                                              <img src="./images/list-ring.webp" alt="">
                                              sub-menu-item
                                          </a>
                                          <a href="#" class="image-list">
                                              <img src="./images/list-ring.webp" alt="">
                                              sub-menu-item
                                          </a>
                                          <a href="#" class="image-list">
                                              <img src="./images/list-ring.webp" alt="">
                                              sub-menu-item
                                          </a>
                                          <a class="explore-all" href="#">Explore All <i
                                                  class="bi bi-chevron-right"></i></a>

                                      </div>
                                  </div>
                                  <div class="border-bottom mt-3 mb-3"></div>
                                  <div class="half-menu">
                                      <div class="menu-type-heading mb-4">
                                          <h6>Natural Gemstones</h6>
                                      </div>
                                      <div class="sub-menu">

                                          <a href="#" class="image-list">
                                              <img src="./images/list-ring.webp" alt="">
                                              sub-menu-item
                                          </a>
                                          <a href="#" class="image-list">
                                              <img src="./images/list-ring.webp" alt="">
                                              sub-menu-item
                                          </a>
                                          <a href="#" class="image-list">
                                              <img src="./images/list-ring.webp" alt="">
                                              sub-menu-item
                                          </a>
                                          <a class="explore-all" href="#">Explore All <i
                                                  class="bi bi-chevron-right"></i></a>

                                      </div>
                                  </div>
                                  <div class="border-bottom mt-3 mb-3"></div>
                                 </div>
                              </div>
                              <div class="section-submenu-inner">
                                  <div class="d-flex flex-column">
                                   <div class="half-menu">
                                       <div class="menu-type-heading mb-4">
                                           <h6>Natural Gemstones</h6>
                                       </div>
                                       <div class="sub-menu">

                                           <a href="#" class="image-list">
                                               <img src="./images/list-ring.webp" alt="">
                                               sub-menu-item
                                           </a>
                                           <a href="#" class="image-list">
                                               <img src="./images/list-ring.webp" alt="">
                                               sub-menu-item
                                           </a>
                                           <a href="#" class="image-list">
                                               <img src="./images/list-ring.webp" alt="">
                                               sub-menu-item
                                           </a>
                                           <a class="explore-all" href="#">Explore All <i
                                                   class="bi bi-chevron-right"></i></a>

                                       </div>
                                   </div>
                                   <div class="border-bottom mt-3 mb-3"></div>
                                   <div class="half-menu">
                                       <div class="menu-type-heading mb-4">
                                           <h6>Natural Gemstones</h6>
                                       </div>
                                       <div class="sub-menu">

                                           <a href="#" class="image-list">
                                               <img src="./images/list-ring.webp" alt="">
                                               sub-menu-item
                                           </a>
                                           <a href="#" class="image-list">
                                               <img src="./images/list-ring.webp" alt="">
                                               sub-menu-item
                                           </a>
                                           <a href="#" class="image-list">
                                               <img src="./images/list-ring.webp" alt="">
                                               sub-menu-item
                                           </a>
                                           <a class="explore-all" href="#">Explore All <i
                                                   class="bi bi-chevron-right"></i></a>

                                       </div>
                                   </div>
                                   <div class="border-bottom mt-3 mb-3"></div>
                                  </div>
                               </div>
                          </div>
                          <div class="slider-submenu">
                              <div class="swiper submenu-slider">
                                  <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                      <img src="./images/log-1.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                      <img src="./images/log-1.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                      <img src="./images/log-1.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                      <img src="./images/log-1.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                      <img src="./images/log-1.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                      <img src="./images/log-1.jpg" alt="">
                                    </div>
                                   
                                  </div>
                                  <div class="swiper-button-next swiper-btn"></div>
                                  <div class="swiper-button-prev swiper-btn"></div>
                                </div>
                          </div>
                      </div>

                  </div>
              </div>
              <div class="menu-item-wrap">
                  <a href="#" class="menu-item">Necklaces</a>
              </div>
              <div class="menu-item-wrap">
                  <a href="#" class="menu-item">Earrings</a>
              </div>
              <div class="menu-item-wrap">
                  <a href="#" class="menu-item">Engagement</a>
              </div>
              <div class="menu-item-wrap">
                  <a href="#" class="menu-item">Wedding</a>
              </div>
              <div class="menu-item-wrap">
                  <a href="#" class="menu-item">Bracelets</a>
              </div>
              <div class="menu-item-wrap">
                  <a href="#" class="menu-item">Gifts</a>
              </div>
              <div class="menu-item-wrap">
                  <a href="#" class="menu-item">Collections</a>
              </div> --}}
              @foreach ($formatTreeCategory as $category)
                <div class="menu-item-wrap">
                    <a href="#" class="menu-item">Rings</a>
                    <div class="sub-menu-bg">
                        <div class="sub-menu-wrap d-flex justify-content-between">
                            <div class="section-submenu d-flex">
                                <div class="section-submenu-inner">
                                    <div class="menu-type-heading mb-4">
                                        <h6>Natural Gemstones</h6>
                                    </div>
                                    <div class="sub-menu">

                                        <a href="#" class="image-list">
                                            <img src="./images/list-ring.webp" alt="">
                                            sub-menu-item
                                        </a>
                                        <a href="#" class="image-list">
                                            <img src="./images/list-ring.webp" alt="">
                                            sub-menu-item
                                        </a>
                                        <a href="#" class="image-list">
                                            <img src="./images/list-ring.webp" alt="">
                                            sub-menu-item
                                        </a>
                                        <a href="#" class="image-list">
                                            <img src="./images/list-ring.webp" alt="">
                                            sub-menu-item
                                        </a>
                                        <a href="#" class="image-list">
                                            <img src="./images/list-ring.webp" alt="">
                                            sub-menu-item
                                        </a>
                                        <a href="#" class="image-list">
                                            <img src="./images/list-ring.webp" alt="">
                                            sub-menu-item
                                        </a>
                                        <a href="#" class="image-list">
                                            <img src="./images/list-ring.webp" alt="">
                                            sub-menu-item
                                        </a>
                                        <a href="#" class="image-list">
                                            <img src="./images/list-ring.webp" alt="">
                                            sub-menu-item
                                        </a>
                                        <a href="#" class="image-list">
                                            <img src="./images/list-ring.webp" alt="">
                                            sub-menu-item
                                        </a>
                                        <a href="#" class="image-list">
                                            <img src="./images/list-ring.webp" alt="">
                                            sub-menu-item
                                        </a>
                                        <a class="explore-all" href="#">Explore All <i
                                                class="bi bi-chevron-right"></i></a>

                                    </div>
                                </div>
                                <div class="section-submenu-inner">
                                <div class="d-flex flex-column">
                                    <div class="half-menu">
                                        <div class="menu-type-heading mb-4">
                                            <h6>Natural Gemstones</h6>
                                        </div>
                                        <div class="sub-menu">

                                            <a href="#" class="image-list">
                                                <img src="./images/list-ring.webp" alt="">
                                                sub-menu-item
                                            </a>
                                            <a href="#" class="image-list">
                                                <img src="./images/list-ring.webp" alt="">
                                                sub-menu-item
                                            </a>
                                            <a href="#" class="image-list">
                                                <img src="./images/list-ring.webp" alt="">
                                                sub-menu-item
                                            </a>
                                            <a class="explore-all" href="#">Explore All <i
                                                    class="bi bi-chevron-right"></i></a>

                                        </div>
                                    </div>
                                    <div class="border-bottom mt-3 mb-3"></div>
                                    <div class="half-menu">
                                        <div class="menu-type-heading mb-4">
                                            <h6>Natural Gemstones</h6>
                                        </div>
                                        <div class="sub-menu">

                                            <a href="#" class="image-list">
                                                <img src="./images/list-ring.webp" alt="">
                                                sub-menu-item
                                            </a>
                                            <a href="#" class="image-list">
                                                <img src="./images/list-ring.webp" alt="">
                                                sub-menu-item
                                            </a>
                                            <a href="#" class="image-list">
                                                <img src="./images/list-ring.webp" alt="">
                                                sub-menu-item
                                            </a>
                                            <a class="explore-all" href="#">Explore All <i
                                                    class="bi bi-chevron-right"></i></a>

                                        </div>
                                    </div>
                                    <div class="border-bottom mt-3 mb-3"></div>
                                </div>
                                </div>
                                <div class="section-submenu-inner">
                                    <div class="d-flex flex-column">
                                    <div class="half-menu">
                                        <div class="menu-type-heading mb-4">
                                            <h6>Natural Gemstones</h6>
                                        </div>
                                        <div class="sub-menu">

                                            <a href="#" class="image-list">
                                                <img src="./images/list-ring.webp" alt="">
                                                sub-menu-item
                                            </a>
                                            <a href="#" class="image-list">
                                                <img src="./images/list-ring.webp" alt="">
                                                sub-menu-item
                                            </a>
                                            <a href="#" class="image-list">
                                                <img src="./images/list-ring.webp" alt="">
                                                sub-menu-item
                                            </a>
                                            <a class="explore-all" href="#">Explore All <i
                                                    class="bi bi-chevron-right"></i></a>

                                        </div>
                                    </div>
                                    <div class="border-bottom mt-3 mb-3"></div>
                                    <div class="half-menu">
                                        <div class="menu-type-heading mb-4">
                                            <h6>Natural Gemstones</h6>
                                        </div>
                                        <div class="sub-menu">

                                            <a href="#" class="image-list">
                                                <img src="./images/list-ring.webp" alt="">
                                                sub-menu-item
                                            </a>
                                            <a href="#" class="image-list">
                                                <img src="./images/list-ring.webp" alt="">
                                                sub-menu-item
                                            </a>
                                            <a href="#" class="image-list">
                                                <img src="./images/list-ring.webp" alt="">
                                                sub-menu-item
                                            </a>
                                            <a class="explore-all" href="#">Explore All <i
                                                    class="bi bi-chevron-right"></i></a>

                                        </div>
                                    </div>
                                    <div class="border-bottom mt-3 mb-3"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-submenu">
                                <div class="swiper submenu-slider">
                                    <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="./images/log-1.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./images/log-1.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./images/log-1.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./images/log-1.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./images/log-1.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./images/log-1.jpg" alt="">
                                    </div>
                                    
                                    </div>
                                    <div class="swiper-button-next swiper-btn"></div>
                                    <div class="swiper-button-prev swiper-btn"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
              @endforeach
              <div class="menu-item-wrap">
                  <a href="#" class="bg-dark text-light p-2" style="font-size:13px">Customize Jewellery</a>
              </div>
          </nav>
          <div class="user-section">
              <div class="search-input search-input-wrap">
                  <div class="input-group">
                      <div class="search-cion">
                          <i class="bi bi-search"></i>
                      </div>
                      <input type="text" class="form-control" aria-label="Default"
                          aria-describedby="inputGroup-sizing-default" placeholder="Search product...">
                  </div>
              </div>
              <div class="user-icon icon-type">
                  <a id="search-icon" href="#"><i class="bi bi-search"></i></a>
              </div>
              <div class="user-icon icon-type">
                  <a href="#"><i class="bi bi-person"></i></a>
              </div>
              <div class="user-icon icon-type">
                  <a href="#"><i class="bi bi-suit-heart"></i></a>
              </div>
              <div class="user-icon icon-type">
                  <a href="#"><i class="bi bi-bag"></i></a>
              </div>

          </div>

      </div>

  </header>
