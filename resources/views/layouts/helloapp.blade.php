<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<style>
body{
background-color:gray;
}

.paragraph{
background-color:white;
}
</style>
</head>
<body>

<h3>@yield('title')</h3>

<div class="paragraph">
@yield('content')
</div>




</body>
</html>

