@extends('Frontend.layouts.Master')
@section('content')
    <!-- Hero Section with Background Video -->
    <section class="hero-section">
        <div class="video-wrapper">
            <video autoplay muted loop id="background-video" class="video">
                <source src="{{ asset('bg.mp4') }}" type="video/mp4">
            </video>
        </div>
        <div class="overlay"></div>
        <div class="hero-content">
            <div class="container text-center">
                <h1>Welcome to SportEase</h1>
                <p>Your trusted solution for seamless Futsal bookings.</p>
                <a href="{{Route('booking')}}" class="btn nums">Book Now</a>
            </div>
        </div>
    </section>

    <!-- Available Futsal Section -->
    <!-- Swiper Container -->
    <section class="swiper-container py-5">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 col-xl-8 text-center">
                    <h3 class="mb-4">Available Futsal Courts</h3>
                    <p class="mb-4 pb-2 mb-md-5 pb-md-0">
                        Browse through our futsal courts, check their locations and rates, and book instantly for an
                        exciting game!
                    </p>
                </div>
            </div>

            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @forelse($futsal as $data)
                        <!-- Futsal Card 1 -->
                        <div class="swiper-slide">
                            <div class="card futsal-card shadow-sm">
                                <div class="futsal-image">
                                    <img src="https://via.placeholder.com/400x200?text=Greenfield+Futsal" alt="Futsal Image"
                                        class="w-100 rounded-top">
                                </div>
                                <div class="card-body text-center">
                                    <h4 class="futsal-title mb-3">{{ $data->name }}</h4>
                                    <p class="futsal-description text-muted">A premium futsal ground with synthetic grass.
                                    </p>
                                    <p class="text-muted"><i class="fas fa-map-marker-alt"></i> Kathmandu, Nepal</p>
                                    <p><strong>Number of Courts:</strong> 2</p>
                                    <p><strong>Opening Time:</strong> 6:00 AM</p>
                                    <p><strong>Closing Time:</strong> 10:00 PM</p>
                                    <a href="{{Route('booking')}}" class="btn nums-but">Book Now</a>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse



                </div>
                {{-- <!-- Custom Navigation Arrows -->
                            <div class="custom-swiper-button-prev">
                                <i class="fa-solid fa-arrow-left" style="color:  style="color:rgb(0, 128, 0);"></i>
                            </div>
                            <div class="custom-swiper-button-next">
                                <i class="fa-solid fa-arrow-right"  style="color:  style="color:rgb(0, 128, 0);"></i>
                            </div> --}}
            </div>

    </section>
@endsection
