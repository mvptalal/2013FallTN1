<div class="container">
<div id="category-list">
	<ul "nav nav-pills" data-bind="foreach: categories">
		<li data-bind="css: {active: currentCategory:data}"> 
			<a href="#" data-bind="text: Name"></a>
		</li>
	</ul>
</div>
<div id="item-list">
	
</div>
<div id="shopping-cart-list">
	
</div>
</div>
<script type="text/html" id="shopping-cart-template">
	<span class="glyphicon glyphicon-shopping-cart"></span>
	Cart
	<span class="badge">0</span>
	
</script>
<? function Scripts(){ ?>
        <? global $model; ?>
        <script src="//cdnjs.cloudflare.com/ajax/libs/knockout/3.0.0/knockout-min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/knockout.mapping/2.4.1/knockout.mapping.js"></script>
        
        <script type="text/javascript">
        $(function(){
        	
        	//injecting to html shoppinh cart in home page
        	$("#shopping-cart").html($("#shopping-cart-template").html());
        	
        	var vm = {
        		categories: ko.ObservableArray(), //: means = in jquery
        		currentCategory: ko.observable(),
        		selectCategory: function(){
        			vm.currentCategory(this);//what ever calls this function
        		}
        		
        	};
       		 	ko.applyBindings(vm);
       		 	$.getJSON('?action=categories&formate=json', null, function(results){
       		 		vm.categories(results.model); //gives you an array of categories 
       		 	})
        });
        </script>
        <? } ?>

