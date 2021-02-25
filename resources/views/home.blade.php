@extends('layout')
@section('title', 'Home')
@section('main')
<section class="intro-section">
                <h2>PROFILE</h2>
                <p>I expect to work with an organization where I will be able to expose my self to every opportunity through a quality and growth oriented job. The working environment should allow me understand my own values and provide me with dynamic and challenging career. </p>
                <a href="/contact" class="btn btn-primary btn-hire-me">HIRE ME</a>
            </section>
            @include('componants.education')
            @include('componants.services')
            
            <section class="testimonial-section">
                <div id="testimonialCarousel" class="testimonial-carousel carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <p class="testimonial-content">Mauris magna sapien, pharetra consectetur fringilla vitae,
                                interdum sed tortor.</p>
                            <img src="{{asset('assets/images/Profile.png')}}" alt="profile" class="testimonial-img">
                            <p class="testimonial-name">Nout Golstein</p>
                        </div>
                        <div class="carousel-item">
                            <p class="testimonial-content">Mauris magna sapien, pharetra consectetur fringilla vitae,
                                interdum sed tortor.</p>
                            <img src="{{asset('assets/images/Profile.png')}}" alt="profile" class="testimonial-img">
                            <p class="testimonial-name">Nout Golstein</p>
                        </div>
                        <div class="carousel-item">
                            <p class="testimonial-content">Mauris magna sapien, pharetra consectetur fringilla vitae,
                                interdum sed tortor.</p>
                            <img src="{{asset('assets/images/Profile.png')}}" alt="profile" class="testimonial-img">
                            <p class="testimonial-name">Nout Golstein</p>
                        </div>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#testimonialCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#testimonialCarousel" data-slide-to="1"></li>
                        <li data-target="#testimonialCarousel" data-slide-to="2"></li>
                    </ol>
                </div>
            </section>
            @endsection