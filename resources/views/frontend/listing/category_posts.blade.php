@extends('frontend.main_master')
@section('main')

<div class="breadcrumb__area black-bg breadcrumb__height breadcrumb__border">
   <div class="container">
      <div class="row">
         <div class="col-xxl-12">
            <div class="breadcrumb__content text-center z-index">
               <div class="breadcrumb__list">
                  <span><a href="{{ route('home') }}">Home</a></span>
                  &nbsp;/&nbsp;{{ $category->name }}
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div id="primary" class="tp-list-area pt-80 pb-80">
   <div class="container">
      <div class="tp-list-wrap">
         <div class="row">
            <div class="col-xl-9 col-lg-8">
               <h3 class="mb-4">Posts in "{{ $category->name }}"</h3>

               @foreach ($category->blogs as $post)
               <div class="tp-fea-ads-item tp-fea-ads-item-style-2 item-new item-featured mb-4">
                  <div class="row">
                     <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="tp-fea-ads-thumb-box p-relative">
                           <div class="tp-fea-ads-thumb">
                              <img src="{{ asset($post->image ?? 'default.jpg') }}" 
                                   class="rtcl-thumbnail" 
                                   width="400" height="300"
                                   alt="{{ $post->title }}">
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-8 col-lg-8 col-md-8">
                        <div class="tp-fea-ads-2-content">
                           <div class="tp-fea-ads-2-meta">
                              <span>{{ $category->name }}</span>
                              <span>{{ $post->created_at->diffForHumans() }}</span> 
                           </div>
                           <h4 class="tp-fea-ads-2-title">
                              <a href="{{ route('ad.details', $post->id) }}">{{ $post->title }}</a>
                           </h4>
                           <div class="tp-fea-ads-text">
                              {{ Str::limit($post->description, 120) }}
                           </div>
                           <div class="tp-fea-ads-2-price-box d-flex align-items-center justify-content-between">
                              <div></div> <!-- Empty for now -->
                              <div class="tp-list-details-top-social d-block">
                                 <span>Share</span>
                                 <a href="#"
                                    onclick="@if(!auth()->check()) window.location.href='{{ route('user.register') }}'; @else shareOnWhatsApp('{{ route('blog.details', $post->id) }}'); @endif return false;"
                                    title="Share on WhatsApp">
                                    <i class="fas fa-share-alt"></i> 
                                    <span class="favourite-label">Share</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach

            </div>
         </div>
      </div>
   </div>
</div>

<script>
function shareOnWhatsApp(postUrl) {
    const message = `Check out this post on {{ config('app.name') }}: ${postUrl}`;
    const waShareUrl = `https://wa.me/?text=${encodeURIComponent(message)}`;
    window.open(waShareUrl, '_blank');

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
        console.error("WhatsApp share error:", error);
        alert("⚠️ Something went wrong. Please try again.");
    });
}
</script>

@endsection
