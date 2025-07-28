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
                <h3 class="title">Latest Registered Users</h3>
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
                              
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($latestUsers as $user)
                                <tr>
                                    <td>
                                        <span class="avatar-text">{{ strtoupper(substr($user->username, 0, 2)) }}</span>
                                    </td>
                                    <td><a href="" class="link">{{ $user->username }}</a></td>
                                    <td><strong>{{ Str::mask($user->email, '*', 3, 6) }}</strong></td>
                                    <td><strong>${{ number_format($user->balance, 2) }}</strong></td>
                                    <td><strong>${{ number_format($user->profit, 2) }}</strong></td>
                                    <td>
                                        <div class="site-badge {{ $user->kyc_status == 'verified' ? 'success' : 'pending' }}">
                                            {{ ucfirst($user->kyc_status ?? 'Unverified') }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="site-badge {{ $user->status == 'active' ? 'success' : 'danger' }}">
                                            {{ ucfirst($user->status) }}
                                        </div>
                                    </td>
                                   
                                </tr>
                            @empty
                                <tr><td colspan="8" class="text-center text-muted">No recent users found</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Latest Investments 
<div class="row mt-4">
    <div class="col-xl-12">
        <div class="site-card">
            <div class="site-card-header">
                <h3 class="title">Latest Investments</h3>
            </div>
            <div class="site-card-body table-responsive">
                <div class="site-datatable">
                    <table class="data-table mb-0">
                        <thead>
                            <tr>
                                <th>Avatar</th>
                                <th>Username</th>
                                <th>Schema</th>
                                <th>ROI</th>
                                <th>Profit</th>
                                <th>Capital Back</th>
                                <th>Timeline</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($latestInvestments as $investment)
                                <tr>
                                   <td>
    <span class="avatar-text">
        {{ strtoupper(substr(optional($investment->user)->username ?? 'NA', 0, 2)) }}
    </span>
</td>

                                    <td>{{ optional($investment->user)->last_name ?? 'Unknown User' }}</td>

                                    <td>
                                        <strong>
                                            {{ $investment->amount }} 
                                            <i class="lucide lucide-arrow-big-right"></i> 
                                            ${{ number_format($investment->amount, 2) }}
                                        </strong>
                                    </td>
                                    <td><strong>${{ number_format($investment->roi, 2) }}</strong></td>
                                    <td><strong>{{ $investment->roi }} x {{ $investment->amount }} = ${{ number_format($investment->roi * $investment->amount, 2) }}</strong></td>
                                    <td>
                                        <div class="site-badge {{ $investment->capital_back ? 'success' : 'pending' }}">
                                            {{ $investment->capital_back ? 'Yes' : 'No' }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="site-badge {{ $investment->status == 'completed' ? 'success' : 'pending' }}">
                                            {{ ucfirst($investment->status) }}
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="7" class="text-center text-muted">No recent investments found</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>--}}

   </div>
</div>
@endsection