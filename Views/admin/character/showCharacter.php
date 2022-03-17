<meta charset="utf-8">
<table class="table  table-hover table-striped table-bordered" >
<tr>
	<th scope="col" width="5%">ID</th>
	<th scope="col" width="15%">CHARACTER NAME</th>
	<th scope="col" width="10%">IMAGE</th>
	<th scope="col" width="55%">STORY</th>
	<th scope="col" width="5%">STATUS</th>
	<th scope="col" width="10%">ACTION</th>
</tr>

<?php 
	foreach($character as $item): ?>
		<tr>
			<td scope="row" ><?=$item['id']?></td>
			<td scope="row" ><?=$item['name']?></td>
			<td scope="row" ><img src="../image/character/<?=$item['image']?>" width=50px></td>
			<td scope="row" ><?=$item['story']?></td>
			<td scope="row" ><?=$item['status']==1? "Active":"Unactive"?></td>
			<td>
				
				<div class="d-grid gap-2 d-md-flex justify-content-md-end">
					<a href="?request=updateCharacter&id=<?=$item['id']?>">
  						<button class="btn btn-warning me-md-2" type="button" style="width: 70px;">Sửa</button>
  					</a>
  					<a href="?request=deleteCharacter&id=<?=$item['id']?>" onclick="return confirm('Are You Sure?')">
  						<button class="btn btn-danger" type="button" style="width: 70px;">Xóa</button>
  					</a>
				</div>

			</td>
			
		</tr>

	<?php endforeach;?>
</table>

<?php include "../layout/paginator.php" ?>

<a href="?request=addCharacter">
<button class="btn btn-primary">Thêm Mới</button>
</a>