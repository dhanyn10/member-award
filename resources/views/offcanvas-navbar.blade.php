<div class="offcanvas offcanvas-start container pt-4" tabindex="-1" id="offcanvasAwardMenu">
  <div class="offcanvas-header">
    <div class="d-grid">
      <i class="fa fa-star text-warning" style="font-size: 5em;" aria-hidden="true"></i><br/>
      <h5>Awards Menu</h5>
    </div>
  </div>
  <div class="offcanvas-body">
    <ul class="navbar-nav">
      <x-nav-link route-name="award" text="home"/>
      @if (session('role') == 1)
      <li class="nav-item">
      <x-nav-link route-name="add"/>
      </li>
      @endif
      <li class="nav-item">
        <a class="nav-link" href="{{route('logout')}}">Logout</a>
      </li>
    </ul>
  </div>
</div>