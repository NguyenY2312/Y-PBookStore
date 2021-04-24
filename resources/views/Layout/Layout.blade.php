<!DOCTYPE html>
<html lang="zxx">
@include('Layout.Head')
<body>
	<!-- header -->
	@include('Layout.Header')
	<!-- menu -->
	@include('Layout.Menu')
	<!-- //header -->
	@yield('content')
	<!--footer -->
	@include('Layout.Footer')
	<!-- //footer -->
	@include('Layout.Foot')
</body>

</html>