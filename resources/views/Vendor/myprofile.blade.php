<x-app-layout>
    <main id="main" class="main">
        <section class="section dashboard">
            <div class="row">
                <!-- Profile Card -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">My Profile</h5>

                            <!-- Profile Icon Instead of Image -->
                            <div class="text-center mb-3">
                                <!-- Use Bootstrap Icons for user icon -->
                                <i class="bi bi-person-circle" style="font-size: 5rem;"></i>
                            </div>

                            <!-- User Info -->
                            <p><strong>Name:</strong> {{ auth()->user()->name }}</p>
                            <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
                            <p><strong>Joined:</strong> {{ auth()->user()->created_at->format('F d, Y') }}</p>


                        </div>
                    </div>
                </div>

                <!-- Profile Information or Other Data -->
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Additional Information</h5>

                            <!-- Display Additional Profile Info with Flexbox -->
                            <div class="d-flex flex-column gap-3">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-telephone" style="font-size: 1.5rem; margin-right: 10px;"></i>
                                    <strong>Phone:</strong> {{ auth()->user()->phone ?? 'N/A' }}
                                </div>
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-house-door" style="font-size: 1.5rem; margin-right: 10px;"></i>
                                    <strong>Address:</strong> {{ auth()->user()->address ?? 'N/A' }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-app-layout>
