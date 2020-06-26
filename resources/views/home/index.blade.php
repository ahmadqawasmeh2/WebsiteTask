
@extends('layouts.app')
@section('content')
  
  <main id="main">
   
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Posts</h2>
        </div>
        
        <div class="row">
           @foreach($posts as $post)
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200" style="width:90%;">
              <div class="icon"><i class="bx bx-file"></i></div>
               <h4 class="title">{{ $post->user->name }}</h4>
              <h4 class="title">{{ $post->title }}</h4>
              <p class="description">{{ $post->description }}</p>
            </div>
          </div>
            @endforeach
        </div>
        
      </div>
    </section><!-- End Services Section -->
   </main>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
 @endsection