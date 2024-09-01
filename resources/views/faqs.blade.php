@extends('layouts.app')

{{-- @section('title', $title)
@section('meta_tags')
<meta name="description" content="{{($description)}}">
<meta name="keywords" content="{{($keyword)}}">
@endsection
@section('other_tags')
{!! $others !!}
@endsection --}}

@section('content')
<div class="container">
    <div class="row mt-n5">
        @foreach ($faqBlogs as $faqBlog)
        {{-- @dd($faqBlog); --}}
        <a href="{{ route('faqs.show', $faqBlog->id) }}">
            <div class="col-md-6 col-lg-4 mt-5 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="blog-grid">
                    <div class="blog-grid-img position-relative">
                        <img alt="img" src="{{ asset('storage/'.$faqBlog->midblog_image) }}">
                    </div>
                    <div class="blog-grid-text p-4">
                        <h3 class="h5 mb-3">{{ $faqBlog->banner_heading }}</h3>
                        <p class="display-30">{{ $faqBlog->description }}</p>
                    </div>
                </div>
            </div>
        </a>    
        @endforeach
    </div>
    
</div>
@endsection

@section('js')
@endsection