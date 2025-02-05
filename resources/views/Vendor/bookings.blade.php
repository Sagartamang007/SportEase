{{-- <x-app-layout>
    <main id="main" class="main">
        <section class="section">
            <div class="row">
                <!-- Booking Table -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Booking Information</h5>
                        </div>
                        <div class="card-body">
                            <!-- Simple Table -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Date</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($bookings as $booking)
                                        <tr>
                                            <td>{{ $booking->username }}</td>
                                            <td>{{ $booking->date }}</td>
                                            <td>{{ $booking->start_time }}</td>
                                            <td>{{ $booking->end_time }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">No bookings found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>

                            <!-- Pagination -->
                            @if ($bookings->hasPages())
                                <div class="mt-3">
                                    {{ $bookings->links() }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-app-layout> --}}
