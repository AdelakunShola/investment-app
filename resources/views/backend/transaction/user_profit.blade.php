@extends('admin.admin_dashboard')
@section('admin')

<div class="main-content">
        <div class="page-title">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <h2 class="title">Profits Transactions</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-table table-responsive">
                       <form action="{{ route('admin.transactions.all') }}" method="get" id="filterForm">
    <div class="table-filter d-flex justify-content-between">
        <div class="filter d-flex">
            <div class="search">
                <input type="text" id="search" name="query" value="{{ request('query') }}" placeholder="Search">
            </div>
            <button type="submit" class="apply-btn ms-2" id="search_button">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search">
                    <circle cx="11" cy="11" r="8"></circle>
                    <path d="m21 21-4.3-4.3"></path>
                </svg>
                Search
            </button>
        </div>

        <div class="filter d-flex">
            <div class="search w-100">
                <input class="me-2 w-100" id="date_range" type="text" name="daterange" value="{{ request('daterange') }}" placeholder="Date range" autocomplete="off">
            </div>

            <select class="form-select form-select-sm me-2" name="filter_by_transaction_type" disabled>
    <option value="profit" selected>Profit</option>
</select>


            <select class="form-select form-select-sm" name="status">
                <option value="" selected>Filter By Status</option>
                <option value="success" {{ request('status') == 'success' ? 'selected' : '' }}>Success</option>
                <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="failed" {{ request('status') == 'failed' ? 'selected' : '' }}>Failed</option>
            </select>

            
        </div>
    </div>
</form>

                        <div class="modal fade" id="sendEmail" tabindex="-1" aria-labelledby="sendEmailModalLabel" aria-hidden="true">
   
</div><table class="table">
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
        <td>{{ $transaction->created_at->format('M d Y H:i') }}</td>
        <td>
            <a class="link" href="{{ route('admin.user.edit', $transaction->user_id) }}">
                {{ $transaction->user->username ?? 'N/A' }}
            </a>
        </td>
        <td>{{ $transaction->id }}</td>
        <td><div class="site-badge primary-bg">{{ ucfirst($transaction->type) }}</div></td>
        <td>
            <strong class="{{ $transaction->amount >= 0 ? 'green-color' : 'red-color' }}">
                {{ $transaction->amount >= 0 ? '+' : '' }}{{ number_format($transaction->amount, 2) }} USD
            </strong>
        </td>
        <td>{{ $transaction->method }}</td>
        <td>
            <div class="site-badge {{ $transaction->status === 'success' ? 'success' : ($transaction->status === 'pending' ? 'warning' : 'danger') }}">
                {{ ucfirst($transaction->status) }}
            </div>
        </td>
    </tr>
@empty
    <tr><td colspan="7" class="text-center">No transactions found.</td></tr>
@endforelse
</tbody>

                            <!-- Modal for Send Email -->
                                                            
                                                        <!-- Modal for Send Email-->
                        </table>
                   

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Date Range Picker Scripts --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script src="https://cdn.jsdelivr.net/npm/moment@2.29.4/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<script>
    // Initialize date range picker
    $(function () {
        $('#date_range').daterangepicker({
            autoUpdateInput: false,
            locale: {
                cancelLabel: 'Clear'
            }
        });

        $('#date_range').on('apply.daterangepicker', function (ev, picker) {
            $(this).val(picker.startDate.format('YYYY-MM-DD') + ' - ' + picker.endDate.format('YYYY-MM-DD'));
        });

        $('#date_range').on('cancel.daterangepicker', function () {
            $(this).val('');
        });
    });

    // Auto submit on filter dropdown change
    document.querySelectorAll('select[name="filter_by_transaction_type"], select[name="status"]').forEach(function (el) {
        el.addEventListener('change', function () {
            document.getElementById('filterForm').submit();
        });
    });

    // Export button handler
    document.querySelector('.export_button').addEventListener('click', function () {
        document.querySelector('.export_input').value = 'true';
        document.getElementById('filterForm').submit();
    });
</script>

@endsection
