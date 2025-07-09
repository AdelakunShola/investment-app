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
    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="single-investment-plan">
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
                    <span>'Yes'</span>
                </li>
                <li>Profit Withdraw <span>Anytime</span></li>
                <li>Cancel Plan 
                    <span>'Yes'</span>
                </li>
            </ul>
           
         <a href="{{ route('user.plan.invest', ['id' => $plan->id]) }}" class="site-btn grad-btn w-100 centered">
    <i class="anticon anticon-check"></i> Invest Now
</a>

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
@endsection