<div class="d-flex" style="margin-top: 70px;">
  <div style="width: 20%;">
    <?php include "./layout/search-nav.php" ?>
  </div>
  <div class="section ourTeam" style="width: 80%;">
    <div class="row m-0">
      <?php foreach ($result as $item) : ?>
        <div class="col-xs-6 col-sm-4 col-md-3 i">
          <div class="c text-center">
            <div class="wrap">
              <img src="image/foods/<?= $item['image'] ?>" alt="#" width="235px" height="220px" class="img-responsive">
              <div class="info">
                <h3 class="name"><?= $item['name']; ?></h3>
                <h4 class="position" style="color: red;"><?= number_format($item['price'], 0, ',', '.'); ?></h4>
              </div>
            </div>
            <div class="more">
              <p style="text-align:justify"><?= $item['detail']; ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</div>