@extends('_viewData')

@section('content')

<div class="jumbotron-sand">
     		<div class="row">

<h1>this is where the users will be displayed</h1>

</br>

<div class = "row">

<div class= "col-lg-3" pull-left>

<p><a class="btn btn-warning btn-lg" role="button" href="/userGen">Create More Test User(s) &raquo;</a></p>

</div> <!--close col> -->

<div class = "col-lg-3" pull-left>

<p><a class="btn btn-warning btn-lg" role="button" href="/main">Back to the Main Page &raquo;</a></p>

</div><!--close col> -->

</div>  <!--close row-->


<?php
 

 
<?php
// require the Faker autoloader
require_once 'echo base_path();/vendor/Faker/src/autoload.php;/';
// alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();

// generate data by accessing properties
echo $faker->name;
  // 'Lucy Cechtelar';
echo $faker->address;
  // "426 Jordy Lodge
  // Cartwrightshire, SC 88120-6700"
echo $faker->text;
  // Sint velit eveniet. Rerum atque repellat voluptatem quia rerum. Numquam excepturi
  // beatae sint laudantium consequatur. Magni occaecati itaque sint et sit tempore. Nesciunt
  // amet quidem. Iusto deleniti cum autem ad quia aperiam.
  // A consectetur quos aliquam. In iste aliquid et aut similique suscipit. Consequatur qui
  // quaerat iste minus hic expedita. Consequuntur error magni et laboriosam. Aut aspernatur
  // voluptatem sit aliquam. Dolores voluptatum est.
  // Aut molestias et maxime. Fugit autem facilis quos vero. Eius quibusdam possimus est.
  // Ea quaerat et quisquam. Deleniti sunt quam. Adipisci consequatur id in occaecati.
  // Et sint et. Ut ducimus quod nemo ab voluptatum.
?>

</div> <!--close row for jumbotron -->
</div> <!--close jumbotron-->


@stop

