<div class="container" style="margin-top: 70px; padding-bottom: 100px;">
<div class="section ourTeam">
  <div class="row">
    <?php foreach($result as $item): ?>
    <div class="col-sm-8 offset-sm-2 offset-md-0 col-xs-10 col-xl-3 col-lg-4 col-md-6 i">
      <div class="c text-center">
        <div class="wrap">
          <img src="image/character/<?= $item['image']?>" alt="#"  width="235px" height="220px" class="img-responsive">
          <div class="info">
            <h3 class="name"><?= $item['name'];?></h3>
          </div>
        </div>
        <div class="more" style="text-align:justify">
          <p ><?= $item['story'];?></p>
        </div>
      </div>
    </div>
    <?php endforeach; ?>

  </div>
</div>
</div>

<?php include "./layout/paginator.php" ?>
