@extends('admin.admin_dashboard')
@section('admin')

<div class="main-content">
    <div class="page-title">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="title-content">
                        <h2 class="title">All Luxury Ads</h2>
                        <a href="{{ route('admin.luxury_ads.create') }}" class="title-btn">
                            <i class="lucide lucide-plus"></i> Add New Ad
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
                    <div class="site-card-body table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Condition</th>
                                    <th>Location</th>
                                    <th>Status</th>
                                    <th>Created</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($luxuryAds as $index => $ad)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>
                                         <img src="{{ asset($ad->image) }}" alt="Ad Image" width="60">

                                        </td>
                                        <td>{{ $ad->title }}</td>
                                        <td>{{ $ad->category ?? 'N/A' }}</td>
                                        <td>${{ number_format($ad->price, 2) }}</td>
                                        <td>{{ $ad->condition }}</td>
                                        <td>{{ $ad->location ?? '—' }}</td>
                                        <td>
                                            <span class="badge bg-{{ $ad->status ? 'success' : 'secondary' }}">
                                                {{ $ad->status ? 'Published' : 'Draft' }}
                                            </span>
                                        </td>
                                        <td>{{ $ad->created_at->diffForHumans() }}</td>
                                      <td>
    <a href="{{ route('admin.blog.edit', $ad->id) }}" class="btn btn-sm btn-primary">
        <i class="lucide lucide-pencil"></i>
    </a>

    <form action="{{ route('admin.luxury_ads.destroy', $ad->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Delete this ad?')">
        @csrf
        @method('DELETE')
        <button class="btn btn-sm btn-danger">
            <i class="lucide lucide-trash-2"></i>
        </button>
    </form>
</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="10" class="text-center">No luxury ads found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        {{-- Pagination if applicable --}}
                        <div class="mt-3">
                            {{ $luxuryAds->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
