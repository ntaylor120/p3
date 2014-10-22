<!DOCTYPE html>
<html lang="en">

 
  
  <head>
    
    @include('head')
    
  </head>
  

<body>

 
  @include('header')


  @include('header2')


  <div class="container">

	    <div class="jumbotron-sand">
	      
	         
	          @yield('content')  
	            
	         
	      </div> <!--close jumbotron -->
    
	</div> <!--close container -->


	<footer>
	 
	 	@include('footer')
	                  
	</footer> 

</body>

</html>

