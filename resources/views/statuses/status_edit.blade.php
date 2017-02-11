@extends('layouts.default')
@section('content')
<script type="text/javascript" src="https://cdn.rawgit.com/showdownjs/showdown/1.6.4/dist/showdown.min.js"></script>
<form action="{{ route('statuses.store',$status->id)}}" method="POST">
 @include('shared.errors')
  {{ csrf_field() }}
<div class="container-fluid" >
        <div class="row">
            <div class="col-xs-6">
			  <textarea id="title" rows="1" cols="50" onkeyup="md2html()" name="title"> {{$status->title}}</textarea>
			  <textarea id="content" rows="20" cols="50" onkeyup="md2html()" name="content">{{$status->content}}</textarea>
             <button type="submit" class="btn btn-primary pull-right" >发布</button>		  
			</div>
			<div class="col-xs-6">
			<textarea rows="5" cols="50"id= "mdcontent" name="mdcontent"></textarea>
			<div id="article"></div>
			</div>
		</div>
</div>	
<script>
function md2html() {
    var title = document.getElementById("title").value;
	var article =   document.getElementById("content").value;
	var converter = new showdown.Converter();
    html1 = converter.makeHtml("<h3>"+title+"</h3>"+article);
    html = converter.makeHtml(article);
    document.getElementById("article").innerHTML = html1;
	document.getElementById("mdcontent").value = html;
}
</script>	
</form>

@stop