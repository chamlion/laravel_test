<form action="{{ route('statuses.store') }}" method="POST">
  @include('shared.errors')
  {{ csrf_field() }}
  <textarea id="title" class="form-control" rows="2" placeholder="title..." name="title">
    {{ old('title') }}
  </textarea>
  <textarea id="content" class="form-control" rows="3" placeholder="聊聊新鲜事儿..." name="content">
    {{ old('content') }}
  </textarea>
  <button type="submit" class="btn btn-primary pull-right" onclick="myFunction()">发布</button>
</form>
<script type="text/javascript" src="https://cdn.rawgit.com/showdownjs/showdown/1.6.4/dist/showdown.min.js"></script>
<script>
function myFunction() {
    var title = document.getElementById("title").value;
	var article =   document.getElementById("content").value;
	var converter = new showdown.Converter(),
   html = converter.makeHtml("<h3>"+title+"</h3>"+article);
   document.getElementById("content").value = html;
}
</script>