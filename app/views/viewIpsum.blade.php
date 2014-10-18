@extends('_viewData')


@section('content')

<div class="jumbotron-sand">
    <div class="row">


		<h1>Here is your Ipsum Lorem:</h1>
		 <p>&nbsp;</p>

		 <!--buttons for returning back to Ipsum page or Main page:  -->

			<div class = "row">

			<div class= "col-lg-3" pull-left>

			<p><a class="btn btn-warning btn-lg" role="button" href="/ipsum">Create New Ipsum &raquo;</a></p>

			</div> <!--close col> -->

			<div class = "col-lg-3" pull-left>

			<p><a class="btn btn-warning btn-lg" role="button" href="/main">Back to the Main Page &raquo;</a></p>

			</div><!--close col> -->

			</div>  <!--close row-->

		<!--end of button code -->

		 <p>&nbsp;</p>

		 @if (($paragNum) > 0 && ($paragNum) <10)
		 	<?php
	 
			 $lipsum = new joshtronic\LoremIpsum();
			 echo $lipsum->paragraphs($paragNum, 'p');
			  ?>

		 @else 
		 	<h1> PLEASE GO BACK AND ENTER A NUMBER BETWEEN 1 AND 9 </h1>
		 @endif
		 
		


		</br>




	</div> <!--close row for jumbotron -->
</div> <!--close jumbotron-->


@stop

