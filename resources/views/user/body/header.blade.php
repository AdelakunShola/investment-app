       @php
    use App\Models\About;
    $about = About::first();
@endphp

<div class="panel-header">
    <div class="logo">
        <a href="{{ route('user.dashboard') }}">
            <img class="logo-unfold" src="{{ $about && $about->image ? asset($about->image) : '' }}" alt="Logo">
            <img class="logo-fold" src="{{ $about && $about->image ? asset($about->image) : '' }}" alt="Logo">
        </a>
    </div>
    <div class="nav-wrap">
        <div class="nav-left">
            <button class="sidebar-toggle">
             <i class="fas fa-bars"></i>

            </button>
            <div class="mob-logo">
                <a href="{{ route('user.dashboard') }}">
                    <img src="{{ $about && $about->image ? asset($about->image) : '' }}" alt="Site Name">
                </a>
            </div>
        </div>

         {{-- Ranking Info for Logged-in User --}}
    @php
        use App\Models\Transaction;
        use App\Models\UserRanking;

        $user = auth()->user();

        $totalProfit = Transaction::where('user_id', $user->id)
            ->where('type', 'profit')
            ->sum('amount');

        $totalDeposit = Transaction::where('user_id', $user->id)
            ->where('type', 'deposit')
            ->sum('amount');

        $userRanking = UserRanking::where('minimum_earnings', '<=', $totalProfit)
            ->where('minimum_deposit', '<=', $totalDeposit)
            ->orderByDesc('minimum_earnings')
            ->first();
    @endphp

    @if($userRanking)
        <div class="user-ranking-header d-flex align-items-center me-3">
            <div class="user-ranking-icon me-2" style="width: 36px; height: 36px;">
                <img src="{{ asset('storage/' . $userRanking->icon) }}" alt="Rank" class="img-fluid rounded-circle shadow" style="object-fit: contain;">
            </div>
            <div class="user-ranking-text">
               
                <strong class="text-white">{{ $userRanking->ranking }}</strong>
            </div>
        </div>
    @endif
        <div class="nav-right">
            <div class="single-nav-right">

                <div class="single-right">
                    <div class="color-switcher">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="moon" icon-name="moon" class="lucide lucide-moon dark-icon" data-mode="dark"><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="sun" icon-name="sun" class="lucide lucide-sun light-icon" data-mode="light"><circle cx="12" cy="12" r="4"></circle><path d="M12 2v2"></path><path d="M12 20v2"></path><path d="m4.93 4.93 1.41 1.41"></path><path d="m17.66 17.66 1.41 1.41"></path><path d="M2 12h2"></path><path d="M20 12h2"></path><path d="m6.34 17.66-1.41 1.41"></path><path d="m19.07 4.93-1.41 1.41"></path></svg>
                    </div>
                </div>

                
                                                     <div class="single-nav-right user-notifications11867 d-flex align-items-center">

    {{-- Notification Button --}}
    <button type="button" class="item notification-dot" data-bs-toggle="dropdown" aria-expanded="false">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
             stroke-linejoin="round" class="lucide lucide-bell-ring">
            <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"></path>
            <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"></path>
            <path d="M4 2C2.8 3.7 2 5.7 2 8"></path>
            <path d="M22 8c0-2.3-.8-4.3-2-6"></path>
        </svg>
        <div class="number">0</div>
    </button>

    <div class="dropdown-menu dropdown-menu-end notification-pop">
        <div class="noti-head">Notifications <span>0</span></div>
        <div class="all-noti">
            <p>Notification Not Found</p>
        </div>
    </div>

</div>

                                

              
                <div class="single-right">
                    <button type="button" class="item" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a href="{{ route('user.setting') }}" class="dropdown-item" type="button"><i class="fas fa-cog me-1"></i>Settings</a>
                        </li>
                        <li>
                            <a href="{{ route('user.change.password') }}" class="dropdown-item" type="button">
                                <i class="fas fa-lock me-1"></i>Change Password
                            </a>
                        </li>
                        
                         <li class="logout">

                        <a href="{{ route('user.logout')}}" class="dropdown-item" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="log-out" icon-name="log-out" class="lucide lucide-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" x2="9" y1="12" y2="12"></line></svg> Logout
                        </a>
                       
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
                      