@extends('user.user_dashboard')
@section('user')
<div class="main-content">
   <div class="section-gap">
      <div class="container-fluid">
         <div class="row">
            <div class="col-xl-12">
               <div class="site-card">
                  <div class="site-card-header">
                     <h3 class="title">Edit Ad</h3>
                  </div>
                  <div class="site-card-body">
                     @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                     @endif
                     @if($errors->any())
                        <div class="alert alert-danger">
                           <ul>
                              @foreach($errors->all() as $error)
                                 <li>{{ $error }}</li>
                              @endforeach
                           </ul>
                        </div>
                     @endif

                     <form method="POST" action="{{ route('user.blog.update', $ad->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                           <div class="col-xl-6 col-md-12 mb-3">
                              <label class="form-label">Title</label>
                              <input type="text" name="title" class="form-control" value="{{ $ad->title }}" required>
                           </div>

                           

                               <div class="col-xl-6 col-md-12 mb-3">
    <label class="form-label">Category:</label>
    <select name="category_id" class="form-select" >
        <option value="">-- Select Category --</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ $ad->category_id == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
</div>

                           <div class="col-xl-6 col-md-12 mb-3">
                              <label class="form-label">Price</label>
                              <input type="number" step="0.01" name="price" class="form-control" value="{{ $ad->price }}">
                           </div>

                           <div class="col-xl-6 col-md-12 mb-3">
                              <label class="form-label">Condition</label>
                              <select name="condition" class="form-select">
                                 <option value="">Select</option>
                                 <option value="New" {{ $ad->condition == 'New' ? 'selected' : '' }}>New</option>
                                 <option value="Like New" {{ $ad->condition == 'Like New' ? 'selected' : '' }}>Like New</option>
                                 <option value="Used" {{ $ad->condition == 'Used' ? 'selected' : '' }}>Used</option>
                              </select>
                           </div>

                           <div class="col-xl-6 col-md-12 mb-3">
                              <label class="form-label">Dimensions</label>
                              <input type="text" name="dimensions" class="form-control" value="{{ $ad->dimensions }}">
                           </div>

                           <div class="col-xl-6 col-md-12 mb-3">
                              <label class="form-label">Location</label>
                              <input type="text" name="location" class="form-control" value="{{ $ad->location }}">
                           </div>

                           <div class="col-12 mb-3">
                              <label class="form-label">Specifications (optional JSON or text)</label>
                              <textarea name="specifications" rows="4" class="form-control">{{ old('specifications', is_array($ad->specifications) ? json_encode($ad->specifications) : $ad->specifications) }}</textarea>
                           </div>

                           <div class="col-12 mb-3">
                              <label class="form-label">Description</label>
                              <textarea name="description" rows="4" class="form-control">{{ $ad->description }}</textarea>
                           </div>

                           <div class="col-12 mb-4">
                              <label class="form-label">Image</label>
                              <div class="wrap-custom-file">
                                 <input type="file" name="image" id="image" accept=".jpg,.jpeg,.png">
                                 <label for="image">
                                    <img class="upload-icon" src="https://hyiprio.tdevs.co/assets/global/materials/upload.svg" alt="">
                                    <span>Upload New Image</span>
                                 </label>
                              </div>
                              @if($ad->image)
                                 <div class="mt-2">
                                    <img src="{{ asset($ad->image) }}" width="100" alt="Current Image">
                                 </div>
                              @endif
                           </div>

                           <div class="col-12">
                              <button type="submit" class="site-btn blue-btn">Update Ad</button>
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
@endsection
