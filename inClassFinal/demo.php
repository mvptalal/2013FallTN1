<?php include('FinalTBox.php'); ?>
<body>
	
<div class="container">
	<h1> In Class Final </h1>
<form method="post" class="navbar-form pull-left" action="Search.php" >
<input class="span4" id="searchg" name="searchg" type="text" placeholder="Search">
<button class="btn" type="submit">Search City/State</button>
</form>

<script src="assets/ui/jquery.ui.core.js"></script>
<script src="assets/ui/jquery.ui.widget.js"></script>
<script src="assets/ui/jquery.ui.position.js"></script>
<script src="assets/ui/jquery.ui.menu.js"></script>
<script src="assets/ui/jquery.ui.autocomplete.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
$.ajax({
    url: 'Get_Auto.php',
    dataType: 'json',
    success: function($conn){
    $('#searchg').autocomplete(
    {
    source: data,
    minLength: 1    
    });
    }
          });
		  
});
</script>


</div>

</body>