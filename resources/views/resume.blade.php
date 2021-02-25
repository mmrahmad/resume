@extends('layout')
@section('title', 'Resume')
@section('main')
@include('componants.education')
            <section class="clients-section">
                <h6 class="section-subtitle">WHAT I DO</h6>
                <h2 class="section-title">CLIENTS</h2>
                <div class="client-logos-wrapper">
                    <div class="client-logo"><img src="{{ asset('assets/images/Clients_1.svg')}}" alt="logo" class="w-100"></div>
                    <div class="client-logo"><img src="{{ asset('assets/images/Clients_2.svg')}}" alt="logo" class="w-100"></div>
                    <div class="client-logo"><img src="{{ asset('assets/images/Clients_3.svg')}}" alt="logo" class="w-100"></div>
                    <div class="client-logo"><img src="{{ asset('assets/images/Clients_4.svg')}}" alt="logo" class="w-100"></div>
                </div>
            </section>
@include('componants.services')
            <section class="achievements-section">
                <h6 class="section-subtitle">WHAT I DO</h6>
                <h2 class="section-title">ACHIEVEMENTS</h2>
                <div class="achievement-cards-wrapper">
                    <div class="media achievement-card">
                        <img src="{{ asset('assets/images/puzzle.svg')}}" alt="puzzle" class="achievement-card-icon">
                        <div class="media-body">
                            <h4 class="achievement-card-title">550+</h4>
                            <p class="achievement-card-description">COMPLETED PROJECTS</p>
                        </div>
                    </div>
                    <div class="media achievement-card">
                        <img src="{{ asset('assets/images/team.svg')}}" alt="puzzle" class="achievement-card-icon">
                        <div class="media-body">
                            <h4 class="achievement-card-title">23K</h4>
                            <p class="achievement-card-description">HAPPY CLIENTS</p>
                        </div>
                    </div>
                    <div class="media achievement-card">
                        <img src="{{ asset('assets/images/trophy.svg')}}" alt="puzzle" class="achievement-card-icon">
                        <div class="media-body">
                            <h4 class="achievement-card-title">55</h4>
                            <p class="achievement-card-description">AWARDS RECIEVED</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="testimonial-section">
                <div id="testimonialCarousel" class="testimonial-carousel carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <p class="testimonial-content">Mauris magna sapien, pharetra consectetur fringilla vitae,
                                interdum sed tortor.</p>
                            <img src="{{ asset('assets/images/Profile.png')}}" alt="profile" class="testimonial-img">
                            <p class="testimonial-name">Nout Golstein</p>
                        </div>
                        <div class="carousel-item">
                            <p class="testimonial-content">Mauris magna sapien, pharetra consectetur fringilla vitae,
                                interdum sed tortor.</p>
                            <img src="{{ asset('assets/images/Profile.png')}}" alt="profile" class="testimonial-img">
                            <p class="testimonial-name">Nout Golstein</p>
                        </div>
                        <div class="carousel-item">
                            <p class="testimonial-content">Mauris magna sapien, pharetra consectetur fringilla vitae,
                                interdum sed tortor.</p>
                            <img src="{{ asset('assets/images/Profile.png')}}" alt="profile" class="testimonial-img">
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