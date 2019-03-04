@extends('layouts.master')
@section('content')
    <!-- ================ start banner area ================= -->
    <section class="contact-banner-area" id="contact">
        <div class="container h-100">
            <div class="contact-banner">
                <div class="text-center">
                    <h1>Our Users</h1>
                    <nav aria-label="breadcrumb" class="banner-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Welcom</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Accomodation</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ end banner area ================= -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <h3>User's list:</h3>
                @if(isset($users) && count($users) > 0)
                    @foreach($users as $user)
                        <li><a href="{{ route('user-id', $user['id']) }}">{{ $user['name'] }}</a></li>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
