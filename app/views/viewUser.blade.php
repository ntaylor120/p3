@extends('_viewData')


<!-- This view is for viewing the users requested on the userGen page
      and uses the Faker package generator
 -->

@section('content')


<!-- Jumbotron that contains the Users -->

<div class="jumbotron-sand">
     		<div class="row">

<h1>Here are your test users:</h1>

</br>



<!-- Create a background in a color from the background image for surrounding the new data -->

  <div class="col-lg-10 offset-1">
      
        <div class="row">
          <div class = "grayBg">
            <div class="container">

                <br/>
               @if (($userNum) > 0 && ($userNum) <100)
                  <?php
                  // require the Faker autoloader
                  require_once (base_path().'/vendor/fzaninotto/faker/src/autoload.php');

                  // use the factory to create a Faker\Generator instance
                  $faker = Faker\Factory::create();

                  for ($i=0; $i < $userNum; $i++) {
                    echo 'Name:  '.$faker->name, "\n".'</br>';

                  //include email address if checked

                    if($createEmail){
                      echo '</br>'.'Email address: '.$faker->email.'</br>';
                    }

                  //include mailing address if checked

                    if($createAddr){
                    echo '</br>'.'Mailing Address:  '.$faker->address.'</br>';

                    }

                  //include bio (ipsum lorem bio) if checked

                    if($createBio){
                      echo '</br>'.'Bio: '.$faker->text.'</br>';
                    }

                  //put some space between each entry to each entry can be easily identified

                    echo '</br>'.'********************'.'</br>'.'</br>';
                    }
                    ?>


               @else 
                    <h3> PLEASE GO BACK AND ENTER A NUMBER BETWEEN 1 AND 99 </h3>
              @endif
            </div> <!--close container -->
          </div><!--close background div-->
        </div> <!--close row div -->
      </div> <!--close column div -->  

<!-- Add space between the data and the buttons -->
</br>
<p>&nbsp;</p>

<!-- Navigation buttons -->
    <div class="container">
      <div class = "row">

        <!-- Button 1 -->

        <div class= "col-lg-3" pull-left>
        <p><a class="btn btn-warning btn-lg" role="button" href="/userGen">Create More Test User(s) &raquo;</a></p>
        </div> <!--close col> -->

         <!-- Button 1 -->
        <div class = "col-lg-3" pull-left>
        <p><a class="btn btn-warning btn-lg" role="button" href="/main">Back to the Main Page &raquo;</a></p>
        </div><!--close col> -->

      </div>  <!--close row-->
    </div> <!--close container>

  </div> <!--close row for jumbotron -->
</div> <!--close jumbotron-->


@stop

