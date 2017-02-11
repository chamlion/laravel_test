@extends('layouts.default')
@section('title', $user->name)
@section('content')
<script type="text/javascript" src="https://cdn.rawgit.com/showdownjs/showdown/1.6.4/dist/showdown.min.js"></script>
<div class="row" >
  <h3>《{{ $status->title }}》</h3>
  <ol class="blog">
    <span class="timestamp">
    created by <a href="{{ route('users.show', $user->id )}}">{{ $user->name }}</a>  {{ $status->created_at->diffForHumans() }}
    </span>
	<div id="content" >
	<?php echo htmlspecialchars_decode("$status->mdcontent" );?> 
	</div>
  </ol>
</div>
@stop
