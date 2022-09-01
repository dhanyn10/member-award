<li class="nav-item">
  @if (Route::currentRouteName() == $routeName)
    <a class="nav-link active" href="{{route($routeName)}}">{{$routeName}}</a>
  @else
    <a class="nav-link" href="{{route($routeName)}}">{{$routeName}}</a>
  @endif
</li>