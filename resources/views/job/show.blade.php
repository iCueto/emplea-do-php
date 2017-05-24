@extends('layouts.app')

@section('content')

  <div class="card-panel">
    <h3 class="card-title">{{$job->title}}</h3>

    <p>{{ $job->description }}</p>
  </div>

@endsection
