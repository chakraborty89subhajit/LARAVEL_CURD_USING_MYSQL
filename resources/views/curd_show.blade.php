<a href="curd_create">add_curd</a>
<h2>todo list using laravel (CURD project)</h2><br>

{{session('msg')}}
<table border="1">
	<tr>
		<td>id</td>
		<td>name</td>
		<td>created_at</td>
		<td>updated_at</td>
		<td>edit</td>
		<td>delete</td>
	</tr>
	<tr>
		@foreach($curdArr as $curd)
		<td>{{$curd->id}}</td>
		<td>{{$curd->name}}</td>
		<td>{{$curd->created_at}}</td>
		<td>{{$curd->updated_at}}</td>
		<td><a href="curd_edit/{{$curd->id}}">edit</a></td>
		<td><a href="curd_delete/{{$curd->id}}">delete</a></td>
		
	</tr>
	@endforeach
</table>