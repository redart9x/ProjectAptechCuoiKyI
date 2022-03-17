<meta charset="utf-8">
<table class="table  table-hover table-striped table-bordered" >
<tr>
	<th scope="col" width="5%">ID</th>
	<th scope="col" width="5%">BRAND ID</th>
	<th scope="col" width="20%">FOOD NAME</th>
	<th scope="col" width="10%">Image</th>
	<th scope="col" width="10%">PRICE</th>
	<!-- <th scope="col" width="20%">Description</th> -->
	<th scope="col" width="5%">Status</th>
	<th scope="col" width="10%">Action</th>
</tr>

<?php 
	foreach($products as $item): ?>
		<tr>
			<td scope="row" ><?=$item['id']?></td>
			<td scope="row" ><?=$item['brand_id']?></td>
			<td scope="row" ><?=$item['name']?></td>
			<td scope="row" ><img src="../image/foods/<?=$item['image']?>" width=50px></td>
			<td scope="row" ><?=number_format($item['price'],0,',','.')?></td>
			<td scope="row" ><?=$item['status']==1? "Active":"Unactive"?></td>
			<td>
				
				<div class="d-grid gap-2 d-md-flex justify-content-md-end">
					<a href="?request=updateFood&foodid=<?=$item['id']?>&brandid=<?=$item['brand_id']?>">
  						<button class="btn btn-warning me-md-2" type="button" style="width: 70px;">Sửa</button>
  					</a>
  					<a href="?request=deleteFood&foodid=<?=$item['id']?>" onclick="return confirm('Are You Sure?')">
  						<button class="btn btn-danger" type="button" style="width: 70px;">Xóa</button>
  					</a>
				</div>

			</td>
			
		</tr>

	<?php endforeach;?>
</table>

<?php include "../layout/paginator.php" ?>

<a href="?request=addproduct">
<button class="btn btn-primary">Thêm Mới</button>
</a>