<?
	$location = 'contacts';
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
    <h1>Hello, world!</h1>
    <p>contacts page </p>
    <p><a class="btn btn-success btn-lg">Learn more</a></p>
  </div>
</div>


</body>



























 <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="Scripts/main.js"></script>
        <script type="text/javascript">
    	$(function(){
    		$(".nav .contacts").addClass("active").fadeOut().fadeIn();
    		
    	});
    	
    	
    </script>
 
  
  </body>
</html>


