<section class="sec-footer">
  <div class="container">
      <div class="footer-wrapper footer grid-12">
          <div class="footer-left grid-6">
              <div class="footer-left-item grid-6">
                  <a href="#">Jl. Mangga no 2 Congcat, Sleman, Yogyakarta</a>
                  <a href="#">+6285741678304</a>
                  <a href="#">Rental@gmail.com</a>
              </div>
              <div class="footer-left-item grid-6">
                  <a href="<?= base_url('customer/dashboard') ?>#header">Get Started</a>
                  <a href="<?= base_url('customer/dashboard') ?>#why">why chose rental</a>
                  <a href="<?= base_url('customer/dashboard') ?>#pricing">pricing</a>
              </div>
          </div>
          <div class="footer-right grid-6">
              <div class="footer-right-item grid-6">
                  <a href="#">
                      <img src="<?= base_url('assets/') ?>img/footer/Phone.svg" alt="">
                      <span>+6285741678304</span>
                  </a>
                  <a href="#">
                      <img src="<?= base_url('assets/') ?>/img/footer/Mail.svg" alt="">
                      <span>farkhanul.azhar@gmail.com</span>
                  </a>
              </div>
          </div>
      </div>
  </div>
</section>

    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url('assets/assets_shop') ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/assets_shop') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script type="module" src="<?= base_url('assets/') ?>js/main.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>