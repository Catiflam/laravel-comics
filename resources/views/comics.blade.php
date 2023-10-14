@extends('layouts.app')

@section('page-name', 'Elenco comics')

@section('main-content')
<div class="row g-3">
  @forelse ($comics as $comic)
  <div class="col-3">
   @include('partials._comic-card')
  </div>
  @empty
  not found
      
  @endforelse
</div>

    

@endsection
