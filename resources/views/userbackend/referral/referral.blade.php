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
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="site-card">
                  <div class="site-card-header">
                     <h3 class="title">Referral URL                             and Tree
                     </h3>
                        <a href="{{ url()->previous() }}" class="btn btn-sm btn-secondary me-2">
   ← Back
</a>
                  </div>
                  <div class="site-card-body">
                     <div class="referral-link">
                        <div class="referral-link-form">
                           <input type="text" value="{{ url('/user/register?ref=' . Auth::user()->referral_code) }}" id="refLink">
                           <button type="submit" onclick="copyRef()">
                           <i class="anticon anticon-copy"></i>
                           <span id="copy">Copy Url</span>
                           <input id="copied" hidden="" value="Copied">
                           </button>
                        </div>
                        <p class="referral-joined">
                           {{ $referralCount }} {{ Str::plural('person', $referralCount) }} {{ $referralCount == 1 ? 'has' : 'have' }} joined using this URL
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xl-12">
               <div class="site-card">
                  <div class="site-card-header">
                     <h3 class="title">All Referral Logs</h3>
                     <div class="card-header-links">
                        <span class="card-header-link rounded-pill">
                        Referral Profit: {{ number_format($referralProfit, 2) }} USD
                        </span>
                     </div>
                  </div>
                  <div class="site-card-body table-responsive">
                     <div class="site-tab-bars">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                           <li class="nav-item" role="presentation">
                              <a href="" class="nav-link active" id="generalTarget-tab" data-bs-toggle="pill" data-bs-target="#generalTarget" type="button" role="tab" aria-controls="generalTarget" aria-selected="true">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="network" icon-name="network" class="lucide lucide-network">
                                    <rect x="16" y="16" width="6" height="6" rx="1"></rect>
                                    <rect x="2" y="16" width="6" height="6" rx="1"></rect>
                                    <rect x="9" y="2" width="6" height="6" rx="1"></rect>
                                    <path d="M5 16v-3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3"></path>
                                    <path d="M12 12V8"></path>
                                 </svg>
                                 General
                              </a>
                           </li>
                        </ul>
                     </div>
                     <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="generalTarget" role="tabpanel" aria-labelledby="generalTarget-tab">
                           <div class="row">
                              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 desktop-screen-show">
                                 <div class="site-datatable">
                                    <div class="row table-responsive">
                                       <div class="col-xl-12">
                                          <table class="display data-table table table-bordered">
                                             <thead>
                                                <tr>
                                                   <th>Referred User</th>
                                                   <th>Referral Bonus</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                @foreach($referrals as $referral)
                                                <tr>
                                                   <td>{{ $referral->referredUser->first_name ?? 'N/A' }}  {{ $referral->referredUser->last_name ?? 'N/A' }}</td>
                                                   <td>${{ number_format($referral->bonus, 2) }}</td>
                                                </tr>
                                                @endforeach
                                             </tbody>
                                          </table>
                                          <p class="centered">No Data Found</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-12 mobile-screen-show">
                                 <!-- Transactions -->
                                  <div class="site-datatable">
                                    <div class="row table-responsive">
                                       <div class="col-xl-12">
                                          <table class="display data-table table table-bordered">
                                             <thead>
                                                <tr>
                                                   <th>Referred User</th>
                                                   <th>Referral Bonus</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                @foreach($referrals as $referral)
                                                <tr>
                                                   <td>{{ $referral->referredUser->first_name ?? 'N/A' }}  {{ $referral->referredUser->last_name ?? 'N/A' }}</td>
                                                   <td>${{ number_format($referral->bonus, 2) }}</td>
                                                </tr>
                                                @endforeach
                                             </tbody>
                                          </table>
                                       
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
         <!--Page Content-->
      </div>
   </div>
</div>
@endsection