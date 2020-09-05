<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<style>
body{
background-color:gray;
}
.content{
background-color:blue;
}
</style>
</head>
<body>

<h1>@yield('title')</h1>

<p>My first paragraph.</p>

<div class="content">
@yield('content')
</div>
</body>
</html>

