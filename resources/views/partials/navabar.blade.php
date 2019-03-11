<header class="header_area">
    <div class="header-top">
        <div class="container">
            <div class="d-flex align-items-center">
                <div id="logo">
                    <a href="index.html"><img src="img/Logo.png" alt="" title=""/></a>
                </div>
                <div class="ml-auto d-none d-md-block d-md-flex">
                    @auth
                        <div class="media header-top-info">
                            <div class="media-body">
                                <label for="Username"><button class="btn">{{ auth()->user()->name }}</button></buttom> </label>
                            </div>
                            <div class="media-body">
                                <form action="{{ route('logout') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="submit" class="btn btn-primary" value="Logout">
                                </form>
                            </div>
                        </div>
                    @endauth
                    @guest
                        <div class="media header-top-info">
                            <div class="media-body">
                                <a href="{{ route('login') }}"> Login </a>
                            </div>
                        </div>

                        <div class="media header-top-info">
                            <div class="media-body">
                                <a href="{{ route('register') }}">Register</a>

                            </div>
                        </div>

                    @endguest
                </div>
            </div>
        </div>
    </div>


    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <!-- <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav">
                        <li class="nav-item"><a class="nav-link" href="{{ route('create') }}">Create</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('post') }}">Show Post</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>

                        <li class="nav-item"><a class="nav-link" href="{{ route('gallery') }}">Gallery</a></li>


                    </ul>
                </div>

                <ul class="social-icons ml-auto">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a href="#"><i class="fas fa-rss"></i></a></li>
                </ul>
            </div>
        </nav>

        <!-- <div class="search_input" id="search_input_box">
          <div class="container">
            <form class="d-flex justify-content-between">
              <input type="text" class="form-control" id="search_input" placeholder="Search Here">
              <button type="submit" class="btn"></button>
              <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
            </form>
          </div>
        </div> -->
    </div>
</header>