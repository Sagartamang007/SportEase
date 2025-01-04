@extends('Frontend.layouts.Master')

@section('content')
<style>
    .con {
        color: white;
        background: #198754;
    }
    .con:hover {
        border: 1px solid #198754;
        color: #198754;
    }
</style>

<div class="container-fluid">
    <!-- Green Cover Section -->
    <div class="cover-section">
        <img src="{{ asset('cover.jpg') }}" alt="Cover Image" class="img-fluid w-100">
    </div>

    <!-- Rounded Image Section Below the Cover Image -->
    <div class="rounded-image-section text-center mt-4">
        <img src="{{ asset('cover.jpg') }}" alt="Rounded Image" class="rounded-circle img-fluid" style="max-width: 200px;">
    </div>

    <!-- Description Section -->
    <div class="description-section text-center mt-4">
        <p>
            This is a placeholder for the description content.
            Replace this text with your actual description.
        </p>
    </div>
</div>

<div class="container py-5">
    <h2 class="text-center mb-4" style="color: #198754;">Book Your Slot</h2>

    <!-- Date Picker Section with Calendar -->
    <div class="row justify-content-center mb-4">
        <div class="col-12 col-md-6 mb-3 mb-md-0">
            <div class="calendar-container">
                <!-- Flatpickr input -->
                <label for="hour" style="font-weight: bold;">Select Time</label>

                <input type="text" id="date-picker" class="form-control" placeholder="Select Date" />
            </div>
        </div>

        <!-- Time Selector Section -->
        <div class="col-12 col-md-6 mb-3 mb-md-0">
            <div class="time-selector">
                <label for="hour" style="font-weight: bold;">Select Time</label>

                <!-- Hour Selection -->
                <select id="hour" class="form-control mb-2">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>

                <!-- Minute Selection -->
                <select id="minute" class="form-control mb-2">
                    <option value="00">00</option>
                    <option value="15">15</option>
                    <option value="30">30</option>
                    <option value="45">45</option>
                </select>

                <!-- AM/PM Selection -->
                <select id="ampm" class="form-control">
                    <option value="AM">AM</option>
                    <option value="PM">PM</option>
                </select>
            </div>
            <!-- Display Selected Time -->
            <div class="text-center">
                <p>Your selected time: <span id="selectedSlot" class="fw-bold">None</span></p>
            </div>
            <!-- Cancel and Confirm Buttons -->
            <div class="d-flex justify-content-center mt-3">
                <button id="cancelButton" class="btn btn-secondary me-2">Cancel</button>
                <button id="confirmButton" class="btn con">Confirm</button>
            </div>
        </div>
    </div>

    <!-- Confirmation Modal -->
    <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bookingModalLabel">Confirm Your Booking</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to book the following slot?</p>
                    <p id="selectedSlot" class="fw-bold"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="confirmBooking">Confirm</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        flatpickr("#date-picker", {
            dateFormat: "Y-m-d", // Format for date
            minDate: "today",    // Optional: prevent past dates from being selected
            disableMobile: true  // Optional: Disable the mobile version of the picker
        });
    });
</script>
@endsection
