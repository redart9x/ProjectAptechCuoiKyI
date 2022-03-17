<style>
  @media only screen and (min-width: 1200px) {

    .item-food {
      max-width: 300px;
    }

    .list-food {
      justify-content: space-between;
    }
  }

  .nav-aside-food {
    width: 25%;
  }

  .list-food {
    padding-bottom: 100px;
  }

  .content-food {
    width: 75%;
    margin-left: 30px;
  }

  @media only screen and (max-width: 992px) {
    .nav-aside-food, .search-nav-container {
      width: 30% !important;
    }

    .content-food {
      width: 70%;
    }
  }

  @media only screen and (max-width: 576px) {
    .nav-aside-food, .search-nav-container {
      width: 30% !important;
    }

    .content-food {
      width: 70%;
    }
    .item-food {
      max-width: 200px !important;
    }
  }
</style>
<div class="d-flex" style="margin-top: 70px;">
  <div class="nav-aside-food">
    <?php include "./layout/search-nav.php" ?>
  </div>
  <div class="section ourTeam content-food">
    <div class="row m-0 list-food">
      <?php foreach ($result as $item) : ?>
        <div class="offset-md-1 offset-sm-2 offset-xl-0 offset-md-0 col-lg-4 col-xl-4 col-md-4 col-sm-6 col-xs-6 i item-food">
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

<?php include "./layout/paginator.php" ?>