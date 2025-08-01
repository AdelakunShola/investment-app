@extends('admin.admin_dashboard')
@section('admin')

<div class="main-content">
        <div class="page-title">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="title-content">
                            <h2 class="title">All Schemas</h2>
                                                            <a href="{{ route('add.plans') }}" class="title-btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="plus-circle" icon-name="plus-circle" class="lucide lucide-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" x2="12" y1="8" y2="16"></line><line x1="8" x2="16" y1="12" y2="12"></line></svg>Add New</a>
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
                         <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">Icon</th>
                <th scope="col">Plan Name</th>
                <th scope="col">Amount</th>
                <th scope="col">Badge</th>
                <th scope="col">Weekly Interest</th>
                <th scope="col">Profit Withdraw Duration</th>
                <th scope="col">Interest Duration Days</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($plans as $plan)
            <tr>
                <td>
                   
                    <img class="avatar" src="{{ asset('storage/' . $plan->icon) }}" alt="" width="40">
                </td>
                <td><strong>{{ $plan->name }}</strong></td>
                <td><strong>${{ number_format($plan->min_amount, 2) }} - ${{ number_format($plan->max_amount, 2) }} </strong></td>
                <td>
                    <div class="site-badge success">{{ $plan->badge }}</div>
                </td>
                <td>
                    <div class="site-badge success">{{ $plan->weekly_interest }}%</div>
                </td>
                <td>
                    <div class="site-badge success">{{ $plan->duration }}</div>
                </td>
                 <td>
                    <div class="site-badge success">{{ $plan->day }}</div>
                </td>
                <td class="d-flex gap-2">
    {{-- Edit Button --}}
    <a href="{{ route('admin.investment-plans.edit', $plan->id) }}" class="round-icon-btn primary-btn">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 20h9"></path>
            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
        </svg>
    </a>

    {{-- Delete Button --}}
    <form action="{{ route('admin.plans.delete', $plan->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this plan?')">
        @csrf
        @method('DELETE')
        <button type="submit" class="round-icon-btn danger-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="3 6 5 6 21 6" />
                <path d="M19 6l-2 14H7L5 6m5 0V4a2 2 0 0 1 2-2h0a2 2 0 0 1 2 2v2" />
            </svg>
        </button>
    </form>
</td>

            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center">No Investment Plans Found</td>
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

@endsection