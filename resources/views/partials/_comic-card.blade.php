@if(isset($comic))

<div class='card h-100'>

  <div class="card text-center">
    <div class="card-header">
      {{$comic['title']}} 
    </div>
    <div class="card-body">
      <img src="{{$comic ["thumb"] }}"  class="img-fluid" >
      <h5 class="card-title">{{$comic['title']}} </h5>
      <p class="card-text">{{$comic['series']}} </p>
      <a href="#" class="btn btn-primary">Vedi dettagli</a>
    </div>
    <div class="card-footer text-body-secondary">
      {{$comic['price']}} 
    </div>
  </div>
          
  @endif
</div>
