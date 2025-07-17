@extends('frontend.main_master')    
@section('main')







   

   <!-- wrapper-box start -->
       <!-- breadcrumb area start -->
    <div class="breadcrumb__area breadcrumb__overlay breadcrumb__bg p-relative fix" style="background-image:url(https://wp.aqlova.com/listbnb/wp-content/uploads/2024/05/breadcurmb.jpg); ">
      <div class="container">
         <div class="row">
            <div class="col-xxl-12">
               <div class="breadcrumb__content z-index">
                                 <div class="breadcrumb__list mb-10">
                    <!-- Breadcrumb NavXT 7.4.1 -->
<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to ListBnb." href="{{ route('home') }}" class="home"><span property="name">Home</span></a><meta property="position" content="1"></span><span class="dvdr"><i class="fa-solid fa-angle-right"></i></span><span property="itemListElement" typeof="ListItem"><span property="name" class="post post-page current-item">Plans</span><meta property="url" content=""><meta property="position" content="2"></span>                  </div>
                                    <div class="breadcrumb__section-title-box">
                     <h3 class="breadcrumb__title">Plans</h3>
                  </div>
               </div>
            </div>
         </div>
      </div>
     </div>
   
     


       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<div class="elementor-element elementor-element-fb3380a e-flex e-con-boxed e-con e-parent" data-id="fb3380a" data-element_type="container">
            <div class="e-con-inner">
               <div class="elementor-element elementor-element-71928a8 elementor-widget elementor-widget-section-title" data-id="71928a8" data-element_type="widget" data-widget_type="section-title.default">
                  <div class="elementor-widget-container">
                     <div class="tp-fea-ads-title-box ele-content-align">
                        <h2 class="tp-section-title-2 pb-5 tp-el-title">
                           Find your
                           <span class="p-relative">
                              plan
                              <span class="tp-section-title-shape">
                                 <svg width="47" height="47" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.2132 42.7799L35.7089 36.0624" stroke="#F50963" stroke-width="2" stroke-linecap="round" />
                                    <path d="M3.53575 25.1023L11.6675 9.89954" stroke="#F50963" stroke-width="2" stroke-linecap="round" />
                                    <path d="M12.7282 34.2947L33.5879 12.0209" stroke="#F50963" stroke-width="2" stroke-linecap="round" />
                                 </svg>
                              </span>
                           </span>
                        </h2>
                        <p class="tp-el-content">Sharealux is a platform on which you can buy and sell almost everything!</p>
                     </div>
                  </div>
               </div>
               <div class="elementor-element elementor-element-6f2cba0 elementor-widget elementor-widget-tp-offer" data-id="6f2cba0" data-element_type="widget" data-widget_type="tp-offer.default">
                  <div class="elementor-widget-container">
                     <div class="tp-price-top-plan tp-el-section">
                        <div class="row align-items-center">
                           <div class="col-xl-8 col-lg-6 col-md-6">
                              <div class="tp-price-top-left d-flex align-items-center">
                                 <div class="tp-price-top-icon">
                                    <span>
                                       <svg width="29" height="21" viewBox="0 0 29 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M28.6025 4.23598C28.2599 3.94355 27.7765 3.88192 27.3713 4.07914L21.1723 7.09696L15.3558 0.390594C15.1407 0.142508 14.8284 0 14.5 0C14.1716 0 13.8594 0.142508 13.6442 0.390594L7.82769 7.0969L1.62871 4.07909C1.22356 3.88192 0.740192 3.94349 0.397516 4.23593C0.0548406 4.52836 -0.0820032 4.9961 0.0490066 5.42713L4.35369 19.5873C4.49875 20.0645 4.93879 20.3906 5.43751 20.3906H23.5625C24.0612 20.3906 24.5013 20.0645 24.6463 19.5873L28.951 5.42719C29.082 4.99616 28.9452 4.52842 28.6025 4.23598ZM22.7228 18.125H6.2771L2.97206 7.25295L7.61784 9.51466C8.07912 9.73919 8.6334 9.62579 8.96945 9.23837L14.5 2.86177L20.0306 9.23837C20.3666 9.62585 20.9211 9.73913 21.3822 9.51466L26.028 7.25295L22.7228 18.125Z" fill="currentcolor"></path>
                                       </svg>
                                    </span>
                                 </div>
                                 <div class="tp-price-top-text">
                                    <h6 class="tp-el-offer-title">Free Plan</h6>
                                    <span class="tp-el-offer-desc">Up to 1 ads, No support, No edit option</span>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-price-button text-md-end">
                                 <a href="" target="_self" rel="nofollow" class="tp-btn-border tp-el-box-btn">Subscribe Now<i class="fa-sharp fa-regular fa-arrow-right-long"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

















           <div class="swiper myPlanSwiper elementor-element elementor-element-1158e34 e-con-full e-flex e-con e-child">
    <div class="swiper-wrapper">
        @foreach ($plans as $plan)
            <div class="swiper-slide">
                <div class="elementor-element e-con-full e-flex e-con e-child" data-id="plan-{{ $plan->id }}" data-element_type="container">
                    <div class="elementor-element elementor-widget elementor-widget-tp-pricing-table" data-id="pricing-{{ $plan->id }}" data-element_type="widget" data-widget_type="tp-pricing-table.default">
                        <div class="elementor-widget-container">
                            <div class="tp-price-item text-center {{ $loop->first ? 'active' : '' }} {{ $plan->badge ? 'border-theme' : '' }}">
                                @if ($plan->badge)
                                    <div class="tp-price-badge tp-el-badge">
                                        <span>{{ $plan->badge }}</span>
                                    </div>
                                @endif

                                <div class="tp-price-top mb-15">
                                    <h6 class="tp-price-number tp-el-box-ammount" style="font-size: 30px;">
                                        <i>&#036;</i>{{ number_format($plan->min_amount, 2) }} - {{ number_format($plan->max_amount, 2) }}
                                    </h6>
                                    <span class="tp-el-header-title">{{ strtoupper($plan->name) }}</span>
                                </div>

                                <div class="tp-price-list mb-15">
                                    <ul>
                                        <li class="tp-el-box-list">
                                            <span class="tp-el-feature-title">
                                                Ads Range: {{ number_format($plan->min_amount) }} - {{ number_format($plan->max_amount) }}
                                            </span>
                                            <i class="fal fa-check"></i>
                                        </li>
                                        <li class="tp-el-box-list">
                                            <span class="tp-el-feature-title">Weekly Interest: {{ $plan->weekly_interest }}%</span>
                                            <i class="fal fa-check"></i>
                                        </li>
                                        <li class="tp-el-box-list">
                                            <span class="tp-el-feature-title">24/7 Online Support</span>
                                            <i class="fal fa-check"></i>
                                        </li>
                                        <li class="tp-el-box-list">
                                            <span class="tp-el-feature-title">Limited Edit Option</span>
                                            <i class="fal fa-check"></i>
                                        </li>
                                        <li class="tp-el-box-list">
                                            <span class="tp-el-feature-title">Limited Upload Option</span>
                                            <i class="fal fa-check"></i>
                                        </li>
                                    </ul>
                                </div>

                                <div  class="tp-price-button">
                                    <a style="color: pink; href="#" class="tp-btn-border w-100 tp-el-box-btn">
                                        Subscribe Now <i class="fa-sharp fa-regular fa-arrow-right-long"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Optional Navigation Buttons --}}
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>

<!-- Swiper Scripts -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    new Swiper('.myPlanSwiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            }
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });
</script>

			
@endsection


