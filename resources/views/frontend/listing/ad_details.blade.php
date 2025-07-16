@extends('frontend.main_master')    
@section('main')


    @php
    $shareUrl = urlencode(route('ad.details', $ad->id));
@endphp
      <!-- wrapper-box start -->
      <div class="breadcrumb__area black-bg breadcrumb__height breadcrumb__border">
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="breadcrumb__content text-center z-index">
                  <div class="breadcrumb__list">
    <span><a href="{{ url('/') }}">Home</a></span>
    
    @if($ad->category)
        &nbsp;/&nbsp;
        <span>
            <a href="">
                {{ ucfirst($ad->category) }}
            </a>
        </span>
    @endif
    
    &nbsp;/&nbsp;
    <span>{{ $ad->title }}</span>
</div>

                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="primary" class="tp-list-area pt-80 pb-80">
         <div class="container">
            <div class="row">
               <div class="col-xl-9 col-lg-8">
                  <div class="tp-list-details-wrap">
                     <div class="tp-list-details-box">
                        <h4 class="tp-list-details-top-title">{{ $ad->title }}</h4>
                        <div class="tp-list-details-top-meta d-flex mb-15">
                           <div class="tp-list-details-top-id">
                              <i class="fal fa-book"></i>
                              <span><i>ID:</i> {{ $ad->id }}</span>
                           </div>
                           <span><i class="fal fa-map-marker-alt"></i>{{ $ad->location }}</span>
                           <span class="date"><i class="fal fa-calendar-alt"></i>{{ $ad->created_at->diffForHumans() }}</span>
                           <span><i class="fal fa-eye"></i>Views: <b>1302</b></span>
                        </div>
                        <div class="tp-list-details-top-right d-flex align-items-center justify-content-between">
                           <div class="tp-list-details-top-icon-box tp-single-favourite-icon d-flex">
                              <a href="#" data-bs-toggle="modal" data-bs-target="#logoutModalCenter" title="Favourites"><i class="rtcl-icon rtcl-icon-heart-empty"></i><span class="favourite-label">Add to Favourites</span></a>                
                           </div>
                      

<div class="tp-list-details-top-social d-none d-md-block">
    <span>Share</span>
    <a href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrl }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
    <a href="https://twitter.com/share?url={{ $shareUrl }}" target="_blank"><i class="fab fa-twitter"></i></a>
    <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url={{ $shareUrl }}" target="_blank"><i class="fab fa-linkedin"></i></a>
    <a href="http://pinterest.com/pin/create/button/?url={{ $shareUrl }}" target="_blank"><i class="fa-brands fa-pinterest-p"></i></a>
</div>

                        </div>
                        <div class="tp-list-details-slider-wrap p-relative mt-30">
                           <div class="tp-list-details-slider-active slick-initialized slick-slider">
                              <div class="slick-list draggable">
                                 <div class="slick-track" style="opacity: 1; width: 942px;">
                                   <div class="it-tp-list-details-slider-item slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 314px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;" tabindex="0">
   <img src="{{ asset($ad->image) }}" data-src="{{ asset($ad->image) }}" data-large_image="{{ asset($ad->image) }}" data-large_image_width="900" data-large_image_height="600" alt="{{ $ad->title }}" data-caption="" class="rtcl-responsive-img">
</div>

<div class="it-tp-list-details-slider-item slick-slide" data-slick-index="1" aria-hidden="true" style="width: 314px; position: relative; left: -314px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1">
   <img src="{{ asset($ad->image) }}" data-src="{{ asset($ad->image) }}" data-large_image="{{ asset($ad->image) }}" data-large_image_width="900" data-large_image_height="600" alt="{{ $ad->title }}" data-caption="" class="rtcl-responsive-img">
</div>

<div class="it-tp-list-details-slider-item slick-slide" data-slick-index="2" aria-hidden="true" style="width: 314px; position: relative; left: -628px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1">
   <img src="{{ asset($ad->image) }}" data-src="{{ asset($ad->image) }}" data-large_image="{{ asset($ad->image) }}" data-large_image_width="900" data-large_image_height="600" alt="{{ $ad->title }}" data-caption="" class="rtcl-responsive-img">
</div>

                                 </div>
                              </div>
                           </div>
                           
                        </div>
                     </div>
                      <p>{{ $ad->description }}</p>
                     <ul class="list-group list-group-flush custom-field-properties">
                     

<li><i>Condition</i><span> :: {{ $ad->condition }}</span></li>
<li><i>Price</i><span> :: ${{ number_format($ad->price, 2) }}</span></li>
<li><i>Location</i><span> :: {{ $ad->location }}</span></li>
<li><i>Category</i><span> :: {{ $ad->category }}</span></li>
                     </ul>
                     <div class="tp-list-details-box">
                        <h4 class="tp-list-details-title mb-0">Map</h4>
                        <div class="product__details-info mt-20 tp-list-details-list-group">
                           <ul>
                              <li>
                                 <i>Phone</i>
                                 <span>+880185655464</span>
                              </li>
                            
                           </ul>
                        </div>
                        <!-- MAP  -->
                      
                     </div>
                     <!-- Business Hours  -->
                     <!-- Social Profile  -->
                  
                  </div>
               </div>
               <!-- Sidebar -->
          
            </div>
         </div>
      </div>
     
@endsection