@extends('admin.admin_dashboard')
@section('admin')

<div class="main-content">
    <div class="page-title">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="title-content">
                        <h2 class="title">User Referrals</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="site-card">
                    <div class="site-card-body">
                        <div class="site-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Referred User</th>
                                        <th scope="col">Referred By</th>
                                        <th scope="col">Bonus (USD)</th>
                                        <th scope="col">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($referrals as $key => $referral)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ optional($referral->referredUser)->username ?? 'N/A' }}</td>
                                            <td>{{ optional($referral->referrer)->username ?? 'N/A' }}</td>
                                            <td>${{ number_format($referral->bonus, 2) }}</td>
                                           
                                            <td>{{ $referral->created_at->format('Y-m-d H:i') }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center text-muted">No referrals found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-end">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
