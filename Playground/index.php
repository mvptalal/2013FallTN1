<?
	$location = 'home';


?>
<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
	
  </head>
  
  <body>
  	
 <? include('_nav.php'); ?>
   <div class="container">
   
<div class="jumbotron">
    <h1><?=$msg?></h1>
    
    <p>Fall 2013 Web Server Programing</p>
    <p><a class="btn btn-success btn-lg">Learn more</a></p>
  </div>
</div>

<div class="row"><div class="container"> 
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <div class="caption">
        <h3>Heading</h3>
        <p>This is a Header</p>
        <p><a href="#" class="btn btn-primary">Veiw details>></a>
      </div>
    </div>
  </div>



  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <div class="caption">
        <h3>Important Points</h3>
        <p>three main links</p>
        <p><a href="#" class="btn btn-primary">Veiw details>></a>
      </div>
    </div>
  </div>

<div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <div class="caption">
        <h3>Heading</h3>
        <p>the first heading</p>
        <p><a href="#" class="btn btn-primary">Veiw details>></a>
      </div>
    </div>
  </div>




</div>
  
 </div> 
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    	$(function(){
    		$(".nav .home").addClass("active").fadeOut().fadeIn();
    		
    	});
    	
    	
    </script>
 
  </body>
</html>