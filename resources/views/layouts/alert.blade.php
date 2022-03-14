<!-- <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button> -->
<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
@if(Session::has('success'))
<div id="liveToast" class="toast bg-success" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header text-success">
        <i class="bi bi-check-circle-fill me-2"></i>
      <span class="me-auto title-6 text-uppercase">Success</span>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body text-white">
      {{ Session::get('success') }}
    </div>
  </div>
  @elseif(Session::has('failed'))
  <div id="liveToast" class="toast bg-primary" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header text-primary">
        <i class="bi bi-x-circle-fill me-2"></i>
      <span class="me-auto title-6 text-uppercase">Failed</span>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body text-white">
      {{ Session::get('failed') }}
    </div>
  </div>
  @endif
</div>