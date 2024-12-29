<nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top" style="background: black;">
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
                    <a class="nav-link" href="{{ route('aboutus')}}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">My Bookings</a>
                </li>

                <!-- Check if user is logged in -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <!-- Dropdown for Signup Options -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="signupDropdown" role="button">
                            Sign Up <i class="fas fa-angle-down dropdown-icon"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="signupDropdown" style="left: -76px;">
                            <li><a class="dropdown-item" href="{{ route('register') }}">As User</a></li>
                            <li><a class="dropdown-item" href="{{route('Vendorcreate')}}">As Vendor</a></li>
                        </ul>
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
            </ul>
        </div>
    </div>
</nav>

<!-- Separate Styles -->
<style>
    /* Navbar Dropdown Hover */
    .nav-item.dropdown:hover .dropdown-menu {
        display: block;
        margin-top: 0;
    }

    /* Dropdown Toggle Icon */
    .dropdown-icon {
        margin-left: 5px;
        transition: transform 0.3s ease;
    }

    /* Rotate icon on hover */
    .nav-item.dropdown:hover .dropdown-icon {
        transform: rotate(180deg);
    }

    /* Dropdown Items Hover Effect */
    .dropdown-item:hover {
        background-color: #f8f9fa;
        color: #000;
    }

    /* Navbar Scroll Effects */
    #navbar.scrolled {
        background-color: #fff !important;
        transition: background-color 0.3s ease;
    }

    #navbar.scrolled .navbar-brand {
        color: #000 !important;
    }
</style>

<!-- Script for Scroll Behavior -->
<script>
    // Listen for the scroll event
    window.addEventListener('scroll', function () {
        const navbar = document.getElementById('navbar');
        const navbarBrand = document.querySelector('.navbar-brand');

        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
</script>
