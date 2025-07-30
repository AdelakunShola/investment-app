@extends('frontend.main_master')
@section('main')

<!-- Breadcrumb -->
<div class="breadcrumb__area black-bg breadcrumb__height breadcrumb__border">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <div class="breadcrumb__content z-index">
          <div class="breadcrumb__list text-white">
            <span><a href="{{ url('/') }}">Home</a></span>
            &nbsp;/&nbsp;
            <span>Contact</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Contact Section -->
<section class="py-5">
  <div class="container">
    <div class="row gy-4 align-items-start">

      <!-- Images -->
      <div class="col-lg-6">
        <div class="contact__thumb-box position-relative">
          <div class="contact__thumb mb-4">
            <img src="https://wp.aqlova.com/listbnb/wp-content/uploads/2024/05/thumb-1.png" alt="Main" style="height: 70%; width: 70px;" class="img-fluid rounded-3 w-100">
          </div>
          <div class="contact__thumb-sm mb-4">
            <img src="https://wp.aqlova.com/listbnb/wp-content/uploads/2024/05/thumb-2.png" alt="Secondary" class="img-fluid rounded-3 w-100">
          </div>
         <div class="text-center d-block d-md-none">
    <img src="{{ asset('frontend/wp-content/uploads/2024/04/shape-1-1-3.png') }}" alt="" class="img-fluid">
</div>

          
        </div>
      </div>

      <!-- Contact Info -->
      <div class="col-lg-6">
        <div class="mb-4">
          <span class="tp-section-subtitle text-uppercase d-block mb-2">CONTACT</span>
          <h2 class="tp-section-title h3">We’re happy to discuss your project &amp; answer</h2>
        </div>

        <ul class="list-unstyled">

          <!-- Address -->
          <li class="mb-4 d-flex align-items-start gap-3">
            <div class="flex-grow-1">
              <strong class="d-block mb-1">Address:</strong>
              <span>{{ $contact->address }}</span>
            </div>
            <div class="contact__icon">
              <!-- SVG for address if needed -->
            </div>
          </li>

          <!-- Email -->
          <li class="mb-4 d-flex align-items-start gap-3">
            <div class="flex-grow-1">
              <strong class="d-block mb-1">Email:</strong>
              <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
            </div>
            <div class="contact__icon">
              <!-- SVG -->
            </div>
          </li>

          <!-- Phone Numbers -->
          <li class="mb-4 d-flex align-items-start gap-3">
            <div class="flex-grow-1">
              <strong class="d-block mb-1">Phone:</strong>
              <a href="tel:{{ $contact->phone1 }}">{{ $contact->phone1 }}</a><br>
            </div>
            <div class="contact__icon">
              <!-- SVG -->
            </div>
          </li>

        </ul>
      </div>

    </div>
  </div>
</section>

@endsection
