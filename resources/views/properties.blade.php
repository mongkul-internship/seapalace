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
  

  <!-- ================ start banner form ================= -->	
  <form class="form-search form-search-position accomodation">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 gutters-19">
          <div class="form-group">
            <input class="form-control" type="text" placeholder="Enter your keywords.." required>
          </div>
        </div>
        <div class="col-lg-6 gutters-19">
          <div class="row">
            <div class="col-sm">
              <div class="form-group">
                <div class="form-select-custom">
                  <select name="" id="">
                    <option value="" disabled selected>Arrival</option>
                    <option value="8 AM">8 AM</option>
                    <option value="12 PM">12 PM</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-sm gutters-19">
              <div class="form-group">
                <div class="form-select-custom">
                  <select name="" id="">
                    <option value="" disabled selected>Number of room</option>
                    <option value="8 AM">8 AM</option>
                    <option value="12 PM">12 PM</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm gutters-19">
          <div class="form-group">
            <div class="form-select-custom">
              <select name="" id="">
                <option value="" disabled selected>Departure</option>
                <option value="8 AM">8 AM</option>
                <option value="12 PM">12 PM</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-sm gutters-19">
          <div class="form-group">
            <div class="form-select-custom">
              <select name="" id="">
                <option value="" disabled selected>Adult</option>
                <option value="8 AM">8 AM</option>
                <option value="12 PM">12 PM</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-sm gutters-19">
          <div class="form-group">
            <div class="form-select-custom">
              <select name="" id="">
                <option value="" disabled selected>Child</option>
                <option value="8 AM">8 AM</option>
                <option value="12 PM">12 PM</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-lg-4 gutters-19">
          <div class="form-group">
            <button class="button button-form" type="submit">Check Availability</button>
          </div>
        </div>
      </div>
    </div>
  </form>
	<!-- ================ end banner form ================= -->	


  <!-- ================ Explore section start ================= -->
  <section class="section-margin section-margin--small">
    <div class="container">
      <div class="section-intro text-center pb-80px">
        <div class="section-intro__style">
          <img src="img/home/bed-icon.png" alt="">
        </div>
        <h2>Explore Our Rooms</h2>
      </div>

      <div class="row pb-4">
        <div class="col-md-6 col-xl-4 mb-5">
          <div class="card card-explore">
            <div class="card-explore__img">
              <img class="card-img" src="img/home/explore1.png" alt="">
            </div>
            <div class="card-body">
              <h3 class="card-explore__price">$150.00 <sub>/ Per Night</sub></h3>
              <h4 class="card-explore__title"><a href="#">Classic Bed Room</a></h4>
              <p>Beginning fourth dominion creeping god was. Beginning, which fly yieldi dry beast moved blessed </p>
              <a class="card-explore__link" href="#">Book Now <i class="ti-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-xl-4 mb-5">
          <div class="card card-explore">
            <div class="card-explore__img">
              <img class="card-img" src="img/home/explore2.png" alt="">
            </div>
            <div class="card-body">
              <h3 class="card-explore__price">$170.00 <sub>/ Per Night</sub></h3>
              <h4 class="card-explore__title"><a href="#">Premium Room</a></h4>
              <p>Beginning fourth dominion creeping god was. Beginning, which fly yieldi dry beast moved blessed </p>
              <a class="card-explore__link" href="#">Book Now <i class="ti-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-xl-4 mb-5">
          <div class="card card-explore">
            <div class="card-explore__img">
              <img class="card-img" src="img/home/explore3.png" alt="">
            </div>
            <div class="card-body">
              <h3 class="card-explore__price">$190.00 <sub>/ Per Night</sub></h3>
              <h4 class="card-explore__title"><a href="#">Family Room</a></h4>
              <p>Beginning fourth dominion creeping god was. Beginning, which fly yieldi dry beast moved blessed </p>
              <a class="card-explore__link" href="#">Book Now <i class="ti-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-xl-4 mb-5">
          <div class="card card-explore">
            <div class="card-explore__img">
              <img class="card-img" src="img/home/explore4.png" alt="">
            </div>
            <div class="card-body">
              <h3 class="card-explore__price">$120.00 <sub>/ Per Night</sub></h3>
              <h4 class="card-explore__title"><a href="#">Single Bed Room</a></h4>
              <p>Beginning fourth dominion creeping god was. Beginning, which fly yieldi dry beast moved blessed </p>
              <a class="card-explore__link" href="#">Book Now <i class="ti-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-xl-4 mb-5">
          <div class="card card-explore">
            <div class="card-explore__img">
              <img class="card-img" src="img/home/explore5.png" alt="">
            </div>
            <div class="card-body">
              <h3 class="card-explore__price">$130.00 <sub>/ Per Night</sub></h3>
              <h4 class="card-explore__title"><a href="#">Classic Bed Room</a></h4>
              <p>Beginning fourth dominion creeping god was. Beginning, which fly yieldi dry beast moved blessed </p>
              <a class="card-explore__link" href="#">Book Now <i class="ti-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-xl-4 mb-5">
          <div class="card card-explore">
            <div class="card-explore__img">
              <img class="card-img" src="img/home/explore6.png" alt="">
            </div>
            <div class="card-body">
              <h3 class="card-explore__price">$150.00 <sub>/ Per Night</sub></h3>
              <h4 class="card-explore__title"><a href="#">Family Room</a></h4>
              <p>Beginning fourth dominion creeping god was. Beginning, which fly yieldi dry beast moved blessed </p>
              <a class="card-explore__link" href="#">Book Now <i class="ti-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
	<!-- ================ Explore section end ================= -->	

@endsection