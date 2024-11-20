@extends('Layouts.master')
@section('content')
<div class="container" style="margin-top: 80px">
    <div class="row">
        @foreach ($products  as $product )
        <div class="col-lg-4 col-md-6">
            <div class="single-latest-news">
                <a href="single-news.html"><div class="latest-news-bg" style="color: #000">
                    {{ $product -> imagepath }}
                </div></a>
                <div class="news-text-box">
                    <h3><a href="single-news.html">{{ $product -> name }}</a></h3>
                    <p class="blog-meta">
                        <span class="author"><i class="fas fa-user"></i> Admin</span>
                        <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
                    </p>
                    <p class="excerpt">{{ $product -> description }}</p>
                    <a href="single-news.html" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        @endforeach

    </div>

    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="pagination-wrap">
                        <ul>
                            <li><a href="#">Prev</a></li>
                            <li><a href="#">1</a></li>
                            <li><a class="active" href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





