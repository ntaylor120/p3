@extends('_viewData')






@section('content')
	<div class=container>
		<p>&nbsp;</p>
	
		<div class="jumbotron-sand">
     		<div class="row">

     		<h3>Ipsum Lorem Generator</h3>
			<p>&nbsp;</p>

     		<div class="row">  <!--row for the two columns of buttons-->

     		<div class="col-lg-4 pull-left">
     		<div class="bgWhite">
     		<p>Uses the Joshtronic php-loremipsum Package </h4>&nbsp;<a class="btn btn-warning btn-sm" role="button" href="https://packagist.org/packages/joshtronic/php-loremipsum">Learn More &raquo;</a></p>
			</div>
			</div>
			<!--close the left hand colum-->
			
			

			<div class="col-lg-4 pull-left">
			<p>A Developer's Tool for creating dummy test for website testing</p>
			</div>
			<!--close the right hand colum-->
			</div> <!--close column row-->

		</div> <!--close row div -->
	</div> <!--close jumbotron div -->

	<div class="jumbotron-sand">
     	<div class="row">
			<h3>Please select the type and number of paragraphs of Ipsum Lorem that you would like:</h3></br>

			{{Form::open (array('url' =>'viewIpsum'))}}

<!-- select type of ipsum:-->
					{{ Form::label('whatIpsum' ,'Select the type of Ipsum to use')}}
							{{Form::select('whatIpsum',array(
								'plain' =>'Standard Ipsum Lorem',
								'pirate' =>'Pirate Lorem',
								'kitten' =>'Kitten Lorem'
								
							))}}
					</br>


<!-- get number of paragraphs:-->
					{{Form::label ('parag', 'Number of paragraphs :')}}	
					{{Form::text ('parag') }}

					




					<h4>Limit of 9 paragraphs of Ipsum at a time</h4>

				
					</br>

					{{ Form::submit('Get My Ipsum!', array('class' => 'btn btn-warning'))}}	
				
			{{ Form::close()}}



			
			<p>&nbsp;</p>

			<p><a class="btn btn-warning btn-sm" role="button" href="/main">Return to Main Page &raquo;</a></p>

			</div>
		</div>
	</div>

@stop