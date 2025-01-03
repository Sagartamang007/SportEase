    @extends('Frontend.layouts.Master')

    @section('content')
    <div class="container-fluid">
        <!-- Green Cover Section -->
        <div class="cover-section">
            <img src="{{ asset('cover.jpg') }}" alt="Cover Image">
        </div>

        <!-- Rounded Image Section Below the Cover Image -->
        <div class="rounded-image-section text-center mt-4">
            <img src="{{ asset('cover.jpg') }}" alt="Rounded Image" class="rounded-image">
        </div>

        <!-- Description Section -->
        <div class="description-section text-center">
            <p>
                This is a placeholder for the description content.
                Replace this text with your actual description.
            </p>
        </div>
    </div>

    <div class="container py-5">
        <h2 class="text-center mb-4">Book Your Slot</h2>

        <!-- Date Picker -->
        <div class="row justify-content-center mb-4">
            <div class="col-md-6">
                <label for="datePicker" class="form-label">Select a Date:</label>
                <input type="date" id="datePicker" class="form-control">
            </div>
        </div>

        <!-- Time Slots -->
        <div class="row">
            <div class="col-md-12">
                <h5 class="text-center mb-3">Available Time Slots</h5>
                <div class="d-flex flex-wrap justify-content-center">
                    <!-- Example slots -->
                    <button class="btn btn-outline-primary m-2 slot" data-time="9:00 AM - 10:00 AM">9:00 AM - 10:00 AM</button>
                    <button class="btn btn-outline-danger m-2 slot booked" disabled>10:00 AM - 11:00 AM</button>
                    <button class="btn btn-outline-primary m-2 slot" data-time="11:00 AM - 12:00 PM">11:00 AM - 12:00 PM</button>
                    <button class="btn btn-outline-primary m-2 slot" data-time="1:00 PM - 2:00 PM">1:00 PM - 2:00 PM</button>
                    <button class="btn btn-outline-danger m-2 slot booked" disabled>2:00 PM - 3:00 PM</button>
                    <!-- Add more slots dynamically from backend -->
                </div>
            </div>
        </div>

        <!-- Confirmation Modal -->
        <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
            <div class="modal-dialog">
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
    @endsection
