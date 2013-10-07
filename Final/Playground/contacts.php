<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <style type="text/css">
    	body { padding-top: 70px; }
    </style>
  </head>
  <body>
  	    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
   		<div class="container">
   			<div class="navbar-header">
				<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".nav-c">
			    	<span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			    </button>
		      	<a class="navbar-brand" href="#">Playground</a>
			</div>
		
			<div class="collapse navbar-collapse nav-c">
	            <ul class="nav navbar-nav">
	            	
	              
	              						<li class="home ">
							<a href="index.php"> Home </a>
						</li>
				  						<li class="links ">
							<a href="links.php"> Links </a>
						</li>
				  						<li class="contacts ">
							<a href="contacts.php"> Contact Us </a>
						</li>
				  						<li class="store ">
							<a href="store.php"> Buy our stuff </a>
						</li>
				  	              
	              
	              
					<li class="dropdown">
				        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
				        <ul class="dropdown-menu">
				          <li><a href="#">Action</a></li>
				          <li><a href="#">Another action</a></li>
				          <li><a href="#">Something else here</a></li>
				          <li><a href="#">Separated link</a></li>
				          <li><a href="#">One more separated link</a></li>
				        </ul>
				      </li>
      			</ul>
				<p class="navbar-text pull-right">Signed in as <a href="#" class="navbar-link">Talal Nweiran</a></p>
			</div>
		</div>
	</div>
	  	<pre class="container">
	  	[{"url":"index.php","section":"home","title":"Home"},{"url":"links.php","section":"links","title":"Links"},{"url":"contact.php","section":"contact","title":"Contact Us"},{"url":"store.php","section":"store","title":"Buy our stuff"}]  		
	  	</pre>
 		  	<div class="container">
  		<div class="well">
		    <h1>Hello World</h1>
		    <p>Welcome class of 2013 to Web Server Programming <a class="btn btn-default">Learn More</a></p>
  			
  		</div>
  		<div class="row">
  			<div class="col-lg-8 col-lg-offset-2"> 
		  		<h2>Contact Us</h2>
		  		<form class="form-horizontal">
				  <div class="form-group">
				    <label for="inputEmail1" class="col-md-2 control-label">Your Email</label>
				    <div class="col-md-10">
				      <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="txtMsg" class="col-md-2 control-label">Message</label>
				    <div class="col-md-10">
				      <textarea class="form-control" id="txtMsg" placeholder="Placeholder"></textarea>
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-md-offset-2 col-md-10">
				      <input type="submit" class="btn" value="Submit" />
				    </div>
				  </div>  			
		  		</form>
  			</div>
  		</div>
  		      
   	</div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="Scripts/main.js"></script>
    <script type="text/javascript">
    	$(function(){
    		$(".nav .contacts").addClass("active");
    	});
    </script>
  </body>
</html>


