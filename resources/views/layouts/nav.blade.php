<div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
  <div class="container d-flex">
    <div class="contact-info mr-auto">
      <i class="icofont-envelope"></i> <a style="text-decoration: none;">Orientationkey12@gmail.com</a>
      <span style="margin-left: 330px;"><i class="icofont-phone"></i> (+237) 656959165</span>
    </div>
    <div class="social-links">
      <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
      <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
      <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
      <a href="#" class="skype"><i class="icofont-skype"></i></a>
      <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
    </div>
  </div>
</div>
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center">

    <h1 class="mr-auto"><a href="index.html"><img src="{{asset('vendors/images/logo-orc-annime.png')}}" alt=""></a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li><a style="font-size: 17px;" href="{{url('/')}}">Home</a></li>
        <li><a style="font-size: 17px;" href="{{url('about')}}">About</a></li>
        <li><a style="font-size: 17px;" href="{{route('Front.index')}}">Make an orientation</a></li>
        <li><a style="font-size: 17px;" href="{{url('contact')}}">Contact</a></li>
        <li><a style="font-size: 17px;" href="{{route('login')}}">Login</a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </div>
</header><!-- End Header -->

