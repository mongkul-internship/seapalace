@extends('layouts.master')

@section('title', 'About')

@section('content')
    <!-- ================ start banner area ================= -->
    <section class="blog-banner-area" id="blog">
        <div class="container h-100">
            <div class="blog-banner">
                <div class="text-center">
                    <h1>Our Blog</h1>
                    <nav aria-label="breadcrumb" class="banner-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ end banner area ================= -->
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <form method="POST" action="{{ route('store') }}">
                    @csrf
                    {{--{{ csrf_field()  }}--}}
                    <h3>Create Post</h3>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <br>

                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea rows="4" name="description" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Create New Post">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <hr>
@endsection
