@extends('frontend.main_master')    
@section('main')
<!-- wrapper-box start -->
<div class="breadcrumb__area black-bg breadcrumb__height breadcrumb__border">
   <div class="container">
      <div class="row">
         <div class="col-xxl-12">
            <div class="breadcrumb__content text-center z-index">
               <div class="breadcrumb__list">
                  <span><a href="{{ route('home') }}">Home</a></span>
                  &nbsp;/&nbsp;Listings                                                <span></span>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- breadcrumb area start -->
<!-- breadcrumb area end -->
<div id="primary" class="tp-list-area pt-80 pb-80">
   <div class="container">
     
      <div class="tp-list-wrap">
         <div class="row">
            <div class="col-xl-9 col-lg-8">
               <div class="tp-list-left">
                  <div class="row">
                     <div class="col-xl-12">
                        <div class="rtcl-listings-actions">
                           <div class="tp-list-text">
                              <span>
                              Showing all {{ $ads->count() }} result{{ $ads->count() !== 1 ? 's' : '' }}
                              </span>
                           </div>
                        </div>
                     </div>
                     <div class="rtcl-listings rtcl-ajax-listings rtcl-list-view columns-3">
                        <div class="listing-item rtcl-listing-item post-2309 status-publish is-sell is-popular rtcl_category-car rtcl_location-astoi">
                           <div class="tp-fea-ads-item tp-fea-ads-item-style-2 item-new item-featured">
                              @foreach ($ads as $ad)
                              <div class="row mb-4">
                                 <div class="col-xl-4 col-lg-4 col-md-4">
                                    <div class="tp-fea-ads-thumb-box p-relative">
                                       <div class="tp-fea-ads-thumb">
                                          <img 
                                             fetchpriority="high" 
                                             width="400" 
                                             height="300" 
                                             src="{{ asset($ad->image) }}" 
                                             class="rtcl-thumbnail" 
                                             alt="{{ $ad->title }}" 
                                             decoding="async">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xl-8 col-lg-8 col-md-8">
                                    <div class="tp-fea-ads-2-content">
                                       <div class="tp-fea-ads-2-meta">
                                          <span>{{ $ad->category ?? 'Uncategorized' }}</span>
                                          <span>{{ $ad->created_at->diffForHumans() }}</span>
                                       </div>
                                       <h4 class="tp-fea-ads-2-title">
                                          <a href="{{ route('ad.details', $ad->id) }}">{{ $ad->title }}</a>

                                       </h4>
                                       <div class="tp-fea-ads-text">
                                          {{ Str::limit($ad->description, 120) }}
                                       </div>
                                       <div class="tp-fea-ads-2-price-box d-flex align-items-center justify-content-between">
                                          <div class="tp-fea-ads-2-price">
                                             <div class="rtcl-price price-type-negotiable">
                                                <div class="rtcl-price-range">
                                                   <span class="rtcl-price-amount amount">
                                                   <span class="rtcl-price-currencySymbol">$</span>{{ number_format($ad->price, 0) }}
                                                   </span>
                                                </div>
                                             </div>
                                          </div>
                                         <div class="tp-fea-ads-2-price-icon">
     <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" 
   target="_blank" title="Share on Facebook">
        <i class="fas fa-share-alt"></i>
        <span class="favourite-label">Share</span>
    </a>
</div>

                                       </div>
                                    </div>
                                 </div>
                              </div>
                              @endforeach
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>	
@endsection