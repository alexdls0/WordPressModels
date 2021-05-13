<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
    <a class="navbar-brand" href="<?php echo get_option('Home');?>">Top<span>Model</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="<?php echo get_option('Home');?>" class="nav-link">Inicio</a></li>
        <li class="nav-item"><a href="<?php echo get_page_link(get_page_by_title('Blog')->ID);?>" class="nav-link">Blog</a></li>
        <li class="nav-item"><a href="<?php echo get_page_link(get_page_by_title('Galería')->ID);?>" class="nav-link">Galería</a></li>
        <li class="nav-item"><a href="<?php echo get_page_link(get_page_by_title('Archivos')->ID);?>" class="nav-link">Archivos</a></li>
        <li class="nav-item"><a href="<?php echo get_page_link(get_page_by_title('Contacto')->ID);?>" class="nav-link">Contacto</a></li>
        <li class="nav-item"><a href="<?php echo get_page_link(get_page_by_title('Privado')->ID);?>" class="nav-link">Zona Privada</a></li>
        </ul>
    </div>
    </div>
</nav>