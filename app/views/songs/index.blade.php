@extends('master')

@section('content')
  <h1>Official fan club</h1>
  <ul>
  @foreach ($songs as $song)
    <li><a href="/songs/{{$song->slug}}">{{$song->title}} </a></li>
  @endforeach
  </ul>
@stop
