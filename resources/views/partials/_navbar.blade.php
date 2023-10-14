<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="#"></a>
    <img src="{{Vite::asset('storage/images/dc-logo.jpg')}}" alt="Comics logo" width="30" height="24">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Route::currentRouteName() == 'comics' ? 'active' : ''}}" href="{{route('comics')}}">Comics</a>
        </li>
      </ul> 
    </div>
  </div>
</nav>