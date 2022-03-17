<table class="table" >
<tr>
	<th scope="col" width="10%">ID</th>
	<th scope="col" width="70%">Brand</th>
	<th scope="col" width="10%">Status</th>
	<th scope="col" width="10%">Action</th>
</tr>

<?php 
	foreach($brands as $item): ?>
		<tr>
			<td scope="row" class="table-primary"><?php echo $item['id']?></td>
			<td scope="row" class="table-success"><?php echo $item['name']?></td>
			<td scope="row" class="table-danger"><?php echo $item['status']==1? "Active" :"Unactive"?></td>
			<td>
				
				<div class="d-grid gap-2 d-md-flex justify-content-md-end">
					<a href="?request=editBrands&brandid=<?php echo $item['id']?>">
  						<button class="btn btn-warning me-md-2" type="button" style="width: 70px;">Sửa</button>
  					</a>
  					<a href="?request=deletebrands&brandid=<?php echo $item['id']?>" onclick="return confirm('Are You Sure?')">
  						<button class="btn btn-danger" type="button" style="width: 70px;">Xóa</button>
  					</a>
				</div>

			</td>
		</tr>

	<?php endforeach;?>
</table>

<?php include "../layout/paginator.php" ?>

<a href="?request=addBrands">
<button class="btn btn-primary" formaction="?request=addBrands" >Thêm Mới</button></a>