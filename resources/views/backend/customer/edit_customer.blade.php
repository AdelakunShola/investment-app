@extends('admin.admin_dashboard')
@section('admin')


@php
    

    $totalDeposit = \App\Models\Transaction::where('user_id', $user->id)
        ->where('type', 'deposit')
        ->where('status', 'approved')
        ->sum('amount');

    $totalProfit = \App\Models\Transaction::where('user_id', $user->id)
        ->where('type', 'profit')
        ->sum('amount');

    $totalWithdraw = \App\Models\Transaction::where('user_id', $user->id)
        ->where('type', 'withdraw')
        ->where('status', 'approved')
        ->sum('amount');

    $totalInvestment = \App\Models\Transaction::where('user_id', $user->id)
        ->where('type', 'investment')
        ->where('status', 'completed')
        ->sum('amount');

    $referralBonus = \App\Models\Referral::where('referred_by', $user->id)
        ->sum('bonus');

    $walletBalance = $totalDeposit + $totalProfit + $referralBonus - $totalWithdraw - $totalInvestment;
@endphp
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>



<div class="main-content">
        <div class="page-title">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="title-content">
                            <h2 class="title">Details of {{ $user->first_name }} {{ $user->last_name }}</h2>
                            <a href="https://hyiprio.tdevs.co/admin/user/11937/edit?tab=tickets" class="title-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="corner-down-left" icon-name="corner-down-left" class="lucide lucide-corner-down-left"><polyline points="9 10 4 15 9 20"></polyline><path d="M20 4v7a4 4 0 0 1-4 4H4"></path></svg>Back
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xxl-3 col-xl-6 col-lg-8 col-md-6 col-sm-12">
                    <div class="profile-card">
                        <div class="top">
                            <div class="avatar">
                                                                    <span class="avatar-text">KK</span>
                                                            </div>
                            <div class="title-des">
                                <h4>{{ $user->first_name }} {{ $user->last_name }}</h4>
                                <p> {{ $user->country }}</p>
                            </div>
                            <div>
                                
                            </div>
                  <div class="btns">
   <a href="javascript:void(0);"
   class="site-btn-round primary-btn openBalanceModal"
   data-user-id="{{ $user->id }}"
   data-bs-toggle="modal"
   data-bs-target="#addSubBal"
   title="Fund Add or Subtract">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
         viewBox="0 0 24 24" fill="none" stroke="currentColor"
         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
         class="lucide lucide-wallet">
        <path d="M21 12V7H5a2 2 0 0 1 0-4h14v4"></path>
        <path d="M3 5v14a2 2 0 0 0 2 2h16v-5"></path>
        <path d="M18 12a2 2 0 0 0 0 4h4v-4Z"></path>
    </svg>
</a>

</div>





                        </div>
                        <div class="site-card">
                            <div class="site-card-body">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="admin-user-balance-card">
                                            <div class="wallet-name">
                                                <div class="name">Main Wallet</div>
                                                <div class="chip-icon">
                                                    <img class="chip" src="https://hyiprio.tdevs.co/assets/backend/materials/chip.png" alt="">
                                                </div>
                                            </div>
                                            <div class="wallet-info">
                                                <div class="wallet-id">USD</div>
                                                <div class="balance">${{ number_format($walletBalance, 2) }}</div>
                                            </div>
                                        </div>
                                        <div class="admin-user-balance-card">
                                            <div class="wallet-name">
                                                <div class="name">Profit Wallet</div>
                                                <div class="chip-icon">
                                                    <img class="chip" src="https://hyiprio.tdevs.co/assets/backend/materials/chip.png" alt="">
                                                </div>
                                            </div>
                                            <div class="wallet-info">
                                                <div class="wallet-id">USD</div>
                                                <div class="balance">${{ number_format($totalProfit, 2) }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- User Status Update -->
                                            <div class="site-card mb-0">
    <div class="site-card-header">
        <h3 class="title-small">Account Informations</h3>
    </div>
    <div class="site-card-body">
        <div class="row">
           <form action="{{ route('admin.user.status.update', $user->id) }}" method="post">
    @csrf
                <div class="col-xl-12">
                    <div class="profile-card-single">
                        <h5 class="heading">Account Status</h5>
                        <div class="switch-field">
                            <input type="radio" id="accSta1" name="status" value="1" {{ $user->is_active ? 'checked' : '' }}>
                            <label for="accSta1">Active</label>
                            <input type="radio" id="accSta2" name="status" value="0" {{ !$user->is_active ? 'checked' : '' }}>
                            <label for="accSta2">Disabled</label>
                        </div>
                    </div>
                </div>
              
                <div class="col-xl-12">
                    <div class="profile-card-single">
                        <h5 class="heading">KYC Verification</h5>
                        <div class="switch-field">
                            <input type="radio" id="kyc1" name="kyc" value="1" {{ $user->kyc_verified ? 'checked' : '' }}>
                            <label for="kyc1">Verified</label>
                            <input type="radio" id="kyc2" name="kyc" value="0" {{ !$user->kyc_verified ? 'checked' : '' }}>
                            <label for="kyc2">Unverified</label>
                        </div>
                    </div>
                </div>
               
                <div class="col-xl-12">
                    <div class="profile-card-single">
                        <h5 class="heading">Deposit Status</h5>
                        <div class="switch-field">
                            <input type="radio" id="depo1" name="deposit_status" value="1" {{ $user->deposit_status ? 'checked' : '' }}>
                            <label for="depo1">Active</label>
                            <input type="radio" id="depo2" name="deposit_status" value="0" {{ !$user->deposit_status ? 'checked' : '' }}>
                            <label for="depo2">Disabled</label>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="profile-card-single">
                        <h5 class="heading">Withdraw Status</h5>
                        <div class="switch-field">
                           <input type="radio" id="wid1" name="withdraw_status" value="1" {{ $user->withdraw_status ? 'checked' : '' }}>
                            <label for="wid1">Active</label>
                            <input type="radio" id="wid2" name="withdraw_status" value="0" {{ !$user->withdraw_status ? 'checked' : '' }}>
                            <label for="wid2">Disabled</label>
                        </div>
                    </div>
                </div>
              
                <div class="col-12">
                    <button type="submit" class="site-btn-sm primary-btn w-100 centered">
                        Save Changes
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
                                        <!-- User Status Update End-->
                    </div>
                </div>

                <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">
  <div class="site-tab-bars">
    <ul class="nav nav-pills" id="pills-tab" role="tablist">
      <!-- Information Tab -->
      <li class="nav-item" role="presentation">
        <a href="#pills-informations" class="nav-link active" id="pills-informations-tab" data-bs-toggle="pill" role="tab" aria-controls="pills-informations" aria-selected="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="user" icon-name="user" class="lucide lucide-user"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>Informations
                                    </a>
                                </li>
                            
                        <!-- Investment Tab -->
                                                            <li class="nav-item" role="presentation">
    <a href="#pills-investments" class="nav-link" id="pills-investments-tab" data-bs-toggle="pill" type="button" role="tab" aria-controls="pills-investments" aria-selected="false">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="anchor" icon-name="anchor" class="lucide lucide-anchor"><circle cx="12" cy="5" r="3"></circle><line x1="12" x2="12" y1="22" y2="8"></line><path d="M5 12H2a10 10 0 0 0 20 0h-3"></path></svg>Investments
                                    </a>
                                </li>

                        <!-- Transaction Tab -->
                                                            <li class="nav-item" role="presentation">
                             <a href="#pills-transactions" class="nav-link" id="pills-transactions-tab" data-bs-toggle="pill" role="tab" aria-controls="pills-transactions" aria-selected="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="cast" icon-name="cast" class="lucide lucide-cast"><path d="M2 8V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-6"></path><path d="M2 12a9 9 0 0 1 8 8"></path><path d="M2 16a5 5 0 0 1 4 4"></path><line x1="2" x2="2.01" y1="20" y2="20"></line></svg>Transactions
                                    </a>
                                </li>
                            
                        <!-- Referral Tree Tab -->
                                                            <li class="nav-item" role="presentation">
                                    <a href="#pills-referral_tree" class="nav-link" id="pills-referral_tree-tab" data-bs-toggle="pill" role="tab" aria-controls="pills-referral_tree" aria-selected="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="network" icon-name="network" class="lucide lucide-network"><rect x="16" y="16" width="6" height="6" rx="1"></rect><rect x="2" y="16" width="6" height="6" rx="1"></rect><rect x="9" y="2" width="6" height="6" rx="1"></rect><path d="M5 16v-3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3"></path><path d="M12 12V8"></path></svg>Referral Tree
                                    </a>
                                </li>
                            
                     
                                                       
                                                    </ul>
                    </div>

                    <div class="site-tab-content">
                        <div class="tab-content" id="pills-tabContent">
                            <!-- Informations Tab Content -->
                                                            <div class="tab-pane fade show active" id="pills-informations" role="tabpanel">
                                    <div class="tab-pane  show active " id="pills-informations" role="tabpanel" aria-labelledby="pills-informations-tab">
            <div class="row">
            <div class="col-xl-12">
                <div class="site-card">
                    <div class="site-card-header">
                        <h3 class="title">Basic Info</h3>
                    </div>
                    <div class="site-card-body">
                      <form action="{{ route('admin.user.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')

                           <div class="row">
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="site-input-groups">
                                        <label for="" class="box-input-label">First Name:</label>
                                        <input type="text" class="box-input" value="{{ $user->first_name }}" name="first_name" >
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="site-input-groups">
                                        <label for="" class="box-input-label">Last Name:</label>
                                       <input type="text" class="box-input" value="{{ $user->last_name }}" name="last_name" >
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="site-input-groups">
                                        <label for="" class="box-input-label">Country:</label>
                                       <input type="text" class="box-input" value="{{ $user->country }}" name="country">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="site-input-groups">
                                        <label for="" class="box-input-label">Phone:</label>
                                       <input type="text" class="box-input" value="{{ $user->phone }}" name="phone">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="site-input-groups">
                                        <label for="" class="box-input-label">Username:</label>
                                        <input type="text" class="box-input" name="username" value="{{ $user->username }}">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="site-input-groups">
                                        <label for="" class="box-input-label">Email:</label>
                                       <input type="email" class="box-input" value="{{ $user->email }}" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="site-input-groups">
                                        <label for="" class="box-input-label">Gender:</label>
                                       <input type="text" class="box-input" name="gender" value="{{ $user->gender }}">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="site-input-groups">
                                        <label for="" class="box-input-label">Date of Birth:</label>
                                    <input type="text" class="box-input" name="date_of_birth" value="{{ $user->date_of_birth }}">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="site-input-groups">
                                        <label for="" class="box-input-label">City:</label>
                                         <input type="text" name="city" class="box-input" value="{{ $user->city }}">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="site-input-groups">
                                        <label for="" class="box-input-label">Zip Code:</label>
                                        <input type="text" class="box-input" name="zip_code" value="{{ $user->zip_code }}">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="site-input-groups">
                                        <label for="" class="box-input-label">Address:</label>
                                       <input type="text" class="box-input" name="address" value="{{ $user->address }}">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="site-input-groups">
                                        <label for="" class="box-input-label">Joining Date:</label>
                                        <input type="text" class="box-input" value="Sat, Jul 5, 2025 12:26 AM"  disabled="">
                                    </div>
                                </div>




                                
                                
                                <div class="col-xl-12">
                                    <button type="submit" class="site-btn-sm primary-btn w-100 centered">Save Changes</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
                <div class="row">
            <div class="col-xl-12">
                <div class="site-card">
                    <div class="site-card-header">
                        <h3 class="title">Change Password</h3>
                    </div>
                    <div class="site-card-body">
                        <form action="{{ route('admin.user.password.update', $user->id) }}" method="POST">
                    @csrf                         <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="site-input-groups">
                                        <label for="" class="box-input-label">New Password:</label>
                                        <input type="password" name="new_password" class="box-input" required="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="site-input-groups">
                                        <label for="" class="box-input-label">Confirm Password:</label>
                                        <input type="password" name="new_password_confirmation" class="box-input" required="">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <button type="submit" class="site-btn-sm primary-btn w-100 centered">Change Password</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    
</div>
                                </div>
                            
                        <!-- Investments Tab -->
               <div class="tab-pane fade" id="pills-investments" role="tabpanel" aria-labelledby="pills-investments-tab">
  <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
      <div class="site-card">
        <div class="site-card-header">
          <h4 class="title">Investments</h4>
        </div>
        <div class="site-card-body table-responsive">
          <div class="site-datatable">
            <table class="display data-table">
              <thead>
                <tr>
                  <th>Icon</th>
                  <th>Schema</th>
                  <th>Weekly ROI</th>
                  <th>Profit</th>
                  <th>Amount Invested</th>
                  <th>Date</th>
                </tr>
              </thead>
          <tbody>
    @forelse ($investmentTransactions as $transaction)
        <tr>
            <td>
                @php
                    $icon = optional($transaction->user->investmentPlan)->icon;
                @endphp
                @if($icon)
                    <img src="{{ asset('storage/' . $icon) }}" alt="Icon" width="30">
                @else
                    <span class="site-badge warning">No Icon</span>
                @endif
            </td>

            <td>{{ optional($transaction->user->investmentPlan)->name ?? 'N/A' }}</td>

            <td>
                {{ optional($transaction->user->investmentPlan)->weekly_interest ?? 'N/A' }}%
            </td>


            <td>
                <span class="site-badge primary-bg">
                    {{ optional($transaction->user->investmentPlan)->amount ?? 'N/A' }}
                </span>
            </td>

            <td>
                {{ number_format($transaction->amount, 2) }} USD
            </td>

            <td>
                {{ \Carbon\Carbon::parse($transaction->created_at)->format('M d, Y') }}
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="6" class="text-center">No investment transactions found.</td>
        </tr>
    @endforelse
</tbody>



            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

                            
          
                             
                            
                        <!-- Transactions Tab -->
                                                            
                                    <div class="tab-pane fade" id="pills-transactions" role="tabpanel" aria-labelledby="pills-transactions-tab">
    <div class="site-card">
        <div class="site-card-header">
            <h3 class="title">Transactions</h3>
        </div>
        <div class="site-card-body table-responsive">
            <form action="https://hyiprio.tdevs.co/admin/user/11937/edit" method="get">
                <div class="site-datatable">
                    <table id="dataTable" class="display data-table">
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>User</th>
                            <th>Transaction ID</th>
                            <th>Type</th>
                            <th>Amount</th>
                            <th>Gateway</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                       <tbody>
@forelse ($transactions as $transaction)
    <tr>
        <td>{{ $transaction->created_at->format('M d Y h:i') }}</td>
        <td><a class="link" href="{{ route('admin.user.edit', $user->id) }}">{{ $user->username }}</a></td>
        <td>{{ 'TRX' . strtoupper(substr(md5($transaction->id), 0, 12)) }}</td>
        <td><div class="site-badge primary-bg">{{ $transaction->type }}</div></td>
        <td>
            <strong class="{{ $transaction->type === 'debit' ? 'danger-color' : 'green-color' }}">
                {{ $transaction->type === 'debit' ? '-' : '+' }}{{ $transaction->amount }} USD
            </strong>
        </td>
        <td>{{ $transaction->method ?? 'System' }}</td>
        <td>
            <div class="site-badge 
                {{ $transaction->status === 'Success' ? 'success' : ($transaction->status === 'Pending' ? 'warning' : 'danger') }}">
                {{ $transaction->status }}
            </div>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="7" class="text-center">No transactions found.</td>
    </tr>
@endforelse
</tbody>

                    </table>
                                       

                </div>
            </form>
        </div>
    </div>
</div>                               
                            
                        <!-- Referral Tree Tab -->
                                                           
                              <div class="tab-pane fade" id="pills-referral_tree" role="tabpanel" aria-labelledby="pills-referral_tree-tab">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="site-card">
                <div class="site-card-header">
                    <h4 class="title">Referral Tree</h4>
                </div>
                <div class="site-card-body table-responsive">

                    
                         @if($referrals->isEmpty())
    <p>No referral users found.</p>
@else
    <table class="table">
        <thead>
            <tr>
                <th>Referred User</th>
                <th>Email</th>
                <th>Join Date</th>
                <th>Bonus</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($referrals as $ref)
                <tr>
                    <td>{{ $ref->referredUser->username }}</td>
                    <td>{{ $ref->referredUser->email }}</td>
                    <td>{{ $ref->referredUser->created_at->format('M d, Y') }}</td>
                    <td>{{ $ref->bonus ?? 0 }} USD</td>
                    <td><span class="site-badge primary-bg">{{ ucfirst($ref->status) }}</span></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif

                    
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


<!-- Balance Add or Subtract Modal -->
<div class="modal fade" id="addSubBal" tabindex="-1" aria-labelledby="addSubBalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content site-table-modal">
            <div class="modal-header">
                <h5 class="modal-title" id="addSubBalLabel">Balance Add or Subtract</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form id="balanceUpdateForm" action="" method="POST">


                    @csrf

                    <div class="row">
                        <!-- Radio Buttons -->
                        <div class="col-xl-12 mb-3">
                            <div class="switch-field">
                                <input type="radio" id="addMon" name="type" value="add" checked>
                                <label for="addMon">Add</label>

                                <input type="radio" id="addMon2" name="type" value="subtract">
                                <label for="addMon2">Subtract</label>
                            </div>
                        </div>

                        <!-- Wallet Select -->
                        <div class="col-xl-12 mb-3">
                            <select class="form-select" name="wallet" required>
                                <option value="main">Main Wallet</option>
                                <option value="profit">Profit Wallet</option>
                            </select>
                        </div>

                        <!-- Amount Input -->
                        <div class="col-xl-12 mb-3">
                            <div class="site-input-groups">
                                <div class="input-group joint-input">
                                    <span class="input-group-text">USD</span>
                                    <input type="text" name="amount" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '')" placeholder="Enter amount" required>
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-xl-12">
                            <button type="submit" class="site-btn primary-btn w-100">Apply Now</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modalTriggerButtons = document.querySelectorAll('.openBalanceModal');
        const form = document.getElementById('balanceUpdateForm');

        modalTriggerButtons.forEach(button => {
            button.addEventListener('click', function () {
                const userId = this.getAttribute('data-user-id');
                const actionUrl = `/admin/customer/user/balance-update/${userId}`;
                form.action = actionUrl;
            });
        });
    });
</script>


        @endsection