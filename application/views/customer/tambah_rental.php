<section class="sec-rent">
  <div class="container">
    <div class="rent-wrapper rent d-flex fd-column">
      <h2 class="rent-header">
        Form Rental Mobil
      </h2> 
      <div class="rent-body">
        <?php foreach($detail as $dt): ?>
        <form action="<?= base_url('customer/rental/tambah_rental_aksi') ?>" method="post">
          <div class="form-group">
            <label for="">Harga Sewa/hari</label>
            <input type="hidden" name="id_mobil" value="<?= $dt->id_mobil; ?>">
            <input type="text" name="harga" class="form-control" value="<?= $dt->harga; ?>" readonly>
          </div>
          <div class="form-group">
            <label for="">Denda/hari</label>
            <input type="text" name="denda" class="form-control" value="<?= $dt->denda; ?>" readonly>
          </div>
          <div class="form-group">
            <label for="">Tanggal Rental</label>
            <input type="date" name="tgl_rental" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Tanggal Kembali</label>
            <input type="date" name="tgl_kembali" class="form-control">
          </div>
          <div class="form-btn d-flex grid-12 jc-center">
            <button type="submit" class="btn bg-primary">Rental</button>
            <a href="<?= base_url('customer/data_mobil') ?>" type="submit" class="btn bg-red">Cancel</a>
          </div>
        </form>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>