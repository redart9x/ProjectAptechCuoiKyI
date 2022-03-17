<div class="container-fluid bg my-5" >
	<div class="row justify-content-center">
		<div class="row-container">
			<form method="POST" enctype="multipart/form-data">
				<h3>EDIT THIS GAME</h3>
				<p style="color:red;"><?php echo $alert??""; ?></p>
				<label for="name">Game Name: </label> <input class="form-control" id="name" type="text" name="name" required value="<?=$result['name']?>">
				<label for="image">Image: </label> <input class="form-control" id="image" type="file" name="image" >
                <img src="../image/character/<?=$result['image']?>" alt="" class="img-thumbnail">
				<label for="detail">Details: </label> <textarea name="details" id="detail" rows="4" class="form-control"><?=$result['detail']?></textarea>
				<label>Status: </label>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="status"  value="1" id="game-active" <?=$result['status']==1? "checked":""?>>
						<label class="form-check-label" for="game-active">
				    		Kích hoạt
				  		</label>
				  	</div>
					<div class="form-check">
						<input class="form-check-input" id="game-unactive type="radio" name="status"  value="0" <?=$result['status']==0? "checked":""?>>
						<label class="form-check-label" for="game-unactive">
				    		Hủy kích hoạt
				  		</label>
				  	</div>
				
				<input type="submit" name="submit" value="Cập nhật" class="btn btn-primary" style="margin-top: 10px;width: 150px;">
			</form>
		</div>
	</div>
</div>