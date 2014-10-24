@extends('_viewData')

<!--This page is for viewing the ipsum lorem requested on the ipsum page -->

@section('content')

<div class="jumbotron-sand">
    <div class="row">


		<h1>Here is your Ipsum Lorem:</h1>
		 <p>&nbsp;</p>


		 <p>&nbsp;</p>

		 <div class="col-lg-10 offset-1">
		 	
			<div class="row">
		 		<div class = "grayBg">

					<!--test - only allow numbers 1 - 9 -->

						 @if (($paragNum <0) || ($paragNum >9))
						 	<h1>Please go back and enter a paragraph number between 1 and 9</h1>

					<!--if the test passes, determine which ipsum lorem will run -->		

						<!-- @elseif ($whatIpsum=='kitten')

							 	<?php
						 
								 $lipsum = new joshtronic\KittenIpsum();
								 echo $lipsum->paragraphs($paragNum, 'p');
								  ?>

							@elseif ($whatIpsum=='pirate')

							 	<?php
						 
								 $lipsum = new joshtronic\PirateIpsum();
								 echo $lipsum->paragraphs($paragNum, 'p');
								  ?>

							 @else 
							 	<?php
						 
								 $lipsum = new joshtronic\LoremIpsum();
								 echo $lipsum->paragraphs($paragNum, 'p');
								  ?>
							
-->	

							 @endif


		 

		 
		</div>
		</div> <!--close the gray background div==>
	</div> <!--close column -->

		</br>

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




	</div> <!--close row for jumbotron -->
</div> <!--close jumbotron-->


@stop

