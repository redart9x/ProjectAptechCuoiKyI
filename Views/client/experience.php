<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" >
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/carousel/1.jpg" class="d-block w-100" alt="...">
      <!-- <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div> -->
    </div>
    <div class="carousel-item">
      <img src="image/carousel/2.png" class="d-block w-100" alt="...">
      <!-- <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div> -->
    </div>

    <div class="carousel-item">
      <img src="image/carousel/3.png" class="d-block w-100" alt="...">
      <!-- <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div> -->
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<h3 style="margin: 20px 20px 20px 20px;text-align:center;color:#f53877">
Chơi Thỏa Thích - Vui Hết Mình
</br> Cùng Các Trò Chơi Trong FUNZONE
</h3>
<!-- game -->
<div class="container" style="padding-bottom: 100px;">
<div class="section ourTeam">
  <div class="row">
    <?php 
    if (mysqli_num_rows($result) > 0):
    foreach($result as $item): ?>
    <div class="col-sm-8 offset-sm-2 offset-md-0 col-xs-10 col-xl-3 col-lg-4 col-md-6 i">
      <div class="c text-center">
        <div class="wrap">
          <img src="image/game/<?= $item['image']?>" alt="#"  width="235px" height="220px" class="img-responsive">
          <div class="info">
            <h3 class="name" style="font-size: x-large;"><?= $item['name'];?></h3>
          </div>
        </div>
        <div class="more">
          <p style="text-align:justify"><?= $item['detail'];?></p>
        </div>
      </div>
    </div>
    <?php endforeach;
    else:
      ?>
      <div>Không có dữ liệu!</div>
      <?php
    endif;
    ?>
  </div>
</div>
</div>

<?php include "./layout/paginator.php" ?>
