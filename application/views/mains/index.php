<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajax Notes</title>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script>
		$(document).ready(function(){
				$.get('/notes/index_html', function(res){
				console.log(res);
			});
		});
	</script>

</head>
<body>
	<div id="header">
		<h3>Notes</h3>
	</div>

	<div>
		<h1>Python</h1>
		<textarea name="description"></textarea>
	</div>

	<div>
		<h1>Rails</h1>
		<textarea name="description"></textarea>
	</div>

	<form action="/notes/create" method="post">
		<input type="text" name="title" placeholder="Insert note titile here"/><br>
		<input type="submit" value="Add Note" />
	</form>

	<div id="contents">

	</div>
</body>
</html>