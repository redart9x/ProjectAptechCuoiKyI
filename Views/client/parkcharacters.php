<div class="container" style="margin-top: 70px;">
<div class="section ourTeam">
  <div class="row">
    <?php foreach($result as $item): ?>
    <div class="col-xs-6 col-sm-4 col-md-3 i">
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
