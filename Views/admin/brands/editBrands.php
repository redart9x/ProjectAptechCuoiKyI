<div class="container-fluid bg" >
	<div class="row justify-content-center">
		<div class="cold-md-3 col-sm-6 col-xs-12 row-container">
<form method="POST">
	<h3>UPDATE BRAND</h3>
	<p style="color:red;"><?php echo $alert??""; ?></p>
	<label>ID: </label> <input class="form-control" type="text" name="brandId" readonly value="<?php echo $brands['id'] ?>">
	<label>Name: </label> <input class="form-control" type="text" name="brandName"  value="<?php echo $brands['brand_name'] ?>">

	<label>Status: </label>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="brandStatus"  value="1" <?=$brands['status']==1? 'checked' :""?>>
		<label class="form-check-label">
    		Active
  		</label>
  	</div>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="brandStatus"  value="0" <?=$brands['status']==0? 'checked' :""?>>
		<label class="form-check-label">
    		Unactive
  		</label>
  	</div>
	<input type="submit" name="submit" value="Change" class="btn btn-primary" style="margin-top:10px">
</form>
		</div>
	</div>
</div>