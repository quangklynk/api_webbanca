<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>

  <!-- Font, Icon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
  <link rel="stylesheet" href="https://unpkg.com/flickity@2.2.2/dist/flickity.min.css" />
  <script src="https://unpkg.com/flickity@2.2.2/dist/flickity.pkgd.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />

  <!-- Bootstrap -->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/reset.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/header.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/footer.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/home.css" />
  <style>
    .heart {
      display: inline-block;
      font-size: 50px;
      color: rgb(248, 252, 54);
      animation: beat 0.25s infinite alternate;
      transform-origin: center;
    }

    /* Heart beat animation */
    @keyframes beat {
      to {
        transform: scale(1.5);
      }
    }

    .affix {
      top: 0;
      width: 100%;
      z-index: 9999 !important;
    }

    .affix+.container-fluid {
      padding-top: 70px;
    }

    .navbar {
      margin-bottom: unset;
    }

    .flickity-viewport {
      height: 300px !important;
    }
  </style>

  <!-- JS -->
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
</head>

<body>
  <?php require('header.php') ?>

  <main style="padding: 25px 0px">
    <div class="container-main">
      <div class="slider-menu">
        <div class="carousel" data-flickity='{ "autoPlay": 1500, "pauseAutoPlayOnHover": false, "wrapAround": true }'>
          <?php foreach ($slider as $key => $value) : ?>
            <div class="carousel-cell">
              <img src="<?php echo base_url(); ?>resource/imgs/slide/<?= $value['image'] ?>" alt="" />
            </div>
          <?php endforeach ?>
        </div>
      </div>
      <div class="new-item">
        <div class="title-section">
          <h3>s???n ph???m m???i</h3>
        </div>
        <div class="grid-view-item">
          <?php foreach ($new_product as $value) : ?>
            <div class="grid-item">
              <img src="<?php echo base_url(); ?>resource/imgs/products/<?= $value['Image'] ?>" alt="" />
              <h5><?= $value['ProductName'] ?></h5>
              <p><?= $value['Price'] ?><span> ??</span></p>
            </div>

          <?php endforeach ?>
        </div>
      </div>
      <div class="hot-item">
        <div class="title-section">
          <h3>s???n ph???m n???i b???t</h3>
        </div>
        <div class="grid-view-item">
          <?php foreach ($hot_product as $key => $value) : ?>
            <div class="grid-item">
              <img src="<?php echo base_url(); ?>resource/imgs/products/<?= $value['Image'] ?>" alt="" />
              <h5><?= $value['ProductName'] ?></h5>
              <p><?= $value['Price'] ?><span> ??</span></p>
            </div>
          <?php endforeach ?>
        </div>
      </div>
    </div>
  </main>

  <section class="service">
    <div class="service-section">
      <div class="service-item">
        <div class="icon-service" style="width: 22%">
          <img src="<?php echo base_url(); ?>resource/imgs/deliveryu.png" alt="" />
        </div>
        <p>
          <span>CAM K???T CH???T L?????NG </span>Cam k???t h???i s???n t????i s???ng, s???ch
          100%, ????nh b???t t??? nhi??n, kh??ng h??a ch???t b???o qu???n...
        </p>
      </div>
      <div class="service-item">
        <div class="icon-service">
          <img src="<?php echo base_url(); ?>resource/imgs/icon-service.png" alt="" />
        </div>
        <p>
          <span>D???CH V??? CHU ????O </span>Ch??ng t??i quan t??m ?????n b???n m???i l??c m???i
          n??i h??y g???i cho ch??ng t??i khi b???n c???n t?? v???n ho???c c?? b???t k??? th???c m???c
          n??o ????
        </p>
      </div>
      <div class="service-item">
        <div class="icon-service"><img src="<?php echo base_url(); ?>resource/imgs/SEDFSDFS.jpg" alt="" /></div>
        <p>
          <span>GIAO H??NG T???N NH?? </span>?????ng lo v??? ship h??ng, h??y c??? li??n h???
          ?????t h??ng, Vietseafoods giao h???ng t???n n??i cho b???n
        </p>
      </div>
    </div>
  </section>

  <section class="business-partner">
    <div class="container-bp">
      <div class="title-bp">
        <h3>?????i T??c C???a Ch??? C??</h3>
      </div>
      <div class="menu-logo-partner">
        <ul>
          <li><img src="<?php echo base_url(); ?>resource/imgs/logo-contact/nikko.jpg" alt="" /></li>
          <li><img src="<?php echo base_url(); ?>resource/imgs/logo-contact/novotel.jpg" alt="" /></li>
          <li><img src="<?php echo base_url(); ?>resource/imgs/logo-contact/shangri.jpg" alt="" /></li>
          <li><img src="<?php echo base_url(); ?>resource/imgs/logo-contact/sheraton.jpg" alt="" /></li>
          <li><img src="<?php echo base_url(); ?>resource/imgs/logo-contact/sofitel.jpg" alt="" /></li>
          <li><img src="<?php echo base_url(); ?>resource/imgs/logo-contact/vietseafoods.jpg" alt="" /></li>
          <li><img src="<?php echo base_url(); ?>resource/imgs/logo-contact/vinpearl.jpg" alt="" /></li>
          <li><img src="<?php echo base_url(); ?>resource/imgs/logo-contact/winso.jpg" alt="" /></li>
        </ul>
      </div>
    </div>
  </section>

  <?php require('footer.php') ?>
</body>

</html>