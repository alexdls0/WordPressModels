<?php
    get_header();
?>

<body>

    <?php get_template_part('nav')?>

    <section class="hero-wrap d-flex js-fullheight">
      <div class="overlay"></div>
      <div class="forth js-fullheight d-flex align-items-center" style="background-image: url('<?php echo get_template_directory_uri();?>/images/bg_1.jpg');">
        <div class="text text-center">
          <span class="subheading">Top Model</span>
          <h1>Tu Carrera de Modelo</h1>
          <h2 class="mb-5">Somos una Agencia Profesional de Modelos con Sede en Madrid</h2>
          <p><a href="<?php echo get_page_link(get_page_by_title('Contacto')->ID);?>" class="btn-custom py-3 pr-2">Contáctanos</a></p>
        </div>
      </div>
      <div class="third about-img js-fullheight" style="background-image: url('<?php echo get_template_directory_uri();?>/images/bg_2.jpg');">
      </div>
    </section>

    <!--<section class="ftco-consult bg-primary">
      <div class="container-fluid px-md-4">
        <div class="row align-items-center">
          <div class="col-lg-2 text-lg-right">
            <h3 class="mb-4 mb-lg-0">Search A Model</h3>
          </div>
          <div class="col-lg-10">
            <form action="#" class="consult-form">
              <div class="d-lg-flex align-items-md-end">
                <div class="form-group mb-3 mb-lg-0 mr-4">
                  <div class="form-field">
                    <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">Height</option>
                        <option value="">5.5</option>
                        <option value="">5.6</option>
                        <option value="">5.7</option>
                        <option value="">5.8</option>
                        <option value="">5.9</option>
                        <option value="">6</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-3 mb-lg-0 mr-4">
                  <div class="form-field">
                    <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">Bust</option>
                        <option value="">85cm</option>
                        <option value="">90cm</option>
                        <option value="">95cm</option>
                        <option value="">100cm</option>
                        <option value="">105cm</option>
                        <option value="">110cm</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-3 mb-lg-0 mr-4">
                  <div class="form-field">
                    <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">Weist</option>
                        <option value="">65</option>
                        <option value="">70</option>
                        <option value="">75</option>
                        <option value="">80</option>
                        <option value="">85</option>
                        <option value="">90</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-3 mb-lg-0 mr-4">
                  <div class="form-field">
                    <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">Hips</option>
                        <option value="">90</option>
                        <option value="">95</option>
                        <option value="">100</option>
                        <option value="">105</option>
                        <option value="">110</option>
                        <option value="">115</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-3 mb-lg-0 mr-4">
                  <div class="form-field">
                    <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">Eye</option>
                        <option value="">Amber</option>
                        <option value="">Blue</option>
                        <option value="">Brown</option>
                        <option value="">Gray</option>
                        <option value="">Green</option>
                        <option value="">Black</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="submit" value="Search" class="btn btn-primary py-3 px-4">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>-->

    <section class="ftco-section ftco-services">
		  <div class="container">
		    <div class="row">
		      <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
		        <div class="media block-6 services">
		          <div class="icon d-flex justify-content-center align-items-center mb-4">
		            <span class="flaticon-diamond"></span>
		          </div>
		          <div class="media-body">
		            <h3 class="heading">Encontrar una agencia</h3>
		            <p>Aconsejamos a modelos que quieran empezar su carrera su profesional.</p>
		          </div>
		        </div>
		      </div>
		      <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
		        <div class="media block-6 services">
		          <div class="icon d-flex justify-content-center align-items-center mb-4">
		            <span class="flaticon-cosmetics"></span>
		          </div>
		          <div class="media-body">
		            <h3 class="heading">Tipos de modelaje</h3>
		            <p>Apostamos por una gran variedad de tipos de modelaje, desde deportivo hasta pasarela.</p>
		          </div>
		        </div>
		      </div>
		      <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
		        <div class="media block-6 services">
		          <div class="icon d-flex justify-content-center align-items-center mb-4">
		            <span class="flaticon-fashion"></span>
		          </div>
		          <div class="media-body">
		            <h3 class="heading">Freelance</h3>
		            <p>No descartamos a ningún profesional que trabaje por su cuenta.</p>
		          </div>
		        </div>
		      </div>
		      <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
		        <div class="media block-6 services">
		          <div class="icon d-flex justify-content-center align-items-center mb-4">
		            <span class="flaticon-loupe"></span>
		          </div>
		          <div class="media-body">
		            <h3 class="heading">Búsqueda de modelos</h3>
		            <p>Disponemos de una amplia base de datos de modelos con las que ya hemos trabajado.</p>
		          </div>
		        </div>
		      </div>
		    </div>
		  </div>
		</section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url('<?php echo get_template_directory_uri();?>/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row d-md-flex align-items-center">
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="1000">278</strong>
                <span>Modelos</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="25">25</strong>
                <span>Agencias</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="18">18</strong>
                <span>Premios</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="89">89</strong>
                <span>Eventos</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url('<?php echo get_template_directory_uri();?>/images/bg_1.jpg');">
          </div>
          <div class="col-md-7 wrap-about pt-md-5 ftco-animate">
            <div class="heading-section mb-5 pt-5 pl-md-5">
              <span class="subheading">Bienvenido a Top Model</span>
              <h2 class="mb-4">Agencia de Modelos</h2>
            </div>
            <div class="pr-md-3 pr-lg-5 pl-md-5 mr-md-5 mb-5">
              <div class="services-wrap d-flex">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="flaticon-cosmetics"></span>
                </div>
                <div class="media-body pl-4">
                  <h3 class="heading">Espectáculos de Moda</h3>
                  <p>Realizamos eventos públicos o privados mostrado las últimas tendencias en nuestras mejores modelos.</p>
                </div>
              </div>
              <div class="services-wrap d-flex">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="flaticon-cosmetics"></span>
                </div>
                <div class="media-body pl-4">
                  <h3 class="heading">Sesiones de Foto</h3>
                  <p>Realizamos sesiones de fotos con profesionales con gran experiencia en el mundo del modelaje.</p>
                </div>
              </div>
              <div class="services-wrap d-flex">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="flaticon-cosmetics"></span>
                </div>
                <div class="media-body pl-4">
                  <h3 class="heading">Sesiones de Video</h3>
                  <p>Nuestros modelos ponen cara a prestigiosas marcas que confían en nosotros para sus spots publicitarios.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <span class="subheading">Modelos</span>
            <h2 class="mb-4">Algunas de nuestras modelos</h2>
            <p>Ya son varios años en los cuales la agencia ha disponido con algunos de los modelos
            profesionales más famosos del mundo de la pasarela.</p>
          </div>
        </div>
      </div>
      <div class="container-fluid px-md-0">
        <div class="row no-gutters">
          <div class="col-md-4">
            <div class="model img d-flex align-items-end" style="background-image: url('<?php echo get_template_directory_uri();?>/images/model-1.jpg');">
            	<div class="desc w-100 px-4">
								<div class="info w-100 mb-4">
									<ul>
										<li><span>Edad:</span><span>29</span></li>
										<li><span>Altura:</span><span>179</span></li>
										<li><span>Busto:</span><span>85</span></li>
										<li><span>Cintura:</span><span>65</span></li>
										<li><span>Caderas:</span><span>90</span></li>
										<li><span>Calzado:</span><span>39</span></li>
										<li><span>Ojos:</span><span>Marrones</span></li>
									</ul>
								</div>
	              <div class="text w-100 mb-3">
	              	<h2><a>Patricia <br>Becket</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="model img d-flex align-items-end" style="background-image: url('<?php echo get_template_directory_uri();?>/images/model-2.jpg');">
            	<div class="desc w-100 px-4">
								<div class="info w-100 mb-4">
									<ul>
                    <li><span>Edad:</span><span>26</span></li>
										<li><span>Altura:</span><span>185</span></li>
										<li><span>Busto:</span><span>75</span></li>
										<li><span>Cintura:</span><span>70</span></li>
										<li><span>Caderas:</span><span>80</span></li>
										<li><span>Calzado:</span><span>42</span></li>
										<li><span>Ojos:</span><span>Marrones</span></li>
									</ul>
								</div>
	              <div class="text w-100 mb-3">
	              	<h2><a>Emily <br>Stewart</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="model img d-flex align-items-end" style="background-image: url('<?php echo get_template_directory_uri();?>/images/model-3.jpg');">
            	<div class="desc w-100 px-4">
								<div class="info w-100 mb-4">
									<ul>
                    <li><span>Edad:</span><span>24</span></li>
										<li><span>Altura:</span><span>168</span></li>
										<li><span>Busto:</span><span>65</span></li>
										<li><span>Cintura:</span><span>65</span></li>
										<li><span>Caderas:</span><span>70</span></li>
										<li><span>Calzado:</span><span>38</span></li>
										<li><span>Ojos:</span><span>Verdes</span></li>
									</ul>
								</div>
	              <div class="text w-100 mb-3">
	              	<h2><a>Sofia <br>Scott</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="model img d-flex align-items-end" style="background-image: url('<?php echo get_template_directory_uri();?>/images/model-4.jpg');">
            	<div class="desc w-100 px-4">
								<div class="info w-100 mb-4">
									<ul>
                    <li><span>Edad:</span><span>21</span></li>
										<li><span>Altura:</span><span>165</span></li>
										<li><span>Busto:</span><span>55</span></li>
										<li><span>Cintura:</span><span>65</span></li>
										<li><span>Caderas:</span><span>70</span></li>
										<li><span>Calzado:</span><span>36</span></li>
										<li><span>Ojos:</span><span>Verdes</span></li>
									</ul>
								</div>
	              <div class="text w-100 mb-3">
	              	<h2><a>Chloe <br>Johnson</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="model img d-flex align-items-end" style="background-image: url('<?php echo get_template_directory_uri();?>/images/model-5.jpg');">
            	<div class="desc w-100 px-4">
								<div class="info w-100 mb-4">
									<ul>
                    <li><span>Edad:</span><span>21</span></li>
										<li><span>Altura:</span><span>165</span></li>
										<li><span>Busto:</span><span>55</span></li>
										<li><span>Cintura:</span><span>65</span></li>
										<li><span>Caderas:</span><span>70</span></li>
										<li><span>Calzado:</span><span>36</span></li>
										<li><span>Ojos:</span><span>Verdes</span></li>
									</ul>
								</div>
	              <div class="text w-100 mb-3">
	              	<h2><a>Victoria <br>Henderson</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="model img d-flex align-items-end" style="background-image: url('<?php echo get_template_directory_uri();?>/images/model-6.jpg');">
            	<div class="desc w-100 px-4">
								<div class="info w-100 mb-4">
									<ul>
                  <li><span>Edad:</span><span>26</span></li>
										<li><span>Altura:</span><span>185</span></li>
										<li><span>Busto:</span><span>75</span></li>
										<li><span>Cintura:</span><span>70</span></li>
										<li><span>Caderas:</span><span>80</span></li>
										<li><span>Calzado:</span><span>42</span></li>
										<li><span>Ojos:</span><span>Marrones</span></li>
									</ul>
								</div>
	              <div class="text w-100 mb-3">
	              	<h2><a>Ella <br>Turner</a></h2>
	              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--<section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <span class="subheading">Testimony</span>
            <h2 class="mb-4">My satisfied customer says</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5 text-center">
                  <div class="user-img mb-5" style="background-image: url('<?php echo get_template_directory_uri();?>/images/person_1.jpg')">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Agent</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5 text-center">
                  <div class="user-img mb-5" style="background-image: url('<?php echo get_template_directory_uri();?>/images/person_2.jpg')">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Model</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5 text-center">
                  <div class="user-img mb-5" style="background-image: url('<?php echo get_template_directory_uri();?>/images/person_3.jpg')">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Model</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5 text-center">
                  <div class="user-img mb-5" style="background-image: url('<?php echo get_template_directory_uri();?>/images/person_1.jpg')">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Agent</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5 text-center">
                  <div class="user-img mb-5" style="background-image: url('<?php echo get_template_directory_uri();?>/images/person_1.jpg')">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Businessman</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>-->

    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url('<?php echo get_template_directory_uri();?>/images/bg_2.jpg');">
            <a href="https://vimeo.com/45830194" class="icon popup-vimeo d-flex justify-content-center align-items-center">
              <span class="icon-play"></span>
            </a>
          </div>
          <div class="col-md-6 py-5 wrap-about pb-md-5 ftco-animate">
            <div class="heading-section pt-md-5">
                <span class="subheading">Eventos</span>
                <h2 class="mb-4">Último Desfile</h2>
            </div>
            <div class="pb-md-5">
              <p>El último desfile en el que participaron modelos de nuestra agencia fue el pasado París Fashion Week Primavera Verano 2020. La capital francesa recibe a las casas de moda más antiguas y populares para presentar sus últimas colecciones. Tras Nueva York, Londres y Milán arís pone el broche de oro al mes de septiembre con un calendario lleno de nombres tan míticos en la moda como Chanel, Dior o Givenchy.</p>
              <p>El publico pudo disfrutar de colecciones espectaculares. Desde la feminidad de Chloé y sus vestidos vaporosos se ha visto compensada con prendas utility de grandes bolsillos, 
              y blazers con hombreras, pasando por Stella McCartney y su colección más sostenible hasta la fecha
              en la que hasta el 75% de sus materiales eran eco-friendly, llegando por último a la colección de 
              Giambattista Valli con sus flores bordadas en la ropa, decorando el rostro de las modelos, 
              o con vestidos con volantes imitando los pétalos de las rosas.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <span class="subheading">visite nuestro blog</span>
            <h2 class="mb-4">Última actualización</h2>
            <p>Esté al día sobre noticias del mundo de la moda, la alimentación y las tendencias en nuestro blog
            y comparta sus ideas con otros usuarios.</p>
          </div>
        </div>
        <!--<div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('<?php echo get_template_directory_uri();?>/images/image_1.jpg');">
              </a>
              <div class="text py-4">
                <div class="meta mb-3">
                  <div><a href="#">sept. 17, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <div class="desc">
                  <h3 class="heading"><a href="#">The Most Attractive Persons of the Hollywood</a></h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="100">
              <a href="blog-single.html" class="block-20" style="background-image: url('<?php echo get_template_directory_uri();?>/images/image_2.jpg');">
              </a>
              <div class="text py-4">
                <div class="meta mb-3">
                  <div><a href="#">sept. 17, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <div class="desc">
                  <h3 class="heading"><a href="#">The Most Attractive Persons of the Hollywood</a></h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="200">
              <a href="blog-single.html" class="block-20" style="background-image: url('<?php echo get_template_directory_uri();?>/images/image_3.jpg');">
              </a>
              <div class="text py-4">
                <div class="meta mb-3">
                  <div><a href="#">sept. 17, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <div class="desc">
                  <h3 class="heading"><a href="#">The Most Attractive Persons of the Hollywood</a></h3>
                </div>
              </div>
            </div>
          </div>
        </div>-->

        <div class="row">
          <?php
            $args = array(
              'posts_per_page' => 3,
              'post_type' => array('post','models_hiring'),
            );
            $custom = new WP_Query($args);
            if($custom->have_posts()):
              while($custom->have_posts()):
                $custom->the_post();
          ?>
          <div class="col-md-4 ftco-animate">
            <?php get_template_part('content',get_post_format()); ?>
          </div>
          <?php
              endwhile;
            endif;
              wp_reset_postdata();
          ?>
        </div>

      </div>
    </section>
<?php
    get_footer();
?>