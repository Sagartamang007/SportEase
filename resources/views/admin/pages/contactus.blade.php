@extends('admin.layouts.Master')

@section('content')
<style>
    .form {
  display: flex;
  flex-direction: column;
  gap: 10px;
  background-color: #ffffff;
  padding: 30px;
  width: 100%;
  border-radius: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-label {
  color: #151717;
  font-weight: 600;
}

.inputForm {
  display: flex;
  align-items: center;
  background-color: #f0f0f0;
  padding: 10px;
  border-radius: 5px;
}

.input {
  border: none;
  padding: 10px;
  background-color: transparent;
  outline: none;
  width: 100%;
  font-size: 16px;
  font-family: 'Arial', sans-serif;
}
.button-submit {
  background-color: #007bff;
  color: white;
  border: none;
  padding: 12px 20px;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
}

.button-submit:hover {
  background-color: #0056b3;
  opacity: 0.7;
}

.flex-column {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.mb-3 {
  margin-bottom: 1rem;
}


    </style>
<div class="container" style="margin-top: 10rem;">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2 class="text-center mb-4">Contact Us</h2>

            <!-- Display Success Message -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!--Form -->
            <form action="{{ route('contactus.submit') }}" method="POST" class="form">
                @csrf

                <div class="flex-column mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <div class="inputForm">
                        <input type="text" class="input" id="name" name="name" placeholder="Enter your Name" required>
                    </div>
                </div>

                <div class="flex-column mb-3">
                    <label for="email" class="form-label">Your Email</label>
                    <div class="inputForm">
                        <input type="email" class="input" id="email" name="email" placeholder="Enter your Email" required>
                    </div>
                </div>

                <div class="flex-column mb-3">
                    <label for="message" class="form-label">Your Message</label>
                    <div class="inputForm">
                        <textarea class="input" id="message" name="message" placeholder="Your Message" rows="5" required></textarea>
                    </div>
                </div>

                <button type="submit" class="button-submit">Send Message</button>
            </form>
        </div>
    </div>
</div>

@endsection
