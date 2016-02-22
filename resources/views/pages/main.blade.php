<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.zeeshanfoodspk.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Oct 2015 10:54:53 GMT -->
@include('pages.head')
<body>
<!--==============================header=================================-->
<div class="main">
     <div class="head">	     
        @include('pages.menuBar')
       
        @yield('content')
	<!--==============================footer=================================-->		
	@include('pages.footer')
</div>	
</body>
<!-- Mirrored from www.zeeshanfoodspk.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Oct 2015 10:55:29 GMT -->
</html>
