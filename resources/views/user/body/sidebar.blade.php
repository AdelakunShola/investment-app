@php
    $user = Auth::user();
@endphp

@php
    use App\Models\Transaction;

    $totalProfit = \App\Models\Transaction::where('user_id', auth()->id())
                    ->where('type', 'profit')
                    ->sum('amount');
@endphp


@php
    $user = auth()->user();

    $totalDeposit = \App\Models\Transaction::where('user_id', $user->id)
        ->where('type', 'deposit')
        ->where('status', 'approved')
        ->sum('amount');

    $totalProfit = \App\Models\Transaction::where('user_id', $user->id)
        ->where('type', 'profit')
        ->sum('amount');

    $totalWithdraw = \App\Models\Transaction::where('user_id', $user->id)
        ->where('type', 'withdraw')
        ->where('status', 'approved')
        ->sum('amount');

    $totalInvestment = \App\Models\Transaction::where('user_id', $user->id)
        ->where('type', 'investment')
        ->where('status', 'completed')
        ->sum('amount');

    $referralBonus = \App\Models\Referral::where('referred_by', $user->id)
        ->sum('bonus');

    $walletBalance = $totalDeposit + $totalProfit - $totalWithdraw;
@endphp


<div class="desktop-screen-show">
    <div class="side-nav">
        <div class="side-wallet-box default-wallet mb-0">
            <div class="user-balance-card">
                <div class="wallet-name">
                    <div class="name">Account Balance</div>
                    <div class="default">Wallet</div>
                </div>
                <div class="wallet-info">
                    <div class="wallet-id">
                        <i class="fa-solid fa-wallet"></i> Main Wallet
                    </div>
                    <div class="balance">({{ number_format($walletBalance, 2) }} USD)</div>
                </div>
                <div class="wallet-info">
                    <div class="wallet-id">
                        <i class="fa-solid fa-landmark"></i> Profit Wallet
                    </div>
                <div class="balance">({{ number_format($totalProfit, 2) }} USD)</div>

                </div>
            </div>
            <div class="actions">
                <a href="{{ route('user.deposit.form') }}" class="user-sidebar-btn">
                    <i class="fa-solid fa-file-circle-plus"></i> Deposit
                </a>
                <a href="{{ route('user.plans') }}" class="user-sidebar-btn red-btn">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i> Invest Now
                </a>
            </div>
        </div>

        <div class="side-nav-inside">
            <ul class="side-nav-menu">
                <li class="side-nav-item active">
                    <a href="{{ route('user.dashboard') }}">
                        <i class="fa-solid fa-chart-line"></i><span>Dashboard</span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="{{ route('user.plans') }}">
                        <i class="fa-regular fa-square-check"></i><span>All Plans</span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="{{ route('user.transaction') }}">
                        <i class="fa-regular fa-folder-open"></i><span>All Transactions</span>
                    </a>
                </li>

<li class="side-nav-item dropdown">
    <a href="#depositDropdown" data-bs-toggle="collapse" role="button" aria-expanded="false" class="dropdown-toggle d-flex justify-content-between align-items-center">
        <div>
            <i class="fa-solid fa-money-bill-wave me-2"></i> <span>Deposit</span>
        </div>
        <i class="fa-solid fa-chevron-down dropdown-arrow"></i>
    </a>
    <ul class="collapse list-unstyled ps-4" id="depositDropdown">
        <li class="side-nav-sub-item">
            <a href="{{ route('user.deposit.form') }}">Add New Deposit</a>
        </li>
        <li class="side-nav-sub-item">
            <a href="{{ route('user.deposits.all') }}">View All Deposits</a>
        </li>
    </ul>
</li>

<li class="side-nav-item dropdown">
    <a href="#withdrawDropdown" data-bs-toggle="collapse" role="button" aria-expanded="false" class="dropdown-toggle d-flex justify-content-between align-items-center">
        <div>
            <i class="fa-solid fa-hand-holding-dollar me-2"></i> <span>Withdraw</span>
        </div>
        <i class="fa-solid fa-chevron-down dropdown-arrow"></i>
    </a>
    <ul class="collapse list-unstyled ps-4" id="withdrawDropdown">
        <li class="side-nav-sub-item">
            <a href="{{ route('user.withdraw.form') }}">Withdraw Funds</a>
        </li>
        <li class="side-nav-sub-item">
            <a href="{{ route('user.withdraw.all') }}">View All Withdrawal</a>
        </li>
    </ul>
</li>



<li class="side-nav-item dropdown">
    <a href="#AdDropdown" data-bs-toggle="collapse" role="button" aria-expanded="false" class="dropdown-toggle d-flex justify-content-between align-items-center">
        <div>
            <i class="fa-solid fa-rectangle-ad"></i>
<span>Post AD</span>
        </div>
        <i class="fa-solid fa-chevron-down dropdown-arrow"></i>
    </a>
    <ul class="collapse list-unstyled ps-4" id="AdDropdown">
        <li class="side-nav-sub-item">
            <a href="{{ route('user.all.ads') }}">All Ads</a>
        </li>
        <li class="side-nav-sub-item">
            <a href="{{ route('user.create.ads') }}">Create Ad</a>
        </li>
    </ul>
</li>


                <li class="side-nav-item">
                    <a href="{{ route('user.ranking') }}">
                        <i class="fa-solid fa-award"></i><span>Ranking Badge</span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="{{ route('user.referral') }}">
                        <i class="fa-solid fa-user-group"></i><span>Referral</span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="{{ route('user.setting') }}">
                        <i class="fa-solid fa-gear"></i><span>Settings</span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="https://hyiprio.tdevs.co/user/support-ticket/index">
                        <i class="fa-solid fa-toolbox"></i><span>Support Tickets</span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="https://hyiprio.tdevs.co/user/notification/all">
                        <i class="fa-regular fa-bell"></i><span>Notifications</span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="{{ route('user.logout') }}" class="dropdown-item" type="button">
                        <i class="fa-solid fa-right-from-bracket"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
