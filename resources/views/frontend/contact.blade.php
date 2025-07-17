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
<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to ListBnb." href="{{ route('home') }}" class="home"><span property="name">Home</span></a><meta property="position" content="1"></span><span class="dvdr"><i class="fa-solid fa-angle-right"></i></span><span property="itemListElement" typeof="ListItem"><span property="name" class="post post-page current-item">Contact</span><meta property="url" content=""><meta property="position" content="2"></span>                  </div>
                                    <div class="breadcrumb__section-title-box">
                     <h3 class="breadcrumb__title">Contact</h3>
                  </div>
               </div>
            </div>
         </div>
      </div>
     </div>
      <!-- breadcrumb area end -->
    		<div data-elementor-type="wp-page" data-elementor-id="2111" class="elementor elementor-2111">
    <div class="elementor-element elementor-element-020d6eb e-con-boxed e-con e-parent" data-id="020d6eb" data-element_type="container">
        <div class="e-con-inner" style="display: flex; flex-wrap: wrap; gap: 30px; justify-content: space-between; align-items: flex-start;">

            <!-- Left: Images -->
            <div class="elementor-element e-con-full e-con e-child" style="flex: 1 1 48%; max-width: 48%;">
                <div class="elementor-widget-container">
                    <div class="contact__thumb-box p-relative">
                        <div class="contact__thumb mb-3">
                            <img decoding="async" src="https://wp.aqlova.com/listbnb/wp-content/uploads/2024/05/thumb-1.png" alt="" style="width: 100%; border-radius: 12px;">
                        </div>
                        <div class="contact__thumb-sm">
                            <img decoding="async" src="https://wp.aqlova.com/listbnb/wp-content/uploads/2024/05/thumb-2.png" alt="" style="width: 100%; border-radius: 12px;">
                        </div>
                        <div class="contact__shape-1 d-none d-md-block">
                            <img decoding="async" src="https://wp.aqlova.com/listbnb/wp-content/uploads/2024/05/shape-1-1-7.png" alt="">
                        </div>
                        <div class="contact__shape-2 d-none d-md-block">
                            <img decoding="async" src="https://wp.aqlova.com/listbnb/wp-content/uploads/2024/05/shape-1-2-1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Contact Info -->
            <div class="elementor-element e-con-full e-con e-child" style="flex: 1 1 48%; max-width: 48%;">
                <div class="elementor-widget-container">
                    <div class="tp-location-title-box ele-content-align mb-4">
                        <span class="tp-section-subtitle tp-el-sub-title">CONTACT</span>
                        <h2 class="tp-section-title pb-3 tp-el-title">We’re happy to discuss your project &amp; answer</h2>
                    </div>

                    <div class="contact__list-box">
                        <ul>
                            <!-- Address -->
                            <li>
                                <div class="contact__list d-flex align-items-center justify-content-between">
                                    <div class="contact__text">
                                        <a class="tp-el-rep-title" href="#">{{ $contact->address }}</a>
                                    </div>
                                    <div class="contact__icon">
                                        <!-- SVG Icon for address -->
                                    </div>
                                </div>
                            </li>

                            <!-- Email & Phones -->
                           <li>
    <div class="contact__list d-flex align-items-center justify-content-between">
        <div class="contact__text">
            <a class="tp-el-rep-title" href="mailto:{{ $contact->email }}">
                {{ $contact->email }}
            </a>
            <br>
            <a class="tp-el-rep-title" href="tel:{{ $contact->phone1 }}">
                {{ $contact->phone1 }}
            </a>
            <br>
            <a class="tp-el-rep-title" href="tel:{{ $contact->phone2 }}">
                {{ $contact->phone2 }}
            </a>
        </div>
        <div class="contact__icon">
            <span class="tp-el-rep-icon">
                <!-- Email/Phone Icon SVG here -->
            </span>
        </div>
    </div>
</li>

                        </ul>
                    </div>
                </div>
            </div>

        </div> <!-- /.e-con-inner -->
    </div>
</div>

			
@endsection


