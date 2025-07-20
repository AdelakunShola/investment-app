@extends('admin.admin_dashboard')
@section('admin')
<div class="main-content">
   <div class="page-title">
      <div class="container-fluid">
         <div class="row">
            <div class="col">
               <h2 class="title">All Active Customers</h2>
            </div>
         </div>
      </div>
   </div>
   <div class="container-fluid">
      <div class="row">
         <div class="col-xl-12">
            <div class="site-table table-responsive">
               <form action="" method="get">
                  <div class="table-filter d-flex justify-content-between">
                     <div class="filter d-flex">
                        <div class="search">
                           <input type="text" id="search" name="query" value="" placeholder="Search">
                        </div>
                        <button type="submit" class="apply-btn ms-2">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="search" class="lucide lucide-search">
                              <circle cx="11" cy="11" r="8"></circle>
                              <path d="m21 21-4.3-4.3"></path>
                           </svg>
                           Search
                        </button>
                     </div>
                     <div class="filter d-flex">
                       
                        <select class="form-select form-select-sm me-2" name="kyc_status" aria-label=".form-select-sm example">
                           <option value="" selected="">Filter By KYC</option>
                           <option value="1">Verified</option>
                           <option value="0">Unverified</option>
                        </select>
                        <select class="form-select form-select-sm" name="status" aria-label=".form-select-sm example">
                           <option value="" selected="">Filter By Status</option>
                           <option value="1">Active</option>
                           <option value="0">Disabled</option>
                           <option value="2">Closed</option>
                        </select>
                     </div>
                  </div>
               </form>
               <div class="modal fade" id="sendEmail" tabindex="-1" aria-labelledby="sendEmailModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-md modal-dialog-centered">
                     <div class="modal-content site-table-modal">
                        <div class="modal-body popup-body">
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                           <div class="popup-body-text">
                              <h3 class="title mb-4"> Send Mail to <span id="name"></span></h3>
                              <form action="https://hyiprio.tdevs.co/admin/user/mail-send" method="post" id="send-mail-form"></form>
                              <input type="hidden" name="_token" value="z89LczqwLs19OGuhSznl21Ba6BDATlu5Rjm1SJeD">
                              <input type="hidden" name="id" value="0" id="userId">
                              <div class="site-input-groups">
                                 <label for="" class="box-input-label">Subject:</label>
                                 <input type="text" name="subject" class="box-input mb-0" required="">
                              </div>
                              <div class="site-input-groups">
                                 <label for="" class="box-input-label">Email Details</label>
                                 <textarea name="message" class="form-textarea mb-0"></textarea>
                              </div>
                              <div class="action-btns">
                                 <button type="submit" class="site-btn-sm primary-btn me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="send" icon-name="send" class="lucide lucide-send">
                                       <line x1="22" x2="11" y1="2" y2="13"></line>
                                       <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                    </svg>
                                    Send Email
                                 </button>
                                 <a href="#" class="site-btn-sm red-btn" data-bs-dismiss="modal" aria-label="Close">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="x" icon-name="x" class="lucide lucide-x">
                                       <path d="M18 6 6 18"></path>
                                       <path d="m6 6 12 12"></path>
                                    </svg>
                                    Close
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <table class="table">
                  <thead>
                     <tr>
                        <th scope="col">Avatar</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Wallet Balance</th>
                        <th scope="col">Profit</th>
                        <th scope="col">KYC</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                     </tr>
                  </thead>
                  <tbody>
@foreach ($customers as $customer)
<tr>
    <td>
        <span class="avatar-text">
            {{ strtoupper(substr($customer->name, 0, 2)) }}
        </span>
    </td>
    <td><a class="link" href="{{ route('admin.user.edit', $customer->id) }}">{{ $customer->username }}</a></td>
    <td>{{ Str::limit($customer->email, 20, '...') }}</td>
    @php
    $totalDeposit = \App\Models\Transaction::where('user_id', $customer->id)
        ->where('type', 'deposit')
        ->where('status', 'approved')
        ->sum('amount');

    $totalProfit = \App\Models\Transaction::where('user_id', $customer->id)
        ->where('type', 'profit')
        ->sum('amount');

    $totalWithdraw = \App\Models\Transaction::where('user_id', $customer->id)
        ->where('type', 'withdraw')
        ->where('status', 'approved')
        ->sum('amount');

    $totalInvestment = \App\Models\Transaction::where('user_id', $customer->id)
        ->where('type', 'investment')
        ->where('status', 'completed')
        ->sum('amount');

    $referralBonus = \App\Models\Referral::where('referred_by', $customer->id)
        ->sum('bonus');

    $walletBalance = $totalDeposit + $totalProfit + $referralBonus - $totalWithdraw - $totalInvestment;
@endphp

<td>${{ number_format($walletBalance, 2) }}</td>

    <td><strong>${{ number_format($customer->profit ?? 0, 2) }}</strong></td>
  
    <td>
       <div class="site-badge 
            {{ $customer->kyc_verified == 1 ? 'success' : ($customer->kyc_verified == 0 ? 'pending' : 'danger') }}">
            {{ $customer->kyc_verified == 1 ? 'Active' : ($customer->kyc_verified == 0 ? 'Disabled' : 'Closed') }}
        </div>
    </td>
    <td>
        <div class="site-badge 
            {{ $customer->is_active == 1 ? 'success' : ($customer->is_active == 0 ? 'pending' : 'danger') }}">
            {{ $customer->is_active == 1 ? 'Active' : ($customer->is_active == 0 ? 'Disabled' : 'Closed') }}
        </div>
    </td>
   <td>
    {{-- Edit Button --}}
    <a href="{{ route('admin.user.edit', $customer->id) }}" class="round-icon-btn primary-btn" title="Edit User">
        <i class="lucide lucide-edit-3"></i>
    </a>

    {{-- Delete Form --}}
    <form action="{{ route('admin.user.delete', $customer->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this user?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="round-icon-btn red-btn" title="Delete User">
            <i class="lucide lucide-trash-2"></i>
        </button>
    </form>
</td>

</tr>
@endforeach
</tbody>





                  <!-- Modal for Send Email -->
                  <!-- Modal for Send Email-->
               </table>
              
            </div>
         </div>
      </div>
   </div>
</div>
@endsection