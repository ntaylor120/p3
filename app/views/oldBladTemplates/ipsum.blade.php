@extends('_viewData')






@section('content')
	<div class=container>
		<p>&nbsp;</p>
	
		<div class="jumbotron-sand">
     		<div class="row">

			<h1>Ipsum Lorem Generator</h1>
			<p>&nbsp;</p>
			<h4>Uses the BadCow Package </h4>&nbsp;<a class="btn btn-warning btn-lg" role="button" href="https://packagist.org/packages/badcow/lorem-ipsum">Learn More &raquo;</a></p>
			<p>&nbsp;</p>



			<p>Please select the type and number of paragraphs of Ipsum Lorem that you would like:</p></br>

			{{Form::open (array('url' =>'viewIpsum'))}}


					{{ Form::label('whatIpsum' ,'Select the type of Ipsum to use')}}
							{{Form::select('whatIpsum',array(
								'plain' =>'Standard Ipsum Lorem',
								'pirate' =>'Pirate Lorem',
								'kitten' =>'Kitten Lorem'
								
							))}}
					</br>


					{{ Form::label('parag' ,'Number of Paragraphs')}}
						{{Form::select('parag',array(
							'1' =>'1',
							'2' =>'2',
							'3' =>'3',
							'4' =>'4',
							'5' =>'5'
						))}}

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