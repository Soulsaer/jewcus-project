@extends('layouts.app')

{{-- @section('title', $title) --}}
{{-- @section('meta_tags')
<meta name="description" content="{{($description)}}">
<meta name="keywords" content="{{($keyword)}}">
@endsection
@section('other_tags')
{!! $others !!}
@endsection --}}



@section('content')
    {{-- <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Shop
                </div>
            </div>
        </div>
        <section class="pt-80 pb-40">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 primary-sidebar sticky-sidebar">
                        <div class="accordion_section">
                            <div class="d-flex justify-content-between align-items-center">
                                <h2 class="fs-6">Fillter</h2>
                                <a href="">Clear All</a>
                            </div>
                            <style>
                                input[type=checkbox]{
                                    width: 10px; 
                                    cursor: pointer;
                                }
                            </style>
                            <div class="accordion">
                              <div class="accordion-item">
                                <button id="accordion-button-1" aria-expanded="true"><span class="accordion-title">METAL TYPE </span><span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox">
                                        <span class="ps-2">
                                            White Gold (599)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Yellow Gold (588)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Rose Gold (581)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Platinum (507)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Silver (106)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Two Tone Gold (18)</span>
                                    </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">GEMSTONE</span><span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <input type="search" placeholder="search">
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox">
                                        <span class="ps-2">
                                            Blue Sapphire (139)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Aquamarine (110) </span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Ruby (95)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Amethyst (94)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Emerald (90)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Diamond (88)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Garnet (81)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Opal (79)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Opal (79)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Morganite (69)</span>
                                    </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">GEMSTONE SHAPE</span><span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <input type="search" placeholder="search">
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox">
                                        <span class="ps-2">
                                            Round (213)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Oval (170) </span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Cushion (62)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Emerald Cut (58)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Pear (42)   </span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Cushion Rectangular (13)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Square (13)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Princess (9)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Heart (8)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Square Emerald Cut (5)</span>
                                    </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">JEWELRY STYLES</span><span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <input type="search" placeholder="search">
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox">
                                        <span class="ps-2">
                                            Fashion (273)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Classic (213)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Side Stones (196)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Solitaire (183)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Halo (163)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Stackables (69)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Three Stone (69)    </span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Vintage Inspired (61)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Infinity (44)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            Two Stone (31)</span>
                                    </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">CARAT WEIGHT</span><span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <input type="search" placeholder="search">
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox">
                                        <span class="ps-2">
                                            Over 3.01 (106)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            1.51 - 3.00 (82)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            0.51-1.00 (79)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">0.01-0.50 (70)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">1.01 - 1.50 (59)</span>
                                    </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">JEWELRY TYPES</span><span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <input type="search" placeholder="search">
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox">
                                        <span class="ps-2">Rings (213)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">Bands (98)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">Earrings (45)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">Pendants (32)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">Necklaces (11)</span>
                                    </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">OCCASION</span><span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox">
                                        <span class="ps-2">Engagement (310)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">Wedding (277)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">Promise (23)</span>
                                    </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">ZODIAC JEWELRY</span><span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox">
                                        <span class="ps-2">Aquarius (1)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">Aries (1)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">Cancer (1)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">Capricorn (1)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">Gemini (1)</span>
                                    </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">PEARL SIZE</span><span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox">
                                        <span class="ps-2"> 8mm (59)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">10mm (40)    </span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">
                                            0.51-1.00 (79)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">9mm (31)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">7mm (19)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2"> 6mm (12)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">73mm (3)</span>
                                    </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">PRICE</span><span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox">
                                        <span class="ps-2">$1,000 & Under(252)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">$1,000 - $2,000
                                            (337)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">$2,000 - $3,000
                                            (331)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">$3,000 - $4,000
                                            (271)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">$4,000 - $5,000
                                            (235)</span>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center acco_check">
                                        <input type="checkbox" >
                                        <span class="ps-2">$5,000 & Over
                                            (380)</span>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    
                    <div class="col-lg-9">
                        <div class="shop-product-fillter">
                            <div class="totall-product">
                                <p> We found <strong class="text-brand">688</strong> items for you!</p>
                            </div>
                            <div class="sort-by-product-area">
                                <div class="d-flex align-items-center">
                                    <div class="sort-by-cover my-2">
                                        <div class="sort-by-product-wrap">
                                            <div class="sort-by">
                                                <span><i class="fa-solid fa-sort"></i>Sort by:</span>
                                            </div>
                                            <div class="sort-by-dropdown-wrap">
                                                <span> Featured <i class="fa-solid fa-angle-down"></i></span>
                                            </div>
                                        </div>
                                        <div class="sort-by-dropdown">
                                            <ul>
                                                <li><a href="#">Best Seller</a></li>
                                                <li><a href="#">Best Seller</a></li>
                                                <li><a href="#">Price: Low to High</a></li>
                                                <li><a href="#">Price: High to Low</a></li>
                                                <li><a href="#">Release Date</a></li>
                                                <li><a href="#">Avg. Rating</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row product-grid-3">
                            <div class="col-lg-3 col-md-4 col-6 col-sm-6 product-col">
                                <div class="product-cart-wrap mb-30 hover-up">
                                    <div class="product-img-action-wrap ">
                                        <div class="product-img product-img-zoom content_video">
                                            <a href="shop-product-right.html">
                                                <img class="image_video" src="assets/images/product_catecary_ring1.webp" alt="">
                                                <!-- <img class="hover-img" src="assets/images/product_catecary_ring1_1.webp" alt=""> -->
                                                <video class="video_video" style="display:none;" width="100%" height="240px" loop>
                                                    <source src="v.mp4" autoplay="true" muted="muted" type="video/mp4" />
                                                </video>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <span><a href="shop-product-right.html"  class="product-title">Aquamarine and Diamond Twisted Vine Ring</a></span>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 pt-3 show">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fa-sharp fa-regular fa-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 col-sm-6 product-col">
                                <div class="product-cart-wrap mb-30 hover-up">
                                    <div class="product-img-action-wrap ">
                                        <div class="product-img product-img-zoom content_video">
                                            <a href="shop-product-right.html">
                                                <img class="image_video" src="assets/images/product_catecary_ring2.webp" alt="">
                                                <!-- <img class="hover-img" src="assets/images/product_catecary_ring2_1.webp" alt=""> -->
                                                <video class="video_video" style="display:none;" width="100%" height="240px" loop>
                                                    <source src="v.mp4" autoplay="true" muted="muted" type="video/mp4" />
                                                </video>
                                            </a>
                                        </div>
                    1                   <!--<div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div> -->
                                    </div>
                                    <div class="product-content-wrap">
                                        <span><a href="javscript:void(0)" class="product-title">Solitaire Oval Opal Criss Cross Ring with Diamonds</a></span>
                                        <div class="product-price">
                                            <span>$138.85 </span>
                                            <span class="old-price">$255.8</span>
                                        </div>
                                        <div class="product-action-1 pt-3 show">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fa-sharp fa-regular fa-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 col-sm-6 product-col">
                                <div class="product-cart-wrap mb-30 hover-up">
                                    <div class="product-img-action-wrap ">
                                        <div class="product-img product-img-zoom content_video">
                                            <a href="shop-product-right.html">
                                                <img class="image_video" src="assets/images/product_catecary_ring3.webp" alt="">
                                                <!-- <img class="hover-img" src="assets/images/product_catecary_ring3_1.webp" alt=""> -->
                                                <video class="video_video" style="display:none;" width="100%" height="240px" loop>
                                                    <source src="v.mp4" autoplay="true" muted="muted" type="video/mp4" />
                                                </video>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <span><a href="shop-product-right.html" class="product-title">Solitaire Emerald Infinity Knot Ring Infinity Knot Ring</a></span>
                                        <div class="product-price">
                                            <span>$338.85 </span>
                                            <span class="old-price">$445.8</span>
                                        </div>
                                        <div class="product-action-1 pt-3 show">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fa-sharp fa-regular fa-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 col-sm-6 product-col">
                                <div class="product-cart-wrap mb-30 hover-up">
                                    <div class="product-img-action-wrap ">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-right.html">
                                                <img class="default-img" src="assets/images/product_catecary_ring4.webp" alt="">
                                                <img class="hover-img" src="assets/images/product_catecary_ring4_1.webp" alt="">
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <div class="product-content-wrap">
                                        <span><a href="shop-product-right.html"  class="product-title">Oval Solitaire Opal Cocktail Ring Infinity Knot Ring</a></span>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 pt-3 show">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fa-sharp fa-regular fa-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 col-sm-6 product-col">
                                <div class="product-cart-wrap mb-30 hover-up">
                                    <div class="product-img-action-wrap ">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-right.html">
                                                <img class="default-img" src="assets/images/product_catecary_ring5.webp" alt="">
                                                <img class="hover-img" src="assets/images/product_catecary_ring5_1.webp" alt="">
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <div class="product-content-wrap">
                                        <span><a href="shop-product-right.html"  class="product-title">Princess Diana Inspired Blue Sapphire Ring with Diamond</a></span>
                                        <div class="product-price">
                                            <span>$909  </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 pt-3 show">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fa-sharp fa-regular fa-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 col-sm-6 product-col">
                                <div class="product-cart-wrap mb-30 hover-up">
                                    <div class="product-img-action-wrap ">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-right.html">
                                                <img class="default-img" src="assets/images/product_catecary_ring6.webp" alt="">
                                                <img class="hover-img" src="assets/images/product_catecary_ring6_1.webp" alt="">
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <div class="product-content-wrap">
                                        <span><a href="shop-product-right.html"  class="product-title">Classic Solitaire Freshwater Pearl Ring</a></span>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 pt-3 show">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fa-sharp fa-regular fa-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 col-sm-6 product-col">
                                <div class="product-cart-wrap mb-30 hover-up">
                                    <div class="product-img-action-wrap ">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-right.html">
                                                <img class="default-img" src="assets/images/product_catecary_ring7.webp" alt="">
                                                <img class="hover-img" src="assets/images/product_catecary_ring7_1.webp" alt="">
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <div class="product-content-wrap">
                                        <span><a href="shop-product-right.html"  class="product-title">Opal and Diamond Split Shank Ring</a></span>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 pt-3 show">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fa-sharp fa-regular fa-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 col-sm-6 product-col">
                                <div class="product-cart-wrap mb-30 hover-up">
                                    <div class="product-img-action-wrap ">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-right.html">
                                                <img class="default-img" src="assets/images/product_catecary_ring8.webp" alt="">
                                                <img class="hover-img" src="assets/images/product_catecary_ring1.webp" alt="">
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <div class="product-content-wrap">
                                        <span><a href="shop-product-right.html"  class="product-title">Classic Cushion Garnet Solitaire Ring</a></span>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 pt-3 show">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fa-sharp fa-regular fa-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 col-sm-6 product-col">
                                <div class="product-cart-wrap mb-30 hover-up">
                                    <div class="product-img-action-wrap ">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-right.html">
                                                <img class="default-img" src="assets/images/product_catecary_ring9.webp" alt="">
                                                <img class="hover-img" src="assets/images/product_catecary_ring9_1.webp" alt="">
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <div class="product-content-wrap">
                                        <span><a href="shop-product-right.html"  class="product-title">Rectangular Cushion Morganite Halo Engagement</a></span>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 pt-3 show">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fa-sharp fa-regular fa-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 col-sm-6 product-col">
                                <div class="product-cart-wrap mb-30 hover-up">
                                    <div class="product-img-action-wrap ">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-right.html">
                                                <img class="default-img" src="assets/images/product_catecary_ring10.webp" alt="">
                                                <img class="hover-img" src="assets/images/product_catecary_ring10_1.webp" alt="">
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <div class="product-content-wrap">
                                        <span><a href="shop-product-right.html"  class="product-title">Classic Solitaire Diamond Twist Shank Ring</a></span>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 pt-3 show">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fa-sharp fa-regular fa-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-6 col-sm-6 product-col">
                                <div class="product-cart-wrap mb-30 hover-up">
                                    <div class="product-img-action-wrap ">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-right.html">
                                                <img class="default-img" src="assets/images/product_catecary_ring11.webp" alt="">
                                                <img class="hover-img" src="assets/images/product_catecary_ring11_1.webp" alt="">
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <div class="product-content-wrap">
                                        <span><a href="shop-product-right.html"  class="product-title">Prong-Set Oval Opal Halo Ring with Diamonds</a></span>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 pt-3 show">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fa-sharp fa-regular fa-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 col-sm-6 product-col">
                                <div class="product-cart-wrap mb-30 hover-up">
                                    <div class="product-img-action-wrap ">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-right.html">
                                                <img class="default-img" src="assets/images/product_catecary_ring12.webp" alt="">
                                                <img class="hover-img" src="assets/images/product_catecary_ring12_1.webp" alt="">
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <div class="product-content-wrap">
                                        <span><a href="shop-product-right.html"  class="product-title">Freshwater Pearl Twist Shank Ring with Diamonds</a></span>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 pt-3 show">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fa-sharp fa-regular fa-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 col-sm-6 product-col">
                                <div class="product-cart-wrap mb-30 hover-up">
                                    <div class="product-img-action-wrap ">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-right.html">
                                                <img class="default-img" src="assets/images/product_catecary_ring13.webp" alt="">
                                                <img class="hover-img" src="assets/images/product_catecary_ring13_1.webp" alt="">
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <div class="product-content-wrap">
                                        <span><a href="shop-product-right.html"  class="product-title">Rectangular Cushion Morganite Halo Engagement</a></span>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 pt-3 show">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fa-sharp fa-regular fa-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 col-sm-6 product-col">
                                <div class="product-cart-wrap mb-30 hover-up">
                                    <div class="product-img-action-wrap ">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-right.html">
                                                <img class="default-img" src="assets/images/product_catecary_ring14_1.webp" alt="">
                                                <img class="hover-img" src="assets/images/product_catecary_ring14.webp" alt="">
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <div class="product-content-wrap">
                                        <span><a href="shop-product-right.html"  class="product-title">Classic Solitaire Diamond Twist Shank Ring</a></span>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 pt-3 show">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fa-sharp fa-regular fa-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-6 col-sm-6 product-col">
                                <div class="product-cart-wrap mb-30 hover-up">
                                    <div class="product-img-action-wrap ">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-right.html">
                                                <img class="default-img" src="assets/images/product_catecary_ring15.webp" alt="">
                                                <img class="hover-img" src="assets/images/product_catecary_ring15_1.webp" alt="">
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <div class="product-content-wrap">
                                        <span><a href="shop-product-right.html"  class="product-title">Prong-Set Oval Opal Halo Ring with Diamonds</a></span>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 pt-3 show">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fa-sharp fa-regular fa-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 col-sm-6 product-col">
                                <div class="product-cart-wrap mb-30 hover-up">
                                    <div class="product-img-action-wrap ">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-right.html">
                                                <img class="default-img" src="assets/images/product_catecary_ring16.webp" alt="">
                                                <img class="hover-img" src="assets/images/product_catecary_ring16_1.webp" alt="">
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <div class="product-content-wrap">
                                        <span><a href="shop-product-right.html"  class="product-title">Freshwater Pearl Twist Shank Ring with Diamonds</a></span>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 pt-3 show">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fa-sharp fa-regular fa-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--pagination-->
                        <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                    <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">16</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-angle-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="popular-categories section-padding pt-80 pb-40">
            <div class="mx-3 wow fadeIn animated">
                <h3 class="section-title">#CelebrateWithColor</h3>
                <p class="pb-3">Keep up with @angarajewelry making colorful noise in the world.</p>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-arrows"></div>
                    <div class="carausel-6-columns" id="carausel-6-columns">
                        <div class="card-1  wow fadeIn animated hover-up animated animated ">
                            <div class="card_celebrate">
                                <img src="assets/images/cele_image_1" width="100%" alt="img">
                                <div class="overlay_cele"></div>
                                <div class="view_detail_btn">
                                    <button  data-bs-toggle="modal" data-bs-target="#staticBackdrop" >See More</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-1  wow fadeIn animated hover-up animated animated ">
                            <div class="card_celebrate">
                                <img src="assets/images/cele_image_2" width="100%" alt="img">
                                <div class="overlay_cele"></div>
                                <div class="view_detail_btn">
                                    <button class="">See More</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-1  wow fadeIn animated hover-up animated animated ">
                            <div class="card_celebrate">
                                <img src="assets/images/cele_image_3" width="100%" alt="img">
                                <div class="overlay_cele"></div>
                                <div class="view_detail_btn">
                                    <button class="">See More</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-1  wow fadeIn animated hover-up animated animated ">
                            <div class="card_celebrate">
                                <img src="assets/images/cele_imagwe" width="100%" alt="img">
                                <div class="overlay_cele"></div>
                                <div class="view_detail_btn">
                                    <button class="">See More</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-1  wow fadeIn animated hover-up animated animated ">
                            <div class="card_celebrate">
                                <img src="assets/images/cele_image_5" width="100%" alt="img">
                                <img src="" alt="">
                                <div class="overlay_cele"></div>
                                <div class="view_detail_btn">
                                    <button class="">See More</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-1  wow fadeIn animated hover-up animated animated ">
                            <div class="card_celebrate">
                                <img src="assets/images/cele_image_6" width="100%" alt="img">
                                <div class="overlay_cele"></div>
                                <div class="view_detail_btn">
                                    <button class="">See More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main> --}}
    <style>
        .product-cat-box.tabs_wrapper {
            position: relative;
        }
    
        .tab_content.current {
            display: block;
        }
    
        .tab_content {
            display: none;
        }
    </style>
    <main>
        <div class="product-category-template">
            <section class="breadcramp">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Pictures</a></li>
                    <li><a href="#">Summer 15</a></li>
                    <li>Italy</li>
                </ul>
            </section>

            <section class="section-wraper filter-all-products d-flex">
                <div class="product-filter-list d-none d-md-flex">
                    <div class="heading-filter">
                        <h4 class="filter-heading f-w-400">
                            Filters
                        </h4>
                        <div class="toggle-wrap">
                            <button onclick="ButtonToggle()" class="togglebtn">Metal Type <span
                                    class="sub-icon">-</span> <span class="add-icon">+</span></button>
                            <div id="myDropdown" class="toggle-product show">
                                <!-- <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                          <a href="#about">About</a>
                          <a href="#base">Base</a>
                          <a href="#blog">Blog</a>
                          <a href="#contact">Contact</a>
                          <a href="#custom">Custom</a>
                          <a href="#support">Support</a>
                          <a href="#tools">Tools</a> -->
                                <div class="checkbox-product">
                                    <div class="checkbox-product-item">
                                        <div class="d-flex gap-2 align-items-center">
                                            <label class="checkbox-wrap">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                <img src="./images/14k-white-gold.webp" alt="">
                                                <p class="d-flex mb-0">White Gold <span
                                                        class="product-qty">(5555)</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="checkbox-product-item">
                                        <div class="d-flex gap-2 align-items-center">
                                            <label class="checkbox-wrap">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                <img src="./images/14k-white-gold.webp" alt="">
                                                <p class="d-flex mb-0">White Gold <span
                                                        class="product-qty">(5555)</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="checkbox-product-item">
                                        <div class="d-flex gap-2 align-items-center">
                                            <label class="checkbox-wrap">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                <img src="./images/14k-white-gold.webp" alt="">
                                                <p class="d-flex mb-0">White Gold <span
                                                        class="product-qty">(5555)</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="checkbox-product-item">
                                        <div class="d-flex gap-2 align-items-center">
                                            <label class="checkbox-wrap">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                <img src="./images/14k-white-gold.webp" alt="">
                                                <p class="d-flex mb-0">White Gold <span
                                                        class="product-qty">(5555)</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="checkbox-product-item">
                                        <div class="d-flex gap-2 align-items-center">
                                            <label class="checkbox-wrap">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                <img src="./images/14k-white-gold.webp" alt="">
                                                <p class="d-flex mb-0">White Gold <span
                                                        class="product-qty">(5555)</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="checkbox-product-item">
                                        <div class="d-flex gap-2 align-items-center">
                                            <label class="checkbox-wrap">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                <img src="./images/14k-white-gold.webp" alt="">
                                                <p class="d-flex mb-0">White Gold <span
                                                        class="product-qty">(5555)</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="checkbox-product-item">
                                        <div class="d-flex gap-2 align-items-center">
                                            <label class="checkbox-wrap">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                <img src="./images/14k-white-gold.webp" alt="">
                                                <p class="d-flex mb-0">White Gold <span
                                                        class="product-qty">(5555)</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="toggle-wrap">
                            <button onclick="ButtonToggle()" class="togglebtn show-add-icon">Metal Type <span
                                    class="sub-icon">-</span> <span class="add-icon">+</span></button>
                            <div id="myDropdown" class="toggle-product">
                                <!-- <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                          <a href="#about">About</a>
                          <a href="#base">Base</a>
                          <a href="#blog">Blog</a>
                          <a href="#contact">Contact</a>
                          <a href="#custom">Custom</a>
                          <a href="#support">Support</a>
                          <a href="#tools">Tools</a> -->
                                <div class="checkbox-product">
                                    <div class="checkbox-product-item">
                                        <div class="d-flex gap-2 align-items-center">
                                            <label class="checkbox-wrap">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                <img src="./images/14k-white-gold.webp" alt="">
                                                <p class="d-flex mb-0">White Gold <span
                                                        class="product-qty">(5555)</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="checkbox-product-item">
                                        <div class="d-flex gap-2 align-items-center">
                                            <label class="checkbox-wrap">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                <img src="./images/14k-white-gold.webp" alt="">
                                                <p class="d-flex mb-0">White Gold <span
                                                        class="product-qty">(5555)</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="checkbox-product-item">
                                        <div class="d-flex gap-2 align-items-center">
                                            <label class="checkbox-wrap">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                <img src="./images/14k-white-gold.webp" alt="">
                                                <p class="d-flex mb-0">White Gold <span
                                                        class="product-qty">(5555)</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="checkbox-product-item">
                                        <div class="d-flex gap-2 align-items-center">
                                            <label class="checkbox-wrap">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                <img src="./images/14k-white-gold.webp" alt="">
                                                <p class="d-flex mb-0">White Gold <span
                                                        class="product-qty">(5555)</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="checkbox-product-item">
                                        <div class="d-flex gap-2 align-items-center">
                                            <label class="checkbox-wrap">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                <img src="./images/14k-white-gold.webp" alt="">
                                                <p class="d-flex mb-0">White Gold <span
                                                        class="product-qty">(5555)</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="checkbox-product-item">
                                        <div class="d-flex gap-2 align-items-center">
                                            <label class="checkbox-wrap">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                <img src="./images/14k-white-gold.webp" alt="">
                                                <p class="d-flex mb-0">White Gold <span
                                                        class="product-qty">(5555)</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="checkbox-product-item">
                                        <div class="d-flex gap-2 align-items-center">
                                            <label class="checkbox-wrap">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                <img src="./images/14k-white-gold.webp" alt="">
                                                <p class="d-flex mb-0">White Gold <span
                                                        class="product-qty">(5555)</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="toggle-wrap">
                            <button onclick="ButtonToggle()" class="togglebtn show-add-icon">Metal Type <span
                                    class="sub-icon">-</span> <span class="add-icon">+</span></button>
                            <div id="myDropdown" class="toggle-product">
                                <!-- <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                          <a href="#about">About</a>
                          <a href="#base">Base</a>
                          <a href="#blog">Blog</a>
                          <a href="#contact">Contact</a>
                          <a href="#custom">Custom</a>
                          <a href="#support">Support</a>
                          <a href="#tools">Tools</a> -->
                                <div class="checkbox-product">
                                    <div class="checkbox-product-item">
                                        <div class="d-flex gap-2 align-items-center">
                                            <label class="checkbox-wrap">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                <img src="./images/14k-white-gold.webp" alt="">
                                                <p class="d-flex mb-0">White Gold <span
                                                        class="product-qty">(5555)</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="checkbox-product-item">
                                        <div class="d-flex gap-2 align-items-center">
                                            <label class="checkbox-wrap">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                <img src="./images/14k-white-gold.webp" alt="">
                                                <p class="d-flex mb-0">White Gold <span
                                                        class="product-qty">(5555)</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="checkbox-product-item">
                                        <div class="d-flex gap-2 align-items-center">
                                            <label class="checkbox-wrap">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                <img src="./images/14k-white-gold.webp" alt="">
                                                <p class="d-flex mb-0">White Gold <span
                                                        class="product-qty">(5555)</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="checkbox-product-item">
                                        <div class="d-flex gap-2 align-items-center">
                                            <label class="checkbox-wrap">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                <img src="./images/14k-white-gold.webp" alt="">
                                                <p class="d-flex mb-0">White Gold <span
                                                        class="product-qty">(5555)</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="checkbox-product-item">
                                        <div class="d-flex gap-2 align-items-center">
                                            <label class="checkbox-wrap">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                <img src="./images/14k-white-gold.webp" alt="">
                                                <p class="d-flex mb-0">White Gold <span
                                                        class="product-qty">(5555)</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="checkbox-product-item">
                                        <div class="d-flex gap-2 align-items-center">
                                            <label class="checkbox-wrap">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                <img src="./images/14k-white-gold.webp" alt="">
                                                <p class="d-flex mb-0">White Gold <span
                                                        class="product-qty">(5555)</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="checkbox-product-item">
                                        <div class="d-flex gap-2 align-items-center">
                                            <label class="checkbox-wrap">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                <img src="./images/14k-white-gold.webp" alt="">
                                                <p class="d-flex mb-0">White Gold <span
                                                        class="product-qty">(5555)</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-cat-grid-wrap">
                    <div class="custimzed-product d-md-flex d-none justify-content-between">
                        <div class="total-c-prodtct d-flex">
                            <p class="total-c-product">
                                {{ count($products) }}
                            </p>
                            <p class="c-product-heading">
                                Customizable Products
                            </p>
                            <div type="button" class="icon-tooltip" data-toggle="tooltip" data-placement="right"
                                title="The power is in your hands! Each product featured here can be customized based on your choice of gemstone and its quality, carat weight and metal.">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M12.3333 4.83333C16.4667 4.83333 19.8333 8.2 19.8333 12.3333C19.8333 16.4667 16.4667 19.8333 12.3333 19.8333C8.2 19.8333 4.83333 16.4667 4.83333 12.3333C4.83333 8.2 8.2 4.83333 12.3333 4.83333ZM12.3333 4C7.73333 4 4 7.73333 4 12.3333C4 16.9333 7.73333 20.6667 12.3333 20.6667C16.9333 20.6667 20.6667 16.9333 20.6667 12.3333C20.6667 7.73333 16.9333 4 12.3333 4Z"
                                        fill="#6F6F79" />
                                    <path
                                        d="M12.28 13.8252C12.0467 13.8252 11.8634 13.6418 11.8634 13.4085C11.8634 12.7918 12.08 12.2585 12.4884 11.8668C12.6634 11.7002 12.8384 11.5918 13.0217 11.4752C13.1217 11.4085 13.23 11.3502 13.33 11.2668C13.63 11.0335 13.805 10.6752 13.8217 10.2585C13.8467 9.7835 13.6717 9.32517 13.355 9.01684C12.7467 8.44184 11.68 8.4835 11.13 9.1085C10.9967 9.2585 10.8967 9.4335 10.83 9.61684C10.755 9.8335 10.5134 9.95017 10.2967 9.87517C10.08 9.80017 9.96338 9.5585 10.0384 9.34184C10.1384 9.05017 10.2967 8.7835 10.4967 8.55017C11.355 7.5835 12.9967 7.51684 13.9217 8.4085C14.4134 8.87517 14.68 9.5835 14.6467 10.2918C14.6134 10.9585 14.3217 11.5335 13.83 11.9168C13.7134 12.0085 13.58 12.0918 13.455 12.1752C13.305 12.2668 13.1634 12.3585 13.055 12.4585C12.755 12.7502 12.6884 13.1252 12.6884 13.4002C12.6884 13.6335 12.505 13.8168 12.2717 13.8168L12.28 13.8252Z"
                                        fill="#6F6F79" />
                                    <path
                                        d="M12.3323 15.1169C11.949 15.1169 11.6406 15.4253 11.6406 15.8086C11.6406 16.1919 11.949 16.5003 12.3323 16.5003C12.7156 16.5003 13.024 16.1919 13.024 15.8086C13.024 15.4253 12.7156 15.1169 12.3323 15.1169Z"
                                        fill="#6F6F79" />
                                </svg>
                            </div>
                        </div>
                        <div class="c-seller-dropdown">
                            <div class="sory-by-filter d-flex">
                                <div class="filter-heading">
                                    <span class="font-13">Sort by:</span>
                                </div>
                                <select>
                                    <option value="3">Three</option>
                                    <option value="1">One</option>
                                    <option value="0">Zero</option>
                                    <option value="2">Two</option>
                                    <option value="8">Eight</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row d-md-none d-flex">
                        <div class="col-6 sortby-btn-wrap">
                            <button class="btn btn-outline-dark sorting-btn w-100 rounded-0" type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#sortbyclick"
                                aria-controls="offcanvasBottom"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-sort-down" viewBox="0 0 16 16">
                                    <path
                                        d="M3.5 2.5a.5.5 0 0 0-1 0v8.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L3.5 11.293zm3.5 1a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5M7.5 6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1z" />
                                </svg> sort by</button>

                            <div class="offcanvas offcanvas-bottom" tabindex="-1" id="sortbyclick"
                                aria-labelledby="offcanvasBottomLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasBottomLabel">Sort By</h5>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body small filter-popup">
                                    <ul>
                                        <li>
                                            Best Seller <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-check2"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                                            </svg>
                                        </li>
                                        <li>Arrives Earliest</li>
                                        <li>Price Low To High</li>
                                        <li>Price High To Low</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 filter-btn-wrap">
                            <button class="btn btn-outline-dark sorting-btn  w-100 rounded-0" type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#filterclick"
                                aria-controls="offcanvasBottom"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-filter" viewBox="0 0 16 16">
                                    <path
                                        d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5" />
                                </svg> Filter</button>

                            <div class="offcanvas w-100 offcanvas-start d-flex flex-column" tabindex="-1"
                                id="filterclick" aria-labelledby="offcanvasBottomLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasBottomLabel">Filters <span>(4214
                                            Products)</span></h5>
                                    <a href="#" class="text-reset">CLEAR ALL</a>
                                </div>
                                <div class="offcanvas-body small">
                                    <div class="my-account-inner">
                                        <section class="section-container d-flex p-0 gap-3">
                                            <ul class="indexes index-left  d-md-block">
                                                <li data-index="0">Metal Type</li>
                                                <li data-index="1">Gemstone</li>
                                                <li data-index="2">Gemstone Shape</li>
                                                <li data-index="3">Jewelry Styles</li>
                                                <li data-index="4">Carat Weight</li>
                                                
                                            </ul>
                                            <ul class="tabs index-right">
                                                <li class="tab">
                                                    <article class="tab-content">
                                                    </article>
                                                    <div class="checkbox-product-item">
                                                        <div
                                                            class="d-flex gap-2 align-items-center justify-content-between">

                                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                                <img src="./images/14k-white-gold.webp" alt="">
                                                                <p class="d-flex mb-0">White Gold <span
                                                                        class="product-qty">(5555)</span></p>
                                                            </div>
                                                            <label class="checkbox-wrap mb-0">
                                                                <input type="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="checkbox-product-item">
                                                        <div
                                                            class="d-flex gap-2 align-items-center justify-content-between">

                                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                                <img src="./images/14k-white-gold.webp" alt="">
                                                                <p class="d-flex mb-0">White Gold <span
                                                                        class="product-qty">(5555)</span></p>
                                                            </div>
                                                            <label class="checkbox-wrap mb-0">
                                                                <input type="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="checkbox-product-item">
                                                        <div
                                                            class="d-flex gap-2 align-items-center justify-content-between">

                                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                                <img src="./images/14k-white-gold.webp" alt="">
                                                                <p class="d-flex mb-0">White Gold <span
                                                                        class="product-qty">(5555)</span></p>
                                                            </div>
                                                            <label class="checkbox-wrap mb-0">
                                                                <input type="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="checkbox-product-item">
                                                        <div
                                                            class="d-flex gap-2 align-items-center justify-content-between">

                                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                                <img src="./images/14k-white-gold.webp" alt="">
                                                                <p class="d-flex mb-0">White Gold <span
                                                                        class="product-qty">(5555)</span></p>
                                                            </div>
                                                            <label class="checkbox-wrap mb-0">
                                                                <input type="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="checkbox-product-item">
                                                        <div
                                                            class="d-flex gap-2 align-items-center justify-content-between">

                                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                                <img src="./images/14k-white-gold.webp" alt="">
                                                                <p class="d-flex mb-0">White Gold <span
                                                                        class="product-qty">(5555)</span></p>
                                                            </div>
                                                            <label class="checkbox-wrap mb-0">
                                                                <input type="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="checkbox-product-item">
                                                        <div
                                                            class="d-flex gap-2 align-items-center justify-content-between">

                                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                                <img src="./images/14k-white-gold.webp" alt="">
                                                                <p class="d-flex mb-0">White Gold <span
                                                                        class="product-qty">(5555)</span></p>
                                                            </div>
                                                            <label class="checkbox-wrap mb-0">
                                                                <input type="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="checkbox-product-item">
                                                        <div
                                                            class="d-flex gap-2 align-items-center justify-content-between">

                                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                                <img src="./images/14k-white-gold.webp" alt="">
                                                                <p class="d-flex mb-0">White Gold <span
                                                                        class="product-qty">(5555)</span></p>
                                                            </div>
                                                            <label class="checkbox-wrap mb-0">
                                                                <input type="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="checkbox-product-item">
                                                        <div
                                                            class="d-flex gap-2 align-items-center justify-content-between">

                                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                                <img src="./images/14k-white-gold.webp" alt="">
                                                                <p class="d-flex mb-0">White Gold <span
                                                                        class="product-qty">(5555)</span></p>
                                                            </div>
                                                            <label class="checkbox-wrap mb-0">
                                                                <input type="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="checkbox-product-item">
                                                        <div
                                                            class="d-flex gap-2 align-items-center justify-content-between">

                                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                                <img src="./images/14k-white-gold.webp" alt="">
                                                                <p class="d-flex mb-0">White Gold <span
                                                                        class="product-qty">(5555)</span></p>
                                                            </div>
                                                            <label class="checkbox-wrap mb-0">
                                                                <input type="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="checkbox-product-item">
                                                        <div
                                                            class="d-flex gap-2 align-items-center justify-content-between">

                                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                                <img src="./images/14k-white-gold.webp" alt="">
                                                                <p class="d-flex mb-0">White Gold <span
                                                                        class="product-qty">(5555)</span></p>
                                                            </div>
                                                            <label class="checkbox-wrap mb-0">
                                                                <input type="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li class="tab">
                                                    <article class="tab-content">
                                                    </article>
                                                    <div class="checkbox-product-item">
                                                        <div
                                                            class="d-flex gap-2 align-items-center justify-content-between">

                                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                                <img src="./images/14k-white-gold.webp" alt="">
                                                                <p class="d-flex mb-0">White Gold <span
                                                                        class="product-qty">(5555)</span></p>
                                                            </div>
                                                            <label class="checkbox-wrap mb-0">
                                                                <input type="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="checkbox-product-item">
                                                        <div
                                                            class="d-flex gap-2 align-items-center justify-content-between">

                                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                                <img src="./images/14k-white-gold.webp" alt="">
                                                                <p class="d-flex mb-0">White Gold <span
                                                                        class="product-qty">(5555)</span></p>
                                                            </div>
                                                            <label class="checkbox-wrap mb-0">
                                                                <input type="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="checkbox-product-item">
                                                        <div
                                                            class="d-flex gap-2 align-items-center justify-content-between">

                                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                                <img src="./images/14k-white-gold.webp" alt="">
                                                                <p class="d-flex mb-0">White Gold <span
                                                                        class="product-qty">(5555)</span></p>
                                                            </div>
                                                            <label class="checkbox-wrap mb-0">
                                                                <input type="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="checkbox-product-item">
                                                        <div
                                                            class="d-flex gap-2 align-items-center justify-content-between">

                                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                                <img src="./images/14k-white-gold.webp" alt="">
                                                                <p class="d-flex mb-0">White Gold <span
                                                                        class="product-qty">(5555)</span></p>
                                                            </div>
                                                            <label class="checkbox-wrap mb-0">
                                                                <input type="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="checkbox-product-item">
                                                        <div
                                                            class="d-flex gap-2 align-items-center justify-content-between">

                                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                                <img src="./images/14k-white-gold.webp" alt="">
                                                                <p class="d-flex mb-0">White Gold <span
                                                                        class="product-qty">(5555)</span></p>
                                                            </div>
                                                            <label class="checkbox-wrap mb-0">
                                                                <input type="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="checkbox-product-item">
                                                        <div
                                                            class="d-flex gap-2 align-items-center justify-content-between">

                                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                                <img src="./images/14k-white-gold.webp" alt="">
                                                                <p class="d-flex mb-0">White Gold <span
                                                                        class="product-qty">(5555)</span></p>
                                                            </div>
                                                            <label class="checkbox-wrap mb-0">
                                                                <input type="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="checkbox-product-item">
                                                        <div
                                                            class="d-flex gap-2 align-items-center justify-content-between">

                                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                                <img src="./images/14k-white-gold.webp" alt="">
                                                                <p class="d-flex mb-0">White Gold <span
                                                                        class="product-qty">(5555)</span></p>
                                                            </div>
                                                            <label class="checkbox-wrap mb-0">
                                                                <input type="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="checkbox-product-item">
                                                        <div
                                                            class="d-flex gap-2 align-items-center justify-content-between">

                                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                                <img src="./images/14k-white-gold.webp" alt="">
                                                                <p class="d-flex mb-0">White Gold <span
                                                                        class="product-qty">(5555)</span></p>
                                                            </div>
                                                            <label class="checkbox-wrap mb-0">
                                                                <input type="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="checkbox-product-item">
                                                        <div
                                                            class="d-flex gap-2 align-items-center justify-content-between">

                                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                                <img src="./images/14k-white-gold.webp" alt="">
                                                                <p class="d-flex mb-0">White Gold <span
                                                                        class="product-qty">(5555)</span></p>
                                                            </div>
                                                            <label class="checkbox-wrap mb-0">
                                                                <input type="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="checkbox-product-item">
                                                        <div
                                                            class="d-flex gap-2 align-items-center justify-content-between">

                                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                                <img src="./images/14k-white-gold.webp" alt="">
                                                                <p class="d-flex mb-0">White Gold <span
                                                                        class="product-qty">(5555)</span></p>
                                                            </div>
                                                            <label class="checkbox-wrap mb-0">
                                                                <input type="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li class="tab">
                                                    <article class="tab-content">
                                                    </article>
                                                    <div class="checkbox-product-item">
                                                        <div
                                                            class="d-flex gap-2 align-items-center justify-content-between">

                                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                                <img src="./images/14k-white-gold.webp" alt="">
                                                                <p class="d-flex mb-0">White Gold <span
                                                                        class="product-qty">(5555)</span></p>
                                                            </div>
                                                            <label class="checkbox-wrap mb-0">
                                                                <input type="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="checkbox-product-item">
                                                        <div
                                                            class="d-flex gap-2 align-items-center justify-content-between">

                                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                                <img src="./images/14k-white-gold.webp" alt="">
                                                                <p class="d-flex mb-0">White Gold <span
                                                                        class="product-qty">(5555)</span></p>
                                                            </div>
                                                            <label class="checkbox-wrap mb-0">
                                                                <input type="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="checkbox-product-item">
                                                        <div
                                                            class="d-flex gap-2 align-items-center justify-content-between">

                                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                                <img src="./images/14k-white-gold.webp" alt="">
                                                                <p class="d-flex mb-0">White Gold <span
                                                                        class="product-qty">(5555)</span></p>
                                                            </div>
                                                            <label class="checkbox-wrap mb-0">
                                                                <input type="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="checkbox-product-item">
                                                        <div
                                                            class="d-flex gap-2 align-items-center justify-content-between">

                                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                                <img src="./images/14k-white-gold.webp" alt="">
                                                                <p class="d-flex mb-0">White Gold <span
                                                                        class="product-qty">(5555)</span></p>
                                                            </div>
                                                            <label class="checkbox-wrap mb-0">
                                                                <input type="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="checkbox-product-item">
                                                        <div
                                                            class="d-flex gap-2 align-items-center justify-content-between">

                                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                                <img src="./images/14k-white-gold.webp" alt="">
                                                                <p class="d-flex mb-0">White Gold <span
                                                                        class="product-qty">(5555)</span></p>
                                                            </div>
                                                            <label class="checkbox-wrap mb-0">
                                                                <input type="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="checkbox-product-item">
                                                        <div
                                                            class="d-flex gap-2 align-items-center justify-content-between">

                                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                                <img src="./images/14k-white-gold.webp" alt="">
                                                                <p class="d-flex mb-0">White Gold <span
                                                                        class="product-qty">(5555)</span></p>
                                                            </div>
                                                            <label class="checkbox-wrap mb-0">
                                                                <input type="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="checkbox-product-item">
                                                        <div
                                                            class="d-flex gap-2 align-items-center justify-content-between">

                                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                                <img src="./images/14k-white-gold.webp" alt="">
                                                                <p class="d-flex mb-0">White Gold <span
                                                                        class="product-qty">(5555)</span></p>
                                                            </div>
                                                            <label class="checkbox-wrap mb-0">
                                                                <input type="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="checkbox-product-item">
                                                        <div
                                                            class="d-flex gap-2 align-items-center justify-content-between">

                                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                                <img src="./images/14k-white-gold.webp" alt="">
                                                                <p class="d-flex mb-0">White Gold <span
                                                                        class="product-qty">(5555)</span></p>
                                                            </div>
                                                            <label class="checkbox-wrap mb-0">
                                                                <input type="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="checkbox-product-item">
                                                        <div
                                                            class="d-flex gap-2 align-items-center justify-content-between">

                                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                                <img src="./images/14k-white-gold.webp" alt="">
                                                                <p class="d-flex mb-0">White Gold <span
                                                                        class="product-qty">(5555)</span></p>
                                                            </div>
                                                            <label class="checkbox-wrap mb-0">
                                                                <input type="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="checkbox-product-item">
                                                        <div
                                                            class="d-flex gap-2 align-items-center justify-content-between">

                                                            <div class="product-type-wrap d-flex flex-1 gap-2">
                                                                <img src="./images/14k-white-gold.webp" alt="">
                                                                <p class="d-flex mb-0">White Gold <span
                                                                        class="product-qty">(5555)</span></p>
                                                            </div>
                                                            <label class="checkbox-wrap mb-0">
                                                                <input type="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                </li>
                                                
                                            </ul>
                                        </section>
                                    </div>
                                </div>
                                <div class="offcanvas-footer d-flex">
                                    <button class="btn btn-white text-dark btn-outline-dark rounded-0 w-100"
                                        type="button" data-bs-dismiss="offcanvas" aria-label="Close">Close</button>
                                    <button class="btn btn-dark text-white btn-outline-dark rounded-0 w-100"
                                        type="button">Apply</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="proct-type-main">
                        <div class="product-all-inner">
                            @foreach ($products as $product)
                                <div class="product-cat-box tabs_wrapper">
                                    <ul class="slider-tabs tabs align-items-center">
                                        <li class="tab-link current" id="tab-1">
                                            <img src="./images/slide-tab-1.webp" alt="">
                                        </li>
                                        <li class="tab-link" id="tab-2">
                                            <img src="./images/slide-tab-2.webp" alt="">
                                        </li>
                                        <li class="tab-link" id="tab-3">
                                            <img src="./images/slide-tab-3.webp" alt="">
                                        </li>
                                        <div class="more-prdt-btn">
                                            <button class="button-modal" type="button" data-bs-toggle="modal"
                                                data-bs-target="#MoreProduct">+15</button>

                                        </div>
                                    </ul>
                                    <div class="tabs_container">
                                        <div data-tab="tab-1" class="tab_content current">
                                            <div class="swiper catslider">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="prduct-image">
                                                            <a href="#">
                                                                <img class="rounded" src="storage/{{ $product->image }}" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="prduct-image">
                                                            <a href="#">
                                                                <img src="./images/slide-1.webp" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="prduct-image">
                                                            <a href="#">
                                                                <img src="./images/slide-1.webp" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-button-next swiper-btn"></div>
                                                <div class="swiper-button-prev swiper-btn"></div>
                                            </div>
                                            <div class="icon-box-popup d-flex justify-content-between px-2">
                                                <div class="similer-view">
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M15.7781 4.83333V18.9167H8.69481V4.83333H15.7781ZM16.3615 4H8.11148C7.96981 4 7.86148 4.10833 7.86148 4.25V19.5C7.86148 19.6417 7.96981 19.75 8.11148 19.75H16.3615C16.5031 19.75 16.6115 19.6417 16.6115 19.5V4.25C16.6115 4.10833 16.5031 4 16.3615 4Z"
                                                                fill="#161618" />
                                                            <path
                                                                d="M5.62815 17.6919C5.56149 17.6919 5.48649 17.6752 5.42815 17.6419C5.32815 17.5835 5.26149 17.5002 5.22815 17.3919L5.13649 17.0585L3.01149 8.65855C2.98649 8.55021 3.00315 8.43355 3.05315 8.34188C3.11149 8.25021 3.20315 8.17521 3.31149 8.15021L6.56982 7.32521C6.80315 7.26688 7.01982 7.40021 7.07815 7.62521C7.13649 7.85021 7.00315 8.07521 6.77815 8.13355L3.92815 8.85855L5.92815 16.7669L6.57815 16.6002C6.80315 16.5419 7.02815 16.6752 7.08649 16.9002C7.14482 17.1252 7.01149 17.3502 6.78649 17.4085L5.76149 17.6835C5.76149 17.6835 5.68649 17.7002 5.64482 17.7002L5.62815 17.6919Z"
                                                                fill="#161618" />
                                                            <path
                                                                d="M18.7698 17.6499C18.7698 17.6499 18.6948 17.6499 18.6531 17.6333L17.6281 17.3583C17.4031 17.2999 17.2698 17.0749 17.3281 16.8499C17.3865 16.6249 17.6031 16.4916 17.8365 16.5499L18.4865 16.7166L20.4865 8.80825L17.6365 8.08325C17.4115 8.02492 17.2781 7.79992 17.3365 7.57492C17.3948 7.34992 17.6115 7.21659 17.8448 7.27492L21.1031 8.09992C21.2115 8.12492 21.3031 8.19992 21.3615 8.29159C21.4198 8.39159 21.4365 8.49992 21.4031 8.60825L21.3198 8.92492L19.1865 17.3416C19.1531 17.4499 19.0865 17.5416 18.9865 17.5916C18.9198 17.6249 18.8531 17.6416 18.7865 17.6416L18.7698 17.6499Z"
                                                                fill="#161618" />
                                                        </svg>
                                                    </a>
                                                </div>
                                                <div class="wishlist-view">
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M7.74001 3.50001C8.80001 3.50001 9.80001 3.93001 10.71 4.77001C10.85 4.90001 10.98 5.03001 11.12 5.16001L11.33 5.37001L12.06 6.08001L12.75 5.34001L12.81 5.27001L13 5.06001C13.8 4.18001 14.73 3.68001 15.82 3.56001C16.02 3.54001 16.22 3.52001 16.41 3.52001C17.51 3.52001 18.48 3.91001 19.31 4.68001C20.58 5.87001 21.12 7.32001 20.96 9.11001C20.86 10.27 20.39 11.31 19.56 12.2C17.7 14.21 15.83 16.22 13.97 18.23L11.99 20.36L9.92001 18.13C8.08001 16.15 6.25001 14.18 4.42001 12.2C3.60001 11.31 3.14001 10.29 3.01001 9.08001C3.01001 9.02001 2.99001 8.97001 2.98001 8.90001V8.21001C3.00001 8.12001 3.01001 8.02001 3.02001 7.93001C3.05001 7.70001 3.09001 7.48001 3.14001 7.30001C3.67001 5.33001 4.77001 4.14001 6.51001 3.67001C6.92001 3.56001 7.33001 3.50001 7.72001 3.50001M7.72001 2.50001C7.24001 2.50001 6.75001 2.57001 6.25001 2.70001C4.06001 3.29001 2.76001 4.84001 2.18001 7.03001C2.08001 7.39001 2.05001 7.76001 1.99001 8.12001V9.00001C2.00001 9.06001 2.02001 9.12001 2.02001 9.17001C2.17001 10.59 2.73001 11.83 3.69001 12.87C6.24001 15.63 8.81001 18.38 11.36 21.14C11.58 21.37 11.78 21.49 11.99 21.49C12.2 21.49 12.4 21.37 12.62 21.14C15.18 18.38 17.74 15.63 20.29 12.87C21.25 11.84 21.82 10.61 21.95 9.19001C22.14 7.12001 21.49 5.34001 19.99 3.93001C18.96 2.97001 17.75 2.50001 16.41 2.50001C16.18 2.50001 15.94 2.51001 15.7 2.54001C14.33 2.70001 13.19 3.34001 12.26 4.37001C12.17 4.47001 12.08 4.56001 12.01 4.64001C11.79 4.42001 11.58 4.22001 11.37 4.02001C10.28 3.02001 9.06001 2.49001 7.72001 2.49001V2.50001Z"
                                                                fill="#0D0D0E" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="desc-cat">
                                                <p>{{ $product->name }}</p>
                                            </div>
                                            <div
                                                class="slider-tab-pirce d-flex justify-content-between align-items-center">
                                                <div class="price-wwrap-prdt">
                                                    <span>${{ $product->price }}</span>
                                                
                                                </div>

                                            </div>
                                        </div>
                                        <div data-tab="tab-2" class="tab_content">
                                            <div class="swiper catslider">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="prduct-image">
                                                            <a href="#">
                                                                <img src="./images/slide-2.webp" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="prduct-image">
                                                            <a href="#">
                                                                <img src="./images//slide-2.webp" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="prduct-image">
                                                            <a href="#">
                                                                <img src="./images//slide-2.webp" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-button-next swiper-btn"></div>
                                                <div class="swiper-button-prev swiper-btn"></div>
                                            </div>
                                            <div class="icon-box-popup d-flex justify-content-between px-2">
                                                <div class="similer-view">
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M15.7781 4.83333V18.9167H8.69481V4.83333H15.7781ZM16.3615 4H8.11148C7.96981 4 7.86148 4.10833 7.86148 4.25V19.5C7.86148 19.6417 7.96981 19.75 8.11148 19.75H16.3615C16.5031 19.75 16.6115 19.6417 16.6115 19.5V4.25C16.6115 4.10833 16.5031 4 16.3615 4Z"
                                                                fill="#161618" />
                                                            <path
                                                                d="M5.62815 17.6919C5.56149 17.6919 5.48649 17.6752 5.42815 17.6419C5.32815 17.5835 5.26149 17.5002 5.22815 17.3919L5.13649 17.0585L3.01149 8.65855C2.98649 8.55021 3.00315 8.43355 3.05315 8.34188C3.11149 8.25021 3.20315 8.17521 3.31149 8.15021L6.56982 7.32521C6.80315 7.26688 7.01982 7.40021 7.07815 7.62521C7.13649 7.85021 7.00315 8.07521 6.77815 8.13355L3.92815 8.85855L5.92815 16.7669L6.57815 16.6002C6.80315 16.5419 7.02815 16.6752 7.08649 16.9002C7.14482 17.1252 7.01149 17.3502 6.78649 17.4085L5.76149 17.6835C5.76149 17.6835 5.68649 17.7002 5.64482 17.7002L5.62815 17.6919Z"
                                                                fill="#161618" />
                                                            <path
                                                                d="M18.7698 17.6499C18.7698 17.6499 18.6948 17.6499 18.6531 17.6333L17.6281 17.3583C17.4031 17.2999 17.2698 17.0749 17.3281 16.8499C17.3865 16.6249 17.6031 16.4916 17.8365 16.5499L18.4865 16.7166L20.4865 8.80825L17.6365 8.08325C17.4115 8.02492 17.2781 7.79992 17.3365 7.57492C17.3948 7.34992 17.6115 7.21659 17.8448 7.27492L21.1031 8.09992C21.2115 8.12492 21.3031 8.19992 21.3615 8.29159C21.4198 8.39159 21.4365 8.49992 21.4031 8.60825L21.3198 8.92492L19.1865 17.3416C19.1531 17.4499 19.0865 17.5416 18.9865 17.5916C18.9198 17.6249 18.8531 17.6416 18.7865 17.6416L18.7698 17.6499Z"
                                                                fill="#161618" />
                                                        </svg>
                                                    </a>
                                                </div>
                                                <div class="wishlist-view">
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M7.74001 3.50001C8.80001 3.50001 9.80001 3.93001 10.71 4.77001C10.85 4.90001 10.98 5.03001 11.12 5.16001L11.33 5.37001L12.06 6.08001L12.75 5.34001L12.81 5.27001L13 5.06001C13.8 4.18001 14.73 3.68001 15.82 3.56001C16.02 3.54001 16.22 3.52001 16.41 3.52001C17.51 3.52001 18.48 3.91001 19.31 4.68001C20.58 5.87001 21.12 7.32001 20.96 9.11001C20.86 10.27 20.39 11.31 19.56 12.2C17.7 14.21 15.83 16.22 13.97 18.23L11.99 20.36L9.92001 18.13C8.08001 16.15 6.25001 14.18 4.42001 12.2C3.60001 11.31 3.14001 10.29 3.01001 9.08001C3.01001 9.02001 2.99001 8.97001 2.98001 8.90001V8.21001C3.00001 8.12001 3.01001 8.02001 3.02001 7.93001C3.05001 7.70001 3.09001 7.48001 3.14001 7.30001C3.67001 5.33001 4.77001 4.14001 6.51001 3.67001C6.92001 3.56001 7.33001 3.50001 7.72001 3.50001M7.72001 2.50001C7.24001 2.50001 6.75001 2.57001 6.25001 2.70001C4.06001 3.29001 2.76001 4.84001 2.18001 7.03001C2.08001 7.39001 2.05001 7.76001 1.99001 8.12001V9.00001C2.00001 9.06001 2.02001 9.12001 2.02001 9.17001C2.17001 10.59 2.73001 11.83 3.69001 12.87C6.24001 15.63 8.81001 18.38 11.36 21.14C11.58 21.37 11.78 21.49 11.99 21.49C12.2 21.49 12.4 21.37 12.62 21.14C15.18 18.38 17.74 15.63 20.29 12.87C21.25 11.84 21.82 10.61 21.95 9.19001C22.14 7.12001 21.49 5.34001 19.99 3.93001C18.96 2.97001 17.75 2.50001 16.41 2.50001C16.18 2.50001 15.94 2.51001 15.7 2.54001C14.33 2.70001 13.19 3.34001 12.26 4.37001C12.17 4.47001 12.08 4.56001 12.01 4.64001C11.79 4.42001 11.58 4.22001 11.37 4.02001C10.28 3.02001 9.06001 2.49001 7.72001 2.49001V2.50001Z"
                                                                fill="#0D0D0E" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="desc-cat">
                                                <p>Aquamarine Infinity Heart Pendant with Diamonds22</p>
                                            </div>
                                            <div
                                                class="slider-tab-pirce d-flex justify-content-between align-items-center">
                                                <div class="price-wwrap-prdt">
                                                    <span>$222</span>
                                                
                                                </div>

                                            </div>
                                        </div>
                                        <div data-tab="tab-3" class="tab_content">
                                            <div class="swiper catslider">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="prduct-image">
                                                            <a href="#">
                                                                <img src="./images/slide-3.webp" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="prduct-image">
                                                            <a href="#">
                                                                <img src="./images/slide-3.webp" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="prduct-image">
                                                            <a href="#">
                                                                <img src="./images/slide-3.webp" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-button-next swiper-btn"></div>
                                                <div class="swiper-button-prev swiper-btn"></div>
                                            </div>
                                            <div class="icon-box-popup d-flex justify-content-between px-2">
                                                <div class="similer-view">
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M15.7781 4.83333V18.9167H8.69481V4.83333H15.7781ZM16.3615 4H8.11148C7.96981 4 7.86148 4.10833 7.86148 4.25V19.5C7.86148 19.6417 7.96981 19.75 8.11148 19.75H16.3615C16.5031 19.75 16.6115 19.6417 16.6115 19.5V4.25C16.6115 4.10833 16.5031 4 16.3615 4Z"
                                                                fill="#161618" />
                                                            <path
                                                                d="M5.62815 17.6919C5.56149 17.6919 5.48649 17.6752 5.42815 17.6419C5.32815 17.5835 5.26149 17.5002 5.22815 17.3919L5.13649 17.0585L3.01149 8.65855C2.98649 8.55021 3.00315 8.43355 3.05315 8.34188C3.11149 8.25021 3.20315 8.17521 3.31149 8.15021L6.56982 7.32521C6.80315 7.26688 7.01982 7.40021 7.07815 7.62521C7.13649 7.85021 7.00315 8.07521 6.77815 8.13355L3.92815 8.85855L5.92815 16.7669L6.57815 16.6002C6.80315 16.5419 7.02815 16.6752 7.08649 16.9002C7.14482 17.1252 7.01149 17.3502 6.78649 17.4085L5.76149 17.6835C5.76149 17.6835 5.68649 17.7002 5.64482 17.7002L5.62815 17.6919Z"
                                                                fill="#161618" />
                                                            <path
                                                                d="M18.7698 17.6499C18.7698 17.6499 18.6948 17.6499 18.6531 17.6333L17.6281 17.3583C17.4031 17.2999 17.2698 17.0749 17.3281 16.8499C17.3865 16.6249 17.6031 16.4916 17.8365 16.5499L18.4865 16.7166L20.4865 8.80825L17.6365 8.08325C17.4115 8.02492 17.2781 7.79992 17.3365 7.57492C17.3948 7.34992 17.6115 7.21659 17.8448 7.27492L21.1031 8.09992C21.2115 8.12492 21.3031 8.19992 21.3615 8.29159C21.4198 8.39159 21.4365 8.49992 21.4031 8.60825L21.3198 8.92492L19.1865 17.3416C19.1531 17.4499 19.0865 17.5416 18.9865 17.5916C18.9198 17.6249 18.8531 17.6416 18.7865 17.6416L18.7698 17.6499Z"
                                                                fill="#161618" />
                                                        </svg>
                                                    </a>
                                                </div>
                                                <div class="wishlist-view">
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M7.74001 3.50001C8.80001 3.50001 9.80001 3.93001 10.71 4.77001C10.85 4.90001 10.98 5.03001 11.12 5.16001L11.33 5.37001L12.06 6.08001L12.75 5.34001L12.81 5.27001L13 5.06001C13.8 4.18001 14.73 3.68001 15.82 3.56001C16.02 3.54001 16.22 3.52001 16.41 3.52001C17.51 3.52001 18.48 3.91001 19.31 4.68001C20.58 5.87001 21.12 7.32001 20.96 9.11001C20.86 10.27 20.39 11.31 19.56 12.2C17.7 14.21 15.83 16.22 13.97 18.23L11.99 20.36L9.92001 18.13C8.08001 16.15 6.25001 14.18 4.42001 12.2C3.60001 11.31 3.14001 10.29 3.01001 9.08001C3.01001 9.02001 2.99001 8.97001 2.98001 8.90001V8.21001C3.00001 8.12001 3.01001 8.02001 3.02001 7.93001C3.05001 7.70001 3.09001 7.48001 3.14001 7.30001C3.67001 5.33001 4.77001 4.14001 6.51001 3.67001C6.92001 3.56001 7.33001 3.50001 7.72001 3.50001M7.72001 2.50001C7.24001 2.50001 6.75001 2.57001 6.25001 2.70001C4.06001 3.29001 2.76001 4.84001 2.18001 7.03001C2.08001 7.39001 2.05001 7.76001 1.99001 8.12001V9.00001C2.00001 9.06001 2.02001 9.12001 2.02001 9.17001C2.17001 10.59 2.73001 11.83 3.69001 12.87C6.24001 15.63 8.81001 18.38 11.36 21.14C11.58 21.37 11.78 21.49 11.99 21.49C12.2 21.49 12.4 21.37 12.62 21.14C15.18 18.38 17.74 15.63 20.29 12.87C21.25 11.84 21.82 10.61 21.95 9.19001C22.14 7.12001 21.49 5.34001 19.99 3.93001C18.96 2.97001 17.75 2.50001 16.41 2.50001C16.18 2.50001 15.94 2.51001 15.7 2.54001C14.33 2.70001 13.19 3.34001 12.26 4.37001C12.17 4.47001 12.08 4.56001 12.01 4.64001C11.79 4.42001 11.58 4.22001 11.37 4.02001C10.28 3.02001 9.06001 2.49001 7.72001 2.49001V2.50001Z"
                                                                fill="#0D0D0E" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="desc-cat">
                                                <p>Aquamarine Infinity Heart Pendant with Diamonds3</p>
                                            </div>
                                            <div
                                                class="slider-tab-pirce d-flex justify-content-between align-items-center">
                                                <div class="price-wwrap-prdt">
                                                    <span>$333</span>
                                                    -
                                                    <span>$333</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{-- <div class="product-cat-box tabs_wrapper">
                                <ul class="slider-tabs tabs align-items-center">
                                    <li class="tab-link current" id="tab-1">
                                        <img src="./images/slide-tab-1.webp" alt="">
                                    </li>
                                    <li class="tab-link" id="tab-2">
                                        <img src="./images/slide-tab-2.webp" alt="">
                                    </li>
                                    <li class="tab-link" id="tab-3">
                                        <img src="./images/slide-tab-3.webp" alt="">
                                    </li>
                                    <div class="more-prdt-btn">
                                        <button class="button-modal" type="button" data-bs-toggle="modal"
                                            data-bs-target="#MoreProduct">+15</button>

                                    </div>
                                </ul>
                                <div class="tabs_container">
                                    <div data-tab="tab-1" class="tab_content current">
                                        <div class="swiper catslider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-1.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-1.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-1.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next swiper-btn"></div>
                                            <div class="swiper-button-prev swiper-btn"></div>
                                        </div>
                                        <div class="icon-box-popup d-flex justify-content-between px-2">
                                            <div class="similer-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M15.7781 4.83333V18.9167H8.69481V4.83333H15.7781ZM16.3615 4H8.11148C7.96981 4 7.86148 4.10833 7.86148 4.25V19.5C7.86148 19.6417 7.96981 19.75 8.11148 19.75H16.3615C16.5031 19.75 16.6115 19.6417 16.6115 19.5V4.25C16.6115 4.10833 16.5031 4 16.3615 4Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M5.62815 17.6919C5.56149 17.6919 5.48649 17.6752 5.42815 17.6419C5.32815 17.5835 5.26149 17.5002 5.22815 17.3919L5.13649 17.0585L3.01149 8.65855C2.98649 8.55021 3.00315 8.43355 3.05315 8.34188C3.11149 8.25021 3.20315 8.17521 3.31149 8.15021L6.56982 7.32521C6.80315 7.26688 7.01982 7.40021 7.07815 7.62521C7.13649 7.85021 7.00315 8.07521 6.77815 8.13355L3.92815 8.85855L5.92815 16.7669L6.57815 16.6002C6.80315 16.5419 7.02815 16.6752 7.08649 16.9002C7.14482 17.1252 7.01149 17.3502 6.78649 17.4085L5.76149 17.6835C5.76149 17.6835 5.68649 17.7002 5.64482 17.7002L5.62815 17.6919Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M18.7698 17.6499C18.7698 17.6499 18.6948 17.6499 18.6531 17.6333L17.6281 17.3583C17.4031 17.2999 17.2698 17.0749 17.3281 16.8499C17.3865 16.6249 17.6031 16.4916 17.8365 16.5499L18.4865 16.7166L20.4865 8.80825L17.6365 8.08325C17.4115 8.02492 17.2781 7.79992 17.3365 7.57492C17.3948 7.34992 17.6115 7.21659 17.8448 7.27492L21.1031 8.09992C21.2115 8.12492 21.3031 8.19992 21.3615 8.29159C21.4198 8.39159 21.4365 8.49992 21.4031 8.60825L21.3198 8.92492L19.1865 17.3416C19.1531 17.4499 19.0865 17.5416 18.9865 17.5916C18.9198 17.6249 18.8531 17.6416 18.7865 17.6416L18.7698 17.6499Z"
                                                            fill="#161618" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="wishlist-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M7.74001 3.50001C8.80001 3.50001 9.80001 3.93001 10.71 4.77001C10.85 4.90001 10.98 5.03001 11.12 5.16001L11.33 5.37001L12.06 6.08001L12.75 5.34001L12.81 5.27001L13 5.06001C13.8 4.18001 14.73 3.68001 15.82 3.56001C16.02 3.54001 16.22 3.52001 16.41 3.52001C17.51 3.52001 18.48 3.91001 19.31 4.68001C20.58 5.87001 21.12 7.32001 20.96 9.11001C20.86 10.27 20.39 11.31 19.56 12.2C17.7 14.21 15.83 16.22 13.97 18.23L11.99 20.36L9.92001 18.13C8.08001 16.15 6.25001 14.18 4.42001 12.2C3.60001 11.31 3.14001 10.29 3.01001 9.08001C3.01001 9.02001 2.99001 8.97001 2.98001 8.90001V8.21001C3.00001 8.12001 3.01001 8.02001 3.02001 7.93001C3.05001 7.70001 3.09001 7.48001 3.14001 7.30001C3.67001 5.33001 4.77001 4.14001 6.51001 3.67001C6.92001 3.56001 7.33001 3.50001 7.72001 3.50001M7.72001 2.50001C7.24001 2.50001 6.75001 2.57001 6.25001 2.70001C4.06001 3.29001 2.76001 4.84001 2.18001 7.03001C2.08001 7.39001 2.05001 7.76001 1.99001 8.12001V9.00001C2.00001 9.06001 2.02001 9.12001 2.02001 9.17001C2.17001 10.59 2.73001 11.83 3.69001 12.87C6.24001 15.63 8.81001 18.38 11.36 21.14C11.58 21.37 11.78 21.49 11.99 21.49C12.2 21.49 12.4 21.37 12.62 21.14C15.18 18.38 17.74 15.63 20.29 12.87C21.25 11.84 21.82 10.61 21.95 9.19001C22.14 7.12001 21.49 5.34001 19.99 3.93001C18.96 2.97001 17.75 2.50001 16.41 2.50001C16.18 2.50001 15.94 2.51001 15.7 2.54001C14.33 2.70001 13.19 3.34001 12.26 4.37001C12.17 4.47001 12.08 4.56001 12.01 4.64001C11.79 4.42001 11.58 4.22001 11.37 4.02001C10.28 3.02001 9.06001 2.49001 7.72001 2.49001V2.50001Z"
                                                            fill="#0D0D0E" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc-cat">
                                            <p>Aquamarine Infinity Heart Pendant with Diamonds</p>
                                        </div>
                                        <div
                                            class="slider-tab-pirce d-flex justify-content-between align-items-center">
                                            <div class="price-wwrap-prdt">
                                                <span>$111</span>
                                               
                                            </div>

                                        </div>
                                    </div>
                                    <div data-tab="tab-2" class="tab_content">
                                        <div class="swiper catslider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-2.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images//slide-2.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images//slide-2.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next swiper-btn"></div>
                                            <div class="swiper-button-prev swiper-btn"></div>
                                        </div>
                                        <div class="icon-box-popup d-flex justify-content-between px-2">
                                            <div class="similer-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M15.7781 4.83333V18.9167H8.69481V4.83333H15.7781ZM16.3615 4H8.11148C7.96981 4 7.86148 4.10833 7.86148 4.25V19.5C7.86148 19.6417 7.96981 19.75 8.11148 19.75H16.3615C16.5031 19.75 16.6115 19.6417 16.6115 19.5V4.25C16.6115 4.10833 16.5031 4 16.3615 4Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M5.62815 17.6919C5.56149 17.6919 5.48649 17.6752 5.42815 17.6419C5.32815 17.5835 5.26149 17.5002 5.22815 17.3919L5.13649 17.0585L3.01149 8.65855C2.98649 8.55021 3.00315 8.43355 3.05315 8.34188C3.11149 8.25021 3.20315 8.17521 3.31149 8.15021L6.56982 7.32521C6.80315 7.26688 7.01982 7.40021 7.07815 7.62521C7.13649 7.85021 7.00315 8.07521 6.77815 8.13355L3.92815 8.85855L5.92815 16.7669L6.57815 16.6002C6.80315 16.5419 7.02815 16.6752 7.08649 16.9002C7.14482 17.1252 7.01149 17.3502 6.78649 17.4085L5.76149 17.6835C5.76149 17.6835 5.68649 17.7002 5.64482 17.7002L5.62815 17.6919Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M18.7698 17.6499C18.7698 17.6499 18.6948 17.6499 18.6531 17.6333L17.6281 17.3583C17.4031 17.2999 17.2698 17.0749 17.3281 16.8499C17.3865 16.6249 17.6031 16.4916 17.8365 16.5499L18.4865 16.7166L20.4865 8.80825L17.6365 8.08325C17.4115 8.02492 17.2781 7.79992 17.3365 7.57492C17.3948 7.34992 17.6115 7.21659 17.8448 7.27492L21.1031 8.09992C21.2115 8.12492 21.3031 8.19992 21.3615 8.29159C21.4198 8.39159 21.4365 8.49992 21.4031 8.60825L21.3198 8.92492L19.1865 17.3416C19.1531 17.4499 19.0865 17.5416 18.9865 17.5916C18.9198 17.6249 18.8531 17.6416 18.7865 17.6416L18.7698 17.6499Z"
                                                            fill="#161618" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="wishlist-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M7.74001 3.50001C8.80001 3.50001 9.80001 3.93001 10.71 4.77001C10.85 4.90001 10.98 5.03001 11.12 5.16001L11.33 5.37001L12.06 6.08001L12.75 5.34001L12.81 5.27001L13 5.06001C13.8 4.18001 14.73 3.68001 15.82 3.56001C16.02 3.54001 16.22 3.52001 16.41 3.52001C17.51 3.52001 18.48 3.91001 19.31 4.68001C20.58 5.87001 21.12 7.32001 20.96 9.11001C20.86 10.27 20.39 11.31 19.56 12.2C17.7 14.21 15.83 16.22 13.97 18.23L11.99 20.36L9.92001 18.13C8.08001 16.15 6.25001 14.18 4.42001 12.2C3.60001 11.31 3.14001 10.29 3.01001 9.08001C3.01001 9.02001 2.99001 8.97001 2.98001 8.90001V8.21001C3.00001 8.12001 3.01001 8.02001 3.02001 7.93001C3.05001 7.70001 3.09001 7.48001 3.14001 7.30001C3.67001 5.33001 4.77001 4.14001 6.51001 3.67001C6.92001 3.56001 7.33001 3.50001 7.72001 3.50001M7.72001 2.50001C7.24001 2.50001 6.75001 2.57001 6.25001 2.70001C4.06001 3.29001 2.76001 4.84001 2.18001 7.03001C2.08001 7.39001 2.05001 7.76001 1.99001 8.12001V9.00001C2.00001 9.06001 2.02001 9.12001 2.02001 9.17001C2.17001 10.59 2.73001 11.83 3.69001 12.87C6.24001 15.63 8.81001 18.38 11.36 21.14C11.58 21.37 11.78 21.49 11.99 21.49C12.2 21.49 12.4 21.37 12.62 21.14C15.18 18.38 17.74 15.63 20.29 12.87C21.25 11.84 21.82 10.61 21.95 9.19001C22.14 7.12001 21.49 5.34001 19.99 3.93001C18.96 2.97001 17.75 2.50001 16.41 2.50001C16.18 2.50001 15.94 2.51001 15.7 2.54001C14.33 2.70001 13.19 3.34001 12.26 4.37001C12.17 4.47001 12.08 4.56001 12.01 4.64001C11.79 4.42001 11.58 4.22001 11.37 4.02001C10.28 3.02001 9.06001 2.49001 7.72001 2.49001V2.50001Z"
                                                            fill="#0D0D0E" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc-cat">
                                            <p>Aquamarine Infinity Heart Pendant with Diamonds22</p>
                                        </div>
                                        <div
                                            class="slider-tab-pirce d-flex justify-content-between align-items-center">
                                            <div class="price-wwrap-prdt">
                                                <span>$222</span>
                                               
                                            </div>

                                        </div>
                                    </div>
                                    <div data-tab="tab-3" class="tab_content">
                                        <div class="swiper catslider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-3.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-3.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-3.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next swiper-btn"></div>
                                            <div class="swiper-button-prev swiper-btn"></div>
                                        </div>
                                        <div class="icon-box-popup d-flex justify-content-between px-2">
                                            <div class="similer-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M15.7781 4.83333V18.9167H8.69481V4.83333H15.7781ZM16.3615 4H8.11148C7.96981 4 7.86148 4.10833 7.86148 4.25V19.5C7.86148 19.6417 7.96981 19.75 8.11148 19.75H16.3615C16.5031 19.75 16.6115 19.6417 16.6115 19.5V4.25C16.6115 4.10833 16.5031 4 16.3615 4Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M5.62815 17.6919C5.56149 17.6919 5.48649 17.6752 5.42815 17.6419C5.32815 17.5835 5.26149 17.5002 5.22815 17.3919L5.13649 17.0585L3.01149 8.65855C2.98649 8.55021 3.00315 8.43355 3.05315 8.34188C3.11149 8.25021 3.20315 8.17521 3.31149 8.15021L6.56982 7.32521C6.80315 7.26688 7.01982 7.40021 7.07815 7.62521C7.13649 7.85021 7.00315 8.07521 6.77815 8.13355L3.92815 8.85855L5.92815 16.7669L6.57815 16.6002C6.80315 16.5419 7.02815 16.6752 7.08649 16.9002C7.14482 17.1252 7.01149 17.3502 6.78649 17.4085L5.76149 17.6835C5.76149 17.6835 5.68649 17.7002 5.64482 17.7002L5.62815 17.6919Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M18.7698 17.6499C18.7698 17.6499 18.6948 17.6499 18.6531 17.6333L17.6281 17.3583C17.4031 17.2999 17.2698 17.0749 17.3281 16.8499C17.3865 16.6249 17.6031 16.4916 17.8365 16.5499L18.4865 16.7166L20.4865 8.80825L17.6365 8.08325C17.4115 8.02492 17.2781 7.79992 17.3365 7.57492C17.3948 7.34992 17.6115 7.21659 17.8448 7.27492L21.1031 8.09992C21.2115 8.12492 21.3031 8.19992 21.3615 8.29159C21.4198 8.39159 21.4365 8.49992 21.4031 8.60825L21.3198 8.92492L19.1865 17.3416C19.1531 17.4499 19.0865 17.5416 18.9865 17.5916C18.9198 17.6249 18.8531 17.6416 18.7865 17.6416L18.7698 17.6499Z"
                                                            fill="#161618" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="wishlist-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M7.74001 3.50001C8.80001 3.50001 9.80001 3.93001 10.71 4.77001C10.85 4.90001 10.98 5.03001 11.12 5.16001L11.33 5.37001L12.06 6.08001L12.75 5.34001L12.81 5.27001L13 5.06001C13.8 4.18001 14.73 3.68001 15.82 3.56001C16.02 3.54001 16.22 3.52001 16.41 3.52001C17.51 3.52001 18.48 3.91001 19.31 4.68001C20.58 5.87001 21.12 7.32001 20.96 9.11001C20.86 10.27 20.39 11.31 19.56 12.2C17.7 14.21 15.83 16.22 13.97 18.23L11.99 20.36L9.92001 18.13C8.08001 16.15 6.25001 14.18 4.42001 12.2C3.60001 11.31 3.14001 10.29 3.01001 9.08001C3.01001 9.02001 2.99001 8.97001 2.98001 8.90001V8.21001C3.00001 8.12001 3.01001 8.02001 3.02001 7.93001C3.05001 7.70001 3.09001 7.48001 3.14001 7.30001C3.67001 5.33001 4.77001 4.14001 6.51001 3.67001C6.92001 3.56001 7.33001 3.50001 7.72001 3.50001M7.72001 2.50001C7.24001 2.50001 6.75001 2.57001 6.25001 2.70001C4.06001 3.29001 2.76001 4.84001 2.18001 7.03001C2.08001 7.39001 2.05001 7.76001 1.99001 8.12001V9.00001C2.00001 9.06001 2.02001 9.12001 2.02001 9.17001C2.17001 10.59 2.73001 11.83 3.69001 12.87C6.24001 15.63 8.81001 18.38 11.36 21.14C11.58 21.37 11.78 21.49 11.99 21.49C12.2 21.49 12.4 21.37 12.62 21.14C15.18 18.38 17.74 15.63 20.29 12.87C21.25 11.84 21.82 10.61 21.95 9.19001C22.14 7.12001 21.49 5.34001 19.99 3.93001C18.96 2.97001 17.75 2.50001 16.41 2.50001C16.18 2.50001 15.94 2.51001 15.7 2.54001C14.33 2.70001 13.19 3.34001 12.26 4.37001C12.17 4.47001 12.08 4.56001 12.01 4.64001C11.79 4.42001 11.58 4.22001 11.37 4.02001C10.28 3.02001 9.06001 2.49001 7.72001 2.49001V2.50001Z"
                                                            fill="#0D0D0E" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc-cat">
                                            <p>Aquamarine Infinity Heart Pendant with Diamonds3</p>
                                        </div>
                                        <div
                                            class="slider-tab-pirce d-flex justify-content-between align-items-center">
                                            <div class="price-wwrap-prdt">
                                                <span>$333</span>
                                                -
                                                <span>$333</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cat-box tabs_wrapper">
                                <ul class="slider-tabs tabs align-items-center">
                                    <li class="tab-link current" id="tab-4">
                                        <img src="./images/slide-tab-1.webp" alt="">
                                    </li>
                                    <li class="tab-link" id="tab-5">
                                        <img src="./images/slide-tab-2.webp" alt="">
                                    </li>
                                    <li class="tab-link" id="tab-6">
                                        <img src="./images/slide-tab-3.webp" alt="">
                                    </li>
                                    <div class="more-prdt-btn">
                                        <button class="button-modal" type="button" data-bs-toggle="modal"
                                            data-bs-target="#MoreProduct">+15</button>

                                    </div>
                                </ul>
                                <div class="tabs_container">
                                    <div data-tab="tab-3" class="tab_content current">
                                        <div class="swiper catslider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-1.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-1.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-1.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next swiper-btn"></div>
                                            <div class="swiper-button-prev swiper-btn"></div>
                                        </div>
                                        <div class="icon-box-popup d-flex justify-content-between px-2">
                                            <div class="similer-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M15.7781 4.83333V18.9167H8.69481V4.83333H15.7781ZM16.3615 4H8.11148C7.96981 4 7.86148 4.10833 7.86148 4.25V19.5C7.86148 19.6417 7.96981 19.75 8.11148 19.75H16.3615C16.5031 19.75 16.6115 19.6417 16.6115 19.5V4.25C16.6115 4.10833 16.5031 4 16.3615 4Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M5.62815 17.6919C5.56149 17.6919 5.48649 17.6752 5.42815 17.6419C5.32815 17.5835 5.26149 17.5002 5.22815 17.3919L5.13649 17.0585L3.01149 8.65855C2.98649 8.55021 3.00315 8.43355 3.05315 8.34188C3.11149 8.25021 3.20315 8.17521 3.31149 8.15021L6.56982 7.32521C6.80315 7.26688 7.01982 7.40021 7.07815 7.62521C7.13649 7.85021 7.00315 8.07521 6.77815 8.13355L3.92815 8.85855L5.92815 16.7669L6.57815 16.6002C6.80315 16.5419 7.02815 16.6752 7.08649 16.9002C7.14482 17.1252 7.01149 17.3502 6.78649 17.4085L5.76149 17.6835C5.76149 17.6835 5.68649 17.7002 5.64482 17.7002L5.62815 17.6919Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M18.7698 17.6499C18.7698 17.6499 18.6948 17.6499 18.6531 17.6333L17.6281 17.3583C17.4031 17.2999 17.2698 17.0749 17.3281 16.8499C17.3865 16.6249 17.6031 16.4916 17.8365 16.5499L18.4865 16.7166L20.4865 8.80825L17.6365 8.08325C17.4115 8.02492 17.2781 7.79992 17.3365 7.57492C17.3948 7.34992 17.6115 7.21659 17.8448 7.27492L21.1031 8.09992C21.2115 8.12492 21.3031 8.19992 21.3615 8.29159C21.4198 8.39159 21.4365 8.49992 21.4031 8.60825L21.3198 8.92492L19.1865 17.3416C19.1531 17.4499 19.0865 17.5416 18.9865 17.5916C18.9198 17.6249 18.8531 17.6416 18.7865 17.6416L18.7698 17.6499Z"
                                                            fill="#161618" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="wishlist-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M7.74001 3.50001C8.80001 3.50001 9.80001 3.93001 10.71 4.77001C10.85 4.90001 10.98 5.03001 11.12 5.16001L11.33 5.37001L12.06 6.08001L12.75 5.34001L12.81 5.27001L13 5.06001C13.8 4.18001 14.73 3.68001 15.82 3.56001C16.02 3.54001 16.22 3.52001 16.41 3.52001C17.51 3.52001 18.48 3.91001 19.31 4.68001C20.58 5.87001 21.12 7.32001 20.96 9.11001C20.86 10.27 20.39 11.31 19.56 12.2C17.7 14.21 15.83 16.22 13.97 18.23L11.99 20.36L9.92001 18.13C8.08001 16.15 6.25001 14.18 4.42001 12.2C3.60001 11.31 3.14001 10.29 3.01001 9.08001C3.01001 9.02001 2.99001 8.97001 2.98001 8.90001V8.21001C3.00001 8.12001 3.01001 8.02001 3.02001 7.93001C3.05001 7.70001 3.09001 7.48001 3.14001 7.30001C3.67001 5.33001 4.77001 4.14001 6.51001 3.67001C6.92001 3.56001 7.33001 3.50001 7.72001 3.50001M7.72001 2.50001C7.24001 2.50001 6.75001 2.57001 6.25001 2.70001C4.06001 3.29001 2.76001 4.84001 2.18001 7.03001C2.08001 7.39001 2.05001 7.76001 1.99001 8.12001V9.00001C2.00001 9.06001 2.02001 9.12001 2.02001 9.17001C2.17001 10.59 2.73001 11.83 3.69001 12.87C6.24001 15.63 8.81001 18.38 11.36 21.14C11.58 21.37 11.78 21.49 11.99 21.49C12.2 21.49 12.4 21.37 12.62 21.14C15.18 18.38 17.74 15.63 20.29 12.87C21.25 11.84 21.82 10.61 21.95 9.19001C22.14 7.12001 21.49 5.34001 19.99 3.93001C18.96 2.97001 17.75 2.50001 16.41 2.50001C16.18 2.50001 15.94 2.51001 15.7 2.54001C14.33 2.70001 13.19 3.34001 12.26 4.37001C12.17 4.47001 12.08 4.56001 12.01 4.64001C11.79 4.42001 11.58 4.22001 11.37 4.02001C10.28 3.02001 9.06001 2.49001 7.72001 2.49001V2.50001Z"
                                                            fill="#0D0D0E" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc-cat">
                                            <p>Aquamarine Infinity Heart Pendant with Diamonds</p>
                                        </div>
                                        <div
                                            class="slider-tab-pirce d-flex justify-content-between align-items-center">
                                            <div class="price-wwrap-prdt">
                                                <span>$111</span>
                                               
                                            </div>

                                        </div>
                                    </div>
                                    <div data-tab="tab-4" class="tab_content">
                                        <div class="swiper catslider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-2.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images//slide-2.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images//slide-2.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next swiper-btn"></div>
                                            <div class="swiper-button-prev swiper-btn"></div>
                                        </div>
                                        <div class="icon-box-popup d-flex justify-content-between px-2">
                                            <div class="similer-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M15.7781 4.83333V18.9167H8.69481V4.83333H15.7781ZM16.3615 4H8.11148C7.96981 4 7.86148 4.10833 7.86148 4.25V19.5C7.86148 19.6417 7.96981 19.75 8.11148 19.75H16.3615C16.5031 19.75 16.6115 19.6417 16.6115 19.5V4.25C16.6115 4.10833 16.5031 4 16.3615 4Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M5.62815 17.6919C5.56149 17.6919 5.48649 17.6752 5.42815 17.6419C5.32815 17.5835 5.26149 17.5002 5.22815 17.3919L5.13649 17.0585L3.01149 8.65855C2.98649 8.55021 3.00315 8.43355 3.05315 8.34188C3.11149 8.25021 3.20315 8.17521 3.31149 8.15021L6.56982 7.32521C6.80315 7.26688 7.01982 7.40021 7.07815 7.62521C7.13649 7.85021 7.00315 8.07521 6.77815 8.13355L3.92815 8.85855L5.92815 16.7669L6.57815 16.6002C6.80315 16.5419 7.02815 16.6752 7.08649 16.9002C7.14482 17.1252 7.01149 17.3502 6.78649 17.4085L5.76149 17.6835C5.76149 17.6835 5.68649 17.7002 5.64482 17.7002L5.62815 17.6919Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M18.7698 17.6499C18.7698 17.6499 18.6948 17.6499 18.6531 17.6333L17.6281 17.3583C17.4031 17.2999 17.2698 17.0749 17.3281 16.8499C17.3865 16.6249 17.6031 16.4916 17.8365 16.5499L18.4865 16.7166L20.4865 8.80825L17.6365 8.08325C17.4115 8.02492 17.2781 7.79992 17.3365 7.57492C17.3948 7.34992 17.6115 7.21659 17.8448 7.27492L21.1031 8.09992C21.2115 8.12492 21.3031 8.19992 21.3615 8.29159C21.4198 8.39159 21.4365 8.49992 21.4031 8.60825L21.3198 8.92492L19.1865 17.3416C19.1531 17.4499 19.0865 17.5416 18.9865 17.5916C18.9198 17.6249 18.8531 17.6416 18.7865 17.6416L18.7698 17.6499Z"
                                                            fill="#161618" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="wishlist-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M7.74001 3.50001C8.80001 3.50001 9.80001 3.93001 10.71 4.77001C10.85 4.90001 10.98 5.03001 11.12 5.16001L11.33 5.37001L12.06 6.08001L12.75 5.34001L12.81 5.27001L13 5.06001C13.8 4.18001 14.73 3.68001 15.82 3.56001C16.02 3.54001 16.22 3.52001 16.41 3.52001C17.51 3.52001 18.48 3.91001 19.31 4.68001C20.58 5.87001 21.12 7.32001 20.96 9.11001C20.86 10.27 20.39 11.31 19.56 12.2C17.7 14.21 15.83 16.22 13.97 18.23L11.99 20.36L9.92001 18.13C8.08001 16.15 6.25001 14.18 4.42001 12.2C3.60001 11.31 3.14001 10.29 3.01001 9.08001C3.01001 9.02001 2.99001 8.97001 2.98001 8.90001V8.21001C3.00001 8.12001 3.01001 8.02001 3.02001 7.93001C3.05001 7.70001 3.09001 7.48001 3.14001 7.30001C3.67001 5.33001 4.77001 4.14001 6.51001 3.67001C6.92001 3.56001 7.33001 3.50001 7.72001 3.50001M7.72001 2.50001C7.24001 2.50001 6.75001 2.57001 6.25001 2.70001C4.06001 3.29001 2.76001 4.84001 2.18001 7.03001C2.08001 7.39001 2.05001 7.76001 1.99001 8.12001V9.00001C2.00001 9.06001 2.02001 9.12001 2.02001 9.17001C2.17001 10.59 2.73001 11.83 3.69001 12.87C6.24001 15.63 8.81001 18.38 11.36 21.14C11.58 21.37 11.78 21.49 11.99 21.49C12.2 21.49 12.4 21.37 12.62 21.14C15.18 18.38 17.74 15.63 20.29 12.87C21.25 11.84 21.82 10.61 21.95 9.19001C22.14 7.12001 21.49 5.34001 19.99 3.93001C18.96 2.97001 17.75 2.50001 16.41 2.50001C16.18 2.50001 15.94 2.51001 15.7 2.54001C14.33 2.70001 13.19 3.34001 12.26 4.37001C12.17 4.47001 12.08 4.56001 12.01 4.64001C11.79 4.42001 11.58 4.22001 11.37 4.02001C10.28 3.02001 9.06001 2.49001 7.72001 2.49001V2.50001Z"
                                                            fill="#0D0D0E" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc-cat">
                                            <p>Aquamarine Infinity Heart Pendant with Diamonds22</p>
                                        </div>
                                        <div
                                            class="slider-tab-pirce d-flex justify-content-between align-items-center">
                                            <div class="price-wwrap-prdt">
                                                <span>$222</span>
                                               
                                            </div>

                                        </div>
                                    </div>
                                    <div data-tab="tab-5" class="tab_content">
                                        <div class="swiper catslider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-3.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-3.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-3.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next swiper-btn"></div>
                                            <div class="swiper-button-prev swiper-btn"></div>
                                        </div>
                                        <div class="icon-box-popup d-flex justify-content-between px-2">
                                            <div class="similer-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M15.7781 4.83333V18.9167H8.69481V4.83333H15.7781ZM16.3615 4H8.11148C7.96981 4 7.86148 4.10833 7.86148 4.25V19.5C7.86148 19.6417 7.96981 19.75 8.11148 19.75H16.3615C16.5031 19.75 16.6115 19.6417 16.6115 19.5V4.25C16.6115 4.10833 16.5031 4 16.3615 4Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M5.62815 17.6919C5.56149 17.6919 5.48649 17.6752 5.42815 17.6419C5.32815 17.5835 5.26149 17.5002 5.22815 17.3919L5.13649 17.0585L3.01149 8.65855C2.98649 8.55021 3.00315 8.43355 3.05315 8.34188C3.11149 8.25021 3.20315 8.17521 3.31149 8.15021L6.56982 7.32521C6.80315 7.26688 7.01982 7.40021 7.07815 7.62521C7.13649 7.85021 7.00315 8.07521 6.77815 8.13355L3.92815 8.85855L5.92815 16.7669L6.57815 16.6002C6.80315 16.5419 7.02815 16.6752 7.08649 16.9002C7.14482 17.1252 7.01149 17.3502 6.78649 17.4085L5.76149 17.6835C5.76149 17.6835 5.68649 17.7002 5.64482 17.7002L5.62815 17.6919Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M18.7698 17.6499C18.7698 17.6499 18.6948 17.6499 18.6531 17.6333L17.6281 17.3583C17.4031 17.2999 17.2698 17.0749 17.3281 16.8499C17.3865 16.6249 17.6031 16.4916 17.8365 16.5499L18.4865 16.7166L20.4865 8.80825L17.6365 8.08325C17.4115 8.02492 17.2781 7.79992 17.3365 7.57492C17.3948 7.34992 17.6115 7.21659 17.8448 7.27492L21.1031 8.09992C21.2115 8.12492 21.3031 8.19992 21.3615 8.29159C21.4198 8.39159 21.4365 8.49992 21.4031 8.60825L21.3198 8.92492L19.1865 17.3416C19.1531 17.4499 19.0865 17.5416 18.9865 17.5916C18.9198 17.6249 18.8531 17.6416 18.7865 17.6416L18.7698 17.6499Z"
                                                            fill="#161618" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="wishlist-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M7.74001 3.50001C8.80001 3.50001 9.80001 3.93001 10.71 4.77001C10.85 4.90001 10.98 5.03001 11.12 5.16001L11.33 5.37001L12.06 6.08001L12.75 5.34001L12.81 5.27001L13 5.06001C13.8 4.18001 14.73 3.68001 15.82 3.56001C16.02 3.54001 16.22 3.52001 16.41 3.52001C17.51 3.52001 18.48 3.91001 19.31 4.68001C20.58 5.87001 21.12 7.32001 20.96 9.11001C20.86 10.27 20.39 11.31 19.56 12.2C17.7 14.21 15.83 16.22 13.97 18.23L11.99 20.36L9.92001 18.13C8.08001 16.15 6.25001 14.18 4.42001 12.2C3.60001 11.31 3.14001 10.29 3.01001 9.08001C3.01001 9.02001 2.99001 8.97001 2.98001 8.90001V8.21001C3.00001 8.12001 3.01001 8.02001 3.02001 7.93001C3.05001 7.70001 3.09001 7.48001 3.14001 7.30001C3.67001 5.33001 4.77001 4.14001 6.51001 3.67001C6.92001 3.56001 7.33001 3.50001 7.72001 3.50001M7.72001 2.50001C7.24001 2.50001 6.75001 2.57001 6.25001 2.70001C4.06001 3.29001 2.76001 4.84001 2.18001 7.03001C2.08001 7.39001 2.05001 7.76001 1.99001 8.12001V9.00001C2.00001 9.06001 2.02001 9.12001 2.02001 9.17001C2.17001 10.59 2.73001 11.83 3.69001 12.87C6.24001 15.63 8.81001 18.38 11.36 21.14C11.58 21.37 11.78 21.49 11.99 21.49C12.2 21.49 12.4 21.37 12.62 21.14C15.18 18.38 17.74 15.63 20.29 12.87C21.25 11.84 21.82 10.61 21.95 9.19001C22.14 7.12001 21.49 5.34001 19.99 3.93001C18.96 2.97001 17.75 2.50001 16.41 2.50001C16.18 2.50001 15.94 2.51001 15.7 2.54001C14.33 2.70001 13.19 3.34001 12.26 4.37001C12.17 4.47001 12.08 4.56001 12.01 4.64001C11.79 4.42001 11.58 4.22001 11.37 4.02001C10.28 3.02001 9.06001 2.49001 7.72001 2.49001V2.50001Z"
                                                            fill="#0D0D0E" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc-cat">
                                            <p>Aquamarine Infinity Heart Pendant with Diamonds3</p>
                                        </div>
                                        <div
                                            class="slider-tab-pirce d-flex justify-content-between align-items-center">
                                            <div class="price-wwrap-prdt">
                                                <span>$333</span>
                                                -
                                                <span>$333</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cat-box tabs_wrapper">
                                <ul class="slider-tabs tabs align-items-center">
                                    <li class="tab-link current" id="tab-7">
                                        <img src="./images/slide-tab-1.webp" alt="">
                                    </li>
                                    <li class="tab-link" id="tab-8">
                                        <img src="./images/slide-tab-2.webp" alt="">
                                    </li>
                                    <li class="tab-link" id="tab-9">
                                        <img src="./images/slide-tab-3.webp" alt="">
                                    </li>
                                    <div class="more-prdt-btn">
                                        <button class="button-modal" type="button" data-bs-toggle="modal"
                                            data-bs-target="#MoreProduct">+15</button>

                                    </div>
                                </ul>
                                <div class="tabs_container">
                                    <div data-tab="tab-7" class="tab_content current">
                                        <div class="swiper catslider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-1.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-1.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-1.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next swiper-btn"></div>
                                            <div class="swiper-button-prev swiper-btn"></div>
                                        </div>
                                        <div class="icon-box-popup d-flex justify-content-between px-2">
                                            <div class="similer-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M15.7781 4.83333V18.9167H8.69481V4.83333H15.7781ZM16.3615 4H8.11148C7.96981 4 7.86148 4.10833 7.86148 4.25V19.5C7.86148 19.6417 7.96981 19.75 8.11148 19.75H16.3615C16.5031 19.75 16.6115 19.6417 16.6115 19.5V4.25C16.6115 4.10833 16.5031 4 16.3615 4Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M5.62815 17.6919C5.56149 17.6919 5.48649 17.6752 5.42815 17.6419C5.32815 17.5835 5.26149 17.5002 5.22815 17.3919L5.13649 17.0585L3.01149 8.65855C2.98649 8.55021 3.00315 8.43355 3.05315 8.34188C3.11149 8.25021 3.20315 8.17521 3.31149 8.15021L6.56982 7.32521C6.80315 7.26688 7.01982 7.40021 7.07815 7.62521C7.13649 7.85021 7.00315 8.07521 6.77815 8.13355L3.92815 8.85855L5.92815 16.7669L6.57815 16.6002C6.80315 16.5419 7.02815 16.6752 7.08649 16.9002C7.14482 17.1252 7.01149 17.3502 6.78649 17.4085L5.76149 17.6835C5.76149 17.6835 5.68649 17.7002 5.64482 17.7002L5.62815 17.6919Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M18.7698 17.6499C18.7698 17.6499 18.6948 17.6499 18.6531 17.6333L17.6281 17.3583C17.4031 17.2999 17.2698 17.0749 17.3281 16.8499C17.3865 16.6249 17.6031 16.4916 17.8365 16.5499L18.4865 16.7166L20.4865 8.80825L17.6365 8.08325C17.4115 8.02492 17.2781 7.79992 17.3365 7.57492C17.3948 7.34992 17.6115 7.21659 17.8448 7.27492L21.1031 8.09992C21.2115 8.12492 21.3031 8.19992 21.3615 8.29159C21.4198 8.39159 21.4365 8.49992 21.4031 8.60825L21.3198 8.92492L19.1865 17.3416C19.1531 17.4499 19.0865 17.5416 18.9865 17.5916C18.9198 17.6249 18.8531 17.6416 18.7865 17.6416L18.7698 17.6499Z"
                                                            fill="#161618" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="wishlist-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M7.74001 3.50001C8.80001 3.50001 9.80001 3.93001 10.71 4.77001C10.85 4.90001 10.98 5.03001 11.12 5.16001L11.33 5.37001L12.06 6.08001L12.75 5.34001L12.81 5.27001L13 5.06001C13.8 4.18001 14.73 3.68001 15.82 3.56001C16.02 3.54001 16.22 3.52001 16.41 3.52001C17.51 3.52001 18.48 3.91001 19.31 4.68001C20.58 5.87001 21.12 7.32001 20.96 9.11001C20.86 10.27 20.39 11.31 19.56 12.2C17.7 14.21 15.83 16.22 13.97 18.23L11.99 20.36L9.92001 18.13C8.08001 16.15 6.25001 14.18 4.42001 12.2C3.60001 11.31 3.14001 10.29 3.01001 9.08001C3.01001 9.02001 2.99001 8.97001 2.98001 8.90001V8.21001C3.00001 8.12001 3.01001 8.02001 3.02001 7.93001C3.05001 7.70001 3.09001 7.48001 3.14001 7.30001C3.67001 5.33001 4.77001 4.14001 6.51001 3.67001C6.92001 3.56001 7.33001 3.50001 7.72001 3.50001M7.72001 2.50001C7.24001 2.50001 6.75001 2.57001 6.25001 2.70001C4.06001 3.29001 2.76001 4.84001 2.18001 7.03001C2.08001 7.39001 2.05001 7.76001 1.99001 8.12001V9.00001C2.00001 9.06001 2.02001 9.12001 2.02001 9.17001C2.17001 10.59 2.73001 11.83 3.69001 12.87C6.24001 15.63 8.81001 18.38 11.36 21.14C11.58 21.37 11.78 21.49 11.99 21.49C12.2 21.49 12.4 21.37 12.62 21.14C15.18 18.38 17.74 15.63 20.29 12.87C21.25 11.84 21.82 10.61 21.95 9.19001C22.14 7.12001 21.49 5.34001 19.99 3.93001C18.96 2.97001 17.75 2.50001 16.41 2.50001C16.18 2.50001 15.94 2.51001 15.7 2.54001C14.33 2.70001 13.19 3.34001 12.26 4.37001C12.17 4.47001 12.08 4.56001 12.01 4.64001C11.79 4.42001 11.58 4.22001 11.37 4.02001C10.28 3.02001 9.06001 2.49001 7.72001 2.49001V2.50001Z"
                                                            fill="#0D0D0E" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc-cat">
                                            <p>Aquamarine Infinity Heart Pendant with Diamonds</p>
                                        </div>
                                        <div
                                            class="slider-tab-pirce d-flex justify-content-between align-items-center">
                                            <div class="price-wwrap-prdt">
                                                <span>$111</span>
                                               
                                            </div>

                                        </div>
                                    </div>
                                    <div data-tab="tab-8" class="tab_content">
                                        <div class="swiper catslider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-2.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images//slide-2.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images//slide-2.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next swiper-btn"></div>
                                            <div class="swiper-button-prev swiper-btn"></div>
                                        </div>
                                        <div class="icon-box-popup d-flex justify-content-between px-2">
                                            <div class="similer-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M15.7781 4.83333V18.9167H8.69481V4.83333H15.7781ZM16.3615 4H8.11148C7.96981 4 7.86148 4.10833 7.86148 4.25V19.5C7.86148 19.6417 7.96981 19.75 8.11148 19.75H16.3615C16.5031 19.75 16.6115 19.6417 16.6115 19.5V4.25C16.6115 4.10833 16.5031 4 16.3615 4Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M5.62815 17.6919C5.56149 17.6919 5.48649 17.6752 5.42815 17.6419C5.32815 17.5835 5.26149 17.5002 5.22815 17.3919L5.13649 17.0585L3.01149 8.65855C2.98649 8.55021 3.00315 8.43355 3.05315 8.34188C3.11149 8.25021 3.20315 8.17521 3.31149 8.15021L6.56982 7.32521C6.80315 7.26688 7.01982 7.40021 7.07815 7.62521C7.13649 7.85021 7.00315 8.07521 6.77815 8.13355L3.92815 8.85855L5.92815 16.7669L6.57815 16.6002C6.80315 16.5419 7.02815 16.6752 7.08649 16.9002C7.14482 17.1252 7.01149 17.3502 6.78649 17.4085L5.76149 17.6835C5.76149 17.6835 5.68649 17.7002 5.64482 17.7002L5.62815 17.6919Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M18.7698 17.6499C18.7698 17.6499 18.6948 17.6499 18.6531 17.6333L17.6281 17.3583C17.4031 17.2999 17.2698 17.0749 17.3281 16.8499C17.3865 16.6249 17.6031 16.4916 17.8365 16.5499L18.4865 16.7166L20.4865 8.80825L17.6365 8.08325C17.4115 8.02492 17.2781 7.79992 17.3365 7.57492C17.3948 7.34992 17.6115 7.21659 17.8448 7.27492L21.1031 8.09992C21.2115 8.12492 21.3031 8.19992 21.3615 8.29159C21.4198 8.39159 21.4365 8.49992 21.4031 8.60825L21.3198 8.92492L19.1865 17.3416C19.1531 17.4499 19.0865 17.5416 18.9865 17.5916C18.9198 17.6249 18.8531 17.6416 18.7865 17.6416L18.7698 17.6499Z"
                                                            fill="#161618" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="wishlist-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M7.74001 3.50001C8.80001 3.50001 9.80001 3.93001 10.71 4.77001C10.85 4.90001 10.98 5.03001 11.12 5.16001L11.33 5.37001L12.06 6.08001L12.75 5.34001L12.81 5.27001L13 5.06001C13.8 4.18001 14.73 3.68001 15.82 3.56001C16.02 3.54001 16.22 3.52001 16.41 3.52001C17.51 3.52001 18.48 3.91001 19.31 4.68001C20.58 5.87001 21.12 7.32001 20.96 9.11001C20.86 10.27 20.39 11.31 19.56 12.2C17.7 14.21 15.83 16.22 13.97 18.23L11.99 20.36L9.92001 18.13C8.08001 16.15 6.25001 14.18 4.42001 12.2C3.60001 11.31 3.14001 10.29 3.01001 9.08001C3.01001 9.02001 2.99001 8.97001 2.98001 8.90001V8.21001C3.00001 8.12001 3.01001 8.02001 3.02001 7.93001C3.05001 7.70001 3.09001 7.48001 3.14001 7.30001C3.67001 5.33001 4.77001 4.14001 6.51001 3.67001C6.92001 3.56001 7.33001 3.50001 7.72001 3.50001M7.72001 2.50001C7.24001 2.50001 6.75001 2.57001 6.25001 2.70001C4.06001 3.29001 2.76001 4.84001 2.18001 7.03001C2.08001 7.39001 2.05001 7.76001 1.99001 8.12001V9.00001C2.00001 9.06001 2.02001 9.12001 2.02001 9.17001C2.17001 10.59 2.73001 11.83 3.69001 12.87C6.24001 15.63 8.81001 18.38 11.36 21.14C11.58 21.37 11.78 21.49 11.99 21.49C12.2 21.49 12.4 21.37 12.62 21.14C15.18 18.38 17.74 15.63 20.29 12.87C21.25 11.84 21.82 10.61 21.95 9.19001C22.14 7.12001 21.49 5.34001 19.99 3.93001C18.96 2.97001 17.75 2.50001 16.41 2.50001C16.18 2.50001 15.94 2.51001 15.7 2.54001C14.33 2.70001 13.19 3.34001 12.26 4.37001C12.17 4.47001 12.08 4.56001 12.01 4.64001C11.79 4.42001 11.58 4.22001 11.37 4.02001C10.28 3.02001 9.06001 2.49001 7.72001 2.49001V2.50001Z"
                                                            fill="#0D0D0E" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc-cat">
                                            <p>Aquamarine Infinity Heart Pendant with Diamonds22</p>
                                        </div>
                                        <div
                                            class="slider-tab-pirce d-flex justify-content-between align-items-center">
                                            <div class="price-wwrap-prdt">
                                                <span>$222</span>
                                               
                                            </div>

                                        </div>
                                    </div>
                                    <div data-tab="tab-9" class="tab_content">
                                        <div class="swiper catslider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-3.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-3.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-3.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next swiper-btn"></div>
                                            <div class="swiper-button-prev swiper-btn"></div>
                                        </div>
                                        <div class="icon-box-popup d-flex justify-content-between px-2">
                                            <div class="similer-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M15.7781 4.83333V18.9167H8.69481V4.83333H15.7781ZM16.3615 4H8.11148C7.96981 4 7.86148 4.10833 7.86148 4.25V19.5C7.86148 19.6417 7.96981 19.75 8.11148 19.75H16.3615C16.5031 19.75 16.6115 19.6417 16.6115 19.5V4.25C16.6115 4.10833 16.5031 4 16.3615 4Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M5.62815 17.6919C5.56149 17.6919 5.48649 17.6752 5.42815 17.6419C5.32815 17.5835 5.26149 17.5002 5.22815 17.3919L5.13649 17.0585L3.01149 8.65855C2.98649 8.55021 3.00315 8.43355 3.05315 8.34188C3.11149 8.25021 3.20315 8.17521 3.31149 8.15021L6.56982 7.32521C6.80315 7.26688 7.01982 7.40021 7.07815 7.62521C7.13649 7.85021 7.00315 8.07521 6.77815 8.13355L3.92815 8.85855L5.92815 16.7669L6.57815 16.6002C6.80315 16.5419 7.02815 16.6752 7.08649 16.9002C7.14482 17.1252 7.01149 17.3502 6.78649 17.4085L5.76149 17.6835C5.76149 17.6835 5.68649 17.7002 5.64482 17.7002L5.62815 17.6919Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M18.7698 17.6499C18.7698 17.6499 18.6948 17.6499 18.6531 17.6333L17.6281 17.3583C17.4031 17.2999 17.2698 17.0749 17.3281 16.8499C17.3865 16.6249 17.6031 16.4916 17.8365 16.5499L18.4865 16.7166L20.4865 8.80825L17.6365 8.08325C17.4115 8.02492 17.2781 7.79992 17.3365 7.57492C17.3948 7.34992 17.6115 7.21659 17.8448 7.27492L21.1031 8.09992C21.2115 8.12492 21.3031 8.19992 21.3615 8.29159C21.4198 8.39159 21.4365 8.49992 21.4031 8.60825L21.3198 8.92492L19.1865 17.3416C19.1531 17.4499 19.0865 17.5416 18.9865 17.5916C18.9198 17.6249 18.8531 17.6416 18.7865 17.6416L18.7698 17.6499Z"
                                                            fill="#161618" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="wishlist-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M7.74001 3.50001C8.80001 3.50001 9.80001 3.93001 10.71 4.77001C10.85 4.90001 10.98 5.03001 11.12 5.16001L11.33 5.37001L12.06 6.08001L12.75 5.34001L12.81 5.27001L13 5.06001C13.8 4.18001 14.73 3.68001 15.82 3.56001C16.02 3.54001 16.22 3.52001 16.41 3.52001C17.51 3.52001 18.48 3.91001 19.31 4.68001C20.58 5.87001 21.12 7.32001 20.96 9.11001C20.86 10.27 20.39 11.31 19.56 12.2C17.7 14.21 15.83 16.22 13.97 18.23L11.99 20.36L9.92001 18.13C8.08001 16.15 6.25001 14.18 4.42001 12.2C3.60001 11.31 3.14001 10.29 3.01001 9.08001C3.01001 9.02001 2.99001 8.97001 2.98001 8.90001V8.21001C3.00001 8.12001 3.01001 8.02001 3.02001 7.93001C3.05001 7.70001 3.09001 7.48001 3.14001 7.30001C3.67001 5.33001 4.77001 4.14001 6.51001 3.67001C6.92001 3.56001 7.33001 3.50001 7.72001 3.50001M7.72001 2.50001C7.24001 2.50001 6.75001 2.57001 6.25001 2.70001C4.06001 3.29001 2.76001 4.84001 2.18001 7.03001C2.08001 7.39001 2.05001 7.76001 1.99001 8.12001V9.00001C2.00001 9.06001 2.02001 9.12001 2.02001 9.17001C2.17001 10.59 2.73001 11.83 3.69001 12.87C6.24001 15.63 8.81001 18.38 11.36 21.14C11.58 21.37 11.78 21.49 11.99 21.49C12.2 21.49 12.4 21.37 12.62 21.14C15.18 18.38 17.74 15.63 20.29 12.87C21.25 11.84 21.82 10.61 21.95 9.19001C22.14 7.12001 21.49 5.34001 19.99 3.93001C18.96 2.97001 17.75 2.50001 16.41 2.50001C16.18 2.50001 15.94 2.51001 15.7 2.54001C14.33 2.70001 13.19 3.34001 12.26 4.37001C12.17 4.47001 12.08 4.56001 12.01 4.64001C11.79 4.42001 11.58 4.22001 11.37 4.02001C10.28 3.02001 9.06001 2.49001 7.72001 2.49001V2.50001Z"
                                                            fill="#0D0D0E" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc-cat">
                                            <p>Aquamarine Infinity Heart Pendant with Diamonds3</p>
                                        </div>
                                        <div
                                            class="slider-tab-pirce d-flex justify-content-between align-items-center">
                                            <div class="price-wwrap-prdt">
                                                <span>$333</span>
                                                -
                                                <span>$333</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cat-box tabs_wrapper">
                                <ul class="slider-tabs tabs align-items-center">
                                    <li class="tab-link current" id="tab-7">
                                        <img src="./images/slide-tab-1.webp" alt="">
                                    </li>
                                    <li class="tab-link" id="tab-8">
                                        <img src="./images/slide-tab-2.webp" alt="">
                                    </li>
                                    <li class="tab-link" id="tab-9">
                                        <img src="./images/slide-tab-3.webp" alt="">
                                    </li>
                                    <div class="more-prdt-btn">
                                        <button class="button-modal" type="button" data-bs-toggle="modal"
                                            data-bs-target="#MoreProduct">+15</button>

                                    </div>
                                </ul>
                                <div class="tabs_container">
                                    <div data-tab="tab-7" class="tab_content current">
                                        <div class="swiper catslider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-1.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-1.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-1.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next swiper-btn"></div>
                                            <div class="swiper-button-prev swiper-btn"></div>
                                        </div>
                                        <div class="icon-box-popup d-flex justify-content-between px-2">
                                            <div class="similer-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M15.7781 4.83333V18.9167H8.69481V4.83333H15.7781ZM16.3615 4H8.11148C7.96981 4 7.86148 4.10833 7.86148 4.25V19.5C7.86148 19.6417 7.96981 19.75 8.11148 19.75H16.3615C16.5031 19.75 16.6115 19.6417 16.6115 19.5V4.25C16.6115 4.10833 16.5031 4 16.3615 4Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M5.62815 17.6919C5.56149 17.6919 5.48649 17.6752 5.42815 17.6419C5.32815 17.5835 5.26149 17.5002 5.22815 17.3919L5.13649 17.0585L3.01149 8.65855C2.98649 8.55021 3.00315 8.43355 3.05315 8.34188C3.11149 8.25021 3.20315 8.17521 3.31149 8.15021L6.56982 7.32521C6.80315 7.26688 7.01982 7.40021 7.07815 7.62521C7.13649 7.85021 7.00315 8.07521 6.77815 8.13355L3.92815 8.85855L5.92815 16.7669L6.57815 16.6002C6.80315 16.5419 7.02815 16.6752 7.08649 16.9002C7.14482 17.1252 7.01149 17.3502 6.78649 17.4085L5.76149 17.6835C5.76149 17.6835 5.68649 17.7002 5.64482 17.7002L5.62815 17.6919Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M18.7698 17.6499C18.7698 17.6499 18.6948 17.6499 18.6531 17.6333L17.6281 17.3583C17.4031 17.2999 17.2698 17.0749 17.3281 16.8499C17.3865 16.6249 17.6031 16.4916 17.8365 16.5499L18.4865 16.7166L20.4865 8.80825L17.6365 8.08325C17.4115 8.02492 17.2781 7.79992 17.3365 7.57492C17.3948 7.34992 17.6115 7.21659 17.8448 7.27492L21.1031 8.09992C21.2115 8.12492 21.3031 8.19992 21.3615 8.29159C21.4198 8.39159 21.4365 8.49992 21.4031 8.60825L21.3198 8.92492L19.1865 17.3416C19.1531 17.4499 19.0865 17.5416 18.9865 17.5916C18.9198 17.6249 18.8531 17.6416 18.7865 17.6416L18.7698 17.6499Z"
                                                            fill="#161618" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="wishlist-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M7.74001 3.50001C8.80001 3.50001 9.80001 3.93001 10.71 4.77001C10.85 4.90001 10.98 5.03001 11.12 5.16001L11.33 5.37001L12.06 6.08001L12.75 5.34001L12.81 5.27001L13 5.06001C13.8 4.18001 14.73 3.68001 15.82 3.56001C16.02 3.54001 16.22 3.52001 16.41 3.52001C17.51 3.52001 18.48 3.91001 19.31 4.68001C20.58 5.87001 21.12 7.32001 20.96 9.11001C20.86 10.27 20.39 11.31 19.56 12.2C17.7 14.21 15.83 16.22 13.97 18.23L11.99 20.36L9.92001 18.13C8.08001 16.15 6.25001 14.18 4.42001 12.2C3.60001 11.31 3.14001 10.29 3.01001 9.08001C3.01001 9.02001 2.99001 8.97001 2.98001 8.90001V8.21001C3.00001 8.12001 3.01001 8.02001 3.02001 7.93001C3.05001 7.70001 3.09001 7.48001 3.14001 7.30001C3.67001 5.33001 4.77001 4.14001 6.51001 3.67001C6.92001 3.56001 7.33001 3.50001 7.72001 3.50001M7.72001 2.50001C7.24001 2.50001 6.75001 2.57001 6.25001 2.70001C4.06001 3.29001 2.76001 4.84001 2.18001 7.03001C2.08001 7.39001 2.05001 7.76001 1.99001 8.12001V9.00001C2.00001 9.06001 2.02001 9.12001 2.02001 9.17001C2.17001 10.59 2.73001 11.83 3.69001 12.87C6.24001 15.63 8.81001 18.38 11.36 21.14C11.58 21.37 11.78 21.49 11.99 21.49C12.2 21.49 12.4 21.37 12.62 21.14C15.18 18.38 17.74 15.63 20.29 12.87C21.25 11.84 21.82 10.61 21.95 9.19001C22.14 7.12001 21.49 5.34001 19.99 3.93001C18.96 2.97001 17.75 2.50001 16.41 2.50001C16.18 2.50001 15.94 2.51001 15.7 2.54001C14.33 2.70001 13.19 3.34001 12.26 4.37001C12.17 4.47001 12.08 4.56001 12.01 4.64001C11.79 4.42001 11.58 4.22001 11.37 4.02001C10.28 3.02001 9.06001 2.49001 7.72001 2.49001V2.50001Z"
                                                            fill="#0D0D0E" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc-cat">
                                            <p>Aquamarine Infinity Heart Pendant with Diamonds</p>
                                        </div>
                                        <div
                                            class="slider-tab-pirce d-flex justify-content-between align-items-center">
                                            <div class="price-wwrap-prdt">
                                                <span>$111</span>
                                               
                                            </div>

                                        </div>
                                    </div>
                                    <div data-tab="tab-8" class="tab_content">
                                        <div class="swiper catslider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-2.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images//slide-2.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images//slide-2.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next swiper-btn"></div>
                                            <div class="swiper-button-prev swiper-btn"></div>
                                        </div>
                                        <div class="icon-box-popup d-flex justify-content-between px-2">
                                            <div class="similer-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M15.7781 4.83333V18.9167H8.69481V4.83333H15.7781ZM16.3615 4H8.11148C7.96981 4 7.86148 4.10833 7.86148 4.25V19.5C7.86148 19.6417 7.96981 19.75 8.11148 19.75H16.3615C16.5031 19.75 16.6115 19.6417 16.6115 19.5V4.25C16.6115 4.10833 16.5031 4 16.3615 4Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M5.62815 17.6919C5.56149 17.6919 5.48649 17.6752 5.42815 17.6419C5.32815 17.5835 5.26149 17.5002 5.22815 17.3919L5.13649 17.0585L3.01149 8.65855C2.98649 8.55021 3.00315 8.43355 3.05315 8.34188C3.11149 8.25021 3.20315 8.17521 3.31149 8.15021L6.56982 7.32521C6.80315 7.26688 7.01982 7.40021 7.07815 7.62521C7.13649 7.85021 7.00315 8.07521 6.77815 8.13355L3.92815 8.85855L5.92815 16.7669L6.57815 16.6002C6.80315 16.5419 7.02815 16.6752 7.08649 16.9002C7.14482 17.1252 7.01149 17.3502 6.78649 17.4085L5.76149 17.6835C5.76149 17.6835 5.68649 17.7002 5.64482 17.7002L5.62815 17.6919Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M18.7698 17.6499C18.7698 17.6499 18.6948 17.6499 18.6531 17.6333L17.6281 17.3583C17.4031 17.2999 17.2698 17.0749 17.3281 16.8499C17.3865 16.6249 17.6031 16.4916 17.8365 16.5499L18.4865 16.7166L20.4865 8.80825L17.6365 8.08325C17.4115 8.02492 17.2781 7.79992 17.3365 7.57492C17.3948 7.34992 17.6115 7.21659 17.8448 7.27492L21.1031 8.09992C21.2115 8.12492 21.3031 8.19992 21.3615 8.29159C21.4198 8.39159 21.4365 8.49992 21.4031 8.60825L21.3198 8.92492L19.1865 17.3416C19.1531 17.4499 19.0865 17.5416 18.9865 17.5916C18.9198 17.6249 18.8531 17.6416 18.7865 17.6416L18.7698 17.6499Z"
                                                            fill="#161618" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="wishlist-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M7.74001 3.50001C8.80001 3.50001 9.80001 3.93001 10.71 4.77001C10.85 4.90001 10.98 5.03001 11.12 5.16001L11.33 5.37001L12.06 6.08001L12.75 5.34001L12.81 5.27001L13 5.06001C13.8 4.18001 14.73 3.68001 15.82 3.56001C16.02 3.54001 16.22 3.52001 16.41 3.52001C17.51 3.52001 18.48 3.91001 19.31 4.68001C20.58 5.87001 21.12 7.32001 20.96 9.11001C20.86 10.27 20.39 11.31 19.56 12.2C17.7 14.21 15.83 16.22 13.97 18.23L11.99 20.36L9.92001 18.13C8.08001 16.15 6.25001 14.18 4.42001 12.2C3.60001 11.31 3.14001 10.29 3.01001 9.08001C3.01001 9.02001 2.99001 8.97001 2.98001 8.90001V8.21001C3.00001 8.12001 3.01001 8.02001 3.02001 7.93001C3.05001 7.70001 3.09001 7.48001 3.14001 7.30001C3.67001 5.33001 4.77001 4.14001 6.51001 3.67001C6.92001 3.56001 7.33001 3.50001 7.72001 3.50001M7.72001 2.50001C7.24001 2.50001 6.75001 2.57001 6.25001 2.70001C4.06001 3.29001 2.76001 4.84001 2.18001 7.03001C2.08001 7.39001 2.05001 7.76001 1.99001 8.12001V9.00001C2.00001 9.06001 2.02001 9.12001 2.02001 9.17001C2.17001 10.59 2.73001 11.83 3.69001 12.87C6.24001 15.63 8.81001 18.38 11.36 21.14C11.58 21.37 11.78 21.49 11.99 21.49C12.2 21.49 12.4 21.37 12.62 21.14C15.18 18.38 17.74 15.63 20.29 12.87C21.25 11.84 21.82 10.61 21.95 9.19001C22.14 7.12001 21.49 5.34001 19.99 3.93001C18.96 2.97001 17.75 2.50001 16.41 2.50001C16.18 2.50001 15.94 2.51001 15.7 2.54001C14.33 2.70001 13.19 3.34001 12.26 4.37001C12.17 4.47001 12.08 4.56001 12.01 4.64001C11.79 4.42001 11.58 4.22001 11.37 4.02001C10.28 3.02001 9.06001 2.49001 7.72001 2.49001V2.50001Z"
                                                            fill="#0D0D0E" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc-cat">
                                            <p>Aquamarine Infinity Heart Pendant with Diamonds22</p>
                                        </div>
                                        <div
                                            class="slider-tab-pirce d-flex justify-content-between align-items-center">
                                            <div class="price-wwrap-prdt">
                                                <span>$222</span>
                                               
                                            </div>

                                        </div>
                                    </div>
                                    <div data-tab="tab-9" class="tab_content">
                                        <div class="swiper catslider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-3.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-3.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-3.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next swiper-btn"></div>
                                            <div class="swiper-button-prev swiper-btn"></div>
                                        </div>
                                        <div class="icon-box-popup d-flex justify-content-between px-2">
                                            <div class="similer-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M15.7781 4.83333V18.9167H8.69481V4.83333H15.7781ZM16.3615 4H8.11148C7.96981 4 7.86148 4.10833 7.86148 4.25V19.5C7.86148 19.6417 7.96981 19.75 8.11148 19.75H16.3615C16.5031 19.75 16.6115 19.6417 16.6115 19.5V4.25C16.6115 4.10833 16.5031 4 16.3615 4Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M5.62815 17.6919C5.56149 17.6919 5.48649 17.6752 5.42815 17.6419C5.32815 17.5835 5.26149 17.5002 5.22815 17.3919L5.13649 17.0585L3.01149 8.65855C2.98649 8.55021 3.00315 8.43355 3.05315 8.34188C3.11149 8.25021 3.20315 8.17521 3.31149 8.15021L6.56982 7.32521C6.80315 7.26688 7.01982 7.40021 7.07815 7.62521C7.13649 7.85021 7.00315 8.07521 6.77815 8.13355L3.92815 8.85855L5.92815 16.7669L6.57815 16.6002C6.80315 16.5419 7.02815 16.6752 7.08649 16.9002C7.14482 17.1252 7.01149 17.3502 6.78649 17.4085L5.76149 17.6835C5.76149 17.6835 5.68649 17.7002 5.64482 17.7002L5.62815 17.6919Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M18.7698 17.6499C18.7698 17.6499 18.6948 17.6499 18.6531 17.6333L17.6281 17.3583C17.4031 17.2999 17.2698 17.0749 17.3281 16.8499C17.3865 16.6249 17.6031 16.4916 17.8365 16.5499L18.4865 16.7166L20.4865 8.80825L17.6365 8.08325C17.4115 8.02492 17.2781 7.79992 17.3365 7.57492C17.3948 7.34992 17.6115 7.21659 17.8448 7.27492L21.1031 8.09992C21.2115 8.12492 21.3031 8.19992 21.3615 8.29159C21.4198 8.39159 21.4365 8.49992 21.4031 8.60825L21.3198 8.92492L19.1865 17.3416C19.1531 17.4499 19.0865 17.5416 18.9865 17.5916C18.9198 17.6249 18.8531 17.6416 18.7865 17.6416L18.7698 17.6499Z"
                                                            fill="#161618" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="wishlist-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M7.74001 3.50001C8.80001 3.50001 9.80001 3.93001 10.71 4.77001C10.85 4.90001 10.98 5.03001 11.12 5.16001L11.33 5.37001L12.06 6.08001L12.75 5.34001L12.81 5.27001L13 5.06001C13.8 4.18001 14.73 3.68001 15.82 3.56001C16.02 3.54001 16.22 3.52001 16.41 3.52001C17.51 3.52001 18.48 3.91001 19.31 4.68001C20.58 5.87001 21.12 7.32001 20.96 9.11001C20.86 10.27 20.39 11.31 19.56 12.2C17.7 14.21 15.83 16.22 13.97 18.23L11.99 20.36L9.92001 18.13C8.08001 16.15 6.25001 14.18 4.42001 12.2C3.60001 11.31 3.14001 10.29 3.01001 9.08001C3.01001 9.02001 2.99001 8.97001 2.98001 8.90001V8.21001C3.00001 8.12001 3.01001 8.02001 3.02001 7.93001C3.05001 7.70001 3.09001 7.48001 3.14001 7.30001C3.67001 5.33001 4.77001 4.14001 6.51001 3.67001C6.92001 3.56001 7.33001 3.50001 7.72001 3.50001M7.72001 2.50001C7.24001 2.50001 6.75001 2.57001 6.25001 2.70001C4.06001 3.29001 2.76001 4.84001 2.18001 7.03001C2.08001 7.39001 2.05001 7.76001 1.99001 8.12001V9.00001C2.00001 9.06001 2.02001 9.12001 2.02001 9.17001C2.17001 10.59 2.73001 11.83 3.69001 12.87C6.24001 15.63 8.81001 18.38 11.36 21.14C11.58 21.37 11.78 21.49 11.99 21.49C12.2 21.49 12.4 21.37 12.62 21.14C15.18 18.38 17.74 15.63 20.29 12.87C21.25 11.84 21.82 10.61 21.95 9.19001C22.14 7.12001 21.49 5.34001 19.99 3.93001C18.96 2.97001 17.75 2.50001 16.41 2.50001C16.18 2.50001 15.94 2.51001 15.7 2.54001C14.33 2.70001 13.19 3.34001 12.26 4.37001C12.17 4.47001 12.08 4.56001 12.01 4.64001C11.79 4.42001 11.58 4.22001 11.37 4.02001C10.28 3.02001 9.06001 2.49001 7.72001 2.49001V2.50001Z"
                                                            fill="#0D0D0E" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc-cat">
                                            <p>Aquamarine Infinity Heart Pendant with Diamonds3</p>
                                        </div>
                                        <div
                                            class="slider-tab-pirce d-flex justify-content-between align-items-center">
                                            <div class="price-wwrap-prdt">
                                                <span>$333</span>
                                                -
                                                <span>$333</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cat-box tabs_wrapper">
                                <ul class="slider-tabs tabs align-items-center">
                                    <li class="tab-link current" id="tab-7">
                                        <img src="./images/slide-tab-1.webp" alt="">
                                    </li>
                                    <li class="tab-link" id="tab-8">
                                        <img src="./images/slide-tab-2.webp" alt="">
                                    </li>
                                    <li class="tab-link" id="tab-9">
                                        <img src="./images/slide-tab-3.webp" alt="">
                                    </li>
                                    <div class="more-prdt-btn">
                                        <button class="button-modal" type="button" data-bs-toggle="modal"
                                            data-bs-target="#MoreProduct">+15</button>

                                    </div>
                                </ul>
                                <div class="tabs_container">
                                    <div data-tab="tab-7" class="tab_content current">
                                        <div class="swiper catslider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-1.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-1.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-1.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next swiper-btn"></div>
                                            <div class="swiper-button-prev swiper-btn"></div>
                                        </div>
                                        <div class="icon-box-popup d-flex justify-content-between px-2">
                                            <div class="similer-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M15.7781 4.83333V18.9167H8.69481V4.83333H15.7781ZM16.3615 4H8.11148C7.96981 4 7.86148 4.10833 7.86148 4.25V19.5C7.86148 19.6417 7.96981 19.75 8.11148 19.75H16.3615C16.5031 19.75 16.6115 19.6417 16.6115 19.5V4.25C16.6115 4.10833 16.5031 4 16.3615 4Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M5.62815 17.6919C5.56149 17.6919 5.48649 17.6752 5.42815 17.6419C5.32815 17.5835 5.26149 17.5002 5.22815 17.3919L5.13649 17.0585L3.01149 8.65855C2.98649 8.55021 3.00315 8.43355 3.05315 8.34188C3.11149 8.25021 3.20315 8.17521 3.31149 8.15021L6.56982 7.32521C6.80315 7.26688 7.01982 7.40021 7.07815 7.62521C7.13649 7.85021 7.00315 8.07521 6.77815 8.13355L3.92815 8.85855L5.92815 16.7669L6.57815 16.6002C6.80315 16.5419 7.02815 16.6752 7.08649 16.9002C7.14482 17.1252 7.01149 17.3502 6.78649 17.4085L5.76149 17.6835C5.76149 17.6835 5.68649 17.7002 5.64482 17.7002L5.62815 17.6919Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M18.7698 17.6499C18.7698 17.6499 18.6948 17.6499 18.6531 17.6333L17.6281 17.3583C17.4031 17.2999 17.2698 17.0749 17.3281 16.8499C17.3865 16.6249 17.6031 16.4916 17.8365 16.5499L18.4865 16.7166L20.4865 8.80825L17.6365 8.08325C17.4115 8.02492 17.2781 7.79992 17.3365 7.57492C17.3948 7.34992 17.6115 7.21659 17.8448 7.27492L21.1031 8.09992C21.2115 8.12492 21.3031 8.19992 21.3615 8.29159C21.4198 8.39159 21.4365 8.49992 21.4031 8.60825L21.3198 8.92492L19.1865 17.3416C19.1531 17.4499 19.0865 17.5416 18.9865 17.5916C18.9198 17.6249 18.8531 17.6416 18.7865 17.6416L18.7698 17.6499Z"
                                                            fill="#161618" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="wishlist-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M7.74001 3.50001C8.80001 3.50001 9.80001 3.93001 10.71 4.77001C10.85 4.90001 10.98 5.03001 11.12 5.16001L11.33 5.37001L12.06 6.08001L12.75 5.34001L12.81 5.27001L13 5.06001C13.8 4.18001 14.73 3.68001 15.82 3.56001C16.02 3.54001 16.22 3.52001 16.41 3.52001C17.51 3.52001 18.48 3.91001 19.31 4.68001C20.58 5.87001 21.12 7.32001 20.96 9.11001C20.86 10.27 20.39 11.31 19.56 12.2C17.7 14.21 15.83 16.22 13.97 18.23L11.99 20.36L9.92001 18.13C8.08001 16.15 6.25001 14.18 4.42001 12.2C3.60001 11.31 3.14001 10.29 3.01001 9.08001C3.01001 9.02001 2.99001 8.97001 2.98001 8.90001V8.21001C3.00001 8.12001 3.01001 8.02001 3.02001 7.93001C3.05001 7.70001 3.09001 7.48001 3.14001 7.30001C3.67001 5.33001 4.77001 4.14001 6.51001 3.67001C6.92001 3.56001 7.33001 3.50001 7.72001 3.50001M7.72001 2.50001C7.24001 2.50001 6.75001 2.57001 6.25001 2.70001C4.06001 3.29001 2.76001 4.84001 2.18001 7.03001C2.08001 7.39001 2.05001 7.76001 1.99001 8.12001V9.00001C2.00001 9.06001 2.02001 9.12001 2.02001 9.17001C2.17001 10.59 2.73001 11.83 3.69001 12.87C6.24001 15.63 8.81001 18.38 11.36 21.14C11.58 21.37 11.78 21.49 11.99 21.49C12.2 21.49 12.4 21.37 12.62 21.14C15.18 18.38 17.74 15.63 20.29 12.87C21.25 11.84 21.82 10.61 21.95 9.19001C22.14 7.12001 21.49 5.34001 19.99 3.93001C18.96 2.97001 17.75 2.50001 16.41 2.50001C16.18 2.50001 15.94 2.51001 15.7 2.54001C14.33 2.70001 13.19 3.34001 12.26 4.37001C12.17 4.47001 12.08 4.56001 12.01 4.64001C11.79 4.42001 11.58 4.22001 11.37 4.02001C10.28 3.02001 9.06001 2.49001 7.72001 2.49001V2.50001Z"
                                                            fill="#0D0D0E" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc-cat">
                                            <p>Aquamarine Infinity Heart Pendant with Diamonds</p>
                                        </div>
                                        <div
                                            class="slider-tab-pirce d-flex justify-content-between align-items-center">
                                            <div class="price-wwrap-prdt">
                                                <span>$111</span>
                                               
                                            </div>

                                        </div>
                                    </div>
                                    <div data-tab="tab-8" class="tab_content">
                                        <div class="swiper catslider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-2.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images//slide-2.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images//slide-2.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next swiper-btn"></div>
                                            <div class="swiper-button-prev swiper-btn"></div>
                                        </div>
                                        <div class="icon-box-popup d-flex justify-content-between px-2">
                                            <div class="similer-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M15.7781 4.83333V18.9167H8.69481V4.83333H15.7781ZM16.3615 4H8.11148C7.96981 4 7.86148 4.10833 7.86148 4.25V19.5C7.86148 19.6417 7.96981 19.75 8.11148 19.75H16.3615C16.5031 19.75 16.6115 19.6417 16.6115 19.5V4.25C16.6115 4.10833 16.5031 4 16.3615 4Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M5.62815 17.6919C5.56149 17.6919 5.48649 17.6752 5.42815 17.6419C5.32815 17.5835 5.26149 17.5002 5.22815 17.3919L5.13649 17.0585L3.01149 8.65855C2.98649 8.55021 3.00315 8.43355 3.05315 8.34188C3.11149 8.25021 3.20315 8.17521 3.31149 8.15021L6.56982 7.32521C6.80315 7.26688 7.01982 7.40021 7.07815 7.62521C7.13649 7.85021 7.00315 8.07521 6.77815 8.13355L3.92815 8.85855L5.92815 16.7669L6.57815 16.6002C6.80315 16.5419 7.02815 16.6752 7.08649 16.9002C7.14482 17.1252 7.01149 17.3502 6.78649 17.4085L5.76149 17.6835C5.76149 17.6835 5.68649 17.7002 5.64482 17.7002L5.62815 17.6919Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M18.7698 17.6499C18.7698 17.6499 18.6948 17.6499 18.6531 17.6333L17.6281 17.3583C17.4031 17.2999 17.2698 17.0749 17.3281 16.8499C17.3865 16.6249 17.6031 16.4916 17.8365 16.5499L18.4865 16.7166L20.4865 8.80825L17.6365 8.08325C17.4115 8.02492 17.2781 7.79992 17.3365 7.57492C17.3948 7.34992 17.6115 7.21659 17.8448 7.27492L21.1031 8.09992C21.2115 8.12492 21.3031 8.19992 21.3615 8.29159C21.4198 8.39159 21.4365 8.49992 21.4031 8.60825L21.3198 8.92492L19.1865 17.3416C19.1531 17.4499 19.0865 17.5416 18.9865 17.5916C18.9198 17.6249 18.8531 17.6416 18.7865 17.6416L18.7698 17.6499Z"
                                                            fill="#161618" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="wishlist-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M7.74001 3.50001C8.80001 3.50001 9.80001 3.93001 10.71 4.77001C10.85 4.90001 10.98 5.03001 11.12 5.16001L11.33 5.37001L12.06 6.08001L12.75 5.34001L12.81 5.27001L13 5.06001C13.8 4.18001 14.73 3.68001 15.82 3.56001C16.02 3.54001 16.22 3.52001 16.41 3.52001C17.51 3.52001 18.48 3.91001 19.31 4.68001C20.58 5.87001 21.12 7.32001 20.96 9.11001C20.86 10.27 20.39 11.31 19.56 12.2C17.7 14.21 15.83 16.22 13.97 18.23L11.99 20.36L9.92001 18.13C8.08001 16.15 6.25001 14.18 4.42001 12.2C3.60001 11.31 3.14001 10.29 3.01001 9.08001C3.01001 9.02001 2.99001 8.97001 2.98001 8.90001V8.21001C3.00001 8.12001 3.01001 8.02001 3.02001 7.93001C3.05001 7.70001 3.09001 7.48001 3.14001 7.30001C3.67001 5.33001 4.77001 4.14001 6.51001 3.67001C6.92001 3.56001 7.33001 3.50001 7.72001 3.50001M7.72001 2.50001C7.24001 2.50001 6.75001 2.57001 6.25001 2.70001C4.06001 3.29001 2.76001 4.84001 2.18001 7.03001C2.08001 7.39001 2.05001 7.76001 1.99001 8.12001V9.00001C2.00001 9.06001 2.02001 9.12001 2.02001 9.17001C2.17001 10.59 2.73001 11.83 3.69001 12.87C6.24001 15.63 8.81001 18.38 11.36 21.14C11.58 21.37 11.78 21.49 11.99 21.49C12.2 21.49 12.4 21.37 12.62 21.14C15.18 18.38 17.74 15.63 20.29 12.87C21.25 11.84 21.82 10.61 21.95 9.19001C22.14 7.12001 21.49 5.34001 19.99 3.93001C18.96 2.97001 17.75 2.50001 16.41 2.50001C16.18 2.50001 15.94 2.51001 15.7 2.54001C14.33 2.70001 13.19 3.34001 12.26 4.37001C12.17 4.47001 12.08 4.56001 12.01 4.64001C11.79 4.42001 11.58 4.22001 11.37 4.02001C10.28 3.02001 9.06001 2.49001 7.72001 2.49001V2.50001Z"
                                                            fill="#0D0D0E" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc-cat">
                                            <p>Aquamarine Infinity Heart Pendant with Diamonds22</p>
                                        </div>
                                        <div
                                            class="slider-tab-pirce d-flex justify-content-between align-items-center">
                                            <div class="price-wwrap-prdt">
                                                <span>$222</span>
                                               
                                            </div>

                                        </div>
                                    </div>
                                    <div data-tab="tab-9" class="tab_content">
                                        <div class="swiper catslider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-3.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-3.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-3.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next swiper-btn"></div>
                                            <div class="swiper-button-prev swiper-btn"></div>
                                        </div>
                                        <div class="icon-box-popup d-flex justify-content-between px-2">
                                            <div class="similer-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M15.7781 4.83333V18.9167H8.69481V4.83333H15.7781ZM16.3615 4H8.11148C7.96981 4 7.86148 4.10833 7.86148 4.25V19.5C7.86148 19.6417 7.96981 19.75 8.11148 19.75H16.3615C16.5031 19.75 16.6115 19.6417 16.6115 19.5V4.25C16.6115 4.10833 16.5031 4 16.3615 4Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M5.62815 17.6919C5.56149 17.6919 5.48649 17.6752 5.42815 17.6419C5.32815 17.5835 5.26149 17.5002 5.22815 17.3919L5.13649 17.0585L3.01149 8.65855C2.98649 8.55021 3.00315 8.43355 3.05315 8.34188C3.11149 8.25021 3.20315 8.17521 3.31149 8.15021L6.56982 7.32521C6.80315 7.26688 7.01982 7.40021 7.07815 7.62521C7.13649 7.85021 7.00315 8.07521 6.77815 8.13355L3.92815 8.85855L5.92815 16.7669L6.57815 16.6002C6.80315 16.5419 7.02815 16.6752 7.08649 16.9002C7.14482 17.1252 7.01149 17.3502 6.78649 17.4085L5.76149 17.6835C5.76149 17.6835 5.68649 17.7002 5.64482 17.7002L5.62815 17.6919Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M18.7698 17.6499C18.7698 17.6499 18.6948 17.6499 18.6531 17.6333L17.6281 17.3583C17.4031 17.2999 17.2698 17.0749 17.3281 16.8499C17.3865 16.6249 17.6031 16.4916 17.8365 16.5499L18.4865 16.7166L20.4865 8.80825L17.6365 8.08325C17.4115 8.02492 17.2781 7.79992 17.3365 7.57492C17.3948 7.34992 17.6115 7.21659 17.8448 7.27492L21.1031 8.09992C21.2115 8.12492 21.3031 8.19992 21.3615 8.29159C21.4198 8.39159 21.4365 8.49992 21.4031 8.60825L21.3198 8.92492L19.1865 17.3416C19.1531 17.4499 19.0865 17.5416 18.9865 17.5916C18.9198 17.6249 18.8531 17.6416 18.7865 17.6416L18.7698 17.6499Z"
                                                            fill="#161618" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="wishlist-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M7.74001 3.50001C8.80001 3.50001 9.80001 3.93001 10.71 4.77001C10.85 4.90001 10.98 5.03001 11.12 5.16001L11.33 5.37001L12.06 6.08001L12.75 5.34001L12.81 5.27001L13 5.06001C13.8 4.18001 14.73 3.68001 15.82 3.56001C16.02 3.54001 16.22 3.52001 16.41 3.52001C17.51 3.52001 18.48 3.91001 19.31 4.68001C20.58 5.87001 21.12 7.32001 20.96 9.11001C20.86 10.27 20.39 11.31 19.56 12.2C17.7 14.21 15.83 16.22 13.97 18.23L11.99 20.36L9.92001 18.13C8.08001 16.15 6.25001 14.18 4.42001 12.2C3.60001 11.31 3.14001 10.29 3.01001 9.08001C3.01001 9.02001 2.99001 8.97001 2.98001 8.90001V8.21001C3.00001 8.12001 3.01001 8.02001 3.02001 7.93001C3.05001 7.70001 3.09001 7.48001 3.14001 7.30001C3.67001 5.33001 4.77001 4.14001 6.51001 3.67001C6.92001 3.56001 7.33001 3.50001 7.72001 3.50001M7.72001 2.50001C7.24001 2.50001 6.75001 2.57001 6.25001 2.70001C4.06001 3.29001 2.76001 4.84001 2.18001 7.03001C2.08001 7.39001 2.05001 7.76001 1.99001 8.12001V9.00001C2.00001 9.06001 2.02001 9.12001 2.02001 9.17001C2.17001 10.59 2.73001 11.83 3.69001 12.87C6.24001 15.63 8.81001 18.38 11.36 21.14C11.58 21.37 11.78 21.49 11.99 21.49C12.2 21.49 12.4 21.37 12.62 21.14C15.18 18.38 17.74 15.63 20.29 12.87C21.25 11.84 21.82 10.61 21.95 9.19001C22.14 7.12001 21.49 5.34001 19.99 3.93001C18.96 2.97001 17.75 2.50001 16.41 2.50001C16.18 2.50001 15.94 2.51001 15.7 2.54001C14.33 2.70001 13.19 3.34001 12.26 4.37001C12.17 4.47001 12.08 4.56001 12.01 4.64001C11.79 4.42001 11.58 4.22001 11.37 4.02001C10.28 3.02001 9.06001 2.49001 7.72001 2.49001V2.50001Z"
                                                            fill="#0D0D0E" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc-cat">
                                            <p>Aquamarine Infinity Heart Pendant with Diamonds3</p>
                                        </div>
                                        <div
                                            class="slider-tab-pirce d-flex justify-content-between align-items-center">
                                            <div class="price-wwrap-prdt">
                                                <span>$333</span>
                                                -
                                                <span>$333</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cat-box tabs_wrapper">
                                <ul class="slider-tabs tabs align-items-center">
                                    <li class="tab-link current" id="tab-7">
                                        <img src="./images/slide-tab-1.webp" alt="">
                                    </li>
                                    <li class="tab-link" id="tab-8">
                                        <img src="./images/slide-tab-2.webp" alt="">
                                    </li>
                                    <li class="tab-link" id="tab-9">
                                        <img src="./images/slide-tab-3.webp" alt="">
                                    </li>
                                    <div class="more-prdt-btn">
                                        <button class="button-modal" type="button" data-bs-toggle="modal"
                                            data-bs-target="#MoreProduct">+15</button>

                                    </div>
                                </ul>
                                <div class="tabs_container">
                                    <div data-tab="tab-7" class="tab_content current">
                                        <div class="swiper catslider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-1.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-1.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-1.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next swiper-btn"></div>
                                            <div class="swiper-button-prev swiper-btn"></div>
                                        </div>
                                        <div class="icon-box-popup d-flex justify-content-between px-2">
                                            <div class="similer-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M15.7781 4.83333V18.9167H8.69481V4.83333H15.7781ZM16.3615 4H8.11148C7.96981 4 7.86148 4.10833 7.86148 4.25V19.5C7.86148 19.6417 7.96981 19.75 8.11148 19.75H16.3615C16.5031 19.75 16.6115 19.6417 16.6115 19.5V4.25C16.6115 4.10833 16.5031 4 16.3615 4Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M5.62815 17.6919C5.56149 17.6919 5.48649 17.6752 5.42815 17.6419C5.32815 17.5835 5.26149 17.5002 5.22815 17.3919L5.13649 17.0585L3.01149 8.65855C2.98649 8.55021 3.00315 8.43355 3.05315 8.34188C3.11149 8.25021 3.20315 8.17521 3.31149 8.15021L6.56982 7.32521C6.80315 7.26688 7.01982 7.40021 7.07815 7.62521C7.13649 7.85021 7.00315 8.07521 6.77815 8.13355L3.92815 8.85855L5.92815 16.7669L6.57815 16.6002C6.80315 16.5419 7.02815 16.6752 7.08649 16.9002C7.14482 17.1252 7.01149 17.3502 6.78649 17.4085L5.76149 17.6835C5.76149 17.6835 5.68649 17.7002 5.64482 17.7002L5.62815 17.6919Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M18.7698 17.6499C18.7698 17.6499 18.6948 17.6499 18.6531 17.6333L17.6281 17.3583C17.4031 17.2999 17.2698 17.0749 17.3281 16.8499C17.3865 16.6249 17.6031 16.4916 17.8365 16.5499L18.4865 16.7166L20.4865 8.80825L17.6365 8.08325C17.4115 8.02492 17.2781 7.79992 17.3365 7.57492C17.3948 7.34992 17.6115 7.21659 17.8448 7.27492L21.1031 8.09992C21.2115 8.12492 21.3031 8.19992 21.3615 8.29159C21.4198 8.39159 21.4365 8.49992 21.4031 8.60825L21.3198 8.92492L19.1865 17.3416C19.1531 17.4499 19.0865 17.5416 18.9865 17.5916C18.9198 17.6249 18.8531 17.6416 18.7865 17.6416L18.7698 17.6499Z"
                                                            fill="#161618" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="wishlist-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M7.74001 3.50001C8.80001 3.50001 9.80001 3.93001 10.71 4.77001C10.85 4.90001 10.98 5.03001 11.12 5.16001L11.33 5.37001L12.06 6.08001L12.75 5.34001L12.81 5.27001L13 5.06001C13.8 4.18001 14.73 3.68001 15.82 3.56001C16.02 3.54001 16.22 3.52001 16.41 3.52001C17.51 3.52001 18.48 3.91001 19.31 4.68001C20.58 5.87001 21.12 7.32001 20.96 9.11001C20.86 10.27 20.39 11.31 19.56 12.2C17.7 14.21 15.83 16.22 13.97 18.23L11.99 20.36L9.92001 18.13C8.08001 16.15 6.25001 14.18 4.42001 12.2C3.60001 11.31 3.14001 10.29 3.01001 9.08001C3.01001 9.02001 2.99001 8.97001 2.98001 8.90001V8.21001C3.00001 8.12001 3.01001 8.02001 3.02001 7.93001C3.05001 7.70001 3.09001 7.48001 3.14001 7.30001C3.67001 5.33001 4.77001 4.14001 6.51001 3.67001C6.92001 3.56001 7.33001 3.50001 7.72001 3.50001M7.72001 2.50001C7.24001 2.50001 6.75001 2.57001 6.25001 2.70001C4.06001 3.29001 2.76001 4.84001 2.18001 7.03001C2.08001 7.39001 2.05001 7.76001 1.99001 8.12001V9.00001C2.00001 9.06001 2.02001 9.12001 2.02001 9.17001C2.17001 10.59 2.73001 11.83 3.69001 12.87C6.24001 15.63 8.81001 18.38 11.36 21.14C11.58 21.37 11.78 21.49 11.99 21.49C12.2 21.49 12.4 21.37 12.62 21.14C15.18 18.38 17.74 15.63 20.29 12.87C21.25 11.84 21.82 10.61 21.95 9.19001C22.14 7.12001 21.49 5.34001 19.99 3.93001C18.96 2.97001 17.75 2.50001 16.41 2.50001C16.18 2.50001 15.94 2.51001 15.7 2.54001C14.33 2.70001 13.19 3.34001 12.26 4.37001C12.17 4.47001 12.08 4.56001 12.01 4.64001C11.79 4.42001 11.58 4.22001 11.37 4.02001C10.28 3.02001 9.06001 2.49001 7.72001 2.49001V2.50001Z"
                                                            fill="#0D0D0E" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc-cat">
                                            <p>Aquamarine Infinity Heart Pendant with Diamonds</p>
                                        </div>
                                        <div
                                            class="slider-tab-pirce d-flex justify-content-between align-items-center">
                                            <div class="price-wwrap-prdt">
                                                <span>$111</span>
                                               
                                            </div>

                                        </div>
                                    </div>
                                    <div data-tab="tab-8" class="tab_content">
                                        <div class="swiper catslider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-2.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images//slide-2.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images//slide-2.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next swiper-btn"></div>
                                            <div class="swiper-button-prev swiper-btn"></div>
                                        </div>
                                        <div class="icon-box-popup d-flex justify-content-between px-2">
                                            <div class="similer-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M15.7781 4.83333V18.9167H8.69481V4.83333H15.7781ZM16.3615 4H8.11148C7.96981 4 7.86148 4.10833 7.86148 4.25V19.5C7.86148 19.6417 7.96981 19.75 8.11148 19.75H16.3615C16.5031 19.75 16.6115 19.6417 16.6115 19.5V4.25C16.6115 4.10833 16.5031 4 16.3615 4Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M5.62815 17.6919C5.56149 17.6919 5.48649 17.6752 5.42815 17.6419C5.32815 17.5835 5.26149 17.5002 5.22815 17.3919L5.13649 17.0585L3.01149 8.65855C2.98649 8.55021 3.00315 8.43355 3.05315 8.34188C3.11149 8.25021 3.20315 8.17521 3.31149 8.15021L6.56982 7.32521C6.80315 7.26688 7.01982 7.40021 7.07815 7.62521C7.13649 7.85021 7.00315 8.07521 6.77815 8.13355L3.92815 8.85855L5.92815 16.7669L6.57815 16.6002C6.80315 16.5419 7.02815 16.6752 7.08649 16.9002C7.14482 17.1252 7.01149 17.3502 6.78649 17.4085L5.76149 17.6835C5.76149 17.6835 5.68649 17.7002 5.64482 17.7002L5.62815 17.6919Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M18.7698 17.6499C18.7698 17.6499 18.6948 17.6499 18.6531 17.6333L17.6281 17.3583C17.4031 17.2999 17.2698 17.0749 17.3281 16.8499C17.3865 16.6249 17.6031 16.4916 17.8365 16.5499L18.4865 16.7166L20.4865 8.80825L17.6365 8.08325C17.4115 8.02492 17.2781 7.79992 17.3365 7.57492C17.3948 7.34992 17.6115 7.21659 17.8448 7.27492L21.1031 8.09992C21.2115 8.12492 21.3031 8.19992 21.3615 8.29159C21.4198 8.39159 21.4365 8.49992 21.4031 8.60825L21.3198 8.92492L19.1865 17.3416C19.1531 17.4499 19.0865 17.5416 18.9865 17.5916C18.9198 17.6249 18.8531 17.6416 18.7865 17.6416L18.7698 17.6499Z"
                                                            fill="#161618" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="wishlist-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M7.74001 3.50001C8.80001 3.50001 9.80001 3.93001 10.71 4.77001C10.85 4.90001 10.98 5.03001 11.12 5.16001L11.33 5.37001L12.06 6.08001L12.75 5.34001L12.81 5.27001L13 5.06001C13.8 4.18001 14.73 3.68001 15.82 3.56001C16.02 3.54001 16.22 3.52001 16.41 3.52001C17.51 3.52001 18.48 3.91001 19.31 4.68001C20.58 5.87001 21.12 7.32001 20.96 9.11001C20.86 10.27 20.39 11.31 19.56 12.2C17.7 14.21 15.83 16.22 13.97 18.23L11.99 20.36L9.92001 18.13C8.08001 16.15 6.25001 14.18 4.42001 12.2C3.60001 11.31 3.14001 10.29 3.01001 9.08001C3.01001 9.02001 2.99001 8.97001 2.98001 8.90001V8.21001C3.00001 8.12001 3.01001 8.02001 3.02001 7.93001C3.05001 7.70001 3.09001 7.48001 3.14001 7.30001C3.67001 5.33001 4.77001 4.14001 6.51001 3.67001C6.92001 3.56001 7.33001 3.50001 7.72001 3.50001M7.72001 2.50001C7.24001 2.50001 6.75001 2.57001 6.25001 2.70001C4.06001 3.29001 2.76001 4.84001 2.18001 7.03001C2.08001 7.39001 2.05001 7.76001 1.99001 8.12001V9.00001C2.00001 9.06001 2.02001 9.12001 2.02001 9.17001C2.17001 10.59 2.73001 11.83 3.69001 12.87C6.24001 15.63 8.81001 18.38 11.36 21.14C11.58 21.37 11.78 21.49 11.99 21.49C12.2 21.49 12.4 21.37 12.62 21.14C15.18 18.38 17.74 15.63 20.29 12.87C21.25 11.84 21.82 10.61 21.95 9.19001C22.14 7.12001 21.49 5.34001 19.99 3.93001C18.96 2.97001 17.75 2.50001 16.41 2.50001C16.18 2.50001 15.94 2.51001 15.7 2.54001C14.33 2.70001 13.19 3.34001 12.26 4.37001C12.17 4.47001 12.08 4.56001 12.01 4.64001C11.79 4.42001 11.58 4.22001 11.37 4.02001C10.28 3.02001 9.06001 2.49001 7.72001 2.49001V2.50001Z"
                                                            fill="#0D0D0E" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc-cat">
                                            <p>Aquamarine Infinity Heart Pendant with Diamonds22</p>
                                        </div>
                                        <div
                                            class="slider-tab-pirce d-flex justify-content-between align-items-center">
                                            <div class="price-wwrap-prdt">
                                                <span>$222</span>
                                               
                                            </div>

                                        </div>
                                    </div>
                                    <div data-tab="tab-9" class="tab_content">
                                        <div class="swiper catslider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-3.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-3.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-3.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next swiper-btn"></div>
                                            <div class="swiper-button-prev swiper-btn"></div>
                                        </div>
                                        <div class="icon-box-popup d-flex justify-content-between px-2">
                                            <div class="similer-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M15.7781 4.83333V18.9167H8.69481V4.83333H15.7781ZM16.3615 4H8.11148C7.96981 4 7.86148 4.10833 7.86148 4.25V19.5C7.86148 19.6417 7.96981 19.75 8.11148 19.75H16.3615C16.5031 19.75 16.6115 19.6417 16.6115 19.5V4.25C16.6115 4.10833 16.5031 4 16.3615 4Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M5.62815 17.6919C5.56149 17.6919 5.48649 17.6752 5.42815 17.6419C5.32815 17.5835 5.26149 17.5002 5.22815 17.3919L5.13649 17.0585L3.01149 8.65855C2.98649 8.55021 3.00315 8.43355 3.05315 8.34188C3.11149 8.25021 3.20315 8.17521 3.31149 8.15021L6.56982 7.32521C6.80315 7.26688 7.01982 7.40021 7.07815 7.62521C7.13649 7.85021 7.00315 8.07521 6.77815 8.13355L3.92815 8.85855L5.92815 16.7669L6.57815 16.6002C6.80315 16.5419 7.02815 16.6752 7.08649 16.9002C7.14482 17.1252 7.01149 17.3502 6.78649 17.4085L5.76149 17.6835C5.76149 17.6835 5.68649 17.7002 5.64482 17.7002L5.62815 17.6919Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M18.7698 17.6499C18.7698 17.6499 18.6948 17.6499 18.6531 17.6333L17.6281 17.3583C17.4031 17.2999 17.2698 17.0749 17.3281 16.8499C17.3865 16.6249 17.6031 16.4916 17.8365 16.5499L18.4865 16.7166L20.4865 8.80825L17.6365 8.08325C17.4115 8.02492 17.2781 7.79992 17.3365 7.57492C17.3948 7.34992 17.6115 7.21659 17.8448 7.27492L21.1031 8.09992C21.2115 8.12492 21.3031 8.19992 21.3615 8.29159C21.4198 8.39159 21.4365 8.49992 21.4031 8.60825L21.3198 8.92492L19.1865 17.3416C19.1531 17.4499 19.0865 17.5416 18.9865 17.5916C18.9198 17.6249 18.8531 17.6416 18.7865 17.6416L18.7698 17.6499Z"
                                                            fill="#161618" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="wishlist-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M7.74001 3.50001C8.80001 3.50001 9.80001 3.93001 10.71 4.77001C10.85 4.90001 10.98 5.03001 11.12 5.16001L11.33 5.37001L12.06 6.08001L12.75 5.34001L12.81 5.27001L13 5.06001C13.8 4.18001 14.73 3.68001 15.82 3.56001C16.02 3.54001 16.22 3.52001 16.41 3.52001C17.51 3.52001 18.48 3.91001 19.31 4.68001C20.58 5.87001 21.12 7.32001 20.96 9.11001C20.86 10.27 20.39 11.31 19.56 12.2C17.7 14.21 15.83 16.22 13.97 18.23L11.99 20.36L9.92001 18.13C8.08001 16.15 6.25001 14.18 4.42001 12.2C3.60001 11.31 3.14001 10.29 3.01001 9.08001C3.01001 9.02001 2.99001 8.97001 2.98001 8.90001V8.21001C3.00001 8.12001 3.01001 8.02001 3.02001 7.93001C3.05001 7.70001 3.09001 7.48001 3.14001 7.30001C3.67001 5.33001 4.77001 4.14001 6.51001 3.67001C6.92001 3.56001 7.33001 3.50001 7.72001 3.50001M7.72001 2.50001C7.24001 2.50001 6.75001 2.57001 6.25001 2.70001C4.06001 3.29001 2.76001 4.84001 2.18001 7.03001C2.08001 7.39001 2.05001 7.76001 1.99001 8.12001V9.00001C2.00001 9.06001 2.02001 9.12001 2.02001 9.17001C2.17001 10.59 2.73001 11.83 3.69001 12.87C6.24001 15.63 8.81001 18.38 11.36 21.14C11.58 21.37 11.78 21.49 11.99 21.49C12.2 21.49 12.4 21.37 12.62 21.14C15.18 18.38 17.74 15.63 20.29 12.87C21.25 11.84 21.82 10.61 21.95 9.19001C22.14 7.12001 21.49 5.34001 19.99 3.93001C18.96 2.97001 17.75 2.50001 16.41 2.50001C16.18 2.50001 15.94 2.51001 15.7 2.54001C14.33 2.70001 13.19 3.34001 12.26 4.37001C12.17 4.47001 12.08 4.56001 12.01 4.64001C11.79 4.42001 11.58 4.22001 11.37 4.02001C10.28 3.02001 9.06001 2.49001 7.72001 2.49001V2.50001Z"
                                                            fill="#0D0D0E" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc-cat">
                                            <p>Aquamarine Infinity Heart Pendant with Diamonds3</p>
                                        </div>
                                        <div
                                            class="slider-tab-pirce d-flex justify-content-between align-items-center">
                                            <div class="price-wwrap-prdt">
                                                <span>$333</span>
                                                -
                                                <span>$333</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cat-box tabs_wrapper">
                                <ul class="slider-tabs tabs align-items-center">
                                    <li class="tab-link current" id="tab-7">
                                        <img src="./images/slide-tab-1.webp" alt="">
                                    </li>
                                    <li class="tab-link" id="tab-8">
                                        <img src="./images/slide-tab-2.webp" alt="">
                                    </li>
                                    <li class="tab-link" id="tab-9">
                                        <img src="./images/slide-tab-3.webp" alt="">
                                    </li>
                                    <div class="more-prdt-btn">
                                        <button class="button-modal" type="button" data-bs-toggle="modal"
                                            data-bs-target="#MoreProduct">+15</button>

                                    </div>
                                </ul>
                                <div class="tabs_container">
                                    <div data-tab="tab-7" class="tab_content current">
                                        <div class="swiper catslider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-1.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-1.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-1.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next swiper-btn"></div>
                                            <div class="swiper-button-prev swiper-btn"></div>
                                        </div>
                                        <div class="icon-box-popup d-flex justify-content-between px-2">
                                            <div class="similer-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M15.7781 4.83333V18.9167H8.69481V4.83333H15.7781ZM16.3615 4H8.11148C7.96981 4 7.86148 4.10833 7.86148 4.25V19.5C7.86148 19.6417 7.96981 19.75 8.11148 19.75H16.3615C16.5031 19.75 16.6115 19.6417 16.6115 19.5V4.25C16.6115 4.10833 16.5031 4 16.3615 4Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M5.62815 17.6919C5.56149 17.6919 5.48649 17.6752 5.42815 17.6419C5.32815 17.5835 5.26149 17.5002 5.22815 17.3919L5.13649 17.0585L3.01149 8.65855C2.98649 8.55021 3.00315 8.43355 3.05315 8.34188C3.11149 8.25021 3.20315 8.17521 3.31149 8.15021L6.56982 7.32521C6.80315 7.26688 7.01982 7.40021 7.07815 7.62521C7.13649 7.85021 7.00315 8.07521 6.77815 8.13355L3.92815 8.85855L5.92815 16.7669L6.57815 16.6002C6.80315 16.5419 7.02815 16.6752 7.08649 16.9002C7.14482 17.1252 7.01149 17.3502 6.78649 17.4085L5.76149 17.6835C5.76149 17.6835 5.68649 17.7002 5.64482 17.7002L5.62815 17.6919Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M18.7698 17.6499C18.7698 17.6499 18.6948 17.6499 18.6531 17.6333L17.6281 17.3583C17.4031 17.2999 17.2698 17.0749 17.3281 16.8499C17.3865 16.6249 17.6031 16.4916 17.8365 16.5499L18.4865 16.7166L20.4865 8.80825L17.6365 8.08325C17.4115 8.02492 17.2781 7.79992 17.3365 7.57492C17.3948 7.34992 17.6115 7.21659 17.8448 7.27492L21.1031 8.09992C21.2115 8.12492 21.3031 8.19992 21.3615 8.29159C21.4198 8.39159 21.4365 8.49992 21.4031 8.60825L21.3198 8.92492L19.1865 17.3416C19.1531 17.4499 19.0865 17.5416 18.9865 17.5916C18.9198 17.6249 18.8531 17.6416 18.7865 17.6416L18.7698 17.6499Z"
                                                            fill="#161618" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="wishlist-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M7.74001 3.50001C8.80001 3.50001 9.80001 3.93001 10.71 4.77001C10.85 4.90001 10.98 5.03001 11.12 5.16001L11.33 5.37001L12.06 6.08001L12.75 5.34001L12.81 5.27001L13 5.06001C13.8 4.18001 14.73 3.68001 15.82 3.56001C16.02 3.54001 16.22 3.52001 16.41 3.52001C17.51 3.52001 18.48 3.91001 19.31 4.68001C20.58 5.87001 21.12 7.32001 20.96 9.11001C20.86 10.27 20.39 11.31 19.56 12.2C17.7 14.21 15.83 16.22 13.97 18.23L11.99 20.36L9.92001 18.13C8.08001 16.15 6.25001 14.18 4.42001 12.2C3.60001 11.31 3.14001 10.29 3.01001 9.08001C3.01001 9.02001 2.99001 8.97001 2.98001 8.90001V8.21001C3.00001 8.12001 3.01001 8.02001 3.02001 7.93001C3.05001 7.70001 3.09001 7.48001 3.14001 7.30001C3.67001 5.33001 4.77001 4.14001 6.51001 3.67001C6.92001 3.56001 7.33001 3.50001 7.72001 3.50001M7.72001 2.50001C7.24001 2.50001 6.75001 2.57001 6.25001 2.70001C4.06001 3.29001 2.76001 4.84001 2.18001 7.03001C2.08001 7.39001 2.05001 7.76001 1.99001 8.12001V9.00001C2.00001 9.06001 2.02001 9.12001 2.02001 9.17001C2.17001 10.59 2.73001 11.83 3.69001 12.87C6.24001 15.63 8.81001 18.38 11.36 21.14C11.58 21.37 11.78 21.49 11.99 21.49C12.2 21.49 12.4 21.37 12.62 21.14C15.18 18.38 17.74 15.63 20.29 12.87C21.25 11.84 21.82 10.61 21.95 9.19001C22.14 7.12001 21.49 5.34001 19.99 3.93001C18.96 2.97001 17.75 2.50001 16.41 2.50001C16.18 2.50001 15.94 2.51001 15.7 2.54001C14.33 2.70001 13.19 3.34001 12.26 4.37001C12.17 4.47001 12.08 4.56001 12.01 4.64001C11.79 4.42001 11.58 4.22001 11.37 4.02001C10.28 3.02001 9.06001 2.49001 7.72001 2.49001V2.50001Z"
                                                            fill="#0D0D0E" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc-cat">
                                            <p>Aquamarine Infinity Heart Pendant with Diamonds</p>
                                        </div>
                                        <div
                                            class="slider-tab-pirce d-flex justify-content-between align-items-center">
                                            <div class="price-wwrap-prdt">
                                                <span>$111</span>
                                               
                                            </div>

                                        </div>
                                    </div>
                                    <div data-tab="tab-8" class="tab_content">
                                        <div class="swiper catslider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-2.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images//slide-2.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images//slide-2.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next swiper-btn"></div>
                                            <div class="swiper-button-prev swiper-btn"></div>
                                        </div>
                                        <div class="icon-box-popup d-flex justify-content-between px-2">
                                            <div class="similer-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M15.7781 4.83333V18.9167H8.69481V4.83333H15.7781ZM16.3615 4H8.11148C7.96981 4 7.86148 4.10833 7.86148 4.25V19.5C7.86148 19.6417 7.96981 19.75 8.11148 19.75H16.3615C16.5031 19.75 16.6115 19.6417 16.6115 19.5V4.25C16.6115 4.10833 16.5031 4 16.3615 4Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M5.62815 17.6919C5.56149 17.6919 5.48649 17.6752 5.42815 17.6419C5.32815 17.5835 5.26149 17.5002 5.22815 17.3919L5.13649 17.0585L3.01149 8.65855C2.98649 8.55021 3.00315 8.43355 3.05315 8.34188C3.11149 8.25021 3.20315 8.17521 3.31149 8.15021L6.56982 7.32521C6.80315 7.26688 7.01982 7.40021 7.07815 7.62521C7.13649 7.85021 7.00315 8.07521 6.77815 8.13355L3.92815 8.85855L5.92815 16.7669L6.57815 16.6002C6.80315 16.5419 7.02815 16.6752 7.08649 16.9002C7.14482 17.1252 7.01149 17.3502 6.78649 17.4085L5.76149 17.6835C5.76149 17.6835 5.68649 17.7002 5.64482 17.7002L5.62815 17.6919Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M18.7698 17.6499C18.7698 17.6499 18.6948 17.6499 18.6531 17.6333L17.6281 17.3583C17.4031 17.2999 17.2698 17.0749 17.3281 16.8499C17.3865 16.6249 17.6031 16.4916 17.8365 16.5499L18.4865 16.7166L20.4865 8.80825L17.6365 8.08325C17.4115 8.02492 17.2781 7.79992 17.3365 7.57492C17.3948 7.34992 17.6115 7.21659 17.8448 7.27492L21.1031 8.09992C21.2115 8.12492 21.3031 8.19992 21.3615 8.29159C21.4198 8.39159 21.4365 8.49992 21.4031 8.60825L21.3198 8.92492L19.1865 17.3416C19.1531 17.4499 19.0865 17.5416 18.9865 17.5916C18.9198 17.6249 18.8531 17.6416 18.7865 17.6416L18.7698 17.6499Z"
                                                            fill="#161618" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="wishlist-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M7.74001 3.50001C8.80001 3.50001 9.80001 3.93001 10.71 4.77001C10.85 4.90001 10.98 5.03001 11.12 5.16001L11.33 5.37001L12.06 6.08001L12.75 5.34001L12.81 5.27001L13 5.06001C13.8 4.18001 14.73 3.68001 15.82 3.56001C16.02 3.54001 16.22 3.52001 16.41 3.52001C17.51 3.52001 18.48 3.91001 19.31 4.68001C20.58 5.87001 21.12 7.32001 20.96 9.11001C20.86 10.27 20.39 11.31 19.56 12.2C17.7 14.21 15.83 16.22 13.97 18.23L11.99 20.36L9.92001 18.13C8.08001 16.15 6.25001 14.18 4.42001 12.2C3.60001 11.31 3.14001 10.29 3.01001 9.08001C3.01001 9.02001 2.99001 8.97001 2.98001 8.90001V8.21001C3.00001 8.12001 3.01001 8.02001 3.02001 7.93001C3.05001 7.70001 3.09001 7.48001 3.14001 7.30001C3.67001 5.33001 4.77001 4.14001 6.51001 3.67001C6.92001 3.56001 7.33001 3.50001 7.72001 3.50001M7.72001 2.50001C7.24001 2.50001 6.75001 2.57001 6.25001 2.70001C4.06001 3.29001 2.76001 4.84001 2.18001 7.03001C2.08001 7.39001 2.05001 7.76001 1.99001 8.12001V9.00001C2.00001 9.06001 2.02001 9.12001 2.02001 9.17001C2.17001 10.59 2.73001 11.83 3.69001 12.87C6.24001 15.63 8.81001 18.38 11.36 21.14C11.58 21.37 11.78 21.49 11.99 21.49C12.2 21.49 12.4 21.37 12.62 21.14C15.18 18.38 17.74 15.63 20.29 12.87C21.25 11.84 21.82 10.61 21.95 9.19001C22.14 7.12001 21.49 5.34001 19.99 3.93001C18.96 2.97001 17.75 2.50001 16.41 2.50001C16.18 2.50001 15.94 2.51001 15.7 2.54001C14.33 2.70001 13.19 3.34001 12.26 4.37001C12.17 4.47001 12.08 4.56001 12.01 4.64001C11.79 4.42001 11.58 4.22001 11.37 4.02001C10.28 3.02001 9.06001 2.49001 7.72001 2.49001V2.50001Z"
                                                            fill="#0D0D0E" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc-cat">
                                            <p>Aquamarine Infinity Heart Pendant with Diamonds22</p>
                                        </div>
                                        <div
                                            class="slider-tab-pirce d-flex justify-content-between align-items-center">
                                            <div class="price-wwrap-prdt">
                                                <span>$222</span>
                                               
                                            </div>

                                        </div>
                                    </div>
                                    <div data-tab="tab-9" class="tab_content">
                                        <div class="swiper catslider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-3.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-3.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-3.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next swiper-btn"></div>
                                            <div class="swiper-button-prev swiper-btn"></div>
                                        </div>
                                        <div class="icon-box-popup d-flex justify-content-between px-2">
                                            <div class="similer-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M15.7781 4.83333V18.9167H8.69481V4.83333H15.7781ZM16.3615 4H8.11148C7.96981 4 7.86148 4.10833 7.86148 4.25V19.5C7.86148 19.6417 7.96981 19.75 8.11148 19.75H16.3615C16.5031 19.75 16.6115 19.6417 16.6115 19.5V4.25C16.6115 4.10833 16.5031 4 16.3615 4Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M5.62815 17.6919C5.56149 17.6919 5.48649 17.6752 5.42815 17.6419C5.32815 17.5835 5.26149 17.5002 5.22815 17.3919L5.13649 17.0585L3.01149 8.65855C2.98649 8.55021 3.00315 8.43355 3.05315 8.34188C3.11149 8.25021 3.20315 8.17521 3.31149 8.15021L6.56982 7.32521C6.80315 7.26688 7.01982 7.40021 7.07815 7.62521C7.13649 7.85021 7.00315 8.07521 6.77815 8.13355L3.92815 8.85855L5.92815 16.7669L6.57815 16.6002C6.80315 16.5419 7.02815 16.6752 7.08649 16.9002C7.14482 17.1252 7.01149 17.3502 6.78649 17.4085L5.76149 17.6835C5.76149 17.6835 5.68649 17.7002 5.64482 17.7002L5.62815 17.6919Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M18.7698 17.6499C18.7698 17.6499 18.6948 17.6499 18.6531 17.6333L17.6281 17.3583C17.4031 17.2999 17.2698 17.0749 17.3281 16.8499C17.3865 16.6249 17.6031 16.4916 17.8365 16.5499L18.4865 16.7166L20.4865 8.80825L17.6365 8.08325C17.4115 8.02492 17.2781 7.79992 17.3365 7.57492C17.3948 7.34992 17.6115 7.21659 17.8448 7.27492L21.1031 8.09992C21.2115 8.12492 21.3031 8.19992 21.3615 8.29159C21.4198 8.39159 21.4365 8.49992 21.4031 8.60825L21.3198 8.92492L19.1865 17.3416C19.1531 17.4499 19.0865 17.5416 18.9865 17.5916C18.9198 17.6249 18.8531 17.6416 18.7865 17.6416L18.7698 17.6499Z"
                                                            fill="#161618" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="wishlist-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M7.74001 3.50001C8.80001 3.50001 9.80001 3.93001 10.71 4.77001C10.85 4.90001 10.98 5.03001 11.12 5.16001L11.33 5.37001L12.06 6.08001L12.75 5.34001L12.81 5.27001L13 5.06001C13.8 4.18001 14.73 3.68001 15.82 3.56001C16.02 3.54001 16.22 3.52001 16.41 3.52001C17.51 3.52001 18.48 3.91001 19.31 4.68001C20.58 5.87001 21.12 7.32001 20.96 9.11001C20.86 10.27 20.39 11.31 19.56 12.2C17.7 14.21 15.83 16.22 13.97 18.23L11.99 20.36L9.92001 18.13C8.08001 16.15 6.25001 14.18 4.42001 12.2C3.60001 11.31 3.14001 10.29 3.01001 9.08001C3.01001 9.02001 2.99001 8.97001 2.98001 8.90001V8.21001C3.00001 8.12001 3.01001 8.02001 3.02001 7.93001C3.05001 7.70001 3.09001 7.48001 3.14001 7.30001C3.67001 5.33001 4.77001 4.14001 6.51001 3.67001C6.92001 3.56001 7.33001 3.50001 7.72001 3.50001M7.72001 2.50001C7.24001 2.50001 6.75001 2.57001 6.25001 2.70001C4.06001 3.29001 2.76001 4.84001 2.18001 7.03001C2.08001 7.39001 2.05001 7.76001 1.99001 8.12001V9.00001C2.00001 9.06001 2.02001 9.12001 2.02001 9.17001C2.17001 10.59 2.73001 11.83 3.69001 12.87C6.24001 15.63 8.81001 18.38 11.36 21.14C11.58 21.37 11.78 21.49 11.99 21.49C12.2 21.49 12.4 21.37 12.62 21.14C15.18 18.38 17.74 15.63 20.29 12.87C21.25 11.84 21.82 10.61 21.95 9.19001C22.14 7.12001 21.49 5.34001 19.99 3.93001C18.96 2.97001 17.75 2.50001 16.41 2.50001C16.18 2.50001 15.94 2.51001 15.7 2.54001C14.33 2.70001 13.19 3.34001 12.26 4.37001C12.17 4.47001 12.08 4.56001 12.01 4.64001C11.79 4.42001 11.58 4.22001 11.37 4.02001C10.28 3.02001 9.06001 2.49001 7.72001 2.49001V2.50001Z"
                                                            fill="#0D0D0E" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc-cat">
                                            <p>Aquamarine Infinity Heart Pendant with Diamonds3</p>
                                        </div>
                                        <div
                                            class="slider-tab-pirce d-flex justify-content-between align-items-center">
                                            <div class="price-wwrap-prdt">
                                                <span>$333</span>
                                                -
                                                <span>$333</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cat-box tabs_wrapper">
                                <ul class="slider-tabs tabs align-items-center">
                                    <li class="tab-link current" id="tab-7">
                                        <img src="./images/slide-tab-1.webp" alt="">
                                    </li>
                                    <li class="tab-link" id="tab-8">
                                        <img src="./images/slide-tab-2.webp" alt="">
                                    </li>
                                    <li class="tab-link" id="tab-9">
                                        <img src="./images/slide-tab-3.webp" alt="">
                                    </li>
                                    <div class="more-prdt-btn">
                                        <button class="button-modal" type="button" data-bs-toggle="modal"
                                            data-bs-target="#MoreProduct">+15</button>

                                    </div>
                                </ul>
                                <div class="tabs_container">
                                    <div data-tab="tab-7" class="tab_content current">
                                        <div class="swiper catslider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-1.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-1.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-1.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next swiper-btn"></div>
                                            <div class="swiper-button-prev swiper-btn"></div>
                                        </div>
                                        <div class="icon-box-popup d-flex justify-content-between px-2">
                                            <div class="similer-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M15.7781 4.83333V18.9167H8.69481V4.83333H15.7781ZM16.3615 4H8.11148C7.96981 4 7.86148 4.10833 7.86148 4.25V19.5C7.86148 19.6417 7.96981 19.75 8.11148 19.75H16.3615C16.5031 19.75 16.6115 19.6417 16.6115 19.5V4.25C16.6115 4.10833 16.5031 4 16.3615 4Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M5.62815 17.6919C5.56149 17.6919 5.48649 17.6752 5.42815 17.6419C5.32815 17.5835 5.26149 17.5002 5.22815 17.3919L5.13649 17.0585L3.01149 8.65855C2.98649 8.55021 3.00315 8.43355 3.05315 8.34188C3.11149 8.25021 3.20315 8.17521 3.31149 8.15021L6.56982 7.32521C6.80315 7.26688 7.01982 7.40021 7.07815 7.62521C7.13649 7.85021 7.00315 8.07521 6.77815 8.13355L3.92815 8.85855L5.92815 16.7669L6.57815 16.6002C6.80315 16.5419 7.02815 16.6752 7.08649 16.9002C7.14482 17.1252 7.01149 17.3502 6.78649 17.4085L5.76149 17.6835C5.76149 17.6835 5.68649 17.7002 5.64482 17.7002L5.62815 17.6919Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M18.7698 17.6499C18.7698 17.6499 18.6948 17.6499 18.6531 17.6333L17.6281 17.3583C17.4031 17.2999 17.2698 17.0749 17.3281 16.8499C17.3865 16.6249 17.6031 16.4916 17.8365 16.5499L18.4865 16.7166L20.4865 8.80825L17.6365 8.08325C17.4115 8.02492 17.2781 7.79992 17.3365 7.57492C17.3948 7.34992 17.6115 7.21659 17.8448 7.27492L21.1031 8.09992C21.2115 8.12492 21.3031 8.19992 21.3615 8.29159C21.4198 8.39159 21.4365 8.49992 21.4031 8.60825L21.3198 8.92492L19.1865 17.3416C19.1531 17.4499 19.0865 17.5416 18.9865 17.5916C18.9198 17.6249 18.8531 17.6416 18.7865 17.6416L18.7698 17.6499Z"
                                                            fill="#161618" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="wishlist-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M7.74001 3.50001C8.80001 3.50001 9.80001 3.93001 10.71 4.77001C10.85 4.90001 10.98 5.03001 11.12 5.16001L11.33 5.37001L12.06 6.08001L12.75 5.34001L12.81 5.27001L13 5.06001C13.8 4.18001 14.73 3.68001 15.82 3.56001C16.02 3.54001 16.22 3.52001 16.41 3.52001C17.51 3.52001 18.48 3.91001 19.31 4.68001C20.58 5.87001 21.12 7.32001 20.96 9.11001C20.86 10.27 20.39 11.31 19.56 12.2C17.7 14.21 15.83 16.22 13.97 18.23L11.99 20.36L9.92001 18.13C8.08001 16.15 6.25001 14.18 4.42001 12.2C3.60001 11.31 3.14001 10.29 3.01001 9.08001C3.01001 9.02001 2.99001 8.97001 2.98001 8.90001V8.21001C3.00001 8.12001 3.01001 8.02001 3.02001 7.93001C3.05001 7.70001 3.09001 7.48001 3.14001 7.30001C3.67001 5.33001 4.77001 4.14001 6.51001 3.67001C6.92001 3.56001 7.33001 3.50001 7.72001 3.50001M7.72001 2.50001C7.24001 2.50001 6.75001 2.57001 6.25001 2.70001C4.06001 3.29001 2.76001 4.84001 2.18001 7.03001C2.08001 7.39001 2.05001 7.76001 1.99001 8.12001V9.00001C2.00001 9.06001 2.02001 9.12001 2.02001 9.17001C2.17001 10.59 2.73001 11.83 3.69001 12.87C6.24001 15.63 8.81001 18.38 11.36 21.14C11.58 21.37 11.78 21.49 11.99 21.49C12.2 21.49 12.4 21.37 12.62 21.14C15.18 18.38 17.74 15.63 20.29 12.87C21.25 11.84 21.82 10.61 21.95 9.19001C22.14 7.12001 21.49 5.34001 19.99 3.93001C18.96 2.97001 17.75 2.50001 16.41 2.50001C16.18 2.50001 15.94 2.51001 15.7 2.54001C14.33 2.70001 13.19 3.34001 12.26 4.37001C12.17 4.47001 12.08 4.56001 12.01 4.64001C11.79 4.42001 11.58 4.22001 11.37 4.02001C10.28 3.02001 9.06001 2.49001 7.72001 2.49001V2.50001Z"
                                                            fill="#0D0D0E" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc-cat">
                                            <p>Aquamarine Infinity Heart Pendant with Diamonds</p>
                                        </div>
                                        <div
                                            class="slider-tab-pirce d-flex justify-content-between align-items-center">
                                            <div class="price-wwrap-prdt">
                                                <span>$111</span>
                                               
                                            </div>

                                        </div>
                                    </div>
                                    <div data-tab="tab-8" class="tab_content">
                                        <div class="swiper catslider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-2.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images//slide-2.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images//slide-2.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next swiper-btn"></div>
                                            <div class="swiper-button-prev swiper-btn"></div>
                                        </div>
                                        <div class="icon-box-popup d-flex justify-content-between px-2">
                                            <div class="similer-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M15.7781 4.83333V18.9167H8.69481V4.83333H15.7781ZM16.3615 4H8.11148C7.96981 4 7.86148 4.10833 7.86148 4.25V19.5C7.86148 19.6417 7.96981 19.75 8.11148 19.75H16.3615C16.5031 19.75 16.6115 19.6417 16.6115 19.5V4.25C16.6115 4.10833 16.5031 4 16.3615 4Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M5.62815 17.6919C5.56149 17.6919 5.48649 17.6752 5.42815 17.6419C5.32815 17.5835 5.26149 17.5002 5.22815 17.3919L5.13649 17.0585L3.01149 8.65855C2.98649 8.55021 3.00315 8.43355 3.05315 8.34188C3.11149 8.25021 3.20315 8.17521 3.31149 8.15021L6.56982 7.32521C6.80315 7.26688 7.01982 7.40021 7.07815 7.62521C7.13649 7.85021 7.00315 8.07521 6.77815 8.13355L3.92815 8.85855L5.92815 16.7669L6.57815 16.6002C6.80315 16.5419 7.02815 16.6752 7.08649 16.9002C7.14482 17.1252 7.01149 17.3502 6.78649 17.4085L5.76149 17.6835C5.76149 17.6835 5.68649 17.7002 5.64482 17.7002L5.62815 17.6919Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M18.7698 17.6499C18.7698 17.6499 18.6948 17.6499 18.6531 17.6333L17.6281 17.3583C17.4031 17.2999 17.2698 17.0749 17.3281 16.8499C17.3865 16.6249 17.6031 16.4916 17.8365 16.5499L18.4865 16.7166L20.4865 8.80825L17.6365 8.08325C17.4115 8.02492 17.2781 7.79992 17.3365 7.57492C17.3948 7.34992 17.6115 7.21659 17.8448 7.27492L21.1031 8.09992C21.2115 8.12492 21.3031 8.19992 21.3615 8.29159C21.4198 8.39159 21.4365 8.49992 21.4031 8.60825L21.3198 8.92492L19.1865 17.3416C19.1531 17.4499 19.0865 17.5416 18.9865 17.5916C18.9198 17.6249 18.8531 17.6416 18.7865 17.6416L18.7698 17.6499Z"
                                                            fill="#161618" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="wishlist-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M7.74001 3.50001C8.80001 3.50001 9.80001 3.93001 10.71 4.77001C10.85 4.90001 10.98 5.03001 11.12 5.16001L11.33 5.37001L12.06 6.08001L12.75 5.34001L12.81 5.27001L13 5.06001C13.8 4.18001 14.73 3.68001 15.82 3.56001C16.02 3.54001 16.22 3.52001 16.41 3.52001C17.51 3.52001 18.48 3.91001 19.31 4.68001C20.58 5.87001 21.12 7.32001 20.96 9.11001C20.86 10.27 20.39 11.31 19.56 12.2C17.7 14.21 15.83 16.22 13.97 18.23L11.99 20.36L9.92001 18.13C8.08001 16.15 6.25001 14.18 4.42001 12.2C3.60001 11.31 3.14001 10.29 3.01001 9.08001C3.01001 9.02001 2.99001 8.97001 2.98001 8.90001V8.21001C3.00001 8.12001 3.01001 8.02001 3.02001 7.93001C3.05001 7.70001 3.09001 7.48001 3.14001 7.30001C3.67001 5.33001 4.77001 4.14001 6.51001 3.67001C6.92001 3.56001 7.33001 3.50001 7.72001 3.50001M7.72001 2.50001C7.24001 2.50001 6.75001 2.57001 6.25001 2.70001C4.06001 3.29001 2.76001 4.84001 2.18001 7.03001C2.08001 7.39001 2.05001 7.76001 1.99001 8.12001V9.00001C2.00001 9.06001 2.02001 9.12001 2.02001 9.17001C2.17001 10.59 2.73001 11.83 3.69001 12.87C6.24001 15.63 8.81001 18.38 11.36 21.14C11.58 21.37 11.78 21.49 11.99 21.49C12.2 21.49 12.4 21.37 12.62 21.14C15.18 18.38 17.74 15.63 20.29 12.87C21.25 11.84 21.82 10.61 21.95 9.19001C22.14 7.12001 21.49 5.34001 19.99 3.93001C18.96 2.97001 17.75 2.50001 16.41 2.50001C16.18 2.50001 15.94 2.51001 15.7 2.54001C14.33 2.70001 13.19 3.34001 12.26 4.37001C12.17 4.47001 12.08 4.56001 12.01 4.64001C11.79 4.42001 11.58 4.22001 11.37 4.02001C10.28 3.02001 9.06001 2.49001 7.72001 2.49001V2.50001Z"
                                                            fill="#0D0D0E" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc-cat">
                                            <p>Aquamarine Infinity Heart Pendant with Diamonds22</p>
                                        </div>
                                        <div
                                            class="slider-tab-pirce d-flex justify-content-between align-items-center">
                                            <div class="price-wwrap-prdt">
                                                <span>$222</span>
                                               
                                            </div>

                                        </div>
                                    </div>
                                    <div data-tab="tab-9" class="tab_content">
                                        <div class="swiper catslider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-3.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-3.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-3.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next swiper-btn"></div>
                                            <div class="swiper-button-prev swiper-btn"></div>
                                        </div>
                                        <div class="icon-box-popup d-flex justify-content-between px-2">
                                            <div class="similer-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M15.7781 4.83333V18.9167H8.69481V4.83333H15.7781ZM16.3615 4H8.11148C7.96981 4 7.86148 4.10833 7.86148 4.25V19.5C7.86148 19.6417 7.96981 19.75 8.11148 19.75H16.3615C16.5031 19.75 16.6115 19.6417 16.6115 19.5V4.25C16.6115 4.10833 16.5031 4 16.3615 4Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M5.62815 17.6919C5.56149 17.6919 5.48649 17.6752 5.42815 17.6419C5.32815 17.5835 5.26149 17.5002 5.22815 17.3919L5.13649 17.0585L3.01149 8.65855C2.98649 8.55021 3.00315 8.43355 3.05315 8.34188C3.11149 8.25021 3.20315 8.17521 3.31149 8.15021L6.56982 7.32521C6.80315 7.26688 7.01982 7.40021 7.07815 7.62521C7.13649 7.85021 7.00315 8.07521 6.77815 8.13355L3.92815 8.85855L5.92815 16.7669L6.57815 16.6002C6.80315 16.5419 7.02815 16.6752 7.08649 16.9002C7.14482 17.1252 7.01149 17.3502 6.78649 17.4085L5.76149 17.6835C5.76149 17.6835 5.68649 17.7002 5.64482 17.7002L5.62815 17.6919Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M18.7698 17.6499C18.7698 17.6499 18.6948 17.6499 18.6531 17.6333L17.6281 17.3583C17.4031 17.2999 17.2698 17.0749 17.3281 16.8499C17.3865 16.6249 17.6031 16.4916 17.8365 16.5499L18.4865 16.7166L20.4865 8.80825L17.6365 8.08325C17.4115 8.02492 17.2781 7.79992 17.3365 7.57492C17.3948 7.34992 17.6115 7.21659 17.8448 7.27492L21.1031 8.09992C21.2115 8.12492 21.3031 8.19992 21.3615 8.29159C21.4198 8.39159 21.4365 8.49992 21.4031 8.60825L21.3198 8.92492L19.1865 17.3416C19.1531 17.4499 19.0865 17.5416 18.9865 17.5916C18.9198 17.6249 18.8531 17.6416 18.7865 17.6416L18.7698 17.6499Z"
                                                            fill="#161618" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="wishlist-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M7.74001 3.50001C8.80001 3.50001 9.80001 3.93001 10.71 4.77001C10.85 4.90001 10.98 5.03001 11.12 5.16001L11.33 5.37001L12.06 6.08001L12.75 5.34001L12.81 5.27001L13 5.06001C13.8 4.18001 14.73 3.68001 15.82 3.56001C16.02 3.54001 16.22 3.52001 16.41 3.52001C17.51 3.52001 18.48 3.91001 19.31 4.68001C20.58 5.87001 21.12 7.32001 20.96 9.11001C20.86 10.27 20.39 11.31 19.56 12.2C17.7 14.21 15.83 16.22 13.97 18.23L11.99 20.36L9.92001 18.13C8.08001 16.15 6.25001 14.18 4.42001 12.2C3.60001 11.31 3.14001 10.29 3.01001 9.08001C3.01001 9.02001 2.99001 8.97001 2.98001 8.90001V8.21001C3.00001 8.12001 3.01001 8.02001 3.02001 7.93001C3.05001 7.70001 3.09001 7.48001 3.14001 7.30001C3.67001 5.33001 4.77001 4.14001 6.51001 3.67001C6.92001 3.56001 7.33001 3.50001 7.72001 3.50001M7.72001 2.50001C7.24001 2.50001 6.75001 2.57001 6.25001 2.70001C4.06001 3.29001 2.76001 4.84001 2.18001 7.03001C2.08001 7.39001 2.05001 7.76001 1.99001 8.12001V9.00001C2.00001 9.06001 2.02001 9.12001 2.02001 9.17001C2.17001 10.59 2.73001 11.83 3.69001 12.87C6.24001 15.63 8.81001 18.38 11.36 21.14C11.58 21.37 11.78 21.49 11.99 21.49C12.2 21.49 12.4 21.37 12.62 21.14C15.18 18.38 17.74 15.63 20.29 12.87C21.25 11.84 21.82 10.61 21.95 9.19001C22.14 7.12001 21.49 5.34001 19.99 3.93001C18.96 2.97001 17.75 2.50001 16.41 2.50001C16.18 2.50001 15.94 2.51001 15.7 2.54001C14.33 2.70001 13.19 3.34001 12.26 4.37001C12.17 4.47001 12.08 4.56001 12.01 4.64001C11.79 4.42001 11.58 4.22001 11.37 4.02001C10.28 3.02001 9.06001 2.49001 7.72001 2.49001V2.50001Z"
                                                            fill="#0D0D0E" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc-cat">
                                            <p>Aquamarine Infinity Heart Pendant with Diamonds3</p>
                                        </div>
                                        <div
                                            class="slider-tab-pirce d-flex justify-content-between align-items-center">
                                            <div class="price-wwrap-prdt">
                                                <span>$333</span>
                                                -
                                                <span>$333</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cat-box tabs_wrapper">
                                <ul class="slider-tabs tabs align-items-center">
                                    <li class="tab-link current" id="tab-7">
                                        <img src="./images/slide-tab-1.webp" alt="">
                                    </li>
                                    <li class="tab-link" id="tab-8">
                                        <img src="./images/slide-tab-2.webp" alt="">
                                    </li>
                                    <li class="tab-link" id="tab-9">
                                        <img src="./images/slide-tab-3.webp" alt="">
                                    </li>
                                    <div class="more-prdt-btn">
                                        <button class="button-modal" type="button" data-bs-toggle="modal"
                                            data-bs-target="#MoreProduct">+15</button>

                                    </div>
                                </ul>
                                <div class="tabs_container">
                                    <div data-tab="tab-7" class="tab_content current">
                                        <div class="swiper catslider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-1.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-1.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-1.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next swiper-btn"></div>
                                            <div class="swiper-button-prev swiper-btn"></div>
                                        </div>
                                        <div class="icon-box-popup d-flex justify-content-between px-2">
                                            <div class="similer-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M15.7781 4.83333V18.9167H8.69481V4.83333H15.7781ZM16.3615 4H8.11148C7.96981 4 7.86148 4.10833 7.86148 4.25V19.5C7.86148 19.6417 7.96981 19.75 8.11148 19.75H16.3615C16.5031 19.75 16.6115 19.6417 16.6115 19.5V4.25C16.6115 4.10833 16.5031 4 16.3615 4Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M5.62815 17.6919C5.56149 17.6919 5.48649 17.6752 5.42815 17.6419C5.32815 17.5835 5.26149 17.5002 5.22815 17.3919L5.13649 17.0585L3.01149 8.65855C2.98649 8.55021 3.00315 8.43355 3.05315 8.34188C3.11149 8.25021 3.20315 8.17521 3.31149 8.15021L6.56982 7.32521C6.80315 7.26688 7.01982 7.40021 7.07815 7.62521C7.13649 7.85021 7.00315 8.07521 6.77815 8.13355L3.92815 8.85855L5.92815 16.7669L6.57815 16.6002C6.80315 16.5419 7.02815 16.6752 7.08649 16.9002C7.14482 17.1252 7.01149 17.3502 6.78649 17.4085L5.76149 17.6835C5.76149 17.6835 5.68649 17.7002 5.64482 17.7002L5.62815 17.6919Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M18.7698 17.6499C18.7698 17.6499 18.6948 17.6499 18.6531 17.6333L17.6281 17.3583C17.4031 17.2999 17.2698 17.0749 17.3281 16.8499C17.3865 16.6249 17.6031 16.4916 17.8365 16.5499L18.4865 16.7166L20.4865 8.80825L17.6365 8.08325C17.4115 8.02492 17.2781 7.79992 17.3365 7.57492C17.3948 7.34992 17.6115 7.21659 17.8448 7.27492L21.1031 8.09992C21.2115 8.12492 21.3031 8.19992 21.3615 8.29159C21.4198 8.39159 21.4365 8.49992 21.4031 8.60825L21.3198 8.92492L19.1865 17.3416C19.1531 17.4499 19.0865 17.5416 18.9865 17.5916C18.9198 17.6249 18.8531 17.6416 18.7865 17.6416L18.7698 17.6499Z"
                                                            fill="#161618" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="wishlist-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M7.74001 3.50001C8.80001 3.50001 9.80001 3.93001 10.71 4.77001C10.85 4.90001 10.98 5.03001 11.12 5.16001L11.33 5.37001L12.06 6.08001L12.75 5.34001L12.81 5.27001L13 5.06001C13.8 4.18001 14.73 3.68001 15.82 3.56001C16.02 3.54001 16.22 3.52001 16.41 3.52001C17.51 3.52001 18.48 3.91001 19.31 4.68001C20.58 5.87001 21.12 7.32001 20.96 9.11001C20.86 10.27 20.39 11.31 19.56 12.2C17.7 14.21 15.83 16.22 13.97 18.23L11.99 20.36L9.92001 18.13C8.08001 16.15 6.25001 14.18 4.42001 12.2C3.60001 11.31 3.14001 10.29 3.01001 9.08001C3.01001 9.02001 2.99001 8.97001 2.98001 8.90001V8.21001C3.00001 8.12001 3.01001 8.02001 3.02001 7.93001C3.05001 7.70001 3.09001 7.48001 3.14001 7.30001C3.67001 5.33001 4.77001 4.14001 6.51001 3.67001C6.92001 3.56001 7.33001 3.50001 7.72001 3.50001M7.72001 2.50001C7.24001 2.50001 6.75001 2.57001 6.25001 2.70001C4.06001 3.29001 2.76001 4.84001 2.18001 7.03001C2.08001 7.39001 2.05001 7.76001 1.99001 8.12001V9.00001C2.00001 9.06001 2.02001 9.12001 2.02001 9.17001C2.17001 10.59 2.73001 11.83 3.69001 12.87C6.24001 15.63 8.81001 18.38 11.36 21.14C11.58 21.37 11.78 21.49 11.99 21.49C12.2 21.49 12.4 21.37 12.62 21.14C15.18 18.38 17.74 15.63 20.29 12.87C21.25 11.84 21.82 10.61 21.95 9.19001C22.14 7.12001 21.49 5.34001 19.99 3.93001C18.96 2.97001 17.75 2.50001 16.41 2.50001C16.18 2.50001 15.94 2.51001 15.7 2.54001C14.33 2.70001 13.19 3.34001 12.26 4.37001C12.17 4.47001 12.08 4.56001 12.01 4.64001C11.79 4.42001 11.58 4.22001 11.37 4.02001C10.28 3.02001 9.06001 2.49001 7.72001 2.49001V2.50001Z"
                                                            fill="#0D0D0E" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc-cat">
                                            <p>Aquamarine Infinity Heart Pendant with Diamonds</p>
                                        </div>
                                        <div
                                            class="slider-tab-pirce d-flex justify-content-between align-items-center">
                                            <div class="price-wwrap-prdt">
                                                <span>$111</span>
                                               
                                            </div>

                                        </div>
                                    </div>
                                    <div data-tab="tab-8" class="tab_content">
                                        <div class="swiper catslider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-2.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images//slide-2.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images//slide-2.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next swiper-btn"></div>
                                            <div class="swiper-button-prev swiper-btn"></div>
                                        </div>
                                        <div class="icon-box-popup d-flex justify-content-between px-2">
                                            <div class="similer-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M15.7781 4.83333V18.9167H8.69481V4.83333H15.7781ZM16.3615 4H8.11148C7.96981 4 7.86148 4.10833 7.86148 4.25V19.5C7.86148 19.6417 7.96981 19.75 8.11148 19.75H16.3615C16.5031 19.75 16.6115 19.6417 16.6115 19.5V4.25C16.6115 4.10833 16.5031 4 16.3615 4Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M5.62815 17.6919C5.56149 17.6919 5.48649 17.6752 5.42815 17.6419C5.32815 17.5835 5.26149 17.5002 5.22815 17.3919L5.13649 17.0585L3.01149 8.65855C2.98649 8.55021 3.00315 8.43355 3.05315 8.34188C3.11149 8.25021 3.20315 8.17521 3.31149 8.15021L6.56982 7.32521C6.80315 7.26688 7.01982 7.40021 7.07815 7.62521C7.13649 7.85021 7.00315 8.07521 6.77815 8.13355L3.92815 8.85855L5.92815 16.7669L6.57815 16.6002C6.80315 16.5419 7.02815 16.6752 7.08649 16.9002C7.14482 17.1252 7.01149 17.3502 6.78649 17.4085L5.76149 17.6835C5.76149 17.6835 5.68649 17.7002 5.64482 17.7002L5.62815 17.6919Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M18.7698 17.6499C18.7698 17.6499 18.6948 17.6499 18.6531 17.6333L17.6281 17.3583C17.4031 17.2999 17.2698 17.0749 17.3281 16.8499C17.3865 16.6249 17.6031 16.4916 17.8365 16.5499L18.4865 16.7166L20.4865 8.80825L17.6365 8.08325C17.4115 8.02492 17.2781 7.79992 17.3365 7.57492C17.3948 7.34992 17.6115 7.21659 17.8448 7.27492L21.1031 8.09992C21.2115 8.12492 21.3031 8.19992 21.3615 8.29159C21.4198 8.39159 21.4365 8.49992 21.4031 8.60825L21.3198 8.92492L19.1865 17.3416C19.1531 17.4499 19.0865 17.5416 18.9865 17.5916C18.9198 17.6249 18.8531 17.6416 18.7865 17.6416L18.7698 17.6499Z"
                                                            fill="#161618" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="wishlist-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M7.74001 3.50001C8.80001 3.50001 9.80001 3.93001 10.71 4.77001C10.85 4.90001 10.98 5.03001 11.12 5.16001L11.33 5.37001L12.06 6.08001L12.75 5.34001L12.81 5.27001L13 5.06001C13.8 4.18001 14.73 3.68001 15.82 3.56001C16.02 3.54001 16.22 3.52001 16.41 3.52001C17.51 3.52001 18.48 3.91001 19.31 4.68001C20.58 5.87001 21.12 7.32001 20.96 9.11001C20.86 10.27 20.39 11.31 19.56 12.2C17.7 14.21 15.83 16.22 13.97 18.23L11.99 20.36L9.92001 18.13C8.08001 16.15 6.25001 14.18 4.42001 12.2C3.60001 11.31 3.14001 10.29 3.01001 9.08001C3.01001 9.02001 2.99001 8.97001 2.98001 8.90001V8.21001C3.00001 8.12001 3.01001 8.02001 3.02001 7.93001C3.05001 7.70001 3.09001 7.48001 3.14001 7.30001C3.67001 5.33001 4.77001 4.14001 6.51001 3.67001C6.92001 3.56001 7.33001 3.50001 7.72001 3.50001M7.72001 2.50001C7.24001 2.50001 6.75001 2.57001 6.25001 2.70001C4.06001 3.29001 2.76001 4.84001 2.18001 7.03001C2.08001 7.39001 2.05001 7.76001 1.99001 8.12001V9.00001C2.00001 9.06001 2.02001 9.12001 2.02001 9.17001C2.17001 10.59 2.73001 11.83 3.69001 12.87C6.24001 15.63 8.81001 18.38 11.36 21.14C11.58 21.37 11.78 21.49 11.99 21.49C12.2 21.49 12.4 21.37 12.62 21.14C15.18 18.38 17.74 15.63 20.29 12.87C21.25 11.84 21.82 10.61 21.95 9.19001C22.14 7.12001 21.49 5.34001 19.99 3.93001C18.96 2.97001 17.75 2.50001 16.41 2.50001C16.18 2.50001 15.94 2.51001 15.7 2.54001C14.33 2.70001 13.19 3.34001 12.26 4.37001C12.17 4.47001 12.08 4.56001 12.01 4.64001C11.79 4.42001 11.58 4.22001 11.37 4.02001C10.28 3.02001 9.06001 2.49001 7.72001 2.49001V2.50001Z"
                                                            fill="#0D0D0E" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc-cat">
                                            <p>Aquamarine Infinity Heart Pendant with Diamonds22</p>
                                        </div>
                                        <div
                                            class="slider-tab-pirce d-flex justify-content-between align-items-center">
                                            <div class="price-wwrap-prdt">
                                                <span>$222</span>
                                               
                                            </div>

                                        </div>
                                    </div>
                                    <div data-tab="tab-9" class="tab_content">
                                        <div class="swiper catslider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-3.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-3.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-3.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next swiper-btn"></div>
                                            <div class="swiper-button-prev swiper-btn"></div>
                                        </div>
                                        <div class="icon-box-popup d-flex justify-content-between px-2">
                                            <div class="similer-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M15.7781 4.83333V18.9167H8.69481V4.83333H15.7781ZM16.3615 4H8.11148C7.96981 4 7.86148 4.10833 7.86148 4.25V19.5C7.86148 19.6417 7.96981 19.75 8.11148 19.75H16.3615C16.5031 19.75 16.6115 19.6417 16.6115 19.5V4.25C16.6115 4.10833 16.5031 4 16.3615 4Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M5.62815 17.6919C5.56149 17.6919 5.48649 17.6752 5.42815 17.6419C5.32815 17.5835 5.26149 17.5002 5.22815 17.3919L5.13649 17.0585L3.01149 8.65855C2.98649 8.55021 3.00315 8.43355 3.05315 8.34188C3.11149 8.25021 3.20315 8.17521 3.31149 8.15021L6.56982 7.32521C6.80315 7.26688 7.01982 7.40021 7.07815 7.62521C7.13649 7.85021 7.00315 8.07521 6.77815 8.13355L3.92815 8.85855L5.92815 16.7669L6.57815 16.6002C6.80315 16.5419 7.02815 16.6752 7.08649 16.9002C7.14482 17.1252 7.01149 17.3502 6.78649 17.4085L5.76149 17.6835C5.76149 17.6835 5.68649 17.7002 5.64482 17.7002L5.62815 17.6919Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M18.7698 17.6499C18.7698 17.6499 18.6948 17.6499 18.6531 17.6333L17.6281 17.3583C17.4031 17.2999 17.2698 17.0749 17.3281 16.8499C17.3865 16.6249 17.6031 16.4916 17.8365 16.5499L18.4865 16.7166L20.4865 8.80825L17.6365 8.08325C17.4115 8.02492 17.2781 7.79992 17.3365 7.57492C17.3948 7.34992 17.6115 7.21659 17.8448 7.27492L21.1031 8.09992C21.2115 8.12492 21.3031 8.19992 21.3615 8.29159C21.4198 8.39159 21.4365 8.49992 21.4031 8.60825L21.3198 8.92492L19.1865 17.3416C19.1531 17.4499 19.0865 17.5416 18.9865 17.5916C18.9198 17.6249 18.8531 17.6416 18.7865 17.6416L18.7698 17.6499Z"
                                                            fill="#161618" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="wishlist-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M7.74001 3.50001C8.80001 3.50001 9.80001 3.93001 10.71 4.77001C10.85 4.90001 10.98 5.03001 11.12 5.16001L11.33 5.37001L12.06 6.08001L12.75 5.34001L12.81 5.27001L13 5.06001C13.8 4.18001 14.73 3.68001 15.82 3.56001C16.02 3.54001 16.22 3.52001 16.41 3.52001C17.51 3.52001 18.48 3.91001 19.31 4.68001C20.58 5.87001 21.12 7.32001 20.96 9.11001C20.86 10.27 20.39 11.31 19.56 12.2C17.7 14.21 15.83 16.22 13.97 18.23L11.99 20.36L9.92001 18.13C8.08001 16.15 6.25001 14.18 4.42001 12.2C3.60001 11.31 3.14001 10.29 3.01001 9.08001C3.01001 9.02001 2.99001 8.97001 2.98001 8.90001V8.21001C3.00001 8.12001 3.01001 8.02001 3.02001 7.93001C3.05001 7.70001 3.09001 7.48001 3.14001 7.30001C3.67001 5.33001 4.77001 4.14001 6.51001 3.67001C6.92001 3.56001 7.33001 3.50001 7.72001 3.50001M7.72001 2.50001C7.24001 2.50001 6.75001 2.57001 6.25001 2.70001C4.06001 3.29001 2.76001 4.84001 2.18001 7.03001C2.08001 7.39001 2.05001 7.76001 1.99001 8.12001V9.00001C2.00001 9.06001 2.02001 9.12001 2.02001 9.17001C2.17001 10.59 2.73001 11.83 3.69001 12.87C6.24001 15.63 8.81001 18.38 11.36 21.14C11.58 21.37 11.78 21.49 11.99 21.49C12.2 21.49 12.4 21.37 12.62 21.14C15.18 18.38 17.74 15.63 20.29 12.87C21.25 11.84 21.82 10.61 21.95 9.19001C22.14 7.12001 21.49 5.34001 19.99 3.93001C18.96 2.97001 17.75 2.50001 16.41 2.50001C16.18 2.50001 15.94 2.51001 15.7 2.54001C14.33 2.70001 13.19 3.34001 12.26 4.37001C12.17 4.47001 12.08 4.56001 12.01 4.64001C11.79 4.42001 11.58 4.22001 11.37 4.02001C10.28 3.02001 9.06001 2.49001 7.72001 2.49001V2.50001Z"
                                                            fill="#0D0D0E" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc-cat">
                                            <p>Aquamarine Infinity Heart Pendant with Diamonds3</p>
                                        </div>
                                        <div
                                            class="slider-tab-pirce d-flex justify-content-between align-items-center">
                                            <div class="price-wwrap-prdt">
                                                <span>$333</span>
                                                -
                                                <span>$333</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cat-box tabs_wrapper">
                                <ul class="slider-tabs tabs align-items-center">
                                    <li class="tab-link current" id="tab-7">
                                        <img src="./images/slide-tab-1.webp" alt="">
                                    </li>
                                    <li class="tab-link" id="tab-8">
                                        <img src="./images/slide-tab-2.webp" alt="">
                                    </li>
                                    <li class="tab-link" id="tab-9">
                                        <img src="./images/slide-tab-3.webp" alt="">
                                    </li>
                                    <div class="more-prdt-btn">
                                        <button class="button-modal" type="button" data-bs-toggle="modal"
                                            data-bs-target="#MoreProduct">+15</button>

                                    </div>
                                </ul>
                                <div class="tabs_container">
                                    <div data-tab="tab-7" class="tab_content current">
                                        <div class="swiper catslider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-1.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-1.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-1.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next swiper-btn"></div>
                                            <div class="swiper-button-prev swiper-btn"></div>
                                        </div>
                                        <div class="icon-box-popup d-flex justify-content-between px-2">
                                            <div class="similer-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M15.7781 4.83333V18.9167H8.69481V4.83333H15.7781ZM16.3615 4H8.11148C7.96981 4 7.86148 4.10833 7.86148 4.25V19.5C7.86148 19.6417 7.96981 19.75 8.11148 19.75H16.3615C16.5031 19.75 16.6115 19.6417 16.6115 19.5V4.25C16.6115 4.10833 16.5031 4 16.3615 4Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M5.62815 17.6919C5.56149 17.6919 5.48649 17.6752 5.42815 17.6419C5.32815 17.5835 5.26149 17.5002 5.22815 17.3919L5.13649 17.0585L3.01149 8.65855C2.98649 8.55021 3.00315 8.43355 3.05315 8.34188C3.11149 8.25021 3.20315 8.17521 3.31149 8.15021L6.56982 7.32521C6.80315 7.26688 7.01982 7.40021 7.07815 7.62521C7.13649 7.85021 7.00315 8.07521 6.77815 8.13355L3.92815 8.85855L5.92815 16.7669L6.57815 16.6002C6.80315 16.5419 7.02815 16.6752 7.08649 16.9002C7.14482 17.1252 7.01149 17.3502 6.78649 17.4085L5.76149 17.6835C5.76149 17.6835 5.68649 17.7002 5.64482 17.7002L5.62815 17.6919Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M18.7698 17.6499C18.7698 17.6499 18.6948 17.6499 18.6531 17.6333L17.6281 17.3583C17.4031 17.2999 17.2698 17.0749 17.3281 16.8499C17.3865 16.6249 17.6031 16.4916 17.8365 16.5499L18.4865 16.7166L20.4865 8.80825L17.6365 8.08325C17.4115 8.02492 17.2781 7.79992 17.3365 7.57492C17.3948 7.34992 17.6115 7.21659 17.8448 7.27492L21.1031 8.09992C21.2115 8.12492 21.3031 8.19992 21.3615 8.29159C21.4198 8.39159 21.4365 8.49992 21.4031 8.60825L21.3198 8.92492L19.1865 17.3416C19.1531 17.4499 19.0865 17.5416 18.9865 17.5916C18.9198 17.6249 18.8531 17.6416 18.7865 17.6416L18.7698 17.6499Z"
                                                            fill="#161618" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="wishlist-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M7.74001 3.50001C8.80001 3.50001 9.80001 3.93001 10.71 4.77001C10.85 4.90001 10.98 5.03001 11.12 5.16001L11.33 5.37001L12.06 6.08001L12.75 5.34001L12.81 5.27001L13 5.06001C13.8 4.18001 14.73 3.68001 15.82 3.56001C16.02 3.54001 16.22 3.52001 16.41 3.52001C17.51 3.52001 18.48 3.91001 19.31 4.68001C20.58 5.87001 21.12 7.32001 20.96 9.11001C20.86 10.27 20.39 11.31 19.56 12.2C17.7 14.21 15.83 16.22 13.97 18.23L11.99 20.36L9.92001 18.13C8.08001 16.15 6.25001 14.18 4.42001 12.2C3.60001 11.31 3.14001 10.29 3.01001 9.08001C3.01001 9.02001 2.99001 8.97001 2.98001 8.90001V8.21001C3.00001 8.12001 3.01001 8.02001 3.02001 7.93001C3.05001 7.70001 3.09001 7.48001 3.14001 7.30001C3.67001 5.33001 4.77001 4.14001 6.51001 3.67001C6.92001 3.56001 7.33001 3.50001 7.72001 3.50001M7.72001 2.50001C7.24001 2.50001 6.75001 2.57001 6.25001 2.70001C4.06001 3.29001 2.76001 4.84001 2.18001 7.03001C2.08001 7.39001 2.05001 7.76001 1.99001 8.12001V9.00001C2.00001 9.06001 2.02001 9.12001 2.02001 9.17001C2.17001 10.59 2.73001 11.83 3.69001 12.87C6.24001 15.63 8.81001 18.38 11.36 21.14C11.58 21.37 11.78 21.49 11.99 21.49C12.2 21.49 12.4 21.37 12.62 21.14C15.18 18.38 17.74 15.63 20.29 12.87C21.25 11.84 21.82 10.61 21.95 9.19001C22.14 7.12001 21.49 5.34001 19.99 3.93001C18.96 2.97001 17.75 2.50001 16.41 2.50001C16.18 2.50001 15.94 2.51001 15.7 2.54001C14.33 2.70001 13.19 3.34001 12.26 4.37001C12.17 4.47001 12.08 4.56001 12.01 4.64001C11.79 4.42001 11.58 4.22001 11.37 4.02001C10.28 3.02001 9.06001 2.49001 7.72001 2.49001V2.50001Z"
                                                            fill="#0D0D0E" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc-cat">
                                            <p>Aquamarine Infinity Heart Pendant with Diamonds</p>
                                        </div>
                                        <div
                                            class="slider-tab-pirce d-flex justify-content-between align-items-center">
                                            <div class="price-wwrap-prdt">
                                                <span>$111</span>
                                               
                                            </div>

                                        </div>
                                    </div>
                                    <div data-tab="tab-8" class="tab_content">
                                        <div class="swiper catslider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-2.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images//slide-2.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images//slide-2.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next swiper-btn"></div>
                                            <div class="swiper-button-prev swiper-btn"></div>
                                        </div>
                                        <div class="icon-box-popup d-flex justify-content-between px-2">
                                            <div class="similer-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M15.7781 4.83333V18.9167H8.69481V4.83333H15.7781ZM16.3615 4H8.11148C7.96981 4 7.86148 4.10833 7.86148 4.25V19.5C7.86148 19.6417 7.96981 19.75 8.11148 19.75H16.3615C16.5031 19.75 16.6115 19.6417 16.6115 19.5V4.25C16.6115 4.10833 16.5031 4 16.3615 4Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M5.62815 17.6919C5.56149 17.6919 5.48649 17.6752 5.42815 17.6419C5.32815 17.5835 5.26149 17.5002 5.22815 17.3919L5.13649 17.0585L3.01149 8.65855C2.98649 8.55021 3.00315 8.43355 3.05315 8.34188C3.11149 8.25021 3.20315 8.17521 3.31149 8.15021L6.56982 7.32521C6.80315 7.26688 7.01982 7.40021 7.07815 7.62521C7.13649 7.85021 7.00315 8.07521 6.77815 8.13355L3.92815 8.85855L5.92815 16.7669L6.57815 16.6002C6.80315 16.5419 7.02815 16.6752 7.08649 16.9002C7.14482 17.1252 7.01149 17.3502 6.78649 17.4085L5.76149 17.6835C5.76149 17.6835 5.68649 17.7002 5.64482 17.7002L5.62815 17.6919Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M18.7698 17.6499C18.7698 17.6499 18.6948 17.6499 18.6531 17.6333L17.6281 17.3583C17.4031 17.2999 17.2698 17.0749 17.3281 16.8499C17.3865 16.6249 17.6031 16.4916 17.8365 16.5499L18.4865 16.7166L20.4865 8.80825L17.6365 8.08325C17.4115 8.02492 17.2781 7.79992 17.3365 7.57492C17.3948 7.34992 17.6115 7.21659 17.8448 7.27492L21.1031 8.09992C21.2115 8.12492 21.3031 8.19992 21.3615 8.29159C21.4198 8.39159 21.4365 8.49992 21.4031 8.60825L21.3198 8.92492L19.1865 17.3416C19.1531 17.4499 19.0865 17.5416 18.9865 17.5916C18.9198 17.6249 18.8531 17.6416 18.7865 17.6416L18.7698 17.6499Z"
                                                            fill="#161618" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="wishlist-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M7.74001 3.50001C8.80001 3.50001 9.80001 3.93001 10.71 4.77001C10.85 4.90001 10.98 5.03001 11.12 5.16001L11.33 5.37001L12.06 6.08001L12.75 5.34001L12.81 5.27001L13 5.06001C13.8 4.18001 14.73 3.68001 15.82 3.56001C16.02 3.54001 16.22 3.52001 16.41 3.52001C17.51 3.52001 18.48 3.91001 19.31 4.68001C20.58 5.87001 21.12 7.32001 20.96 9.11001C20.86 10.27 20.39 11.31 19.56 12.2C17.7 14.21 15.83 16.22 13.97 18.23L11.99 20.36L9.92001 18.13C8.08001 16.15 6.25001 14.18 4.42001 12.2C3.60001 11.31 3.14001 10.29 3.01001 9.08001C3.01001 9.02001 2.99001 8.97001 2.98001 8.90001V8.21001C3.00001 8.12001 3.01001 8.02001 3.02001 7.93001C3.05001 7.70001 3.09001 7.48001 3.14001 7.30001C3.67001 5.33001 4.77001 4.14001 6.51001 3.67001C6.92001 3.56001 7.33001 3.50001 7.72001 3.50001M7.72001 2.50001C7.24001 2.50001 6.75001 2.57001 6.25001 2.70001C4.06001 3.29001 2.76001 4.84001 2.18001 7.03001C2.08001 7.39001 2.05001 7.76001 1.99001 8.12001V9.00001C2.00001 9.06001 2.02001 9.12001 2.02001 9.17001C2.17001 10.59 2.73001 11.83 3.69001 12.87C6.24001 15.63 8.81001 18.38 11.36 21.14C11.58 21.37 11.78 21.49 11.99 21.49C12.2 21.49 12.4 21.37 12.62 21.14C15.18 18.38 17.74 15.63 20.29 12.87C21.25 11.84 21.82 10.61 21.95 9.19001C22.14 7.12001 21.49 5.34001 19.99 3.93001C18.96 2.97001 17.75 2.50001 16.41 2.50001C16.18 2.50001 15.94 2.51001 15.7 2.54001C14.33 2.70001 13.19 3.34001 12.26 4.37001C12.17 4.47001 12.08 4.56001 12.01 4.64001C11.79 4.42001 11.58 4.22001 11.37 4.02001C10.28 3.02001 9.06001 2.49001 7.72001 2.49001V2.50001Z"
                                                            fill="#0D0D0E" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc-cat">
                                            <p>Aquamarine Infinity Heart Pendant with Diamonds22</p>
                                        </div>
                                        <div
                                            class="slider-tab-pirce d-flex justify-content-between align-items-center">
                                            <div class="price-wwrap-prdt">
                                                <span>$222</span>
                                               
                                            </div>

                                        </div>
                                    </div>
                                    <div data-tab="tab-9" class="tab_content">
                                        <div class="swiper catslider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-3.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-3.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-3.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next swiper-btn"></div>
                                            <div class="swiper-button-prev swiper-btn"></div>
                                        </div>
                                        <div class="icon-box-popup d-flex justify-content-between px-2">
                                            <div class="similer-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M15.7781 4.83333V18.9167H8.69481V4.83333H15.7781ZM16.3615 4H8.11148C7.96981 4 7.86148 4.10833 7.86148 4.25V19.5C7.86148 19.6417 7.96981 19.75 8.11148 19.75H16.3615C16.5031 19.75 16.6115 19.6417 16.6115 19.5V4.25C16.6115 4.10833 16.5031 4 16.3615 4Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M5.62815 17.6919C5.56149 17.6919 5.48649 17.6752 5.42815 17.6419C5.32815 17.5835 5.26149 17.5002 5.22815 17.3919L5.13649 17.0585L3.01149 8.65855C2.98649 8.55021 3.00315 8.43355 3.05315 8.34188C3.11149 8.25021 3.20315 8.17521 3.31149 8.15021L6.56982 7.32521C6.80315 7.26688 7.01982 7.40021 7.07815 7.62521C7.13649 7.85021 7.00315 8.07521 6.77815 8.13355L3.92815 8.85855L5.92815 16.7669L6.57815 16.6002C6.80315 16.5419 7.02815 16.6752 7.08649 16.9002C7.14482 17.1252 7.01149 17.3502 6.78649 17.4085L5.76149 17.6835C5.76149 17.6835 5.68649 17.7002 5.64482 17.7002L5.62815 17.6919Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M18.7698 17.6499C18.7698 17.6499 18.6948 17.6499 18.6531 17.6333L17.6281 17.3583C17.4031 17.2999 17.2698 17.0749 17.3281 16.8499C17.3865 16.6249 17.6031 16.4916 17.8365 16.5499L18.4865 16.7166L20.4865 8.80825L17.6365 8.08325C17.4115 8.02492 17.2781 7.79992 17.3365 7.57492C17.3948 7.34992 17.6115 7.21659 17.8448 7.27492L21.1031 8.09992C21.2115 8.12492 21.3031 8.19992 21.3615 8.29159C21.4198 8.39159 21.4365 8.49992 21.4031 8.60825L21.3198 8.92492L19.1865 17.3416C19.1531 17.4499 19.0865 17.5416 18.9865 17.5916C18.9198 17.6249 18.8531 17.6416 18.7865 17.6416L18.7698 17.6499Z"
                                                            fill="#161618" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="wishlist-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M7.74001 3.50001C8.80001 3.50001 9.80001 3.93001 10.71 4.77001C10.85 4.90001 10.98 5.03001 11.12 5.16001L11.33 5.37001L12.06 6.08001L12.75 5.34001L12.81 5.27001L13 5.06001C13.8 4.18001 14.73 3.68001 15.82 3.56001C16.02 3.54001 16.22 3.52001 16.41 3.52001C17.51 3.52001 18.48 3.91001 19.31 4.68001C20.58 5.87001 21.12 7.32001 20.96 9.11001C20.86 10.27 20.39 11.31 19.56 12.2C17.7 14.21 15.83 16.22 13.97 18.23L11.99 20.36L9.92001 18.13C8.08001 16.15 6.25001 14.18 4.42001 12.2C3.60001 11.31 3.14001 10.29 3.01001 9.08001C3.01001 9.02001 2.99001 8.97001 2.98001 8.90001V8.21001C3.00001 8.12001 3.01001 8.02001 3.02001 7.93001C3.05001 7.70001 3.09001 7.48001 3.14001 7.30001C3.67001 5.33001 4.77001 4.14001 6.51001 3.67001C6.92001 3.56001 7.33001 3.50001 7.72001 3.50001M7.72001 2.50001C7.24001 2.50001 6.75001 2.57001 6.25001 2.70001C4.06001 3.29001 2.76001 4.84001 2.18001 7.03001C2.08001 7.39001 2.05001 7.76001 1.99001 8.12001V9.00001C2.00001 9.06001 2.02001 9.12001 2.02001 9.17001C2.17001 10.59 2.73001 11.83 3.69001 12.87C6.24001 15.63 8.81001 18.38 11.36 21.14C11.58 21.37 11.78 21.49 11.99 21.49C12.2 21.49 12.4 21.37 12.62 21.14C15.18 18.38 17.74 15.63 20.29 12.87C21.25 11.84 21.82 10.61 21.95 9.19001C22.14 7.12001 21.49 5.34001 19.99 3.93001C18.96 2.97001 17.75 2.50001 16.41 2.50001C16.18 2.50001 15.94 2.51001 15.7 2.54001C14.33 2.70001 13.19 3.34001 12.26 4.37001C12.17 4.47001 12.08 4.56001 12.01 4.64001C11.79 4.42001 11.58 4.22001 11.37 4.02001C10.28 3.02001 9.06001 2.49001 7.72001 2.49001V2.50001Z"
                                                            fill="#0D0D0E" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc-cat">
                                            <p>Aquamarine Infinity Heart Pendant with Diamonds3</p>
                                        </div>
                                        <div
                                            class="slider-tab-pirce d-flex justify-content-between align-items-center">
                                            <div class="price-wwrap-prdt">
                                                <span>$333</span>
                                                -
                                                <span>$333</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cat-box tabs_wrapper">
                                <ul class="slider-tabs tabs align-items-center">
                                    <li class="tab-link current" id="tab-7">
                                        <img src="./images/slide-tab-1.webp" alt="">
                                    </li>
                                    <li class="tab-link" id="tab-8">
                                        <img src="./images/slide-tab-2.webp" alt="">
                                    </li>
                                    <li class="tab-link" id="tab-9">
                                        <img src="./images/slide-tab-3.webp" alt="">
                                    </li>
                                    <div class="more-prdt-btn">
                                        <button class="button-modal" type="button" data-bs-toggle="modal"
                                            data-bs-target="#MoreProduct">+15</button>

                                    </div>
                                </ul>
                                <div class="tabs_container">
                                    <div data-tab="tab-7" class="tab_content current">
                                        <div class="swiper catslider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-1.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-1.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-1.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next swiper-btn"></div>
                                            <div class="swiper-button-prev swiper-btn"></div>
                                        </div>
                                        <div class="icon-box-popup d-flex justify-content-between px-2">
                                            <div class="similer-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M15.7781 4.83333V18.9167H8.69481V4.83333H15.7781ZM16.3615 4H8.11148C7.96981 4 7.86148 4.10833 7.86148 4.25V19.5C7.86148 19.6417 7.96981 19.75 8.11148 19.75H16.3615C16.5031 19.75 16.6115 19.6417 16.6115 19.5V4.25C16.6115 4.10833 16.5031 4 16.3615 4Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M5.62815 17.6919C5.56149 17.6919 5.48649 17.6752 5.42815 17.6419C5.32815 17.5835 5.26149 17.5002 5.22815 17.3919L5.13649 17.0585L3.01149 8.65855C2.98649 8.55021 3.00315 8.43355 3.05315 8.34188C3.11149 8.25021 3.20315 8.17521 3.31149 8.15021L6.56982 7.32521C6.80315 7.26688 7.01982 7.40021 7.07815 7.62521C7.13649 7.85021 7.00315 8.07521 6.77815 8.13355L3.92815 8.85855L5.92815 16.7669L6.57815 16.6002C6.80315 16.5419 7.02815 16.6752 7.08649 16.9002C7.14482 17.1252 7.01149 17.3502 6.78649 17.4085L5.76149 17.6835C5.76149 17.6835 5.68649 17.7002 5.64482 17.7002L5.62815 17.6919Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M18.7698 17.6499C18.7698 17.6499 18.6948 17.6499 18.6531 17.6333L17.6281 17.3583C17.4031 17.2999 17.2698 17.0749 17.3281 16.8499C17.3865 16.6249 17.6031 16.4916 17.8365 16.5499L18.4865 16.7166L20.4865 8.80825L17.6365 8.08325C17.4115 8.02492 17.2781 7.79992 17.3365 7.57492C17.3948 7.34992 17.6115 7.21659 17.8448 7.27492L21.1031 8.09992C21.2115 8.12492 21.3031 8.19992 21.3615 8.29159C21.4198 8.39159 21.4365 8.49992 21.4031 8.60825L21.3198 8.92492L19.1865 17.3416C19.1531 17.4499 19.0865 17.5416 18.9865 17.5916C18.9198 17.6249 18.8531 17.6416 18.7865 17.6416L18.7698 17.6499Z"
                                                            fill="#161618" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="wishlist-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M7.74001 3.50001C8.80001 3.50001 9.80001 3.93001 10.71 4.77001C10.85 4.90001 10.98 5.03001 11.12 5.16001L11.33 5.37001L12.06 6.08001L12.75 5.34001L12.81 5.27001L13 5.06001C13.8 4.18001 14.73 3.68001 15.82 3.56001C16.02 3.54001 16.22 3.52001 16.41 3.52001C17.51 3.52001 18.48 3.91001 19.31 4.68001C20.58 5.87001 21.12 7.32001 20.96 9.11001C20.86 10.27 20.39 11.31 19.56 12.2C17.7 14.21 15.83 16.22 13.97 18.23L11.99 20.36L9.92001 18.13C8.08001 16.15 6.25001 14.18 4.42001 12.2C3.60001 11.31 3.14001 10.29 3.01001 9.08001C3.01001 9.02001 2.99001 8.97001 2.98001 8.90001V8.21001C3.00001 8.12001 3.01001 8.02001 3.02001 7.93001C3.05001 7.70001 3.09001 7.48001 3.14001 7.30001C3.67001 5.33001 4.77001 4.14001 6.51001 3.67001C6.92001 3.56001 7.33001 3.50001 7.72001 3.50001M7.72001 2.50001C7.24001 2.50001 6.75001 2.57001 6.25001 2.70001C4.06001 3.29001 2.76001 4.84001 2.18001 7.03001C2.08001 7.39001 2.05001 7.76001 1.99001 8.12001V9.00001C2.00001 9.06001 2.02001 9.12001 2.02001 9.17001C2.17001 10.59 2.73001 11.83 3.69001 12.87C6.24001 15.63 8.81001 18.38 11.36 21.14C11.58 21.37 11.78 21.49 11.99 21.49C12.2 21.49 12.4 21.37 12.62 21.14C15.18 18.38 17.74 15.63 20.29 12.87C21.25 11.84 21.82 10.61 21.95 9.19001C22.14 7.12001 21.49 5.34001 19.99 3.93001C18.96 2.97001 17.75 2.50001 16.41 2.50001C16.18 2.50001 15.94 2.51001 15.7 2.54001C14.33 2.70001 13.19 3.34001 12.26 4.37001C12.17 4.47001 12.08 4.56001 12.01 4.64001C11.79 4.42001 11.58 4.22001 11.37 4.02001C10.28 3.02001 9.06001 2.49001 7.72001 2.49001V2.50001Z"
                                                            fill="#0D0D0E" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc-cat">
                                            <p>Aquamarine Infinity Heart Pendant with Diamonds</p>
                                        </div>
                                        <div
                                            class="slider-tab-pirce d-flex justify-content-between align-items-center">
                                            <div class="price-wwrap-prdt">
                                                <span>$111</span>
                                               
                                            </div>

                                        </div>
                                    </div>
                                    <div data-tab="tab-8" class="tab_content">
                                        <div class="swiper catslider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-2.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images//slide-2.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images//slide-2.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next swiper-btn"></div>
                                            <div class="swiper-button-prev swiper-btn"></div>
                                        </div>
                                        <div class="icon-box-popup d-flex justify-content-between px-2">
                                            <div class="similer-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M15.7781 4.83333V18.9167H8.69481V4.83333H15.7781ZM16.3615 4H8.11148C7.96981 4 7.86148 4.10833 7.86148 4.25V19.5C7.86148 19.6417 7.96981 19.75 8.11148 19.75H16.3615C16.5031 19.75 16.6115 19.6417 16.6115 19.5V4.25C16.6115 4.10833 16.5031 4 16.3615 4Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M5.62815 17.6919C5.56149 17.6919 5.48649 17.6752 5.42815 17.6419C5.32815 17.5835 5.26149 17.5002 5.22815 17.3919L5.13649 17.0585L3.01149 8.65855C2.98649 8.55021 3.00315 8.43355 3.05315 8.34188C3.11149 8.25021 3.20315 8.17521 3.31149 8.15021L6.56982 7.32521C6.80315 7.26688 7.01982 7.40021 7.07815 7.62521C7.13649 7.85021 7.00315 8.07521 6.77815 8.13355L3.92815 8.85855L5.92815 16.7669L6.57815 16.6002C6.80315 16.5419 7.02815 16.6752 7.08649 16.9002C7.14482 17.1252 7.01149 17.3502 6.78649 17.4085L5.76149 17.6835C5.76149 17.6835 5.68649 17.7002 5.64482 17.7002L5.62815 17.6919Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M18.7698 17.6499C18.7698 17.6499 18.6948 17.6499 18.6531 17.6333L17.6281 17.3583C17.4031 17.2999 17.2698 17.0749 17.3281 16.8499C17.3865 16.6249 17.6031 16.4916 17.8365 16.5499L18.4865 16.7166L20.4865 8.80825L17.6365 8.08325C17.4115 8.02492 17.2781 7.79992 17.3365 7.57492C17.3948 7.34992 17.6115 7.21659 17.8448 7.27492L21.1031 8.09992C21.2115 8.12492 21.3031 8.19992 21.3615 8.29159C21.4198 8.39159 21.4365 8.49992 21.4031 8.60825L21.3198 8.92492L19.1865 17.3416C19.1531 17.4499 19.0865 17.5416 18.9865 17.5916C18.9198 17.6249 18.8531 17.6416 18.7865 17.6416L18.7698 17.6499Z"
                                                            fill="#161618" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="wishlist-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M7.74001 3.50001C8.80001 3.50001 9.80001 3.93001 10.71 4.77001C10.85 4.90001 10.98 5.03001 11.12 5.16001L11.33 5.37001L12.06 6.08001L12.75 5.34001L12.81 5.27001L13 5.06001C13.8 4.18001 14.73 3.68001 15.82 3.56001C16.02 3.54001 16.22 3.52001 16.41 3.52001C17.51 3.52001 18.48 3.91001 19.31 4.68001C20.58 5.87001 21.12 7.32001 20.96 9.11001C20.86 10.27 20.39 11.31 19.56 12.2C17.7 14.21 15.83 16.22 13.97 18.23L11.99 20.36L9.92001 18.13C8.08001 16.15 6.25001 14.18 4.42001 12.2C3.60001 11.31 3.14001 10.29 3.01001 9.08001C3.01001 9.02001 2.99001 8.97001 2.98001 8.90001V8.21001C3.00001 8.12001 3.01001 8.02001 3.02001 7.93001C3.05001 7.70001 3.09001 7.48001 3.14001 7.30001C3.67001 5.33001 4.77001 4.14001 6.51001 3.67001C6.92001 3.56001 7.33001 3.50001 7.72001 3.50001M7.72001 2.50001C7.24001 2.50001 6.75001 2.57001 6.25001 2.70001C4.06001 3.29001 2.76001 4.84001 2.18001 7.03001C2.08001 7.39001 2.05001 7.76001 1.99001 8.12001V9.00001C2.00001 9.06001 2.02001 9.12001 2.02001 9.17001C2.17001 10.59 2.73001 11.83 3.69001 12.87C6.24001 15.63 8.81001 18.38 11.36 21.14C11.58 21.37 11.78 21.49 11.99 21.49C12.2 21.49 12.4 21.37 12.62 21.14C15.18 18.38 17.74 15.63 20.29 12.87C21.25 11.84 21.82 10.61 21.95 9.19001C22.14 7.12001 21.49 5.34001 19.99 3.93001C18.96 2.97001 17.75 2.50001 16.41 2.50001C16.18 2.50001 15.94 2.51001 15.7 2.54001C14.33 2.70001 13.19 3.34001 12.26 4.37001C12.17 4.47001 12.08 4.56001 12.01 4.64001C11.79 4.42001 11.58 4.22001 11.37 4.02001C10.28 3.02001 9.06001 2.49001 7.72001 2.49001V2.50001Z"
                                                            fill="#0D0D0E" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc-cat">
                                            <p>Aquamarine Infinity Heart Pendant with Diamonds22</p>
                                        </div>
                                        <div
                                            class="slider-tab-pirce d-flex justify-content-between align-items-center">
                                            <div class="price-wwrap-prdt">
                                                <span>$222</span>
                                               
                                            </div>

                                        </div>
                                    </div>
                                    <div data-tab="tab-9" class="tab_content">
                                        <div class="swiper catslider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-3.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-3.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-3.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next swiper-btn"></div>
                                            <div class="swiper-button-prev swiper-btn"></div>
                                        </div>
                                        <div class="icon-box-popup d-flex justify-content-between px-2">
                                            <div class="similer-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M15.7781 4.83333V18.9167H8.69481V4.83333H15.7781ZM16.3615 4H8.11148C7.96981 4 7.86148 4.10833 7.86148 4.25V19.5C7.86148 19.6417 7.96981 19.75 8.11148 19.75H16.3615C16.5031 19.75 16.6115 19.6417 16.6115 19.5V4.25C16.6115 4.10833 16.5031 4 16.3615 4Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M5.62815 17.6919C5.56149 17.6919 5.48649 17.6752 5.42815 17.6419C5.32815 17.5835 5.26149 17.5002 5.22815 17.3919L5.13649 17.0585L3.01149 8.65855C2.98649 8.55021 3.00315 8.43355 3.05315 8.34188C3.11149 8.25021 3.20315 8.17521 3.31149 8.15021L6.56982 7.32521C6.80315 7.26688 7.01982 7.40021 7.07815 7.62521C7.13649 7.85021 7.00315 8.07521 6.77815 8.13355L3.92815 8.85855L5.92815 16.7669L6.57815 16.6002C6.80315 16.5419 7.02815 16.6752 7.08649 16.9002C7.14482 17.1252 7.01149 17.3502 6.78649 17.4085L5.76149 17.6835C5.76149 17.6835 5.68649 17.7002 5.64482 17.7002L5.62815 17.6919Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M18.7698 17.6499C18.7698 17.6499 18.6948 17.6499 18.6531 17.6333L17.6281 17.3583C17.4031 17.2999 17.2698 17.0749 17.3281 16.8499C17.3865 16.6249 17.6031 16.4916 17.8365 16.5499L18.4865 16.7166L20.4865 8.80825L17.6365 8.08325C17.4115 8.02492 17.2781 7.79992 17.3365 7.57492C17.3948 7.34992 17.6115 7.21659 17.8448 7.27492L21.1031 8.09992C21.2115 8.12492 21.3031 8.19992 21.3615 8.29159C21.4198 8.39159 21.4365 8.49992 21.4031 8.60825L21.3198 8.92492L19.1865 17.3416C19.1531 17.4499 19.0865 17.5416 18.9865 17.5916C18.9198 17.6249 18.8531 17.6416 18.7865 17.6416L18.7698 17.6499Z"
                                                            fill="#161618" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="wishlist-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M7.74001 3.50001C8.80001 3.50001 9.80001 3.93001 10.71 4.77001C10.85 4.90001 10.98 5.03001 11.12 5.16001L11.33 5.37001L12.06 6.08001L12.75 5.34001L12.81 5.27001L13 5.06001C13.8 4.18001 14.73 3.68001 15.82 3.56001C16.02 3.54001 16.22 3.52001 16.41 3.52001C17.51 3.52001 18.48 3.91001 19.31 4.68001C20.58 5.87001 21.12 7.32001 20.96 9.11001C20.86 10.27 20.39 11.31 19.56 12.2C17.7 14.21 15.83 16.22 13.97 18.23L11.99 20.36L9.92001 18.13C8.08001 16.15 6.25001 14.18 4.42001 12.2C3.60001 11.31 3.14001 10.29 3.01001 9.08001C3.01001 9.02001 2.99001 8.97001 2.98001 8.90001V8.21001C3.00001 8.12001 3.01001 8.02001 3.02001 7.93001C3.05001 7.70001 3.09001 7.48001 3.14001 7.30001C3.67001 5.33001 4.77001 4.14001 6.51001 3.67001C6.92001 3.56001 7.33001 3.50001 7.72001 3.50001M7.72001 2.50001C7.24001 2.50001 6.75001 2.57001 6.25001 2.70001C4.06001 3.29001 2.76001 4.84001 2.18001 7.03001C2.08001 7.39001 2.05001 7.76001 1.99001 8.12001V9.00001C2.00001 9.06001 2.02001 9.12001 2.02001 9.17001C2.17001 10.59 2.73001 11.83 3.69001 12.87C6.24001 15.63 8.81001 18.38 11.36 21.14C11.58 21.37 11.78 21.49 11.99 21.49C12.2 21.49 12.4 21.37 12.62 21.14C15.18 18.38 17.74 15.63 20.29 12.87C21.25 11.84 21.82 10.61 21.95 9.19001C22.14 7.12001 21.49 5.34001 19.99 3.93001C18.96 2.97001 17.75 2.50001 16.41 2.50001C16.18 2.50001 15.94 2.51001 15.7 2.54001C14.33 2.70001 13.19 3.34001 12.26 4.37001C12.17 4.47001 12.08 4.56001 12.01 4.64001C11.79 4.42001 11.58 4.22001 11.37 4.02001C10.28 3.02001 9.06001 2.49001 7.72001 2.49001V2.50001Z"
                                                            fill="#0D0D0E" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc-cat">
                                            <p>Aquamarine Infinity Heart Pendant with Diamonds3</p>
                                        </div>
                                        <div
                                            class="slider-tab-pirce d-flex justify-content-between align-items-center">
                                            <div class="price-wwrap-prdt">
                                                <span>$333</span>
                                                -
                                                <span>$333</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-cat-box tabs_wrapper">
                                <ul class="slider-tabs tabs align-items-center">
                                    <li class="tab-link current" id="tab-7">
                                        <img src="./images/slide-tab-1.webp" alt="">
                                    </li>
                                    <li class="tab-link" id="tab-8">
                                        <img src="./images/slide-tab-2.webp" alt="">
                                    </li>
                                    <li class="tab-link" id="tab-9">
                                        <img src="./images/slide-tab-3.webp" alt="">
                                    </li>
                                    <div class="more-prdt-btn">
                                        <button class="button-modal" type="button" data-bs-toggle="modal"
                                            data-bs-target="#MoreProduct">+15</button>

                                    </div>
                                </ul>
                                <div class="tabs_container">
                                    <div data-tab="tab-7" class="tab_content current">
                                        <div class="swiper catslider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-1.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-1.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-1.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next swiper-btn"></div>
                                            <div class="swiper-button-prev swiper-btn"></div>
                                        </div>
                                        <div class="icon-box-popup d-flex justify-content-between px-2">
                                            <div class="similer-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M15.7781 4.83333V18.9167H8.69481V4.83333H15.7781ZM16.3615 4H8.11148C7.96981 4 7.86148 4.10833 7.86148 4.25V19.5C7.86148 19.6417 7.96981 19.75 8.11148 19.75H16.3615C16.5031 19.75 16.6115 19.6417 16.6115 19.5V4.25C16.6115 4.10833 16.5031 4 16.3615 4Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M5.62815 17.6919C5.56149 17.6919 5.48649 17.6752 5.42815 17.6419C5.32815 17.5835 5.26149 17.5002 5.22815 17.3919L5.13649 17.0585L3.01149 8.65855C2.98649 8.55021 3.00315 8.43355 3.05315 8.34188C3.11149 8.25021 3.20315 8.17521 3.31149 8.15021L6.56982 7.32521C6.80315 7.26688 7.01982 7.40021 7.07815 7.62521C7.13649 7.85021 7.00315 8.07521 6.77815 8.13355L3.92815 8.85855L5.92815 16.7669L6.57815 16.6002C6.80315 16.5419 7.02815 16.6752 7.08649 16.9002C7.14482 17.1252 7.01149 17.3502 6.78649 17.4085L5.76149 17.6835C5.76149 17.6835 5.68649 17.7002 5.64482 17.7002L5.62815 17.6919Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M18.7698 17.6499C18.7698 17.6499 18.6948 17.6499 18.6531 17.6333L17.6281 17.3583C17.4031 17.2999 17.2698 17.0749 17.3281 16.8499C17.3865 16.6249 17.6031 16.4916 17.8365 16.5499L18.4865 16.7166L20.4865 8.80825L17.6365 8.08325C17.4115 8.02492 17.2781 7.79992 17.3365 7.57492C17.3948 7.34992 17.6115 7.21659 17.8448 7.27492L21.1031 8.09992C21.2115 8.12492 21.3031 8.19992 21.3615 8.29159C21.4198 8.39159 21.4365 8.49992 21.4031 8.60825L21.3198 8.92492L19.1865 17.3416C19.1531 17.4499 19.0865 17.5416 18.9865 17.5916C18.9198 17.6249 18.8531 17.6416 18.7865 17.6416L18.7698 17.6499Z"
                                                            fill="#161618" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="wishlist-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M7.74001 3.50001C8.80001 3.50001 9.80001 3.93001 10.71 4.77001C10.85 4.90001 10.98 5.03001 11.12 5.16001L11.33 5.37001L12.06 6.08001L12.75 5.34001L12.81 5.27001L13 5.06001C13.8 4.18001 14.73 3.68001 15.82 3.56001C16.02 3.54001 16.22 3.52001 16.41 3.52001C17.51 3.52001 18.48 3.91001 19.31 4.68001C20.58 5.87001 21.12 7.32001 20.96 9.11001C20.86 10.27 20.39 11.31 19.56 12.2C17.7 14.21 15.83 16.22 13.97 18.23L11.99 20.36L9.92001 18.13C8.08001 16.15 6.25001 14.18 4.42001 12.2C3.60001 11.31 3.14001 10.29 3.01001 9.08001C3.01001 9.02001 2.99001 8.97001 2.98001 8.90001V8.21001C3.00001 8.12001 3.01001 8.02001 3.02001 7.93001C3.05001 7.70001 3.09001 7.48001 3.14001 7.30001C3.67001 5.33001 4.77001 4.14001 6.51001 3.67001C6.92001 3.56001 7.33001 3.50001 7.72001 3.50001M7.72001 2.50001C7.24001 2.50001 6.75001 2.57001 6.25001 2.70001C4.06001 3.29001 2.76001 4.84001 2.18001 7.03001C2.08001 7.39001 2.05001 7.76001 1.99001 8.12001V9.00001C2.00001 9.06001 2.02001 9.12001 2.02001 9.17001C2.17001 10.59 2.73001 11.83 3.69001 12.87C6.24001 15.63 8.81001 18.38 11.36 21.14C11.58 21.37 11.78 21.49 11.99 21.49C12.2 21.49 12.4 21.37 12.62 21.14C15.18 18.38 17.74 15.63 20.29 12.87C21.25 11.84 21.82 10.61 21.95 9.19001C22.14 7.12001 21.49 5.34001 19.99 3.93001C18.96 2.97001 17.75 2.50001 16.41 2.50001C16.18 2.50001 15.94 2.51001 15.7 2.54001C14.33 2.70001 13.19 3.34001 12.26 4.37001C12.17 4.47001 12.08 4.56001 12.01 4.64001C11.79 4.42001 11.58 4.22001 11.37 4.02001C10.28 3.02001 9.06001 2.49001 7.72001 2.49001V2.50001Z"
                                                            fill="#0D0D0E" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc-cat">
                                            <p>Aquamarine Infinity Heart Pendant with Diamonds</p>
                                        </div>
                                        <div
                                            class="slider-tab-pirce d-flex justify-content-between align-items-center">
                                            <div class="price-wwrap-prdt">
                                                <span>$111</span>
                                               
                                            </div>

                                        </div>
                                    </div>
                                    <div data-tab="tab-8" class="tab_content">
                                        <div class="swiper catslider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-2.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images//slide-2.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images//slide-2.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next swiper-btn"></div>
                                            <div class="swiper-button-prev swiper-btn"></div>
                                        </div>
                                        <div class="icon-box-popup d-flex justify-content-between px-2">
                                            <div class="similer-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M15.7781 4.83333V18.9167H8.69481V4.83333H15.7781ZM16.3615 4H8.11148C7.96981 4 7.86148 4.10833 7.86148 4.25V19.5C7.86148 19.6417 7.96981 19.75 8.11148 19.75H16.3615C16.5031 19.75 16.6115 19.6417 16.6115 19.5V4.25C16.6115 4.10833 16.5031 4 16.3615 4Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M5.62815 17.6919C5.56149 17.6919 5.48649 17.6752 5.42815 17.6419C5.32815 17.5835 5.26149 17.5002 5.22815 17.3919L5.13649 17.0585L3.01149 8.65855C2.98649 8.55021 3.00315 8.43355 3.05315 8.34188C3.11149 8.25021 3.20315 8.17521 3.31149 8.15021L6.56982 7.32521C6.80315 7.26688 7.01982 7.40021 7.07815 7.62521C7.13649 7.85021 7.00315 8.07521 6.77815 8.13355L3.92815 8.85855L5.92815 16.7669L6.57815 16.6002C6.80315 16.5419 7.02815 16.6752 7.08649 16.9002C7.14482 17.1252 7.01149 17.3502 6.78649 17.4085L5.76149 17.6835C5.76149 17.6835 5.68649 17.7002 5.64482 17.7002L5.62815 17.6919Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M18.7698 17.6499C18.7698 17.6499 18.6948 17.6499 18.6531 17.6333L17.6281 17.3583C17.4031 17.2999 17.2698 17.0749 17.3281 16.8499C17.3865 16.6249 17.6031 16.4916 17.8365 16.5499L18.4865 16.7166L20.4865 8.80825L17.6365 8.08325C17.4115 8.02492 17.2781 7.79992 17.3365 7.57492C17.3948 7.34992 17.6115 7.21659 17.8448 7.27492L21.1031 8.09992C21.2115 8.12492 21.3031 8.19992 21.3615 8.29159C21.4198 8.39159 21.4365 8.49992 21.4031 8.60825L21.3198 8.92492L19.1865 17.3416C19.1531 17.4499 19.0865 17.5416 18.9865 17.5916C18.9198 17.6249 18.8531 17.6416 18.7865 17.6416L18.7698 17.6499Z"
                                                            fill="#161618" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="wishlist-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M7.74001 3.50001C8.80001 3.50001 9.80001 3.93001 10.71 4.77001C10.85 4.90001 10.98 5.03001 11.12 5.16001L11.33 5.37001L12.06 6.08001L12.75 5.34001L12.81 5.27001L13 5.06001C13.8 4.18001 14.73 3.68001 15.82 3.56001C16.02 3.54001 16.22 3.52001 16.41 3.52001C17.51 3.52001 18.48 3.91001 19.31 4.68001C20.58 5.87001 21.12 7.32001 20.96 9.11001C20.86 10.27 20.39 11.31 19.56 12.2C17.7 14.21 15.83 16.22 13.97 18.23L11.99 20.36L9.92001 18.13C8.08001 16.15 6.25001 14.18 4.42001 12.2C3.60001 11.31 3.14001 10.29 3.01001 9.08001C3.01001 9.02001 2.99001 8.97001 2.98001 8.90001V8.21001C3.00001 8.12001 3.01001 8.02001 3.02001 7.93001C3.05001 7.70001 3.09001 7.48001 3.14001 7.30001C3.67001 5.33001 4.77001 4.14001 6.51001 3.67001C6.92001 3.56001 7.33001 3.50001 7.72001 3.50001M7.72001 2.50001C7.24001 2.50001 6.75001 2.57001 6.25001 2.70001C4.06001 3.29001 2.76001 4.84001 2.18001 7.03001C2.08001 7.39001 2.05001 7.76001 1.99001 8.12001V9.00001C2.00001 9.06001 2.02001 9.12001 2.02001 9.17001C2.17001 10.59 2.73001 11.83 3.69001 12.87C6.24001 15.63 8.81001 18.38 11.36 21.14C11.58 21.37 11.78 21.49 11.99 21.49C12.2 21.49 12.4 21.37 12.62 21.14C15.18 18.38 17.74 15.63 20.29 12.87C21.25 11.84 21.82 10.61 21.95 9.19001C22.14 7.12001 21.49 5.34001 19.99 3.93001C18.96 2.97001 17.75 2.50001 16.41 2.50001C16.18 2.50001 15.94 2.51001 15.7 2.54001C14.33 2.70001 13.19 3.34001 12.26 4.37001C12.17 4.47001 12.08 4.56001 12.01 4.64001C11.79 4.42001 11.58 4.22001 11.37 4.02001C10.28 3.02001 9.06001 2.49001 7.72001 2.49001V2.50001Z"
                                                            fill="#0D0D0E" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc-cat">
                                            <p>Aquamarine Infinity Heart Pendant with Diamonds22</p>
                                        </div>
                                        <div
                                            class="slider-tab-pirce d-flex justify-content-between align-items-center">
                                            <div class="price-wwrap-prdt">
                                                <span>$222</span>
                                               
                                            </div>

                                        </div>
                                    </div>
                                    <div data-tab="tab-9" class="tab_content">
                                        <div class="swiper catslider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-3.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-3.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="prduct-image">
                                                        <a href="#">
                                                            <img src="./images/slide-3.webp" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next swiper-btn"></div>
                                            <div class="swiper-button-prev swiper-btn"></div>
                                        </div>
                                        <div class="icon-box-popup d-flex justify-content-between px-2">
                                            <div class="similer-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M15.7781 4.83333V18.9167H8.69481V4.83333H15.7781ZM16.3615 4H8.11148C7.96981 4 7.86148 4.10833 7.86148 4.25V19.5C7.86148 19.6417 7.96981 19.75 8.11148 19.75H16.3615C16.5031 19.75 16.6115 19.6417 16.6115 19.5V4.25C16.6115 4.10833 16.5031 4 16.3615 4Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M5.62815 17.6919C5.56149 17.6919 5.48649 17.6752 5.42815 17.6419C5.32815 17.5835 5.26149 17.5002 5.22815 17.3919L5.13649 17.0585L3.01149 8.65855C2.98649 8.55021 3.00315 8.43355 3.05315 8.34188C3.11149 8.25021 3.20315 8.17521 3.31149 8.15021L6.56982 7.32521C6.80315 7.26688 7.01982 7.40021 7.07815 7.62521C7.13649 7.85021 7.00315 8.07521 6.77815 8.13355L3.92815 8.85855L5.92815 16.7669L6.57815 16.6002C6.80315 16.5419 7.02815 16.6752 7.08649 16.9002C7.14482 17.1252 7.01149 17.3502 6.78649 17.4085L5.76149 17.6835C5.76149 17.6835 5.68649 17.7002 5.64482 17.7002L5.62815 17.6919Z"
                                                            fill="#161618" />
                                                        <path
                                                            d="M18.7698 17.6499C18.7698 17.6499 18.6948 17.6499 18.6531 17.6333L17.6281 17.3583C17.4031 17.2999 17.2698 17.0749 17.3281 16.8499C17.3865 16.6249 17.6031 16.4916 17.8365 16.5499L18.4865 16.7166L20.4865 8.80825L17.6365 8.08325C17.4115 8.02492 17.2781 7.79992 17.3365 7.57492C17.3948 7.34992 17.6115 7.21659 17.8448 7.27492L21.1031 8.09992C21.2115 8.12492 21.3031 8.19992 21.3615 8.29159C21.4198 8.39159 21.4365 8.49992 21.4031 8.60825L21.3198 8.92492L19.1865 17.3416C19.1531 17.4499 19.0865 17.5416 18.9865 17.5916C18.9198 17.6249 18.8531 17.6416 18.7865 17.6416L18.7698 17.6499Z"
                                                            fill="#161618" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="wishlist-view">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M7.74001 3.50001C8.80001 3.50001 9.80001 3.93001 10.71 4.77001C10.85 4.90001 10.98 5.03001 11.12 5.16001L11.33 5.37001L12.06 6.08001L12.75 5.34001L12.81 5.27001L13 5.06001C13.8 4.18001 14.73 3.68001 15.82 3.56001C16.02 3.54001 16.22 3.52001 16.41 3.52001C17.51 3.52001 18.48 3.91001 19.31 4.68001C20.58 5.87001 21.12 7.32001 20.96 9.11001C20.86 10.27 20.39 11.31 19.56 12.2C17.7 14.21 15.83 16.22 13.97 18.23L11.99 20.36L9.92001 18.13C8.08001 16.15 6.25001 14.18 4.42001 12.2C3.60001 11.31 3.14001 10.29 3.01001 9.08001C3.01001 9.02001 2.99001 8.97001 2.98001 8.90001V8.21001C3.00001 8.12001 3.01001 8.02001 3.02001 7.93001C3.05001 7.70001 3.09001 7.48001 3.14001 7.30001C3.67001 5.33001 4.77001 4.14001 6.51001 3.67001C6.92001 3.56001 7.33001 3.50001 7.72001 3.50001M7.72001 2.50001C7.24001 2.50001 6.75001 2.57001 6.25001 2.70001C4.06001 3.29001 2.76001 4.84001 2.18001 7.03001C2.08001 7.39001 2.05001 7.76001 1.99001 8.12001V9.00001C2.00001 9.06001 2.02001 9.12001 2.02001 9.17001C2.17001 10.59 2.73001 11.83 3.69001 12.87C6.24001 15.63 8.81001 18.38 11.36 21.14C11.58 21.37 11.78 21.49 11.99 21.49C12.2 21.49 12.4 21.37 12.62 21.14C15.18 18.38 17.74 15.63 20.29 12.87C21.25 11.84 21.82 10.61 21.95 9.19001C22.14 7.12001 21.49 5.34001 19.99 3.93001C18.96 2.97001 17.75 2.50001 16.41 2.50001C16.18 2.50001 15.94 2.51001 15.7 2.54001C14.33 2.70001 13.19 3.34001 12.26 4.37001C12.17 4.47001 12.08 4.56001 12.01 4.64001C11.79 4.42001 11.58 4.22001 11.37 4.02001C10.28 3.02001 9.06001 2.49001 7.72001 2.49001V2.50001Z"
                                                            fill="#0D0D0E" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="desc-cat">
                                            <p>Aquamarine Infinity Heart Pendant with Diamonds3</p>
                                        </div>
                                        <div
                                            class="slider-tab-pirce d-flex justify-content-between align-items-center">
                                            <div class="price-wwrap-prdt">
                                                <span>$333</span>
                                                -
                                                <span>$333</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                        </div>
                        <div class="more-prdt">
                            <span>Viewed {{ count($products) }} of {{ count($products) }}</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width:5%" aria-valuenow="5"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="more-prdt-btn">
                                <a href="#">Load More Products</a>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
        <div class="three-slider-section">
            <div class="slider-wrap-main slider-two-wrap text-center">
                <h2 class="fs-1 mb-3">Worldwide Jewelry Resellers Doing Business With Us</h2>
                <h4 class="fw-light">Join our Global Network of Dazzling Success – Where Worldwide Jewelry Resellers Thrive in Unparalleled Excellence!</h4>
                <div class="slider-reviews-wrap mb-3">
                    <div class="see-all-slider-wrap">
                        <div class="hidden-container">
                            <div class="swiper seemore seemore1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="./images/flag1.png" alt>
                                        <h3 class="mt-md-3 mb-1">United States</h3>
                                        <p>500+ Resellers</p>
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./images/flag2.png" alt>
                                        <h3 class="mt-md-3 mb-1">United States</h3>
                                        <p>500+ Resellers</p>
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./images/flag3.png" alt>
                                        <h3 class="mt-md-3 mb-1">United States</h3>
                                        <p>500+ Resellers</p>
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./images/flag4.png" alt>
                                        <h3 class="mt-md-3 mb-1">United States</h3>
                                        <p>500+ Resellers</p>
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./images/flag5.png" alt>
                                        <h3 class="mt-md-3 mb-1">United States</h3>
                                        <p>500+ Resellers</p>
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./images/flag2.png" alt>
                                        <h3 class="mt-md-3 mb-1">United States</h3>
                                        <p>500+ Resellers</p>
                                    </div>
                                   
                                </div>

                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>   
            <div class="slider-wrap-main mt-md-5 mt-3 slider-one-wrap text-center">
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
            </div>      
          
        </div>
        <section class="common-gap">
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
        </section>
        <section class="common-gap" id="faq-panel">
            <h2 class="faq-header text-center">Frequently Asked Questions</h2>

            <div class="faq-content">
                @foreach ($faqs as $faq )
                    <div class="faq-question">
                        <input id="{{ $faq->id }}" type="checkbox" class="panel">
                        <div class="plus">+</div>
                        <label for="{{ $faq->id }}" class="panel-title">{{ $faq->question }}</label>
                        <div class="panel-content">{{ $faq->answer }}</div>
                    </div>
                @endforeach
                {{-- <div class="faq-question">
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
                </div> --}}
            </div>
        </section>
        <div class="reviews-section-main">
            <div class="reviews-heading">
                <h2>Reviews</h2>
            </div>
            <div class="reviews-section">
                <div class="reviews-main-box">
                    <div class="reviews-inner-box">
                        <div class="review-image-box">
                            <img src="./images/square (1).jpg" alt="">
                        </div>
                        <div class="reviews-desc">
                            <p>Black diamond Celtic knot ring</p>
                            <p class="font-13 reviews-desc-main">
                                This black diamond ring is exactly what I hoped for. It makes a statement in a
                                classy and unique way. I first ordered the 7/8 ct size but it did not look
                                proportional to the interesting Celtic knot setting. Jessica at Angara was very
                                helpful making the return easy and ordering the larger 1 1/3 ct
                            </p>
                            <div class="reviews-read-more">
                                <a href="#">Read More</a>
                            </div>
                            <div class="star-date-wrap d-flex justify-content-between mt-2">
                                <div class="star-wrap d-flex align-items-center gap-1">
                                    <div class="star-value font-13">
                                        5
                                    </div>
                                    <div class="star-count">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M17.73 21.87L11.9 17.63L5.95 21.72C5.55 21.99 5.04 21.61 5.19 21.15L7.45 14.34L1.71 10C1.33 9.71001 1.53 9.10001 2.01 9.10001L9.23 9.13001L11.62 2.36001C11.78 1.91001 12.42 1.92001 12.57 2.37001L14.78 9.20001L22 9.36001C22.48 9.37001 22.67 9.99001 22.28 10.27L16.42 14.45L18.5 21.31C18.64 21.77 18.11 22.14 17.73 21.86V21.87Z"
                                                fill="#161618" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M17.73 21.87L11.9 17.63L5.95 21.72C5.55 21.99 5.04 21.61 5.19 21.15L7.45 14.34L1.71 10C1.33 9.71001 1.53 9.10001 2.01 9.10001L9.23 9.13001L11.62 2.36001C11.78 1.91001 12.42 1.92001 12.57 2.37001L14.78 9.20001L22 9.36001C22.48 9.37001 22.67 9.99001 22.28 10.27L16.42 14.45L18.5 21.31C18.64 21.77 18.11 22.14 17.73 21.86V21.87Z"
                                                fill="#161618" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M17.73 21.87L11.9 17.63L5.95 21.72C5.55 21.99 5.04 21.61 5.19 21.15L7.45 14.34L1.71 10C1.33 9.71001 1.53 9.10001 2.01 9.10001L9.23 9.13001L11.62 2.36001C11.78 1.91001 12.42 1.92001 12.57 2.37001L14.78 9.20001L22 9.36001C22.48 9.37001 22.67 9.99001 22.28 10.27L16.42 14.45L18.5 21.31C18.64 21.77 18.11 22.14 17.73 21.86V21.87Z"
                                                fill="#161618" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M17.73 21.87L11.9 17.63L5.95 21.72C5.55 21.99 5.04 21.61 5.19 21.15L7.45 14.34L1.71 10C1.33 9.71001 1.53 9.10001 2.01 9.10001L9.23 9.13001L11.62 2.36001C11.78 1.91001 12.42 1.92001 12.57 2.37001L14.78 9.20001L22 9.36001C22.48 9.37001 22.67 9.99001 22.28 10.27L16.42 14.45L18.5 21.31C18.64 21.77 18.11 22.14 17.73 21.86V21.87Z"
                                                fill="#161618" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M17.73 21.87L11.9 17.63L5.95 21.72C5.55 21.99 5.04 21.61 5.19 21.15L7.45 14.34L1.71 10C1.33 9.71001 1.53 9.10001 2.01 9.10001L9.23 9.13001L11.62 2.36001C11.78 1.91001 12.42 1.92001 12.57 2.37001L14.78 9.20001L22 9.36001C22.48 9.37001 22.67 9.99001 22.28 10.27L16.42 14.45L18.5 21.31C18.64 21.77 18.11 22.14 17.73 21.86V21.87Z"
                                                fill="#161618" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="review-by d-flex font-13">
                                    <div class="review-name">
                                        pPatty K.
                                    </div>
                                    -
                                    <div class="review-date">
                                        09/13/23
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reviews-inner-box">
                        <div class="review-image-box">
                            <img src="./images/square (1).jpg" alt="">
                        </div>
                        <div class="reviews-desc">
                            <p>Black diamond Celtic knot ring</p>
                            <p class="font-13 reviews-desc-main">
                                This black diamond ring is exactly what I hoped for. It makes a statement in a
                                classy and unique way. I first ordered the 7/8 ct size but it did not look
                                proportional to the interesting Celtic knot setting. Jessica at Angara was very
                                helpful making the return easy and ordering the larger 1 1/3 ct
                            </p>
                            <div class="reviews-read-more">
                                <a href="#">Read More</a>
                            </div>
                            <div class="star-date-wrap d-flex justify-content-between mt-2">
                                <div class="star-wrap d-flex align-items-center gap-1">
                                    <div class="star-value font-13">
                                        5
                                    </div>
                                    <div class="star-count">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M17.73 21.87L11.9 17.63L5.95 21.72C5.55 21.99 5.04 21.61 5.19 21.15L7.45 14.34L1.71 10C1.33 9.71001 1.53 9.10001 2.01 9.10001L9.23 9.13001L11.62 2.36001C11.78 1.91001 12.42 1.92001 12.57 2.37001L14.78 9.20001L22 9.36001C22.48 9.37001 22.67 9.99001 22.28 10.27L16.42 14.45L18.5 21.31C18.64 21.77 18.11 22.14 17.73 21.86V21.87Z"
                                                fill="#161618" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M17.73 21.87L11.9 17.63L5.95 21.72C5.55 21.99 5.04 21.61 5.19 21.15L7.45 14.34L1.71 10C1.33 9.71001 1.53 9.10001 2.01 9.10001L9.23 9.13001L11.62 2.36001C11.78 1.91001 12.42 1.92001 12.57 2.37001L14.78 9.20001L22 9.36001C22.48 9.37001 22.67 9.99001 22.28 10.27L16.42 14.45L18.5 21.31C18.64 21.77 18.11 22.14 17.73 21.86V21.87Z"
                                                fill="#161618" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M17.73 21.87L11.9 17.63L5.95 21.72C5.55 21.99 5.04 21.61 5.19 21.15L7.45 14.34L1.71 10C1.33 9.71001 1.53 9.10001 2.01 9.10001L9.23 9.13001L11.62 2.36001C11.78 1.91001 12.42 1.92001 12.57 2.37001L14.78 9.20001L22 9.36001C22.48 9.37001 22.67 9.99001 22.28 10.27L16.42 14.45L18.5 21.31C18.64 21.77 18.11 22.14 17.73 21.86V21.87Z"
                                                fill="#161618" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M17.73 21.87L11.9 17.63L5.95 21.72C5.55 21.99 5.04 21.61 5.19 21.15L7.45 14.34L1.71 10C1.33 9.71001 1.53 9.10001 2.01 9.10001L9.23 9.13001L11.62 2.36001C11.78 1.91001 12.42 1.92001 12.57 2.37001L14.78 9.20001L22 9.36001C22.48 9.37001 22.67 9.99001 22.28 10.27L16.42 14.45L18.5 21.31C18.64 21.77 18.11 22.14 17.73 21.86V21.87Z"
                                                fill="#161618" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M17.73 21.87L11.9 17.63L5.95 21.72C5.55 21.99 5.04 21.61 5.19 21.15L7.45 14.34L1.71 10C1.33 9.71001 1.53 9.10001 2.01 9.10001L9.23 9.13001L11.62 2.36001C11.78 1.91001 12.42 1.92001 12.57 2.37001L14.78 9.20001L22 9.36001C22.48 9.37001 22.67 9.99001 22.28 10.27L16.42 14.45L18.5 21.31C18.64 21.77 18.11 22.14 17.73 21.86V21.87Z"
                                                fill="#161618" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="review-by d-flex font-13">
                                    <div class="review-name">
                                        pPatty K.
                                    </div>
                                    -
                                    <div class="review-date">
                                        09/13/23
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reviews-inner-box">
                        <div class="review-image-box">
                            <img src="./images/square (1).jpg" alt="">
                        </div>
                        <div class="reviews-desc">
                            <p>Black diamond Celtic knot ring</p>
                            <p class="font-13 reviews-desc-main">
                                This black diamond ring is exactly what I hoped for. It makes a statement in a
                                classy and unique way. I first ordered the 7/8 ct size but it did not look
                                proportional to the interesting Celtic knot setting. Jessica at Angara was very
                                helpful making the return easy and ordering the larger 1 1/3 ct
                            </p>
                            <div class="reviews-read-more">
                                <a href="#">Read More</a>
                            </div>
                            <div class="star-date-wrap d-flex justify-content-between mt-2">
                                <div class="star-wrap d-flex align-items-center gap-1">
                                    <div class="star-value font-13">
                                        5
                                    </div>
                                    <div class="star-count">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M17.73 21.87L11.9 17.63L5.95 21.72C5.55 21.99 5.04 21.61 5.19 21.15L7.45 14.34L1.71 10C1.33 9.71001 1.53 9.10001 2.01 9.10001L9.23 9.13001L11.62 2.36001C11.78 1.91001 12.42 1.92001 12.57 2.37001L14.78 9.20001L22 9.36001C22.48 9.37001 22.67 9.99001 22.28 10.27L16.42 14.45L18.5 21.31C18.64 21.77 18.11 22.14 17.73 21.86V21.87Z"
                                                fill="#161618" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M17.73 21.87L11.9 17.63L5.95 21.72C5.55 21.99 5.04 21.61 5.19 21.15L7.45 14.34L1.71 10C1.33 9.71001 1.53 9.10001 2.01 9.10001L9.23 9.13001L11.62 2.36001C11.78 1.91001 12.42 1.92001 12.57 2.37001L14.78 9.20001L22 9.36001C22.48 9.37001 22.67 9.99001 22.28 10.27L16.42 14.45L18.5 21.31C18.64 21.77 18.11 22.14 17.73 21.86V21.87Z"
                                                fill="#161618" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M17.73 21.87L11.9 17.63L5.95 21.72C5.55 21.99 5.04 21.61 5.19 21.15L7.45 14.34L1.71 10C1.33 9.71001 1.53 9.10001 2.01 9.10001L9.23 9.13001L11.62 2.36001C11.78 1.91001 12.42 1.92001 12.57 2.37001L14.78 9.20001L22 9.36001C22.48 9.37001 22.67 9.99001 22.28 10.27L16.42 14.45L18.5 21.31C18.64 21.77 18.11 22.14 17.73 21.86V21.87Z"
                                                fill="#161618" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M17.73 21.87L11.9 17.63L5.95 21.72C5.55 21.99 5.04 21.61 5.19 21.15L7.45 14.34L1.71 10C1.33 9.71001 1.53 9.10001 2.01 9.10001L9.23 9.13001L11.62 2.36001C11.78 1.91001 12.42 1.92001 12.57 2.37001L14.78 9.20001L22 9.36001C22.48 9.37001 22.67 9.99001 22.28 10.27L16.42 14.45L18.5 21.31C18.64 21.77 18.11 22.14 17.73 21.86V21.87Z"
                                                fill="#161618" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M17.73 21.87L11.9 17.63L5.95 21.72C5.55 21.99 5.04 21.61 5.19 21.15L7.45 14.34L1.71 10C1.33 9.71001 1.53 9.10001 2.01 9.10001L9.23 9.13001L11.62 2.36001C11.78 1.91001 12.42 1.92001 12.57 2.37001L14.78 9.20001L22 9.36001C22.48 9.37001 22.67 9.99001 22.28 10.27L16.42 14.45L18.5 21.31C18.64 21.77 18.11 22.14 17.73 21.86V21.87Z"
                                                fill="#161618" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="review-by d-flex font-13">
                                    <div class="review-name">
                                        pPatty K.
                                    </div>
                                    -
                                    <div class="review-date">
                                        09/13/23
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reviews-inner-box">
                        <div class="review-image-box">
                            <img src="./images/square (1).jpg" alt="">
                        </div>
                        <div class="reviews-desc">
                            <p>Black diamond Celtic knot ring</p>
                            <p class="font-13 reviews-desc-main">
                                This black diamond ring is exactly what I hoped for. It makes a statement in a
                                classy and unique way. I first ordered the 7/8 ct size but it did not look
                                proportional to the interesting Celtic knot setting. Jessica at Angara was very
                                helpful making the return easy and ordering the larger 1 1/3 ct
                            </p>
                            <div class="reviews-read-more">
                                <a href="#">Read More</a>
                            </div>
                            <div class="star-date-wrap d-flex justify-content-between mt-2">
                                <div class="star-wrap d-flex align-items-center gap-1">
                                    <div class="star-value font-13">
                                        5
                                    </div>
                                    <div class="star-count">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M17.73 21.87L11.9 17.63L5.95 21.72C5.55 21.99 5.04 21.61 5.19 21.15L7.45 14.34L1.71 10C1.33 9.71001 1.53 9.10001 2.01 9.10001L9.23 9.13001L11.62 2.36001C11.78 1.91001 12.42 1.92001 12.57 2.37001L14.78 9.20001L22 9.36001C22.48 9.37001 22.67 9.99001 22.28 10.27L16.42 14.45L18.5 21.31C18.64 21.77 18.11 22.14 17.73 21.86V21.87Z"
                                                fill="#161618" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M17.73 21.87L11.9 17.63L5.95 21.72C5.55 21.99 5.04 21.61 5.19 21.15L7.45 14.34L1.71 10C1.33 9.71001 1.53 9.10001 2.01 9.10001L9.23 9.13001L11.62 2.36001C11.78 1.91001 12.42 1.92001 12.57 2.37001L14.78 9.20001L22 9.36001C22.48 9.37001 22.67 9.99001 22.28 10.27L16.42 14.45L18.5 21.31C18.64 21.77 18.11 22.14 17.73 21.86V21.87Z"
                                                fill="#161618" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M17.73 21.87L11.9 17.63L5.95 21.72C5.55 21.99 5.04 21.61 5.19 21.15L7.45 14.34L1.71 10C1.33 9.71001 1.53 9.10001 2.01 9.10001L9.23 9.13001L11.62 2.36001C11.78 1.91001 12.42 1.92001 12.57 2.37001L14.78 9.20001L22 9.36001C22.48 9.37001 22.67 9.99001 22.28 10.27L16.42 14.45L18.5 21.31C18.64 21.77 18.11 22.14 17.73 21.86V21.87Z"
                                                fill="#161618" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M17.73 21.87L11.9 17.63L5.95 21.72C5.55 21.99 5.04 21.61 5.19 21.15L7.45 14.34L1.71 10C1.33 9.71001 1.53 9.10001 2.01 9.10001L9.23 9.13001L11.62 2.36001C11.78 1.91001 12.42 1.92001 12.57 2.37001L14.78 9.20001L22 9.36001C22.48 9.37001 22.67 9.99001 22.28 10.27L16.42 14.45L18.5 21.31C18.64 21.77 18.11 22.14 17.73 21.86V21.87Z"
                                                fill="#161618" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M17.73 21.87L11.9 17.63L5.95 21.72C5.55 21.99 5.04 21.61 5.19 21.15L7.45 14.34L1.71 10C1.33 9.71001 1.53 9.10001 2.01 9.10001L9.23 9.13001L11.62 2.36001C11.78 1.91001 12.42 1.92001 12.57 2.37001L14.78 9.20001L22 9.36001C22.48 9.37001 22.67 9.99001 22.28 10.27L16.42 14.45L18.5 21.31C18.64 21.77 18.11 22.14 17.73 21.86V21.87Z"
                                                fill="#161618" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="review-by d-flex font-13">
                                    <div class="review-name">
                                        pPatty K.
                                    </div>
                                    -
                                    <div class="review-date">
                                        09/13/23
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reviews-inner-box">
                        <div class="review-image-box">
                            <img src="./images/square (1).jpg" alt="">
                        </div>
                        <div class="reviews-desc">
                            <p>Black diamond Celtic knot ring</p>
                            <p class="font-13 reviews-desc-main">
                                This black diamond ring is exactly what I hoped for. It makes a statement in a
                                classy and unique way. I first ordered the 7/8 ct size but it did not look
                                proportional to the interesting Celtic knot setting. Jessica at Angara was very
                                helpful making the return easy and ordering the larger 1 1/3 ct
                            </p>
                            <div class="reviews-read-more">
                                <a href="#">Read More</a>
                            </div>
                            <div class="star-date-wrap d-flex justify-content-between mt-2">
                                <div class="star-wrap d-flex align-items-center gap-1">
                                    <div class="star-value font-13">
                                        5
                                    </div>
                                    <div class="star-count">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M17.73 21.87L11.9 17.63L5.95 21.72C5.55 21.99 5.04 21.61 5.19 21.15L7.45 14.34L1.71 10C1.33 9.71001 1.53 9.10001 2.01 9.10001L9.23 9.13001L11.62 2.36001C11.78 1.91001 12.42 1.92001 12.57 2.37001L14.78 9.20001L22 9.36001C22.48 9.37001 22.67 9.99001 22.28 10.27L16.42 14.45L18.5 21.31C18.64 21.77 18.11 22.14 17.73 21.86V21.87Z"
                                                fill="#161618" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M17.73 21.87L11.9 17.63L5.95 21.72C5.55 21.99 5.04 21.61 5.19 21.15L7.45 14.34L1.71 10C1.33 9.71001 1.53 9.10001 2.01 9.10001L9.23 9.13001L11.62 2.36001C11.78 1.91001 12.42 1.92001 12.57 2.37001L14.78 9.20001L22 9.36001C22.48 9.37001 22.67 9.99001 22.28 10.27L16.42 14.45L18.5 21.31C18.64 21.77 18.11 22.14 17.73 21.86V21.87Z"
                                                fill="#161618" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M17.73 21.87L11.9 17.63L5.95 21.72C5.55 21.99 5.04 21.61 5.19 21.15L7.45 14.34L1.71 10C1.33 9.71001 1.53 9.10001 2.01 9.10001L9.23 9.13001L11.62 2.36001C11.78 1.91001 12.42 1.92001 12.57 2.37001L14.78 9.20001L22 9.36001C22.48 9.37001 22.67 9.99001 22.28 10.27L16.42 14.45L18.5 21.31C18.64 21.77 18.11 22.14 17.73 21.86V21.87Z"
                                                fill="#161618" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M17.73 21.87L11.9 17.63L5.95 21.72C5.55 21.99 5.04 21.61 5.19 21.15L7.45 14.34L1.71 10C1.33 9.71001 1.53 9.10001 2.01 9.10001L9.23 9.13001L11.62 2.36001C11.78 1.91001 12.42 1.92001 12.57 2.37001L14.78 9.20001L22 9.36001C22.48 9.37001 22.67 9.99001 22.28 10.27L16.42 14.45L18.5 21.31C18.64 21.77 18.11 22.14 17.73 21.86V21.87Z"
                                                fill="#161618" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M17.73 21.87L11.9 17.63L5.95 21.72C5.55 21.99 5.04 21.61 5.19 21.15L7.45 14.34L1.71 10C1.33 9.71001 1.53 9.10001 2.01 9.10001L9.23 9.13001L11.62 2.36001C11.78 1.91001 12.42 1.92001 12.57 2.37001L14.78 9.20001L22 9.36001C22.48 9.37001 22.67 9.99001 22.28 10.27L16.42 14.45L18.5 21.31C18.64 21.77 18.11 22.14 17.73 21.86V21.87Z"
                                                fill="#161618" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="review-by d-flex font-13">
                                    <div class="review-name">
                                        pPatty K.
                                    </div>
                                    -
                                    <div class="review-date">
                                        09/13/23
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="view-all-review">
                    <div class="view-all-reviews-btn">
                        <a href="#">View All Reviews</a>
                    </div>
                </div>
            </div>
            </div>
    </main>

    <!-- -----------------------------------------------------------------------------Model For Galaery------------------------------------------------------------------------- -->

  <!-- Modal -->
  {{-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"     >
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Product Galary</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-0">
          <div class="row">
            <div class="col-lg-6">
                <img src="assets/images/cele_image_6" width="500px" height="400px" alt="img">
            </div>
            <div class="col-lg-6"></div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
@endsection
