
@extends('Layouts.master')

@section('content')

<div class="mt-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3>Our <span class="orange-text">Categories</span></h3>
                    <p>Explore our diverse range of products, featuring high-quality selections that cater to all tastes and preferences! Enjoy the best from nature in every choice you</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-lg-4 col-md-6">
                    <div class="single-team-item">
                        <a href="">
                            <div class="team-bg" style="background-image: url('{{ $category->image }}');"></div> <!-- assuming the category has an image field -->
                            <h4>{{ $category->name }} <span>{{ $category->description }}</span></h4>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Add hover effect styling here -->
<style>
    .single-team-item a {
        display: block;  /* Make the anchor tag take up the entire area of the parent div */
        text-decoration: none; /* Remove underline from link */
    }

    .single-team-item:hover a .team-bg {
        transform: scale(1.05);  /* Slightly scale the background image on hover */
        transition: transform 0.3s ease; /* Smooth scaling effect */
    }

    .single-team-item:hover a {
        text-decoration: none; /* Ensure no text decoration when hovering */
    }
</style>

@endsection




