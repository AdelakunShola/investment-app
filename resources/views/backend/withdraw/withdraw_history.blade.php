@extends('admin.admin_dashboard')
@section('admin')


<div class="main-content">
        <div class="page-title">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="title-content">
                            <h2 class="title">     Withdraw History
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
                                                            <li class="">
                                    <a href="https://hyiprio.tdevs.co/admin/withdraw/pending"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="anchor" icon-name="anchor" class="lucide lucide-anchor"><circle cx="12" cy="5" r="3"></circle><line x1="12" x2="12" y1="22" y2="8"></line><path d="M5 12H2a10 10 0 0 0 20 0h-3"></path></svg>Pending Withdraws</a>
                                </li>
                                                        
                                <li class="">
                                    <a href="https://hyiprio.tdevs.co/admin/withdraw/method/list/auto"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="banknote" icon-name="banknote" class="lucide lucide-banknote"><rect width="20" height="12" x="2" y="6" rx="2"></rect><circle cx="12" cy="12" r="2"></circle><path d="M6 12h.01M18 12h.01"></path></svg>Automatic Method</a>
                                </li>

                                <li class="">
                                    <a href="https://hyiprio.tdevs.co/admin/withdraw/method/list/manual"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="landmark" icon-name="landmark" class="lucide lucide-landmark"><line x1="3" x2="21" y1="22" y2="22"></line><line x1="6" x2="6" y1="18" y2="11"></line><line x1="10" x2="10" y1="18" y2="11"></line><line x1="14" x2="14" y1="18" y2="11"></line><line x1="18" x2="18" y1="18" y2="11"></line><polygon points="12 2 20 7 4 7"></polygon></svg>Manual Method</a>
                                </li>
                                                                                        <li class="">
                                    <a href="https://hyiprio.tdevs.co/admin/withdraw/schedule"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="alarm-clock" icon-name="alarm-clock" class="lucide lucide-alarm-clock"><circle cx="12" cy="13" r="8"></circle><path d="M12 9v4l2 2"></path><path d="M5 3 2 6"></path><path d="m22 6-3-3"></path><path d="M6.38 18.7 4 21"></path><path d="M17.64 18.67 20 21"></path></svg>Withdraw Schedule</a>
                                </li>
                                                                                        <li class="active">
                                    <a href="https://hyiprio.tdevs.co/admin/withdraw/history"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="calendar" icon-name="calendar" class="lucide lucide-calendar"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"></rect><line x1="16" x2="16" y1="2" y2="6"></line><line x1="8" x2="8" y1="2" y2="6"></line><line x1="3" x2="21" y1="10" y2="10"></line></svg>Withdraw History</a>
                                </li>
                                                    </ul>
                    </div>
                    <div class="row">
                        
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="site-table table-responsive">
                    <form action="https://hyiprio.tdevs.co/admin/withdraw/history" method="get">
                        <div class="table-filter d-flex justify-content-between">
                            <div class="filter d-flex">
                                <div class="search">
                                    <input type="text" id="search" name="query" value="" placeholder="Search">
                                </div>
                                <button type="submit" class="apply-btn ms-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="search" class="lucide lucide-search"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></svg>Search</button>
                            </div>
                            <div class="filter d-flex">
                                <select class="form-select form-select-sm" name="status" aria-label=".form-select-sm example">
                                    <option value="" selected="">Filter By Status</option>
                                    <option value="success">Success</option>
                                    <option value="pending">Pending</option>
                                    <option value="failed">Failed</option>
                                </select>
                            </div>
                        </div>
                    </form>
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
                                                    <tr>
                                <td>Mar 11 2024 10:04</td>
                                <td><a class="link" href="https://hyiprio.tdevs.co/admin/user/5654/edit">redqfethi3780</a></td>
                                <td>TRXVQJRGHMXB9</td>
                                <td><strong class="green-color">+50 USD</strong></td>
                                <td>0.5 USD</td>
                                <td>Binance USDT</td>
                                <td><div class="site-badge pending">Pending</div>
    </td>
                            </tr>
                                                    <tr>
                                <td>Mar 04 2024 12:48</td>
                                <td><a class="link" href="https://hyiprio.tdevs.co/admin/user/5225/edit">DariusEluk4192</a></td>
                                <td>TRXY3W6L7LRTC</td>
                                <td><strong class="green-color">+325 USD</strong></td>
                                <td>16.25 USD</td>
                                <td>Paypal</td>
                                <td><div class="site-badge pending">Pending</div>
    </td>
                            </tr>
                                                    <tr>
                                <td>Mar 04 2024 12:27</td>
                                <td><a class="link" href="https://hyiprio.tdevs.co/admin/user/1601/edit">ab12345</a></td>
                                <td>TRX1AMU8FI0DI</td>
                                <td><strong class="green-color">+150 USD</strong></td>
                                <td>7.5 USD</td>
                                <td>Bank Transfer</td>
                                <td><div class="site-badge pending">Pending</div>
    </td>
                            </tr>
                                                    <tr>
                                <td>Mar 03 2024 08:00</td>
                                <td><a class="link" href="https://hyiprio.tdevs.co/admin/user/5225/edit">DariusEluk4192</a></td>
                                <td>TRXANBMLU5USA</td>
                                <td><strong class="green-color">+70 USD</strong></td>
                                <td>0.7 USD</td>
                                <td>Binance USDT</td>
                                <td><div class="site-badge pending">Pending</div>
    </td>
                            </tr>
                                                    <tr>
                                <td>Feb 29 2024 08:04</td>
                                <td><a class="link" href="https://hyiprio.tdevs.co/admin/user/3557/edit">JUMAMOHAMEDI4179</a></td>
                                <td>TRXDRAFMHEHMP</td>
                                <td><strong class="green-color">+100 USD</strong></td>
                                <td>2 USD</td>
                                <td>Tether USDT (TRC20)</td>
                                <td><div class="site-badge pending">Pending</div>
    </td>
                            </tr>
                                                    <tr>
                                <td>Feb 15 2024 08:30</td>
                                <td><a class="link" href="https://hyiprio.tdevs.co/admin/user/4688/edit">AlfaMwangi3172</a></td>
                                <td>TRXQZCS9X6VQ8</td>
                                <td><strong class="green-color">+100 USD</strong></td>
                                <td>5 USD</td>
                                <td>Paypal</td>
                                <td><div class="site-badge pending">Pending</div>
    </td>
                            </tr>
                                                    <tr>
                                <td>Feb 10 2024 02:34</td>
                                <td><a class="link" href="https://hyiprio.tdevs.co/admin/user/3252/edit">IsschaInderfurth5864</a></td>
                                <td>TRXSV1IMLVWA8</td>
                                <td><strong class="green-color">+380 USD</strong></td>
                                <td>19 USD</td>
                                <td>Paypal</td>
                                <td><div class="site-badge pending">Pending</div>
    </td>
                            </tr>
                                                    <tr>
                                <td>Feb 05 2024 04:54</td>
                                <td><a class="link" href="https://hyiprio.tdevs.co/admin/user/1601/edit">ab12345</a></td>
                                <td>TRX8GKQNT031C</td>
                                <td><strong class="green-color">+60 USD</strong></td>
                                <td>3 USD</td>
                                <td>Paypal</td>
                                <td><div class="site-badge pending">Pending</div>
    </td>
                            </tr>
                                                    <tr>
                                <td>Feb 04 2024 10:17</td>
                                <td><a class="link" href="https://hyiprio.tdevs.co/admin/user/1601/edit">ab12345</a></td>
                                <td>TRXO4CTV8U7JB</td>
                                <td><strong class="green-color">+200 USD</strong></td>
                                <td>10 USD</td>
                                <td>Bank Transfer</td>
                                <td><div class="site-badge pending">Pending</div>
    </td>
                            </tr>
                                                    <tr>
                                <td>Jan 30 2024 04:02</td>
                                <td><a class="link" href="https://hyiprio.tdevs.co/admin/user/1601/edit">ab12345</a></td>
                                <td>TRX8DP04NN74E</td>
                                <td><strong class="green-color">+150 USD</strong></td>
                                <td>7.5 USD</td>
                                <td>Bank Transfer</td>
                                <td><div class="site-badge pending">Pending</div>
    </td>
                            </tr>
                                                </tbody>
                    </table>
                    <div class="site-pagination">
    <nav aria-label="...">
        <ul class="pagination">
                            <li class="page-item disabled">
                    <a class="page-link">Prev</a>
                </li>
            
                                                                                                <li class="page-item active"><span class="page-link">1</span></li>
                                                                                <li class="page-item">
                            <a class="page-link" href="https://hyiprio.tdevs.co/admin/withdraw/history?page=2&amp;">2</a>
                        </li>
                                                                                <li class="page-item">
                            <a class="page-link" href="https://hyiprio.tdevs.co/admin/withdraw/history?page=3&amp;">3</a>
                        </li>
                                                                                <li class="page-item">
                            <a class="page-link" href="https://hyiprio.tdevs.co/admin/withdraw/history?page=4&amp;">4</a>
                        </li>
                                                                                <li class="page-item">
                            <a class="page-link" href="https://hyiprio.tdevs.co/admin/withdraw/history?page=5&amp;">5</a>
                        </li>
                                                                                <li class="page-item">
                            <a class="page-link" href="https://hyiprio.tdevs.co/admin/withdraw/history?page=6&amp;">6</a>
                        </li>
                                                                                <li class="page-item">
                            <a class="page-link" href="https://hyiprio.tdevs.co/admin/withdraw/history?page=7&amp;">7</a>
                        </li>
                                                                                <li class="page-item">
                            <a class="page-link" href="https://hyiprio.tdevs.co/admin/withdraw/history?page=8&amp;">8</a>
                        </li>
                                                                                <li class="page-item">
                            <a class="page-link" href="https://hyiprio.tdevs.co/admin/withdraw/history?page=9&amp;">9</a>
                        </li>
                                                                                <li class="page-item">
                            <a class="page-link" href="https://hyiprio.tdevs.co/admin/withdraw/history?page=10&amp;">10</a>
                        </li>
                                                                                <li class="page-item">
                            <a class="page-link" href="https://hyiprio.tdevs.co/admin/withdraw/history?page=11&amp;">11</a>
                        </li>
                                                            
                            <li class="page-item">
                    <a class="page-link" rel="next" href="https://hyiprio.tdevs.co/admin/withdraw/history?page=2&amp;">
                        Next
                    </a>
                </li>
            
        </ul>
    </nav>
</div>

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
