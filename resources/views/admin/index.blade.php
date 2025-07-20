@extends('admin.admin_dashboard')
@section('admin') 



@php
use App\Models\User;
use App\Models\Transaction;

$totalUsers = User::count();

$totalDeposits = Transaction::where('type', 'deposit')
->where('status', 'approved')
->sum('amount');

$totalWithdrawals = Transaction::where('type', 'withdraw')
->where('status', 'approved')
->sum('amount');

$totalReferrals = \App\Models\Referral::count();


$totalSend = Transaction::where('type', 'send')->sum('amount');

$totalInvestments = Transaction::where('type', 'investment')->sum('amount');

$depositBonus = Transaction::where('type', 'deposit_bonus')->sum('amount');


$pendingWithdraws = Transaction::where('type', 'withdraw')->where('status', 'pending')->count();
$pendingKyc = User::where('kyc_verified', false)->count();
$pendingDeposits = Transaction::where('type', 'deposit')->where('status', 'pending')->count();


@endphp









<div class="main-content">
   <div class="page-title">
      <div class="container-fluid">
         <div class="row">
            <div class="col">
               <div class="title-content">
                  <h2 class="title">Sharealux Dashboard</h2>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="container-fluid">
      <div class="row">
         <div class="col-xl-12">
            <div class="admin-latest-announcements">
               <div class="content">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="zap" icon-name="zap" class="lucide lucide-zap">
                     <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                  </svg>
                  Explore what's important to review first
               </div>
               <div class="content">
                  <a href="{{ route('admin.withdrawal.pending') }}" class="site-btn-xs red-btn">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="loader" icon-name="loader" class="lucide lucide-loader spining-icon">
                        <line x1="12" x2="12" y1="2" y2="6"></line>
                        <line x1="12" x2="12" y1="18" y2="22"></line>
                        <line x1="4.93" x2="7.76" y1="4.93" y2="7.76"></line>
                        <line x1="16.24" x2="19.07" y1="16.24" y2="19.07"></line>
                        <line x1="2" x2="6" y1="12" y2="12"></line>
                        <line x1="18" x2="22" y1="12" y2="12"></line>
                        <line x1="4.93" x2="7.76" y1="19.07" y2="16.24"></line>
                        <line x1="16.24" x2="19.07" y1="7.76" y2="4.93"></line>
                     </svg>
                     Withdraw Requests
                     ({{ $pendingWithdraws }})
                  </a>
                  <a href="{{ route('admin.customer.all') }}" class="site-btn-xs green-btn">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="loader" icon-name="loader" class="lucide lucide-loader spining-icon">
                        <line x1="12" x2="12" y1="2" y2="6"></line>
                        <line x1="12" x2="12" y1="18" y2="22"></line>
                        <line x1="4.93" x2="7.76" y1="4.93" y2="7.76"></line>
                        <line x1="16.24" x2="19.07" y1="16.24" y2="19.07"></line>
                        <line x1="2" x2="6" y1="12" y2="12"></line>
                        <line x1="18" x2="22" y1="12" y2="12"></line>
                        <line x1="4.93" x2="7.76" y1="19.07" y2="16.24"></line>
                        <line x1="16.24" x2="19.07" y1="7.76" y2="4.93"></line>
                     </svg>
                     KYC Requests
                     ({{ $pendingKyc }})
                  </a>
                  <a href="{{ route('admin.deposits.pending') }}" class="site-btn-xs primary-btn">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="loader" icon-name="loader" class="lucide lucide-loader spining-icon">
                        <line x1="12" x2="12" y1="2" y2="6"></line>
                        <line x1="12" x2="12" y1="18" y2="22"></line>
                        <line x1="4.93" x2="7.76" y1="4.93" y2="7.76"></line>
                        <line x1="16.24" x2="19.07" y1="16.24" y2="19.07"></line>
                        <line x1="2" x2="6" y1="12" y2="12"></line>
                        <line x1="18" x2="22" y1="12" y2="12"></line>
                        <line x1="4.93" x2="7.76" y1="19.07" y2="16.24"></line>
                        <line x1="16.24" x2="19.07" y1="7.76" y2="4.93"></line>
                     </svg>
                     Deposit Requests
                     ({{ $pendingDeposits }})
                  </a>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="data-card">
               <div class="icon">
                  <i class="fas fa-users fa-2x"></i>
               </div>
               <div class="content">
                  <h4 class="count">{{ $totalUsers }}</h4>
                  <p>Registered User</p>
               </div>
               <a class="link" href="{{ route('admin.customer.all') }}"><i class="fas fa-external-link-alt"></i></a>
            </div>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="data-card">
               <div class="icon">
                  <i class="fas fa-wallet fa-2x"></i>
               </div>
               <div class="content">
                  <h4>$<span class="count">{{ number_format($totalDeposits, 2) }}</span></h4>
                  <p>Total Deposits</p>
               </div>
               <a class="link" href="{{ route('admin.deposits.all') }}"><i class="fas fa-external-link-alt"></i></a>
            </div>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="data-card">
               <div class="icon">
                  <i class="fas fa-university fa-2x"></i>
               </div>
               <div class="content">
                  <h4>$<span class="count">{{ number_format($totalWithdrawals, 2) }}</span></h4>
                  <p>Total Withdraw</p>
               </div>
               <a class="link" href="{{ route('admin.withdrawal.all') }}"><i class="fas fa-external-link-alt"></i></a>
            </div>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="data-card">
               <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="link" icon-name="link" class="lucide lucide-link">
                     <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                     <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                  </svg>
               </div>
               <div class="content">
                  <h4 class="count">  {{ number_format($totalReferrals, 2) }}
</h4>
                  <p>Total Referral</p>
               </div>
               <a class="link" href="https://hyiprio.tdevs.co/admin/referral/index">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="external-link" icon-name="external-link" class="lucide lucide-external-link">
                     <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                     <polyline points="15 3 21 3 21 9"></polyline>
                     <line x1="10" x2="21" y1="14" y2="3"></line>
                  </svg>
               </a>
            </div>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="data-card">
               <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="send" icon-name="send" class="lucide lucide-send">
                     <line x1="22" x2="11" y1="2" y2="13"></line>
                     <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                  </svg>
               </div>
               <div class="content">
                  <h4>$<span class="count">6513.77</span></h4>
                  <p>Total Send</p>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="data-card">
               <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="droplet" icon-name="droplet" class="lucide lucide-droplet">
                     <path d="M12 22a7 7 0 0 0 7-7c0-2-1-3.9-3-5.5s-3.5-4-4-6.5c-.5 2.5-2 4.9-4 6.5C6 11.1 5 13 5 15a7 7 0 0 0 7 7z"></path>
                  </svg>
               </div>
               <div class="content">
                  <h4>$<span class="count">{{ number_format($totalInvestments, 2) }}</span></h4>
                  <p>Total Investment</p>
               </div>
               <a class="link" href="https://hyiprio.tdevs.co/admin/investments">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="external-link" icon-name="external-link" class="lucide lucide-external-link">
                     <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                     <polyline points="15 3 21 3 21 9"></polyline>
                     <line x1="10" x2="21" y1="14" y2="3"></line>
                  </svg>
               </a>
            </div>
         </div>
        
       
         
        
      </div>
      <div class="row">
         <div class="col-xl-12">
            <div class="site-card">
               <div class="site-card-header">
                  <h3 class="title">Latest Registered User</h3>
               </div>
               <div class="site-card-body table-responsive">
                  <div class="site-datatable">
                     <table class="data-table mb-0">
                        <thead>
                           <tr>
                              <th>Avatar</th>
                              <th>User</th>
                              <th>Email</th>
                              <th>Balance</th>
                              <th>Profit</th>
                              <th>KYC</th>
                              <th>Status</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>
                                 <span class="avatar-text">DL</span>
                              </td>
                              <td><a href="https://hyiprio.tdevs.co/admin/user/11878/edit" class="link">Dan_ukbrudda</a></td>
                              <td>
                                 <strong>lo***********@gm******m</strong>
                              </td>
                              <td><strong>$0</strong></td>
                              <td><strong>$3</strong></td>
                              <td>
                                 <div class="site-badge pending">Unverified</div>
                              </td>
                              <td>
                                 <div class="site-badge success">Active</div>
                              </td>
                              <td>
                                 <a href="https://hyiprio.tdevs.co/admin/user/11878/edit" class="round-icon-btn primary-btn" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit User">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="edit-3" icon-name="edit-3" class="lucide lucide-edit-3">
                                       <path d="M12 20h9"></path>
                                       <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                    </svg>
                                 </a>
                                 <span type="button" data-id="11878" data-name="Daniel Long" class="send-mail">
                                    <button class="round-icon-btn red-btn" data-bs-toggle="tooltip" title="" data-bs-original-title="Send Email">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="mail" icon-name="mail" class="lucide lucide-mail">
                                          <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                          <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                       </svg>
                                    </button>
                                 </span>
                              </td>
                           </tr>
                           <tr class="centered">
                              <td colspan="7">
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-xl-12">
            <div class="site-card">
               <div class="site-card-header">
                  <h3 class="title">Latest Investment</h3>
               </div>
               <div class="site-card-body table-responsive">
                  <div class="site-datatable">
                     <table class="data-table mb-0">
                        <thead>
                           <tr>
                              <th>Avatar</th>
                              <th>User</th>
                              <th>Schema</th>
                              <th>ROI</th>
                              <th>Profit</th>
                              <th>Capital Back</th>
                              <th>Timeline</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>
                                 <span class="avatar-text">ML</span>
                              </td>
                              <td><a href="https://hyiprio.tdevs.co/admin/user/11781/edit" class="link">luisa1839</a></td>
                              <td>
                                 <strong>
                                    10000 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="arrow-big-right" icon-name="arrow-big-right" class="lucide lucide-arrow-big-right">
                                       <path d="M6 9h6V5l7 7-7 7v-4H6V9z"></path>
                                    </svg>
                                    $10000
                                 </strong>
                              </td>
                              <td>
                                 <strong>$0</strong>
                              </td>
                              <td>
                                 <strong>0 x 0 = 0 USD</strong>
                              </td>
                              <td>
                                 <div class="site-badge pending">No</div>
                              </td>
                              <td>
                                 <div class="site-badge pending">Pending</div>
                              </td>
                           </tr>
                           <tr class="centered">
                              <td colspan="7">
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection