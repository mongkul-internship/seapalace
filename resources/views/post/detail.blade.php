@extends('layouts.master')
@section('content')

    <!-- ================ start banner area ================= -->
    <section class="contact-banner-area" id="contact">
        <div class="container h-100">
            <div class="contact-banner">
                <div class="text-center">
                    <h1>Accomodation</h1>
                    <nav aria-label="breadcrumb" class="banner-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Accomodation</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ end banner area ================= -->
    <div class="container" style="padding-top: 20px">

        <div class="row" style="padding: 5px">
            <div><h4 style="display: block;width: 100%">{{ $post->title }}<br></h4></div>
            <div style="display: block;width: 100%">{{ $post->description }} </div>
            @if(count($post->categories) > 0)
                @foreach($post->categories as $category)
                    <span>{{ $category->name }}, </span>
                @endforeach
            @else
                No category
            @endif

        </div>

    </div>

@endsection