@extends('admin.layouts.Master')
@section('content')

<div class="container py-5">
    <div class="hero-section mb-5" style="background-image: url({{asset('bg1.jpg')}}); background-size: cover;">
        <div class="overlay py-5">
            <div class="text-center text-white">
                <h1 class="display-4">About Us</h1>
                <p class="lead">Learn more about SportEase and how we're revolutionizing the sports booking experience.</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <h2>Welcome to SportEase</h2>
            <p>At SportEase, we provide a seamless and user-friendly platform for booking futsal courts and other sports facilities. Our mission is to make it easy for sports enthusiasts to find and book their favorite sports venues quickly and efficiently, ensuring a smooth experience for both users and facility managers.</p>
        </div>

        <div class="col-lg-6">
            <img src="/images/booking-platform.jpg" class="img-fluid rounded" alt="SportEase Platform">
        </div>
    </div>

    <!-- Section 2: Our Mission -->
    <div class="row mt-4">
        <div class="col-lg-6">
            <h2>Our Mission</h2>
            <p>We aim to revolutionize the sports booking experience by offering a digital solution that simplifies the process. Whether you're a sports enthusiast or a facility manager, we strive to make the booking process as easy as possible, so you can focus on what matters: playing and enjoying the game!</p>
        </div>

        <div class="col-lg-6">
            <img src="/images/mission.jpg" class="img-fluid rounded" alt="Our Mission">
        </div>
    </div>

    <!-- Section 3: Our Vision -->
    <div class="row mt-4">
        <div class="col-12">
            <h2>Our Vision</h2>
            <p>Our vision is to become the leading platform for sports bookings, offering users a reliable, easy-to-use service that is available at their fingertips. We aim to expand our platform, continually adding new sports facilities and improving user experience with advanced features and integrations.</p>
        </div>
    </div>

    <!-- Section 4: Our Team -->
    <div class="row mt-4">
        <div class="col-12">
            <h2>Meet Our Team</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="content">
                          <svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 9V5H4V9H20ZM20 11H4V19H20V11ZM3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3ZM5 12H8V17H5V12ZM5 6H7V8H5V6ZM9 6H11V8H9V6Z"></path>
                          </svg>
                          <p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi laboriosam at voluptas minus culpa deserunt delectus sapiente inventore pariatur</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="content">
                          <svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 9V5H4V9H20ZM20 11H4V19H20V11ZM3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3ZM5 12H8V17H5V12ZM5 6H7V8H5V6ZM9 6H11V8H9V6Z"></path>
                          </svg>
                          <p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi laboriosam at voluptas minus culpa deserunt delectus sapiente inventore pariatur</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="content">
                          <svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 9V5H4V9H20ZM20 11H4V19H20V11ZM3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3ZM5 12H8V17H5V12ZM5 6H7V8H5V6ZM9 6H11V8H9V6Z"></path>
                          </svg>
                          <p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi laboriosam at voluptas minus culpa deserunt delectus sapiente inventore pariatur</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 5: Why Choose SportEase -->
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

    <!-- Section 6: Get In Touch -->
    <div class="row mt-4">
        <div class="col-12 text-center">
            <h2>Get In Touch</h2>
            <p>If you have any questions or feedback, feel free to contact us. We'd love to hear from you!</p>
            <a href="{{route('contactus')}}" class="btn btn-primary btn-lg">Contact Us</a>
        </div>
    </div>
</div>

@endsection
