<!DOCTYPE html>
<html>
<head>
	<title>My Blogging App</title>
	@include('admin/layout/head')
</head>
<body>
	@include('admin/layout/header')

	@yield('content')

	@include('admin/layout/footer')
</body>
</html>