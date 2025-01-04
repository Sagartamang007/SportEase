
  document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        navigation: {
            nextEl: ".custom-swiper-button-next", // Link to your custom class
            prevEl: ".custom-swiper-button-prev", // Link to your custom class
        },
        breakpoints: {
            992: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            576: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
        },
    });
  });

//   booking slot script
      document.addEventListener('DOMContentLoaded', function () {
          // Get all time slot buttons except the booked ones
          const slots = document.querySelectorAll('.slot:not(.booked)');
          let selectedSlot = '';

          // Add click event listener to each available slot
          slots.forEach(slot => {
              slot.addEventListener('click', function () {
                  selectedSlot = this.getAttribute('data-time'); // Get slot time
                  document.getElementById('selectedSlot').textContent = selectedSlot; // Show slot in modal

                  // Initialize and show the modal
                  const bookingModal = new bootstrap.Modal(document.getElementById('bookingModal'));
                  bookingModal.show();
              });
          });

          // Handle booking confirmation
          document.getElementById('confirmBooking').addEventListener('click', function () {
              alert(`Slot "${selectedSlot}" has been booked successfully!`);
              // Optionally, send a backend call here to save the booking
          });
      });



    // document.addEventListener('DOMContentLoaded', function() {
    //     const hourElement = document.getElementById('hour');
    //     const minuteElement = document.getElementById('minute');
    //     const ampmElement = document.getElementById('ampm');
    //     const selectedSlotElement = document.getElementById('selectedSlot');

    //     // Function to update the selected time
    //     function updateSelectedTime() {
    //         const selectedHour = hourElement.value;
    //         const selectedMinute = minuteElement.value;
    //         const selectedAMPM = ampmElement.value;

    //         const selectedTime = `${selectedHour}:${selectedMinute} ${selectedAMPM}`;

    //         // Update the UI with the selected time
    //         selectedSlotElement.textContent = selectedTime;
    //     }

    //     // Event listeners for each dropdown to update the selected time
    //     hourElement.addEventListener('change', updateSelectedTime);
    //     minuteElement.addEventListener('change', updateSelectedTime);
    //     ampmElement.addEventListener('change', updateSelectedTime);

    //     // Initialize the selected time on page load
    //     updateSelectedTime();
    // });


    document.addEventListener('DOMContentLoaded', function () {
        // Initialize Flatpickr for Date Selection
        flatpickr("#date-picker", {
            dateFormat: "Y-m-d", // Format for date
            minDate: "today",    // Optional: prevent past dates from being selected
            disableMobile: true, // Optional: Disable the mobile version of the picker
            onChange: function(selectedDates) {
                // When the date changes, update the selected date display
                updateSelectedSlot();
            }
        });

        // When time changes (Hour, Minute, AM/PM), update the selected slot
        document.getElementById("hour").addEventListener('change', updateSelectedSlot);
        document.getElementById("minute").addEventListener('change', updateSelectedSlot);
        document.getElementById("ampm").addEventListener('change', updateSelectedSlot);

        // Function to update the selected date and time
        function updateSelectedSlot() {
            const selectedDate = document.getElementById("date-picker").value; // Get the selected date
            const selectedHour = document.getElementById("hour").value; // Get selected hour
            const selectedMinute = document.getElementById("minute").value; // Get selected minute
            const selectedAmpm = document.getElementById("ampm").value; // Get selected AM/PM

            // Check if all required fields (date, time) are selected
            if (selectedDate && selectedHour && selectedMinute && selectedAmpm) {
                const timeString = `${selectedHour}:${selectedMinute} ${selectedAmpm}`;
                const selectedSlot = `${selectedDate} at ${timeString}`;

                // Display the selected date and time in the slot
                document.getElementById("selectedSlot").textContent = selectedSlot;
            } else {
                document.getElementById("selectedSlot").textContent = "None";
            }
        }

        // Reset the selected slot when cancel button is clicked
        document.getElementById("cancelButton").addEventListener("click", function() {
            document.getElementById("date-picker").value = "";
            document.getElementById("hour").value = "1";
            document.getElementById("minute").value = "00";
            document.getElementById("ampm").value = "AM";
            document.getElementById("selectedSlot").textContent = "None";
        });

        // Handle booking confirmation and show modal
        document.getElementById("confirmButton").addEventListener("click", function() {
            const selectedSlot = document.getElementById("selectedSlot").textContent;
            if (selectedSlot !== "None") {
                document.getElementById("selectedSlot").textContent = selectedSlot;
                new bootstrap.Modal(document.getElementById("bookingModal")).show();
            }
        });

        document.getElementById("confirmBooking").addEventListener("click", function() {
            // Proceed with the booking confirmation logic
            alert("Booking confirmed for " + document.getElementById("selectedSlot").textContent);
        });
    });
