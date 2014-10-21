@extends('_viewData')






@section('content')
	<div class=container>
		<p>&nbsp;</p>
	
		<div class="jumbotron-sand">
     		<div class="row">

     		<h1>Ipsum Lorem Generator</h1>
			<p>&nbsp;</p>

     		<div class="row">  <!--row for the two columns of buttons-->

     		<div class="col-lg-6 pull-left">
     		<h4>Uses the Joshtronic php-loremipsum Package </h4>&nbsp;<a class="btn btn-warning btn-lg" role="button" href="https://packagist.org/packages/joshtronic/php-loremipsum">Learn More &raquo;</a></h4>
			</div>
			<!--close the left hand colum-->
			
			<div class="col-lg-6 pull-right">
			<h4>What is Ipsum Lorem?</h4>&nbsp; <a class="btn btn-warning btn-lg" role="button" href="http://lipsum.com/">Learn More &raquo;</a></h4>
			</div>
			<!--close the right hand colum-->
			

		</div> <!--close column row-->

<p>&nbsp;</p>
<p>&nbsp;</p>
			<h3>Please select the number of paragraphs of Ipsum Lorem that you would like:</h3></br>

			{{Form::open (array('url' =>'viewIpsum'))}}

<!--  maybe later, if I can get this all running......  
					{{ Form::label('whatIpsum' ,'Select the type of Ipsum to use')}}
							{{Form::select('whatIpsum',array(
								'plain' =>'Standard Ipsum Lorem',
								'pirate' =>'Pirate Lorem',
								'kitten' =>'Kitten Lorem'
								
							))}}
					</br>
-->

<!-- change this to a selector list for control purposes:-->
					{{Form::label ('parag', 'Number of paragraphs :')}}	
					{{Form::text ('parag') }}

					

<!--

{{ Form::label('parag' ,'Number of Paragraphs of Ipsum Lorem to Generate:')}}
						{{Form::select('parag',array(
							'1' =>'1',
							'2' =>'2',
							'3' =>'3',
							'4' =>'4',
							'5' =>'5',
							'6' =>'6',
							'7' =>'7',
							'8' =>'8',
							'9' =>'9',
						))}}


-->

					<h4>Limit of 9 paragraphs of Ipsum at a time</h4>

					</br>
					</br>

					{{ Form::submit('Get My Ipsum!')}}	
				
			{{ Form::close()}}



			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>

			<p><a class="btn btn-warning btn-lg" role="button" href="/main">Return to Main Page &raquo;</a></p>

			</div>
		</div>
	</div>

@stop