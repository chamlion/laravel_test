@extends('layouts.default')
@section('content')
<script type="text/javascript" src="https://cdn.rawgit.com/showdownjs/showdown/1.6.4/dist/showdown.min.js"></script>
<link rel="stylesheet" type="text/css"
  href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css"> </link>
<div class="container-fluid">
        <div class="row">
            <div class="col-xs-6">
			  <div class="span6"><textarea id="fname" style="height:300px;width:500px;" onkeyup="myFunction()"></textarea></div>
			</div>
		</div>
		<div class="row">
            <div class="col-xs-6">
			<div class="span6"><div id="demo"></div></div>
			</div>
		</div>
</div>		

<script>
function myFunction() {
    var x = document.getElementById("fname").value;
	var converter = new showdown.Converter(),
   html = converter.makeHtml(x);
    document.getElementById("demo").innerHTML = html;
}
</script>
@stop