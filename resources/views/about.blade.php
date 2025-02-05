@extends('layouts.app')
@section('page_title', 'About')

@section('content')

    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>About Us</h2>
                </div>

            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->
    <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="about-img">
                        <img src="{{ asset('assets/images/about.png') }}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="section-header text-left">
                        <p>Learn About Us</p>
                        <h2>Revive Your Confidence with Yash Hair Pech Studio</h2>
                    </div>
                    <div class="about-text">
                        <p>
                            With advanced techniques, premium materials, and personalized care, we help you achieve a
                            flawless, undetectable look. Whether you’re dealing with hair thinning, baldness, or just want a
                            new style, Yash Hair Pech Studio is your trusted destination for hair restoration.
                        </p>
                        {{-- <p>
                        <div class="container">
                            <div class="small-container text-center">
                                <h3 class="text-center mb-4">Why Choose <span class="text-success">Yash Hair Pech
                                        Studio?</span></h3>
                                <ul class="list-group list-unstyled mt-3">
                                    <li class="list-group-item">✔ Natural & Undetectable Hair Patches</li>
                                    <li class="list-group-item">✔ Customized Solutions for Men & Women</li>
                                    <li class="list-group-item">✔ Painless, Non-Surgical Hair Fixing</li>
                                    <li class="list-group-item">✔ Expert Consultation & Personalized Service</li>
                                    <li class="list-group-item">✔ Affordable & Long-Lasting Results</li>
                                </ul>
                            </div>
                        </div>
                        </p> --}}
                        {{-- <a class="btn" href="">Learn More</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team Start -->
    {{-- <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <p>Our Barber Team</p>
                <h2>Meet Our Hair Cut Expert Barber</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-1.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Adam Phillips</h2>
                            <p>Master Barber</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-2.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Dylan Adams</h2>
                            <p>Hair Expert</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-3.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Gloria Edwards</h2>
                            <p>Beard Expert</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-4.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Josh Dunn</h2>
                            <p>Color Expert</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Team End -->

@endsection
