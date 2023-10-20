<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>Rental Mobil</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/psuedo.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/styles.css">
    

  <body style="background-color : #000">
  <nav>
    <div class="container">
      <div class="nav-wrapper nav grid-12">
        <a href="#" class="nav-brand grid-3">
          <img src="<?= base_url('assets/') ?>img/bg/logo.png" alt="">
          <span>Rental</span>
        </a>
        <div class="nav-menu grid-6">
          <a href="<?= base_url('customer/dashboard'); ?>" class="nav-menu-item">Home</a>
          <a href="<?= base_url('customer/data_mobil') ?>" class="nav-menu-item">Mobil</a>
          <a href="<?= base_url('customer/transaksi') ?>" class="nav-menu-item">Transaksi</a>
        </div>
        <div class="nav-btn grid-3">
          <?php if($this->session->userdata('nama')){ ?>
          <span class="nav-welcome">Hi <?= $this->session->userdata('nama'); ?></span>
          <a href="<?= base_url('auth/logout'); ?>" class="nav-btn-item bg-red btn">logout</a>
          <?php }
          else{ ?>
          <a href="<?= base_url('auth/login'); ?>" class="nav-btn-item bg-green btn">login</a>
          <?php } ?>
          <a href="<?= base_url('register') ?>" class="nav-btn-item bg-blue btn">register</a>
        </div>
      </div>
    </div>
  </nav>