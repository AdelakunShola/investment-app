@extends('admin.admin_dashboard')
@section('admin')

<div class="main-content">
        <div class="page-title">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="title-content">
                            <h2 class="title">     Deposit History
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
                                    <a href="https://hyiprio.tdevs.co/admin/deposit/method/list/auto"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="settings-2" icon-name="settings-2" class="lucide lucide-settings-2"><path d="M20 7h-9"></path><path d="M14 17H5"></path><circle cx="17" cy="17" r="3"></circle><circle cx="7" cy="7" r="3"></circle></svg>Automatic Method</a>
                                </li>
                            
                                                            <li class="">
                                    <a href="https://hyiprio.tdevs.co/admin/deposit/method/list/manual"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="book-open" icon-name="book-open" class="lucide lucide-book-open"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>Manual Method</a>
                                </li>
                                                                                        <li class="">
                                    <a href="https://hyiprio.tdevs.co/admin/deposit/manual-pending"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="box" icon-name="box" class="lucide lucide-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.29 7 12 12 20.71 7"></polyline><line x1="12" x2="12" y1="22" y2="12"></line></svg>Manual Pending Deposit</a>
                                </li>
                                <li class="active">
                                    <a href="https://hyiprio.tdevs.co/admin/deposit/history"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="calendar" icon-name="calendar" class="lucide lucide-calendar"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"></rect><line x1="16" x2="16" y1="2" y2="6"></line><line x1="8" x2="8" y1="2" y2="6"></line><line x1="3" x2="21" y1="10" y2="10"></line></svg>Deposit History</a>
                                </li>
                                                    </ul>
                    </div>
                    <div class="row">
                        
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="site-table table-responsive">
                    <form action="https://hyiprio.tdevs.co/admin/deposit/history" method="get">
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
                                <td>Dec 07 2024 10:41</td>
                                <td><a class="link" href="https://hyiprio.tdevs.co/admin/user/9173/edit">sdeaseads</a></td>
                                <td>TRXSXKC8JI2KD</td>
                                <td><strong class="green-color">+100 USD</strong></td>
                                <td>1 USD</td>
                                <td>Blockchain-btc</td>
                                <td><div class="site-badge pending">Pending</div>
    </td>
                            </tr>
                                                    <tr>
                                <td>Dec 07 2024 09:36</td>
                                <td><a class="link" href="https://hyiprio.tdevs.co/admin/user/9171/edit">Mennn</a></td>
                                <td>TRXFDXBFGBNY7</td>
                                <td><strong class="green-color">+100 USD</strong></td>
                                <td>0 USD</td>
                                <td>Cryptomus-bnb</td>
                                <td><div class="site-badge pending">Pending</div>
    </td>
                            </tr>
                                                    <tr>
                                <td>Dec 07 2024 04:21</td>
                                <td><a class="link" href="https://hyiprio.tdevs.co/admin/user/9171/edit">Mennn</a></td>
                                <td>TRXQR5NRLEWQR</td>
                                <td><strong class="green-color">+50 USD</strong></td>
                                <td>0.5 USD</td>
                                <td>Binance-usdt</td>
                                <td><div class="site-badge pending">Pending</div>
    </td>
                            </tr>
                                                    <tr>
                                <td>Dec 07 2024 02:05</td>
                                <td><a class="link" href="https://hyiprio.tdevs.co/admin/user/9168/edit">TOUFIK</a></td>
                                <td>TRXPTLY7MHENX</td>
                                <td><strong class="green-color">+100 USD</strong></td>
                                <td>1 USD</td>
                                <td>Binance-usdt</td>
                                <td><div class="site-badge pending">Pending</div>
    </td>
                            </tr>
                                                    <tr>
                                <td>Dec 06 2024 09:57</td>
                                <td><a class="link" href="https://hyiprio.tdevs.co/admin/user/9166/edit">613****259</a></td>
                                <td>TRXBYMJNIJZD4</td>
                                <td><strong class="green-color">+10 USD</strong></td>
                                <td>0.1 USD</td>
                                <td>Binance-usdt</td>
                                <td><div class="site-badge pending">Pending</div>
    </td>
                            </tr>
                                                    <tr>
                                <td>Dec 06 2024 09:57</td>
                                <td><a class="link" href="https://hyiprio.tdevs.co/admin/user/9166/edit">613****259</a></td>
                                <td>TRXXIVSNSKUSB</td>
                                <td><strong class="green-color">+10 USD</strong></td>
                                <td>0.1 USD</td>
                                <td>Binance-usdt</td>
                                <td><div class="site-badge pending">Pending</div>
    </td>
                            </tr>
                                                    <tr>
                                <td>Dec 06 2024 09:56</td>
                                <td><a class="link" href="https://hyiprio.tdevs.co/admin/user/9166/edit">613****259</a></td>
                                <td>TRXCYS9RXUXIN</td>
                                <td><strong class="green-color">+50 USD</strong></td>
                                <td>0.5 USD</td>
                                <td>Binance-usdt</td>
                                <td><div class="site-badge pending">Pending</div>
    </td>
                            </tr>
                                                    <tr>
                                <td>Dec 06 2024 06:42</td>
                                <td><a class="link" href="https://hyiprio.tdevs.co/admin/user/9090/edit">Utulu200</a></td>
                                <td>TRXKUFHZIPSOS</td>
                                <td><strong class="green-color">+50 USD</strong></td>
                                <td>1 USD</td>
                                <td>Perfectmoney-usd</td>
                                <td><div class="site-badge pending">Pending</div>
    </td>
                            </tr>
                                                    <tr>
                                <td>Dec 06 2024 03:52</td>
                                <td><a class="link" href="https://hyiprio.tdevs.co/admin/user/9160/edit">Mehamant</a></td>
                                <td>TRXSE7QRBMSVA</td>
                                <td><strong class="green-color">+10 USD</strong></td>
                                <td>0 USD</td>
                                <td>Coingate-btc</td>
                                <td><div class="site-badge pending">Pending</div>
    </td>
                            </tr>
                                                    <tr>
                                <td>Dec 06 2024 03:51</td>
                                <td><a class="link" href="https://hyiprio.tdevs.co/admin/user/9160/edit">Mehamant</a></td>
                                <td>TRXKHTEWUQQGK</td>
                                <td><strong class="green-color">+10 USD</strong></td>
                                <td>0.1 USD</td>
                                <td>Binance-usdt</td>
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
                            <a class="page-link" href="https://hyiprio.tdevs.co/admin/deposit/history?page=2&amp;">2</a>
                        </li>
                                                                                <li class="page-item">
                            <a class="page-link" href="https://hyiprio.tdevs.co/admin/deposit/history?page=3&amp;">3</a>
                        </li>
                                                                                <li class="page-item">
                            <a class="page-link" href="https://hyiprio.tdevs.co/admin/deposit/history?page=4&amp;">4</a>
                        </li>
                                                                                <li class="page-item">
                            <a class="page-link" href="https://hyiprio.tdevs.co/admin/deposit/history?page=5&amp;">5</a>
                        </li>
                                                                                <li class="page-item">
                            <a class="page-link" href="https://hyiprio.tdevs.co/admin/deposit/history?page=6&amp;">6</a>
                        </li>
                                                                                <li class="page-item">
                            <a class="page-link" href="https://hyiprio.tdevs.co/admin/deposit/history?page=7&amp;">7</a>
                        </li>
                                                                                <li class="page-item">
                            <a class="page-link" href="https://hyiprio.tdevs.co/admin/deposit/history?page=8&amp;">8</a>
                        </li>
                                                                                <li class="page-item">
                            <a class="page-link" href="https://hyiprio.tdevs.co/admin/deposit/history?page=9&amp;">9</a>
                        </li>
                                                                                <li class="page-item">
                            <a class="page-link" href="https://hyiprio.tdevs.co/admin/deposit/history?page=10&amp;">10</a>
                        </li>
                                                                                        <li class="page-item"><span class="page-link">...</span></li>
                                                                                                                        <li class="page-item">
                            <a class="page-link" href="https://hyiprio.tdevs.co/admin/deposit/history?page=386&amp;">386</a>
                        </li>
                                                                                <li class="page-item">
                            <a class="page-link" href="https://hyiprio.tdevs.co/admin/deposit/history?page=387&amp;">387</a>
                        </li>
                                                            
                            <li class="page-item">
                    <a class="page-link" rel="next" href="https://hyiprio.tdevs.co/admin/deposit/history?page=2&amp;">
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