<footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5 d-flex">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Sobre nosotros</h2>
              <p>Nuestra agencia de modelos ha incrementado su volumen de trabajo y clientes que confían en nuestro criterio por la calidad de los profesionales
              de la que disponemos.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Marcas colaboradoras</h2>
              <ul class="list-unstyled">
                <li><a href="https://www.dior.com">DIOR</a></li>
                <li><a href="https://www.nike.com">NIKE</a></li>
                <li><a href="https://www.inditex.com/">INDITEX</a></li>
                <li><a href="https://www2.hm.com">H&M</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Enlaces rápidos</h2>
              <ul class="list-unstyled">
                <li><a href="<?php echo get_option('Home');?>">Inicio</a></li>
                <!--li><a href="<?php echo get_page_link(get_page_by_title('About')->ID);?>">Nosotros</a></li-->
                <li><a href="<?php echo get_page_link(get_page_by_title('Blog')->ID);?>">Blog</a></li>
                <li><a href="<?php echo get_page_link(get_page_by_title('Gallery')->ID);?>">Galería</a></li>
                <li><a href="<?php echo get_page_link(get_page_by_title('Archivos')->ID);?>">Archivos</a></li>
                <li><a href="<?php echo get_page_link(get_page_by_title('Contacto')->ID);?>">Contacto</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Póngase en contacto</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><a href="<?php echo get_page_link(get_page_by_title('Contacto')->ID);?>"><span class="icon icon-map-marker"></span><span class="text">Calle de Luchana, 23, 28010 Madrid</span></a></li>
                  <li><a href="<?php echo get_page_link(get_page_by_title('Contacto')->ID);?>"><span class="icon icon-phone"></span><span class="text">+34 915 35 81 90</span></a></li>
                  <li><a href="<?php echo get_page_link(get_page_by_title('Contacto')->ID);?>"><span class="icon icon-envelope"></span><span class="text">info@topmodel.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>
                document.write(new Date().getFullYear());

              </script> Todos los derecho reservados
              <!--<i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>-->
            </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div> 


    <!--<script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>-->

    <?php wp_footer(); ?>
  </body>

</html>