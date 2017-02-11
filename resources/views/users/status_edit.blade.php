@extends('layouts.default')
@section('content')
<script type="text/javascript" src="https://cdn.rawgit.com/showdownjs/showdown/1.6.4/dist/showdown.min.js"></script>
<form action="{{ route('statuses.store') }}" method="POST">
  @include('shared.errors')
  {{ csrf_field() }}
<div class="container-fluid" >
        <div class="row">
            <div class="col-xs-6">
			  <textarea id="title" rows="1" cols="50" onkeyup="md2html()" name="title" autofocus> 
			   </textarea>
			  <textarea id="content" rows="20" cols="50" onkeyup="md2html()" name="content">
			  </textarea>
             <button type="submit" class="btn btn-primary pull-right" onclick="change()">发布</button>		  
			</div>
			<div class="col-xs-6">
			<div id="article"></div>
			</div>
		</div>
</div>		
</form>
<script>
function md2html() {
    var title = document.getElementById("title").value;
	var article =   document.getElementById("content").value;
	var converter = new showdown.Converter();
   html = converter.makeHtml("<h3>"+title+"</h3>"+article);
    document.getElementById("article").innerHTML = html;
}
</script>
<script>
function change() {
    var title = document.getElementById("title").value;
	var article =   document.getElementById("content").value;
	var converter = new showdown.Converter();
   html = converter.makeHtml(article);
    document.getElementById("content").value = html;
}
</script>
@stop