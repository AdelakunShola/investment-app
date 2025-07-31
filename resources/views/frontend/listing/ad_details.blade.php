@extends('frontend.main_master')

@section('main')
@php
    $shareUrl = urlencode(route('ad.details', $ad->id));
    $user = Auth::user();
@endphp
      @php
    use App\Models\About;
    $about = About::first();
@endphp
<!-- Breadcrumb -->
<div class="breadcrumb__area black-bg breadcrumb__height breadcrumb__border">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 text-center">
                <div class="breadcrumb__content z-index">
                    <div class="breadcrumb__list text-white">
                        <span><a href="{{ url('/') }}">Home</a></span>
                        @if($ad->category)
                            &nbsp;/&nbsp;
                            <span><a href="#">{{ ucfirst($ad->category) }}</a></span>
                        @endif
                        &nbsp;/&nbsp;
                        <span>{{ $ad->title }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Ad Details -->
<div id="primary" class="tp-list-area pt-80 pb-80">
    <div class="container">
        <div class="row">
            <!-- Ad Content -->
            <div class="col-xl-9 col-lg-8">
                <div class="tp-list-details-wrap">
                    <div class="tp-list-details-box">
                        <!-- Title -->
                        <h4 class="tp-list-details-top-title">{{ $ad->title }}</h4>

                        <!-- Meta -->
                        <div class="tp-list-details-top-meta d-flex flex-wrap mb-15 gap-3">
                            <div><i class="fal fa-book"></i> <span><strong>ID:</strong> {{ $ad->id }}</span></div>
                            <div><i class="fal fa-map-marker-alt"></i> {{ $ad->location }}</div>
                            <div><i class="fal fa-calendar-alt"></i> {{ $ad->created_at->diffForHumans() }}</div>
                            <div><i class="fal fa-eye"></i> Views: <b>1302</b></div>
                        </div>

                        <!-- Social/Icons -->
                        <div class="tp-list-details-top-right d-flex align-items-center justify-content-between">
                            <div class="tp-list-details-top-icon-box d-flex">
                                <a href="#" class="text-dark" data-bs-toggle="modal" data-bs-target="#logoutModalCenter" title="Favourites">
                                    <i class="rtcl-icon rtcl-icon-heart-empty"></i>
                                    <span>Add to Favourites</span>
                                </a>
                            </div>

                            <div class="tp-list-details-top-social d-none d-md-block">
                                <span>Share</span>
                                   <a href="#"
   onclick="@if(!auth()->check()) window.location.href='{{ route('user.register') }}'; @else shareAdWithReward('{{ route('ad.details', $ad->id) }}'); @endif return false;"
   title="Share on Facebook">
   <i class="fas fa-share-alt"></i>
   <span class="favourite-label">Share</span>
</a>

                              <i class="fas fa-share-alt"></i>
                             
                            </div>
                        </div>

                        <!-- Image -->
                        <div class="tp-list-details-slider-wrap mt-30">
                            <div class="tp-list-details-slider-active">
                                <div class="slick-track" style="opacity: 1; width: 942px;">
                                   <div class="it-tp-list-details-slider-item slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 314px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;" tabindex="0">
   <img src="{{ asset($ad->image) }}" data-src="{{ asset($ad->image) }}" data-large_image="{{ asset($ad->image) }}" data-large_image_width="900" data-large_image_height="600" alt="{{ $ad->title }}" data-caption="" class="rtcl-responsive-img">
</div>

<div class="it-tp-list-details-slider-item slick-slide" data-slick-index="1" aria-hidden="true" style="width: 314px; position: relative; left: -314px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1">
   <img src="{{ asset($ad->image) }}" data-src="{{ asset($ad->image) }}" data-large_image="{{ asset($ad->image) }}" data-large_image_width="900" data-large_image_height="600" alt="{{ $ad->title }}" data-caption="" class="rtcl-responsive-img">
</div>

<div class="it-tp-list-details-slider-item slick-slide" data-slick-index="2" aria-hidden="true" style="width: 314px; position: relative; left: -628px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1">
   <img src="{{ asset($ad->image) }}" data-src="{{ asset($ad->image) }}" data-large_image="{{ asset($ad->image) }}" data-large_image_width="900" data-large_image_height="600" alt="{{ $ad->title }}" data-caption="" class="rtcl-responsive-img">
</div>

                                 </div>
                            </div>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="mt-4">
                        <p>{{ $ad->description }}</p>
                    </div>

                    <!-- Details -->
                    <ul class="list-group list-group-flush mt-4">
                        <li class="list-group-item"><strong>Condition:</strong> {{ $ad->condition }}</li>
                        <li class="list-group-item"><strong>Price:</strong> ${{ number_format($ad->price, 2) }}</li>
                        <li class="list-group-item"><strong>Location:</strong> {{ $ad->location }}</li>
                        <li class="list-group-item"><strong>Category:</strong> {{ $ad->category }}</li>
                        @if ($ad->dimensions)
                        <li class="list-group-item"><strong>Dimensions:</strong> {{ $ad->dimensions }}</li>
                        @endif
                        @if ($ad->specifications)
                            <li class="list-group-item"><strong>Specification:</strong> {{ $ad->specifications }}</li>
                        @endif
                    </ul>

                    <!-- Contact Info -->
                    <div class="mt-4">
                        <h5>Contact Info</h5>
                        <ul class="list-unstyled">
                            <li><strong>Phone:</strong> {{ $about->phone1 }}</li>
                            <li><strong>Phone:</strong> {{ $about->phone2 }}</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-xl-3 col-lg-4">
                <div class="sidebar-widget text-center p-3 bg-light rounded">
                    @if($user)
                        <h6 class="mb-3">Your Rank</h6>
                        @php
                            $ranking = optional($user->ranking);
                        @endphp
                        @if($ranking)
                            <img src="{{ asset('storage/' . $ranking->icon) }}" alt="Rank Badge" class="img-fluid mb-2" style="max-height: 80px;">
     
                            <p class="text-dark fw-bold">{{ $ranking->ranking }}</p>
                        @else
                            <p class="text-muted">No Rank Assigned</p>
                        @endif
                    @endif
                </div>
            </div>

        </div>
    </div>
</div>



<script>
   function shareAdWithReward(adUrl) {
    const isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);

    if (isMobile) {
        // Use Facebook app deep link on mobile
        const fbAppUrl = `fb://facewebmodal/f?href=https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(adUrl)}`;
        window.location.href = fbAppUrl;
    } else {
        // Use web-based sharing on desktop
        const fbShareUrl = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(adUrl)}`;
        window.open(fbShareUrl, '_blank', 'width=600,height=400');
    }

    // Reward user (optional - this can be triggered after a delay or via web hook in real use)
    fetch("{{ route('user.share.ad') }}", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": '{{ csrf_token() }}'
        },
        body: JSON.stringify({})
    })
    .then(response => response.json())
    .then(data => {
        if (data.status) {
            alert(`✅ ${data.message} $${data.amount} added to your profit.`);
        } else {
            alert(`⚠️ ${data.message}`);
        }
    })
    .catch(error => {
        console.error("Share error:", error);
        alert("⚠️ Something went wrong. Please try again.");
    });
}

</script>
@endsection
