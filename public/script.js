
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
