@extends('layouts.default')
@section('content')
<script type="text/javascript" src="https://cdn.rawgit.com/showdownjs/showdown/1.6.4/dist/showdown.min.js"></script>
<div class="container-fluid">
        <div class="row">
            <div class="col-xs-6">
			  <textarea id="title" style="height:50px;width:400px;" onkeyup="myFunction()"> </textarea>
			  <textarea id="content" style="height:300px;width:400px;" onkeyup="myFunction()"></textarea>	  
			</div>
			<div class="col-xs-6">
			<div id="article"></div>
			</div>
		</div>
</div>		

<script>
function myFunction() {
    var title = document.getElementById("title").value;
	var article =   document.getElementById("content").value;
	var converter = new showdown.Converter(),
   html = converter.makeHtml("<h3>"+title+"</h3>"+article);
    document.getElementById("article").innerHTML = html;
}
</script>
@stop