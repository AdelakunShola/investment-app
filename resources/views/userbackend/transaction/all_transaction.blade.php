@extends('user.user_dashboard')
@section('user')

<style>
   .site-badge.success {
    background-color: #28a745;
    color: white;
}
.site-badge.warning {
    background-color: #ffc107;
    color: black;
}
.site-badge.danger {
    background-color: #dc3545;
    color: white;
}
.site-badge.secondary {
    background-color: #6c757d;
    color: white;
}

</style>
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
                     <h3 class="title">All Transactions</h3>
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
                                    <th>Description</th>
                                    <th>Transactions ID</th>
                                    <th>Type</th>
                                    <th>Amount</th>
                                    <th>Fee</th>
                                    <th>Status</th>
                                    <th>Method</th>
                                 </tr>
                              </thead>
                             <tbody>
@forelse($transactions as $trx)
@php
    $statusClass = match($trx->status) {
        'pending' => 'warning',   // yellow
        'approved' => 'success',
        'completed' => 'success',
        'rejected' => 'danger',   // red
        default => 'secondary',   // gray
    };
@endphp
<tr>
    <td>
        <div class="table-description">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" ... class="lucide lucide-backpack">
                    <path d="..." />
                </svg>
            </div>
            <div class="description">
                <strong>{{ $trx->description }}</strong>
                <div class="date">{{ $trx->created_at->format('M d Y H:i') }}</div>
            </div>
        </div>
    </td>
    <td><strong>{{ 'TRX' . strtoupper(Str::random(10)) }}</strong></td>
    <td><div class="site-badge primary-bg">{{ $trx->type }}</div></td>
    <td>
  <strong class="{{ in_array($trx->type, ['investment', 'withdraw']) ? 'red-color' : 'green-color' }}">
    {{ in_array($trx->type, ['investment', 'withdraw']) ? '-' : '+' }}
    {{ number_format($trx->amount, 2) }} USD
  </strong>
</td>
    <td><strong>0 USD</strong></td>
    <td>
    <div class="site-badge {{ $statusClass }}">
        {{ ucfirst($trx->status) }}
    </div>
</td>
    <td><strong>{{ ucfirst($trx->method) }}</strong></td>
</tr>
@empty
<tr>
    <td colspan="7" class="text-center">No transactions found.</td>
</tr>
@endforelse
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
                     <h3 class="title">All Transactions</h3>
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
                                    <th>Description</th>
                                    <th>Transactions ID</th>
                                    <th>Type</th>
                                    <th>Amount</th>
                                    <th>Fee</th>
                                    <th>Status</th>
                                    <th>Method</th>
                                 </tr>
                              </thead>
                             <tbody>
@forelse($transactions as $trx)
@php
    $statusClass = match($trx->status) {
        'pending' => 'warning',   // yellow
        'approved' => 'success',
        'completed' => 'success',
        'rejected' => 'danger',   // red
        default => 'secondary',   // gray
    };
@endphp
<tr>
    <td>
        <div class="table-description">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" ... class="lucide lucide-backpack">
                    <path d="..." />
                </svg>
            </div>
            <div class="description">
                <strong>{{ $trx->description }}</strong>
                <div class="date">{{ $trx->created_at->format('M d Y H:i') }}</div>
            </div>
        </div>
    </td>
    <td><strong>{{ 'TRX' . strtoupper(Str::random(10)) }}</strong></td>
    <td><div class="site-badge primary-bg">{{ $trx->type }}</div></td>
    <td>
  <strong class="{{ in_array($trx->type, ['investment', 'withdraw']) ? 'red-color' : 'green-color' }}">
    {{ in_array($trx->type, ['investment', 'withdraw']) ? '-' : '+' }}
    {{ number_format($trx->amount, 2) }} USD
  </strong>
</td>

    <td><strong>0 USD</strong></td>
   

<td>
    <div class="site-badge {{ $statusClass }}">
        {{ ucfirst($trx->status) }}
    </div>
</td>

    <td><strong>{{ ucfirst($trx->method) }}</strong></td>
</tr>
@empty
<tr>
    <td colspan="7" class="text-center">No transactions found.</td>
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
         </div>
         <!--Page Content-->
      </div>
   </div>
</div>
@endsection