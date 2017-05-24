@extends('layouts.app')

@section('content')

  <ul class="card collection">

    @foreach ($jobs as $job)

      <li class="collection-item avatar">
        <i class="material-icons circle">work</i>
        <span class="title">
          <a href="/jobs/{{ $job->id }}/">{{ $job->title }}</a>
        </span>
        <p>{{ $job->company_name }} | <span>{{ $job->company_email }}</span
        </p>
        <a href="#!" class="secondary-content"><i class="material-icons">star</i></a>
      </li>

    @endforeach

  </ul>

@endsection
