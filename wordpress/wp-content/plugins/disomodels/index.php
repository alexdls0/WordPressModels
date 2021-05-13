 <?php 
    /*
        Plugin Name: disomodels
        Plugin URI: https://download.diso.org
        Description: Custom post type to show models
        Verion: 1.0.0
        Author: Diso
        Author URI: https://www.diso.org
        License: GPL2
        License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
    */
    function my_custom_sources() {
        wp_register_script( 'customscript', plugin_dir_url(__FILE__) . '/script.js', array( 'jquery' ), null, true );
        wp_enqueue_script( 'customscript' );
    
        wp_register_style('styles', plugin_dir_url(__FILE__) . '/styles.css');
        wp_enqueue_style('styles');
    }
    add_action('admin_init','my_custom_sources');
    add_action( 'wp_enqueue_scripts', 'my_custom_sources');
    
    function my_custom_post_models(){
        $support = array(
            'title',
            'editor',
            //'excerpt',
            //'custom-fields',
            'author',
            'comments',
            'revisions',
            'thumbnail',
        );
        
        $labels = array(
            'name' => _x('Modelos','plural'),
            'singular_name' => _x('Modelo','singular'),
            'menu_name' => _x('Modelos','admin menu'),
            'menu_admin_bar' => _x('Modelos','admin bar'),
            'add_new' => _x('Añadir nuevo','add new'),
            'add_new_item' => __('Añadir nuevo modelo'),
            'new_item' => __('Nuevo modelo'),
            'edit_item' => __('Editar modelo'),
            'view_item' => __('Ver modelo'),
            'all_items' => __('Todos los modelos'),
            'search_items' => __('Buscar modelo'),
            'not_found' => __('Ninguna modelo encontrada ...'),
        );
        
        $args = array(
            'supports' => $support,
            'labels' => $labels,
            'public' => true,
            'publicly_queryable' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'models_hiring'),
            'has_archive' => true,
            'hierarchical' => false,
            'show_in_menu' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-id-alt',
        );
        
        register_post_type('models_hiring', $args);
    }
    add_action('init','my_custom_post_models');
    
    function add_custom_post_taxonomy(){
        register_taxonomy_for_object_type('category','models_hiring');
        register_taxonomy_for_object_type('post_tag','models_hiring');
    }
    add_action('init','add_custom_post_taxonomy');
    
    function add_models_hiring_metabox(){
        $screens = array('models_hiring');

        foreach($screens as $screen){
            add_meta_box(
                'models_hiring_metabox',
                'Datos personales del/de la modelo',
                'models_hiring_metabox_callback',
                $screen,
                'normal'
            );
        }
    }
    add_action('add_meta_boxes','add_models_hiring_metabox');
    
    function models_hiring_metabox_callback($post){
        //Chequeo de la seguridad
        wp_nonce_field(basename(__FILE__),'models_hiring_metabox_nonce');
        
        //Harvesting de los datos
        $fechaNac = get_post_meta($post->ID, 'fechaNacModel', true);
        $pais = get_post_meta($post->ID, 'paisModel', true);
        $nombre = get_post_meta($post->ID, 'nombreModel', true);
        $apellidos = get_post_meta($post->ID, 'apellidosModel', true);
        $altura = get_post_meta($post->ID, 'alturaModel', true);
        $medidaPecho = get_post_meta($post->ID, 'pechoModel', true);
        $medidaCintura = get_post_meta($post->ID, 'cinturaModel', true);
        $medidaCadera = get_post_meta($post->ID, 'caderaModel', true);
        $aficiones = get_post_meta($post->ID, 'aficionesModel', true);
        $curriculum = get_post_meta($post->ID, 'curriculumModel', true);
        $disponible = get_post_meta($post->ID, 'disponibleModel', true);
        ?>
        <div id="customPostModel">
            <table>
                <tr>
                    <td>
                        <h3 class="description">Nombre </h3>
                        <input type="text" name="nombreModel" id="nombreModel" value="<?php echo
                                esc_attr($nombre); ?>" class="regular-text" /><br/>
                    </td>
                    <td>
                        <h3 class="description">Apellidos </h3>
                        <input type="text" name="apellidosModel" id="apellidosModel" value="<?php echo
                                esc_attr($apellidos); ?>" class="regular-text" /><br/>
                    </td>
                   
                </tr>
                <tr>
                    <td>
                        <h3 class="description">Fecha de nacimiento</h3>
                        <input type="date" name="fechaNacModel" id="fechaNacModel" value="<?php echo
                                esc_attr($fechaNac); ?>" class="regular-text" /><br/>
                    </td>
                    <td>
                        <h3 class="description">País</h3>
                        <input type="text" name="paisModel" id="paisModel" value="<?php echo
                                esc_attr($pais); ?>" class="regular-text" /><br/>
                    </td>
                   
                </tr>
                <tr>
                     <td>
                        <h3 class="description">Altura en cm</h3>
                        <input type="number" name="alturaModel" id="alturaModel" value="<?php echo
                                esc_attr($altura); ?>" class="regular-text" /><br/>
                    </td>
                    <td>
                        <h3 class="description">Medida del busto en cm</h3>
                        <input type="number" name="pechoModel" id="pechoModel" value="<?php echo
                                esc_attr($medidaPecho); ?>" class="regular-text" /><br/>
                    </td>
                </tr>
                <tr>
                    <td>
                         <h3 class="description">Medida de la cintura en cm</h3>
                        <input type="number" name="cinturaModel" id="cinturaModel" value="<?php echo
                                esc_attr($medidaCintura); ?>" class="regular-text" /><br/>
                    </td>
                    <td>
                        <h3 class="description">Medida de la cadera en cm</h3>
                        <input type="number" name="caderaModel" id="caderaModel" value="<?php echo
                                esc_attr($medidaCadera); ?>" class="regular-text" /><br/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3 class="description">Aficiones</h3>
                        <textarea id="aficionesModel" class="regular-text" name="aficionesModel"><?php echo esc_attr($aficiones); ?></textarea><br/>
                    </td>
                    <td>
                        <h3 class="description">Información profesional</h3>
                        <textarea id="curriculumModel" class="regular-text" name="curriculumModel"><?php echo esc_attr($curriculum); ?></textarea><br/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="checkboxModel">
                            <input type="checkbox" name="disponibleModel" id="disponibleModel" 
                                <?php  if($disponible){
                                    echo "checked";
                                }; ?> 
                            class="regular-text" />
                            <h3 class="description">Disponible</h3>
                        </div>    
                    </td>
                </tr>
            </table>
        </div>
        <?php
    }
    
    function save_metabox_fields($post_id){
        //Verificar el campo nonce
        if(!wp_verify_nonce($_POST['models_hiring_metabox_nonce'],basename(__FILE__))){
            return;
        }
        
        //Saneamos los campos
        $sanitizedFechaNac = sanitize_text_field($_POST['fechaNacModel']);
        $sanitizedPais = sanitize_text_field($_POST['paisModel']);
        $sanitizedNombre = sanitize_text_field($_POST['nombreModel']);
        $sanitizedApellidos = sanitize_text_field($_POST['apellidosModel']);
        $sanitizedAltura = sanitize_text_field($_POST['alturaModel']);
        $sanitizedMedidaPecho = sanitize_text_field($_POST['pechoModel']);
        $sanitizedMedidaCintura = sanitize_text_field($_POST['cinturaModel']);
        $sanitizedMedidaCadera = sanitize_text_field($_POST['caderaModel']);
        $sanitizedAficiones = sanitize_text_field($_POST['aficionesModel']);
        $sanitizedCurriculum = sanitize_text_field($_POST['curriculumModel']);
        $sanitizedDisponible = sanitize_text_field($_POST['disponibleModel']);
        
        //Guardamos en la base de datos
        update_post_meta($post_id,'fechaNacModel', $sanitizedFechaNac);
        update_post_meta($post_id, 'paisModel', $sanitizedPais);
        update_post_meta($post_id, 'nombreModel', $sanitizedNombre);
        update_post_meta($post_id, 'apellidosModel', $sanitizedApellidos);
        update_post_meta($post_id, 'alturaModel', $sanitizedAltura);
        update_post_meta($post_id, 'pechoModel', $sanitizedMedidaPecho);
        update_post_meta($post_id, 'cinturaModel', $sanitizedMedidaCintura);
        update_post_meta($post_id, 'caderaModel', $sanitizedMedidaCadera);
        update_post_meta($post_id, 'aficionesModel', $sanitizedAficiones);
        update_post_meta($post_id, 'curriculumModel', $sanitizedCurriculum);
        update_post_meta($post_id, 'disponibleModel', $sanitizedDisponible);
    }
    add_action('save_post','save_metabox_fields');
?>