@extends('master')

@section('content')
  <h1>Lessons</h1>
  <ul>
  @foreach ($lessons as $lesson)
    <li><a href="/lessons/{{$lesson->title}}">{{$lesson->title}} </a></li>
  @endforeach
  </ul>
@stop

@section('bodyClosingTagScripts')
  <script src="scripts/bundle.js"></script>
@stop
