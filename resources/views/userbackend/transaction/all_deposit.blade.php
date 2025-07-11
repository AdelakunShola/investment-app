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
                     <h3 class="title">All Deposits Transactions</h3>
                  </div>
                  <div class="site-card-body">
                     <div class="site-table">
                        <div class="table-filter">
                           <div class="filter">
                             <form action="{{ route('user.transaction') }}" method="GET">
   <div class="search">
      <input type="text" id="search" name="query" placeholder="Search" value="{{ request('query') }}">
      <input type="date" name="date" value="{{ request('date') }}">
      <button type="submit" class="apply-btn">
         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-search">
            <circle cx="11" cy="11" r="8"></circle>
            <path d="m21 21-4.3-4.3"></path>
         </svg>
         Search
      </button>
   </div>
</form>

                           </div>
                        </div>
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
        @foreach($deposits as $deposit)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>${{ number_format($deposit->amount, 2) }}</td>
                <td>
    @php
        $statusColor = match($deposit->status) {
            'approved' => 'badge bg-success',
            'pending' => 'badge bg-warning text-dark',
            'rejected' => 'badge bg-danger',
            default => 'badge bg-secondary',
        };
    @endphp

    <span class="{{ $statusColor }}">{{ ucfirst($deposit->status) }}</span>
</td>

                <td>{{ $deposit->created_at->format('d M, Y h:i A') }}</td>
               
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
                     <h3 class="title">All Deposits Transactions</h3>
                  </div>
                  <div class="site-card-body">
                     <div class="site-table">
                        <div class="table-filter">
                           <div class="filter">
                             <form action="{{ route('user.transaction') }}" method="GET">
   <div class="search">
      <input type="text" id="search" name="query" placeholder="Search" value="{{ request('query') }}">
      <input type="date" name="date" value="{{ request('date') }}">
      <button type="submit" class="apply-btn">
         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-search">
            <circle cx="11" cy="11" r="8"></circle>
            <path d="m21 21-4.3-4.3"></path>
         </svg>
         Search
      </button>
   </div>
</form>

                           </div>
                        </div>
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
        @foreach($deposits as $deposit)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>${{ number_format($deposit->amount, 2) }}</td>
                <td>
    @php
        $statusColor = match($deposit->status) {
            'approved' => 'badge bg-success',
            'pending' => 'badge bg-warning text-dark',
            'rejected' => 'badge bg-danger',
            default => 'badge bg-secondary',
        };
    @endphp

    <span class="{{ $statusColor }}">{{ ucfirst($deposit->status) }}</span>
</td>

                <td>{{ $deposit->created_at->format('d M, Y h:i A') }}</td>
               
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