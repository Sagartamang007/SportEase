@extends('Frontend.layouts.Master')
@section('content')

<div class="container py-5">
    <!-- Hero Section -->
    <div class="hero-section mb-5" style="background-image: url({{asset('images/about-hero.jpg')}}); background-size: cover; height: 50vh;">
        <div class="overlay py-5" style="height: 100%;">
            <div class="text-center text-white">
                <h1 class="display-4">About Us</h1>
                <p class="lead">Learn more about SportEase and how we're revolutionizing the sports booking experience.</p>
            </div>
        </div>
    </div>

    <!-- Welcome Section -->
    <div class="row">
        <div class="col-lg-6">
            <h2>Welcome to SportEase</h2>
            <p>At SportEase, we provide a seamless and user-friendly platform for booking futsal courts and other sports facilities. Our mission is to make it easy for sports enthusiasts to find and book their favorite sports venues quickly and efficiently, ensuring a smooth experience for both users and facility managers.</p>
        </div>

        <div class="col-lg-6">
            <img src="{{ asset('images/booking-platform.jpg') }}" class="img-fluid rounded" alt="SportEase Platform" style="width: 100%; height: 50vh; object-fit: cover;">
        </div>
    </div>

    <!-- Our Mission Section -->
    <div class="row mt-4">
        <div class="col-lg-6">
            <h2>Our Mission</h2>
            <p>We aim to revolutionize the sports booking experience by offering a digital solution that simplifies the process. Whether you're a sports enthusiast or a facility manager, we strive to make the booking process as easy as possible, so you can focus on what matters: playing and enjoying the game!</p>
        </div>

        <div class="col-lg-6">
            <img src="{{ asset('images/mission.jpg') }}" class="img-fluid rounded" alt="Our Mission" style="width: 100%; height: 50vh; object-fit: cover;">
        </div>
    </div>

    <!-- Our Vision Section -->
    <div class="row mt-4">
        <div class="col-12">
            <h2>Our Vision</h2>
            <p>Our vision is to become the leading platform for sports bookings, offering users a reliable, easy-to-use service that is available at their fingertips. We aim to expand our platform, continually adding new sports facilities and improving user experience with advanced features and integrations.</p>
        </div>
    </div>

    <!-- Our Team Section -->
    <div class="row mt-4">
        <div class="col-12">
            <h2>Meet Our Team</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('images/team1.jpg') }}" class="card-img-top" alt="Team Member 1" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">John Doe</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet pharetra augue, eu interdum ante.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('images/team2.jpg') }}" class="card-img-top" alt="Team Member 2" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Jane Smith</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet pharetra augue, eu interdum ante.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('images/team3.jpg') }}" class="card-img-top" alt="Team Member 3" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Sam Wilson</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet pharetra augue, eu interdum ante.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Us Section -->
    <div class="row mt-4">
        <div class="col-12">
            <h2>Why Choose SportEase?</h2>
            <ul>
                <li><i class="fas fa-check-circle"></i> Easy-to-use interface for booking sports facilities.</li>
                <li><i class="fas fa-check-circle"></i> Real-time availability updates for futsal and other sports venues.</li>
                <li><i class="fas fa-check-circle"></i> Quick booking process with secure payment options.</li>
                <li><i class="fas fa-check-circle"></i> Customer support available for assistance.</li>
                <li><i class="fas fa-check-circle"></i> Continuous updates with new features and improvements.</li>
            </ul>
        </div>
    </div>

    <!-- Get In Touch Section -->
    <div class="row mt-4">
        <div class="col-12 text-center">
            <h2>Get In Touch</h2>
            <p>If you have any questions or feedback, feel free to contact us. We'd love to hear from you!</p>
            <a href="{{route('contactus')}}" class="btn btn-primary btn-lg">Contact Us</a>
        </div>
    </div>
</div>

@endsection
