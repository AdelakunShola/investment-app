@extends('admin.admin_dashboard')
@section('admin')

<div class="main-content">
    <div class="page-title">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="title-content">
                        <h2 class="title">Create Luxury Ad</h2>
                        <a href="{{ route('admin.luxury_ads.index') }}" class="title-btn">
                            <i class="lucide lucide-arrow-left"></i> Back to Listings
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-xl-12">
                <div class="site-card">
                    <div class="site-card-body">
                        <form action="{{ route('admin.luxury_ads.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="site-input-groups mb-3">
                                <label class="box-input-label">Ad Title:</label>
                                <input type="text" name="title" class="box-input" required placeholder="Enter ad title">
                            </div>

                            <div class="site-input-groups mb-3">
                                <label class="box-input-label">Image:</label>
                                <div class="wrap-custom-file">
                                    <input type="file" name="image" id="ad-image" accept=".jpg,.jpeg,.png,.svg,.webp">
                                    <label for="ad-image">
                                        <img class="upload-icon" src="{{ asset('assets/global/materials/upload.svg') }}" alt="">
                                        <span>Upload Image</span>
                                    </label>
                                </div>
                            </div>

                            <div class="site-input-groups mb-3">
    <label class="box-input-label">Category:</label>
    <select name="category_id" class="box-input" required>
        <option value="">-- Select Category --</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
</div>


                            <div class="site-input-groups mb-3">
                                <label class="box-input-label">Price (USD):</label>
                                <input type="number" step="0.01" name="price" class="box-input" placeholder="Enter price">
                            </div>

                            <div class="site-input-groups mb-3">
                                <label class="box-input-label">Condition:</label>
                                <select name="condition" class="box-input">
                                    <option value="">-- Select Condition --</option>
                                    <option value="New">New</option>
                                    <option value="Like New">Like New</option>
                                    <option value="Used">Used</option>
                                </select>
                            </div>

                            <div class="site-input-groups mb-3">
                                <label class="box-input-label">Dimensions (optional):</label>
                                <input type="text" name="dimensions" class="box-input" placeholder="e.g., 12x8x4 inches">
                            </div>

                            <div class="site-input-groups mb-3">
                                <label class="box-input-label">Location (optional):</label>
                                <input type="text" name="location" class="box-input" placeholder="e.g., Lagos, Nigeria">
                            </div>

                            <div class="site-input-groups mb-3">
                                <label class="box-input-label">Additional Specifications:</label>
                                <textarea name="specifications[notes]" class="form-textarea" rows="3" placeholder="Any special features or specifications..."></textarea>
                            </div>

                            <div class="site-input-groups mb-3">
                                <label class="box-input-label">Description:</label>
                                <textarea name="description" class="form-textarea" rows="5" placeholder="Describe the item..."></textarea>
                            </div>


                            <div class="site-input-groups mb-3">
    <label class="box-input-label d-block">Feature this Ad?</label>
    <label class="d-inline-flex align-items-center">
        <input type="checkbox" name="featured" value="1" class="me-2">
        <span>Yes, mark as featured</span>
    </label>
</div>


                            <div class="action-btns">
                                <button type="submit" class="site-btn-sm primary-btn me-2">
                                    <i class="lucide lucide-check"></i> Create Ad
                                </button>
                                <a href="{{ route('admin.luxury_ads.index') }}" class="site-btn-sm red-btn">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
