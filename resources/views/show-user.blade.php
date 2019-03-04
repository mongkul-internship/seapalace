@extends('layouts.master')
@section('content')
    <!-- ================ start banner area ================= -->
    <section class="contact-banner-area" id="contact">
        <div class="container h-100">
            <div class="contact-banner">
                <div class="text-center">
                        <h1>Hello!<p style="color: mediumvioletred;">{{ $showUser['name'] }}</p></h1>
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
@endsection
