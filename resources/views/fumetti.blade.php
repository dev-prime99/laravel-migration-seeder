
@extends('layouts.app')

@section('content')

  <ol>
    @foreach($fumetti as $fumetti)
      <li>
        <ul>
          <li>{{ $fumetti["title"] }}</li>
          <li>{{ $fumetti["author"] }}</li>
          <li>{{ $fumetti["year"] }}</li>
          <li>{{ $fumetti["review"] }}</li>
          <li>{{ $fumetti["vote"] }}</li>
        </ul>
      </li>
      <br>
    @endforeach
  </ol>

@endsection
