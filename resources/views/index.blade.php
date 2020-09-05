<!DOCTYPE html>
<html>
<body>

<h1>Blade/Index</h1>

@if ($msg != '')
<p>Hello, {{$msg}}</p>
@else 
<p>write something</p>
@endif

<form method="POST" action="/hello">
@csrf
<input type="text" name="msg">
<input type="submit">
</form>
</body>
</html>
