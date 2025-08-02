@extends('user.user_dashboard')
@section('user')

@php
    $user = Auth::user();
@endphp

@php
    $user = auth()->user();

    $totalDeposit = \App\Models\Transaction::where('user_id', $user->id)
        ->where('type', 'deposit')
        ->where('status', 'approved')
        ->sum('amount');

    $totalProfit = \App\Models\Transaction::where('user_id', $user->id)
        ->whereIn('type', ['profit', 'referral_bonus'])
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

    $walletBalance = $totalDeposit + $totalProfit - $totalWithdraw - $totalInvestment;
@endphp
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
         <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-12">
               <div class="site-card">
                  <div class="site-card-header">
                     <h3 class="title">Review and Confirm Investment</h3>
                        <a href="{{ url()->previous() }}" class="btn btn-sm btn-secondary me-2">
   ← Back
</a>
                  </div>
                  <div class="site-card-body">
                    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif

                    <form action="{{ route('user.plan.invest.store', $plan->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                                         
                        <div class="progress-steps-form">
                           <div class="transaction-list table-responsive">
                              <table class="table preview-table">
                                  <tbody>
                                 <tr>
                                    <td><strong>Plan Name:</strong></td>
                                    <td>{{ $plan->name }}</td>
                                 </tr>
                                 <tr>
                                    <td><strong>Min - Max Amount:</strong></td>
                                    <td>${{ number_format($plan->min_amount, 2) }} - ${{ number_format($plan->max_amount, 2) }}</td>
                                 </tr>
                                 <tr>
                                    <td><strong>Enter Amount:</strong></td>
                                    <td>
                                       <div class="input-group mb-0">
                                          <input type="text"
       class="form-control"
       placeholder="Enter Amount"
       name="invest_amount"
       id="enter-amount"
       data-min="{{ $plan->min_amount }}"
       data-max="{{ $plan->max_amount }}"
       oninput="validateAmount()" required>
        <span class="input-group-text">USD</span>
       <div id="amount-error" style="color: red; font-size: 14px; display: none;"></div>


                                         
                                       </div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td><strong>Select Wallet:</strong></td>
                                    <td>
                                       <select name="wallet" class="form-select" required>
    <option value="main">
        Main Wallet ({{ number_format($walletBalance, 2) }} USD)
    </option>
</select>

                                    </td>
                                 </tr>
                                 <tr>
                                    <td><strong>Return of Interest:</strong></td>
                                    <td>{{ $plan->weekly_interest }}% every {{ $plan->day }} day(s)</td>
                                 </tr>
                                 <tr>
                                    <td><strong>Capital Back:</strong></td>
                                    <td>{{ $plan->capital_back ? 'Yes' : 'No' }}</td>
                                 </tr>
                                 <tr>
                                    <td><strong>Total Investment Amount:</strong></td>
                                    <td><span id="total-amount">0.00</span> USD</td>
                                 </tr>
                              </tbody>
                              </table>
                           </div>
                           <div class="button mt-3">
                           <button type="submit" class="site-btn primary-btn me-3">
                             <i class="fas fa-check"></i> Invest Now
                           </button>
                           <a href="{{ route('user.plans') }}" class="site-btn black-btn">
                              <i class="fas fa-times"></i>
 Cancel
                           </a>
                        </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <!--Page Content-->
      </div>
   </div>
</div>

<script>
   function updateTotal() {
      let amount = parseFloat(document.getElementById('enter-amount').value);
      document.getElementById('total-amount').innerText = isNaN(amount) ? '0.00' : amount.toFixed(2);
   }
</script>
<script>
    function validateAmount() {
        const input = document.getElementById('enter-amount');
        const min = parseFloat(input.dataset.min);
        const max = parseFloat(input.dataset.max);
        const value = parseFloat(input.value);
        const errorDiv = document.getElementById('amount-error');
        const totalDiv = document.getElementById('total-amount');

        if (isNaN(value)) {
            totalDiv.innerText = '0.00';
            errorDiv.style.display = 'none';
            return;
        }

        if (value < min || value > max) {
            errorDiv.innerText = `Amount must be between $${min.toFixed(2)} and $${max.toFixed(2)}.`;
            errorDiv.style.display = 'block';
        } else {
            errorDiv.style.display = 'none';
        }

        totalDiv.innerText = value.toFixed(2);
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Success!',
        text: '{{ session('success') }}',
        confirmButtonColor: '#3085d6'
    });
</script>
@endif


@endsection















































