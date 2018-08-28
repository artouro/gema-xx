<!DOCTYPE html>
<html lang="en">
    <head>
    	@include('templates.header')
    </head>
    <body class="nav-md">
    	<div class="container body">
    		<div class="main_container">
      			@include('templates.aside')
      			@include('templates.nav')
    			
    			@yield('content')

				@include('templates.footer')
    		</div>
    	</div>
    	@include('templates.scripts')
    </body>
</html>