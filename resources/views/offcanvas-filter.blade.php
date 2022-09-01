<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasFilterMenu">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title">Filter</h5>
  </div>
  <div class="offcanvas-body">
    <div id="list-filter-point" class="mb-2"></div>
    <label for="point-needed" class="form-label">Point Needed</label>
    <div class="row">
      <div class="col-sm-4 text-primary" id="point-min">IDR 0</div>
      <div class="col-sm-4 offset-sm-4 text-primary" id="point-max">IDR 500.000</div>
    </div>
    <input type="range" class="form-range" min="0" max="500000" id="point-needed">
  </div>
</div>
<script src="{{URL::asset('js/offcanvas-filter.js')}}"></script>