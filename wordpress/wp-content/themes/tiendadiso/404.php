<?php
    get_header();
?>

    <body>
    	<div id="notfound">
    		<div class="notfound">
    			<div class="notfound-404">
    				<h1>404</h1>
    				<h2>¿Perdido?</h2>
    			</div>
    			
    			<a class="mb-5" href="<?php echo get_option('Home');?>">Inicio</a>
    			
    			<div class="miformulariosearch bordeado mt-3 bordeblanco">
                    <?php get_search_form(); ?>
                </div>
    			
    		</div>
    	</div>
    </body>
</html>