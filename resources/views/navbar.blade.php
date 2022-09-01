<nav class="navbar navbar-expand-lg bg-light mb-3">
    <div class="container-fluid">
      <ul class="navbar-nav me-auto order-1">
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="offcanvas" href="#offcanvasAwardMenu">
            <i class="fa fa-list" aria-hidden="true"></i>
          </a>
        </li>
      </ul>
      <div class="mx-auto order-2">
        <a class="navbar-brand ms-auto" href="#">{{config('app.name')}}</a>
      </div>
      <ul class="navbar-nav ms-auto order-3">
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fa fa-filter" aria-hidden="true"></i>
          </a>
        </li>
      </ul>
    </div>
  </nav>
  @include('offcanvas-navbar')