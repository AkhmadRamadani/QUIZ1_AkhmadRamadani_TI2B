@extends('layouts.master')
@section('title')
    Akhmad Ramadani | BLOGS
@endsection
@section('content')

    <x-cover judul="Blogs"/>
    <section class="section">
    <div class="container">
        <div class="row"> 
            @include('partials.blog')
            <div class="container mt-5">
            </div>
            @include('partials.blog')

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