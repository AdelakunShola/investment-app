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
            <div class="col-xl-12 desktop-screen-show">
               <div class="site-card">
                  <div class="site-card-header">
                     <h3 class="title">All Withdrawal Transactions</h3>
                       <a href="{{ url()->previous() }}" class="btn btn-sm btn-secondary me-2">
   ← Back
</a>
                  </div>
                  <div class="site-card-body">
                     <div class="site-table">
                       
                        <div class="table-responsive">
                           <table class="table table-hover">
                        
    <thead>
        <tr>
            <th>#</th>
            <th>Amount</th>
            <th>Wallet Address</th>
            <th>Network</th>
            <th>Status</th>
            <th>Date</th>
          
        </tr>
    </thead>
    <tbody>
        @foreach($withdraw as $withdraws)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>${{ number_format($withdraws->amount, 2) }}</td>
                <td>{{ $withdraws->wallet }}</td>
                 <td>{{ $withdraws->network }}</td>
                <td>
    @php
        $statusColor = match($withdraws->status) {
            'approved' => 'badge bg-success',
            'pending' => 'badge bg-warning text-dark',
            'rejected' => 'badge bg-danger',
            default => 'badge bg-secondary',
        };
    @endphp

    <span class="{{ $statusColor }}">{{ ucfirst($withdraws->status) }}</span>
</td>

                <td>{{ $withdraws->created_at->format('d M, Y h:i A') }}</td>
               
            </tr>
        @endforeach
    </tbody>
</table>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-12 mobile-screen-show">
               <!-- Transactions -->
               <div class="all-feature-mobile mobile-transactions mb-3">
                  <div class="site-card">
                  <div class="site-card-header">
                     <h3 class="title">All Withdrawal Transactions</h3>
                  </div>
                  <div class="site-card-body">
                     <div class="site-table">
                       
                        <div class="table-responsive">
                           <table class="table table-hover">
                        
    <thead>
        <tr>
            <th>#</th>
            <th>Amount</th>
            <th>Status</th>
            <th>Date</th>
          
        </tr>
    </thead>
    <tbody>
        @foreach($withdraw as $withdraws)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>${{ number_format($withdraws->amount, 2) }}</td>
                <td>
    @php
        $statusColor = match($withdraws->status) {
            'approved' => 'badge bg-success',
            'pending' => 'badge bg-warning text-dark',
            'rejected' => 'badge bg-danger',
            default => 'badge bg-secondary',
        };
    @endphp

    <span class="{{ $statusColor }}">{{ ucfirst($withdraws->status) }}</span>
</td>

                <td>{{ $withdraws->created_at->format('d M, Y h:i A') }}</td>
               
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
         <!--Page Content-->
      </div>
   </div>
</div>
@endsection