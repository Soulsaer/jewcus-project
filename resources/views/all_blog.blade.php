@extends('layouts.app')

@section('title', $title)
@section('meta_tags')
<meta name="description" content="{{($description)}}">
<meta name="keywords" content="{{($keyword)}}">
@endsection
@section('other_tags')
{!! $others !!}
@endsection


@section('style')

@endsection

@section('content')
    
    <h1 style="color: black;text-align: center;margin: 45px 0px;font-size: 50px;">Our Blogs</h1>
    {{-- <div class="row justify-content-start m-0">
      @foreach($allblog as $_items)
      
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
      <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="blog-card m-1 my-3">
          <div class="card-banner">
            <p class="category-tag technology">Real Stone</p>
            <img class="banner-img" src='assets/images/stone3.webp' alt=''>
          </div>
          <div class="card-body">
            <p class="blog-hashtag">#Biryani #Food</p>
            <h2 class="blog-title">Which city is famous for biryani in India?</h2>
            <p class="blog-description">Looking to upgrade your gear? Here is the list of the best photography tools for this year</p>
            
            <div class="card-profile">
              <img class="profile-img" src='https://1.bp.blogspot.com/-vhmWFWO2r8U/YLjr2A57toI/AAAAAAAACO4/0GBonlEZPmAiQW4uvkCTm5LvlJVd_-l_wCNcBGAsYHQ/s16000/team-1-2.jpg' alt=''>
              <div class="card-profile-info">
                <h3 class="profile-name">Darrell Steward</h3>
                <p class="profile-followers">15.7k followers</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="blog-card m-1 my-3">
          <div class="card-banner">
            <p class="category-tag psychology">Real Stone</p>
            <img class="banner-img" src='assets/images/stone4.webp' alt=''>
          </div>
          <div class="card-body">
            <p class="blog-hashtag">#Burger #Food</p>
            <h2 class="blog-title">The Most Valueable Stone For Us</h2>
            <p class="blog-description">Mediation has transformed my life. These are the best practices to get into the habit</p>
            
            <div class="card-profile">
              <img class="profile-img" src='https://1.bp.blogspot.com/-8c7QTLoyajs/YLjr2V6KYRI/AAAAAAAACO8/ViVPQpLWVM0jGh3RZhh-Ha1-1r3Oj62wQCNcBGAsYHQ/s16000/team-1-3.jpg' alt=''>
              <div class="card-profile-info">
                <h3 class="profile-name">Savannah Nguyen</h3>
                <p class="profile-followers">18K followers</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="blog-card m-1 my-3">
          <div class="card-banner">
            <p class="category-tag psychology">Real Stone</p>
            <img class="banner-img" src='assets/images/stone5.webp' alt=''>
          </div>
          <div class="card-body">
            <p class="blog-hashtag">#Burger #Food</p>
            <h2 class="blog-title">The Most Valueable Stone For Us</h2>
            <p class="blog-description">Mediation has transformed my life. These are the best practices to get into the habit</p>
            
            <div class="card-profile">
              <img class="profile-img" src='https://1.bp.blogspot.com/-8c7QTLoyajs/YLjr2V6KYRI/AAAAAAAACO8/ViVPQpLWVM0jGh3RZhh-Ha1-1r3Oj62wQCNcBGAsYHQ/s16000/team-1-3.jpg' alt=''>
              <div class="card-profile-info">
                <h3 class="profile-name">Savannah Nguyen</h3>
                <p class="profile-followers">18K followers</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="blog-card m-1 my-3">
          <div class="card-banner">
            <p class="category-tag psychology">Real Stone</p>
            <img class="banner-img" src='assets/images/stone6.webp' alt=''>
          </div>
          <div class="card-body">
            <p class="blog-hashtag">#Burger #Food</p>
            <h2 class="blog-title">The Most Valueable Stone For Us</h2>
            <p class="blog-description">Mediation has transformed my life. These are the best practices to get into the habit</p>
            
            <div class="card-profile">
              <img class="profile-img" src='https://1.bp.blogspot.com/-8c7QTLoyajs/YLjr2V6KYRI/AAAAAAAACO8/ViVPQpLWVM0jGh3RZhh-Ha1-1r3Oj62wQCNcBGAsYHQ/s16000/team-1-3.jpg' alt=''>
              <div class="card-profile-info">
                <h3 class="profile-name">Savannah Nguyen</h3>
                <p class="profile-followers">18K followers</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="blog-card m-1 my-3">
          <div class="card-banner">
            <p class="category-tag psychology">Real Stone</p>
            <img class="banner-img" src='assets/images/stone7.webp' alt=''>
          </div>
          <div class="card-body">
            <p class="blog-hashtag">#Burger #Food</p>
            <h2 class="blog-title">The Most Valueable Stone For Us</h2>
            <p class="blog-description">Mediation has transformed my life. These are the best practices to get into the habit</p>
            
            <div class="card-profile">
              <img class="profile-img" src='https://1.bp.blogspot.com/-8c7QTLoyajs/YLjr2V6KYRI/AAAAAAAACO8/ViVPQpLWVM0jGh3RZhh-Ha1-1r3Oj62wQCNcBGAsYHQ/s16000/team-1-3.jpg' alt=''>
              <div class="card-profile-info">
                <h3 class="profile-name">Savannah Nguyen</h3>
                <p class="profile-followers">18K followers</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="blog-card m-1 my-3">
          <div class="card-banner">
            <p class="category-tag psychology">Real Stone</p>
            <img class="banner-img" src='assets/images/stone8.webp' alt=''>
          </div>
          <div class="card-body">
            <p class="blog-hashtag">#Burger #Food</p>
            <h2 class="blog-title">The Most Valueable Stone For Us</h2>
            <p class="blog-description">Mediation has transformed my life. These are the best practices to get into the habit</p>
            
            <div class="card-profile">
              <img class="profile-img" src='https://1.bp.blogspot.com/-8c7QTLoyajs/YLjr2V6KYRI/AAAAAAAACO8/ViVPQpLWVM0jGh3RZhh-Ha1-1r3Oj62wQCNcBGAsYHQ/s16000/team-1-3.jpg' alt=''>
              <div class="card-profile-info">
                <h3 class="profile-name">Savannah Nguyen</h3>
                <p class="profile-followers">18K followers</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="blog-card m-1 my-3">
          <div class="card-banner">
            <p class="category-tag psychology">Real Stone</p>
            <img class="banner-img" src='assets/images/stone9.webp' alt=''>
          </div>
          <div class="card-body">
            <p class="blog-hashtag">#Burger #Food</p>
            <h2 class="blog-title">The Most Valueable Stone For Us</h2>
            <p class="blog-description">Mediation has transformed my life. These are the best practices to get into the habit</p>
            
            <div class="card-profile">
              <img class="profile-img" src='https://1.bp.blogspot.com/-8c7QTLoyajs/YLjr2V6KYRI/AAAAAAAACO8/ViVPQpLWVM0jGh3RZhh-Ha1-1r3Oj62wQCNcBGAsYHQ/s16000/team-1-3.jpg' alt=''>
              <div class="card-profile-info">
                <h3 class="profile-name">Savannah Nguyen</h3>
                <p class="profile-followers">18K followers</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="blog-card m-1 my-3">
          <div class="card-banner">
            <p class="category-tag psychology">Real Stone</p>
            <img class="banner-img" src='assets/images/stone11.webp' alt=''>
          </div>
          <div class="card-body">
            <p class="blog-hashtag">#Burger #Food</p>
            <h2 class="blog-title">The Most Valueable Stone For Us</h2>
            <p class="blog-description">Mediation has transformed my life. These are the best practices to get into the habit</p>
            <div class="card-profile">
              <img class="profile-img" src='https://1.bp.blogspot.com/-8c7QTLoyajs/YLjr2V6KYRI/AAAAAAAACO8/ViVPQpLWVM0jGh3RZhh-Ha1-1r3Oj62wQCNcBGAsYHQ/s16000/team-1-3.jpg' alt=''>
              <div class="card-profile-info">
                <h3 class="profile-name">Savannah Nguyen</h3>
                <p class="profile-followers">18K followers</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="blog-card m-1 my-3">
          <div class="card-banner">
            <p class="category-tag psychology">Real Stone</p>
            <img class="banner-img" src='assets/images/stone11.webp' alt=''>
          </div>
          <div class="card-body">
            <p class="blog-hashtag">#Burger #Food</p>
            <h2 class="blog-title">The Most Valueable Stone For Us</h2>
            <p class="blog-description">Mediation has transformed my life. These are the best practices to get into the habit</p>
            <div class="card-profile">
              <img class="profile-img" src='https://1.bp.blogspot.com/-8c7QTLoyajs/YLjr2V6KYRI/AAAAAAAACO8/ViVPQpLWVM0jGh3RZhh-Ha1-1r3Oj62wQCNcBGAsYHQ/s16000/team-1-3.jpg' alt=''>
              <div class="card-profile-info">
                <h3 class="profile-name">Savannah Nguyen</h3>
                <p class="profile-followers">18K followers</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="blog-card m-1 my-3">
          <div class="card-banner">
            <p class="category-tag psychology">Real Stone</p>
            <img class="banner-img" src='assets/images/stone11.webp' alt=''>
          </div>
          <div class="card-body">
            <p class="blog-hashtag">#Burger #Food</p>
            <h2 class="blog-title">The Most Valueable Stone For Us</h2>
            <p class="blog-description">Mediation has transformed my life. These are the best practices to get into the habit</p>
            
            <div class="card-profile">
              <img class="profile-img" src='https://1.bp.blogspot.com/-8c7QTLoyajs/YLjr2V6KYRI/AAAAAAAACO8/ViVPQpLWVM0jGh3RZhh-Ha1-1r3Oj62wQCNcBGAsYHQ/s16000/team-1-3.jpg' alt=''>
              <div class="card-profile-info">
                <h3 class="profile-name">Savannah Nguyen</h3>
                <p class="profile-followers">18K followers</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="blog-card m-1 my-3">
          <div class="card-banner">
            <p class="category-tag psychology">Real Stone</p>
            <img class="banner-img" src='assets/images/stone11.webp' alt=''>
          </div>
          <div class="card-body">
            <p class="blog-hashtag">#Burger #Food</p>
            <h2 class="blog-title">The Most Valueable Stone For Us</h2>
            <p class="blog-description">Mediation has transformed my life. These are the best practices to get into the habit</p>
            
            <div class="card-profile">
              <img class="profile-img" src='https://1.bp.blogspot.com/-8c7QTLoyajs/YLjr2V6KYRI/AAAAAAAACO8/ViVPQpLWVM0jGh3RZhh-Ha1-1r3Oj62wQCNcBGAsYHQ/s16000/team-1-3.jpg' alt=''>
              <div class="card-profile-info">
                <h3 class="profile-name">Savannah Nguyen</h3>
                <p class="profile-followers">18K followers</p>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    </div> --}}

    <main>
      <section class="edit-blog-wrap">
          <div class="container blog-container">
              <div class="blog-heading">
                  <h1>THE EDIT</h1>
              </div>
              <div class="edit-blog-slider">
                  <div class="swiper editblog">
                      <div class="swiper-wrapper">
                          <div class="swiper-slide">
                              <div class="blog-slideinner d-flex align-items-center">
                                  <div class="blog-image">
                                      <img src="./images/How-To-Find-The-Average-Gemstone-Carat-Size-For-An-Engagement-Ring.webp"
                                          alt="">
                                  </div>
                                  <div class="blog-body">
                                      <div class="category font-13 f-w-400">
                                          Education
                                      </div>
                                      <div class="title">
                                          <a href="#">Tips to Clean Earring Backs at Home</a>
                                      </div>
                                      <a href="#" target="_blank" class="read-shop">Read & Shop</a>
                                  </div>
                              </div>
                          </div>
                          <div class="swiper-slide">
                              <div class="blog-slideinner d-flex align-items-center">
                                  <div class="blog-image">
                                      <img src="./images/How-To-Find-The-Average-Gemstone-Carat-Size-For-An-Engagement-Ring.webp"
                                          alt="">
                                  </div>
                                  <div class="blog-body">
                                      <div class="category font-13 f-w-400">
                                          Education
                                      </div>
                                      <div class="title">
                                          <a href="#">Tips to Clean Earring Backs at Home</a>
                                      </div>
                                      <a href="#" target="_blank" class="read-shop">Read & Shop</a>
                                  </div>
                              </div>
                          </div>
                          <div class="swiper-slide">
                              <div class="blog-slideinner d-flex align-items-center">
                                  <div class="blog-image">
                                      <img src="./images/How-To-Find-The-Average-Gemstone-Carat-Size-For-An-Engagement-Ring.webp"
                                          alt="">
                                  </div>
                                  <div class="blog-body">
                                      <div class="category font-13 f-w-400">
                                          Education
                                      </div>
                                      <div class="title">
                                          <a href="#">Tips to Clean Earring Backs at Home</a>
                                      </div>
                                      <a href="#" target="_blank" class="read-shop">Read & Shop</a>
                                  </div>
                              </div>
                          </div>
                          <div class="swiper-slide">
                              <div class="blog-slideinner d-flex align-items-center">
                                  <div class="blog-image">
                                      <img src="./images/How-To-Find-The-Average-Gemstone-Carat-Size-For-An-Engagement-Ring.webp"
                                          alt="">
                                  </div>
                                  <div class="blog-body">
                                      <div class="category font-13 f-w-400">
                                          Education
                                      </div>
                                      <div class="title">
                                          <a href="#">Tips to Clean Earring Backs at Home</a>
                                      </div>
                                      <a href="#" target="_blank" class="read-shop">Read & Shop</a>
                                  </div>
                              </div>
                          </div>
                          <div class="swiper-slide">
                              <div class="blog-slideinner d-flex align-items-center">
                                  <div class="blog-image">
                                      <img src="./images/How-To-Find-The-Average-Gemstone-Carat-Size-For-An-Engagement-Ring.webp"
                                          alt="">
                                  </div>
                                  <div class="blog-body">
                                      <div class="category font-13 f-w-400">
                                          Education
                                      </div>
                                      <div class="title">
                                          <a href="#">Tips to Clean Earring Backs at Home</a>
                                      </div>
                                      <a href="#" target="_blank" class="read-shop">Read & Shop</a>
                                  </div>
                              </div>
                          </div>


                      </div>
                  </div>
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                  <div class="swiper-pagination"></div>
              </div>
          </div>
      </section>
      <div class="category-bar-section">
          <div class="category-bar">
              <div class="tab-list-clicker justify-content-center">
                  <ul class="tab-list-inner tabs">
                      <li class="list-type tab-link" data-tab="tab-1">
                          Education
                      </li>
                      <li class="list-type tab-link" data-tab="tab-2">
                          Engagement & Wedding
                      </li>
                      <li class="list-type tab-link" data-tab="tab-3">
                          Gifting Ideas
                      </li>
                      <li class="list-type tab-link" data-tab="tab-4">
                          Trends
                      </li>

                  </ul>

              </div>
          </div>
          <div class="container">

              <div id="tab-1" class="tab-content">
                  <div class="grid-box-wrap">
                      <div class="grid-box-item">
                          <a href="#" class="img">
                              <div class="shadow-box">
                                  <a href="#">
                                      <img src="./images/gold-ring.webp" alt>
                                      <p class="font-13 mb-0">Blue Sapphire
                                          Teardrop Pendant with Diamond</p>
                                      <span>$169</span> - <span>$1111</span>
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
                                      <span>$169</span> - <span>$1111</span>
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
                                      <span>$169</span> - <span>$1111</span>
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
                                      <span>$169</span> - <span>$1111</span>
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
                                      <span>$169</span> - <span>$1111</span>
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
                                      <span>$169</span> - <span>$1111</span>
                                  </a>
                              </div>
                          </a>
                      </div>

                  </div>
              </div>
              <div id="tab-2" class="tab-content">
                  <div class="grid-box-wrap">
                      <div class="grid-box-item">
                          <a href="#" class="img">
                              <div class="shadow-box">
                                  <a href="#">
                                      <img src="./images/grid-cat2.webp" alt>
                                      <p class="font-13 mb-0">Blue Sapphire
                                          Teardrop Pendant with Diamond</p>
                                      <span>$169</span> - <span>$1111</span>
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
                                      <span>$169</span> - <span>$1111</span>
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
                                      <span>$169</span> - <span>$1111</span>
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
                                      <span>$169</span> - <span>$1111</span>
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
                                      <span>$169</span> - <span>$1111</span>
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
                                      <span>$169</span> - <span>$1111</span>
                                  </a>
                              </div>
                          </a>
                      </div>

                  </div>
              </div>
              <div id="tab-3" class="tab-content">
                  <div class="grid-box-wrap">
                      <div class="grid-box-item">
                          <a href="#" class="img">
                              <div class="shadow-box">
                                  <a href="#">
                                      <img src="./images/grid-cat2.webp" alt>
                                      <p class="font-13 mb-0">Blue Sapphire
                                          Teardrop Pendant with Diamond</p>
                                      <span>$169</span> - <span>$1111</span>
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
                                      <span>$169</span> - <span>$1111</span>
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
                                      <span>$169</span> - <span>$1111</span>
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
                                      <span>$169</span> - <span>$1111</span>
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
                                      <span>$169</span> - <span>$1111</span>
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
                                      <span>$169</span> - <span>$1111</span>
                                  </a>
                              </div>
                          </a>
                      </div>

                  </div>
              </div>
              <div id="tab-4" class="tab-content">
                  <div class="grid-box-wrap">
                      <div class="grid-box-item">
                          <a href="#" class="img">
                              <div class="shadow-box">
                                  <a href="#">
                                      <img src="./images/gold-ring.webp" alt>
                                      <p class="font-13 mb-0">Blue Sapphire
                                          Teardrop Pendant with Diamond</p>
                                      <span>$169</span> - <span>$1111</span>
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
                                      <span>$169</span> - <span>$1111</span>
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
                                      <span>$169</span> - <span>$1111</span>
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
                                      <span>$169</span> - <span>$1111</span>
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
                                      <span>$169</span> - <span>$1111</span>
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
                                      <span>$169</span> - <span>$1111</span>
                                  </a>
                              </div>
                          </a>
                      </div>

                  </div>
              </div>
          </div>
          <div class="latest-trend">
              <div class="container">
                  <h3 class="latest-in-title text-center">Latest in - Trend</h3>

                  <div class="latest-in-blocks-parent">
                      <div class="latest-in-blocks">
                          <div class="trends-block main-trends-block">
                              <div class="trends-block-image">
                                  <a href="#">
                                      <img src="./images/Hero-3-600x473.webp" alt="">
                                  </a>
                              </div>
                              <div class="trends-block-category upper-case-light-text">Trends </div>
                              <div class="trends-block-title sub-title-wrap "><a href="#">Halloween Glam: 6 Gemstones for
                                      Hauntingly Beautiful Looks</a></div>
                              <a href="#" target="_blank" class="trends-block-readmore">Read & Shop</a>
                          </div>
                          <div class="trends-block main-trends-block">
                              <div class="trends-block-image">
                                  <a href="#">
                                      <img src="./images/united-states.png" alt="">
                                  </a>
                              </div>
                              <div class="trends-block-category upper-case-light-text"> Trends </div>
                              <div class="trends-block-title sub-title-wrap "><a href="#">5 Easy Ways to Support Breast Cancer
                                      Awareness This October</a></div>
                              <a href="#" target="_blank" class="trends-block-readmore">Read & Shop</a>
                          </div>
                          <div class="trends-block main-trends-block">
                              <div class="trends-block-image">
                                  <a href="#">
                                      <img src="./images/Untitled-2-1-600x600.webp" alt="">
                                  </a>
                              </div>
                              <div class="trends-block-category upper-case-light-text"> Trends </div>
                              <div class="trends-block-title sub-title-wrap "><a href="#">Trust These 7 Earrings for Every Mood to
                                      Transform Your Style</a></div>
                              <a href="#" target="_blank"
                                  class="trends-block-readmore">Read & Shop</a>
                          </div>

                      </div>
                  </div>

                  <div class="container">
                      <h3 class="latest-in-title text-center">October Birthstone Jewelry</h3>

                  <div class="monthly-blog-wrap container">
                      <div class="monthly-catogries-blocks-container">
                          <div class="monthly-catogries-blocks">
                              <div class="monthly-category">
                                  <div class="monthly-catogries-image">
                                      <a href="#">
                                          <img src="./images/Can-You-Wear-Opals-Everyday.webp" alt="">
                                      </a>
                                  </div>
                                  <div class="monthly-catogries-category upper-case-light-text ">
                                      Education
                                  </div>
                                  <div class="monthly-catogries-sub-title sub-title-wrap ">
                                      <a href="#">Can You Wear Opals Every Day?</a>
                                  </div>

                              </div>
                              <div class="monthly-category">
                                  <div class="monthly-catogries-image">
                                      <a href="#">
                                          <img src="./images/Can-You-Wear-Opals-Everyday.webp" alt="">
                                      </a>
                                  </div>
                                  <div class="monthly-catogries-category upper-case-light-text ">
                                      Education
                                  </div>
                                  <div class="monthly-catogries-sub-title sub-title-wrap ">
                                      <a href="#">Can You Wear Opals Every Day?</a>
                                  </div>

                              </div>
                              <div class="monthly-category">
                                  <div class="monthly-catogries-image">
                                      <a href="#">
                                          <img src="./images/Can-You-Wear-Opals-Everyday.webp" alt="">
                                      </a>
                                  </div>
                                  <div class="monthly-catogries-category upper-case-light-text ">
                                      Education
                                  </div>
                                  <div class="monthly-catogries-sub-title sub-title-wrap ">
                                      <a href="#">Can You Wear Opals Every Day?</a>
                                  </div>

                              </div>


                          </div>
                      </div>

                  </div>
                  </div>
                  <div class="container">
                      <h3 class="latest-in-title text-center">Lifestyle & Jewelry Report</h3>
                  <div class="lifestyle-wrapper d-flex">
                      <div class="lifestyle-left">
                          <div class="lifestyle-left-card">
                              <div class="card-image">
                                  <a href="#" >
                                     <img src="./images/li-1.webp" alt="">
                                  </a>
                              </div>
                              <div class="card-description">
                                  <div class="card-category  upper-case-light-text category">
                                      Engagement & Wedding  </div>
                                  <div class="card-title sub-title-wrap "><a
                                          href="#">What Are the Cost Rules on Engagement Rings?</a></div>
                              </div>
                          </div>
                          <div class="lifestyle-left-card">
                              <div class="card-image">
                                  <a href="#" >
                                     <img src="./images/li-1.webp" alt="">
                                  </a>
                              </div>
                              <div class="card-description">
                                  <div class="card-category  upper-case-light-text category">
                                      Engagement & Wedding  </div>
                                  <div class="card-title sub-title-wrap "><a
                                          href="#">What Are the Cost Rules on Engagement Rings?</a></div>
                              </div>
                          </div>
                          <div class="lifestyle-left-card">
                              <div class="card-image">
                                  <a href="#" >
                                     <img src="./images/li-1.webp" alt="">
                                  </a>
                              </div>
                              <div class="card-description">
                                  <div class="card-category  upper-case-light-text category">
                                      Engagement & Wedding  </div>
                                  <div class="card-title sub-title-wrap "><a
                                          href="#">What Are the Cost Rules on Engagement Rings?</a></div>
                              </div>
                          </div>
                      </div>
                      <div class="lifestyle-right">
                          <div class="lifestyle-right-card">
                              <div class="card-image">
                                  <a href="#">
                                      <img src="./images/rl-1.webp" alt="">
                                  </a>
                              </div>
                              <div class="card-description">
                                  <div class="card-category  upper-case-light-text category">
                                      Gifting Ideas </div>
                                  <div class="card-title sub-title-wrap "><a href="https://www.angara.com/blog/singles-day-celebration-ideas/">Singles’ Day To-Do: Celebrate Self-Love in These 7 Fulfilling Ways</a>
                                  </div>
                              </div>
                          </div>
                          <div class="lifestyle-right-card">
                              <div class="card-image">
                                  <a href="#">
                                      <img src="./images/rl-1.webp" alt="">
                                  </a>
                              </div>
                              <div class="card-description">
                                  <div class="card-category  upper-case-light-text category">
                                      Gifting Ideas </div>
                                  <div class="card-title sub-title-wrap "><a href="https://www.angara.com/blog/singles-day-celebration-ideas/">Singles’ Day To-Do: Celebrate Self-Love in These 7 Fulfilling Ways</a>
                                  </div>
                              </div>
                          </div>
                          <div class="lifestyle-right-card">
                              <div class="card-image">
                                  <a href="#">
                                      <img src="./images/rl-1.webp" alt="">
                                  </a>
                              </div>
                              <div class="card-description">
                                  <div class="card-category  upper-case-light-text category">
                                      Gifting Ideas </div>
                                  <div class="card-title sub-title-wrap "><a href="https://www.angara.com/blog/singles-day-celebration-ideas/">Singles’ Day To-Do: Celebrate Self-Love in These 7 Fulfilling Ways</a>
                                  </div>
                              </div>
                          </div>
                          
                      </div>


                  </div>
                  </div>
              </div>
          </div>
      </div>
      <section class="common-gap pb-5">

          <div class="reviews-section">
              <div class="heading-with-review">
                 <h3>#CelebrateWithColor</h3>
                 <span>Keep up with <a href="#">@jewcusjewelry</a> making colorful noise in the world.</span>
              </div>
              <div class="slider-reviews-wrap">
                  <div class="see-all-slider-wrap shopmore-container">
                      <div class="hidden-container">
                          <div class="swiper seemore">
                              <div class="swiper-wrapper">
                                  <div class="swiper-slide">
                                      <img src="./images/seeallimg.webp" alt>
                                      <a href="#">
                                          <div class="see-more-btn">
                                              <button>Shop Now</button>
                                          </div>
                                      </a>
                                  </div>
                                  <div class="swiper-slide">
                                      <img src="./images/seeallimg.webp" alt>
                                      <a href="#">
                                          <div class="see-more-btn">
                                              <button>Shop Now</button>
                                          </div>
                                      </a>
                                  </div>
                                  <div class="swiper-slide">
                                      <img src="./images/seeallimg.webp" alt>
                                      <a href="#">
                                          <div class="see-more-btn">
                                              <button>Shop Now</button>
                                          </div>
                                      </a>
                                  </div>
                                  <div class="swiper-slide">
                                      <img src="./images/seeallimg.webp" alt>
                                      <a href="#">
                                          <div class="see-more-btn">
                                              <button>Shop Now</button>
                                          </div>
                                      </a>
                                  </div>
                                  <div class="swiper-slide">
                                      <img src="./images/seeallimg.webp" alt>
                                      <a href="#">
                                          <div class="see-more-btn">
                                              <button>Shop Now</button>
                                          </div>
                                      </a>
                                  </div>
                                  <div class="swiper-slide">
                                      <img src="./images/seeallimg.webp" alt>
                                      <a href="#">
                                          <div class="see-more-btn">
                                              <button>Shop Now</button>
                                          </div>
                                      </a>
                                  </div>
                                  <div class="swiper-slide">
                                      <img src="./images/seeallimg.webp" alt>
                                      <a href="#">
                                          <div class="see-more-btn">
                                              <button>Shop Now</button>
                                          </div>
                                      </a>
                                  </div>
                                  <div class="swiper-slide">
                                      <img src="./images/seeallimg.webp" alt>
                                      <a href="#">
                                          <div class="see-more-btn">
                                              <button>Shop Now</button>
                                          </div>
                                      </a>
                                  </div>
                                  <div class="swiper-slide">
                                      <img src="./images/seeallimg.webp" alt>
                                      <a href="#">
                                          <div class="see-more-btn">
                                              <button>Shop Now</button>
                                          </div>
                                      </a>
                                  </div>
                                  <div class="swiper-slide">
                                      <img src="./images/seeallimg.webp" alt>
                                      <a href="#">
                                          <div class="see-more-btn">
                                              <button>Shop Now</button>
                                          </div>
                                      </a>
                                  </div>
                                  <div class="swiper-slide">
                                      <img src="./images/seeallimg.webp" alt>
                                      <a href="#">
                                          <div class="see-more-btn">
                                              <button>Shop Now</button>
                                          </div>
                                      </a>
                                  </div>
                                  <div class="swiper-slide">
                                      <img src="./images/seeallimg.webp" alt>
                                      <a href="#">
                                          <div class="see-more-btn">
                                              <button>Shop Now</button>
                                          </div>
                                      </a>
                                  </div>
                                  <div class="swiper-slide">
                                      <img src="./images/seeallimg.webp" alt>
                                      <a href="#">
                                          <div class="see-more-btn">
                                              <button>Shop Now</button>
                                          </div>
                                      </a>
                                  </div>
                                  <div class="swiper-slide">
                                      <img src="./images/seeallimg.webp" alt>
                                      <a href="#">
                                          <div class="see-more-btn">
                                              <button>Shop Now</button>
                                          </div>
                                      </a>
                                  </div>
                                  <div class="swiper-slide">
                                      <img src="./images/seeallimg.webp" alt>
                                      <a href="#">
                                          <div class="see-more-btn">
                                              <button>Shop Now</button>
                                          </div>
                                      </a>
                                  </div>
                                  <div class="swiper-slide">
                                      <img src="./images/seeallimg.webp" alt>
                                      <a href="#">
                                          <div class="see-more-btn">
                                              <button>Shop Now</button>
                                          </div>
                                      </a>
                                  </div>
                                  <div class="swiper-slide">
                                      <img src="./images/seeallimg.webp" alt>
                                      <a href="#">
                                          <div class="see-more-btn">
                                              <button>Shop Now</button>
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
            
             </div>
      </section>
      <section class="Jewelry-Education">
          <div class="latest-trend">
              <div class="container">
                  <h3 class="latest-in-title text-center">Jewelry Education</h3>

                  <div class="latest-in-blocks-parent">
                      <div class="latest-in-blocks">
                          <div class="trends-block main-trends-block">
                              <div class="card-image">
                                  <a href="#">
                                      <img src="./images/Different-Types-of-Ring-Settings-101-600x473.webp" alt="">
                                  </a>
                              </div>
                              <div class="trends-block-category upper-case-light-text">EDUCATION </div>
                              <div class="trends-block-title sub-title-wrap "><a href="#">What Are the Different Types of Ring Settings?</a></div>
                          
                          </div>
                          <div class="trends-block main-trends-block">
                              <div class="card-image">
                                  <a href="#">
                                      <img src="./images/Hero-Image-7-600x473.webp" alt="">
                                  </a>
                              </div>
                              <div class="trends-block-category upper-case-light-text">EDUCATION </div>
                              <div class="trends-block-title sub-title-wrap "><a href="#">What Are the Different Types of Ring Settings?</a></div>
                          
                          </div>
                          <div class="trends-block main-trends-block">
                              <div class="card-image">
                                  <a href="#">
                                      <img src="./images/Different-Types-of-Swiss-Blue-Topaz-Gemstone-600x550.webp" alt="">
                                  </a>
                              </div>
                              <div class="trends-block-category upper-case-light-text">EDUCATION </div>
                              <div class="trends-block-title sub-title-wrap "><a href="#">What Are the Different Types of Ring Settings?</a></div>
                          
                          </div>
                        

                      </div>
                  </div>

              
              </div>
          </div>
      </section>
      <section class="Jewelry-Essentials">
          <div class="latest-trend">
              <div class="container">
                  <h3 class="latest-in-title text-center">Jewelry Essentials</h3>

                  <div class="latest-in-blocks-parent">
                      <div class="Essentials-in-blocks">
                          <div class="Essentials-block">
                              <div class="card-image">
                                  <a href="#">
                                      <img src="./images/Different-Types-of-Ring-Settings-101-600x473.webp" alt="">
                                  </a>
                              </div>
                              <div class="upper-case-light-text">EDUCATION </div>
                              <div class="sub-title-wrap "><a href="#">What Are the Different Types of Ring Settings?</a></div>
                          
                          </div>
                          <div class="Essentials-block">
                              <div class="card-image">
                                  <a href="#">
                                      <img src="./images/Different-Types-of-Ring-Settings-101-600x473.webp" alt="">
                                  </a>
                              </div>
                              <div class="upper-case-light-text">EDUCATION </div>
                              <div class="sub-title-wrap "><a href="#">What Are the Different Types of Ring Settings?</a></div>
                          
                          </div>
                          <div class="Essentials-block">
                              <div class="card-image">
                                  <a href="#">
                                      <img src="./images/Different-Types-of-Ring-Settings-101-600x473.webp" alt="">
                                  </a>
                              </div>
                              <div class="upper-case-light-text">EDUCATION </div>
                              <div class="sub-title-wrap "><a href="#">What Are the Different Types of Ring Settings?</a></div>
                          
                          </div>
                          <div class="Essentials-block">
                              <div class="card-image">
                                  <a href="#">
                                      <img src="./images/Different-Types-of-Ring-Settings-101-600x473.webp" alt="">
                                  </a>
                              </div>
                              <div class="upper-case-light-text">EDUCATION </div>
                              <div class="sub-title-wrap "><a href="#">What Are the Different Types of Ring Settings?</a></div>
                          
                          </div>
                          <div class="Essentials-block">
                              <div class="card-image">
                                  <a href="#">
                                      <img src="./images/Different-Types-of-Ring-Settings-101-600x473.webp" alt="">
                                  </a>
                              </div>
                              <div class="upper-case-light-text">EDUCATION </div>
                              <div class="sub-title-wrap "><a href="#">What Are the Different Types of Ring Settings?</a></div>
                          
                          </div>
                          <div class="Essentials-block">
                              <div class="card-image">
                                  <a href="#">
                                      <img src="./images/Different-Types-of-Ring-Settings-101-600x473.webp" alt="">
                                  </a>
                              </div>
                              <div class="upper-case-light-text">EDUCATION </div>
                              <div class="sub-title-wrap "><a href="#">What Are the Different Types of Ring Settings?</a></div>
                          
                          </div>
                         
                        

                      </div>
                      
                  </div>

              
              </div>
          </div>
      </section>
  </main>

    
@endsection



