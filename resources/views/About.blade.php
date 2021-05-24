
@extends('layouts.app')

@section('content')
<br><br><br><br><br><br><br><br><br>

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <h3>Orientation.<span>Key</span></h3>
          <p>A solution for guidance.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
            <img src="{{asset('assetss/img/about.jpg')}}" class="img-fluid" alt="">
          </div>
          <br><br><br>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="100">
            <h3>Orientation.Key</h3>
            <p class="font-italic">
              Is an application intended for high school students, in order to inform them about the different universities that exist in the desired city but also to orientate them by providing them with schools
            </p>
            <ul>
              <li>
                <div>
                <div class="row">
                  <i style="font-size: 50px; color:#106eea;" class="bx bx-slideshow"></i>
                  <h5 class="mt-1 ml-1" style="font-size: 22px;" >university</h5>
                </div>
                  <p> Here the bachelor must choose the type of university he wants to integrate</p>
                </div>
              </li>
              <li>
                <div>
                  <div class="row">
                    <i style="font-size: 50px; color:#106eea;" class="bx bx-images"></i>
                    <h5 class="mt-1 ml-1" style="font-size: 22px;">The job he loves</h5>
                  </div>
                  <p>The job being the future of a school after the training</p>
                </div>
              </li>
              <li>
                <div>
                  <div class="row">
                    <i style="font-size: 50px; color:#106eea;" class="icofont-live-support"></i>
                    <h5 class="mt-1 ml-1" style="font-size: 22px;">Objectif</h5>
                  </div>
                  <p>Our goal is to provide young bachelors with a set of information related to the university in the city they want.</p>
                </div>
              </li>
            </ul>
            <p>
              My team and I therefore have them as an idea; to create an application that will facilitate the orientation of the bachelor
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
  </main>
  <!-- End #main -->
@endsection