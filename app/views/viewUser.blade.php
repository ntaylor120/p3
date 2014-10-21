@extends('_viewData')

@section('content')

<div class="jumbotron-sand">
     		<div class="row">

<h1>Here are your test users:</h1>

</br>

<p>

<?php
// require the Faker autoloader
require_once (base_path().'/vendor/fzaninotto/faker/src/autoload.php');

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();

for ($i=0; $i < $userNum; $i++) {
  echo $faker->name, "\n".'</br>';

//include email address if checked

  if($createEmail){
    echo '</br>'.$faker->email.'</br>';
  }

//include mailing address if checked

  if($createAddr){
  echo '</br>'.$faker->address.'</br>';

  }

//include bio (ipsum lorem bio) if checked

  if($createBio){
    echo '</br>'.$faker->text.'</br>';
  }

//put some space between each entry to each entry can be easily identified

  echo '</br>'.'********************'.'</br>';
  }

  
?>
</p>

</br>
<div class = "row">

<div class= "col-lg-3" pull-left>

<p><a class="btn btn-warning btn-lg" role="button" href="/userGen">Create More Test User(s) &raquo;</a></p>

</div> <!--close col> -->

<div class = "col-lg-3" pull-left>

<p><a class="btn btn-warning btn-lg" role="button" href="/main">Back to the Main Page &raquo;</a></p>

</div><!--close col> -->

</div>  <!--close row-->


</div> <!--close row for jumbotron -->
</div> <!--close jumbotron-->


@stop

