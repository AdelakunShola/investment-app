@php
    $user = Auth::user();
@endphp
<div class="desktop-screen-show">
        <div class="side-nav ">
    <div class="side-wallet-box default-wallet mb-0">
        <div class="user-balance-card">
            <div class="wallet-name">
                <div class="name">Account Balance</div>
                <div class="default">Wallet</div>
            </div>
            <div class="wallet-info">
                <div class="wallet-id"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="wallet" icon-name="wallet" class="lucide lucide-wallet"><path d="M21 12V7H5a2 2 0 0 1 0-4h14v4"></path><path d="M3 5v14a2 2 0 0 0 2 2h16v-5"></path><path d="M18 12a2 2 0 0 0 0 4h4v-4Z"></path></svg>Main Wallet</div>
                <div class="balance">({{ number_format($user->wallet_balance, 2) }} USD)</div>
            </div>
            <div class="wallet-info">
                <div class="wallet-id"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="landmark" icon-name="landmark" class="lucide lucide-landmark"><line x1="3" x2="21" y1="22" y2="22"></line><line x1="6" x2="6" y1="18" y2="11"></line><line x1="10" x2="10" y1="18" y2="11"></line><line x1="14" x2="14" y1="18" y2="11"></line><line x1="18" x2="18" y1="18" y2="11"></line><polygon points="12 2 20 7 4 7"></polygon></svg>Profit Wallet</div>
                <div class="balance">({{ number_format($user->profit_balance, 2) }} USD)</div>
            </div>
        </div>
        <div class="actions">
            <a href="https://hyiprio.tdevs.co/user/deposit" class="user-sidebar-btn"><i class="anticon anticon-file-add"></i>Deposit</a>
            <a href="{{ route('user.plans') }}" class="user-sidebar-btn red-btn"><i class="anticon anticon-export"></i>Invest Now</a>
        </div>
    </div>
    <div class="side-nav-inside">
        <ul class="side-nav-menu">
            <li class="side-nav-item active">
                <a href="{{ route('user.dashboard') }}"><i class="anticon anticon-appstore"></i><span>Dashboard</span></a>
            </li>

            <li class="side-nav-item ">
                <a href="{{ route('user.plans') }}"><i class="anticon anticon-check-square"></i><span>All Plans</span></a>
            </li>
        

            <li class="side-nav-item ">
                <a href="{{ route('user.transaction') }}"><i class="anticon anticon-inbox"></i><span>All Transactions</span></a>
            </li>


            <li class="side-nav-item   ">
                <a href="https://hyiprio.tdevs.co/user/deposit"><i class="anticon anticon-file-add"></i><span>Add Money</span></a>
            </li>
            

            <li class="side-nav-item ">
                <a href="https://hyiprio.tdevs.co/user/wallet-exchange"><i class="anticon anticon-transaction"></i><span>Wallet Exchange</span></a>
            </li>

            <li class="side-nav-item   ">
                <a href="https://hyiprio.tdevs.co/user/send-money"><i class="anticon anticon-export"></i><span>Send Money</span></a>
            </li>
            

            <li class="side-nav-item   ">
                <a href="https://hyiprio.tdevs.co/user/withdraw"><i class="anticon anticon-bank"></i><span>Withdraw</span></a>
            </li>
           

                        <li class="side-nav-item ">
                <a href="{{ route('user.ranking') }}"><i class="anticon anticon-star"></i><span>Ranking Badge</span></a>
            </li>
            
                            <li class="side-nav-item ">
                    <a href="{{ route('user.referral') }}"><i class="anticon anticon-usergroup-add"></i><span>Referral</span></a>
                </li>
                
                        <li class="side-nav-item ">
                <a href="{{ route('user.setting') }}"><i class="anticon anticon-setting"></i><span>Settings</span></a>
            </li>

            <li class="side-nav-item ">
                <a href="https://hyiprio.tdevs.co/user/support-ticket/index"><i class="anticon anticon-tool"></i><span>Support Tickets</span></a>
            </li>

            <li class="side-nav-item ">
                <a href="https://hyiprio.tdevs.co/user/notification/all"><i class="anticon anticon-notification"></i><span>Notifications</span></a>
            </li>

            <li class="side-nav-item">
                

                        <a href="{{ route('user.logout')}}" class="dropdown-item" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="log-out" icon-name="log-out" class="lucide lucide-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" x2="9" y1="12" y2="12"></line></svg> Logout
                        </a>
                       
                  
            </li>
        </ul>
    </div>
</div>
    </div>