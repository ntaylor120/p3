@extends('_viewData')






@section('content')


<!--Explain what this page does, and link to information about the Faker package -->

	<div class=container>
		<p>&nbsp;</p>
	
		<div class="jumbotron-sand">
     		<div class="row">

			<h1>Test User Creation Tool</h1>
		</br>
				<div class = "row">

				<div class = "col-lg-3" pull-left>
					<h4>Uses the Faker Package</h4>
				</div>

				<div class="col-lg-1" pull-left>
					 <a class="btn btn-warning btn-sm" role="button" href="https://packagist.org/packages/fzaninotto/faker">Learn More</a>
					
				</div><!--close columns -->

				<div class = "col-lg-6 pull-right">
					<p>A tool for creating test users</p>
				</div>
				</div>  <!--close row -->
				</div>  <!--close jumbotron row -->
				</div>  <!--close jumbotron -->


			

<!--Prompt user for the number of users to be generated, and any options -->


<div class="jumbotron-sand">
     		<div class="row">
			

			{{Form::open (array('url' =>'viewUser'))}}

					<!--prompt user for the number of dummy user accounts that they wish to create: -->
					<div class="col-lg-6 pull-left">
					<h4>Please enter the number of users that you would like:</h4></br>

					{{Form::label ('userNum', 'Enter the Number of Users (limit 99/session): ')}}	
					{{Form::text ('userNum') }}
					<p> Limit of 99 users per request.</p>
				</div>
					

					<div class="col-lg-6 pull-left">
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
				</div>
					

					

					<!-- submit button:  -->

					{{ Form::submit('Get My Users!', array('class' => 'btn btn-warning'))}}	
				
			{{ Form::close()}}





			
			<p>&nbsp;</p>

<!--Navigation buttons -->

			<p><a class="btn btn-warning btn-sm" role="button" href="/main">Return to Main Page &raquo;</a></p>
			</div>
		</div>
	</div>

@stop
