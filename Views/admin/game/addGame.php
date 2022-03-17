<div class="container-fluid bg" >
	<div class="row justify-content-center">
		<div class="col-md-3 col-sm-6 col-xs-12 row-container">
			<form method="POST" enctype="multipart/form-data">
				<h3>ADD A NEW GAME</h3>
				<p style="color:red;"><?php echo $alert??""; ?></p>
				<label for="name">Game Name: </label> <input class="form-control" id="name" type="text" name="name" required>
				<label for="image">Image: </label> <input class="form-control" id="image" type="file" name="image"  required>
				<label for="detail">Details: </label> <textarea name="details" id="detail" rows="4" class="form-control"> </textarea>
				<label>Status: </label>
					<div class="form-check">
						<input id="game-active" class="form-check-input" type="radio" name="status"  value="1">
						<label for="game-active" class="form-check-label">
				    		Kích hoạt
				  		</label>
				  	</div>
					<div class="form-check">
						<input id="game-unactive" class="form-check-input" type="radio" name="status"  value="0">
						<label class="form-check-label" for="game-unactive">
				    		Hủy kích hoạt
				  		</label>
				  	</div>
				
				<input type="submit" name="submit" value="Thêm mới" class="btn btn-primary" style="margin-top: 10px;width: 150px;">
			</form>
		</div>
	</div>
</div>