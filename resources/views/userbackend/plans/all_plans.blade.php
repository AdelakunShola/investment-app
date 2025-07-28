@extends('user.user_dashboard')
@section('user')

<div class="main-content">
   <div class="section-gap">
      <div class="container-fluid">
         <div class="row desktop-screen-show">
            <div class="col">
            </div>
         </div>
         <div class="row mobile-screen-show">
            <div class="col">
            </div>
         </div>
         <!--Page Content-->
         <div class="row">
            <div class="col-xl-12">
               <div class="site-card">
                  <div class="site-card-header">
                     <h3 class="title">All The Plans</h3>
                  </div>
                  <div class="site-card-body">
                     <div class="row">
                        <div class="row">
                           @foreach($plans as $plan)
                           @php
                              $isLocked = isset($highestPlanId) && $plan->id < $highestPlanId;
                           @endphp
                           <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="single-investment-plan {{ $isLocked ? 'locked-plan' : '' }}">
                                 <img class="investment-plan-icon" src="{{ asset('storage/' . $plan->icon) }}" alt="">
                                 <div class="feature-plan">{{ $plan->badge }}</div>
                                 <h3>{{ $plan->name }}</h3>
                                 <p>Weekly Interest {{ $plan->weekly_interest }}% </p>
                                 <ul>
                                    <li>Investment 
                                       <span class="special">
                                          ${{ number_format($plan->min_amount, 2) }} - ${{ number_format($plan->max_amount, 2) }}
                                       </span>
                                    </li>
                                    <li>Capital Back
                                       <span>Yes</span>
                                    </li>
                                    <li>Profit Withdraw 
                                       <span>Anytime</span>
                                    </li>
                                    <li>Cancel Plan 
                                       <span>Yes</span>
                                    </li>
                                 </ul>

                                 @if($isLocked)
                                    <a class="site-btn grad-btn w-100 centered disabled" style="pointer-events: none; opacity: 0.6; cursor: not-allowed;">
                                       <i class="fas fa-lock"></i> Locked Plan
                                    </a>
                                 @else
                                    <a href="{{ route('user.plan.invest', ['id' => $plan->id]) }}" class="site-btn grad-btn w-100 centered">
                                       <i class="anticon anticon-check"></i> Invest Now
                                    </a>
                                 @endif

                              </div>
                           </div>
                           @endforeach
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--Page Content-->
      </div>
   </div>
</div>

<style>
.locked-plan {
   opacity: 0.7;
   position: relative;
}
.locked-plan::after {
   content: "🔒";
   position: absolute;
   top: 10px;
   right: 15px;
   font-size: 20px;
   color: #d9534f;
}
</style>

@endsection
