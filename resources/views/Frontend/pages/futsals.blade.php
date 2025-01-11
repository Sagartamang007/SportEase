@extends('Frontend.layouts.Master')

@section('content')
<section class="py-5">
    <div class="container">
        <div class="row d-flex justify-content-center" style="margin-top: 2rem;">
            <div class="col-md-10 col-xl-8 text-center">
                <h3 class="mb-4">Available Futsal Courts</h3>
                <p class="mb-4 pb-2 mb-md-5 pb-md-0">
                    Explore our premium futsal courts and book your game instantly!
                </p>

                <!-- Search Bar and Sorting Icons -->
                <div class="d-flex justify-content-center align-items-center">
                    <input type="text" id="searchInput" class="form-control w-50" placeholder="Search by name, price, or location">

                    <!-- Sorting Icons with Tooltips -->
                    <div class="ms-2">
                        <button id="sortAlphabetical" class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Sort Alphabetically">
                            <i class="fas fa-sort-alpha-down"></i>
                        </button>
                        <button id="sortPrice" class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Sort by Price">
                            <i class="fas fa-tag"></i>
                        </button>
                        <button id="sortLocation" class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Sort by Location">
                            <i class="fas fa-map-marker-alt"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="futsalCards">
            <!-- Futsal Court Card Example 1 -->
            <div class="col-md-6 col-lg-4 futsal-card" data-name="Futsal A" data-price="100" data-location="Location A">
                <div class="card shadow-sm">
                    <div class="futsal-image">
                        <img src="{{asset('f4.jpg')}}" alt="Futsal A" class="card-img-top rounded-top">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title mb-2">Futsal A</h5>
                        <p class="text-muted"><i class="fas fa-map-marker-alt"></i> Location A</p>
                        <p><strong>Price:</strong> $100</p>
                        <p><strong>Number of Courts:</strong> 3</p>
                        <p><strong>Opening Time:</strong> 6:00 AM</p>
                        <p><strong>Closing Time:</strong> 9:00 PM</p>
                        <a href="booking-page-url" class="btn " style="background-color: rgb(0, 128, 0);color:white">Book Now</a>
                    </div>
                </div>
            </div>

            <!-- Futsal Court Card Example 2 -->
            <div class="col-md-6 col-lg-4 futsal-card" data-name="Futsal B" data-price="120" data-location="Location B">
                <div class="card shadow-sm">
                    <div class="futsal-image">
                        <img src="{{asset('f4.jpg')}}" alt="Futsal B" class="card-img-top rounded-top">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title mb-2">Futsal B</h5>
                        <p class="text-muted"><i class="fas fa-map-marker-alt"></i> Location B</p>
                        <p><strong>Price:</strong> $120</p>
                        <p><strong>Number of Courts:</strong> 3</p>
                        <p><strong>Opening Time:</strong> 6:00 AM</p>
                        <p><strong>Closing Time:</strong> 9:00 PM</p>
                        <a href="booking-page-url" class="btn " style="background-color: rgb(0, 128, 0);color:white">Book Now</a>
                    </div>
                </div>
            </div>

            <!-- Futsal Court Card Example 3 -->
            <div class="col-md-6 col-lg-4 futsal-card" data-name="Futsal C" data-price="140" data-location="Location C">
                <div class="card shadow-sm">
                    <div class="futsal-image">
                        <img src="{{asset('f4.jpg')}}" alt="Futsal C" class="card-img-top rounded-top">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title mb-2">Futsal C</h5>
                        <p class="text-muted"><i class="fas fa-map-marker-alt"></i> Location C</p>
                        <p><strong>Price:</strong> $140</p>
                        <p><strong>Number of Courts:</strong> 2</p>
                        <p><strong>Opening Time:</strong> 7:00 AM</p>
                        <p><strong>Closing Time:</strong> 10:00 PM</p>
                        <a href="booking-page-url" class="btn " style="background-color: rgb(0, 128, 0);color:white">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 futsal-card" data-name="Futsal B" data-price="120" data-location="Location B">
                <div class="card shadow-sm">
                    <div class="futsal-image">
                        <img src="{{asset('f4.jpg')}}" alt="Futsal B" class="card-img-top rounded-top">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title mb-2">Futsal B</h5>
                        <p class="text-muted"><i class="fas fa-map-marker-alt"></i> Location B</p>
                        <p><strong>Price:</strong> $120</p>
                        <p><strong>Number of Courts:</strong> 3</p>
                        <p><strong>Opening Time:</strong> 6:00 AM</p>
                        <p><strong>Closing Time:</strong> 9:00 PM</p>
                        <a href="booking-page-url" class="btn " style="background-color: rgb(0, 128, 0);color:white">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 futsal-card" data-name="Futsal B" data-price="120" data-location="Location B">
                <div class="card shadow-sm">
                    <div class="futsal-image">
                        <img src="{{asset('f4.jpg')}}" alt="Futsal B" class="card-img-top rounded-top">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title mb-2">Futsal B</h5>
                        <p class="text-muted"><i class="fas fa-map-marker-alt"></i> Location B</p>
                        <p><strong>Price:</strong> $120</p>
                        <p><strong>Number of Courts:</strong> 3</p>
                        <p><strong>Opening Time:</strong> 6:00 AM</p>
                        <p><strong>Closing Time:</strong> 9:00 PM</p>
                        <a href="booking-page-url" class="btn " style="background-color: rgb(0, 128, 0);color:white">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 futsal-card" data-name="Futsal B" data-price="120" data-location="Location B">
                <div class="card shadow-sm">
                    <div class="futsal-image">
                        <img src="{{asset('f4.jpg')}}" alt="Futsal B" class="card-img-top rounded-top">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title mb-2">Futsal B</h5>
                        <p class="text-muted"><i class="fas fa-map-marker-alt"></i> Location B</p>
                        <p><strong>Price:</strong> $120</p>
                        <p><strong>Number of Courts:</strong> 3</p>
                        <p><strong>Opening Time:</strong> 6:00 AM</p>
                        <p><strong>Closing Time:</strong> 9:00 PM</p>
                        <a href="booking-page-url" class="btn " style="background-color: rgb(0, 128, 0);color:white">Book Now</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- No Futsal Courts Available Message -->
        <div class="col-12 text-center" id="noCourtsMessage" style="display: none;">
            <p>No futsal courts are currently available.</p>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const searchInput = document.getElementById("searchInput");
        const futsalCards = document.querySelectorAll(".futsal-card");
        const noCourtsMessage = document.getElementById("noCourtsMessage");

        // Function to filter the cards based on search input
        function filterCards() {
            const searchQuery = searchInput.value.toLowerCase();

            let filteredCards = Array.from(futsalCards).filter(card => {
                const name = card.getAttribute("data-name").toLowerCase();
                return name.includes(searchQuery);
            });

            // Append filtered cards to the row
            const futsalCardsContainer = document.getElementById("futsalCards");
            futsalCardsContainer.innerHTML = "";
            filteredCards.forEach(card => {
                futsalCardsContainer.appendChild(card);
            });

            // Display "No futsal courts" message if no cards match the filter
            if (filteredCards.length === 0) {
                noCourtsMessage.style.display = "block";
            } else {
                noCourtsMessage.style.display = "none";
            }
        }

        // Sorting functionality based on the selected icon
        function sortCards(criteria) {
            let sortedCards = Array.from(futsalCards);

            if (criteria === "alphabetical") {
                sortedCards.sort((a, b) => {
                    const nameA = a.getAttribute("data-name").toLowerCase();
                    const nameB = b.getAttribute("data-name").toLowerCase();
                    return nameA.localeCompare(nameB);
                });
            } else if (criteria === "price") {
                sortedCards.sort((a, b) => {
                    const priceA = parseFloat(a.getAttribute("data-price"));
                    const priceB = parseFloat(b.getAttribute("data-price"));
                    return priceA - priceB;
                });
            } else if (criteria === "location") {
                sortedCards.sort((a, b) => {
                    const locationA = a.getAttribute("data-location").toLowerCase();
                    const locationB = b.getAttribute("data-location").toLowerCase();
                    return locationA.localeCompare(locationB);
                });
            }

            // Append sorted cards to the row
            const futsalCardsContainer = document.getElementById("futsalCards");
            futsalCardsContainer.innerHTML = "";
            sortedCards.forEach(card => {
                futsalCardsContainer.appendChild(card);
            });
        }

        // Event listeners for search input and sorting icons
        searchInput.addEventListener("input", filterCards);

        document.getElementById("sortAlphabetical").addEventListener("click", function() {
            sortCards("alphabetical");
            searchInput.value = ""; // Clear search input on sorting action
            filterCards(); // Reapply filter after sorting
        });

        document.getElementById("sortPrice").addEventListener("click", function() {
            sortCards("price");
            searchInput.value = ""; // Clear search input on sorting action
            filterCards(); // Reapply filter after sorting
        });

        document.getElementById("sortLocation").addEventListener("click", function() {
            sortCards("location");
            searchInput.value = ""; // Clear search input on sorting action
            filterCards(); // Reapply filter after sorting
        });

        // Initialize Bootstrap tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });
</script>

@endsection

