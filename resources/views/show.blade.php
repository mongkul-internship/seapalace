@extends('layouts.master')
@section('content')
    <!-- ================ start banner area ================= -->
    <section class="blog-banner-area" id="about">
        <div class="container h-100">
            <div class="blog-banner">
                <div class="text-center">
                    <h1>Our Post</h1>
                    <nav aria-label="breadcrumb" class="banner-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ end banner area ================= -->


    <!-- ================ welcome section start ================= -->

    <div class="container" style="padding-top: 20px">
        @if(isset($posts)&& count($posts)>0)
            @foreach($posts as $post)
                <div class="row" style="padding: 5px">
                    <div><h4 style="display: block;width: 100%">{{ $post->title }}<br></h4></div>

                    <div style="display: block;width: 100%">{{ $post->description }} </div>
                </div>
                <p style="display: inline; width: 100%">Author: <a href="#">{{ $post->author }}</a> | on {{ (\Carbon\Carbon::parse($post->created_at)->diffForHumans()) }}
                    <a href="{{ route('edit', $post->id)  }}">Edit</a> |
                    <a href="{{ route('delete', $post->id) }}">Delete</a>
                </p>
                <hr>
            @endforeach
        @endif

    </div>

    <!-- ================ welcome section end ================= -->

@endsection