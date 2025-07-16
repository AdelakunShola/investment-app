@extends('admin.admin_dashboard')
@section('admin')

<div class="main-content">
    <div class="page-title">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="title-content">
                        <h2 class="title">Edit About Section</h2>
                        <a href="{{ route('admin.dashboard') }}" class="title-btn">
                            <i class="lucide lucide-arrow-left"></i> Back to Dashboard
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
                        <form action="{{ route('admin.about.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')

                            <div class="site-input-groups mb-3">
                                <label class="box-input-label">Title:</label>
                                <input type="text" name="title" class="box-input" value="{{ $about->title }}" required>
                            </div>

                            


                            <div class="site-input-groups mb-3">
                                <label class="box-input-label">Subtitle:</label>
                                <input type="text" name="subtitle" class="box-input" value="{{ $about->subtitle }}">
                            </div>

                            <div class="site-input-groups mb-3">
                                <label class="box-input-label">Short Description:</label>
                                <textarea name="short_description" class="form-textarea" rows="3">{{ $about->short_description }}</textarea>
                            </div>

                            <div class="site-input-groups mb-3">
                                <label class="box-input-label">Full Description:</label>
                                <textarea name="full_description" class="form-textarea" rows="5">{{ $about->full_description }}</textarea>
                            </div>



                            <div class="site-input-groups mb-3">
                                <label class="box-input-label">Email:</label>
                                <input type="email" name="email" class="box-input" value="{{ $about->email }}" required>
                            </div>

                            <div class="site-input-groups mb-3">
                                <label class="box-input-label">phone1:</label>
                                <input type="text" name="phone1" class="box-input" value="{{ $about->phone1 }}" required>
                            </div>

                            <div class="site-input-groups mb-3">
                                <label class="box-input-label">phone2:</label>
                                <input type="text" name="phone2" class="box-input" value="{{ $about->phone2 }}" required>
                            </div>

                            <div class="site-input-groups mb-3">
                                <label class="box-input-label">Address:</label>
                                <textarea name="address" class="form-textarea" rows="3">{{ $about->address }}</textarea>
                            </div>


                            <div class="site-input-groups mb-3">
                                <label class="box-input-label">Current Image:</label><br>
                                @if($about->image)
                                    <img src="{{ asset($about->image) }}" alt="About Image" width="150">
                                @endif
                            </div>

                            <div class="site-input-groups mb-3">
                                <label class="box-input-label">Update Image:</label>
                                <div class="wrap-custom-file">
                                    <input type="file" name="image" id="about-image" accept=".jpg,.jpeg,.png,.svg,.webp">
                                    <label for="about-image">
                                        <img class="upload-icon" src="{{ asset('assets/global/materials/upload.svg') }}" alt="">
                                        <span>Upload New Image</span>
                                    </label>
                                </div>
                            </div>

                            <div class="action-btns">
                                <button type="submit" class="site-btn-sm primary-btn me-2">
                                    <i class="lucide lucide-check"></i> Update About
                                </button>
                                <a href="{{ route('admin.dashboard') }}" class="site-btn-sm red-btn">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
