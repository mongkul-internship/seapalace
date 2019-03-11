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
                    <a href="{{ route('detail', $post->id) }}">
                        <div><h4 style="display: block;width: 100%">{{ str_limit($post->title ,50) }}<br></h4></div>
                        <div style="display: block;width: 100%">{{ str_limit($post->description,100,"(see more)")}} </div>
                    </a>

                </div>
                <p style="display: inline; width: 100%">Author: <a href="#">{{ $post->user->name }}</a> |
                    on {{ (\Carbon\Carbon::parse($post->created_at)->diffForHumans()) }}
                    @auth @if(( $post->user->id == auth()->user()->id))
                        <a href="{{ route('edit', $post->id)  }}">Edit</a> |
                        <a href="{{ route('delete', $post->id) }}">Delete</a>
                    @endauth   @endif
                    @if(count($post->categories) > 0)
                        @foreach($post->categories as $category)
                            <span>{{ $category->name }}, </span>
                        @endforeach
                    @else
                        No category
                    @endif
                </p>
                <hr>
            @endforeach
        @endif
            <div class="clearfix">
                {{ $posts->links() }}
                @if(($posts->lastPage() != $posts->currentPage()))
                    <a class="btn btn-primary float-right" href="{{ $posts->nextPageUrl() }}">Older Posts &rarr;</a>
                @endif
                @if(!$posts->onFirstPage())
                    <a class="btn btn-primary float-right" href="{{ $posts->previousPageUrl() }}">Previous Posts</a>
                @endif
            </div>
    </div>

    <!-- ================ welcome section end ================= -->

@endsection