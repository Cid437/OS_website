@extends('layout')

@section('title','Home - VideoSite')

@section('content')
  <div class="row">
    <div class="col-12">
      <h1 class="mb-3">Welcome to VideoSite</h1>
      <p class="lead">A very small demo site showing embedded YouTube videos.</p>
    </div>
  </div>

  <div class="row g-3">
    <div class="col-md-6">
      <div class="card video-card p-2">
        <div class="card-body">
          <h5 class="card-title">Featured Video: Laravel Tips</h5>
          <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/1ONc0QvRWJY" title="YouTube video" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card video-card p-2">
        <div class="card-body">
          <h5 class="card-title">Featured Video: Quick JavaScript</h5>
          <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/4iQ0q0wqvX8" title="YouTube video" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
