@extends('user.user_dashboard')
@section('user')
<div class="main-content">
   <div class="section-gap">
      <div class="container-fluid">
         <!-- Desktop View -->
         <div class="row desktop-screen-show">
            <div class="col-xl-12">
               <div class="site-card">
                 

                  <div class="d-flex justify-content-between align-items-center">
     <h3 class="title">All My Ads</h3>
    <a href="{{ route('user.create.ads') }}" class="btn btn-primary btn-sm">
        <i class="fas fa-plus"></i> Add New Ad
    </a>
</div>

                  <div class="site-card-body">
                     <div class="site-table">
                        <div class="table-responsive">
                           <table class="table table-hover">
                              <thead>
                                 <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 @foreach($luxuryAds as $ad)
                                 <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                       @if($ad->image)
                                       <img src="{{ asset($ad->image) }}" width="60" height="40" style="object-fit: cover;" alt="Ad Image">
                                       @else
                                       N/A
                                       @endif
                                    </td>
                                    <td>{{ $ad->title }}</td>
                                    <td>{{ $ad->category ?? 'N/A' }}</td>
                                    <td>${{ number_format($ad->price, 2) }}</td>
                                   
                                    <td>{{ $ad->created_at->format('d M, Y h:i A') }}</td>

                                     <td>
    <a href="{{ route('user.blog.edit', $ad->id) }}" class="btn btn-sm btn-primary">
       <i class="fas fa-edit"></i>
    </a>

    <form action="{{ route('user.luxury_ads.destroy', $ad->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Delete this ad?')">
        @csrf
        @method('DELETE')
        <button class="btn btn-sm btn-danger">
              <i class="fas fa-trash-alt"></i> 
        </button>
    </form>
</td>
                                 </tr>
                                 @endforeach
                              </tbody>
                           </table>
                          
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- Mobile View -->
         <div class="row mobile-screen-show">
            <div class="col-12">
               <div class="site-card">
               
                   <div class="d-flex justify-content-between align-items-center">
    <h3 class="title">All My Ads</h3>
    <a href="{{ route('user.create.ads') }}" class="btn btn-primary btn-sm">
        <i class="fas fa-plus"></i> Add New Ad
    </a>
</div>
                  <div class="site-card-body">
                     @foreach($luxuryAds as $ad)
                     <div class="mb-3 border p-2 rounded">
                        <div class="d-flex align-items-center mb-2">
                           @if($ad->image)
                              <img src="{{ asset($ad->image) }}" width="60" height="40" class="me-2" style="object-fit: cover;" alt="Ad Image">
                           @endif
                           <div>
                              <strong>{{ $ad->title }}</strong><br>
                              <small class="text-muted">{{ $ad->created_at->format('d M, Y') }}</small>
                           </div>
                        </div>
                        <div><strong>Category:</strong> {{ $ad->category ?? 'N/A' }}</div>
                        <div><strong>Price:</strong> ${{ number_format($ad->price, 2) }}</div>
                        <div>
                           <strong>Featured:</strong>
                           <span class="badge {{ $ad->featured ? 'bg-success' : 'bg-secondary' }}">
                              {{ $ad->featured ? 'Yes' : 'No' }}
                           </span>
                        </div>
                        <div class="mt-2 d-flex gap-2">
    <a href="{{ route('user.blog.edit', $ad->id) }}" class="btn btn-sm btn-primary w-100">
        <i class="fas fa-edit"></i> Edit
    </a>
    <form action="{{ route('user.luxury_ads.destroy', $ad->id) }}" method="POST" class="w-100" onsubmit="return confirm('Delete this ad?')">
        @csrf
        @method('DELETE')
        <button class="btn btn-sm btn-danger w-100">
            <i class="fas fa-trash-alt"></i> Delete
        </button>
    </form>
</div>

                     </div>
                     @endforeach
                    
                  </div>
               </div>
            </div>
         </div>

      </div>
   </div>
</div>
@endsection
