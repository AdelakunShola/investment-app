@extends('admin.admin_dashboard')
@section('admin')

<div class="main-content">
        <div class="page-title">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="title-content">
                            <h2 class="title">     Withdrawal History
</h2>
                                                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-tab-bars">
                        <ul>

                                        
                                <li class="active">
                                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="calendar" icon-name="calendar" class="lucide lucide-calendar"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"></rect><line x1="16" x2="16" y1="2" y2="6"></line><line x1="8" x2="8" y1="2" y2="6"></line><line x1="3" x2="21" y1="10" y2="10"></line></svg>Withdrawal History</a>
                                </li>
                                                    </ul>
                    </div>
                    <div class="row">
                        
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="site-table table-responsive">
                 

                    <table class="table">
    <thead>
        <tr>
            <th>Date</th>
            <th>User</th>
            <th>Transaction ID</th>
            <th>Amount</th>
            <th>Charge</th>
            <th>Gateway</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @forelse($withdraw as $withdraws)
        <tr>
            <td>{{ \Carbon\Carbon::parse($withdraws->created_at)->format('M d Y H:i') }}</td>
            <td>
                <a class="link" href="{{ route('admin.user.edit', $withdraws->user->id) }}">
                    {{ $withdraws->user->username ?? 'N/A' }}
                </a>
            </td>
            <td><strong>{{ 'TRX' . strtoupper(Str::random(10)) }}</strong></td>
            <td><strong class="red-color">-{{ number_format($withdraws->amount, 2) }} USD</strong></td>
            <td>{{ number_format($withdraws->charge ?? 0, 2) }} USD</td>
            <td>{{ ucfirst($withdraws->method ?? 'N/A') }}</td>
          <td>
    @php
        $statusClass = match($withdraws->status) {
            'pending' => 'pending',        // Typically yellow or orange
            'approved' => 'success',       // Green
            'rejected' => 'danger',        // Red
            'failed' => 'danger',          // Red
            'success' => 'success',        // Green (if used)
            default => 'info',             // Blue or gray for unknown
        };
    @endphp

    <div class="site-badge {{ $statusClass }}">
        {{ ucfirst($withdraws->status) }}
    </div>
</td>

        </tr>
        @empty
        <tr>
            <td colspan="7" class="text-center">No withdrawal found.</td>
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
        </div>
    </div>

    @endsection