@extends('layouts.master')
@section('title')
    Akhmad Ramadani | HOME
@endsection
@section('content')
<section class="hero-area bg-primary" id="parallax">
  <div class="container">
    <div class="row">
      <div class="col-lg-11 mx-auto">
        <h1 class="text-white font-tertiary">Hi! I’m <br> Akhmad Ramadani <br> an Mobile Programmer</h1>
      </div>
    </div>
  </div>
  <div class="layer-bg w-100">
    <img class="img-fluid w-100" src="images/illustrations/leaf-bg.png" alt="bg-shape">
  </div>
  <div class="layer" id="l2">
    <img src="images/illustrations/dots-cyan.png" alt="bg-shape">
  </div>
  <div class="layer" id="l3">
    <img src="images/illustrations/leaf-orange.png" alt="bg-shape">
  </div>
  <div class="layer" id="l4">
    <img src="images/illustrations/dots-orange.png" alt="bg-shape">
  </div>
  <div class="layer" id="l5">
    <img src="images/illustrations/leaf-yellow.png" alt="bg-shape">
  </div>
  <div class="layer" id="l6">
    <img src="images/illustrations/leaf-cyan.png" alt="bg-shape">
  </div>
  <div class="layer" id="l7">
    <img src="images/illustrations/dots-group-orange.png" alt="bg-shape">
  </div>
  <div class="layer" id="l8">
    <img src="images/illustrations/leaf-pink-round.png" alt="bg-shape">
  </div>
  <div class="layer" id="l9">
    <img src="images/illustrations/leaf-cyan-2.png" alt="bg-shape">
  </div>
  <!-- social icon -->
  <ul class="list-unstyled ml-5 mt-3 position-relative zindex-1">
    <li class="mb-3"><a class="text-white" href="https://themefisher.com/"><i class="ti-facebook"></i></a></li>
    <li class="mb-3"><a class="text-white" href="https://themefisher.com/"><i class="ti-instagram"></i></a></li>
    <li class="mb-3"><a class="text-white" href="https://themefisher.com/"><i class="ti-dribbble"></i></a></li>
    <li class="mb-3"><a class="text-white" href="https://themefisher.com/"><i class="ti-twitter"></i></a></li>
  </ul>
  <!-- /social icon -->
</section>
<section class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 mx-auto text-center">
          <p class="font-secondary paragraph-lg text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
            do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
            in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          <a href="about.html" class="btn btn-transparent">know more</a>
        </div>
      </div>
    </div>
  </section>
  <!-- /about -->
  @include('partials.skills')
  
  @include('partials.experience')

  @include('partials.education')

  @include('partials.services')

  @include('partials.portfolio')

  @include('partials.testimonial')
  <section class="section pb-0"> 
  @include('partials.client')
  </section>
  <section class="section">
    <div class="container">
        <div class="row">    
        <div class="col-12 text-center">
            <h2 class="section-title">Blogs</h2>
        </div>
        @include('partials.blog')
        </div>
    </div>
  </section>
  
  @include('partials.contact')
@endsection