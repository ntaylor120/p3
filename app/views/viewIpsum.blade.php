@extends('_viewData')


@section('content')

<div class="jumbotron-sand">
    <div class="row">


		<h1>Here is your Ipsum Lorem:</h1>
		 <p>&nbsp;</p>


		 <p>&nbsp;</p>

		 <div class="col-lg-10 offset-1">
		 	
		 		<div class="row">
		 			<div class = "grayBg">
		 				<div class="container">
		 					<br/>

							<!--test - only allow numbers 1 - 9 -->

								 @if (($paragNum <0) || ($paragNum >9))
								 	<h1>Please go back and enter a paragraph number between 1 and 9</h1>

							<!--if the test passes, determine which ipsum lorem will run -->		

									 @elseif ($whatIpsum=='KittenIpsum')

										 	<?php
									 
											 $lipsum = new joshtronic\KittenIpsum();
											 echo $lipsum->paragraphs($paragNum, 'p');
											  ?>

										@elseif ($whatIpsum=='PirateIpsum')

										 	<?php
									 
											 $lipsum = new joshtronic\PirateIpsum();
											 echo $lipsum->paragraphs($paragNum, 'p');
											  ?>

										 @else 
										 	<?php
									 
											 $lipsum = new joshtronic\LoremIpsum();
											 echo $lipsum->paragraphs($paragNum, 'p');
											  ?>
								 @endif
		 
						</div><!--close container-->
					</div> <!--close the gray background div-->
				</div> <!--close row -->
			

		</br>
		

			<!--buttons for returning back to Ipsum page or Main page:  -->

			<div class = "row">
				

					<div class= "col-lg-3" pull-left>

						<a class="btn btn-warning btn-lg" role="button" href="/ipsum">Create New Ipsum &raquo;</a>

					</div> <!--close col> -->

					<div class = "col-lg-3" pull-left>

						<a class="btn btn-warning btn-lg" role="button" href="/main">Back to the Main Page &raquo;</a>

					</div><!--close col> -->

			</div>  <!--close row-->

			<!--end of button code -->




	</div> <!--close row for jumbotron -->
</div> <!--close jumbotron-->


@stop

