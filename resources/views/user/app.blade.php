<!DOCTYPE html>
<html>
<head>
	<title>My Blogging App</title>
	@include('user/layout/head')
</head>
<body>
	@include('user/layout/header')


	@yield('content')

	@include('user/layout/footer')
</body>
</html>