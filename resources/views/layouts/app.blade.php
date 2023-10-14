<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{env('APP_NAME')}} - @yield('page-name') </title>
{{-- STYLES-VITE --}}
  @vite('resources/js/app.js')
</head>

<body>
  <header class="mb-5">
   @include('partials._navbar')
</header>

  <main>
    <div class="container">
      <h1> 
       @yield('page-name')
      </h1>
 
      @yield('main-content')
    </div>

</main>
  <footer></footer>
  
</body>
</html>