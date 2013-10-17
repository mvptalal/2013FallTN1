<link href='//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css' type="text/css" rel="stylesheet" />

<div class="container">

<h2>Products</h2>

<table class="table table-hover table-bordered table-striped">
	<thead>
	<tr>
		<th>Suplier</th>
		<th>Product Category</th>
		<th>Name</th>
		<th>Price</th>
		<th>Discription</th>
		<th>Picture</th>
		<th></th>
		
	</tr></thead>	
	<tbody>

<?foreach ($model as $rs) : ?>
	<tr>
		<td><?=$rs['Suplier_id']?></td> 
		<td><?=$rs['Product_Category_id']?> </td>
		<td><?=$rs['Name']?> </td>
		<td><?=$rs['Price']?> </td>
		<td><?=$rs['Discription']?> </td>
		<td><?=$rs['Picture_Url']?> </td>
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
