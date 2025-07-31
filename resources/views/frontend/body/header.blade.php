@php
use App\Models\About;
$about = About::first();
@endphp
<div data-elementor-type="wp-post" data-elementor-id="2901" class="elementor elementor-2901">
   <div class="elementor-element elementor-element-d17ec59 e-con-full e-flex e-con e-parent" data-id="d17ec59" data-element_type="container">
      <div class="elementor-element elementor-element-79c0421 elementor-widget elementor-widget-tp-header-04" data-id="79c0421" data-element_type="widget" data-widget_type="tp-header-04.default">
         <div class="elementor-widget-container">
            <header class="tp-header-height">
               <!-- header-top area start -->
               <div class="tp-header-top-area tp-header-top-style d-none d-md-block">
                  <div class="container">
                     <div class="row align-items-center">
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-6">
                           <div class="tp-header-logo">
                              <a href="{{ route('home') }}"> 
                              <img class="tpLogoImg" 
                                 src="{{ $about && $about->image ? asset($about->image) : '' }}" style="height: 140px; width: 140px;" alt="Logo">
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- header-top area end -->
               <!-- header area area -->
               <div id="header-sticky" class="tp-header-area tp-header-style-3">
                  <div class="container">
                     <div class="tp-header-border">
                        <div class="row align-items-center">
                           <div class="col-xxl-2 col-xl-3 col-lg-6 col-md-6 col-6">
                              <div class="tp-header__left d-flex align-items-center">
                                 <div class="tp-header-logo d-md-none">
                                    <a href="{{ route('home') }}">
                                    <img class="tpLogoImg" src="{{ $about && $about->image ? asset($about->image) : '' }}" style="height: 140px; width: 140px;" alt="">
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-7 col-xl-6 d-none d-xl-block">
                              <div class="tp-header-menu">
                                 <nav class="tp-main-menu-content">
                                    <ul id="menu-1-79c0421" class="tp-nav-menu ">
                                       <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-3291" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-3291 menu-item-3291 nav-item">
                                          <a title="Home" href="{{ route('home') }}" class="nav-links">Home</a>
                                       </li>
                                       <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-21" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-21 menu-item-21 nav-item">
                                          <a title="Listings" href="{{ route('frontend.all.ad') }}" class="nav-links">Listings</a>
                                       </li>
                                       <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-28" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-28 menu-item-28 nav-item">
                                          <a title="Pages" href="{{ route('about.us') }}" class="nav-links">About</a>
                                       </li>
                                       <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-26" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26 menu-item-26 nav-item">
                                          <a title="Plans" href="{{ route('plan') }}" class="nav-links">Plans</a>
                                       </li>
                                       <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-2557" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2557 menu-item-2557 nav-item">
                                          <a title="Contact" href="{{ route('contact.us') }}" class="nav-links">Contact</a>
                                       </li>
                                      <li class="menu-item nav-item">
   @auth
   <a href="{{ route('user.dashboard') }}" class="nav-links">
      <i class="fas fa-user"></i> Dashboard
   </a>
   @else
   <a href="{{ route('user.login') }}" class="nav-links">
      <i class="fas fa-sign-in-alt"></i> Sign In
   </a>
   <a href="{{ route('user.register') }}" class="nav-links">
      <i class="fas fa-user-plus"></i> Signup
   </a>
   @endauth
</li>

                                    </ul>
                                 </nav>
                              </div>
                           </div>
                           <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-6">
                              <div class="tp-header-right d-flex justify-content-end align-items-center">
                                 <div class="tp-header-bar d-xl-none">
                                    <button class="tp-menu-bar"><i class="fas fa-bars"></i></button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- header area end -->
            </header>
            <!-- tp-offcanvus-area-start -->
            <div class="tpoffcanvas-are offcanSec">
               <div class="tpoffcanvas">
                  <div class="tpoffcanvas__close-btn">
                     <button class="close-btn"><i class="fas fa-times"></i></button>
                  </div>
                  <div class="tpoffcanvas__logo">
                     <a href="{{ route('user.login') }}">
                     <img class="offcanLogo" src="{{ $about && $about->image ? asset($about->image) : '' }}" style="height: 140px; width: 140px;" alt="">
                     </a>
                  </div>
               </br>
                  <div class="tpoffcanvas__title">
                     <p class="offcanAboutText">ShareAlux is a next-gen platform where users earn daily by sharing luxury ads online.</p>
                  </div>
                  <div class="tp-main-menu-mobile d-xl-none"></div>
                  <div class="tpoffcanvas__contact-info">
                     <div class="tpoffcanvas__contact-title">
                        <h5 class="offcanConTitle">Contact Us</h5>
                     </div>
                     <ul>
                        <li class="offConListIcon">
                           <i class="fas fa-location-arrow"></i>
                           <a href="" target="_blank">{{ $about->address }}</a>
                        </li>
                        <li class="offConListIcon">
                           <i class="far fa-envelope-open"></i>
                           <a href="mailto:{{ $about->email }}" target="_blank">{{ $about->email }}</a>
                        </li>
                        <li class="offConListIcon">
                           <i class="fal fa-phone"></i>
                           <a href="tel:{{ $about->phone1 }}" target="_blank">{{ $about->phone1 }}</a>
                        </li>
                     </ul>
                  </div>
                  <div class="tpoffcanvas__input">
                     <div class="tpoffcanvas__input-title">
                        <h4 class="offcanSubsTitle">GET UPDATE</h4>
                     </div>
                     <div class="wpcf7 no-js" id="wpcf7-f2883-o1" lang="en-US" dir="ltr" data-wpcf7-id="2883">
                        <div class="screen-reader-response">
                           <p role="status" aria-live="polite" aria-atomic="true"></p>
                           <ul></ul>
                        </div>
                        <form  class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
                           <div class="p-relative">
                              <span class="wpcf7-form-control-wrap" data-name="your-email"><input size="40" maxlength="400" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email" autocomplete="email" aria-required="true" aria-invalid="false" placeholder="Enter mail" value="" type="email" name="your-email" /></span>
                              <button type="submit">
                              <i class="fas fa-paper-plane"></i>
                              </button>
                           </div>
                           <div class="wpcf7-response-output" aria-hidden="true"></div>
                        </form>
                     </div>
                  </div>
                  <div class="tpoffcanvas__social">
                     <div class="social-icon">
                        <a class="offConSocial" href="{{ $about->twitter }}">                                        <i class="fab fa-twitter"></i>
                        </a>
                        <a class="offConSocial" href="{{ $about->instagram }}">                                        <i class="fab fa-instagram"></i>
                        </a>
                        <a class="offConSocial" href="{{ $about->facebook }}">                                        <i class="fab fa-facebook-f"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="body-overlay"></div>
            <!-- tp-offcanvus-area-end -->
            <!-- Modal -->
            <div class="modal fade tp-product-modal" id="contactfromModal" tabindex="-1" aria-labelledby="contactfromModal" aria-hidden="true">
               <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                     <button type="button" class="close-btn" data-bs-toggle="modal" data-bs-target="#contactfromModal">
                     <i class="fa-regular fa-xmark"></i>
                     </button>
                     <div class="message-form-modal__wrap-box">
                        <div class="tp-message-form__box">
                           <div class="tp-message-form__label">
                              Send a message                        
                           </div>
                           <div class="wpcf7 no-js" id="wpcf7-f2806-o2" lang="en-US" dir="ltr" data-wpcf7-id="2806">
                              <div class="screen-reader-response">
                                 <p role="status" aria-live="polite" aria-atomic="true"></p>
                                 <ul></ul>
                              </div>
                              <form  class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
                                 <div class="tp-message-form__input">
                                    <span class="wpcf7-form-control-wrap" data-name="your-name"><input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" autocomplete="name" aria-required="true" aria-invalid="false" placeholder="Your Name*" value="" type="text" name="your-name" /></span>
                                 </div>
                                 <div class="tp-message-form__input">
                                    <span class="wpcf7-form-control-wrap" data-name="your-email"><input size="40" maxlength="400" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email" autocomplete="email" aria-required="true" aria-invalid="false" placeholder="info@*" value="" type="email" name="your-email" /></span> 
                                 </div>
                                 <div class="tp-message-form__form">
                                    <span class="wpcf7-form-control-wrap" data-name="your-message"><textarea cols="40" rows="10" maxlength="2000" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Your Messege" name="your-message"></textarea></span>
                                 </div>
                                 <div class="tp-message-form__bottom d-flex align-items-center justify-content-between">
                                    <div class="tp-message-form__button">
                                       <button class="tp-btn-theme" type="submit">
                                       <span>Send Message<i
                                          class="fa-sharp fa-regular fa-arrow-right-long"></i>
                                       </span>
                                       </button>
                                    </div>
                                 </div>
                                 <div class="wpcf7-response-output" aria-hidden="true"></div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Modal -->				
         </div>
      </div>
   </div>
</div>