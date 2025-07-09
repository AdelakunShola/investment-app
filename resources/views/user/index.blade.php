@extends('user.user_dashboard')
@section('user') 

@php
    $user = Auth::user();
@endphp

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
</div>                                            <!--Page Content-->
                    
    <div class="desktop-screen-show">
        
        <div class="row">
                <div class="col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12">
            <div class="site-card">
                <div class="site-card-header">
                    <h3 class="title">Referral Code</h3>
                </div>
                <div class="site-card-body">
                    <div class="referral-link">
                        <div class="referral-link-form">
                            <input type="text" value="{{ $user->referral_code }}" id="refLink">
                            <button type="submit" onclick="copyRef()">
                                <i class="anticon anticon-copy"></i>
                                <span id="copy">Copy</span>
                            </button>
                        </div>
                        <p class="referral-joined">
                            0 peoples are joined by using this URL
                        </p>
                    </div>
                </div>
            </div>
        </div>
    
</div>

        
        <div class="row user-cards ">
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="single">
            <div class="icon"><i class="anticon anticon-inbox"></i></div>
            <div class="content">
                <h4><span class="count">1</span></h4>
                <p>All Transactions</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="single">
            <div class="icon"><i class="anticon anticon-file-add"></i></div>
            <div class="content">
                <h4><b>$</b><span class="count">0</span></h4>
                <p>Total Deposit</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="single">
            <div class="icon"><i class="anticon anticon-check-square"></i></div>
            <div class="content">
                <h4><b>$</b><span class="count">0</span></h4>
                <p>Total Investment</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="single">
            <div class="icon"><i class="anticon anticon-credit-card"></i></div>
            <div class="content">
                <h4><b>$</b><span class="count">3</span></h4>
                <p>Total Profit</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="single">
            <div class="icon"><i class="anticon anticon-arrow-right"></i></div>
            <div class="content">
                <h4><b>$</b><span class="count">0</span></h4>
                <p>Total Transfer </p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="single">
            <div class="icon"><i class="anticon anticon-money-collect"></i></div>
            <div class="content">
                <h4><b>$</b><span class="count">0</span></h4>
                <p>Total Withdraw</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="single">
            <div class="icon"><i class="anticon anticon-gift"></i></div>
            <div class="content">
                <h4><b>$</b><span class="count">0</span>
                </h4>
                <p>Referral Bonus</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="single">
            <div class="icon"><i class="anticon anticon-account-book"></i></div>
            <div class="content">
                <h4><b>$</b><span class="count">0</span></h4>
                <p>Deposit Bonus</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="single">
            <div class="icon"><i class="anticon anticon-gold"></i></div>
            <div class="content">
                <h4><b>$</b><span class="count">0</span></h4>
                <p>Investment Bonus</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="single">
            <div class="icon"><i class="anticon anticon-inbox"></i></div>
            <div class="content">
                <h4 class="count">0</h4>
                <p>Total Referral</p>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="single">
            <div class="icon"><i class="anticon anticon-radar-chart"></i></div>
            <div class="content">
                <h4 class="count">0</h4>
                <p>Rank Achieved</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="single">
            <div class="icon"><i class="anticon anticon-question"></i></div>
            <div class="content">
                <h4 class="count">0</h4>
                <p>Total Ticket</p>
            </div>
        </div>
    </div>
</div>

        
        <div class="row">
    <div class="col-xl-12">
        <div class="site-card">
            <div class="site-card-header">
                <h3 class="title">Recent Transactions</h3>
            </div>
            <div class="site-card-body table-responsive">
                <div class="site-datatable">
                    <table class="display data-table">
                        <thead>
                        <tr>
                            <th>Description</th>
                            <th>Transactions ID</th>
                            <th>Type</th>
                            <th>Amount</th>
                            <th>Fee</th>
                            <th>Status</th>
                            <th>Gateway</th>
                        </tr>
                        </thead>
                        <tbody>
                                                    <tr>
                                <td>
                                    <div class="table-description">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="backpack
                                         " icon-name="backpack
                                         " class="lucide lucide-backpack"><path d="M4 20V10a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4v10a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2Z"></path><path d="M9 6V4a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v2"></path><path d="M8 21v-5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v5"></path><path d="M8 10h8"></path><path d="M8 18h8"></path></svg>
                                        </div>


                                        <div class="description">
                                            <strong>Signup Bonus                                             </strong>
                                            <div class="date">Jun 29 2025 12:42</div>
                                        </div>
                                    </div>
                                </td>
                                <td><strong>TRXZSNUENEWTO</strong></td>
                                <td>
                                    <div class="site-badge primary-bg">Signup bonus</div>
                                </td>

                                <td><strong class="green-color">+3 USD</strong></td>
                                <td><strong>0 USD</strong></td>
                                <td>


                                                                            <div class="site-badge success">Success</div>
                                                                    </td>
                                <td><strong>System</strong></td>
                            </tr>
                        

                                                </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>

    
    <div class="mobile-screen-show">
        <div class="row">
    <div class="col-12">
                <div class="user-wallets-mobile">
            <img src="https://hyiprio.tdevs.co/assets/frontend/materials/wallet-shadow.png" alt="" class="wallet-shadow">
            <div class="head">All Wallets in USD</div>
            <div class="one">
                <div class="balance">

                    <span class="symbol">$</span>0<span class="after-dot">.00 </span>
                </div>
                <div class="wallet">Main Wallet</div>
            </div>


            <div class="one p-wal">
                <div class="balance">
                    <span class="symbol">$</span>3<span class="after-dot">.00 </span>
                </div>
                <div class="wallet">Profit Wallet</div>
            </div>
            <div class="info">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="info" icon-name="info" class="lucide lucide-info"><circle cx="12" cy="12" r="10"></circle><path d="M12 16v-4"></path><path d="M12 8h.01"></path></svg>You Earned 3 USD This Week
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="mob-shortcut-btn">
            <a href="https://hyiprio.tdevs.co/user/deposit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="download" icon-name="download" class="lucide lucide-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" x2="12" y1="15" y2="3"></line></svg> Deposit</a>
            <a href="https://hyiprio.tdevs.co/user/schemas"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="box" icon-name="box" class="lucide lucide-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.29 7 12 12 20.71 7"></polyline><line x1="12" x2="12" y1="22" y2="12"></line></svg> Investment</a>
            <a href="https://hyiprio.tdevs.co/user/withdraw"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="send" icon-name="send" class="lucide lucide-send"><line x1="22" x2="11" y1="2" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg> Withdraw</a>
        </div>
    </div>


    <div class="col-12">
        <!-- all navigation -->
        <div class="all-feature-mobile mb-3 mobile-screen-show">
    <div class="title">All Navigations</div>
    <div class="contents row">
        <div class="col-4">
            <div class="single">
                <a href="{{ route('user.plans') }}">
                    <div class="icon"><img src="https://hyiprio.tdevs.co/assets/frontend/materials/schema.png" alt="">
                    </div>
                    <div class="name">All Plans</div>
                </a>
            </div>
        </div>
        <div class="col-4">
            <div class="single">
                <a href="{{ route('user.plans') }}">
                    <div class="icon"><img src="https://hyiprio.tdevs.co/assets/frontend/materials/schema-log.png" alt="">
                    </div>
                    <div class="name">Investment</div>
                </a>
            </div>
        </div>
        <div class="col-4">
            <div class="single">
                <a href="{{ route('user.transaction') }}">
                    <div class="icon"><img src="https://hyiprio.tdevs.co/assets/frontend/materials/transactions.png" alt="">
                    </div>
                    <div class="name">Transactions</div>
                </a>
            </div>
        </div>
        <div class="col-4">
            <div class="single">
                <a href="https://hyiprio.tdevs.co/user/deposit">
                    <div class="icon"><img src="https://hyiprio.tdevs.co/assets/frontend/materials/deposit.png" alt="">
                    </div>
                    <div class="name">Deposit</div>
                </a>
            </div>
        </div>
        
        <div class="col-4">
            <div class="single">
                <a href="https://hyiprio.tdevs.co/user/wallet-exchange">
                    <div class="icon"><img src="https://hyiprio.tdevs.co/assets/frontend/materials/wallet-exchange.png" alt="">
                    </div>
                    <div class="name">Wallet Exch.</div>
                </a>
            </div>
        </div>
    </div>
    <div class="moretext">
        <div class="row contents">
            <div class="col-4">
                <div class="single">
                    <a href="https://hyiprio.tdevs.co/user/send-money">
                        <div class="icon"><img src="https://hyiprio.tdevs.co/assets/frontend/materials/transfer.png" alt="">
                        </div>
                        <div class="name">Transfer</div>
                    </a>
                </div>
            </div>
            
            <div class="col-4">
                <div class="single">
                    <a href="https://hyiprio.tdevs.co/user/withdraw">
                        <div class="icon"><img src="https://hyiprio.tdevs.co/assets/frontend/materials/withdraw.png" alt="">
                        </div>
                        <div class="name">Withdraw</div>
                    </a>
                </div>
            </div>
          
            <div class="col-4">
                <div class="single">
                    <a href="{{ route('user.ranking') }}">
                        <div class="icon"><img src="https://hyiprio.tdevs.co/assets/frontend/materials/ranking.png" alt="">
                        </div>
                        <div class="name">Ranking Badge</div>
                    </a>
                </div>
            </div>
            <div class="col-4">
                <div class="single">
                    <a href="{{ route('user.referral') }}">
                        <div class="icon"><img src="https://hyiprio.tdevs.co/assets/frontend/materials/referral.png" alt="">
                        </div>
                        <div class="name">Referral</div>
                    </a>
                </div>
            </div>
            <div class="col-4">
                <div class="single">
                    <a href="{{ route('user.setting') }}">
                        <div class="icon"><img src="https://hyiprio.tdevs.co/assets/frontend/materials/settings.png" alt="">
                        </div>
                        <div class="name">Settings</div>
                    </a>
                </div>
            </div>
            <div class="col-4">
                <div class="single">
                    <a href="https://hyiprio.tdevs.co/user/support-ticket/index">
                        <div class="icon"><img src="https://hyiprio.tdevs.co/assets/frontend/materials/support-ticket.png" alt="">
                        </div>
                        <div class="name">Support Ticket</div>
                    </a>
                </div>
            </div>
            <div class="col-4">
                <div class="single">
                    <a href="https://hyiprio.tdevs.co/user/notification/all">
                        <div class="icon"><img src="https://hyiprio.tdevs.co/assets/frontend/materials/profile.png" alt="">
                        </div>
                        <div class="name">Notifications</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="centered">
        <button class="moreless-button site-btn-sm grad-btn">Load more</button>
    </div>
</div>

        <!-- all Statistic -->
        <div class="all-feature-mobile mb-3 mobile-screen-show">
    <div class="title">All Statistic</div>
    <div class="row">
        <div class="col-12">
            <div class="all-cards-mobile">
                <div class="contents row">
                    <div class="col-12">
                        <div class="single-card">
                            <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="arrow-left-right" icon-name="arrow-left-right" class="lucide lucide-arrow-left-right"><path d="M8 3 4 7l4 4"></path><path d="M4 7h16"></path><path d="m16 21 4-4-4-4"></path><path d="M20 17H4"></path></svg></div>
                            <div class="content">
                                <div class="amount count">1</div>
                                <div class="name">All Transactions</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="single-card">
                            <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="download" icon-name="download" class="lucide lucide-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" x2="12" y1="15" y2="3"></line></svg></div>
                            <div class="content">
                                <div class="amount">$<span class="count">0</span>
                                </div>
                                <div class="name">Total Deposit</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="single-card">
                            <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="box" icon-name="box" class="lucide lucide-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.29 7 12 12 20.71 7"></polyline><line x1="12" x2="12" y1="22" y2="12"></line></svg></div>
                            <div class="content">
                                <div class="amount">$<span class="count">0</span>
                                </div>
                                <div class="name">Total Investment</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="moretext-2">
                    <div class="contents row">
                        <div class="col-12">
                            <div class="single-card">
                                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="credit-card" icon-name="credit-card" class="lucide lucide-credit-card"><rect width="20" height="14" x="2" y="5" rx="2"></rect><line x1="2" x2="22" y1="10" y2="10"></line></svg></div>
                                <div class="content">
                                    <div class="amount"> $<span class="count">3</span>
                                    </div>
                                    <div class="name">Total Profit</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="single-card">
                                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="log-in" icon-name="log-in" class="lucide lucide-log-in"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path><polyline points="10 17 15 12 10 7"></polyline><line x1="15" x2="3" y1="12" y2="12"></line></svg></div>
                                <div class="content">
                                    <div class="amount">$<span class="count">0</span>
                                    </div>
                                    <div class="name">Total Transfer</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="single-card">
                                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="send" icon-name="send" class="lucide lucide-send"><line x1="22" x2="11" y1="2" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg></div>
                                <div class="content">
                                    <div class="amount"> $<span class="count">0</span>
                                    </div>
                                    <div class="name">Total Withdraw</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="single-card">
                                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="users-2" icon-name="users-2" class="lucide lucide-users-2"><path d="M14 19a6 6 0 0 0-12 0"></path><circle cx="8" cy="9" r="4"></circle><path d="M22 19a6 6 0 0 0-6-6 4 4 0 1 0 0-8"></path></svg></div>
                                <div class="content">
                                    <div class="amount"> $<span class="count">0</span>
                                    </div>
                                    <div class="name">Referral Bonus</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="single-card">
                                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="anchor" icon-name="anchor" class="lucide lucide-anchor"><circle cx="12" cy="5" r="3"></circle><line x1="12" x2="12" y1="22" y2="8"></line><path d="M5 12H2a10 10 0 0 0 20 0h-3"></path></svg></div>
                                <div class="content">
                                    <div class="amount">$<span class="count">0</span>
                                    </div>
                                    <div class="name">Deposit Bonus</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="single-card">
                                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="archive" icon-name="archive" class="lucide lucide-archive"><rect width="20" height="5" x="2" y="4" rx="2"></rect><path d="M4 9v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9"></path><path d="M10 13h4"></path></svg></div>
                                <div class="content">
                                    <div class="amount">$<span class="count">0</span>
                                    </div>
                                    <div class="name"> Investment Bonus</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="single-card">
                                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="gift" icon-name="gift" class="lucide lucide-gift"><polyline points="20 12 20 22 4 22 4 12"></polyline><rect width="20" height="5" x="2" y="7"></rect><line x1="12" x2="12" y1="22" y2="7"></line><path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path><path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path></svg></div>
                                <div class="content">
                                    <div class="amount count">0</div>
                                    <div class="name"> Total Referral</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="single-card">
                                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="award" icon-name="award" class="lucide lucide-award"><circle cx="12" cy="8" r="6"></circle><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"></path></svg></div>
                                <div class="content">
                                    <div class="amount count">0</div>
                                    <div class="name">Rank Achieved</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="single-card">
                                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="alert-triangle" icon-name="alert-triangle" class="lucide lucide-alert-triangle"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"></path><path d="M12 9v4"></path><path d="M12 17h.01"></path></svg>
                                </div>
                                <div class="content">
                                    <div class="amount count">0</div>
                                    <div class="name"> Total Ticket</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="centered">
                    <button class="moreless-button-2 site-btn-sm grad-btn">Load more</button>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- Recent Transactions -->
        <div class="all-feature-mobile mobile-transactions mb-3 mobile-screen-show">
    <div class="title">Recent Transactions</div>
    <div class="contents">

                    <div class="single-transaction">
                <div class="transaction-left">
                    <div class="transaction-des">
                        <div class="transaction-title">Signup Bonus
                        </div>
                        <div class="transaction-id">TRXZSNUENEWTO</div>
                        <div class="transaction-date">Jun 29 2025 12:42</div>
                    </div>
                </div>
                <div class="transaction-right">
                    <div class="transaction-amount ">
                        +3 USD</div>
                    <div class="transaction-fee sub">-0 USD Fee </div>
                    <div class="transaction-gateway">System</div>


                                            <div class="transaction-status success">Success</div>
                                    </div>
            </div>
            </div>
</div>
    </div>

    <div class="col-12">
        <div class="mobile-ref-url mb-4">
            <div class="all-feature-mobile">
                <div class="title">Referral URL</div>
                <div class="mobile-referral-link-form">
                    <input type="text" value="https://hyiprio.tdevs.co/register?invite=HXSN1HQYJl" id="refLink">
                    <button type="submit" onclick="copyRef()">
                        <span id="copy">Copy</span>
                    </button>
                </div>
                <p class="referral-joined">0 peoples are joined by using this URL</p>
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