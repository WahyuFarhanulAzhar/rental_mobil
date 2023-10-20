
<section class="sec-cars bg-dark">
  <div class="container">
    <div class="cars-wrapper cars grid-12">
      <div class="session d-flex grid-12">
        <?= $this->session->flashdata('pesan'); ?>
      </div>
    <?php foreach($mobil as $mb): ?>
      <div class="cars-item grid-6">
        <div class="cars-item-card">
          <div class="cars-item-card-heading grid-12">
              <img src="<?= base_url('assets/upload/') . $mb->gambar ?>" alt="">
              <h5><?= $mb->merek; ?></h5>
              <span class="span-color">Rp. <?= number_format($mb->harga,0,',','.'); ?>,- <span>/hari</span></span>
          </div>
          <div class="cars-item-card-desc grid-12">
            <?php 
              if($mb->status == "1"){ ?>
                <div class="elipes bg-green"></div>
                <span> Tersedia </span></li>
              <?php }
              else{ ?>
                <div class="elipes bg-red"></div>
                <span> Tidak Tersedia </span></li>
            <?php } ?>
          </div>
          <div class="cars-item-card-row grid-12">
            <?php if($mb->ac == '1'){ ?>
              <span href="#" class="bg-green">AC</span>
            <?php } 
            else{ ?>
              <span class="bg-red">Non AC</span>
            <?php } ?>
            <?php if($mb->sopir == '1'){ ?>
              <span href="#" class="bg-green">Sopir</span>
            <?php } 
            else{ ?>
              <span class="bg-red">Non Sopir</span>
            <?php } ?>
            <?php if($mb->mp3_player == '1'){ ?>
              <span href="#" class="bg-green">MP3 Player</span>
            <?php } 
            else{ ?>
              <span class="bg-red">Non MP3 Player</span>
            <?php } ?>
            <?php if($mb->central_lock == '1'){ ?>
              <span href="#" class="bg-green">Central Lock</span>
            <?php } 
            else{ ?>
              <span class="bg-red">Non Central Lock</span>
            <?php } ?>
          </div>
          <div class="cars-item-card-bot grid-12">
            <?php 
              if($mb->status == "1"){ ?>
                <a href="<?= base_url('customer/rental/tambah_rental/'.$mb->id_mobil) ?>" class="btn bg-primary">Rent Now</a>
              <?php }
              else{ ?>
                <a href="#" class="btn bg-red">Booked</a>
            <?php } ?>
            <a href="<?= base_url('customer/data_mobil/detail_mobil/'.$mb->id_mobil) ?>" class="btn bg-blue">Detail</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


