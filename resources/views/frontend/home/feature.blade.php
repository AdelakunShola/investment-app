  <div class="elementor-element elementor-element-6f0a812 e-flex e-con-boxed e-con e-parent" data-id="6f0a812" data-element_type="container">
            <div class="e-con-inner">
               <div class="elementor-element elementor-element-aa8cce2 elementor-widget elementor-widget-section-title" data-id="aa8cce2" data-element_type="widget" data-widget_type="section-title.default">
                  <div class="elementor-widget-container">
                     <div class="tp-fea-ads-title-box ele-content-align">
                        <h2 class="tp-section-title-2 pb-5 tp-el-title">
                           Featured
                           <span class="p-relative">
                              ads
                              <span class="tp-section-title-shape">
                                 <svg width="47" height="47" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.2132 42.7799L35.7089 36.0624" stroke="#F50963" stroke-width="2" stroke-linecap="round" />
                                    <path d="M3.53575 25.1023L11.6675 9.89954" stroke="#F50963" stroke-width="2" stroke-linecap="round" />
                                    <path d="M12.7282 34.2947L33.5879 12.0209" stroke="#F50963" stroke-width="2" stroke-linecap="round" />
                                 </svg>
                              </span>
                           </span>
                        </h2>
                        <p class="tp-el-content">Listbnb is a platform on which you can buy and sell almost everything!</p>
                     </div>
                  </div>
               </div>
               <div class="elementor-element elementor-element-dc041d0 elementor-widget elementor-widget-all-listing" data-id="dc041d0" data-element_type="widget" data-widget_type="all-listing.default">
                  <div class="elementor-widget-container">
                    <div class="row">
    @forelse($featuredAds as $ad)
    <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-30 wow tpfadeUp"
         data-wow-duration=".9s" data-wow-delay="0.3s">
        <div class="tp-fea-ads-item item-style-1">
            <div class="tp-fea-ads-thumb-box p-relative">
                <div class="tp-fea-ads-thumb">
                    <a href="">
                        <img loading="lazy" decoding="async" width="400" height="300"
                             src="{{ asset($ad->image) }}"
                             class="rtcl-thumbnail"
                             alt="{{ $ad->title }}" />
                    </a>
                </div>
             
            </div>
            <div class="tp-fea-ads-2-content">
                <div class="tp-fea-ads-2-meta">
                    <span class="tp-el-rep-location">
                        {{ $ad->location ?? 'Not specified' }}
                    </span>
                    <span class="tp-el-date">
                        {{ $ad->created_at->diffForHumans() }}
                    </span>
                </div>
                <h4 class="tp-fea-ads-2-title tp-el-rep-title">
                    <a href="">{{ $ad->title }}</a>
                </h4>
                <div class="tp-fea-ads-2-price-box d-flex align-items-center justify-content-between">
                    <div class="tp-fea-ads-2-price">
                        <div class="rtcl-price price-type-fixed">
                            <span class="rtcl-price-amount amount">
                                <bdi>${{ number_format($ad->price, 2) }}</bdi>
                            </span>
                        </div>
                    </div>
                    <div class="tp-fea-ads-2-price-icon">
                       <a href="#" title="Share this Ad">
        <i class="fas fa-share-alt"></i>
        <span class="favourite-label">Share</span>
    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @empty
    <p>No featured ads available at the moment.</p>
    @endforelse
</div>

                  </div>
               </div>
               <div class="elementor-element elementor-element-17ad1a6 elementor-widget elementor-widget-tp-button" data-id="17ad1a6" data-element_type="widget" data-widget_type="tp-button.default">
                  <div class="elementor-widget-container">
                     <a href="https://wp.aqlova.com/listbnb/listings/" target="_self" rel="nofollow" class="tp-btn-border tp-el-btn">More Items<i class="fa-sharp fa-regular fa-arrow-right-long"></i></a>
                  </div>
               </div>
            </div>
         </div>