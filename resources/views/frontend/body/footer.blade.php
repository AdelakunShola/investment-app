 @php
    use App\Models\About;
    $about = About::first();
@endphp

 
 <div data-elementor-type="wp-post" data-elementor-id="3135" class="elementor elementor-3135">
        <div class=""
     data-id="f7e0f02" 
     data-element_type="container" 
     data-settings='{"background_background":"classic"}'
     style="display: flex; justify-content: center; align-items: center; text-align: center;">

            <div class="e-con-inner">
              
              <div class="elementor-element elementor-element-20148aa e-con-full e-flex e-con e-child"
     data-id="20148aa" data-element_type="container"
     style="display: flex; flex-direction: column; align-items: center; justify-content: center; width: 100%;">

                  <div class="elementor-element elementor-element-f0b742a elementor-widget elementor-widget-tp-footer-subscribe" data-id="f0b742a" data-element_type="widget" data-widget_type="tp-footer-subscribe.default">
                     <div class="elementor-widget-container">
                        <div class="tp-footer-2-widget-form">
                           <div class="tp-footer-subscribe tp-el-box-input">
                              <div class="wpcf7 no-js" id="wpcf7-f3166-o3" lang="en-US" dir="ltr" data-wpcf7-id="3166">
                                 <div class="screen-reader-response">
                                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                                    <ul></ul>
                                 </div>
                                 <form action=""  class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
                                    
                                    <div class="tp-footer-style-2">
                                       <div class="tp-footer-left text-md-center">
                                          <div class="tp-footer-logo mb-25">
                                             <a href="{{ route('home') }}"><img src="{{ $about && $about->image ? asset($about->image) : '' }}" style="height: 140px; width: 140px;" alt="logo"></a>
                                          </div>
                                          <div class="tp-footer-content pb-10">
                                             <p><i>ShareAlux</i> {{ $about->short_description }}
                                             </p>
                                          </div>
                                          <div class="tp-footer-2-form-box">
                                             <div class="tp-footer-2-input-box mb-20 p-relative">
                                                <span class="wpcf7-form-control-wrap" data-name="your-email"><input size="40" maxlength="400" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email" autocomplete="email" aria-required="true" aria-invalid="false" placeholder="info@we*" value="" type="email" name="your-email" /></span>
                                                <div class="tp-footer-2-input-icon">
                                                   <span>
                                                      <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                         <path d="M14 13.4375C14 14.1758 13.3984 14.75 12.6875 14.75H1.3125C0.574219 14.75 0 14.1758 0 13.4375V6.24609C0 5.83594 0.191406 5.45312 0.492188 5.20703C1.17578 4.6875 1.72266 4.25 4.97656 1.89844C5.44141 1.57031 6.34375 0.75 7 0.777344C7.62891 0.75 8.53125 1.57031 8.99609 1.89844C12.25 4.25 12.7969 4.6875 13.4805 5.20703C13.7812 5.45312 14 5.83594 14 6.24609V13.4375ZM12.1953 8.07812C12.1133 7.96875 11.9766 7.94141 11.8672 8.02344C11.2656 8.48828 10.3633 9.14453 8.99609 10.1289C8.53125 10.457 7.62891 11.2773 7 11.25C6.34375 11.2773 5.44141 10.457 4.97656 10.1289C3.60938 9.14453 2.70703 8.48828 2.10547 8.02344C1.99609 7.94141 1.85938 7.96875 1.77734 8.07812L1.53125 8.43359C1.50391 8.46094 1.50391 8.51562 1.50391 8.57031C1.50391 8.625 1.53125 8.70703 1.58594 8.73438C2.21484 9.19922 3.08984 9.85547 4.45703 10.8398C5.03125 11.25 6.01562 12.1523 7 12.125C7.95703 12.1523 8.94141 11.25 9.51562 10.8398C10.8828 9.85547 11.7578 9.19922 12.3867 8.73438C12.4414 8.70703 12.4688 8.625 12.4688 8.57031C12.4688 8.51562 12.4688 8.46094 12.4414 8.43359L12.1953 8.07812Z" fill="currentcolor"></path>
                                                      </svg>
                                                   </span>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="tp-footer-button mb-50">
                                             <button type="submit" class="tp-btn-theme">
                                             <span>
                                             Subscribe Now
                                             <i class="fa-sharp fa-regular fa-arrow-right-long"></i>
                                             </span>
                                             </button>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="wpcf7-response-output" aria-hidden="true"></div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="elementor-element elementor-element-6019bc8 elementor-widget elementor-widget-tp-footer-social" data-id="6019bc8" data-element_type="widget" data-widget_type="tp-footer-social.default">
                     <div class="elementor-widget-container">
                        <div class="tp-footer-style-2">
                           <div class="tp-footer-social ele-content-align">
                              <span class="tp-el-title">Follow Us</span>
                              <a target="_blank" rel="noopener"  href="{{ $about->facebook }}" class="tp-el-social-link elementor-repeater-item-e542457"><i class="fab fa-facebook" aria-hidden="true"></i></a><a target="_blank" rel="noopener"  href="{{ $about->linkedin }}" class="tp-el-social-link elementor-repeater-item-4596138"><i class="fab fa-linkedin" aria-hidden="true"></i></a><a target="_blank" rel="noopener"  href="{{ $about->twitter }}" class="tp-el-social-link elementor-repeater-item-790aabb"><i class="fab fa-twitter" aria-hidden="true"></i></a><a target="_blank" rel="noopener"  href="{{ $about->instagram }}" class="tp-el-social-link elementor-repeater-item-e798d3e"><i class="fab fa-instagram" aria-hidden="true"></i></a>            
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="elementor-element elementor-element-1e63e49 e-flex e-con-boxed e-con e-parent" data-id="1e63e49" data-element_type="container">
            <div class="e-con-inner">
               <div class="elementor-element elementor-element-44b4825 elementor-widget elementor-widget-tp-copyright" data-id="44b4825" data-element_type="widget" data-widget_type="tp-copyright.default">
                  <div class="elementor-widget-container"></br></br></br>
                     <div class="tp-copyright-2-text text-center wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                        <p>Copyright &amp; Design <a href="#" target="_blank" rel="nofollow" class="tp-el-btn" style="">Sharealux</a>
                           - 2025
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>