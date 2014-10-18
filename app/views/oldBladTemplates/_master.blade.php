<!DOCTYPE html>
<html lang="en">

 
  
  <head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>@yield ('title', 'P3 Project for Nancy Taylor')</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-theme.css">
    

    <!-- Custom styles for this template -->
    
    <link href="css/extra-bootstrap.css" rel="stylesheet" type="text/css">
  
    <!--<link href="css/jumbotron-narrow.css" rel="stylesheet" type="text/css">-->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]
    <script src="js/ie-emulation-modes-warning.js"></script>-->
   <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
   <script src="js/bootstrap.js"></script>
    
    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  

<body>

<!-- this is the top jumbotron -->

<div class="container">

    <div class="jumbotron-sand">
     <div class="row">
      <div class="col-xs-6 pull-left"> 
            
        <h3>PROJECT 3</h3>
        <h5>CSCI E-15: Dynamic Web Applications</h5>
        <h5>Student:  Nancy Taylor</h5>
        <h3>Ipsum Lorem and Test User Generators</h3>
      
        </div>
        <div class="col-xs-3 pull-right">
          <img src="images/jackieKitten.jpg" class="img-responsive" alt="Jackie Kitten">
          <h6>Jackie Kitten</h6>
         
        </div>
        </div> 
      </div>
    </div>


 
  <div class="container">

    <div class="jumbotron-sand">
      
          
          @yield('content')  
            

          
      </div>
    

</div>


<footer>
    <div class="bg-ltGray">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h4>&copy; Nancy Taylor 2014</h4>
                </div>
            </div>
        </div>
    </div>
</footer> <!-- /container -->


</body>

</html>

