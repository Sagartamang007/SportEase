<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
        <a href="{{route('vendor.dashboard')}}" class="logo d-flex align-items-center">
            <img src="assets/img/logo.png" alt="">
            <span class="d-none d-lg-block">SportEase</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item dropdown pe-3">
                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <style>
                        /* Default state - original color */
                        .nav-profile-name {
                            color: inherit;
                            /* This keeps the original color */
                            transition: color 0.3s;
                            /* Smooth transition for color change */
                        }

                        /* Hover effect */
                        .nav-profile-name:hover {
                            color: red !important;
                        }
                    </style>

                    @if (auth()->check())
                        <!-- Display User Icon -->
                        <i class="bi bi-person rounded-circle" style="font-size: 20px; margin-right: 10px;"></i>
                        <!-- Display Vendor Name -->
                        <span class="ms-2 nav-profile-name">{{ auth()->user()->name }}</span>
                    @else
                        <!-- Default when not logged in -->
                        <i class="bi bi-person" style="font-size: 30px;"></i>
                    @endif
                </a>

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        @if (auth()->check())
                            <h6>{{ auth()->user()->name }}</h6>
                        @else
                            <h6>Guest</h6>
                        @endif
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    @if (auth()->check())
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{route('vendor.profile')}}">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{route('profile.edit')}}">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item d-flex align-items-center">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Log Out</span>
                                </button>
                            </form>
                        </li>
                    @else
                        <!-- Display Login Link for Guests -->
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('login') }}">
                                <i class="bi bi-box-arrow-in-right"></i>
                                <span>Login</span>
                            </a>
                        </li>
                    @endif
                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->
        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const vendorName = document.querySelector('.nav-profile-name'); // Get the vendor name span

        if (vendorName) {
            vendorName.addEventListener('click', function() {
                this.classList.toggle('clicked'); // Toggle the 'clicked' class on click
            });
        }
    });
</script>
