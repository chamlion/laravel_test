@extends('layouts.default')
@section('title', $user->name)
@section('content')
<div class="row">
  <h3>《{{ $status->title }}》</h3>
  <ol class="blog">
    <span class="timestamp">
    created by <a href="{{ route('users.show', $user->id )}}">{{ $user->name }}</a>  {{ $status->created_at->diffForHumans() }}
    </span>
  <pre class="content">{{ $status->content }}</pre>
  </ol>
</div
>
@stop