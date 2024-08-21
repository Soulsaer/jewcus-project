@extends('layouts.app')

@section('title', $title)
@section('meta_tags')
<meta name="description" content="{{($description)}}">
<meta name="keywords" content="{{($keyword)}}">
@endsection
@section('other_tags')
{!! $others !!}
@endsection

@section('content')
    <!-- Floating btn -->
    <!-- <div class="fab-wrapper">
        <input id="fabCheckbox" type="checkbox" class="fab-checkbox" />
        <label class="fab" for="fabCheckbox">
          <span class="fab-dots fab-dots-1"></span>
          <span class="fab-dots fab-dots-2"></span>
          <span class="fab-dots fab-dots-3"></span>
        </label>
        <div class="fab-wheel">
          <a class="fab-action fab-action-1 hover-up">
            <p>Business</p>
          </a>
          <a class="fab-action fab-action-2 hover-up">
            <p>Customization</p>
          </a>
              <a class="fab-action fab-action-3 hover-up">
                <p>Live Sale</p>
          </a>
            <a class="fab-action fab-action-4 hover-up">
                <p>Your Products</p>
          </a>
        </div>
      </div> -->

    <!-- Floating btns -->
    <!-- <a href="Business_With_Us.html" class="float hover-up" target="_blank">
        <p class="fs-6">Business With Us</p>
    </a>
    <a href="Customization-2.html" class="float2 hover-up" target="_blank">
        <p class="fs-6">Customization</p>
    </a> -->
    <!-- Floating btns End-->

    <!-- Preloader -->
    <!-- <div id="preloader"></div> -->

    <!-- header -->
    <!-- <div id="header"></div> -->
    <!-- header End -->

    <!-- <div class="overlay_model">
        <div class="modal_home_popup">
            @foreach($ads as $item)
            <button id="close-modal-btn" class="border-0 border border-dark border-2"
                style="position: absolute;top: 0;left: 0;background-color: transparent;">X</button>
            <img src="{{asset('storage/'.$item->banner)}}" class="h-100 w-100" alt="">
            @endforeach
        </div>
    </div>
 -->
    <!-- body -->
    {{-- <main class="main">
        <section class="home-slider position-relative">
            <div class="hero-slider-1 dot-style-1 dot-style-1-position-1">
                @foreach($slider as $_slider)
                <div class="single-hero-slider single-animation-wrap">
                    <div class="container-fluid slider_banner p-0 m-0">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-12 slider_pro">
                                @if($_slider->media_type == 'video')
                                    <video width="100%" height="75%" autoplay muted loop >
                                        <source src="{{ asset('storage/'.$_slider->slider_image) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>

                                    <!-- <figure>
                                        <video src="{{ asset('storage/'.$_slider->slider_image) }}" loop muted autoplay
                                            width="100%" height="400px" style="object-fit: cover;"></video>
                                    </figure> -->
                                @else
                                    <img src="{{ asset('storage/'.$_slider->slider_image) }}"
                                    class="h-100" alt="{{ $_slider->alt_tag }}">
                                @endif
                                
                                <!-- <video width="100%" height="100%" loop autoplay muted>
                                    <source src="banner_video.mp4" type="video/mp4">
                                </video> -->

                                <!-- <div class="banner_overlay " style="left: 26% !important;top: 35%;">
                                    <p style="font-size: 50px;font-weight: 400;font-family: Poppins, sans-serif;padding-bottom: 30px;color: black;">The Summer Sale</p>
                                    <p style="font-size: 32px;font-weight: 400;font-family: Poppins, sans-serif;;padding-bottom: 30px;color: black;">Celebrate With Color</p>
                                    <div class="d-flex justify-content-start align-items-center view_detail w-100 hover-up">
                                        <a href="javascript:void(0)" class="d-block m-auto" style="background-color: transparent;color: black;">Shop Now<i
                                        class="fa-solid fa-angle-right ps-2"></i></a>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="slider-arrow hero-slider-1-arrow"></div>
        </section>

        <!-- product category -->
        <section class="featured section-padding  py-80 position-relative">
            <div class="mx-3">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="homepage_heading mb-4">Discover Jewelry For Every Story</h3>
                    </div>
                </div>
                <div class="row">
                    @foreach($discover as $item)
                    <div class="col-lg-2 col-md-4 mb-md-3 col-6 mb-lg-0 py-1 fs-6">
                        <a href="{{ url($item->slug) }}">
                            <div class="banner-features wow fadeIn animated hover-up">
                                <img src="{{asset('storage/'.$item->banner)}}" alt="{{$item->alt}}">
                                <h4 class="bg-1">{{ $item->banner_heading }}</h4>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- shop_slider -->
        <section class="shop_slider section-padding py-80">
            <div class="">
                <div class="row m-0">
                    <div class="col-lg-12 m-0 p-0">
                        <h3 class="homepage_heading ms-3">{{ $homeSection->mto_section_title }}</h3>
                        <p class="fs-6 mb-4 text--center ms-3">{{ $homeSection->mto_section_tag_line }}</p>

                        <div class="row m-0">
                            <div class="col-lg-6 p-0">
                                <video src="assets/video/11.mp4" loop muted autoplay width="100%"
                                height="100%"></video>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 py-3 ph-md-0 d-flex align-items-start flex-column justify-content-center " style="background:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRE2h8-AjCDRTpTM3O6E1rmfBv6iS3R0GaHq2yC0RN_QXomTvh) no-repeat;background-size: cover;">
                                <h3 class="title_shop text-center">{{ $homeSection->mto_section_sub_title }}</h3>
                                <p class="para_shop text-center">{{ $homeSection->mto_section_sub_tag_line }}</p>
                                <div class="py-3 d-flex justify-content-end align-items-center view_detail hover-up mx-auto">
                                    <a href="{{ url('customized-jewelry') }}" class="fs-6">{{ $homeSection->mto_section_btn_title }}<i
                                            class="fa-solid fa-angle-right ps-2"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="popular-categories section-padding py-80">
            <div class="mx-3 wow fadeIn animated">
                <h3 class="homepage_heading uppercase">Most Liked By People</h3>
                <p class="fs-6 mb-4">From The Artist’s Heart To Your Jewelry Box.</p>
                <div class="carausel-4-columns-cover arrow-center position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow"
                        id="carausel-4-columns-arrows"></div>
                    <div class="carausel-4-columns carausel-arrow-center mb-3   "
                        id="carausel-6-columns">
                        @if($mostLiked)
                        @foreach($mostLiked as $_productDetails)
                        <div class="product-cart-wrap my-3 hover-up">
                            <div class="product-img-action-wrap ">
                                <div class="product-img product-img-zoom">
                                    <a href="{{ route('singleproduct', ['url' => $_productDetails->url_key]) }}">
                                           
                                        <img class="default-img" src="{{asset('storage/'.$_productDetails->product_image)}}" alt="">
                                        <img class="hover-img" src="{{asset('storage/'.$_productDetails->second_image)}}" alt="">
                                    </a>
                                </div>
                                
                            </div>
                            <div class="product-content-wrap">
                                 
                                <span>
                                    <a href="{{ route('singleproduct', ['url' => $_productDetails->url_key]) }}"  class="product-title"><!-- {{$_productDetails->name}} -->
                                     {{ \Illuminate\Support\Str::limit($_productDetails->name, $limit = 40, $end = '...') }}
                                    </a></span>
                                 
                                <div class="product-price">
                                    <span>$ {{$_productDetails->special_price}} </span>
                                    <span class="old-price">$ {{$_productDetails->price}}</span>
                                </div>   
                                <div class="product-action-1 pt-3 show">
                                    <!-- <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                        <i class="fa-sharp fa-regular fa-eye"></i></a> -->
                                    <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                    <a aria-label="Add To Cart" class="action-btn hover-up" href="{{ route('add.to.cart', $_productDetails->id) }}"><i class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        
                    </div>
                </div>
                <div class="py-4 d-flex justify-content-end align-items-center view_detail hover-up">
                    <a href="javascript:void(0)" class="fs-6">View More<i class="fa-solid fa-angle-right ps-2"></i></a>
                </div>
            </div>
        </section>

        <!-- BEST COLLECTIONS -->
        <section class="section-padding py-80">
            <div class="mx-3">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <h4 class="homepage_heading uppercase">{{ $homeSection->rlc_section_title }}</h4>
                        <p class="fs-6 mb-4">{{ $homeSection->rlc_section_title }}</p>
                        
                        <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 m-auto d-block  must_detail">
                    <div class="border p-0 rounded hover-up pt-0 h-100">
                        <div class="h-100">
                            <img src="{{ asset('storage/'.$homeSection->rlc_section_image_1) }}" alt="" width="500px" height="600px">
                        </div>
                        <div class="text-center" style="background-color:black;border-radius:0 0 5px 5px;margin-top:-10px">
                            <h4 class="py-2 text-light">{{ $homeSection->rlc_section_image_1_title }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 m-auto d-block  must_detail">
                    <div class="border p-0 rounded hover-up pt-0 h-100">
                        <div class="h-100">
                        <video src="assets/video/neckless.mp4" loop muted autoplay width="100%"
                                        height="600px" style="object-fit:cover"></video>
                        </div>
                        <div class="text-center" style="background-color:black;border-radius:0 0 5px 5px;margin-top:-10px">
                            <h4 class="py-2 text-light">{{ $homeSection->rlc_section_image_video_title }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 m-auto d-block must_detail">
                        <div class="border p-0 rounded hover-up pt-0 h-100">
                            <div class="h-100">
                            <img src="{{ asset('storage/'.$homeSection->rlc_section_image_2) }}" alt="" width="500px" height="600px">
                            </div>
                            <div class="text-center" style="background-color:black;border-radius:0 0 5px 5px;margin-top:-10px">
                                <h4 class="py-2 text-light">{{ $homeSection->rlc_section_image_2_title }}</h4>
                                </div>
                            </div>
                        </div>
                </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Monthly Best Sell -->
       <section class="section-padding">
            <div class="mx-3 py-80">
                <div class="heading-tab d-flex">
                    <div class="heading-tab-left wow fadeIn animated">
                        <h3 class="homepage_heading mb-4">New & Notable Selling Product</h3>
                    </div>
                    <div class="heading-tab-right wow fadeIn animated">
                        <ul class="nav nav-tabs right no-border" id="myTab-1" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="nav-tab-one-1" data-bs-toggle="tab"
                                        data-bs-target="#tab-one-1" type="button" role="tab" aria-controls="tab-one"
                                        aria-selected="true">Rings
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="nav-tab-two-1" data-bs-toggle="tab"
                                        data-bs-target="#tab-two-1" type="button" role="tab" aria-controls="tab-two"
                                        aria-selected="false">Earrings
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="nav-tab-three-1" data-bs-toggle="tab"
                                        data-bs-target="#tab-three-1" type="button" role="tab" aria-controls="tab-three"
                                        aria-selected="false">Necklaces
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="nav-tab-four-1" data-bs-toggle="tab"
                                        data-bs-target="#tab-four-1" type="button" role="tab" aria-controls="tab-four"
                                        aria-selected="false">Bracelets
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="tab-content wow fadeIn animated" id="myTabContent-1">
                            <div class="tab-pane fade show active" id="tab-one-1" role="tabpanel" aria-labelledby="tab-one-1">
                                <div class="carausel-4-columns-cover arrow-center position-relative">
                                    <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-arrows"></div>
                                    <div class="carausel-4-columns carausel-arrow-center mb-3" id="carausel-4-columns">
                                        @if ($product1) 
                                        @foreach($product1 as $_productDetails)
                                            <div class="product-cart-wrap my-3 hover-up">
                                                <div class="product-img-action-wrap ">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="{{ route('singleproduct', ['url' => $_productDetails->url_key]) }}">
                                                               
                                                            <img class="default-img" src="{{asset('storage/'.$_productDetails->product_image)}}" alt="">
                                                            <img class="hover-img" src="{{asset('storage/'.$_productDetails->second_image)}}" alt="">
                                                        </a>
                                                    </div>
                                                    
                                                </div>
                                                <div class="product-content-wrap">
                                                     
                                                    <span>
                                                        <a href="{{ route('singleproduct', ['url' => $_productDetails->url_key]) }}"  class="product-title"><!-- {{$_productDetails->name}} -->
                                                         {{ \Illuminate\Support\Str::limit($_productDetails->name, $limit = 40, $end = '...') }}
                                                        </a></span>
                                                     
                                                    <div class="product-price">
                                                        <span>$ {{$_productDetails->special_price}} </span>
                                                        <span class="old-price">$ {{$_productDetails->price}}</span>
                                                    </div>   
                                                    <div class="product-action-1 pt-3 show">
                                                        <!-- <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                            <i class="fa-sharp fa-regular fa-eye"></i></a> -->
                                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                                        <a aria-label="Add To Cart" class="action-btn hover-up" href="{{ route('add.to.cart', $_productDetails->id) }}"><i class="fa-solid fa-cart-shopping"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-two-1" role="tabpanel" aria-labelledby="tab-two-1">
                                <div class="carausel-4-columns-cover arrow-center position-relative">
                                    <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-2-arrows"></div>
                                    <div class="carausel-4-columns carausel-arrow-center mb-3" id="carausel-4-columns-2">
                                        @if ($product2)
                                        @foreach($product2 as $_productDetails)
                                            <div class="product-cart-wrap my-3 hover-up">
                                                <div class="product-img-action-wrap ">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="{{ route('singleproduct', ['url' => $_productDetails->url_key]) }}">
                                                               
                                                            <img class="default-img" src="{{asset('storage/'.$_productDetails->product_image)}}" alt="">
                                                            <img class="hover-img" src="{{asset('storage/'.$_productDetails->second_image)}}" alt="">
                                                        </a>
                                                    </div>
                                                    
                                                </div>
                                                <div class="product-content-wrap">
                                                     
                                                    <span>
                                                        <a href="{{ route('singleproduct', ['url' => $_productDetails->url_key]) }}"  class="product-title"><!-- {{$_productDetails->name}} -->
                                                         {{ \Illuminate\Support\Str::limit($_productDetails->name, $limit = 40, $end = '...') }}
                                                        </a></span>
                                                     
                                                    <div class="product-price">
                                                        <span>$ {{$_productDetails->special_price}} </span>
                                                        <span class="old-price">$ {{$_productDetails->price}}</span>
                                                    </div>   
                                                    <div class="product-action-1 pt-3 show">
                                                        <!-- <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                            <i class="fa-sharp fa-regular fa-eye"></i></a> -->
                                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                                        <a aria-label="Add To Cart" class="action-btn hover-up" href="{{ route('add.to.cart', $_productDetails->id) }}"><i class="fa-solid fa-cart-shopping"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-three-1" role="tabpanel" aria-labelledby="tab-three-1">
                                <div class="carausel-4-columns-cover arrow-center position-relative">
                                    <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-3-arrows"></div>
                                    <div class="carausel-4-columns carausel-arrow-center mb-3" id="carausel-4-columns-3">
                                        @if ($product3)
                                        @foreach($product3 as $_productDetails)
                                            <div class="product-cart-wrap my-3 hover-up">
                                                <div class="product-img-action-wrap ">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="{{ route('singleproduct', ['url' => $_productDetails->url_key]) }}">
                                                               
                                                            <img class="default-img" src="{{asset('storage/'.$_productDetails->product_image)}}" alt="">
                                                            <img class="hover-img" src="{{asset('storage/'.$_productDetails->second_image)}}" alt="">
                                                        </a>
                                                    </div>
                                                    
                                                </div>
                                                <div class="product-content-wrap">
                                                     
                                                    <span>
                                                        <a href="{{ route('singleproduct', ['url' => $_productDetails->url_key]) }}"  class="product-title"><!-- {{$_productDetails->name}} -->
                                                         {{ \Illuminate\Support\Str::limit($_productDetails->name, $limit = 40, $end = '...') }}
                                                        </a></span>
                                                     
                                                    <div class="product-price">
                                                        <span>$ {{$_productDetails->special_price}} </span>
                                                        <span class="old-price">$ {{$_productDetails->price}}</span>
                                                    </div>   
                                                    <div class="product-action-1 pt-3 show">
                                                        <!-- <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                            <i class="fa-sharp fa-regular fa-eye"></i></a> -->
                                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                                        <a aria-label="Add To Cart" class="action-btn hover-up" href="{{ route('add.to.cart', $_productDetails->id) }}"><i class="fa-solid fa-cart-shopping"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-four-1" role="tabpanel" aria-labelledby="tab-four-1">
                                <div class="carausel-4-columns-cover arrow-center position-relative">
                                    <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-4-arrows"></div>
                                    <div class="carausel-4-columns carausel-arrow-center mb-3" id="carausel-4-columns-4">
                                        @if ($product4)
                                        @foreach($product4 as $_productDetails)
                                            <div class="product-cart-wrap my-3 hover-up">
                                                <div class="product-img-action-wrap ">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="{{ route('singleproduct', ['url' => $_productDetails->url_key]) }}">
                                                               
                                                            <img class="default-img" src="{{asset('storage/'.$_productDetails->product_image)}}" alt="">
                                                            <img class="hover-img" src="{{asset('storage/'.$_productDetails->second_image)}}" alt="">
                                                        </a>
                                                    </div>
                                                    
                                                </div>
                                                <div class="product-content-wrap">
                                                     
                                                    <span>
                                                        <a href="{{ route('singleproduct', ['url' => $_productDetails->url_key]) }}"  class="product-title"><!-- {{$_productDetails->name}} -->
                                                         {{ \Illuminate\Support\Str::limit($_productDetails->name, $limit = 40, $end = '...') }}
                                                        </a></span>
                                                     
                                                    <div class="product-price">
                                                        <span>$ {{$_productDetails->special_price}} </span>
                                                        <span class="old-price">$ {{$_productDetails->price}}</span>
                                                    </div>   
                                                    <div class="product-action-1 pt-3 show">
                                                        <!-- <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                            <i class="fa-sharp fa-regular fa-eye"></i></a> -->
                                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                                        <a aria-label="Add To Cart" class="action-btn hover-up" href="{{ route('add.to.cart', $_productDetails->id) }}"><i class="fa-solid fa-cart-shopping"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--MUST HAVE -->
        <section class="Must " style="overflow-x: hidden;">
            <div class="mx-3 py-80">
                <div class="row">
                    <div class="col-lg-12">
                        <h5 class="homepage_heading">{{ $homeSection->bjp_section_title }}</h5>
                        <p class="fs-6 mb-4">{{ $homeSection->bjp_section_tag_line }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 m-auto d-block py-2 must_detail">
                    <div class="border p-0 rounded hover-up pt-0" style="background-color:#f8e7e7;">
                        <div class="">
                            <img src="{{ asset('storage/'.$homeSection->bjp_section_image_1) }}" alt="{{ $homeSection->bjp_section_image_1_alt }}">
                        </div>
                        <div class="text-center">
                            <h3 class="pt-3">{{ $homeSection->bjp_section_image_1_title }}</h3>
                            <h4 class="py-2">{{ $homeSection->bjp_section_image_1_name }}</h4>
                            <div class="d-flex justify-content-start align-items-center view_detail w-100  mb-3">
                                <a href="{{ $homeSection->bjp_section_image_1_link }}" class="d-block m-auto p-1 px-3" style="font-size: 14px;background-color: transparent;color: black;">Shop Now<i
                                    class="fa-solid fa-angle-right ps-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 m-auto d-block py-2 must_detail">
                    <div class="border p-0 rounded hover-up pt-0" style="background-color: #e2eff5;">
                        <div class="">
                            <img src="{{ asset('storage/'.$homeSection->bjp_section_image_2) }}" alt="{{ $homeSection->bjp_section_image_2_alt }}">
                        </div>
                        <div class="text-center">
                            <h3 class="pt-3">{{ $homeSection->bjp_section_image_2_title }}</h3>
                            <h4 class="py-2">{{ $homeSection->bjp_section_image_2_name }}</h4>
                            <div class="d-flex justify-content-start align-items-center view_detail w-100  mb-3">
                                <a href="{{ $homeSection->bjp_section_image_2_link }}" class="d-block m-auto p-1 px-3" style="font-size: 14px;background-color: transparent;color: black;">Shop Now<i
                                    class="fa-solid fa-angle-right ps-2"></i></a>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 m-auto d-block py-2 must_detail">
                        <div class="border p-0 rounded hover-up pt-0" style="background-color: #e0dbee;">
                            <div class="">
                                <img src="{{ asset('storage/'.$homeSection->bjp_section_image_3) }}" alt="{{ $homeSection->bjp_section_image_3_alt }}">
                            </div>
                            <div class="text-center">
                                <h3 class="pt-3">{{ $homeSection->bjp_section_image_3_title }}</h3>
                                <h4 class="py-2">{{ $homeSection->bjp_section_image_3_name }}</h4>
                                <div class="d-flex justify-content-start align-items-center view_detail w-100  mb-3">
                                    <a href="{{ $homeSection->bjp_section_image_3_link }}" class="d-block m-auto p-1 px-3" style="font-size: 14px;background-color: transparent;color: black;">Shop Now<i
                                        class="fa-solid fa-angle-right ps-2"></i></a>
                                </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </section>

        <!--  -->
        <section class="donetion py-80">
            <div class="mx-3">
                <div class="row">
                    <h3 class="homepage_heading mb-4">{{ $homeSection->bwu_section_title }}</h3>
                    <div class="col-lg-6 py-3">
                        <div class="row">
                            <div class="col-lg-6 col-6 px-1">
                                <img src="{{ asset('storage/'.$homeSection->bwu_section_image_1) }}"
                                    class=" p-0 m-0 homepage_donation_img hover-up" alt="{{ $homeSection->bwu_section_image_1_alt }}">
                            </div>
                            <div class="col-lg-6 col-6 px-1">
                                <img src="{{ asset('storage/'.$homeSection->bwu_section_image_2) }}"
                                    class=" p-0 m-0 homepage_donation_img hover-up" alt="{{ $homeSection->bwu_section_image_2_alt }}">
                            </div>
                            <div class="col-lg-6 col-6 px-1">
                                <img src="{{ asset('storage/'.$homeSection->bwu_section_image_3) }}"
                                    class=" p-0 m-0 homepage_donation_img hover-up" alt="{{ $homeSection->bwu_section_image_3_alt }}">
                            </div>
                            <div class="col-lg-6 col-6 px-1">
                                <img src="{{ asset('storage/'.$homeSection->bwu_section_image_4) }}"
                                    class=" p-0 m-0 homepage_donation_img hover-up" alt="{{ $homeSection->bwu_section_image_4_alt }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 py-3 d-flex flex-column align-content-center justify-content-center ps-lg-4">
                        <h3 class="title_shop fs-1">{{ $homeSection->bwu_section_sub_title }}</h3>
                        <p class="para_shop py-4">
                            {{ $homeSection->bwu_section_content }}
                        </p>
                        <div class=" d-flex justify-content-sm-start align-items-center view_detail hover-up">
                            <a href="{{ $homeSection->bwu_section_btn_link }}" class="fs-6">{{ $homeSection->bwu_section_btn_title }}<i
                                    class="fa-solid fa-angle-right ps-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Blogs -->
        <div class="py-80 mx-3">
            <h1 class="homepage_heading text-start">RECENT BLOGS</h1>
            <div class="row">
                @if($lastblog)
                @foreach($lastblog as $_items)
      
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                  <a href="{{ route('singleblogs', ['id' => $_items->id]) }}">
                    <div class="blog-card m-1 my-3">
                    <div class="card-banner">
                      <p class="category-tag popular">Real Stone</p>
                      <img class="banner-img" src="{{ asset('storage/lastblog_image/'.$_items->lastblog_image) }}" alt='{{ $_items->alt }}'>
                    </div>
                    <div class="card-body">
                      <!-- <p class="blog-hashtag">#Food #Pizza</p> -->
                      <h2 class="blog-title">{{ $_items->banner_heading }}</h2>
                      <p class="blog-description">{!! Str::limit($_items->description, 100) !!}</p>
                      
                      <div class="card-profile">
                        <img class="profile-img" src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpYJQKSoM7S75P_KMRtQHqAAIPh133CSxByw&usqp=CAU' alt=''>
                        <div class="card-profile-info">
                          <h3 class="profile-name">{{ $_items->author }}</h3>
                          <!-- <p class="profile-followers">5.2k followers</p> -->
                        </div>
                      </div>
                    </div>
                  </div>
                  </a>
                </div>
              
              @endforeach
              @endif
            </div>
        </div>

        <!-- blogs Slider -->
         
        <!-- Image -->
        <section class="py-80">
            <div class="mx-3">
                <div class="row">
                    <div class="col-12">
                        <h2 class="homepage_heading mb-4 uppercase">Customer Gallery</h2>
                    </div>
                </div>
                <div class="row image_show">
                    @if($gellary) 
                    @foreach ($gellary as $gallary) 
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-1 m-auto d-block image_show_hover hover-up">
                        <img src="{{ asset('storage/'.$gallary->image) }}" style="width: 100%;height: 100%;" alt="{{ $gallary->alt }}">
                    </div>
                    @endforeach
                    @endif
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-center align-items-center pt-3 view_detail w-100 hover-up">
                            <a href="javascript:void(0)" class="d-block m-auto fs-6">View More<i
                                    class="fa-solid fa-angle-right ps-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        
        
        
        
        <!-- Contant -->
        <div class="px-3 pt-80" id="myDiv">
            <h3 class="homepage_heading mb-4">More With us</h3>
            <h2 style="line-height: 34px;">
                Discover Timeless Elegance with Huzurr: Your final Destination for Delicate Jewelry</h2>
            <p class="fs-6 my-2">We at Huzurr think that jewelry serves as more than just a
                design piece. We see it as a reflection of your distinct personality and sense of style. It is an
                enduring expression of beauty and a celebration of unique moments. Huzurr cordially welcomes you to
                embark with us on an adventure where creativity and style collide and each piece of jewelry carries a
                narrative. Enter the captivating world of Huzurr, where jewelry is a poetic representation of your
                beauty and sense of style. For you, every item in our jewelry collection will serve as more than just an
                accessory. Every jewelry item is an exquisite work of art, a masterfully crafted canvas on which the
                true meaning of exquisite jewelry is expressed. Purchase from us to add a wide selection of exquisite
                jewelry to your jewelry collection..</p>

            <h2 style="line-height: 34px;margin-top: 2.5rem;">What We Are</h2>
            <p class="fs-6 ">In addition to being an online jewelry retailer, Huzurr is a sophisticated and
                fashionable haven. The exquisite jewelry in our collection is a display of your options. We are
                inextricably linked by an unwavering dedication to the highest standards of quality and an unbridled
                passion for beautiful design. Huzurr presents a line of fashionable jewelry that is both timeless and
                elegant, hand-picked from a variety of designs. Every item represents our commitment to quality
                craftsmanship, guaranteeing that each one is more than just an accessory but rather a part of your
                exquisite ensemble for that special occasion. </p>

            <h2 style="line-height: 34px;margin-top: 2.5rem;">Our Product Range</h2>

            <h3 style="line-height: 34px;margin-top: 2.5rem;">Rings</h3>
            <p class="fs-6">Check out our commitment and style in the range of our ring collection. Here
                each piece is a chapter in the story of love and style. From dazzling engagement rings that symbolize
                eternal commitment to statement pieces that express Uniqueness, our collection is a celebration of the
                profound emotions that can be expressed with beautiful rings. </p>
            <h3 style="line-height: 34px;margin-top: 2.5rem;">Necklaces</h3>

            <p class="fs-6">A symphony of elegance and glamor that exceeds the ordinary to class. Each of
                our necklace is a masterpiece because effortlessly blending with a touch of charm. Whether you seek a
                subtle accent for everyday wear or a show-stopping piece for special occasions, our selection ensures
                that you find a piece that suits your distinct sense of style.</p>
            <h3 style="line-height: 34px;margin-top: 2.5rem;">Earrings</h3>

            <p class="fs-6">Harmonious Blends of Classic and Contemporary Immerse yourself in the artistry
                of our earring collection, In our earing collection classic meets contemporary in a harmonious style.
                From timeless studs that show elegance to modern designs that make a bold statement, our earrings
                provide a diverse look on different occasions. Raise your look with each meticulously crafted earring
                that reflects a perfect balance of tradition and modernity. </p>
            <h3 style="line-height: 34px;margin-top: 2.5rem;">Bracelets</h3>

            <p class="fs-6">In our stunning range of bracelets each piece is a masterpiece that is crafted
                with perfection. Whether you prefer the delicate sparkle of gemstones or the piece of precious metals,
                our bracelets are designed to complement your style. </p>

            <h3 style="line-height: 34px;margin-top: 2.5rem;">Birthstones</h3>
            <p class="fs-6">With our 100% genuine birthstones, embark on a mystical adventure. Every
                birthstone is a special illustration of marvels, containing the energy and meaning specific to its birth
                month. Discover the assortment of birthstones, where each gem is a carefully chosen cosmic connection
                that speaks to your uniqueness rather than just a piece of jewelry. </p>

            <h2 style="line-height: 34px;margin-top: 2.5rem;">What we offer </h2>
            <h3 style="line-height: 34px;margin-top: 2.5rem;">100% Original Products</h3>
            <p class="fs-6">Step into the world of Huzurr, where authenticity is not just a claim but a
                sparkling reality. Our pride lies in our coveted birthstones and each one is a genuine and unique piece
                with the certification of originality. From the ethereal glow of a moonstone to the fiery brilliance of
                a ruby, every gem tells a story. Revel in the assurance that when you choose Huzurr, you choose
                originality, you choose a promise to bring extraordinary to every piece in our collection.</p>
            <h3 style="line-height: 34px;margin-top: 2.5rem;">Quality Assurance</h3>
            <p class="fs-6">At Huzurr, we don't just promise quality, we embody it. Our commitment to
                excellence is non-negotiable. Each jewellery piece is a result of meticulous craftsmanship and undergoes
                a series of rigorous quality checks. From the selection of materials to the final polish, we leave no
                stone unturned to ensure that every detail meets and exceeds the highest standards.</p>
            <h3 style="line-height: 34px;margin-top: 2.5rem;">Return Policy</h3>
            <p class="fs-6">Satisfaction is important for every customer, at Huzurr, and we stand behind
                every piece we offer. Explore our hassle-free return policy, developed with our confidence to provide
                the best product. We understand that sometimes choices may change, and we want you to shop with peace of
                mind. If, for any reason, you're not completely satisfied with your purchase, our straightforward return
                process ensures that you can return or exchange your jewelry effortlessly. </p>
            <h3 style="line-height: 34px;margin-top: 2.5rem;">Our global presence </h3>
            <p class="fs-6">We at Huzurr have a huge impact that crosses border sales. as we expertly cross
                international boundaries to provide a line of jewelry to every location on the planet. Beyond national
                borders, we are devoted to having a global presence. It is the consequence of our steadfast commitment
                to transforming style into a globally accessible luxury. </p>
            <h3 style="line-height: 34px;margin-top: 2.5rem;">Why choose us </h3>
            <p class="fs-6">At Huzurr, every piece made by our master craftsmen is an expression of art, not
                just a skill. Immerse yourself in a realm where jewelry that has been expertly crafted can fulfill your
                dreams. Every item conveys a tale of commitment, accuracy, and a desire to transform emotions into
                wearable works of art. Each piece of jewelry that our artisans create is a wearable work of art because
                every detail is meticulously thought out and expertly crafted. </p>
            <h3 style="line-height: 34px;margin-top: 2.5rem;">Elevate Your Jewelry Experience</h3>
            <p class="fs-6">Huzurr invites you to elevate your jewelry experience to new heights. Immerse
                yourself in a world where every piece is more than an accessory. From the initial concept to the final
                creation, our jewelry embodies a commitment to excellence that stands the test of time. Whether you're
                celebrating a special moment or expressing your individuality, Huzurr is your partner in crafting
                memories and making a statement with jewelry that resonates with the essence of you. </p>
            <h3 style="line-height: 34px;margin-top: 2.5rem;">Endless Choices</h3>
            <p class="fs-6">Discover a universe of choices at Huzurr, where your individuality takes the
                center of focus. From timeless classics that exude sophistication to modern creations that push the
                boundaries of design, our diverse collection caters to every taste and occasion. Whether you seek the
                understated elegance of traditional designs or the bold allure of contemporary pieces, Huzurr offers an
                extensive range that empowers you to curate a jewelry collection as unique as you are. </p>
            <h3 style="line-height: 34px;margin-top: 2.5rem;">Global Trust</h3>
            <p class="fs-6">Become part of a global community that relies on Huzurr for more than just
                jewelry. Our foundation is built on trust, authenticity, and an unwavering commitment to quality.
                Joining hands with us means embracing a brand that prioritizes the authenticity of its products,
                ensuring that each piece is a genuine representation of beauty and craftsmanship. </p>

            <!-- <button >Toggle Height</button> -->
        </div>
        <div class="py-80 pt-0 d-flex justify-content-center my-4 align-items-center view_detail w-100 hover-up">
            <a href="javascript:void(0)" id="readMoreBtn" class="d-block m-auto fs-6" onclick="toggleHeight()">Read
                More<i class="fa-solid fa-angle-right ps-2"></i></a>
        </div>
        <script>
            function toggleHeight() {
                var myDiv = document.getElementById('myDiv');
                var btn = document.getElementById('readMoreBtn');

                myDiv.classList.toggle('expanded');

                if (myDiv.classList.contains('expanded')) {
                    btn.innerText = 'Read Less';
                } else {
                    btn.innerText = 'Read More';
                }
            }
        </script>
        <!-- Contant ENd -->

        <!-- Faq -->
        <section class="faq py-80" style="background-image: url('assets/images/background_image_starts.jpg');">
            <div class="container">
                <h2 class="homepage_heading mb-4">Frequently Asked Questions</h2>
                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                        <div class="faq_section">
                            <div class="accordion_faq">
                                <div class="accordion-item">
                                    <button id="accordion-button-1" aria-expanded="false">
                                        <span class="accordion-title fs-6">Why is the moon sometimes out during the
                                            day?</span>
                                        <span class="icon" aria-hidden="true"></span>
                                    </button>
                                    <div class="accordion-content">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo
                                            duis ut.
                                            Ut tortor pretium viverra suspendisse potenti.
                                        </p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <button id="accordion-button-2" aria-expanded="false">
                                        <span class="accordion-title fs-6">Why is the sky blue?</span>
                                        <span class="icon" aria-hidden="true"></span>
                                    </button>
                                    <div class="accordion-content">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo
                                            duis ut.
                                            Ut tortor pretium viverra suspendisse potenti.
                                        </p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <button id="accordion-button-3" aria-expanded="false">
                                        <span class="accordion-title fs-6">Will we ever discover aliens?</span>
                                        <span class="icon" aria-hidden="true"></span>
                                    </button>
                                    <div class="accordion-content">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo
                                            duis ut.
                                            Ut tortor pretium viverra suspendisse potenti.
                                        </p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <button id="accordion-button-4" aria-expanded="false">
                                        <span class="accordion-title fs-6">How much does the Earth weigh?</span>
                                        <span class="icon" aria-hidden="true"></span>
                                    </button>
                                    <div class="accordion-content">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo
                                            duis ut.
                                            Ut tortor pretium viverra suspendisse potenti.
                                        </p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <button id="accordion-button-5" aria-expanded="false">
                                        <span class="accordion-title fs-6">How do airplanes stay up?</span>
                                        <span class="icon" aria-hidden="true"></span>
                                    </button>
                                    <div class="accordion-content">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo
                                            duis ut.
                                            Ut tortor pretium viverra suspendisse potenti.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- faq js -->
        <script>
            const items = document.querySelectorAll('.accordion_faq button');

            function toggleAccordion() {
                const itemToggle = this.getAttribute('aria-expanded');

                for (i = 0; i < items.length; i++) {
                    items[i].setAttribute('aria-expanded', 'false');
                }

                if (itemToggle == 'false') {
                    this.setAttribute('aria-expanded', 'true');
                }
            }

            items.forEach((item) => item.addEventListener('click', toggleAccordion));
        </script>
    </main> --}}

    <main>
            
        <section class="position-relative banner-section">
            <div class="main-inner-section section-type-video on">
                <a href="#">
                    <video width="100%" height="auto" autoplay muted loop playsinline preload="metadata">
                        <source src="./images/banner-video.mp4" type="video/mp4">
                        <source src="movie.ogg" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                </a>
            </div>
            <div class="main-inner-section position-relative section-type-single-photo">
                <div class="image-text">
                    <div class="image-box">
                        <h3 class="text-uppercase">Jewcus best Collection</h3>
                        <p >Jewelry Collection</p>
                        <div class="btn-wrap">
                            <a href="#" class="black-btn">Shop Now</a>
                        </div>
                    </div>
                    <img src="./images/singleimage.webp" alt="">
                </div>
            </div>
            <div class="main-inner-section position-relative section-type-grid-photo">
               <div class="grid-box d-grid">
                <div class="grid-item-banner">
                    <div class="image-box">
                        <h3 class="text-uppercase">Jewcus best Collection</h3>
                        <p >Jewelry Collection</p>
                        <div class="btn-wrap">
                            <a href="#" class="black-btn">Shop Now</a>
                        </div>
                    </div>
                    <img src="./images/singleimage.webp" alt="">
                </div>
                <div class="grid-item-banner">
                    <div class="image-box">
                        <h3 class="text-uppercase">Jewcus best Collection</h3>
                        <p >Jewelry Collection</p>
                        <div class="btn-wrap">
                            <a href="#" class="black-btn">Shop Now</a>
                        </div>
                    </div>
                    <img src="./images/singleimage.webp" alt="">
                </div>
                <div class="grid-item-banner">
                    <div class="image-box">
                        <h3 class="text-uppercase">Jewcus best Collection</h3>
                        <p >Jewelry Collection</p>
                        <div class="btn-wrap">
                            <a href="#" class="black-btn">Shop Now</a>
                        </div>
                    </div>
                    <img src="./images/singleimage.webp" alt="">
                </div>
               </div>
            </div>
            <div id="countdown">
                <h3 class="text-white text-uppercase">Sell End In</h3>
                <div id='tiles'></div>
                <div class="labels">
                  <li>Days</li>
                  <li>Hours</li>
                  <li>Mins</li>
                  <li>Secs</li>
                </div>
               
                <div class="text-center mx-auto sell-end-btn">
                    <a href="#" class="white-btn">shop now</a>
                </div>
              </div>
        </section>
       
       
        <!-- Shop by Category -->
        <style>
            ul{list-style: none;}
            .sub-category-slider-block {
                text-align: center;
            }

            .sub-category-mobile-slider-block {
                height: 100%;
                width: 100%;
                overflow: hidden;
            }

            .sub-category-mobile-slider-block ul {
                display: flex;
                overflow: hidden;
                overflow-x: scroll;
                width: 100%;
                height: 100%;
                overflow-y: scroll;
                background: #f4f4f4;
                margin: 0
            }

            .sub-category-mobile-slider-block ul::-webkit-scrollbar {
                display: none;
            }

            /******************************* Desktop Category Slider **********************************/

            .sub-category-mobile-slider-block ul {
                display: flex;
                width: 100%;
                height: 100%;
                margin: 0 auto;
                text-align: center;
                justify-content: center;
                background: none;
            }

            .sub-category-mobile-slider-block ul li {
                border: none !important;
                padding: 7px 5px;
                text-align: center;
                cursor: pointer;
            }

            .sub-category-mobile-slider-block img {
                border-radius: 100px;
                max-width: 120px !important;
                border: 2px solid;
                border-color: #e69c94;
                padding: 2px;
                width: 100% !important;
                height: auto;
            }


            @keyframes clockwise {
                0% {
                    top: -5px;
                    left: 0;
                }

                12% {
                    top: -2px;
                    left: 2px;
                }

                25% {
                    top: 0;
                    left: 5px;
                }

                37% {
                    top: 2px;
                    left: 2px;
                }

                50% {
                    top: 5px;
                    left: 0;
                }

                62% {
                    top: 2px;
                    left: -2px;
                }

                75% {
                    top: 0;
                    left: -5px;
                }

                87% {
                    top: -2px;
                    left: -2px;
                }

                100% {
                    top: -5px;
                    left: 0;
                }
            }

            @keyframes counterclockwise {
                0% {
                    top: -5px;
                    right: 0;
                }

                12% {
                    top: -2px;
                    right: 2px;
                }

                25% {
                    top: 0;
                    right: 5px;
                }

                37% {
                    top: 2px;
                    right: 2px;
                }

                50% {
                    top: 5px;
                    right: 0;
                }

                62% {
                    top: 2px;
                    right: -2px;
                }

                75% {
                    top: 0;
                    right: -5px;
                }

                87% {
                    top: -2px;
                    right: -2px;
                }

                100% {
                    top: -5px;
                    right: 0;
                }
            }


            .desktop-category-slider .sub-cat-title {
                font-size: 1.2em;
                text-align: center;
                padding-top: 0px !important;
                width: auto;
                margin-bottom: 0 !important;
            }



            /******************************* End Desktop Category Slider **********************************/
        </style>
        <div class="sub-category-mobile-slider-block" style="margin: 40px auto 0;max-width: 1200px;">
            <ul class="p-0 m-0"><!--<li>
            <figure><img id="mobile_focused_category_slider_bangle" title="1% Instant discount on all UPI transaction" alt="Malabar Gold &amp; Diamonds' 1% Instant discount on all UPI transaction" src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/02_feb/ind-homepage/category-slider/Offer.jpg" /></figure>
            <p class="sub-cat-title">UPI Offer</p>
            </li>
            -->
                {{-- <li onclick="location.href='https://www.malabargoldanddiamonds.com/gifts.html?stock_status=539';">
                    <img id="mobile_focused_category_slider_fast_shipping" title="Fast Shipping"
                        alt="Malabar Gold &amp; Diamonds' Fast Shipping Jewellery"
                        src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2022/04_april/mobilesubcategory/new/fast-ships-2.gif">
                    <p class="sub-cat-title">Fast Ships</p>
                </li> --}}
                <li
                    onclick="location.href='https://www.malabargoldanddiamonds.com/gifts/recommendations/shop-by-recommendations/best-sellers.html';">
                    <img id="mobile_focused_category_slider_bangle" title="Best Sellers" alt="New Arrivals"
                        src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/05_may/india-homepage/focus-block/best-seller.jpg">
                    <p class="sub-cat-title">Best Sellers</p>
                </li>
                <li
                    onclick="location.href='https://www.malabargoldanddiamonds.com/gifts/recommendations/shop-by-recommendations/best-sellers.html';">
                    <img id="mobile_focused_category_slider_bangle" title="Best Sellers" alt="New Arrivals"
                        src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/05_may/india-homepage/focus-block/best-seller.jpg">
                    <p class="sub-cat-title">New Arrivals</p>
                </li>
                {{-- <li onclick="location.href='https://www.malabargoldanddiamonds.com/diamond-jewellery/ring.html';">
                    <img id="mobile_focused_category_slider_bangle" title="Diamond Rings for Women"
                        alt="Diamond Rings for Women"
                        src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/02_feb/ind-homepage/category-slider/solitare.jpg">
                    <p class="sub-cat-title">Ring</p>
                </li>
                <li
                    onclick="location.href='https://www.malabargoldanddiamonds.com/gold-jewellery/accessories/style/anklet.html';">
                    <img id="mobile_focused_category_slider_bangle" title="Gold Anklets for Women"
                        alt="Gold Anklets for Women"
                        src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/02_feb/ind-homepage/category-slider/Anklet.jpg">
                    <p class="sub-cat-title">Anklet</p>
                </li>
                <li onclick="location.href='https://www.malabargoldanddiamonds.com/gifts.html?product_type=898';">
                    <img id="mobile_focused_category_slider_bangle" title="Bangle" alt="Bangle"
                        src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2022/04_april/mobilesubcategory/new/Bangle-1.jpg">
                    <p class="sub-cat-title">Bangle</p>
                </li>
                <li
                    onclick="location.href='https://www.malabargoldanddiamonds.com/diamond-jewellery/earring.html';">
                    <img id="mobile_focused_category_slider_earring" title="Earring" alt="Earring"
                        src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2022/04_april/mobilesubcategory/new/Offer.jpg">
                    <p class="sub-cat-title">Earring</p>
                </li>
                <li onclick="location.href='https://www.malabargoldanddiamonds.com/gifts.html?product_type=901';">
                    <img id="mobile_focused_category_slider_mangalsutra" title="Mangalsutra" alt="Mangalsutra"
                        src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/02_feb/ind-homepage/category-slider/Mangalsutra.jpg">
                    <p class="sub-cat-title">Mangalsutra</p>
                </li>
                <li onclick="location.href='https://www.malabargoldanddiamonds.com/platinum-jewellery.html';"><img
                        id="mobile_focused_category_slider_platinum" title="Platinum" alt="Platinum"
                        src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2022/04_april/mobilesubcategory/new/Platinum.jpg">
                    <p class="sub-cat-title">Platinum</p>
                </li>
                <li onclick="location.href='https://www.malabargoldanddiamonds.com/gold-jewellery/chain.html';"><img
                        id="mobile_focused_category_slider_chain" title="Gold Chains for Women"
                        alt="Gold Chains for Women"
                        src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2022/04_april/mobilesubcategory/new/Chain-1.jpg">
                    <p class="sub-cat-title">Gold Chain</p>
                </li>
                <li onclick="location.href='https://www.malabargoldanddiamonds.com/platinum-jewellery.html?our_collection=3204';">
                    <img id="mobile_focused_category_slider_couple_band" title="Couple Band" alt="Couple Band"
                        src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2022/04_april/mobilesubcategory/new/band.jpg">
                    <p class="sub-cat-title">Couple Band</p>
                </li> --}}
                @foreach ($formatTreeCategory as $category) 
                <li onclick="location.href='https://www.malabargoldanddiamonds.com/diamond-jewellery/ring.html';">
                    <img id="mobile_focused_category_slider_bangle" title="Diamond Rings for Women"
                        alt="Diamond Rings for Women"
                        src="https://static.malabargoldanddiamonds.com/media/wysiwyg/offer_page/2024/02_feb/ind-homepage/category-slider/solitare.jpg">
                    <p class="sub-cat-title">{{ $category->name }}</p>
                </li>
                @endforeach
            </ul>
        </div>
        <section class="common-gap pt-4">
            <div class="product-process">
                <div class="section-container">
                    <div class="steps-heading">
                        <h2>Custom With Jewcus</h2>
                        <p class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, officiis.</p>
                    </div>
                    <div class="steps-banner-innner">
                        <ul>
                            <li>
                                <h3>Step-1</h3>
                                <h5>idea</h5>
                            </li>
                            <li>
                                <h3>Step-2</h3>
                                <h5>design</h5>
                            </li>
                            <li>
                                <h3>Step-3</h3>
                                <h5>approved </h5>
                            </li>
                            <li>
                                <h3>Step-4</h3>
                                <h5>manufacturing</h5>
                            </li>
                            <li>
                                <h3>Step-5</h3>
                                <h5>delivery</h5>
                            </li>
                        </ul>
                    </div>
                    <div class="btn-wrap pt-1 pt-md-3">
                        <a href="#" class="white-btn fw-bold">Customize Now</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="common-gap w-10">
            <div class="section-container section-type-fire-piece">
                <h2 class="sec-heading text-center big-heading">Find Jewellery Collection</h2>
                <div class="jewelry-wrap">
                    <div class="hidden-container">
                        <div class="swiper jewelry">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="shadow-box text-center">
                                        <a href="#">
                                            <img src="./images/gold-ring.webp" alt="fsda">
                                            <h6 class="product_title_h">Diamond Ring</h6> 
                                            <span class="product_price_h">$28</span>
                                        </a>
                                        <div class="text-end">
                                            <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-1 mx-1" href="wishlist.html">
                                                <i class="bi bi-heart text-light"></i>
                                            </a>
                                            <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-2 mx-1" href="cart.html">
                                                <i class="bi bi-cart3 text-light"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="shadow-box text-center">
                                        <a href="#">
                                            <img src="./images/gold-ring.webp" alt="fsda">
                                            <h6 class="product_title_h">Diamond Ring</h6> 
                                            <span class="product_price_h">$28</span>
                                        </a>
                                        <div class="text-end">
                                            <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-1 mx-1" href="wishlist.html">
                                                <i class="bi bi-heart text-light"></i>
                                            </a>
                                            <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-2 mx-1" href="cart.html">
                                                <i class="bi bi-cart3 text-light"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="shadow-box text-center">
                                        <a href="#">
                                            <img src="./images/gold-ring.webp" alt="fsda">
                                            <h6 class="product_title_h">Diamond Ring</h6> 
                                            <span class="product_price_h">$28</span>
                                        </a>
                                        <div class="text-end">
                                            <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-1 mx-1" href="wishlist.html">
                                                <i class="bi bi-heart text-light"></i>
                                            </a>
                                            <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-2 mx-1" href="cart.html">
                                                <i class="bi bi-cart3 text-light"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="shadow-box text-center">
                                        <a href="#">
                                            <img src="./images/gold-ring.webp" alt="fsda">
                                            <h6 class="product_title_h">Diamond Ring</h6> 
                                            <span class="product_price_h">$28</span>
                                        </a>
                                        <div class="text-end">
                                            <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-1 mx-1" href="wishlist.html">
                                                <i class="bi bi-heart text-light"></i>
                                            </a>
                                            <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-2 mx-1" href="cart.html">
                                                <i class="bi bi-cart3 text-light"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="shadow-box text-center">
                                        <a href="#">
                                            <img src="./images/gold-ring.webp" alt="fsda">
                                            <h6 class="product_title_h">Diamond Ring</h6> 
                                            <span class="product_price_h">$28</span>
                                        </a>
                                        <div class="text-end">
                                            <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-1 mx-1" href="wishlist.html">
                                                <i class="bi bi-heart text-light"></i>
                                            </a>
                                            <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-2 mx-1" href="cart.html">
                                                <i class="bi bi-cart3 text-light"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="shadow-box text-center">
                                        <a href="#">
                                            <img src="./images/gold-ring.webp" alt="fsda">
                                            <h6 class="product_title_h">Diamond Ring</h6> 
                                            <span class="product_price_h">$28</span>
                                        </a>
                                        <div class="text-end">
                                            <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-1 mx-1" href="wishlist.html">
                                                <i class="bi bi-heart text-light"></i>
                                            </a>
                                            <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-2 mx-1" href="cart.html">
                                                <i class="bi bi-cart3 text-light"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="shadow-box text-center">
                                        <a href="#">
                                            <img src="./images/gold-ring.webp" alt="fsda">
                                            <h6 class="product_title_h">Diamond Ring</h6> 
                                            <span class="product_price_h">$28</span>
                                        </a>
                                        <div class="text-end">
                                            <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-1 mx-1" href="wishlist.html">
                                                <i class="bi bi-heart text-light"></i>
                                            </a>
                                            <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-2 mx-1" href="cart.html">
                                                <i class="bi bi-cart3 text-light"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="shadow-box text-center">
                                        <a href="#">
                                            <img src="./images/gold-ring.webp" alt="fsda">
                                            <h6 class="product_title_h">Diamond Ring</h6> 
                                            <span class="product_price_h">$28</span>
                                        </a>
                                        <div class="text-end">
                                            <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-1 mx-1" href="wishlist.html">
                                                <i class="bi bi-heart text-light"></i>
                                            </a>
                                            <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-2 mx-1" href="cart.html">
                                                <i class="bi bi-cart3 text-light"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="slider-arrows">
                                <div class="swiper-button-prev swiper-btn"></div>
                                <div class="swiper-button-next swiper-btn"></div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </section>

        <section class="banner-wrap">
            <div class="section-container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-6 py-2">
                        <img src="images/ring-banner.png" alt="">
                    </div>
                    <div class="col-md-5 pt-2 pt-md-3 pb-md-5 pb-2">
                        <h3 class="mb-md-3 mb-1">Lorem ipsum dolor sit.</h3>
                        <p class="mb-md-4 mb-1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero, impedit?
                            Inventore tempore quos porro aspernatur voluptatum quidem saepe eum? Reiciendis
                            asperiores labore enim sed doloremque id ullam nulla illo tempora!</p>

                        <div class="btn-wrap pt-1 pt-md-3">
                            <a href="#" class="white-btn fw-bold">Shop Now</a>
                        </div>

                    </div>
                </div>
            </div>
        </section>          

        <section class="common-gap">
            <div class="section-container section-type-fire-piece">
                <h2 class="sec-heading">Today's On Fire Pieces</h2>
                <p class="sec-desc">We don't play favorites, but these
                    clearly have a huge fan base.</p>

                <div class="jewelry-wrap">
                    <div class="hidden-container">
                        <div class="swiper jewelry">
                            <div class="swiper-wrapper">
                                <!-- <div class="swiper-slide">
                                    <div class="shadow-box">
                                        <a href="#">
                                            <img src="./images/gold-ring.webp" alt>
                                            <p class="product_title_h">Blue
                                                Sapphire Teardrop Pendant
                                                with Diamond</p>
                                            <span>$169</span> 
                                        </a>
                                    </div>
                                </div> -->
                                
                                <div class="swiper-slide">
                                    <div class="shadow-box text-center">
                                        <a href="#">
                                            <img src="./images/gold-ring.webp" alt="fsda">
                                            <h6 class="product_title_h">Diamond Ring</h6> 
                                            <span class="product_price_h">$28</span>
                                        </a>
                                        <div class="text-end">
                                            <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-1 mx-1" href="wishlist.html">
                                                <i class="bi bi-heart text-light"></i>
                                            </a>
                                            <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-2 mx-1" href="cart.html">
                                                <i class="bi bi-cart3 text-light"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="shadow-box text-center">
                                        <a href="#">
                                            <img src="./images/gold-ring.webp" alt="fsda">
                                            <h6 class="product_title_h">Diamond Ring</h6> 
                                            <span class="product_price_h">$28</span>
                                        </a>
                                        <div class="text-end">
                                            <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-1 mx-1" href="wishlist.html">
                                                <i class="bi bi-heart text-light"></i>
                                            </a>
                                            <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-2 mx-1" href="cart.html">
                                                <i class="bi bi-cart3 text-light"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="shadow-box text-center">
                                        <a href="#">
                                            <img src="./images/gold-ring.webp" alt="fsda">
                                            <h6 class="product_title_h">Diamond Ring</h6> 
                                            <span class="product_price_h">$28</span>
                                        </a>
                                        <div class="text-end">
                                            <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-1 mx-1" href="wishlist.html">
                                                <i class="bi bi-heart text-light"></i>
                                            </a>
                                            <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-2 mx-1" href="cart.html">
                                                <i class="bi bi-cart3 text-light"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="shadow-box text-center">
                                        <a href="#">
                                            <img src="./images/gold-ring.webp" alt="fsda">
                                            <h6 class="product_title_h">Diamond Ring</h6> 
                                            <span class="product_price_h">$28</span>
                                        </a>
                                        <div class="text-end">
                                            <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-1 mx-1" href="wishlist.html">
                                                <i class="bi bi-heart text-light"></i>
                                            </a>
                                            <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-2 mx-1" href="cart.html">
                                                <i class="bi bi-cart3 text-light"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="shadow-box text-center">
                                        <a href="#">
                                            <img src="./images/gold-ring.webp" alt="fsda">
                                            <h6 class="product_title_h">Diamond Ring</h6> 
                                            <span class="product_price_h">$28</span>
                                        </a>
                                        <div class="text-end">
                                            <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-1 mx-1" href="wishlist.html">
                                                <i class="bi bi-heart text-light"></i>
                                            </a>
                                            <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-2 mx-1" href="cart.html">
                                                <i class="bi bi-cart3 text-light"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="shadow-box text-center">
                                        <a href="#">
                                            <img src="./images/gold-ring.webp" alt="fsda">
                                            <h6 class="product_title_h">Diamond Ring</h6> 
                                            <span class="product_price_h">$28</span>
                                        </a>
                                        <div class="text-end">
                                            <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-1 mx-1" href="wishlist.html">
                                                <i class="bi bi-heart text-light"></i>
                                            </a>
                                            <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-2 mx-1" href="cart.html">
                                                <i class="bi bi-cart3 text-light"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="slider-arrows">
                                <div class="swiper-button-prev swiper-btn"></div>
                                <div class="swiper-button-next swiper-btn"></div>
                            </div>
                        </div>
                        <div class="btn-wraper">
                            <a class="view-all" href="#">View All <span class="value-change">Jewelry</span> </a>

                        </div>

                    </div>
                </div>

            </div>

        </section>
        
        <section class="common-gap">
            <div class="section-container section-type-Explore-Diamonds">
                <h2 class="sec-heading">Explore Diamonds</h2>
                <p class="sec-desc">We don't play favorites, but these
                    clearly have a huge fan base.</p>

                <div class="jewelry-wrap">
                    <div class="hidden-container">
                        <div class="swiper jewelry">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="shadow-box">
                                        <a href="#">
                                            <img src="./images/svg.png" alt>
                                            <h3 class="diamond-heading text-center">Dianmond</h3>

                                        </a>
                                    </div>

                                </div>
                                <div class="swiper-slide">
                                    <div class="shadow-box">
                                        <a href="#">
                                            <img src="./images/svg.png" alt>
                                            <h3 class="diamond-heading text-center">Dianmond</h3>

                                        </a>
                                    </div>

                                </div>
                                <div class="swiper-slide">
                                    <div class="shadow-box">
                                        <a href="#">
                                            <img src="./images/diamond-ring.svg" alt>
                                            <h3 class="diamond-heading text-center">Dianmond</h3>

                                        </a>
                                    </div>

                                </div>
                                <div class="swiper-slide">
                                    <div class="shadow-box">
                                        <a href="#">
                                            <img src="./images/diamond-ring.svg" alt>
                                            <h3 class="diamond-heading text-center">Dianmond</h3>

                                        </a>
                                    </div>

                                </div>
                                <div class="swiper-slide">
                                    <div class="shadow-box">
                                        <a href="#">
                                            <img src="./images/svg.png" alt>
                                            <h3 class="diamond-heading text-center">Dianmond</h3>

                                        </a>
                                    </div>

                                </div>
                                <div class="swiper-slide">
                                    <div class="shadow-box">
                                        <a href="#">
                                            <img src="./images/diamond-ring.svg" alt>
                                            <h3 class="diamond-heading text-center">Dianmond</h3>

                                        </a>
                                    </div>

                                </div>
                                <div class="swiper-slide">
                                    <div class="shadow-box">
                                        <a href="#">
                                            <img src="./images/svg.png" alt>
                                            <h3 class="diamond-heading text-center">Dianmond</h3>

                                        </a>
                                    </div>

                                </div>
                                <div class="swiper-slide">
                                    <div class="shadow-box">
                                        <a href="#">
                                            <img src="./images/svg.png" alt>
                                            <h3 class="diamond-heading text-center">Dianmond</h3>

                                        </a>
                                    </div>

                                </div>

                            </div>
                            <div class="slider-arrows">
                                <div class="swiper-button-prev swiper-btn"></div>
                                <div class="swiper-button-next swiper-btn"></div>
                            </div>
                        </div>
                        <div class="btn-wraper">
                            <a class="view-all" href="#">View All <span class="value-change">Jewelry</span> </a>

                        </div>

                    </div>
                </div>

            </div>

        </section>
        <section class="common-gap">
            <div class="section-container section-type-opal">
                <h2 class="sec-heading">Gifting Made Super Easy</h2>
                <p class="sec-desc">For grand gestures or just-because, we
                    have them all right here.</p>
                <div class="tab-list-clicker flex-column flex-md-row gap-2">
                    <ul class="tab-list-inner tabs">
                        <li class="list-type active tab-link current" data-tab="tab-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M11.817 17.333C11.3423 17.333 10.8783 17.1923 10.4836 16.9285C10.0889 16.6648 9.78133 16.29 9.59968 15.8515C9.41803 15.4129 9.3705 14.9304 9.46311 14.4648C9.55571 13.9993 9.78429 13.5716 10.1199 13.236C10.4556 12.9003 10.8832 12.6717 11.3488 12.5791C11.8143 12.4865 12.2969 12.5341 12.7354 12.7157C13.174 12.8974 13.5488 13.205 13.8125 13.5997C14.0762 13.9943 14.217 14.4583 14.217 14.933C14.217 15.5695 13.9641 16.18 13.514 16.6301C13.064 17.0802 12.4535 17.333 11.817 17.333ZM11.817 13.333C11.5005 13.333 11.1912 13.4269 10.9281 13.6027C10.665 13.7785 10.4599 14.0284 10.3388 14.3207C10.2177 14.6131 10.186 14.9348 10.2477 15.2452C10.3095 15.5555 10.4619 15.8406 10.6856 16.0644C10.9094 16.2882 11.1945 16.4405 11.5048 16.5023C11.8152 16.564 12.1369 16.5323 12.4293 16.4112C12.7216 16.2901 12.9715 16.0851 13.1473 15.8219C13.3232 15.5588 13.417 15.2495 13.417 14.933C13.4159 14.5094 13.2469 14.1034 12.947 13.8042C12.647 13.505 12.2406 13.337 11.817 13.337V13.333Z"
                                    fill="#2F2D28" />
                                <path
                                    d="M11.4024 10.2013L11.3745 13.0621L12.1755 13.0699L12.2034 10.2091L11.4024 10.2013Z"
                                    fill="#2F2D28" />
                                <path
                                    d="M8.66064 11.2761L8.08826 11.8364L10.089 13.8801L10.6614 13.3198L8.66064 11.2761Z"
                                    fill="#2F2D28" />
                                <path
                                    d="M6.90778 14.5347L6.89929 15.3357L9.75913 15.366L9.76762 14.565L6.90778 14.5347Z"
                                    fill="#2F2D28" />
                                <path
                                    d="M10.0162 16.0781L7.97302 18.0793L8.53352 18.6516L10.5767 16.6503L10.0162 16.0781Z"
                                    fill="#2F2D28" />
                                <path
                                    d="M11.2618 16.9723L11.2339 19.8322L12.0348 19.84L12.0628 16.9801L11.2618 16.9723Z"
                                    fill="#2F2D28" />
                                <path
                                    d="M13.3476 16.162L12.7753 16.7224L14.776 18.7661L15.3484 18.2057L13.3476 16.162Z"
                                    fill="#2F2D28" />
                                <path
                                    d="M13.6773 14.6754L13.6688 15.4763L16.5297 15.5066L16.5381 14.7056L13.6773 14.6754Z"
                                    fill="#2F2D28" />
                                <path
                                    d="M14.9036 11.391L12.8605 13.3923L13.421 13.9646L15.4641 11.9633L14.9036 11.391Z"
                                    fill="#2F2D28" />
                                <path
                                    d="M17.948 13.235L17.587 12.522C18.921 11.844 19.655 10.981 19.655 10.091C19.655 8.147 16.162 6.504 12.027 6.504C7.89198 6.504 4.39998 8.147 4.39998 10.091C4.4683 10.581 4.66248 11.045 4.96358 11.4376C5.26469 11.8301 5.66242 12.138 6.11798 12.331L5.71798 13.023C5.13764 12.7646 4.63601 12.3573 4.26402 11.8423C3.89203 11.3274 3.66293 10.7231 3.59998 10.091C3.59998 7.631 7.29998 5.703 12.03 5.703C16.76 5.703 20.459 7.631 20.459 10.091C20.456 11.3 19.566 12.414 17.948 13.235Z"
                                    fill="#2F2D28" />
                                <path
                                    d="M4.76403 15.964C3.98703 15.5509 3.3282 14.9465 2.84981 14.208C2.37142 13.4694 2.08927 12.621 2.03003 11.743C2.03003 8.38302 6.46703 5.65002 11.92 5.65002C17.373 5.65002 21.81 8.38302 21.81 11.743C21.7534 12.6073 21.4793 13.4433 21.0133 14.1734C20.5472 14.9034 19.9042 15.5039 19.144 15.919L18.704 15.25C19.3501 14.9045 19.8992 14.4024 20.3011 13.7897C20.7029 13.177 20.9446 12.4733 21.004 11.743C21.004 8.82402 16.927 6.45002 11.915 6.45002C6.90303 6.45002 2.83003 8.82402 2.83003 11.743C2.893 12.4867 3.14341 13.2022 3.55786 13.8228C3.97231 14.4434 4.53729 14.9489 5.20003 15.292L4.76403 15.964Z"
                                    fill="#2F2D28" />
                                <path
                                    d="M16.644 17.561C16.4155 17.5581 16.1882 17.5275 15.967 17.47L15.467 17.348L15.704 16.896C16.0479 16.2687 16.2281 15.5649 16.2281 14.8495C16.2281 14.1342 16.0479 13.4303 15.704 12.803L15.469 12.354L15.961 12.23C16.1825 12.1702 16.4107 12.1389 16.64 12.137C17.3593 12.137 18.0491 12.4228 18.5577 12.9314C19.0663 13.4399 19.352 14.1298 19.352 14.849C19.352 15.5683 19.0663 16.2581 18.5577 16.7667C18.0491 17.2753 17.3593 17.561 16.64 17.561H16.644ZM16.652 12.938C17.1582 14.1618 17.1582 15.5363 16.652 16.76C17.1589 16.76 17.6449 16.5587 18.0033 16.2003C18.3617 15.8419 18.563 15.3559 18.563 14.849C18.563 14.3422 18.3617 13.8561 18.0033 13.4977C17.6449 13.1394 17.1589 12.938 16.652 12.938Z"
                                    fill="#2F2D28" />
                                <path
                                    d="M7.10006 17.561C6.74392 17.561 6.39126 17.4909 6.06222 17.3546C5.73319 17.2183 5.43422 17.0185 5.18239 16.7667C4.93056 16.5149 4.73079 16.2159 4.5945 15.8869C4.45821 15.5578 4.38806 15.2052 4.38806 14.849C4.38806 14.4929 4.45821 14.1402 4.5945 13.8112C4.73079 13.4822 4.93056 13.1832 5.18239 12.9313C5.43422 12.6795 5.73319 12.4798 6.06222 12.3435C6.39126 12.2072 6.74392 12.137 7.10006 12.137C7.32543 12.1398 7.54954 12.171 7.76706 12.23L8.25906 12.354L8.02406 12.803C7.68024 13.4303 7.50001 14.1342 7.50001 14.8495C7.50001 15.5649 7.68024 16.2687 8.02406 16.896L8.26006 17.347L7.76506 17.47C7.54779 17.5266 7.32455 17.5572 7.10006 17.561ZM7.08006 12.938C6.57323 12.938 6.08716 13.1394 5.72878 13.4977C5.3704 13.8561 5.16906 14.3422 5.16906 14.849C5.16906 15.3559 5.3704 15.8419 5.72878 16.2003C6.08716 16.5587 6.57323 16.76 7.08006 16.76C6.82886 16.1542 6.69955 15.5048 6.69955 14.849C6.69955 14.1932 6.82886 13.5438 7.08006 12.938Z"
                                    fill="#2F2D28" />
                                <path
                                    d="M11.872 20.021C10.7303 20.032 9.61665 19.6676 8.70225 18.9839C7.78785 18.3002 7.12335 17.3351 6.81092 16.2369C6.49849 15.1388 6.55544 13.9684 6.97301 12.9058C7.39058 11.8432 8.14565 10.9471 9.1221 10.3554C10.0986 9.76377 11.2423 9.50923 12.3776 9.63096C13.5128 9.75269 14.5766 10.244 15.4054 11.0292C16.2342 11.8145 16.7821 12.8502 16.9649 13.9772C17.1476 15.1042 16.9551 16.2601 16.417 17.267C15.9787 18.0937 15.3247 18.7862 14.5245 19.2711C13.7243 19.756 12.8076 20.0152 11.872 20.021ZM11.872 10.479C10.9052 10.4686 9.96173 10.7763 9.18696 11.3548C8.41218 11.9332 7.84903 12.7503 7.58421 13.6802C7.31939 14.6101 7.36759 15.6013 7.72138 16.5011C8.07518 17.4009 8.71495 18.1595 9.54219 18.66C10.3694 19.1605 11.3383 19.3753 12.2995 19.2711C13.2608 19.167 14.1611 18.7497 14.862 18.0837C15.5628 17.4176 16.0253 16.5396 16.1782 15.5849C16.331 14.6301 16.1658 13.6516 15.708 12.8C15.3373 12.1032 14.785 11.5197 14.1097 11.1111C13.4344 10.7025 12.6612 10.4841 11.872 10.479Z"
                                    fill="#2F2D28" />
                            </svg>Rings
                        </li>
                        <li class="list-type tab-link" data-tab="tab-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M16.0999 9.99198C15.9946 9.99243 15.891 9.96482 15.7999 9.91198L13.1999 8.41198C13.1092 8.36042 13.0337 8.28584 12.981 8.19577C12.9283 8.1057 12.9004 8.00332 12.8999 7.89898V4.89898C12.9004 4.79536 12.9278 4.69365 12.9793 4.60375C13.0308 4.51385 13.1048 4.43882 13.1939 4.38598L15.7939 2.88598C15.884 2.83497 15.9858 2.80817 16.0894 2.80817C16.193 2.80817 16.2948 2.83497 16.3849 2.88598L18.9849 4.38598C19.0754 4.43825 19.1508 4.51326 19.2034 4.60359C19.256 4.69393 19.2841 4.79644 19.2849 4.90098V7.90098C19.2845 8.00532 19.2565 8.1077 19.2038 8.19777C19.1511 8.28784 19.0756 8.36242 18.9849 8.41398L16.3849 9.91398C16.298 9.96361 16.2 9.99044 16.0999 9.99198ZM13.6999 7.77898L16.0999 9.15998L18.4909 7.77898V5.01898L16.0999 3.63798L13.6999 5.01898V7.77898Z"
                                    fill="#2F2D28" />
                                <path
                                    d="M16.0999 7.915L14.7869 7.156V5.642L16.0999 4.883L17.4129 5.642V7.156L16.0999 7.915ZM15.5829 6.7L16.0959 7L16.6079 6.7V6.1L16.0959 5.8L15.5829 6.1V6.7Z"
                                    fill="#2F2D28" />
                                <path
                                    d="M16.0999 19.191C15.4423 19.1912 14.7993 18.9963 14.2524 18.6311C13.7055 18.2658 13.2791 17.7466 13.0273 17.1391C12.7755 16.5315 12.7095 15.8629 12.8377 15.2179C12.9659 14.5728 13.2825 13.9803 13.7474 13.5152C14.2124 13.0501 14.8049 12.7333 15.4499 12.6049C16.0949 12.4765 16.7635 12.5423 17.3711 12.794C17.9787 13.0456 18.4981 13.4718 18.8635 14.0186C19.2289 14.5654 19.4239 15.2083 19.4239 15.866C19.4229 16.7473 19.0724 17.5923 18.4492 18.2156C17.8261 18.8389 16.9813 19.1896 16.0999 19.191ZM16.0999 13.342C15.6007 13.342 15.1127 13.49 14.6977 13.7673C14.2826 14.0447 13.9591 14.4389 13.7681 14.9001C13.577 15.3613 13.527 15.8688 13.6244 16.3584C13.7218 16.848 13.9622 17.2977 14.3152 17.6507C14.6682 18.0037 15.1179 18.2441 15.6075 18.3415C16.0971 18.4388 16.6046 18.3889 17.0658 18.1978C17.527 18.0068 17.9212 17.6833 18.1986 17.2682C18.4759 16.8531 18.6239 16.3652 18.6239 15.866C18.6234 15.1967 18.3573 14.555 17.8841 14.0818C17.4109 13.6086 16.7692 13.3425 16.0999 13.342Z"
                                    fill="#2F2D28" />
                                <path
                                    d="M17.1529 16.49C17.0468 16.49 16.9451 16.4478 16.8701 16.3728C16.795 16.2978 16.7529 16.1961 16.7529 16.09C16.7526 15.8567 16.6598 15.633 16.4949 15.468C16.3299 15.303 16.1062 15.2102 15.8729 15.21C15.7668 15.21 15.6651 15.1678 15.5901 15.0928C15.515 15.0178 15.4729 14.9161 15.4729 14.81C15.4729 14.7039 15.515 14.6021 15.5901 14.5271C15.6651 14.4521 15.7668 14.41 15.8729 14.41C16.3186 14.4105 16.7458 14.5878 17.061 14.9029C17.3761 15.218 17.5534 15.6453 17.5539 16.091C17.5538 16.1435 17.5433 16.1955 17.5231 16.244C17.5028 16.2925 17.4733 16.3365 17.436 16.3735C17.3988 16.4106 17.3546 16.4399 17.3061 16.4599C17.2575 16.4799 17.2054 16.4901 17.1529 16.49Z"
                                    fill="#2F2D28" />
                                <path
                                    d="M16.1 12.609C15.8283 12.6094 15.5627 12.5292 15.3366 12.3786C15.1106 12.2279 14.9343 12.0136 14.8301 11.7628C14.7258 11.5119 14.6984 11.2358 14.7511 10.9693C14.8039 10.7029 14.9345 10.458 15.1264 10.2658C15.3183 10.0736 15.563 9.94265 15.8294 9.88951C16.0958 9.83637 16.3719 9.86344 16.6229 9.9673C16.8739 10.0712 17.0885 10.2471 17.2394 10.473C17.3904 10.6988 17.471 10.9643 17.471 11.236C17.4707 11.5997 17.3262 11.9485 17.0692 12.2058C16.8123 12.4632 16.4637 12.6082 16.1 12.609ZM16.1 10.665C15.9867 10.6646 15.8759 10.6978 15.7815 10.7605C15.6872 10.8231 15.6136 10.9124 15.57 11.0169C15.5264 11.1215 15.5149 11.2366 15.5368 11.3477C15.5587 11.4588 15.6131 11.5609 15.6932 11.6411C15.7732 11.7212 15.8752 11.7758 15.9863 11.798C16.0973 11.8201 16.2125 11.8087 16.3171 11.7653C16.4217 11.7219 16.5111 11.6485 16.5739 11.5542C16.6367 11.46 16.6702 11.3492 16.67 11.236C16.67 11.0847 16.61 10.9396 16.5031 10.8326C16.3962 10.7255 16.2512 10.6652 16.1 10.665Z"
                                    fill="#2F2D28" />
                                <path
                                    d="M7.90496 12C7.79961 12.0005 7.69604 11.9729 7.60496 11.92L5.00496 10.42C4.91456 10.3678 4.83935 10.2929 4.78674 10.2028C4.73412 10.1127 4.70594 10.0103 4.70496 9.90597V6.90597C4.70567 6.80253 4.73311 6.70102 4.78462 6.61131C4.83614 6.5216 4.90997 6.44673 4.99896 6.39397L7.59896 4.89397C7.68909 4.84297 7.79089 4.81616 7.89446 4.81616C7.99802 4.81616 8.09982 4.84297 8.18996 4.89397L10.79 6.39397C10.8803 6.44616 10.9556 6.52102 11.0082 6.61116C11.0608 6.7013 11.089 6.80361 11.09 6.90797V9.90797C11.0897 10.0125 11.0618 10.1151 11.0091 10.2053C10.9564 10.2956 10.8808 10.3703 10.79 10.422L8.18996 11.922C8.10294 11.9713 8.00497 11.9981 7.90496 12ZM5.51296 9.78297L7.90496 11.164L10.3 9.78297V7.02297L7.89996 5.64197L5.51296 7.02297V9.78297Z"
                                    fill="#2F2D28" />
                                <path
                                    d="M7.90494 9.91896L6.59094 9.15996V7.64596L7.90494 6.88696L9.21694 7.64596V9.15996L7.90494 9.91896ZM7.39194 8.69996L7.90494 8.99996L8.41594 8.69996V8.10696L7.90494 7.80696L7.39194 8.10696V8.69996Z"
                                    fill="#2F2D28" />
                                <path
                                    d="M7.90498 21.2C7.24732 21.2002 6.60436 21.0053 6.05744 20.6401C5.51051 20.2749 5.08418 19.7557 4.83237 19.1481C4.58055 18.5406 4.51457 17.872 4.64275 17.2269C4.77093 16.5819 5.08753 15.9893 5.5525 15.5242C6.01747 15.0591 6.60992 14.7423 7.25494 14.614C7.89995 14.4856 8.56855 14.5514 9.17617 14.803C9.78379 15.0546 10.3031 15.4808 10.6685 16.0276C11.0339 16.5744 11.229 17.2173 11.229 17.875C11.2277 18.7563 10.8771 19.6011 10.254 20.2243C9.63095 20.8475 8.78625 21.1984 7.90498 21.2ZM7.90498 15.351C7.40574 15.3508 6.91765 15.4987 6.50245 15.7759C6.08725 16.0531 5.76359 16.4472 5.5724 16.9084C5.38121 17.3696 5.33108 17.8771 5.42836 18.3668C5.52563 18.8565 5.76594 19.3063 6.11889 19.6594C6.47184 20.0125 6.92157 20.2529 7.41121 20.3504C7.90084 20.4479 8.40838 20.398 8.86964 20.207C9.3309 20.016 9.72516 19.6924 10.0025 19.2774C10.2799 18.8623 10.428 18.3742 10.428 17.875C10.4285 17.2051 10.1631 16.5625 9.68996 16.0882C9.21686 15.614 8.57484 15.347 7.90498 15.346V15.351Z"
                                    fill="#2F2D28" />
                                <path
                                    d="M8.96101 18.494C8.85492 18.494 8.75318 18.4519 8.67816 18.3768C8.60315 18.3018 8.56101 18.2001 8.56101 18.094C8.56074 17.8607 8.46794 17.637 8.30297 17.472C8.13799 17.3071 7.91432 17.2143 7.68101 17.214C7.57492 17.214 7.47318 17.1719 7.39816 17.0968C7.32315 17.0218 7.28101 16.9201 7.28101 16.814C7.28101 16.7079 7.32315 16.6062 7.39816 16.5312C7.47318 16.4561 7.57492 16.414 7.68101 16.414C8.12667 16.4145 8.55393 16.5918 8.86907 16.9069C9.1842 17.2221 9.36148 17.6493 9.36201 18.095C9.36188 18.1475 9.3514 18.1995 9.33117 18.248C9.31095 18.2965 9.28138 18.3405 9.24414 18.3776C9.20691 18.4146 9.16274 18.444 9.11416 18.4639C9.06558 18.4839 9.01353 18.4941 8.96101 18.494Z"
                                    fill="#2F2D28" />
                                <path
                                    d="M7.90496 14.612C7.6336 14.612 7.36834 14.5315 7.14272 14.3808C6.91709 14.23 6.74124 14.0157 6.6374 13.765C6.53355 13.5143 6.50638 13.2385 6.55932 12.9723C6.61226 12.7062 6.74293 12.4617 6.93481 12.2698C7.12669 12.078 7.37115 11.9473 7.6373 11.8943C7.90344 11.8414 8.1793 11.8686 8.43 11.9724C8.6807 12.0763 8.89498 12.2521 9.04574 12.4777C9.19649 12.7034 9.27696 12.9686 9.27696 13.24C9.2767 13.6038 9.13206 13.9526 8.87482 14.2098C8.61758 14.4671 8.26876 14.6117 7.90496 14.612ZM7.90496 12.669C7.79174 12.6688 7.68102 12.7022 7.5868 12.765C7.49258 12.8277 7.41911 12.9171 7.37569 13.0216C7.33228 13.1262 7.32086 13.2413 7.3429 13.3523C7.36494 13.4634 7.41944 13.5654 7.4995 13.6454C7.57955 13.7255 7.68156 13.78 7.79261 13.802C7.90366 13.8241 8.01876 13.8127 8.12332 13.7692C8.22788 13.7258 8.3172 13.6524 8.37998 13.5581C8.44275 13.4639 8.47616 13.3532 8.47596 13.24C8.4757 13.0886 8.41545 12.9435 8.30843 12.8365C8.2014 12.7295 8.05632 12.6692 7.90496 12.669Z"
                                    fill="#2F2D28" />
                            </svg>Earrings
                        </li>
                        <li class="list-type tab-link" data-tab="tab-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M12.0271 9.583C11.7265 9.5828 11.4327 9.49349 11.1829 9.32635C10.933 9.15921 10.7384 8.92175 10.6235 8.64399C10.5086 8.36623 10.4786 8.06063 10.5374 7.76585C10.5961 7.47106 10.741 7.20032 10.9536 6.98784C11.1662 6.77537 11.4371 6.6307 11.7319 6.57213C12.0267 6.51356 12.3323 6.54372 12.61 6.6588C12.8877 6.77387 13.125 6.9687 13.292 7.21864C13.4589 7.46858 13.5481 7.76241 13.5481 8.063C13.5473 8.46606 13.3867 8.85237 13.1016 9.13728C12.8165 9.42219 12.4301 9.58247 12.0271 9.583ZM12.0271 7.344C11.8849 7.3442 11.746 7.38653 11.6279 7.46566C11.5098 7.54478 11.4178 7.65715 11.3635 7.78854C11.3092 7.91994 11.2951 8.06448 11.323 8.20388C11.3509 8.34329 11.4194 8.47131 11.52 8.57176C11.6206 8.67222 11.7487 8.7406 11.8882 8.76826C12.0276 8.79592 12.1721 8.78162 12.3034 8.72717C12.4348 8.67272 12.547 8.58057 12.626 8.46235C12.7049 8.34413 12.7471 8.20516 12.7471 8.063C12.7471 7.96849 12.7284 7.87492 12.6922 7.78762C12.656 7.70032 12.603 7.62101 12.5361 7.55424C12.4692 7.48746 12.3899 7.43452 12.3025 7.39844C12.2152 7.36237 12.1216 7.34387 12.0271 7.344Z"
                                    fill="#2F2D28" />
                                <path
                                    d="M13.386 8.55101H13.362L13.117 8.53801C13.0111 8.53309 12.9114 8.48629 12.84 8.4079C12.7685 8.32952 12.7311 8.22596 12.736 8.12001C12.7468 8.01628 12.7954 7.92014 12.8724 7.84989C12.9495 7.77963 13.0497 7.74017 13.154 7.73901L13.409 7.75201C13.5151 7.75506 13.6156 7.80013 13.6885 7.8773C13.7614 7.95447 13.8006 8.05743 13.7975 8.16351C13.7945 8.2696 13.7494 8.37013 13.6722 8.44299C13.5951 8.51585 13.4921 8.55506 13.386 8.55201V8.55101Z"
                                    fill="#2F2D28" />
                                <path
                                    d="M17.1831 15.243C17.0852 15.2437 16.9905 15.2085 16.9169 15.144C16.8432 15.0796 16.7958 14.9904 16.7834 14.8934C16.7711 14.7963 16.7948 14.6981 16.85 14.6173C16.9052 14.5365 16.9881 14.4788 17.0831 14.455C17.2461 14.414 17.4051 14.372 17.5621 14.328C17.6131 14.3122 17.6668 14.3068 17.7199 14.3121C17.7731 14.3174 17.8246 14.3333 17.8715 14.3589C17.9184 14.3844 17.9598 14.4191 17.993 14.4609C18.0263 14.5027 18.0509 14.5507 18.0653 14.6021C18.0798 14.6535 18.0837 14.7073 18.077 14.7603C18.0703 14.8133 18.0531 14.8644 18.0263 14.9107C17.9995 14.9569 17.9638 14.9973 17.9211 15.0294C17.8785 15.0616 17.8298 15.0849 17.7781 15.098C17.6161 15.1433 17.4494 15.1873 17.2781 15.23C17.2471 15.2385 17.2152 15.2429 17.1831 15.243ZM18.6331 14.801C18.5387 14.8018 18.447 14.7693 18.3743 14.7091C18.3017 14.6489 18.2526 14.5649 18.2358 14.472C18.2191 14.3791 18.2357 14.2833 18.2828 14.2015C18.3298 14.1197 18.4043 14.0572 18.4931 14.025C18.6497 13.967 18.8004 13.9073 18.9451 13.846C18.9938 13.8218 19.0469 13.8077 19.1013 13.8047C19.1556 13.8017 19.21 13.8099 19.2611 13.8286C19.3122 13.8474 19.3589 13.8764 19.3984 13.9138C19.4379 13.9513 19.4693 13.9964 19.4908 14.0464C19.5122 14.0964 19.5233 14.1503 19.5232 14.2047C19.5231 14.2591 19.5119 14.3129 19.4903 14.3629C19.4688 14.4128 19.4372 14.4578 19.3976 14.4952C19.358 14.5325 19.3112 14.5614 19.2601 14.58C19.1041 14.647 18.9411 14.713 18.7731 14.78C18.7279 14.7948 18.6805 14.8015 18.6331 14.8V14.801ZM20.0051 14.161C19.9178 14.1601 19.8332 14.1307 19.7641 14.0772C19.6951 14.0237 19.6455 13.9492 19.6229 13.8649C19.6002 13.7805 19.6057 13.6911 19.6386 13.6103C19.6715 13.5294 19.73 13.4615 19.8051 13.417C19.9451 13.3343 20.0761 13.2487 20.1981 13.16C20.2407 13.1292 20.2889 13.1071 20.3401 13.095C20.3912 13.0828 20.4443 13.0809 20.4962 13.0892C20.5481 13.0976 20.5979 13.1161 20.6426 13.1437C20.6874 13.1712 20.7263 13.2074 20.7571 13.25C20.7878 13.2926 20.8099 13.3409 20.8221 13.392C20.8342 13.4432 20.8362 13.4962 20.8278 13.5481C20.8195 13.6 20.801 13.6498 20.7734 13.6945C20.7458 13.7393 20.7097 13.7782 20.6671 13.809C20.5281 13.909 20.3761 14.009 20.2151 14.104C20.1517 14.142 20.079 14.1618 20.0051 14.161ZM21.1591 13.192C21.072 13.1919 20.9874 13.1635 20.9181 13.111C20.8335 13.047 20.7778 12.9521 20.7632 12.8471C20.7485 12.7421 20.7762 12.6356 20.8401 12.551C20.9206 12.4432 20.9878 12.326 21.0401 12.202C21.0605 12.1535 21.0902 12.1096 21.1276 12.0726C21.1651 12.0357 21.2094 12.0064 21.2581 11.9866C21.3068 11.9668 21.3589 11.9567 21.4115 11.9571C21.4641 11.9574 21.5161 11.9681 21.5646 11.9885C21.613 12.0089 21.657 12.0387 21.6939 12.0761C21.7309 12.1135 21.7601 12.1578 21.7799 12.2065C21.7998 12.2552 21.8098 12.3074 21.8095 12.3599C21.8092 12.4125 21.7985 12.4645 21.7781 12.513C21.6997 12.6979 21.5989 12.8726 21.4781 13.033C21.4408 13.0823 21.3926 13.1224 21.3372 13.15C21.2819 13.1776 21.2209 13.192 21.1591 13.192ZM21.4791 11.772C21.3919 11.772 21.3072 11.7436 21.2377 11.6911C21.1682 11.6386 21.1178 11.5648 21.0941 11.481C21.0573 11.3554 21.0031 11.2355 20.9331 11.125C20.903 11.0804 20.8822 11.0302 20.872 10.9774C20.8618 10.9246 20.8624 10.8703 20.8736 10.8177C20.8849 10.7651 20.9066 10.7154 20.9375 10.6714C20.9685 10.6274 21.0079 10.5901 21.0536 10.5617C21.0993 10.5333 21.1502 10.5144 21.2033 10.5062C21.2565 10.4979 21.3107 10.5005 21.3629 10.5136C21.415 10.5268 21.4639 10.5504 21.5067 10.5829C21.5496 10.6155 21.5854 10.6563 21.6121 10.703C21.7222 10.8766 21.8067 11.0652 21.8631 11.263C21.892 11.365 21.8794 11.4743 21.8278 11.5669C21.7762 11.6595 21.69 11.7279 21.5881 11.757C21.5525 11.7668 21.5159 11.7718 21.4791 11.772ZM20.5891 10.578C20.4981 10.5779 20.41 10.5469 20.3391 10.49C20.2182 10.3941 20.0923 10.3046 19.9621 10.222C19.9157 10.1947 19.8754 10.1584 19.8434 10.1152C19.8115 10.072 19.7885 10.0228 19.776 9.97059C19.7635 9.91833 19.7616 9.86409 19.7705 9.81109C19.7794 9.7581 19.7988 9.70743 19.8277 9.66213C19.8566 9.61683 19.8944 9.57781 19.9387 9.54742C19.983 9.51702 20.033 9.49586 20.0857 9.48521C20.1383 9.47456 20.1926 9.47462 20.2452 9.48541C20.2979 9.4962 20.3478 9.51748 20.3921 9.54799C20.5466 9.64558 20.6958 9.7514 20.8391 9.86499C20.904 9.9167 20.9513 9.98737 20.9743 10.0672C20.9973 10.147 20.9949 10.232 20.9675 10.3103C20.94 10.3887 20.8888 10.4566 20.821 10.5046C20.7532 10.5525 20.6721 10.5782 20.5891 10.578ZM19.2891 9.80899C19.2324 9.80927 19.1764 9.79697 19.1251 9.77299C18.9811 9.70632 18.8317 9.64366 18.6771 9.58499C18.6266 9.56691 18.5803 9.53889 18.5409 9.50259C18.5015 9.46628 18.4698 9.42243 18.4477 9.37364C18.4256 9.32485 18.4135 9.27211 18.4121 9.21856C18.4108 9.165 18.4202 9.11172 18.4398 9.06187C18.4595 9.01203 18.4889 8.96663 18.5264 8.92838C18.5639 8.89013 18.6087 8.85981 18.6582 8.8392C18.7076 8.8186 18.7607 8.80815 18.8143 8.80845C18.8679 8.80876 18.9208 8.81982 18.9701 8.84099C19.1371 8.90599 19.2991 8.97499 19.4531 9.04099C19.536 9.0788 19.6036 9.14382 19.6446 9.22529C19.6855 9.30676 19.6974 9.39978 19.6783 9.48894C19.6592 9.5781 19.6101 9.65805 19.5393 9.71553C19.4686 9.77301 19.3802 9.80457 19.2891 9.80499V9.80899ZM17.8661 9.28399C17.8278 9.28376 17.7897 9.27803 17.7531 9.26699C17.5981 9.22199 17.4401 9.17699 17.2771 9.13399C17.2262 9.12046 17.1786 9.09706 17.1368 9.06511C17.095 9.03317 17.0599 8.99331 17.0336 8.94781C17.0072 8.90231 16.99 8.85206 16.9831 8.79993C16.9761 8.7478 16.9795 8.69481 16.9931 8.64399C17.0066 8.59317 17.03 8.54551 17.0619 8.50373C17.0939 8.46195 17.1337 8.42688 17.1792 8.40051C17.2247 8.37413 17.275 8.35698 17.3271 8.35003C17.3792 8.34308 17.4322 8.34646 17.4831 8.35999C17.6517 8.40466 17.8184 8.45132 17.9831 8.49999C18.0757 8.52699 18.1554 8.58655 18.2075 8.66769C18.2597 8.74884 18.2808 8.84609 18.2669 8.94155C18.253 9.03701 18.2051 9.12424 18.132 9.18716C18.0589 9.25009 17.9655 9.28448 17.8691 9.28399H17.8661ZM16.3951 8.92199C16.3681 8.92196 16.3413 8.91895 16.3151 8.91299C16.1551 8.88099 15.9931 8.85099 15.8291 8.82299C15.777 8.81439 15.7271 8.79557 15.6823 8.7676C15.6375 8.73962 15.5987 8.70306 15.5681 8.66002C15.5375 8.61698 15.5158 8.5683 15.5041 8.51681C15.4924 8.46531 15.491 8.41202 15.5001 8.35999C15.5198 8.25617 15.5792 8.16411 15.6656 8.10327C15.752 8.04243 15.8587 8.01759 15.9631 8.03399C16.1351 8.06399 16.3047 8.09732 16.4721 8.13399C16.5693 8.15373 16.6557 8.20888 16.7145 8.28875C16.7733 8.36862 16.8004 8.46749 16.7904 8.56619C16.7805 8.66488 16.7342 8.75635 16.6606 8.82284C16.5869 8.88933 16.4913 8.92609 16.3921 8.92599L16.3951 8.92199ZM14.8951 8.68299C14.8791 8.68404 14.863 8.68404 14.8471 8.68299L14.3531 8.62899C14.2478 8.61717 14.1516 8.56412 14.0854 8.48145C14.0192 8.39878 13.9885 8.29325 14.0001 8.18799C14.0041 8.13523 14.0188 8.08384 14.0433 8.03692C14.0678 7.98999 14.1015 7.94851 14.1424 7.91497C14.1833 7.88142 14.2306 7.85651 14.2814 7.84173C14.3322 7.82696 14.3855 7.82262 14.4381 7.82899C14.6101 7.84699 14.7791 7.86499 14.9471 7.88499C14.9996 7.88794 15.051 7.90122 15.0984 7.92405C15.1458 7.94688 15.1883 7.97882 15.2233 8.01806C15.2584 8.05729 15.2853 8.10304 15.3027 8.1527C15.3201 8.20236 15.3275 8.25496 15.3246 8.30749C15.3216 8.36002 15.3083 8.41145 15.2855 8.45885C15.2627 8.50625 15.2307 8.54869 15.1915 8.58374C15.1523 8.6188 15.1065 8.64578 15.0568 8.66315C15.0072 8.68052 14.9546 8.68794 14.9021 8.68499L14.8951 8.68299Z"
                                    fill="#2F2D28" />
                                <path
                                    d="M15.932 15.507C15.8318 15.5073 15.7352 15.4699 15.6612 15.4023C15.5873 15.3348 15.5413 15.2419 15.5326 15.1421C15.5238 15.0423 15.5527 14.9429 15.6137 14.8634C15.6747 14.784 15.7633 14.7303 15.862 14.713L16.104 14.669C16.2059 14.6542 16.3096 14.6793 16.3935 14.7391C16.4774 14.7988 16.535 14.8886 16.5543 14.9898C16.5737 15.0909 16.5532 15.1957 16.4973 15.2821C16.4413 15.3686 16.3542 15.4302 16.254 15.454L16 15.5C15.9776 15.5047 15.9548 15.507 15.932 15.507Z"
                                    fill="#2F2D28" />
                                <path
                                    d="M8.09998 15.507C8.07647 15.5071 8.05301 15.5048 8.02998 15.5L7.77698 15.454C7.7244 15.4451 7.67415 15.4257 7.62916 15.397C7.58418 15.3684 7.54539 15.331 7.51506 15.2871C7.48473 15.2433 7.46348 15.1938 7.45256 15.1416C7.44165 15.0894 7.44128 15.0355 7.45148 14.9831C7.46168 14.9308 7.48225 14.881 7.51198 14.8367C7.5417 14.7925 7.57998 14.7546 7.62456 14.7253C7.66915 14.696 7.71914 14.676 7.77159 14.6663C7.82404 14.6566 7.87789 14.6575 7.92998 14.669L8.16898 14.713C8.26757 14.7303 8.3561 14.7839 8.41709 14.8632C8.47809 14.9426 8.50712 15.0419 8.49846 15.1416C8.48979 15.2413 8.44406 15.3342 8.37029 15.4018C8.29652 15.4695 8.20007 15.507 8.09998 15.507Z"
                                    fill="#2F2D28" />
                                <path
                                    d="M6.86601 15.248C6.83397 15.2479 6.80207 15.2439 6.77101 15.236C6.60001 15.193 6.43101 15.149 6.27101 15.102C6.21987 15.0876 6.1721 15.0632 6.13049 15.0302C6.08888 14.9972 6.05427 14.9562 6.02867 14.9097C6.00307 14.8631 5.987 14.8119 5.98139 14.7591C5.97578 14.7063 5.98075 14.6529 5.99601 14.602C6.02663 14.4998 6.09625 14.4137 6.18982 14.3625C6.28339 14.3112 6.39338 14.2988 6.49601 14.328C6.65201 14.373 6.80901 14.415 6.97001 14.454C7.06592 14.4769 7.14998 14.5344 7.20608 14.6155C7.26217 14.6966 7.28634 14.7955 7.27394 14.8934C7.26154 14.9912 7.21345 15.081 7.1389 15.1455C7.06435 15.21 6.9686 15.2448 6.87001 15.243L6.86601 15.248ZM5.41701 14.808C5.36978 14.8082 5.32294 14.7994 5.27901 14.782C5.11001 14.721 4.94801 14.655 4.79101 14.589C4.69328 14.5475 4.61604 14.4689 4.57628 14.3704C4.53652 14.272 4.53751 14.1617 4.57901 14.064C4.62052 13.9663 4.69915 13.889 4.79761 13.8493C4.89606 13.8095 5.00628 13.8105 5.10401 13.852C5.24868 13.9147 5.39901 13.9747 5.55501 14.032C5.64357 14.0641 5.71793 14.1265 5.76501 14.2081C5.8121 14.2897 5.82887 14.3853 5.81237 14.478C5.79588 14.5708 5.74718 14.6547 5.67485 14.7151C5.60253 14.7755 5.51122 14.8084 5.41701 14.808ZM4.04301 14.169C3.97258 14.1683 3.90358 14.149 3.84301 14.113C3.67968 14.0183 3.52801 13.9203 3.38801 13.819C3.30182 13.7571 3.24375 13.6634 3.22659 13.5587C3.20943 13.454 3.23458 13.3467 3.29651 13.2605C3.35844 13.1743 3.45207 13.1162 3.55681 13.0991C3.66155 13.0819 3.76882 13.1071 3.85501 13.169C3.97601 13.256 4.10801 13.341 4.24701 13.424C4.32258 13.4683 4.3815 13.5362 4.41472 13.6173C4.44795 13.6984 4.45364 13.7881 4.43092 13.8727C4.40821 13.9573 4.35834 14.0321 4.28899 14.0857C4.21963 14.1392 4.13462 14.1685 4.04701 14.169H4.04301ZM2.88501 13.208C2.82376 13.208 2.76332 13.1939 2.70835 13.1669C2.65339 13.1398 2.60538 13.1005 2.56801 13.052C2.44425 12.893 2.34047 12.7193 2.25901 12.535C2.21854 12.438 2.2179 12.3289 2.25723 12.2314C2.29656 12.1339 2.3727 12.0558 2.46917 12.014C2.56565 11.9722 2.6747 11.9701 2.77273 12.0081C2.87076 12.046 2.9499 12.1211 2.99301 12.217C3.04812 12.3403 3.11796 12.4565 3.20101 12.563C3.26584 12.6469 3.29468 12.7532 3.28117 12.8584C3.26767 12.9636 3.21294 13.0591 3.12901 13.124C3.05953 13.1788 2.97351 13.2084 2.88501 13.208ZM2.54801 11.789C2.51424 11.7884 2.48066 11.7837 2.44801 11.775C2.39725 11.7614 2.34966 11.738 2.30796 11.706C2.26626 11.674 2.23127 11.6341 2.20499 11.5886C2.17871 11.5431 2.16165 11.4929 2.15479 11.4408C2.14793 11.3887 2.1514 11.3358 2.16501 11.285C2.22085 11.0865 2.30397 10.8967 2.41201 10.721C2.46718 10.6303 2.55611 10.5652 2.65926 10.5401C2.7624 10.515 2.87131 10.5318 2.96201 10.587C3.05272 10.6422 3.11779 10.7311 3.14292 10.8342C3.16805 10.9374 3.15118 11.0463 3.09601 11.137C3.02686 11.2472 2.97398 11.3667 2.93901 11.492C2.91612 11.5779 2.86525 11.6538 2.79444 11.7076C2.72364 11.7613 2.63693 11.79 2.54801 11.789ZM3.43001 10.589C3.34696 10.5892 3.2659 10.5635 3.19809 10.5156C3.13028 10.4676 3.07908 10.3997 3.0516 10.3214C3.02412 10.243 3.02172 10.158 3.04473 10.0782C3.06774 9.99838 3.11502 9.92772 3.18001 9.876C3.32244 9.76274 3.47064 9.65693 3.62401 9.559C3.66802 9.52752 3.71795 9.5053 3.77079 9.49367C3.82364 9.48205 3.87829 9.48126 3.93144 9.49137C3.98459 9.50147 4.03515 9.52225 4.08004 9.55246C4.12493 9.58266 4.16322 9.62166 4.19261 9.66709C4.22199 9.71252 4.24185 9.76344 4.25099 9.81677C4.26013 9.8701 4.25835 9.92473 4.24577 9.97735C4.23319 10.03 4.21006 10.0795 4.17779 10.1229C4.14552 10.1663 4.10477 10.2028 4.05801 10.23C3.92718 10.3134 3.801 10.4039 3.68001 10.501C3.60891 10.5575 3.52086 10.5885 3.43001 10.589ZM4.73001 9.817C4.63896 9.81677 4.55071 9.78548 4.47984 9.7283C4.40898 9.67112 4.35975 9.59148 4.34028 9.50253C4.32081 9.41358 4.33227 9.32065 4.37277 9.2391C4.41327 9.15754 4.48038 9.09225 4.56301 9.054C4.71701 8.982 4.87801 8.914 5.04601 8.848C5.14441 8.80822 5.25458 8.80915 5.35228 8.8506C5.44999 8.89204 5.52723 8.97061 5.56701 9.069C5.60679 9.1674 5.60586 9.27756 5.56441 9.37527C5.52297 9.47298 5.44441 9.55022 5.34601 9.59C5.19201 9.652 5.04601 9.715 4.90001 9.78C4.84724 9.80506 4.78943 9.81772 4.73101 9.817H4.73001ZM6.15001 9.289C6.05397 9.28915 5.96109 9.25474 5.88832 9.19207C5.81556 9.12939 5.76778 9.04262 5.7537 8.94762C5.73963 8.85262 5.7602 8.75573 5.81167 8.67464C5.86314 8.59356 5.94206 8.5337 6.03401 8.506C6.19801 8.456 6.36468 8.40867 6.53401 8.364C6.63692 8.33748 6.74614 8.35292 6.83766 8.40693C6.92918 8.46094 6.99549 8.5491 7.02201 8.652C7.04853 8.7549 7.03309 8.86413 6.97908 8.95565C6.92507 9.04716 6.83692 9.11348 6.73401 9.14C6.57301 9.181 6.41601 9.226 6.26401 9.271C6.22708 9.28248 6.18868 9.28854 6.15001 9.289ZM7.62201 8.926C7.52218 8.92663 7.42572 8.88991 7.35159 8.82305C7.27745 8.7562 7.231 8.66403 7.22135 8.56467C7.2117 8.4653 7.23956 8.36592 7.29944 8.28605C7.35933 8.20618 7.44693 8.15159 7.54501 8.133C7.71001 8.101 7.87901 8.068 8.04501 8.039C8.0968 8.02866 8.15014 8.02892 8.20183 8.03976C8.25351 8.05061 8.30247 8.0718 8.34573 8.10208C8.389 8.13236 8.42569 8.17109 8.45358 8.21593C8.48147 8.26078 8.49998 8.3108 8.50801 8.363C8.52633 8.46735 8.50251 8.5747 8.44176 8.66151C8.38102 8.74831 8.28832 8.80747 8.18401 8.826C8.02001 8.855 7.85601 8.886 7.69501 8.918C7.67098 8.92293 7.64654 8.92561 7.62201 8.926ZM9.12201 8.685C9.06948 8.68822 9.01684 8.68106 8.96707 8.66393C8.91731 8.6468 8.87141 8.62004 8.83199 8.58517C8.79257 8.5503 8.76041 8.50801 8.73734 8.46071C8.71426 8.41341 8.70073 8.36203 8.69751 8.3095C8.69429 8.25697 8.70146 8.20432 8.71858 8.15456C8.73571 8.1048 8.76248 8.0589 8.79734 8.01948C8.83221 7.98006 8.87451 7.9479 8.9218 7.92482C8.9691 7.90175 9.02048 7.88822 9.07301 7.885C9.24201 7.863 9.41301 7.845 9.58601 7.827C9.63854 7.82188 9.69156 7.82715 9.74205 7.84252C9.79254 7.85789 9.83951 7.88306 9.88028 7.91658C9.92104 7.9501 9.95481 7.99133 9.97964 8.0379C10.0045 8.08447 10.0199 8.13547 10.025 8.188C10.0301 8.24053 10.0249 8.29355 10.0095 8.34404C9.99412 8.39453 9.96895 8.4415 9.93543 8.48227C9.90191 8.52303 9.86069 8.55679 9.81412 8.58163C9.76755 8.60646 9.71654 8.62188 9.66401 8.627C9.49901 8.642 9.33401 8.661 9.17301 8.681L9.12201 8.685Z"
                                    fill="#2F2D28" />
                                <path
                                    d="M10.647 8.55101C10.541 8.55419 10.438 8.5151 10.3607 8.44234C10.2834 8.36957 10.2382 8.26909 10.235 8.16301C10.2319 8.05692 10.271 7.95391 10.3437 7.87665C10.4165 7.79938 10.517 7.75419 10.623 7.75101L10.878 7.73801C10.9824 7.73895 11.0827 7.77833 11.1599 7.84863C11.237 7.91892 11.2855 8.01519 11.296 8.11901C11.3009 8.22496 11.2635 8.32851 11.1921 8.40689C11.1206 8.48528 11.021 8.53208 10.915 8.53701L10.67 8.55001L10.647 8.55101Z"
                                    fill="#2F2D28" />
                                <path
                                    d="M12.016 19.6C11.8327 19.6004 11.6511 19.5645 11.4817 19.4945C11.3124 19.4245 11.1585 19.3217 11.029 19.192L7.94996 16.117C7.68921 15.8547 7.54285 15.4999 7.54285 15.13C7.54285 14.7601 7.68921 14.4053 7.94996 14.143L11.029 11.064C11.2913 10.8032 11.6461 10.6569 12.016 10.6569C12.3858 10.6569 12.7406 10.8032 13.003 11.064L16.082 14.143C16.3427 14.4053 16.4891 14.7601 16.4891 15.13C16.4891 15.4999 16.3427 15.8547 16.082 16.117L13 19.2C12.7379 19.4584 12.384 19.6023 12.016 19.6ZM12.016 11.452C11.9379 11.4519 11.8605 11.4673 11.7884 11.4974C11.7163 11.5274 11.6509 11.5715 11.596 11.627L8.51696 14.71C8.46154 14.7651 8.41755 14.8306 8.38754 14.9028C8.35753 14.975 8.34208 15.0523 8.34208 15.1305C8.34208 15.2087 8.35753 15.286 8.38754 15.3582C8.41755 15.4304 8.46154 15.4959 8.51696 15.551L11.6 18.63C11.7122 18.7402 11.8632 18.802 12.0205 18.802C12.1778 18.802 12.3288 18.7402 12.441 18.63L15.52 15.551C15.6302 15.4388 15.692 15.2878 15.692 15.1305C15.692 14.9732 15.6302 14.8222 15.52 14.71L12.441 11.631C12.3853 11.5751 12.319 11.5308 12.2461 11.5007C12.1731 11.4707 12.0949 11.4555 12.016 11.456V11.452Z"
                                    fill="#2F2D28" />
                                <path
                                    d="M12.017 17.363L9.771 15.118L12.017 12.872L14.262 15.118L12.017 17.363ZM10.9 15.118L12.016 16.232L13.13 15.118L12.017 14L10.9 15.118Z"
                                    fill="#2F2D28" />
                                <path d="M16.135 14.718H13.399V15.519H16.135V14.718Z" fill="#2F2D28" />
                                <path d="M12.417 10.941H11.616V13.654H12.417V10.941Z" fill="#2F2D28" />
                                <path d="M10.418 14.718H7.77405V15.519H10.418V14.718Z" fill="#2F2D28" />
                                <path d="M12.417 16.391H11.616V19.267H12.417V16.391Z" fill="#2F2D28" />
                            </svg>Bracelets
                        </li>
                        <li class="list-type tab-link" data-tab="tab-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path d="M4.39197 2.52698C4.72197 6.98698 7.37197 10.577 10.782 11.277"
                                    stroke="#555555" stroke-width="0.8" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M13.2 11.277C16.61 10.587 19.28 6.99698 19.61 2.52698" stroke="#555555"
                                    stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M12 21.3979C14.3544 21.3979 16.263 19.4893 16.263 17.1349C16.263 14.7806 14.3544 12.8719 12 12.8719C9.64561 12.8719 7.737 14.7806 7.737 17.1349C7.737 19.4893 9.64561 21.3979 12 21.3979Z"
                                    stroke="#555555" stroke-width="0.8" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M12.289 14.979C12.5342 14.979 12.777 15.0273 13.0035 15.1211C13.23 15.2149 13.4358 15.3525 13.6092 15.5258C13.7825 15.6992 13.9201 15.905 14.0139 16.1315C14.1077 16.358 14.156 16.6008 14.156 16.846"
                                    stroke="#555555" stroke-width="0.8" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M11.357 12.815L10.234 9.80001C10.2161 9.75313 10.2099 9.70264 10.2157 9.65282C10.2215 9.603 10.2392 9.55531 10.2674 9.5138C10.2955 9.4723 10.3333 9.43819 10.3774 9.41438C10.4216 9.39056 10.4708 9.37775 10.521 9.37701C11.264 9.36701 12.751 9.34901 13.484 9.36001C13.5332 9.36071 13.5816 9.37325 13.625 9.39658C13.6684 9.4199 13.7055 9.45332 13.7333 9.49402C13.761 9.53471 13.7786 9.58149 13.7844 9.6304C13.7903 9.6793 13.7843 9.7289 13.767 9.77501L12.634 12.817"
                                    stroke="#555555" stroke-width="0.8" stroke-miterlimit="10" />
                            </svg>Necklaces
                        </li>

                    </ul>
                    <a class="view-all" href="#">View All <span class="value-change">Gifts</span> </a>
                </div>
                <div id="tab-1" class="tab-content current">
                    <div class="grid-box-wrap">
                        <div class="grid-box-item">
                            <a href="#" class="img">
                                <div class="shadow-box">
                                    <a href="#">
                                        <img src="./images/gold-ring.webp" alt>
                                        <h6 class="product_title_h">Blue Sapphire
                                            Teardrop Pendant with Diamond</h6>
                                        <span class="product_price_h">$169</span> 
                                    </a>
                                    <div class="text-end">
                                        <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-1 mx-1" href="wishlist.html">
                                            <i class="bi bi-heart text-light"></i>
                                        </a>
                                        <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-2 mx-1" href="cart.html">
                                            <i class="bi bi-cart3 text-light"></i>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="grid-box-item">
                            <a href="#" class="img">
                                <div class="shadow-box">
                                    <a href="#">
                                        <img src="./images/gold-ring.webp" alt>
                                        <h6 class="product_title_h">Blue Sapphire
                                            Teardrop Pendant with Diamond</h6>
                                        <span class="product_price_h">$169</span> 
                                    </a>
                                    <div class="text-end">
                                        <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-1 mx-1" href="wishlist.html">
                                            <i class="bi bi-heart text-light"></i>
                                        </a>
                                        <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-2 mx-1" href="cart.html">
                                            <i class="bi bi-cart3 text-light"></i>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="grid-box-item">
                            <a href="#" class="img">
                                <div class="shadow-box">
                                    <a href="#">
                                        <img src="./images/gold-ring.webp" alt>
                                        <h6 class="product_title_h">Blue Sapphire
                                            Teardrop Pendant with Diamond</h6>
                                        <span class="product_price_h">$169</span> 
                                    </a>
                                    <div class="text-end">
                                        <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-1 mx-1" href="wishlist.html">
                                            <i class="bi bi-heart text-light"></i>
                                        </a>
                                        <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-2 mx-1" href="cart.html">
                                            <i class="bi bi-cart3 text-light"></i>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="grid-box-item">
                            <a href="#" class="img">
                                <div class="shadow-box">
                                    <a href="#">
                                        <img src="./images/gold-ring.webp" alt>
                                        <h6 class="product_title_h">Blue Sapphire
                                            Teardrop Pendant with Diamond</h6>
                                        <span class="product_price_h">$169</span> 
                                    </a>
                                    <div class="text-end">
                                        <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-1 mx-1" href="wishlist.html">
                                            <i class="bi bi-heart text-light"></i>
                                        </a>
                                        <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-2 mx-1" href="cart.html">
                                            <i class="bi bi-cart3 text-light"></i>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- <div class="grid-box-item">
                            <a href="#" class="img">
                                <div class="shadow-box">
                                    <a href="#">
                                        <img src="./images/gold-ring.webp" alt>
                                        <p class="font-13 mb-0">Blue Sapphire
                                            Teardrop Pendant with Diamond</p>
                                        <span>$169</span> 
                                    </a>
                                </div>
                            </a>
                        </div>
                        <div class="grid-box-item">
                            <a href="#" class="img">
                                <div class="shadow-box">
                                    <a href="#">
                                        <img src="./images/gold-ring.webp" alt>
                                        <p class="font-13 mb-0">Blue Sapphire
                                            Teardrop Pendant with Diamond</p>
                                        <span>$169</span> 
                                    </a>
                                </div>
                            </a>
                        </div> -->

                    </div>
                </div>
                <div id="tab-2" class="tab-content">
                    <div class="grid-box-wrap">
                        <div class="grid-box-item">
                            <a href="#" class="img">
                                <div class="shadow-box">
                                    <a href="#">
                                        <img src="./images/grid-cat2.webp" alt>
                                        <h6 class="product_title_h">Blue Sapphire
                                            Teardrop Pendant with Diamond</h6>
                                        <span class="product_price_h">$169</span> 
                                    </a>
                                    <div class="text-end">
                                        <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-1 mx-1" href="wishlist.html">
                                            <i class="bi bi-heart text-light"></i>
                                        </a>
                                        <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-2 mx-1" href="cart.html">
                                            <i class="bi bi-cart3 text-light"></i>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="grid-box-item">
                            <a href="#" class="img">
                                <div class="shadow-box">
                                    <a href="#">
                                        <img src="./images/grid-cat2.webp" alt>
                                        <h6 class="product_title_h">Blue Sapphire
                                            Teardrop Pendant with Diamond</h6>
                                        <span class="product_price_h">$169</span> 
                                    </a>
                                    <div class="text-end">
                                        <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-1 mx-1" href="wishlist.html">
                                            <i class="bi bi-heart text-light"></i>
                                        </a>
                                        <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-2 mx-1" href="cart.html">
                                            <i class="bi bi-cart3 text-light"></i>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="grid-box-item">
                            <a href="#" class="img">
                                <div class="shadow-box">
                                    <a href="#">
                                        <img src="./images/grid-cat2.webp" alt>
                                        <h6 class="product_title_h">Blue Sapphire
                                            Teardrop Pendant with Diamond</h6>
                                        <span class="product_price_h">$169</span> 
                                    </a>
                                    <div class="text-end">
                                        <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-1 mx-1" href="wishlist.html">
                                            <i class="bi bi-heart text-light"></i>
                                        </a>
                                        <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-2 mx-1" href="cart.html">
                                            <i class="bi bi-cart3 text-light"></i>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="grid-box-item">
                            <a href="#" class="img">
                                <div class="shadow-box">
                                    <a href="#">
                                        <img src="./images/grid-cat2.webp" alt>
                                        <h6 class="product_title_h">Blue Sapphire
                                            Teardrop Pendant with Diamond</h6>
                                        <span class="product_price_h">$169</span> 
                                    </a>
                                    <div class="text-end">
                                        <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-1 mx-1" href="wishlist.html">
                                            <i class="bi bi-heart text-light"></i>
                                        </a>
                                        <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-2 mx-1" href="cart.html">
                                            <i class="bi bi-cart3 text-light"></i>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- <div class="grid-box-item">
                            <a href="#" class="img">
                                <div class="shadow-box">
                                    <a href="#">
                                        <img src="./images/grid-cat2.webp" alt>
                                        <p class="font-13 mb-0">Blue Sapphire
                                            Teardrop Pendant with Diamond</p>
                                        <span>$169</span> 
                                    </a>
                                </div>
                            </a>
                        </div>
                        <div class="grid-box-item">
                            <a href="#" class="img">
                                <div class="shadow-box">
                                    <a href="#">
                                        <img src="./images/grid-cat2.webp" alt>
                                        <p class="font-13 mb-0">Blue Sapphire
                                            Teardrop Pendant with Diamond</p>
                                        <span>$169</span> 
                                    </a>
                                </div>
                            </a>
                        </div> -->

                    </div>
                </div>
                <div id="tab-3" class="tab-content">
                    <div class="grid-box-wrap">
                        <div class="grid-box-item">
                            <a href="#" class="img">
                                <div class="shadow-box">
                                    <a href="#">
                                        <img src="./images/grid-cat2.webp" alt>
                                        <h6 class="product_title_h">Blue Sapphire
                                            Teardrop Pendant with Diamond</h6>
                                        <span class="product_price_h">$169</span> 
                                    </a>
                                    <div class="text-end">
                                        <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-1 mx-1" href="wishlist.html">
                                            <i class="bi bi-heart text-light"></i>
                                        </a>
                                        <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-2 mx-1" href="cart.html">
                                            <i class="bi bi-cart3 text-light"></i>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="grid-box-item">
                            <a href="#" class="img">
                                <div class="shadow-box">
                                    <a href="#">
                                        <img src="./images/grid-cat2.webp" alt>
                                        <h6 class="product_title_h">Blue Sapphire
                                            Teardrop Pendant with Diamond</h6>
                                        <span class="product_price_h">$169</span> 
                                    </a>
                                    <div class="text-end">
                                        <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-1 mx-1" href="wishlist.html">
                                            <i class="bi bi-heart text-light"></i>
                                        </a>
                                        <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-2 mx-1" href="cart.html">
                                            <i class="bi bi-cart3 text-light"></i>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="grid-box-item">
                            <a href="#" class="img">
                                <div class="shadow-box">
                                    <a href="#">
                                        <img src="./images/grid-cat2.webp" alt>
                                        <h6 class="product_title_h">Blue Sapphire
                                            Teardrop Pendant with Diamond</h6>
                                        <span class="product_price_h">$169</span> 
                                    </a>
                                    <div class="text-end">
                                        <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-1 mx-1" href="wishlist.html">
                                            <i class="bi bi-heart text-light"></i>
                                        </a>
                                        <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-2 mx-1" href="cart.html">
                                            <i class="bi bi-cart3 text-light"></i>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="grid-box-item">
                            <a href="#" class="img">
                                <div class="shadow-box">
                                    <a href="#">
                                        <img src="./images/grid-cat2.webp" alt>
                                        <h6 class="product_title_h">Blue Sapphire
                                            Teardrop Pendant with Diamond</h6>
                                        <span class="product_price_h">$169</span> 
                                    </a>
                                    <div class="text-end">
                                        <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-1 mx-1" href="wishlist.html">
                                            <i class="bi bi-heart text-light"></i>
                                        </a>
                                        <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-2 mx-1" href="cart.html">
                                            <i class="bi bi-cart3 text-light"></i>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- <div class="grid-box-item">
                            <a href="#" class="img">
                                <div class="shadow-box">
                                    <a href="#">
                                        <img src="./images/grid-cat2.webp" alt>
                                        <p class="font-13 mb-0">Blue Sapphire
                                            Teardrop Pendant with Diamond</p>
                                        <span>$169</span> 
                                    </a>
                                </div>
                            </a>
                        </div>
                        <div class="grid-box-item">
                            <a href="#" class="img">
                                <div class="shadow-box">
                                    <a href="#">
                                        <img src="./images/grid-cat2.webp" alt>
                                        <p class="font-13 mb-0">Blue Sapphire
                                            Teardrop Pendant with Diamond</p>
                                        <span>$169</span> 
                                    </a>
                                </div>
                            </a>
                        </div> -->

                    </div>
                </div>
                <div id="tab-4" class="tab-content">
                    <div class="grid-box-wrap">
                        <div class="grid-box-item">
                            <a href="#" class="img">
                                <div class="shadow-box">
                                    <a href="#">
                                        <img src="./images/grid-cat2.webp" alt>
                                        <h6 class="product_title_h">Blue Sapphire
                                            Teardrop Pendant with Diamond</h6>
                                        <span class="product_price_h">$169</span> 
                                    </a>
                                    <div class="text-end">
                                        <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-1 mx-1" href="wishlist.html">
                                            <i class="bi bi-heart text-light"></i>
                                        </a>
                                        <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-2 mx-1" href="cart.html">
                                            <i class="bi bi-cart3 text-light"></i>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="grid-box-item">
                            <a href="#" class="img">
                                <div class="shadow-box">
                                    <a href="#">
                                        <img src="./images/grid-cat2.webp" alt>
                                        <h6 class="product_title_h">Blue Sapphire
                                            Teardrop Pendant with Diamond</h6>
                                        <span class="product_price_h">$169</span> 
                                    </a>
                                    <div class="text-end">
                                        <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-1 mx-1" href="wishlist.html">
                                            <i class="bi bi-heart text-light"></i>
                                        </a>
                                        <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-2 mx-1" href="cart.html">
                                            <i class="bi bi-cart3 text-light"></i>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="grid-box-item">
                            <a href="#" class="img">
                                <div class="shadow-box">
                                    <a href="#">
                                        <img src="./images/grid-cat2.webp" alt>
                                        <h6 class="product_title_h">Blue Sapphire
                                            Teardrop Pendant with Diamond</h6>
                                        <span class="product_price_h">$169</span> 
                                    </a>
                                    <div class="text-end">
                                        <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-1 mx-1" href="wishlist.html">
                                            <i class="bi bi-heart text-light"></i>
                                        </a>
                                        <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-2 mx-1" href="cart.html">
                                            <i class="bi bi-cart3 text-light"></i>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="grid-box-item">
                            <a href="#" class="img">
                                <div class="shadow-box">
                                    <a href="#">
                                        <img src="./images/grid-cat2.webp" alt>
                                        <h6 class="product_title_h">Blue Sapphire
                                            Teardrop Pendant with Diamond</h6>
                                        <span class="product_price_h">$169</span> 
                                    </a>
                                    <div class="text-end">
                                        <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-1 mx-1" href="wishlist.html">
                                            <i class="bi bi-heart text-light"></i>
                                        </a>
                                        <a class="pro_wishlist rounded-circle text-center product-cart-whislist-btn ps-2 pt-2 pb-2 pe-2 mx-1" href="cart.html">
                                            <i class="bi bi-cart3 text-light"></i>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- <div class="grid-box-item">
                            <a href="#" class="img">
                                <div class="shadow-box">
                                    <a href="#">
                                        <img src="./images/gold-ring.webp" alt>
                                        <p class="font-13 mb-0">Blue Sapphire
                                            Teardrop Pendant with Diamond</p>
                                        <span>$169</span> 
                                    </a>
                                </div>
                            </a>
                        </div>
                        <div class="grid-box-item">
                            <a href="#" class="img">
                                <div class="shadow-box">
                                    <a href="#">
                                        <img src="./images/gold-ring.webp" alt>
                                        <p class="font-13 mb-0">Blue Sapphire
                                            Teardrop Pendant with Diamond</p>
                                        <span>$169</span> 
                                    </a>
                                </div>
                            </a>
                        </div> -->

                    </div>
                </div>

            </div>
        </section>
        <!-- <section class="common-gap">
            <div class="section-container section-type-gif">
                <h2 class="sec-heading">An Insider View</h2>
                <div class="grid-box-wrap">
                    <div class="grid-box-item text-center">
                        <img src="./images/gif-1.gif" alt>
                        <p class="mb-0">Ethical Sourcing</p>
                        <p class="font-13 desc-limit">Where stones start
                            means everything. We source all our gemstones
                            from those who are uncompromising when it comes
                            to quality and sustainability.</p>
                    </div>
                    <div class="grid-box-item text-center">
                        <img src="./images/gif-2.gif" alt>
                        <p class="mb-0">Ethical Sourcing</p>
                        <p class="font-13 desc-limit">Where stones start
                            means everything. We source all our gemstones
                            from those who are uncompromising when it comes
                            to quality and sustainability.</p>
                    </div>
                    <div class="grid-box-item text-center">
                        <img src="./images/gif-3.gif" alt>
                        <p class="mb-0">Ethical Sourcing</p>
                        <p class="font-13 desc-limit">Where stones start
                            means everything. We source all our gemstones
                            from those who are uncompromising when it comes
                            to quality and sustainability.</p>
                    </div>
                    <div class="grid-box-item text-center">
                        <img src="./images/gif-4.gif" alt>
                        <p class="mb-0">Ethical Sourcing</p>
                        <p class="font-13 desc-limit">Where stones start
                            means everything. We source all our gemstones
                            from those who are uncompromising when it comes
                            to quality and sustainability.</p>
                    </div>

                </div>
            </div>

        </section> -->
        <!-- <section class="common-gap">
            <div class="section-container section-type-Explore-Diamonds">
                <h2 class="sec-heading">Please Look Some Special</h2>
                <p class="sec-desc">We don't play favorites, but these
                    clearly have a huge fan base.</p>

                <div class="jewelry-wrap">
                    <div class="hidden-container">
                        <div class="swiper jewelry">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="shadow-box">
                                        <a href="#">
                                            <img src="./images/gold-ring.webp" alt>
                                            <p class="font-13 mb-0">Blue
                                                Sapphire Teardrop Pendant
                                                with Diamond</p>
                                            <span>$169</span> 
                                        </a>
                                    </div>

                                </div>
                                <div class="swiper-slide">
                                    <div class="shadow-box">
                                        <a href="#">
                                            <img src="./images/gold-ring.webp" alt>
                                            <p class="font-13 mb-0">Blue
                                                Sapphire Teardrop Pendant
                                                with Diamond</p>
                                            <span>$169</span> 
                                        </a>
                                    </div>

                                </div>
                                <div class="swiper-slide">
                                    <div class="shadow-box">
                                        <a href="#">
                                            <img src="./images/gold-ring.webp" alt>
                                            <p class="font-13 mb-0">Blue
                                                Sapphire Teardrop Pendant
                                                with Diamond</p>
                                            <span>$169</span> 
                                        </a>
                                    </div>

                                </div>
                                <div class="swiper-slide">
                                    <div class="shadow-box">
                                        <a href="#">
                                            <img src="./images/gold-ring.webp" alt>
                                            <p class="font-13 mb-0">Blue
                                                Sapphire Teardrop Pendant
                                                with Diamond</p>
                                            <span>$169</span> 
                                        </a>
                                    </div>

                                </div>
                                <div class="swiper-slide">
                                    <div class="shadow-box">
                                        <a href="#">
                                            <img src="./images/gold-ring.webp" alt>
                                            <p class="font-13 mb-0">Blue
                                                Sapphire Teardrop Pendant
                                                with Diamond</p>
                                            <span>$169</span> 
                                        </a>
                                    </div>

                                </div>
                                <div class="swiper-slide">
                                    <div class="shadow-box">
                                        <a href="#">
                                            <img src="./images/gold-ring.webp" alt>
                                            <p class="font-13 mb-0">Blue
                                                Sapphire Teardrop Pendant
                                                with Diamond</p>
                                            <span>$169</span> 
                                        </a>
                                    </div>

                                </div>
                                <div class="swiper-slide">
                                    <div class="shadow-box">
                                        <a href="#">
                                            <img src="./images/gold-ring.webp" alt>
                                            <p class="font-13 mb-0">Blue
                                                Sapphire Teardrop Pendant
                                                with Diamond</p>
                                            <span>$169</span> 
                                        </a>
                                    </div>

                                </div>
                                <div class="swiper-slide">
                                    <div class="shadow-box">
                                        <a href="#">
                                            <img src="./images/gold-ring.webp" alt>
                                            <p class="font-13 mb-0">Blue
                                                Sapphire Teardrop Pendant
                                                with Diamond</p>
                                            <span>$169</span> 
                                        </a>
                                    </div>

                                </div>

                            </div>
                            <div class="slider-arrows">
                                <div class="swiper-button-prev swiper-btn"></div>
                                <div class="swiper-button-next swiper-btn"></div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>

        </section> -->
        <section class="common-gap">
            <div class="three-slider-section light_bg_section">
                <div class="slider-wrap-main slider-two-wrap text-center">
                    <h2 class="fs-1 mt-4 mb-3">Worldwide Jewelry Resellers Doing Business With Us</h2>
                    <h4 class="fw-light">Join our Global Network of Dazzling Success – Where Worldwide Jewelry Resellers Thrive in Unparalleled Excellence!</h4>
                    <div class="slider-reviews-wrap mb-3">
                        <div class="see-all-slider-wrap">
                            <div class="hidden-container">
                                <div class="swiper seemore seemore1" style="padding: 30px 20px;">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide border rounded py-3 counter-box">
                                            <div class="item">
                                                <h1 class="count fs-1 fw-bold" data-number="500">+</h1>
                                            </div>
                                            <!-- <img src="./images/flag1.png" alt> -->
                                            <h3 class="mt-md-3 mb-1">United States</h3>
                                            <p>500+ Resellers</p>
                                        </div>
                                        <div class="swiper-slide  border rounded py-3 counter-box">
                                            <div class="item">
                                                <h1 class="count fs-1 fw-bold" data-number="500">+</h1>
                                            </div>
                                            <!-- <img src="./images/flag2.png" alt> -->
                                            <h3 class="mt-md-3 mb-1">United States</h3>
                                            <p>500+ Resellers</p>
                                        </div>
                                        <div class="swiper-slide border rounded py-3 counter-box">
                                            <div class="item">
                                                <h1 class="count fs-1 fw-bold" data-number="500">+</h1>
                                            </div>
                                            <!-- <img src="./images/flag3.png" alt> -->
                                            <h3 class="mt-md-3 mb-1">United States</h3>
                                            <p>500+ Resellers</p>
                                        </div>
                                        <div class="swiper-slide border rounded py-3 counter-box">
                                            <div class="item">
                                                <h1 class="count fs-1 fw-bold" data-number="500">+</h1>
                                            </div>
                                            <!-- <img src="./images/flag4.png" alt> -->
                                            <h3 class="mt-md-3 mb-1">United States</h3>
                                            <p>500+ Resellers</p>
                                        </div>
                                        <div class="swiper-slide border rounded py-3 counter-box">
                                            <div class="item">
                                                <h1 class="count fs-1 fw-bold" data-number="500">+</h1>
                                            </div>
                                            <!-- <img src="./images/flag5.png" alt> -->
                                            <h3 class="mt-md-3 mb-1">United States</h3>
                                            <p>500+ Resellers</p>
                                        </div>
                                        <div class="swiper-slide border rounded py-3 counter-box">
                                            <div class="item">
                                                <h1 class="count fs-1 fw-bold" data-number="500">+</h1>
                                            </div>
                                            <!-- <img src="./images/flag2.png" alt> -->
                                            <h3 class="mt-md-3 mb-1">United States</h3>
                                            <p>500+ Resellers</p>
                                        </div>
                                        <div class="swiper-slide border rounded py-3 counter-box">
                                            <div class="item">
                                                <h1 class="count fs-1 fw-bold" data-number="500">+</h1>
                                            </div>
                                            <!-- <img src="./images/flag4.png" alt> -->
                                            <h3 class="mt-md-3 mb-1">United States</h3>
                                            <p>500+ Resellers</p>
                                        </div>
                                        <div class="swiper-slide border rounded py-3 counter-box">
                                            <div class="item">
                                                <h1 class="count fs-1 fw-bold" data-number="500">+</h1>
                                            </div>
                                            <!-- <img src="./images/flag4.png" alt> -->
                                            <h3 class="mt-md-3 mb-1">United States</h3>
                                            <p>500+ Resellers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
                <!-- <div class="slider-wrap-main mt-md-5 mt-3 slider-one-wrap text-center">
                    <h2 class="fs-1 mb-3">Best Rated Jewelry Store Worldwide</h2>
                    <h4 class="fw-light">Huzurr Worldwide stands out as a premier jewelry destination, earning top-notch reviews across Google, Trustpilot, Bark, and Etsy.
                        Renowned for its exquisite craftsmanship and timeless designs, customers consistently praise Huzurr's unparalleled quality and exceptional
                        customer service. With a global presence, this jewelry store has garnered widespread acclaim, making it a trusted choice for those seeking
                        elegant, enduring pieces. Explore Huzurr Worldwide for a world-class shopping experience, where every piece reflects a commitment to
                        excellence and beauty.
                        </h4>
                    <div class="slider-reviews-wrap mb-3">
                        <div class="see-all-slider-wrap">
                            <div class="hidden-container">
                                <div class="swiper seemore seemore2 review-section-photos">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="./images/review-1.png" alt>
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="./images/review-2.png" alt>
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="./images/review-3.png" alt>
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="./images/review-4.png" alt>
                                        </div>
                                       
                                    
                                       
                                    </div>
    
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>       -->
              
            </div>
        </section>
        <!-- <section class="common-gap">
            <div class="section-container section-type-hand-work">
                <div class="row align-items-center justify-content-between flex-row-reverse">
                    <div class="col-md-5 pb-md-5 pb-3">
                        <h2 class="mb-md-3 mb-2">Lorem ipsum dolor sit.</h2>
                        <p class="mb-md-4 mb-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero, impedit?
                            Inventore tempore quos porro aspernatur voluptatum quidem saepe eum? Reiciendis
                            asperiores labore enim sed doloremque id ullam nulla illo tempora!</p>

                        <div class="btn-wrap pt-md-3 pt-2">
                            <a href="#" class="black-btn">Read More</a>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <img src="./images/ring-craft-work.jpg" alt="">
                    </div>
                </div>
            </div>
        </section> -->

        <section class="common-gap">
            <div class="section-container section-type-edit-list">
                <h2 class="sec-heading">Our Lartest Blogs</h2>
                <p class="sec-desc">Follow our journey @jewcusjewelry as we
                    #CelebrateWithColor</p>
                <div class="see-all-slider-wrap">
                    <div class="hidden-container">
                        <div class="swiper blog">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="#">
                                        <div class="card-box">
                                            <img src="./images/log-1.jpg" alt>
                                            <span class="card-title">Fine
                                                Jewelry Care: 7 Mistakes You
                                                Need To Stop Making Now!</span>
                                            <span class="blog-date">
                                                25th July, 2023
                                            </span>
                                            <button class="read-more">
                                                Read More <i class="bi bi-arrow-right"></i>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#">
                                        <div class="card-box">
                                            <img src="./images/log-1.jpg" alt>
                                            <span class="card-title">Fine
                                                Jewelry Care: 7 Mistakes You
                                                Need To Stop Making Now!</span>
                                            <span class="blog-date">
                                                25th July, 2023
                                            </span>
                                            <button class="read-more">
                                                Read More <i class="bi bi-arrow-right"></i>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#">
                                        <div class="card-box">
                                            <img src="./images/log-1.jpg" alt>
                                            <span class="card-title">Fine
                                                Jewelry Care: 7 Mistakes You
                                                Need To Stop Making Now!</span>
                                            <span class="blog-date">
                                                25th July, 2023
                                            </span>
                                            <button class="read-more">
                                                Read More <i class="bi bi-arrow-right"></i>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#">
                                        <div class="card-box">
                                            <img src="./images/log-1.jpg" alt>
                                            <span class="card-title">Fine
                                                Jewelry Care: 7 Mistakes You
                                                Need To Stop Making Now!</span>
                                            <span class="blog-date">
                                                25th July, 2023
                                            </span>
                                            <button class="read-more">
                                                Read More <i class="bi bi-arrow-right"></i>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#">
                                        <div class="card-box">
                                            <img src="./images/log-1.jpg" alt>
                                            <span class="card-title">Fine
                                                Jewelry Care: 7 Mistakes You
                                                Need To Stop Making Now!</span>
                                            <span class="blog-date">
                                                25th July, 2023
                                            </span>
                                            <button class="read-more">
                                                Read More <i class="bi bi-arrow-right"></i>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#">
                                        <div class="card-box">
                                            <img src="./images/log-1.jpg" alt>
                                            <span class="card-title">Fine
                                                Jewelry Care: 7 Mistakes You
                                                Need To Stop Making Now!</span>
                                            <span class="blog-date">
                                                25th July, 2023
                                            </span>
                                            <button class="read-more">
                                                Read More <i class="bi bi-arrow-right"></i>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#">
                                        <div class="card-box">
                                            <img src="./images/log-1.jpg" alt>
                                            <span class="card-title">Fine
                                                Jewelry Care: 7 Mistakes You
                                                Need To Stop Making Now!</span>
                                            <span class="blog-date">
                                                25th July, 2023
                                            </span>
                                            <button class="read-more">
                                                Read More <i class="bi bi-arrow-right"></i>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#">
                                        <div class="card-box">
                                            <img src="./images/log-1.jpg" alt>
                                            <span class="card-title">Fine
                                                Jewelry Care: 7 Mistakes You
                                                Need To Stop Making Now!</span>
                                            <span class="blog-date">
                                                25th July, 2023
                                            </span>
                                            <button class="read-more">
                                                Read More <i class="bi bi-arrow-right"></i>
                                            </button>
                                        </div>
                                    </a>
                                </div>

                            </div>

                        </div>
                        <div class="swiper-button-next swiper-btn"></div>
                        <div class="swiper-button-prev swiper-btn"></div>
                    </div>
                </div>
            </div>

        </section>
        <section class="section-container section-type-tranding-list read_more_content_section text-center">
            <div class="">
                <h2 class="sec-heading mt-4">MORE WITH US</h2>
                <p id="myDiv">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus error pariatur at sequi magni magnam harum explicabo optio rerum amet beatae, repudiandae ipsa suscipit eaque dolorem nisi aperiam excepturi reprehenderit est eius saepe officiis dolorum! Id, vero. Non tempore quod numquam, nostrum iusto porro, similique voluptate quis sequi delectus, asperiores qui quas quam earum itaque animi debitis magni accusamus repellat. Ducimus deleniti molestias optio soluta ratione est fugit, quas aut iure minima, tempore possimus illo! Perferendis vitae nihil, animi sint praesentium commodi quod reiciendis. Quasi alias earum repellat a impedit, architecto cumque in ad illum consequuntur minus soluta fuga labore tenetur unde magni quibusdam modi ab, veniam maxime, dolore id blanditiis quo similique. Blanditiis pariatur commodi aperiam eos nihil magni officiis autem nemo quaerat facere. Quae ut ratione quidem? Similique, nisi suscipit ea necessitatibus architecto voluptatum. Perspiciatis libero consectetur inventore officia, repudiandae consequuntur earum ipsa adipisci dicta. Ipsum, tempora! Quas magnam, voluptate nam numquam iste aliquid minus culpa officia, odit quibusdam corporis! Quibusdam sed nihil, asperiores magnam natus provident nemo nulla iusto sint adipisci. Sapiente perspiciatis soluta ex quam, nostrum ipsa earum unde optio sint eius iste dicta omnis asperiores modi, natus enim placeat labore, laboriosam dolorum ducimus dolor. Quas, doloribus nam quae alias vero expedita, similique voluptatem excepturi temporibus quaerat vel, saepe et dicta eligendi quam minus facilis! Alias placeat voluptatibus beatae quidem consectetur optio similique deleniti est assumenda exercitationem tempora fuga, maiores debitis, sequi nemo magni totam obcaecati! Omnis asperiores eos, ut quia non est ullam repellendus id autem repudiandae aut, tempora placeat vero, quae sequi mollitia nihil impedit quibusdam sint. Deleniti iusto dignissimos et iure atque incidunt a. Quos laborum minus consectetur reiciendis possimus voluptates eveniet laudantium? Labore dicta animi, aut nobis vitae harum maxime itaque nulla accusantium autem fugiat doloribus vel! Debitis, eum eos? Sint debitis aliquid similique aperiam doloremque neque eveniet dolores soluta nisi architecto, ea minima. Officiis quaerat ut perferendis facilis labore, quia animi obcaecati natus aut, suscipit, molestiae quisquam provident! Praesentium autem cupiditate exercitationem atque porro harum, inventore, tempore aliquam doloribus ipsam dolorem sed voluptatibus, et fugit quisquam qui non nostrum vitae dolore! Animi pariatur est quae ipsa, inventore illo ratione impedit sit eum nesciunt id sed, veritatis quasi, distinctio sint earum ex dolores ab unde magnam! Velit molestias autem maiores harum quisquam explicabo et eum labore facere nemo. Dolores sunt maiores sapiente? Quia iusto debitis dolorum mollitia commodi. Est, sint molestias exercitationem porro maiores nihil pariatur tempora corporis modi error adipisci laborum facere nemo, debitis quis doloremque cumque aspernatur. Voluptate illum odio eaque nam molestiae, tempora aliquid aspernatur quod iusto ducimus corrupti iure hic impedit? Neque quaerat amet ullam corporis eos assumenda sit commodi ut ipsam aliquam inventore doloribus id nihil in hic officia rerum maxime, quam tempore accusantium, laboriosam esse ducimus asperiores. Eveniet rerum inventore officiis soluta cupiditate perferendis, fuga quidem blanditiis facilis quia necessitatibus cum dicta placeat esse aut eius quod repellat accusantium ut. Ab modi labore laudantium quo, officiis molestiae illo, vero quidem odio nostrum impedit iure cumque eum voluptates, commodi laborum repellendus! Hic, facere exercitationem sequi aliquam itaque enim laborum recusandae labore officia dignissimos. Quo nisi repellendus excepturi aspernatur vitae earum, voluptatem ipsum rerum quidem eum accusantium, voluptas qui voluptates eos. Beatae facilis delectus commodi quibusdam necessitatibus totam non rerum at nobis quas accusantium aliquid ipsum excepturi pariatur tempore vel nam, dolor iure. At temporibus magnam quisquam, possimus rem earum assumenda aut optio tenetur iure sed recusandae cumque dicta repellendus. Quibusdam accusamus a nobis, assumenda saepe ad provident. Atque ab sunt nostrum eligendi fugit suscipit veritatis voluptates, aperiam repellat, architecto, ullam adipisci vel. Libero amet rem tempora maxime minus. Accusamus animi, sed itaque nemo impedit architecto, saepe unde, recusandae hic dicta ea repudiandae repellendus eius illo aliquid! Quam saepe fugit earum adipisci sed vero pariatur reprehenderit deleniti sunt, eaque ut vitae molestiae aspernatur ipsa veritatis, non officiis fuga minus quisquam quasi odit nemo fugiat praesentium? Consequuntur vero id nemo, totam temporibus sequi impedit nam unde, laudantium quia mollitia error quisquam eum sit commodi aliquam officia odit. Quaerat accusantium officiis atque, reiciendis dolore consequuntur porro quia, aperiam quisquam praesentium quos fuga aspernatur deleniti fugit commodi harum, quis expedita explicabo corrupti deserunt vero natus dolor! Iusto, veniam fuga similique quibusdam perferendis obcaecati, recusandae doloribus, vitae pariatur hic dignissimos maiores numquam ex placeat odio distinctio cupiditate aspernatur delectus dolore minus! Provident temporibus nobis ducimus ipsa excepturi. At, veniam nostrum! Non magnam vero exercitationem blanditiis, debitis, molestiae explicabo ipsum odit autem quia adipisci fugit at sapiente excepturi similique libero. Vero praesentium vel, incidunt consequatur dolorum quas ipsum corporis libero nulla quia nostrum magni suscipit. Vel quam blanditiis culpa quaerat, aliquid nemo possimus alias recusandae tempore pariatur odio. Esse delectus vel fugit ex reiciendis perspiciatis non repudiandae mollitia itaque debitis reprehenderit id, iste cupiditate ratione! Alias non nobis dignissimos nostrum odio, modi debitis, rerum asperiores tempore labore voluptas unde suscipit ipsum illum, facilis officia provident odit tenetur. Nobis repudiandae commodi est, quidem, temporibus hic ipsam suscipit et accusamus placeat, ex culpa. Neque maxime architecto maiores accusamus officia aspernatur nam, voluptates vel, illo modi amet animi fuga. Cumque maiores nostrum beatae deserunt magni recusandae sunt alias porro corporis nesciunt eligendi illum facere culpa aut autem rem blanditiis quos tenetur, ipsum repellendus similique sit! Placeat, illo fuga delectus impedit, maxime eveniet rerum in ex, eos deserunt porro praesentium recusandae necessitatibus amet itaque sequi. Iusto repudiandae in illo similique delectus culpa doloremque beatae velit ducimus. Nisi libero facere dolorum aliquam distinctio, vitae consectetur quis ipsam, animi hic eum voluptate ipsum, recusandae eligendi. Culpa totam maxime mollitia voluptatibus deserunt ipsam est consequuntur modi voluptas quibusdam vel doloribus repudiandae possimus fugit laborum blanditiis dolorum inventore hic veritatis iure, quia, rem nemo sapiente. Officiis esse debitis impedit pariatur beatae unde eos delectus sed maiores aperiam ex velit commodi, dolorem magnam nemo molestias quam, sunt sapiente aliquid consequuntur. Similique assumenda dignissimos fugit fuga soluta, dolor id asperiores esse, aperiam iste laudantium animi mollitia at blanditiis totam ipsam temporibus repellat rerum vitae ducimus inventore quisquam. Maxime et eos molestiae maiores quis!</p>
                <div class="btn-wrap pt-1 pt-md-3  text-center">
                    <a href="javascript:void()" class="white-btn fw-bold" id="readMoreBtn" onclick="toggleHeight()">Read More..</a>
                </div>
            </div>
            </section>
        <!-- <section class="common-gap">
            <div class="section-container section-type-tranding-list">
                <h2 class="sec-heading">TRENDING LOOKS</h2>
                
                <div class="see-all-slider-wrap">
                    <div class="hidden-container">
                        <div class="swiper video-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <video src="https://into-the-program.com/uploads/sample_video01.mp4" autoplay muted loop playsinline preload></video>
                                </div>
                                <div class="swiper-slide">
                                    <video src="https://into-the-program.com/uploads/sample_video01.mp4" autoplay muted loop playsinline preload></video>
                                </div>
                                  <div class="swiper-slide">
                                    <video src="https://into-the-program.com/uploads/sample_video01.mp4" autoplay muted loop playsinline preload></video>
                                </div>
                                <div class="swiper-slide">
                                    <video src="https://into-the-program.com/uploads/sample_video01.mp4" autoplay muted loop playsinline preload></video>
                                </div>
                                <div class="swiper-slide">
                                    <video src="https://into-the-program.com/uploads/sample_video01.mp4" autoplay muted loop playsinline preload></video>
                                </div>
                                  <div class="swiper-slide">
                                    <video src="https://into-the-program.com/uploads/sample_video01.mp4" autoplay muted loop playsinline preload></video>
                                </div>
                                  <div class="swiper-slide">
                                    <video src="https://into-the-program.com/uploads/sample_video01.mp4" autoplay muted loop playsinline preload></video>
                                </div>
                                <div class="swiper-slide">
                                    <video src="https://into-the-program.com/uploads/sample_video01.mp4" autoplay muted loop playsinline preload></video>
                                </div>
                               
                               </div>

                        </div>
                        <div class="swiper-button-next swiper-btn"></div>
                        <div class="swiper-button-prev swiper-btn"></div>
                    </div>
                </div>
            </div>

        </section> -->

        <section>
            <div class="common-gap" id="faq-panel-home">
                <h2 class="faq-header text-center">Frequently Asked Questions</h2>

                <div class="faq-content">
                    <div class="faq-question">
                        <input id="q1" type="checkbox" class="panel">
                        <div class="plus">+</div>
                        <label for="q1" class="panel-title">What is the meaning of life?</label>
                        <div class="panel-content">42</div>
                    </div>

                    <div class="faq-question">
                        <input id="q2" type="checkbox" class="panel">
                        <div class="plus">+</div>
                        <label for="q2" class="panel-title">How much wood would a woodchuck chuck?</label>
                        <div class="panel-content">A woodchuck would chuck all the wood he could chuck, if a woodchuck
                            could chuck wood!</div>
                    </div>

                    <div class="faq-question">
                        <input id="q3" type="checkbox" class="panel">
                        <div class="plus">+</div>
                        <label for="q3" class="panel-title">What happens if Pinocchio says, "my nose will grow
                            now"?</label>
                        <div class="panel-content">Certain questions are better left &nbsp;</div>
                    </div>
                </div>
            </div>
        </section>
       

      

        
        <!-- <section class="common-gap">
            <div class="section-container section-type-your-words">
                <h2 class="sec-heading">Your Words, Not Ours</h2>

                <div class="your-word-wrap">
                    <div class="review-total-wrap">
                        <div class="star-wrapper">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="28" height="26" viewBox="0 0 28 26"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.0001 21L5.7711 25.3262L7.3427 16.1631L0.685303 9.67376L9.8856 8.33688L14.0001 0L18.1146 8.33688L27.3149 9.67376L20.6575 16.1631L22.2291 25.3262L14.0001 21Z"
                                        fill="#FFD200" />
                                </svg>
                            </span>
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="28" height="26" viewBox="0 0 28 26"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.0001 21L5.7711 25.3262L7.3427 16.1631L0.685303 9.67376L9.8856 8.33688L14.0001 0L18.1146 8.33688L27.3149 9.67376L20.6575 16.1631L22.2291 25.3262L14.0001 21Z"
                                        fill="#FFD200" />
                                </svg>
                            </span>
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="28" height="26" viewBox="0 0 28 26"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.0001 21L5.7711 25.3262L7.3427 16.1631L0.685303 9.67376L9.8856 8.33688L14.0001 0L18.1146 8.33688L27.3149 9.67376L20.6575 16.1631L22.2291 25.3262L14.0001 21Z"
                                        fill="#FFD200" />
                                </svg>
                            </span>
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="28" height="26" viewBox="0 0 28 26"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.0001 21L5.7711 25.3262L7.3427 16.1631L0.685303 9.67376L9.8856 8.33688L14.0001 0L18.1146 8.33688L27.3149 9.67376L20.6575 16.1631L22.2291 25.3262L14.0001 21Z"
                                        fill="#FFD200" />
                                </svg>
                            </span>
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="28" height="26" viewBox="0 0 28 26"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.0001 21L5.7711 25.3262L7.3427 16.1631L0.685303 9.67376L9.8856 8.33688L14.0001 0L18.1146 8.33688L27.3149 9.67376L20.6575 16.1631L22.2291 25.3262L14.0001 21Z"
                                        fill="#FFD200" />
                                </svg>
                            </span>
                        </div>
                        <div class="brizzar-img">
                            <img src="./images/bizrate.webp" alt>
                        </div>
                        <div class="rating-views font-18">
                            <span>9.4</span>
                            out of
                            <span>10</span>
                        </div>
                        <div class="review-img">
                            <img src="./images/bbb-logo.webp" alt>
                        </div>
                    </div>
                    <div class="hidden-container">
                        <div class="swiper reviews">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="review-card">
                                        <div class="review-top-area d-flex align-items-center">
                                            <img src="./images/7mm-aaaa-peridot-yellow-gold-earrings.webp" alt>
                                            <div class="star-wrapper-black pt-0">
                                                <div class="star-rating">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                </div>
                                                <h6 class="font-18">
                                                    Absolutely Perfect!
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="review-disc">
                                            <p>I have been looking for a
                                                simple, elegant classic
                                                pearl ring. Out if three I
                                                found in jewcus, my husband
                                                and I chose this one.
                                                Perfection!</p>
                                        </div>
                                        <div class="customer-name font-13">
                                            <div>Mary C.</div>
                                            <div>14 Sep, 2023</div>
                                        </div>
                                    </div>

                                </div>
                                <div class="swiper-slide">
                                    <div class="review-card">
                                        <div class="review-top-area d-flex align-items-center">
                                            <img src="./images/7mm-aaaa-peridot-yellow-gold-earrings.webp" alt>
                                            <div class="star-wrapper-black pt-0">
                                                <div class="star-rating">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                </div>
                                                <h6 class="font-18">
                                                    Absolutely Perfect!
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="review-disc">
                                            <p>I have been looking for a
                                                simple, elegant classic
                                                pearl ring. Out if three I
                                                found in jewcus, my husband
                                                and I chose this one.
                                                Perfection!</p>
                                        </div>
                                        <div class="customer-name font-13">
                                            <div>Mary C.</div>
                                            <div>14 Sep, 2023</div>
                                        </div>
                                    </div>

                                </div>
                                <div class="swiper-slide">
                                    <div class="review-card">
                                        <div class="review-top-area d-flex align-items-center">
                                            <img src="./images/7mm-aaaa-peridot-yellow-gold-earrings.webp" alt>
                                            <div class="star-wrapper-black pt-0">
                                                <div class="star-rating">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                </div>
                                                <h6 class="font-18">
                                                    Absolutely Perfect!
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="review-disc">
                                            <p>I have been looking for a
                                                simple, elegant classic
                                                pearl ring. Out if three I
                                                found in jewcus, my husband
                                                and I chose this one.
                                                Perfection!</p>
                                        </div>
                                        <div class="customer-name font-13">
                                            <div>Mary C.</div>
                                            <div>14 Sep, 2023</div>
                                        </div>
                                    </div>

                                </div>
                                <div class="swiper-slide">
                                    <div class="review-card">
                                        <div class="review-top-area d-flex align-items-center">
                                            <img src="./images/7mm-aaaa-peridot-yellow-gold-earrings.webp" alt>
                                            <div class="star-wrapper-black pt-0">
                                                <div class="star-rating">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                </div>
                                                <h6 class="font-18">
                                                    Absolutely Perfect!
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="review-disc">
                                            <p>I have been looking for a
                                                simple, elegant classic
                                                pearl ring. Out if three I
                                                found in jewcus, my husband
                                                and I chose this one.
                                                Perfection!</p>
                                        </div>
                                        <div class="customer-name font-13">
                                            <div>Mary C.</div>
                                            <div>14 Sep, 2023</div>
                                        </div>
                                    </div>

                                </div>
                                <div class="swiper-slide">
                                    <div class="review-card">
                                        <div class="review-top-area d-flex align-items-center">
                                            <img src="./images/7mm-aaaa-peridot-yellow-gold-earrings.webp" alt>
                                            <div class="star-wrapper-black pt-0">
                                                <div class="star-rating">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                </div>
                                                <h6 class="font-18">
                                                    Absolutely Perfect!
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="review-disc">
                                            <p>I have been looking for a
                                                simple, elegant classic
                                                pearl ring. Out if three I
                                                found in jewcus, my husband
                                                and I chose this one.
                                                Perfection!</p>
                                        </div>
                                        <div class="customer-name font-13">
                                            <div>Mary C.</div>
                                            <div>14 Sep, 2023</div>
                                        </div>
                                    </div>

                                </div>
                                <div class="swiper-slide">
                                    <div class="review-card">
                                        <div class="review-top-area d-flex align-items-center">
                                            <img src="./images/7mm-aaaa-peridot-yellow-gold-earrings.webp" alt>
                                            <div class="star-wrapper-black pt-0">
                                                <div class="star-rating">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                </div>
                                                <h6 class="font-18">
                                                    Absolutely Perfect!
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="review-disc">
                                            <p>I have been looking for a
                                                simple, elegant classic
                                                pearl ring. Out if three I
                                                found in jewcus, my husband
                                                and I chose this one.
                                                Perfection!</p>
                                        </div>
                                        <div class="customer-name font-13">
                                            <div>Mary C.</div>
                                            <div>14 Sep, 2023</div>
                                        </div>
                                    </div>

                                </div>
                                <div class="swiper-slide">
                                    <div class="review-card">
                                        <div class="review-top-area d-flex align-items-center">
                                            <img src="./images/7mm-aaaa-peridot-yellow-gold-earrings.webp" alt>
                                            <div class="star-wrapper-black pt-0">
                                                <div class="star-rating">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                </div>
                                                <h6 class="font-18">
                                                    Absolutely Perfect!
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="review-disc">
                                            <p>I have been looking for a
                                                simple, elegant classic
                                                pearl ring. Out if three I
                                                found in jewcus, my husband
                                                and I chose this one.
                                                Perfection!</p>
                                        </div>
                                        <div class="customer-name font-13">
                                            <div>Mary C.</div>
                                            <div>14 Sep, 2023</div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="btn-wraper">
                            <a class="view-all" href="#">View All <span class="value-change">Customer Reviews
                                </span> </a>
                            <div class="swiper-button-prev swiper-btn"></div>
                            <div class="swiper-button-next swiper-btn"></div>
                        </div>

                    </div>
                </div>
            </div>

        </section> -->
    </main>
@endsection

@section('js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-2.1.3.js"></script>
        <!-- faq js -->
        <script>
            const items = document.querySelectorAll('.accordion_faq button');

            function toggleAccordion() {
                const itemToggle = this.getAttribute('aria-expanded');

                for (i = 0; i < items.length; i++) {
                    items[i].setAttribute('aria-expanded', 'false');
                }

                if (itemToggle == 'false') {
                    this.setAttribute('aria-expanded', 'true');
                }
            }

            items.forEach((item) => item.addEventListener('click', toggleAccordion));
        </script>
        <script>
            
            // read more btn ...............................
                function toggleHeight(){
                    var myDiv = document.getElementById("myDiv");
                    var btn = document.getElementById("readMoreBtn");
                    myDiv.classList.toggle("expanded");

                    if(myDiv.classList.contains("expanded")){
                        btn.innerText = "Read Less"
                    }else{
                        btn.innerText = "Read More"
                    }
                }



            var target_date = new Date().getTime() + (1000*3600*48); // set the countdown date
                var days, hours, minutes, seconds; // variables for time units

                var countdown = document.getElementById("tiles"); // get tag element

                getCountdown();

                setInterval(function () { getCountdown(); }, 1000);

                function getCountdown(){

                    // find the amount of "seconds" between now and target
                    var current_date = new Date().getTime();
                    var seconds_left = (target_date - current_date) / 1000;

                    days = pad( parseInt(seconds_left / 86400) );
                    seconds_left = seconds_left % 86400;
                        
                    hours = pad( parseInt(seconds_left / 3600) );
                    seconds_left = seconds_left % 3600;
                        
                    minutes = pad( parseInt(seconds_left / 60) );
                    seconds = pad( parseInt( seconds_left % 60 ) );

                    // format countdown string + set tag value
                    countdown.innerHTML = "<span>" + days + "</span><span>" + hours + "</span><span>" + minutes + "</span><span>" + seconds + "</span>"; 
                }

                function pad(n) {
                    return (n < 10 ? '0' : '') + n;
                }



                var mySwiper = new Swiper(".video-slider", {
                slidesPerView: 4,
                spaceBetween: 20,
                navigation: {
                    nextEl: ".swiper-button-next",prevEl: ".swiper-button-prev",
                },
                breakpoints: {
                    640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                    },
                    768: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                    },
                    1024: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                    },
                },
                });



        </script>
        <script>
                    let count = document.querySelectorAll(".count")
                let arr = Array.from(count)



                arr.map(function(item){
                let startnumber = 0

                function counterup(){
                startnumber++
                item.innerHTML= startnumber
                
                if(startnumber == item.dataset.number){
                    clearInterval(stop)
                }
                }

                let stop =setInterval(function(){
                counterup()
                },50)

                })

                // function toggleHeight() {
                //                 var myDiv = document.getElementById('myDiv');
                //                 var btn = document.getElementById('readMoreBtn');

                //                 myDiv.classList.toggle('expanded');

                //                 if (myDiv.classList.contains('expanded')) {
                //                     btn.innerText = 'Read Less';
                //                 } else {
                //                     btn.innerText = 'Read More';
                //                 }
                //             }
                        
        </script>
        
        <script>
            const modal = document.querySelector(".overlay_model");

            setTimeout(function () {
                modal.classList.add("show-modal");
            }, 5000);

            document.querySelector("#close-modal-btn").addEventListener("click", () => {
                modal.classList.remove("show-modal");
                modal.classList.add("hide-modal");
                modal.style.display = "none";
            })
        </script>
@endsection