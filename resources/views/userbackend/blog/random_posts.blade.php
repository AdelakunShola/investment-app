@extends('user.user_dashboard')
@section('user')



<div class="main-content py-4">
   <div class="container">
      <div class="d-flex justify-content-between align-items-center mb-4">
         <h3 class="title">Explore Daily Task</h3>
         <a href="{{ route('user.dashboard') }}" class="btn btn-sm btn-secondary">← Back to Dashboard</a>
      </div>

      <div class="row">
         @foreach($post as $post)
        <div class="col-md-6 col-lg-4 mb-4">
    <div class="card h-100 shadow-sm">
        @if($post->image)
        <a href="#" class="open-post-modal" 
           data-id="{{ $post->id }}"
           data-title="{{ $post->title }}"
           data-description="{{ strip_tags($post->description) }}"
           data-price="{{ number_format($post->price ?? 0, 2) }}"
           data-image="{{ asset($post->image) }}"
           data-created="{{ $post->created_at->diffForHumans() }}">
            <img src="{{ asset($post->image) }}" class="card-img-top" alt="Post Image">
        </a>
        @endif
        <div class="card-body">
           <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text text-muted">{{ Str::limit($post->description, 100) }}</p>
           <button
  class="btn btn-primary mt-auto openPostModal"
  data-bs-toggle="modal"
  data-bs-target="#postModal"
  data-title="{{ $post->title }}"
  data-description="{{ $post->description }}"
  data-price="{{ $post->price }}"
  data-condition="{{ $post->condition }}"
  data-dimensions="{{ $post->dimensions }}"
  data-location="{{ $post->location }}"
  data-category="{{ $post->category }}"
  data-specifications="{{ $post->specifications }}"
  data-image="{{ asset($post->image) }}"
  data-created="{{ $post->created_at->format('F j, Y') }}"
>
  View Details
</button>

            <p class="text-primary fw-bold">${{ number_format($post->price ?? 0, 2) }}</p>
        </div>

         <div class="card-footer d-flex justify-content-between align-items-center">
                  <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
            <a href="#"
   onclick="@if(!auth()->check()) window.location.href='{{ route('user.register') }}'; @else shareAdWithReward('{{ route('ad.details', $post->id) }}'); @endif return false;"
   title="Share on Facebook">
   <i class="fas fa-share-alt"></i>
   <span class="favourite-label">Share</span>
</a>




               </div>
    </div>
</div>

         @endforeach
      </div>
   </div>
</div>




<!-- Post Details Modal -->
<div class="modal fade" id="postModal" tabindex="-1" aria-labelledby="postModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="postModalLabel">Post Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img id="modalImage" class="img-fluid mb-3" src="" alt="">
        <h4 id="modalTitle"></h4>
        <p id="modalDescription" class="text-muted"></p>
        <p class="fw-bold text-primary" id="modalPrice"></p>

        <p style="color: black"><strong>Condition:</strong> <span id="modalCondition"></span></p>
        <p style="color: black"><strong>Dimensions:</strong> <span id="modalDimensions"></span></p>
        <p style="color: black"><strong>Location:</strong> <span id="modalLocation"></span></p>
        <p style="color: black"><strong>Category:</strong> <span id="modalCategory"></span></p>
        <p style="color: black"><strong>Specifications:</strong> <span id="modalSpecs"></span></p>
        
        <p class="text-sm text-secondary"><strong>Posted on:</strong> <span id="modalCreated"></span></p>
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



<script>
  document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.openPostModal').forEach(button => {
      button.addEventListener('click', function () {
        document.getElementById('modalTitle').textContent = this.dataset.title;
        document.getElementById('modalDescription').textContent = this.dataset.description;
        document.getElementById('modalPrice').textContent = '₦' + parseFloat(this.dataset.price).toLocaleString();
        document.getElementById('modalCondition').textContent = this.dataset.condition || '-';
        document.getElementById('modalDimensions').textContent = this.dataset.dimensions || '-';
        document.getElementById('modalLocation').textContent = this.dataset.location || '-';
        document.getElementById('modalCategory').textContent = this.dataset.category || '-';

        // Handle specifications JSON
        const specs = JSON.parse(this.dataset.specifications || '{}');
        let specsHtml = '';
        for (const key in specs) {
          specsHtml += `<div><strong>${key}:</strong> ${specs[key]}</div>`;
        }
        document.getElementById('modalSpecs').innerHTML = specsHtml || '-';

        document.getElementById('modalCreated').textContent = this.dataset.created;
        document.getElementById('modalImage').src = this.dataset.image;
      });
    });
  });
</script>

@endsection
