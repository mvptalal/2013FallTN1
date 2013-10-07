<?
	
	
	
	$pages = array(
	array(
	'url' => 'index.php', 
	'section' => 'home',
	'title' => 'Home'
	),
	array(
	'url' => 'contacts.php',
	'section' => 'contacts',
	'title' => 'Contacts'
	),
	
	$pages [] = array(
		'url' => 'store.php',
		'section' => 'store',
		 'title' => 'Buy our Stuff'
	),
	);
?>


 <nav class="navbar navbar-inverse" role="navigation">
 	<div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Playground</a>
  </div>


  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
    	
    	
    	
      <li class="home" <? if($location =='home') echo "active";?>><a href="./">Home</a></li>
      <li class="contact<? if($location =='contacts') echo "active";?>"><a href="contacts.php">Contacts</a></li>
      <li class="links"<? if($location =='links') echo "active";?>><a href="links.php">Links</a></li>
      
      
     
      		
      
 
      		 <?foreach ($pages as $name => $data): ?>
				      <li class="<?=$data['section']?> <? if($location ==$data['section']) echo "active";?>">
				      	<a href="<?=$data['url']?>" <?=$data['title']?> </a></li>
			 <? endforeach; ?>
      
      
      
      
      
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
    
    <ul class="nav navbar-nav navbar-right">
      <li></li>
     
    </ul>
    <p class="navbar-text pull-right">Signed in As<a href="#" class="navbar-link">Talal Nweiran</a> </p> 
    </div>
  </div>
  
  	<pre class="container">
  		<? echo json_encode($pages, 1); ?>
  	</pre>
  	
</nav>
