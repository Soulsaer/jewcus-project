@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="blog-detail">
                <div class="blog-detail-img position-relative">
                    <img alt="img" src="{{ asset('storage/' . $faqBlog->midblog_image) }}" class="img-fluid">
                </div>
                <div class="blog-detail-text p-4">
                    <h1 class="h3 mb-4">{{ $faqBlog->banner_heading }}</h1>
                    <p class="mb-4">{{ $faqBlog->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
