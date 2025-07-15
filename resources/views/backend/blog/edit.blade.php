@extends('admin.admin_dashboard')
@section('admin')

<div class="main-content">
    <div class="page-title">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="title-content">
                        <h2 class="title">Edit Luxury Ad</h2>
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
                        <form action="{{ route('admin.blog.update', $ad->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="site-input-groups mb-3">
                                <label class="box-input-label">Ad Title:</label>
                                <input type="text" name="title" class="box-input" value="{{ $ad->title }}" required>
                            </div>

                            <div class="site-input-groups mb-3">
                                <label class="box-input-label">Image:</label>
                                <div class="wrap-custom-file">
                                    <input type="file" name="image" id="ad-image" accept=".jpg,.jpeg,.png,.svg,.webp">
                                    <label for="ad-image">
                                        <img class="upload-icon" src="{{ asset('assets/global/materials/upload.svg') }}" alt="">
                                        <span>Change Image</span>
                                    </label>
                                </div>
                                @if($ad->image)
                                    <div class="mt-2">
                                        <img src="{{ asset('storage/' . $ad->image) }}" width="100">
                                    </div>
                                @endif
                            </div>

                            <div class="site-input-groups mb-3">
                                <label class="box-input-label">Category:</label>
                                <input type="text" name="category" class="box-input" value="{{ $ad->category }}">
                            </div>

                            <div class="site-input-groups mb-3">
                                <label class="box-input-label">Price (USD):</label>
                                <input type="number" step="0.01" name="price" class="box-input" value="{{ $ad->price }}">
                            </div>

                            <div class="site-input-groups mb-3">
                                <label class="box-input-label">Condition:</label>
                                <select name="condition" class="box-input">
                                    <option value="">-- Select Condition --</option>
                                    <option value="New" {{ $ad->condition === 'New' ? 'selected' : '' }}>New</option>
                                    <option value="Like New" {{ $ad->condition === 'Like New' ? 'selected' : '' }}>Like New</option>
                                    <option value="Used" {{ $ad->condition === 'Used' ? 'selected' : '' }}>Used</option>
                                </select>
                            </div>

                            <div class="site-input-groups mb-3">
                                <label class="box-input-label">Dimensions:</label>
                                <input type="text" name="dimensions" class="box-input" value="{{ $ad->dimensions }}">
                            </div>

                            <div class="site-input-groups mb-3">
                                <label class="box-input-label">Location:</label>
                                <input type="text" name="location" class="box-input" value="{{ $ad->location }}">
                            </div>

                            <div class="site-input-groups mb-3">
                                <label class="box-input-label">Additional Specifications:</label>
                                <textarea name="specifications[notes]" class="form-textarea">{{ $ad->specifications ?? '' }}</textarea>
                            </div>

                            <div class="site-input-groups mb-3">
                                <label class="box-input-label">Description:</label>
                                <textarea name="description" class="form-textarea" rows="5">{{ $ad->description }}</textarea>
                            </div>

                         

                            <div class="action-btns">
                                <button type="submit" class="site-btn-sm primary-btn me-2">
                                    <i class="lucide lucide-check"></i> Save Changes
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
