@extends('admin.admin_dashboard')
@section('admin')


<div class="main-content">
        <div class="page-title">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="title-content">
                            <h2 class="title">Edit Schema</h2>
                            <a href="https://hyiprio.tdevs.co/admin/schema" class="title-btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="corner-down-left" icon-name="corner-down-left" class="lucide lucide-corner-down-left"><polyline points="9 10 4 15 9 20"></polyline><path d="M20 4v7a4 4 0 0 1-4 4H4"></path></svg>Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-12 col-md-12">
                    <div class="site-card">
                        <div class="site-card-body">
           <form action="{{ route('admin.investment-plans.update', $plan->id) }}" method="POST" enctype="multipart/form-data" class="row">
    @csrf


    <div class="col-xl-12">
        <div class="row">
            <div class="col-xl-3">
                <div class="site-input-groups">
                    <label class="box-input-label" for="">Upload Icon:</label>
                    <div class="wrap-custom-file">
                        <input type="file" name="icon" id="schema-icon" accept=".gif, .jpg, .png">
                        <label for="schema-icon">
                            <img class="upload-icon" src="{{ asset('storage/' . $plan->icon) }}" alt="">
                            <span>Upload Avatar</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6 schema-name">
        <div class="site-input-groups">
            <label class="box-input-label">Schema Name:</label>
            <input type="text" name="name" class="box-input" value="{{ $plan->name }}">
        </div>
    </div>

    <div class="col-xl-6 schema-badge">
        <div class="site-input-groups">
            <label class="box-input-label">Schema Badge:</label>
            <input type="text" name="badge" class="box-input" value="{{ $plan->badge }}">
        </div>
    </div>

    <div class="col-xl-6">
        <div class="site-input-groups row">
            <div class="col-xl-12 schema-fixed-amount">
                <label class="box-input-label">Min Amount:</label>
                <div class="input-group joint-input">
                    <input type="text" name="min_amount" class="form-control" value="{{ $plan->min_amount }}">
                    <span class="input-group-text">USD</span>
                </div>
            </div>
        </div>
    </div>


     <div class="col-xl-6">
        <div class="site-input-groups row">
            <div class="col-xl-12 schema-fixed-amount">
                <label class="box-input-label">Max Amount:</label>
                <div class="input-group joint-input">
                    <input type="text" name="max_amount" class="form-control" value="{{ $plan->max_amount }}">
                    <span class="input-group-text">USD</span>
                </div>
            </div>
        </div>
    </div>


    <div class="col-xl-6">
        <div class="site-input-groups row">
            <div class="col-xl-12 schema-fixed-amount">
                <label class="box-input-label">Fixed Weekly Interest Amount:</label>
                <div class="input-group joint-input">
                    <input type="text" name="weekly_interest" class="form-control" value="{{ $plan->weekly_interest }}">
                    <span class="input-group-text">%</span>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-12">
        <button type="submit" class="site-btn-sm primary-btn w-100">Update Schema</button>
    </div>
</form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection