<?php 
    /*
        Plugin Name: ejemploshortcode
        Plugin URI: https://download.diso.org
        Description: Custom shortcode
        Verion: 1.0.0
        Author: Diso
        Author URI: https://www.diso.org
        License: GPL2
        License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
    */
    
    /*function salute_callback($atts, $contenido){
        $name = shortcode_atts(array(
                    'name' => 'Pericles'
                ), $atts
            );
        return '<h1>Hola '.$name['name'].'</h1> <h2>'.$contenido.'</h2>';
    }
    add_shortcode('saludo','salute_callback');*/
    
    function firma_callback($atts, $contenido){
        $firma = shortcode_atts(array(
                    'nombre' => ''
                ), $atts
            );
        if(trim($contenido)  != ""){
            if($firma['nombre'] != ""){
                $ruta = plugins_url('disomodels')."/imgs/".$firma['nombre'].".png";
                return '<p>Firmado por:</p><img class="firmilla" src="'.$ruta.'"/><h5>'.$contenido.'</h5>';
            }
            return '<p>Firmado por:</p><h5>'.$contenido.'</h5>';
        }
        return "";
    }
    add_shortcode('firma','firma_callback');
?>