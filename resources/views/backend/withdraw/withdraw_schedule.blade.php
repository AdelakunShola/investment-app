@extends('admin.admin_dashboard')
@section('admin')

<div class="main-content">
        <div class="page-title">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="title-content">
                            <h2 class="title">     Withdraw Schedule
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
                                                                                        <li class="active">
                                    <a href="https://hyiprio.tdevs.co/admin/withdraw/schedule"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="alarm-clock" icon-name="alarm-clock" class="lucide lucide-alarm-clock"><circle cx="12" cy="13" r="8"></circle><path d="M12 9v4l2 2"></path><path d="M5 3 2 6"></path><path d="m22 6-3-3"></path><path d="M6.38 18.7 4 21"></path><path d="M17.64 18.67 20 21"></path></svg>Withdraw Schedule</a>
                                </li>
                                                                                        <li class="">
                                    <a href="https://hyiprio.tdevs.co/admin/withdraw/history"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="calendar" icon-name="calendar" class="lucide lucide-calendar"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"></rect><line x1="16" x2="16" y1="2" y2="6"></line><line x1="8" x2="8" y1="2" y2="6"></line><line x1="3" x2="21" y1="10" y2="10"></line></svg>Withdraw History</a>
                                </li>
                                                    </ul>
                    </div>
                    <div class="row">
                            <div class="col-xl-7 col-md-12">
        <div class="site-card">
            <div class="site-card-header">
                <h3 class="title">Withdraw Schedule</h3>
            </div>
            <div class="site-card-body">
                <form action="https://hyiprio.tdevs.co/admin/withdraw/schedule-update" method="post">
                    <input type="hidden" name="_token" value="z89LczqwLs19OGuhSznl21Ba6BDATlu5Rjm1SJeD">
                    <div class="site-input-groups row">
                                                    <div class="col-sm-4 col-label pt-0">Sunday</div>
                            <div class="col-sm-8">
                                <div class="form-switch ps-0">
                                    <div class="switch-field">
                                        <input type="radio" id="active-1" name="Sunday" value="1" checked="">
                                        <label for="active-1">Enable</label>
                                        <input type="radio" id="disable-1" name="Sunday" value="0">
                                        <label for="disable-1">Disabled</label>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-sm-4 col-label pt-0">Monday</div>
                            <div class="col-sm-8">
                                <div class="form-switch ps-0">
                                    <div class="switch-field">
                                        <input type="radio" id="active-2" name="Monday" value="1" checked="">
                                        <label for="active-2">Enable</label>
                                        <input type="radio" id="disable-2" name="Monday" value="0">
                                        <label for="disable-2">Disabled</label>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-sm-4 col-label pt-0">Tuesday</div>
                            <div class="col-sm-8">
                                <div class="form-switch ps-0">
                                    <div class="switch-field">
                                        <input type="radio" id="active-3" name="Tuesday" value="1" checked="">
                                        <label for="active-3">Enable</label>
                                        <input type="radio" id="disable-3" name="Tuesday" value="0">
                                        <label for="disable-3">Disabled</label>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-sm-4 col-label pt-0">Wednesday</div>
                            <div class="col-sm-8">
                                <div class="form-switch ps-0">
                                    <div class="switch-field">
                                        <input type="radio" id="active-4" name="Wednesday" value="1" checked="">
                                        <label for="active-4">Enable</label>
                                        <input type="radio" id="disable-4" name="Wednesday" value="0">
                                        <label for="disable-4">Disabled</label>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-sm-4 col-label pt-0">Thursday</div>
                            <div class="col-sm-8">
                                <div class="form-switch ps-0">
                                    <div class="switch-field">
                                        <input type="radio" id="active-5" name="Thursday" value="1" checked="">
                                        <label for="active-5">Enable</label>
                                        <input type="radio" id="disable-5" name="Thursday" value="0">
                                        <label for="disable-5">Disabled</label>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-sm-4 col-label pt-0">Friday</div>
                            <div class="col-sm-8">
                                <div class="form-switch ps-0">
                                    <div class="switch-field">
                                        <input type="radio" id="active-6" name="Friday" value="1" checked="">
                                        <label for="active-6">Enable</label>
                                        <input type="radio" id="disable-6" name="Friday" value="0">
                                        <label for="disable-6">Disabled</label>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-sm-4 col-label pt-0">Saturday</div>
                            <div class="col-sm-8">
                                <div class="form-switch ps-0">
                                    <div class="switch-field">
                                        <input type="radio" id="active-7" name="Saturday" value="1" checked="">
                                        <label for="active-7">Enable</label>
                                        <input type="radio" id="disable-7" name="Saturday" value="0">
                                        <label for="disable-7">Disabled</label>
                                    </div>
                                </div>
                            </div>
                        
                    </div>

                    <div class="row">
                        <div class="offset-sm-4 col-sm-8">
                            <button type="submit" class="site-btn-sm primary-btn w-100">
                                Save Changes
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    @endsection
