<?php
    /*
        Template Name:Contacto
    */
?>
<?php
    get_header();
?>
<?php
    if(isset($_GET['emailcontacto'])){
        $correo = $_GET['emailcontacto'];
    }else{
        $correo="";
    }
?>
<body>
    <?php get_template_part('nav')?>
    <section class="hero-wrap hero-wrap-2 pantallacompleta" style="background-image:url('<?php echo get_template_directory_uri();?>/images/contacto.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center tituloarchive">
          <div class="text-center ftco-animate">
            <h1 class="bread mt-5">Contáctanos</h1>
            <a href="#contacto" class="smooth"><img class="bajar" src="<?php echo get_template_directory_uri();?>/images/down.png"/></a>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section" id="contacto">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="heading">Información de Contacto</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-4 d-flex">
          	<div class="con align-self-stretch p-5">
	            <p><span>Dirección:</span> Calle de Luchana, 23, 28010 Madrid</p>
	          </div>
          </div>
          <div class="col-md-4 d-flex">
          	<div class="con align-self-stretch p-5">
	            <p><span>Teléfono:</span> <a href="tel://1234567920">+34 915 35 81 90</a></p>
	          </div>
          </div>
          <div class="col-md-4 d-flex">
          	<div class="con align-self-stretch p-5">
	            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@topmodel.com</a></p>
	          </div>
          </div>
          <!--div class="col-md-3 d-flex">
          	<div class="con align-self-stretch p-5">
	            <p><span>Website</span> <a href="#">yoursite.com</a></p>
	          </div>
          </div-->
        </div>
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
            <form action="#">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Nombre">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Email" value="<?php echo $correo; ?>">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Asunto">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Mensaje"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Enviar Mensaje" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          	<div id="map"></div>
          </div>
        </div>
      </div>
    </section>

<?php
    get_footer();
?>