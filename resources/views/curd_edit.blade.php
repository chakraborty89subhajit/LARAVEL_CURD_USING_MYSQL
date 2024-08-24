<h2>edit curd topic</h2>
<form method="post" action="{{Route('curd_update',[$curdArr->id])}}">
	@csrf
	name:
	<input type='text' name="name" value="{{$curdArr->name}}">
	<input type="submit" name="submit" value="update">
</form>