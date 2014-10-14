@extends('master')

@section('content')
  <h1>{{ $name }}</h1>

  @foreach ($lessons as $lesson)
    <h2>{{$lesson}}</h2>
  @endforeach
  {{ app()->env }}

@stop

@section('footer')
  <script>
    console.log('this script only loads on the "/" path.');
  </script>
@stop
