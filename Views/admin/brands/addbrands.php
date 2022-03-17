<div class="container-fluid bg my-5" >
	<div class="row justify-content-center">
		<div class="row-container">
			<form method="POST">
				<h3>ADD A NEW BRAND</h3>
				<p style="color:red;"><?php echo $alert??""; ?></p>
				<!-- <label>ID: </label>  -->
				<input class="form-control" type="text" name="brandId" style="display: none;">
				<label for="name">Name: </label> <input class="form-control" id="name" type="text" name="brandName" required>
				<label>Status: </label>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="brandStatus" id="brand-active" value="1">
						<label class="form-check-label" for="brand-active">
				    		Kích hoạt
				  		</label>
				  	</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="brandStatus" id="brand-unactive" value="0">
						<label class="form-check-label" for="brand-unactive">
				    		Hủy kích hoạt
				  		</label>
				  	</div>
				<input type="submit" name="submit" value="Thêm mới" class="btn btn-primary text-center" style="margin-top: 10px;width: 150px;">
			</form>
		</div>
	</div>
</div>