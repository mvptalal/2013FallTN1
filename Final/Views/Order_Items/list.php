<link href='//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css' type="text/css" rel="stylesheet" />

<div class="container">

<h2>Order Items</h2>

<table class="table table-hover table-bordered table-striped">
	<thead>
	<tr>
		<th>Order Id</th>
		<th>Product Id</th>
		<th>Type</th>
		<th></th>
		
	</tr></thead>	
	<tbody>

<?foreach ($model as $rs) : ?>
	<tr>
		<td><?=$rs['Order_id']?></td> 
		<td><?=$rs['Product_id']?> </td>
		
		<td>
			
		</td>
	</tr>
<? endforeach ?>
</tbody>

</table>

</div>
<? function Scripts() { ?>
	<script src='//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js' ></script>
	<script type="text/javascript">
		$(".table").dataTable();
	</script>
<?	}  ?>
