@extends('admin.admin_dashboard')
@section('admin') 
 <div class="main-content">
        <div class="page-title">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="title-content">
                            <h2 class="title">Hyiprio Dashboard</h2>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <div class="container-fluid">
            <div class="row">
                                                            <div class="col-xl-12">
                            <div class="admin-latest-announcements">
                                <div class="content"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="zap" icon-name="zap" class="lucide lucide-zap"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>Explore what's important to review first</div>
                                <div class="content">
                                                                                                                        <a href="https://hyiprio.tdevs.co/admin/withdraw/pending" class="site-btn-xs red-btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="loader" icon-name="loader" class="lucide lucide-loader spining-icon"><line x1="12" x2="12" y1="2" y2="6"></line><line x1="12" x2="12" y1="18" y2="22"></line><line x1="4.93" x2="7.76" y1="4.93" y2="7.76"></line><line x1="16.24" x2="19.07" y1="16.24" y2="19.07"></line><line x1="2" x2="6" y1="12" y2="12"></line><line x1="18" x2="22" y1="12" y2="12"></line><line x1="4.93" x2="7.76" y1="19.07" y2="16.24"></line><line x1="16.24" x2="19.07" y1="7.76" y2="4.93"></line></svg>Withdraw Requests
                                                (41)</a>
                                                                            
                                                                                                                        <a href="https://hyiprio.tdevs.co/admin/kyc/pending" class="site-btn-xs green-btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="loader" icon-name="loader" class="lucide lucide-loader spining-icon"><line x1="12" x2="12" y1="2" y2="6"></line><line x1="12" x2="12" y1="18" y2="22"></line><line x1="4.93" x2="7.76" y1="4.93" y2="7.76"></line><line x1="16.24" x2="19.07" y1="16.24" y2="19.07"></line><line x1="2" x2="6" y1="12" y2="12"></line><line x1="18" x2="22" y1="12" y2="12"></line><line x1="4.93" x2="7.76" y1="19.07" y2="16.24"></line><line x1="16.24" x2="19.07" y1="7.76" y2="4.93"></line></svg>KYC Requests
                                                (1099)</a>
                                                                            
                                                                                                                        <a href="https://hyiprio.tdevs.co/admin/deposit/manual-pending" class="site-btn-xs primary-btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="loader" icon-name="loader" class="lucide lucide-loader spining-icon"><line x1="12" x2="12" y1="2" y2="6"></line><line x1="12" x2="12" y1="18" y2="22"></line><line x1="4.93" x2="7.76" y1="4.93" y2="7.76"></line><line x1="16.24" x2="19.07" y1="16.24" y2="19.07"></line><line x1="2" x2="6" y1="12" y2="12"></line><line x1="18" x2="22" y1="12" y2="12"></line><line x1="4.93" x2="7.76" y1="19.07" y2="16.24"></line><line x1="16.24" x2="19.07" y1="7.76" y2="4.93"></line></svg>Deposit Requests
                                                (288)</a>
                                                                                                            </div>
                            </div>
                        </div>
                                </div>
            
            <div class="row">
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
        <div class="data-card">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="users" icon-name="users" class="lucide lucide-users"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
            </div>
            <div class="content">
                <h4 class="count">11826</h4>
                <p>Registered User</p>
            </div>
            <a class="link" href="https://hyiprio.tdevs.co/admin/user"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="external-link" icon-name="external-link" class="lucide lucide-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" x2="21" y1="14" y2="3"></line></svg></a>
        </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
        <div class="data-card">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="user-check" icon-name="user-check" class="lucide lucide-user-check"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><polyline points="16 11 18 13 22 9"></polyline></svg>
            </div>
            <div class="content">
                <h4 class="count">11826</h4>
                <p>Active Users</p>
            </div>
            <a class="link" href="https://hyiprio.tdevs.co/admin/user/active"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="external-link" icon-name="external-link" class="lucide lucide-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" x2="21" y1="14" y2="3"></line></svg></a>
        </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
        <div class="data-card">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="user-cog" icon-name="user-cog" class="lucide lucide-user-cog"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><circle cx="19" cy="11" r="2"></circle><path d="M19 8v1"></path><path d="M19 13v1"></path><path d="m21.6 9.5-.87.5"></path><path d="m17.27 12-.87.5"></path><path d="m21.6 12.5-.87-.5"></path><path d="m17.27 10-.87-.5"></path></svg>
            </div>
            <div class="content">
                <h4 class="count">2</h4>
                <p>Site Staff</p>
            </div>
            <a class="link" href="https://hyiprio.tdevs.co/admin/staff"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="external-link" icon-name="external-link" class="lucide lucide-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" x2="21" y1="14" y2="3"></line></svg></a>
        </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
        <div class="data-card">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="wallet" icon-name="wallet" class="lucide lucide-wallet"><path d="M21 12V7H5a2 2 0 0 1 0-4h14v4"></path><path d="M3 5v14a2 2 0 0 0 2 2h16v-5"></path><path d="M18 12a2 2 0 0 0 0 4h4v-4Z"></path></svg>
            </div>
            <div class="content">
                <h4>$<span class="count">448405</span></h4>
                <p>Total Deposits</p>
            </div>
            <a class="link" href="https://hyiprio.tdevs.co/admin/deposit/history"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="external-link" icon-name="external-link" class="lucide lucide-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" x2="21" y1="14" y2="3"></line></svg></a>
        </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
        <div class="data-card">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="landmark" icon-name="landmark" class="lucide lucide-landmark"><line x1="3" x2="21" y1="22" y2="22"></line><line x1="6" x2="6" y1="18" y2="11"></line><line x1="10" x2="10" y1="18" y2="11"></line><line x1="14" x2="14" y1="18" y2="11"></line><line x1="18" x2="18" y1="18" y2="11"></line><polygon points="12 2 20 7 4 7"></polygon></svg>
            </div>
            <div class="content">
                <h4>$<span class="count">200</span></h4>
                <p>Total Withdraw</p>
            </div>
            <a class="link" href="https://hyiprio.tdevs.co/admin/withdraw/history"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="external-link" icon-name="external-link" class="lucide lucide-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" x2="21" y1="14" y2="3"></line></svg></a>
        </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
        <div class="data-card">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="link" icon-name="link" class="lucide lucide-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
            </div>
            <div class="content">
                <h4 class="count">656</h4>
                <p>Total Referral</p>
            </div>
            <a class="link" href="https://hyiprio.tdevs.co/admin/referral/index"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="external-link" icon-name="external-link" class="lucide lucide-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" x2="21" y1="14" y2="3"></line></svg></a>
        </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
        <div class="data-card">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="send" icon-name="send" class="lucide lucide-send"><line x1="22" x2="11" y1="2" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
            </div>
            <div class="content">
                <h4>$<span class="count">6513.77</span></h4>
                <p>Total Send</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
        <div class="data-card">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="droplet" icon-name="droplet" class="lucide lucide-droplet"><path d="M12 22a7 7 0 0 0 7-7c0-2-1-3.9-3-5.5s-3.5-4-4-6.5c-.5 2.5-2 4.9-4 6.5C6 11.1 5 13 5 15a7 7 0 0 0 7 7z"></path></svg>
            </div>
            <div class="content">
                <h4>$<span class="count">185487</span></h4>
                <p>Total Investment</p>
            </div>
            <a class="link" href="https://hyiprio.tdevs.co/admin/investments"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="external-link" icon-name="external-link" class="lucide lucide-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" x2="21" y1="14" y2="3"></line></svg></a>
        </div>
    </div>


    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
        <div class="data-card">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="package-plus" icon-name="package-plus" class="lucide lucide-package-plus"><path d="M16 16h6"></path><path d="M19 13v6"></path><path d="M21 10V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l2-1.14"></path><path d="M16.5 9.4 7.55 4.24"></path><polyline points="3.29 7 12 12 20.71 7"></polyline><line x1="12" x2="12" y1="22" y2="12"></line></svg>
            </div>
            <div class="content">
                <h4>$<span class="count">559</span></h4>
                <p>Deposit Bonus</p>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
        <div class="data-card">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="sprout" icon-name="sprout" class="lucide lucide-sprout"><path d="M7 20h10"></path><path d="M10 20c5.5-2.5.8-6.4 3-10"></path><path d="M9.5 9.4c1.1.8 1.8 2.2 2.3 3.7-2 .4-3.5.4-4.8-.3-1.2-.6-2.3-1.9-3-4.2 2.8-.5 4.4 0 5.5.8z"></path><path d="M14.1 6a7 7 0 0 0-1.1 4c1.9-.1 3.3-.6 4.3-1.4 1-1 1.6-2.3 1.7-4.6-2.7.1-4 1-4.9 2z"></path></svg>
            </div>
            <div class="content">
                <h4>  $<span class="count">622.5</span></h4>
                <p>Investment Bonus</p>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
        <div class="data-card">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="webhook" icon-name="webhook" class="lucide lucide-webhook"><path d="M18 16.98h-5.99c-1.1 0-1.95.94-2.48 1.9A4 4 0 0 1 2 17c.01-.7.2-1.4.57-2"></path><path d="m6 17 3.13-5.78c.53-.97.1-2.18-.5-3.1a4 4 0 1 1 6.89-4.06"></path><path d="m12 6 3.13 5.73C15.66 12.7 16.9 13 18 13a4 4 0 0 1 0 8"></path></svg>
            </div>
            <div class="content">
                <h4 class="count">27</h4>
                <p>Total Automatic Gateway</p>
            </div>
            <a class="link" href="https://hyiprio.tdevs.co/admin/gateway/automatic"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="external-link" icon-name="external-link" class="lucide lucide-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" x2="21" y1="14" y2="3"></line></svg></a>
        </div>
    </div>

    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
        <div class="data-card">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="help-circle" icon-name="help-circle" class="lucide lucide-help-circle"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><path d="M12 17h.01"></path></svg>
            </div>
            <div class="content">
                <h4 class="count">169</h4>
                <p>Total Ticket</p>
            </div>
            <a class="link" href="https://hyiprio.tdevs.co/admin/support-ticket/index"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="external-link" icon-name="external-link" class="lucide lucide-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" x2="21" y1="14" y2="3"></line></svg></a>
        </div>
    </div>

</div>


            <div class="row">
                <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12">
                    <div class="site-chart">
                        <div class="site-card">
                            <div class="site-card-header">
                                <h3 class="title">Site Statistics</h3>
                                <div class="card-header-links">
                                    <input class="card-header-input" type="text" name="daterange" value="06/23/2025 - 06/30/2025">
                                </div>
                            </div>
                            <div class="site-card-body">
                                <canvas id="depositChart" width="612" height="306" style="display: block; box-sizing: border-box; height: 153px; width: 306px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="site-chart">
                        <div class="site-card">
                            <div class="site-card-header">
                                <h3 class="title">Scheme Statistics</h3>
                            </div>
                            <div class="site-card-body">
                                <canvas id="schemeChart" width="614" height="614" style="display: block; box-sizing: border-box; height: 307px; width: 307px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="site-chart">
                        <div class="site-card">
                            <div class="site-card-header">
                                <h3 class="title">Top Country Statistics</h3>
                            </div>
                            <div class="site-card-body">
                                <canvas id="countryChart" width="614" height="614" style="display: block; box-sizing: border-box; height: 307px; width: 307px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="site-chart">
                        <div class="site-card">
                            <div class="site-card-header">
                                <h3 class="title">Best Browser Statistics</h3>
                            </div>
                            <div class="site-card-body">
                                <canvas id="browserChart" width="614" height="614" style="display: block; box-sizing: border-box; height: 307px; width: 307px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="site-chart">
                        <div class="site-card">
                            <div class="site-card-header">
                                <h3 class="title">Best OS Statistics</h3>
                            </div>
                            <div class="site-card-body">
                                <canvas id="osChart" width="614" height="614" style="display: block; box-sizing: border-box; height: 307px; width: 307px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
    <div class="col-xl-12">
        <div class="site-card">
            <div class="site-card-header">
                <h3 class="title">Latest Registered User</h3>
            </div>
            <div class="site-card-body table-responsive">
                <div class="site-datatable">
                    <table class="data-table mb-0">
                        <thead>
                        <tr>
                            <th>Avatar</th>
                            <th>User</th>
                            <th>Email</th>
                            <th>Balance</th>
                            <th>Profit</th>
                            <th>KYC</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                                                    <tr>
                                <td>
                                                                            <span class="avatar-text">AJ</span>
                                                                    </td>
                                <td><a href="https://hyiprio.tdevs.co/admin/user/11882/edit" class="link">adam67</a></td>
                                <td>
                                    <strong>wo*************@gm******m</strong>
                                </td>
                                <td><strong>$0</strong></td>
                                <td><strong>$3</strong></td>
                                <td>
                                                                            <div class="site-badge pending">Unverified</div>
                                                                    </td>
                                <td>
                                                                            <div class="site-badge success">Active</div>
                                                                    </td>
                                <td>

                                    <a href="https://hyiprio.tdevs.co/admin/user/11882/edit" class="round-icon-btn primary-btn" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit User"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="edit-3" icon-name="edit-3" class="lucide lucide-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
                                    <span type="button" data-id="11882" data-name="Adam Jack" class="send-mail"><button class="round-icon-btn red-btn" data-bs-toggle="tooltip" title="" data-bs-original-title="Send Email"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="mail" icon-name="mail" class="lucide lucide-mail"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg></button></span>

                                </td>
                            </tr>
                                                    <tr>
                                <td>
                                                                            <span class="avatar-text">EL</span>
                                                                    </td>
                                <td><a href="https://hyiprio.tdevs.co/admin/user/11881/edit" class="link">Kedu</a></td>
                                <td>
                                    <strong>es*********@gm******m</strong>
                                </td>
                                <td><strong>$0</strong></td>
                                <td><strong>$3</strong></td>
                                <td>
                                                                            <div class="site-badge pending">Unverified</div>
                                                                    </td>
                                <td>
                                                                            <div class="site-badge success">Active</div>
                                                                    </td>
                                <td>

                                    <a href="https://hyiprio.tdevs.co/admin/user/11881/edit" class="round-icon-btn primary-btn" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit User"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="edit-3" icon-name="edit-3" class="lucide lucide-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
                                    <span type="button" data-id="11881" data-name="Esarom Lulu" class="send-mail"><button class="round-icon-btn red-btn" data-bs-toggle="tooltip" title="" data-bs-original-title="Send Email"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="mail" icon-name="mail" class="lucide lucide-mail"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg></button></span>

                                </td>
                            </tr>
                                                    <tr>
                                <td>
                                                                            <span class="avatar-text">mc</span>
                                                                    </td>
                                <td><a href="https://hyiprio.tdevs.co/admin/user/11880/edit" class="link">master2</a></td>
                                <td>
                                    <strong>us****@gm******m</strong>
                                </td>
                                <td><strong>$0</strong></td>
                                <td><strong>$3</strong></td>
                                <td>
                                                                            <div class="site-badge pending">Unverified</div>
                                                                    </td>
                                <td>
                                                                            <div class="site-badge success">Active</div>
                                                                    </td>
                                <td>

                                    <a href="https://hyiprio.tdevs.co/admin/user/11880/edit" class="round-icon-btn primary-btn" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit User"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="edit-3" icon-name="edit-3" class="lucide lucide-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
                                    <span type="button" data-id="11880" data-name="master2 chious" class="send-mail"><button class="round-icon-btn red-btn" data-bs-toggle="tooltip" title="" data-bs-original-title="Send Email"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="mail" icon-name="mail" class="lucide lucide-mail"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg></button></span>

                                </td>
                            </tr>
                                                    <tr>
                                <td>
                                                                            <span class="avatar-text">MR</span>
                                                                    </td>
                                <td><a href="https://hyiprio.tdevs.co/admin/user/11879/edit" class="link">Raydo92</a></td>
                                <td>
                                    <strong>ma**********@gm******m</strong>
                                </td>
                                <td><strong>$0</strong></td>
                                <td><strong>$3</strong></td>
                                <td>
                                                                            <div class="site-badge pending">Unverified</div>
                                                                    </td>
                                <td>
                                                                            <div class="site-badge success">Active</div>
                                                                    </td>
                                <td>

                                    <a href="https://hyiprio.tdevs.co/admin/user/11879/edit" class="round-icon-btn primary-btn" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit User"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="edit-3" icon-name="edit-3" class="lucide lucide-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
                                    <span type="button" data-id="11879" data-name="Marvin Raymundo" class="send-mail"><button class="round-icon-btn red-btn" data-bs-toggle="tooltip" title="" data-bs-original-title="Send Email"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="mail" icon-name="mail" class="lucide lucide-mail"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg></button></span>

                                </td>
                            </tr>
                                                    <tr>
                                <td>
                                                                            <span class="avatar-text">DL</span>
                                                                    </td>
                                <td><a href="https://hyiprio.tdevs.co/admin/user/11878/edit" class="link">Dan_ukbrudda</a></td>
                                <td>
                                    <strong>lo***********@gm******m</strong>
                                </td>
                                <td><strong>$0</strong></td>
                                <td><strong>$3</strong></td>
                                <td>
                                                                            <div class="site-badge pending">Unverified</div>
                                                                    </td>
                                <td>
                                                                            <div class="site-badge success">Active</div>
                                                                    </td>
                                <td>

                                    <a href="https://hyiprio.tdevs.co/admin/user/11878/edit" class="round-icon-btn primary-btn" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit User"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="edit-3" icon-name="edit-3" class="lucide lucide-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
                                    <span type="button" data-id="11878" data-name="Daniel Long" class="send-mail"><button class="round-icon-btn red-btn" data-bs-toggle="tooltip" title="" data-bs-original-title="Send Email"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="mail" icon-name="mail" class="lucide lucide-mail"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg></button></span>

                                </td>
                            </tr>
                                                <tr class="centered">
                            <td colspan="7">
                                                            </td>
                        </tr>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-12">
        <div class="site-card">
            <div class="site-card-header">
                <h3 class="title">Latest Investment</h3>
            </div>
            <div class="site-card-body table-responsive">
                <div class="site-datatable">
                    <table class="data-table mb-0">
                        <thead>
                        <tr>
                            <th>Avatar</th>
                            <th>User</th>
                            <th>Schema</th>
                            <th>ROI</th>
                            <th>Profit</th>
                            <th>Capital Back</th>
                            <th>Timeline</th>
                        </tr>
                        </thead>
                        <tbody>
                        
                            

                            <tr>
                                <td>
                                                                                                                <span class="avatar-text">ML</span>
                                                                    </td>
                                <td><a href="https://hyiprio.tdevs.co/admin/user/11781/edit" class="link">luisa1839</a></td>
                                <td>

                                    <strong> Standard Plan <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="arrow-big-right" icon-name="arrow-big-right" class="lucide lucide-arrow-big-right"><path d="M6 9h6V5l7 7-7 7v-4H6V9z"></path></svg> $1000
                                    </strong>

                                </td>
                                <td>
                                    <strong>$0</strong>
                                </td>

                                <td>
                                    <strong>0 x 0 = 0 USD</strong>
                                </td>
                                <td>
                                    <div class="site-badge pending">No</div>
                                </td>
                                <td>

                                                                            <div class="site-badge pending">Pending</div>
                                                                    </td>
                            </tr>
                        
                            

                            <tr>
                                <td>
                                                                                                                <span class="avatar-text">ML</span>
                                                                    </td>
                                <td><a href="https://hyiprio.tdevs.co/admin/user/11781/edit" class="link">luisa1839</a></td>
                                <td>

                                    <strong> Standard Plan <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="arrow-big-right" icon-name="arrow-big-right" class="lucide lucide-arrow-big-right"><path d="M6 9h6V5l7 7-7 7v-4H6V9z"></path></svg> $1000
                                    </strong>

                                </td>
                                <td>
                                    <strong>$0</strong>
                                </td>

                                <td>
                                    <strong>0 x 0 = 0 USD</strong>
                                </td>
                                <td>
                                    <div class="site-badge pending">No</div>
                                </td>
                                <td>

                                                                            <div class="site-badge pending">Pending</div>
                                                                    </td>
                            </tr>
                        
                            

                            <tr>
                                <td>
                                                                                                                <span class="avatar-text">ML</span>
                                                                    </td>
                                <td><a href="https://hyiprio.tdevs.co/admin/user/11781/edit" class="link">luisa1839</a></td>
                                <td>

                                    <strong> Standard Plan <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="arrow-big-right" icon-name="arrow-big-right" class="lucide lucide-arrow-big-right"><path d="M6 9h6V5l7 7-7 7v-4H6V9z"></path></svg> $1000
                                    </strong>

                                </td>
                                <td>
                                    <strong>$0</strong>
                                </td>

                                <td>
                                    <strong>0 x 0 = 0 USD</strong>
                                </td>
                                <td>
                                    <div class="site-badge pending">No</div>
                                </td>
                                <td>

                                                                            <div class="site-badge pending">Pending</div>
                                                                    </td>
                            </tr>
                        
                            

                            <tr>
                                <td>
                                                                                                                <span class="avatar-text">ML</span>
                                                                    </td>
                                <td><a href="https://hyiprio.tdevs.co/admin/user/11781/edit" class="link">luisa1839</a></td>
                                <td>

                                    <strong> 10000 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="arrow-big-right" icon-name="arrow-big-right" class="lucide lucide-arrow-big-right"><path d="M6 9h6V5l7 7-7 7v-4H6V9z"></path></svg> $10000
                                    </strong>

                                </td>
                                <td>
                                    <strong>$0</strong>
                                </td>

                                <td>
                                    <strong>0 x 0 = 0 USD</strong>
                                </td>
                                <td>
                                    <div class="site-badge pending">No</div>
                                </td>
                                <td>

                                                                            <div class="site-badge pending">Pending</div>
                                                                    </td>
                            </tr>
                        
                            

                            <tr>
                                <td>
                                                                                                                <span class="avatar-text">ML</span>
                                                                    </td>
                                <td><a href="https://hyiprio.tdevs.co/admin/user/11781/edit" class="link">luisa1839</a></td>
                                <td>

                                    <strong> 10000 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="arrow-big-right" icon-name="arrow-big-right" class="lucide lucide-arrow-big-right"><path d="M6 9h6V5l7 7-7 7v-4H6V9z"></path></svg> $10000
                                    </strong>

                                </td>
                                <td>
                                    <strong>$0</strong>
                                </td>

                                <td>
                                    <strong>0 x 0 = 0 USD</strong>
                                </td>
                                <td>
                                    <div class="site-badge pending">No</div>
                                </td>
                                <td>

                                                                            <div class="site-badge pending">Pending</div>
                                                                    </td>
                            </tr>
                                                <tr class="centered">
                            <td colspan="7">
                                                            </td>
                        </tr>
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