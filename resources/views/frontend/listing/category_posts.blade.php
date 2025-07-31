@extends('frontend.main_master')
@section('main')

<h3 class="mb-4">Posts in "{{ $category->name }}"</h3>

@foreach ($category->blogs as $post)
  <div class="card mb-3">
    <div class="card-body">
      <h5>{{ $post->title }}</h5>
      <p>{{ \Illuminate\Support\Str::limit($post->description, 150) }}</p>
      <a href="#">Read More</a>
    </div>
  </div>
@endforeach

@endsection
