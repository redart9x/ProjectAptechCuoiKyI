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
<div class="container">
<div class="section ourTeam">
  <div class="row">
    <?php foreach($result as $item): ?>
    <div class="col-xs-6 col-sm-4 col-md-3 i">
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
    <?php endforeach; ?>
  </div>
</div>
</div>


<!-- MAP -->
<!-- <div id="map">Map</div>
<div style="text-align:center; margin-top: 70px; ">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d930.9816317015897!2d105.81840342920385!3d21.035625650854865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab0d6e603741%3A0x208a848932ac2109!2sAptech%20Computer%20Education!5e0!3m2!1svi!2s!4v1645102623406!5m2!1svi!2s" width="65%" height="450px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

</div> -->
