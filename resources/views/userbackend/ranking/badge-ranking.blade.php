@extends('user.user_dashboard')
@section('user')

<style>
/* Apply blur or faded effect to locked images */
.locked-badge img {
    filter: blur(2px) brightness(70%);
    transition: 0.3s ease;
}

/* Optional styling for lock overlay */
.locked-overlay {
    background: rgba(255, 255, 255, 0.4);
    pointer-events: none;
    border-radius: 12px;
}
</style>

@php
    $user = auth()->user();

    $totalProfit = \App\Models\Transaction::where('user_id', $user->id)
        ->whereIn('type', ['profit', 'referral_bonus'])
        ->sum('amount');

    $totalDeposit = \App\Models\Transaction::where('user_id', $user->id)
        ->where('type', 'deposit')
        ->sum('amount');
@endphp

<div class="main-content">
    <div class="section-gap">
        <div class="container-fluid">

            <div class="row desktop-screen-show">
                <div class="col"></div>
            </div>

            <div class="row mobile-screen-show">
                <div class="col"></div>
            </div>

            <!--Page Content-->
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-card">
                        <div class="site-card-header">
                            <h3 class="title">All The Badges</h3>
                               <a href="{{ url()->previous() }}" class="btn btn-sm btn-secondary me-2">
   ← Back
</a>
                        </div>
                        <div class="site-card-body">
                            <div class="row justify-content-center">

                                @foreach ($rankings as $ranking)
                                    @php
                                        $isLocked = $totalProfit < $ranking->minimum_earnings || $totalDeposit < $ranking->minimum_deposit;
                                    @endphp

                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                                        <div class="single-badge">
                                            <div class="badge position-relative">
                                                <div class="img {{ $isLocked ? 'locked-badge' : '' }}">
                                                    <img src="{{ asset('storage/' . $ranking->icon) }}" alt="">
                                                </div>

                                                @if ($isLocked)
                                                    <div class="locked-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                             class="lucide lucide-lock text-danger bg-white rounded-circle p-1 shadow">
                                                             <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                                             <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                                        </svg>
                                                    </div>
                                                @endif
                                            </div>

                                            <div class="content">
                                                <h1 class="title">{{ $ranking->ranking }}</h1>
                                                <h3 class="title">{{ $ranking->ranking_name }}</h3>
                                                <p class="description">{{ $ranking->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                @if ($rankings->isEmpty())
                                    <p class="text-center">No badges available at the moment.</p>
                                @endif

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
