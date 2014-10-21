@extends('_viewData')






@section('content')
	<div class=container>
		<p>&nbsp;</p>
	
		<div class="jumbotron-sand">
     		<div class="row">

			<h1>Test User Creation Tool</h1>
		</br>
				<div class = "row">

				<div class = "col-lg-3" pull-left>
					<h3>Uses the Faker Package</h3>
				</div>

				<div class="col-lg-2" pull-left>
					 <a class="btn btn-warning btn-lg" role="button" href="https://packagist.org/packages/fzaninotto/faker">Learn More</a>
					
				</div><!--close columns -->
				</div>  <!--close row -->
			<p>&nbsp;</p>
			<p>&nbsp;</p>



			<h4>Please enter the number of users that you would like:</h4></br>

			{{Form::open (array('url' =>'viewUser'))}}

					<!--prompt user for the number of dummy user accounts that they wish to create: -->

					{{Form::label ('userNum', 'Enter the Number of Users')}}	
					{{Form::text ('userNum') }}

					
					</br>
					</br>

					<h4>Account Options: </h4>
					<p>Please check any options that you wish to use</p>
					<!--option:  create email addresses: -->

					{{Form::checkbox ('createEmail', 'yes', false)}}
					{{Form::label ('createEmail', 'Check if you wish the acct to have an email address.')}}
					</br>

					

					<!--option create dummy address: -->	

					{{Form::checkbox ('createAddr', 'yes', false)}}
					{{Form::label ('createAddr', 'Check if you wish the acct to have an address.')}}

					</br>

					<!--option:  create dummy bio: -->

					{{Form::checkbox ('createBio', 'yes', false)}}
					{{Form::label ('createBio', 'Check if you wish the acct to have a bio.')}}
					</br>
					</br>

					</br>
					</br>

					

					<!-- submit button:  -->

					{{ Form::submit('Get My Users!')}}	
				
			{{ Form::close()}}





			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>

			<p><a class="btn btn-warning btn-lg" role="button" href="/main">Return to Main Page &raquo;</a></p>
			</div>
		</div>
	</div>

@stop
