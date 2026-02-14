@extends('layout')

@section('title','Activities - VideoSite')

@section('content')
  <div class="row mb-3">
    <div class="col-12 d-flex align-items-center justify-content-between">
      <h2>Activities</h2>
      <div>
        <label class="me-2">Filter:</label>
        <select id="activityFilter" class="form-select d-inline-block" style="width:200px">
          <option value="all">All</option>
          <option value="music">Music</option>
          <option value="sports">Sports</option>
          <option value="coding">Coding</option>
        </select>
      </div>
    </div>
  </div>

  <div class="row g-3" id="videos">
    <div class="col-md-4 video-item" data-activity="music">
      <div class="card video-card p-2">
        <div class="card-body">
          <h5 class="card-title">Acoustic Session</h5>
          <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/2Vv-BfVoq4g" title="YouTube video" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 video-item" data-activity="sports">
      <div class="card video-card p-2">
        <div class="card-body">
          <h5 class="card-title">Soccer Highlights</h5>
          <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/IGQmdoK_ZfY" title="YouTube video" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 video-item" data-activity="coding">
      <div class="card video-card p-2">
        <div class="card-body">
          <h5 class="card-title">Intro to Web Dev</h5>
          <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/pQN-pnXPaVg" title="YouTube video" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 video-item" data-activity="music">
      <div class="card video-card p-2">
        <div class="card-body">
          <h5 class="card-title">Piano Performance</h5>
          <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/fCq2bG0rQEY" title="YouTube video" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

@push('scripts')
<script>
  document.getElementById('activityFilter').addEventListener('change', function(){
    const val = this.value;
    document.querySelectorAll('.video-item').forEach(function(el){
      if(val==='all' || el.dataset.activity===val){
        el.style.display='block';
      } else {
        el.style.display='none';
      }
    });
  });
</script>
@endpush
