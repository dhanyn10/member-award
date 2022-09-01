<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasAwardMenu">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
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
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('logout')}}">Logout</a>
      </li>
    </ul>
  </div>
</div>