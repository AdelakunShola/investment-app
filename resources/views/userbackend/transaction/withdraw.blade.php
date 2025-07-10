@extends('user.user_dashboard')
@section('user')
<div class="main-content">
   <div class="section-gap">
      <div class="container-fluid">
         <div class="row">
            <div class="col-xl-12">
               <div class="site-card">
                  <div class="site-card-header">
                     <h3 class="title">Withdraw Funds</h3>
                  </div>
                  <div class="site-card-body">
                     @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                     @endif

                     <form action="{{ route('user.withdraw.store') }}" method="POST">
                        @csrf

                        <div class="row">
                          <div class="col-xl-6 col-md-6 mb-3">
   <label class="box-input-label">Withdrawal Amount:</label>
   <input type="number" name="amount" class="form-control" placeholder="Enter amount" required>
   @error('amount')
      <small class="text-danger">{{ $message }}</small>
   @enderror
   <p class="text-muted mb-1">Available Balance: <strong>${{ number_format(auth()->user()->wallet_balance, 2) }}</strong></p>


</div>


                           <div class="col-xl-6 col-md-6 mb-3">
   <label class="box-input-label">Select Withdrawal Method:</label>
   <select name="method" class="form-control" required>
      <option value="">Choose Method</option>
      <option value="bank" disabled>Bank Transfer (Unavailable)</option>
      <option value="paypal" disabled>Paypal (Unavailable)</option>
      <option value="crypto">Crypto Wallet</option>
   </select>
</div>


                           <div class="col-xl-6 mb-3">
                              <label class="box-input-label">Account/Wallet Address:</label>
                              <input type="text" name="details" class="form-control" placeholder="Bank account or wallet address" required>
                           </div>


                           <!-- Network Selection -->
<div class="col-xl-6 mb-3 text-start">
  <label for="cryptoNetwork" class="form-label fw-bold">Select Network</label>
  <select class="form-select" id="cryptoNetwork" required>
    <option value="">-- Select Network --</option>
    <option value="TRC20">USDT TRC20</option>
    <option value="ERC20">USDT ERC20</option>
    <option value="BEP20">BEP20</option>
  </select>
</div>




                           <div class="col-xl-6">
                              <button type="submit" class="site-btn-sm primary-btn w-100">Submit Withdrawal</button>
                           </div>
                        </div>
                     </form>

                    
                  </div>
               </div>
            </div>
         </div>
          <!-- Disclaimer -->
<div class="alert alert-warning text-start small">
  <strong>Disclaimer:</strong> Please double-check your wallet address before transferring.
  The company is <strong>not responsible</strong> for lost funds due to incorrect address or wrong network selection.
</div>
      </div>
   </div>
</div>


@endsection
