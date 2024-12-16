<nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container-fluid">
        <!-- Brand/Logo -->
        <a class="navbar-brand" href="/" style="font-size: 24px; font-weight: bold;">
            SportEase
        </a>

        <!-- Toggler for Mobile View -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto" style="gap: 10px;">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('aboutus') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">My Bookings</a>
                </li>

                <!-- Check if user is logged in -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Sign Up</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile.edit') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endguest
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contactus')}}">Contact Us</a>
                </li>
            </ul>


        </div>
    </div>
</nav>
<script>
    // Listen for the scroll event
    window.addEventListener('scroll', function () {
    const navbar = document.getElementById('navbar');
    const searchForm = document.querySelector('form.d-flex');
    const navbarBrand = document.querySelector('.navbar-brand');
    const navbarToggler = document.querySelector('.navbar-toggler');


    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
        navbarBrand.classList.add('text-black');
    } else {
        navbar.classList.remove('scrolled');
        navbarBrand.classList.remove('text-black');
    }
});
</script>
