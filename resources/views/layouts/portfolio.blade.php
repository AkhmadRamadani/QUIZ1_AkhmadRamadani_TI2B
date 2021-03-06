@extends('layouts.master')
@section('title')
    Akhmad Ramadani | PORTFOLIO
@endsection
@section('content')

<x-cover judul="Portfolio"/>
<section class="section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12">
          <div class="btn-group btn-group-toggle justify-content-center d-flex" data-toggle="buttons">
            <label class="btn btn-sm btn-primary active">
              <input type="radio" name="shuffle-filter" value="all" checked="checked" />All
            </label>
            <label class="btn btn-sm btn-primary">
              <input type="radio" name="shuffle-filter" value="design" />UI/UX Design
            </label>
            <label class="btn btn-sm btn-primary">
              <input type="radio" name="shuffle-filter" value="branding" />BRANDING
            </label>
            <label class="btn btn-sm btn-primary">
              <input type="radio" name="shuffle-filter" value="illustration" />ILLUSTRATION
            </label>
          </div>
        </div>
      </div>
      <div class="row shuffle-wrapper">
        <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;illustration&quot;]">
          <div class="position-relative rounded hover-wrapper">
            <img src="images/portfolio/item-1.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
            <div class="hover-overlay">
              <div class="hover-content">
                <a class="btn btn-light btn-sm" href="#!">view project</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;branding&quot;]">
          <div class="position-relative rounded hover-wrapper">
            <img src="images/portfolio/item-2.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
            <div class="hover-overlay">
              <div class="hover-content">
                <a class="btn btn-light btn-sm" href="#!">view project</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;illustration&quot;]">
          <div class="position-relative rounded hover-wrapper">
            <img src="images/portfolio/item-3.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
            <div class="hover-overlay">
              <div class="hover-content">
                <a class="btn btn-light btn-sm" href="#!">view project</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;branding&quot;]">
          <div class="position-relative rounded hover-wrapper">
            <img src="images/portfolio/item-6.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
            <div class="hover-overlay">
              <div class="hover-content">
                <a class="btn btn-light btn-sm" href="#!">view project</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;illustration&quot;]">
          <div class="position-relative rounded hover-wrapper">
            <img src="images/portfolio/item-8.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
            <div class="hover-overlay">
              <div class="hover-content">
                <a class="btn btn-light btn-sm" href="#!">view project</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;]">
          <div class="position-relative rounded hover-wrapper">
            <img src="images/portfolio/item-5.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
            <div class="hover-overlay">
              <div class="hover-content">
                <a class="btn btn-light btn-sm" href="#!">view project</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;branding&quot;]">
          <div class="position-relative rounded hover-wrapper">
            <img src="images/portfolio/item-1.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
            <div class="hover-overlay">
              <div class="hover-content">
                <a class="btn btn-light btn-sm" href="#!">view project</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;illustration&quot;,&quot;branding&quot;]">
          <div class="position-relative rounded hover-wrapper">
            <img src="images/portfolio/item-3.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
            <div class="hover-overlay">
              <div class="hover-content">
                <a class="btn btn-light btn-sm" href="#!">view project</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6 mb-4 shuffle-item illustration" data-groups="[&quot;illustration&quot;]">
          <div class="position-relative rounded hover-wrapper">
            <img src="images/portfolio/item-7.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
            <div class="hover-overlay">
              <div class="hover-content">
                <a class="btn btn-light btn-sm" href="#!">view project</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="section-title">My Clients</h2>
        </div>
            
        @include('partials.client')
      </div>
    </div>
  </section>
  @include('partials.contact')
  
@endsection