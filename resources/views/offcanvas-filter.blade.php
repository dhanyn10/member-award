<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasFilterMenu">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title">Filter</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div id="list-filter-point"></div>
    <div id="list-filter-type"></div>
    <div id="list-filter-clear"></div>
    <label for="point-needed" class="form-label">Point Needed</label>
    <div class="row">
      <div class="col-sm-4 text-primary" id="point-min">IDR 0</div>
      <div class="col-sm-4 offset-sm-4 text-primary" id="point-max">IDR 500.000</div>
    </div>
    <input type="range" class="form-range" min="0" max="500000" id="point-needed">
    <p>Awards Type:</p>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="alltype">
      <label class="form-check-label text-primary" for="alltype">
        All Type
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="cb-vouchers">
      <label class="form-check-label text-primary" for="cb-vouchers">
        Vouchers
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="cb-products">
      <label class="form-check-label text-primary" for="cb-products">
        Products
      </label>
    </div>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="cb-giftcards">
      <label class="form-check-label text-primary" for="cb-giftcards">
        Giftcards
      </label>
    </div>
    <form method="post">
      {{ csrf_field() }}
      <div class="d-grid">
        <input type="hidden" name="poin" id="value-poin">
        <input type="hidden" name="type" id="value-type">
        <button class="btn btn-primary text-center" type="submit">Filter</button>
      </div>
    </form>
  </div>
</div>
<script src="{{URL::asset('js/offcanvas-filter.js')}}"></script>