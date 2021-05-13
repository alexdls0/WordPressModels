<?php
    /*
        Añadir soporte a nuestro tema
    */
    add_theme_support("post-thumbnails");
    add_theme_support("post-formats",array("image","gallery","link","audio","video","quote"));
    
    //Esta función pone en cola los scripts después de registrarlos.
    function my_theme_scripts() {

        wp_register_script( 'jquery-min', get_template_directory_uri() . '/js/jquery.min.js', array( 'jquery' ), null, true );
        wp_enqueue_script( 'jquery-min' );

        wp_register_script( 'jquery-migrate', get_template_directory_uri() . '/js/jquery-migrate-3.0.1.min.js', array( 'jquery' ), null, true );
        wp_enqueue_script( 'jquery-migrate' );

        wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), null, false );
        wp_enqueue_script( 'bootstrap' );
        
        wp_register_script( 'popper', get_template_directory_uri() . '/js/popper.min.js', array( 'jquery' ), null, true );
        wp_enqueue_script( 'popper' );

        wp_register_script( 'jquery-easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array( 'jquery' ), null, true );
        wp_enqueue_script( 'jquery-easing' );

        wp_register_script( 'waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array( 'jquery' ), null, true );
        wp_enqueue_script( 'waypoints' );

        wp_register_script( 'stellar', get_template_directory_uri() . '/js/jquery.stellar.min.js', array( 'jquery' ), null, true );
        wp_enqueue_script( 'stellar' );

        wp_register_script( 'carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array( '' ), null, true );
        wp_enqueue_script( 'carousel' );

        wp_register_script( 'magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array( 'jquery' ), null, true );
        wp_enqueue_script( 'magnific-popup' );

        wp_register_script( 'aos', get_template_directory_uri() . '/js/aos.js', array( 'jquery' ), null, true );
        wp_enqueue_script( 'aos' );

        wp_register_script( 'animateNumber', get_template_directory_uri() . '/js/jquery.animateNumber.min.js', array( 'jquery' ), null, true );
        wp_enqueue_script( 'animateNumber' );

        wp_register_script( 'bootstrap-datepicker', get_template_directory_uri() . '/js/bootstrap-datepicker.js', array( 'jquery' ), null, true );
        wp_enqueue_script( 'bootstrap-datepicker' );

        /*wp_register_script( 'jquery-timepicker', get_template_directory_uri() . '/js/jquery.timepicker.min.js', array( 'jquery' ), null, true );
        wp_enqueue_script( 'jquery-timepicker' );*/

        wp_register_script( 'scrollax', get_template_directory_uri() . '/js/scrollax.min.js', array( '' ), null, true );
        wp_enqueue_script( 'scrollax' );

        wp_register_script( 'mapa-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false', array( 'jquery' ), null, true );
        wp_enqueue_script( 'mapa-api' );

        wp_register_script( 'google-map', get_template_directory_uri() . '/js/google-map.js', array( 'jquery' ), null, true );
        wp_enqueue_script( 'google-map' );

        wp_register_script( 'main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), null, true );
        wp_enqueue_script( 'main' );
        
        wp_register_script( 'masonry', 'https://unpkg.com/masonry-layout@4.2.2/dist/masonry.pkgd.min.js', array( 'jquery' ), null, true );
        wp_enqueue_script( 'masonry' );

        wp_register_script( 'aceptarpolitica', get_template_directory_uri() . '/js/aceptarpolitica.js', array( 'jquery' ), null, true );
        wp_enqueue_script( 'aceptarpolitica' );
    }
    add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );

    //Esta función pone en cola los styles después de registrarlos.
    function my_theme_styles() {
        wp_register_style('poppins','https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700');
        wp_enqueue_style('poppins');

        wp_register_style('standard','https://fonts.googleapis.com/css?family=Old+Standard+TT:400,700&display=swap');
        wp_enqueue_style('standard');
        
        wp_register_style('monserrat','https://fonts.googleapis.com/css?family=Montserrat:700,900');
        wp_enqueue_style('monserrat');

        wp_register_style('iconic',get_template_directory_uri() . '/css/open-iconic-bootstrap.min.css');
        wp_enqueue_style('iconic');

        wp_register_style('animate',get_template_directory_uri() . '/css/animate.css');
        wp_enqueue_style('animate');

        wp_register_style('carousel-css',get_template_directory_uri() . '/css/owl.carousel.min.css');
        wp_enqueue_style('carousel-css');

        wp_register_style('owl-css',get_template_directory_uri() . '/css/owl.theme.default.min.css');
        wp_enqueue_style('owl-css');

        wp_register_style('magnific-css',get_template_directory_uri() . '/css/magnific-popup.css');
        wp_enqueue_style('magnific-css');

        wp_register_style('aos-css',get_template_directory_uri() . '/css/aos.css');
        wp_enqueue_style('aos-css');

        wp_register_style('ionicons-css',get_template_directory_uri() . '/css/ionicons.min.css');
        wp_enqueue_style('ionicons-css');

        wp_register_style('bootstrap-datepicker-css',get_template_directory_uri() . '/css/bootstrap-datepicker.css');
        wp_enqueue_style('bootstrap-datepicker-css');

        wp_register_style('jquery-timepicker-css',get_template_directory_uri() . '/css/jquery.timepicker.css');
        wp_enqueue_style('jquery-timepicker-css');

        wp_register_style('flaticon-css',get_template_directory_uri() . '/css/flaticon.css');
        wp_enqueue_style('flaticon-css');

        wp_register_style('iconmoon-css',get_template_directory_uri() . '/css/icomoon.css');
        wp_enqueue_style('iconmoon-css');
        
        wp_register_style('style-css',get_template_directory_uri() . '/css/style.css');
        wp_enqueue_style('style-css');
        
        wp_register_style('masonrystyles',get_template_directory_uri() . '/css/masonrystyles.css');
        wp_enqueue_style('masonrystyles');
    }
    add_action( 'wp_enqueue_scripts', 'my_theme_styles' );
    
    
    //LOGO
    function custom_login_logo(){?>
        <style type = "text/css">
            #login h1 a, .login h1 a{
                background-image: url('<?php echo get_stylesheet_directory_uri();?>/images/icon.png');
                height: 200px !important;
                margin: 0 auto;
                margin-top: 15px;
                margin-bottom: 15px;
                background-size: cover;
                width: 60% !important;
            }
        </style>
    <?php
    }
    add_action('login_enqueue_scripts','custom_login_logo');
    
    function login_url(){
        return home_url();
    }
    add_filter('login_headerurl','login_url');
    
    function login_title(){
        return 'Agencia Top Model';
    }
    add_filter('login_headertext','login_title');
    
    //Seleccionar el remember me por defecto
    function remember_checked(){
        echo "<script>document.getElementById('rememberme').checked=true;</script>";
    }
    
    function login_checked_remember(){
        add_filter('login_footer','remember_checked');
    }
    add_action('init','login_checked_remember');

    function my_login_errors(){
        return "Hay algún error, compruebe los campos del formulario.";
    }
    add_filter('login_errors','my_login_errors');
    
    function my_login_redirection($redirect_to, $request, $user){
        if(isset($user->roles) && is_array($user->roles)){
            if(in_array('administrator', $user->roles)){
                return admin_url();
            }else{
                return home_url();
            }
        }else{
            return home_url();
        }
    }
    add_filter('login_redirect','my_login_redirection', 10, 3);

    function widgets_init_register(){
        $my_sidebars = array(
            'name'          => 'Sidebar Widget Area',
            'id'            => 'sidebar-widget-area',
            'description'   => 'Widgets shown in the flyout of the sidebar',
            'before_widget' => '<div class="widgetCloud">',
            'after_widget'  => '</div>',
        );

        register_sidebar($my_sidebars);
    }
    add_action('widgets_init','widgets_init_register');

    function cogerImagen() {
        global $post, $posts;
        $first_img = '';
        ob_start();
        ob_end_clean();
        $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
        $first_img = $matches [1] [0];
      
        if(empty($first_img)){
            $first_img = "/images/defaultimage.jpg";
        }
        return $first_img;
    }

    function has_gravatar($email) {
        $hash = md5(strtolower(trim($email)));
        $uri = 'http://www.gravatar.com/avatar/' . $hash . '?d=404';
        $headers = @get_headers($uri);
        if (!preg_match("|200|", $headers[0])) {
            $has_valid_avatar = FALSE;
        } else {
            $has_valid_avatar = TRUE;
        }
        return $has_valid_avatar;
    }

    function add_custom_fields($user){
?>
        <h3>Subir imágen</h3>
        <table class="form-table">
            <tr>
                <th>
                    <label for="userpic">Seleccione la imágen que desea subir</label>
                </th>
                <td>
                    <?php 
                        // Save attachment ID
                        update_option( 'media_selector_attachment_id', get_the_author_meta('image_attachment_id', $user->ID) );

                        wp_enqueue_media();
                        ?>
                        <div class='image-preview-wrapper'>
                            <img id='image-preview' src='<?php echo wp_get_attachment_url( get_option( 'media_selector_attachment_id' ) ); ?>' height='100'>
                        </div>
                        <input id="upload_image_button" type="button" class="button" value="Subir imágen" />
                        <input type='hidden' name='image_attachment_id' id='image_attachment_id' value='<?php echo get_option( 'media_selector_attachment_id' ); ?>'>
                        <input type="submit" name="submit_image_selector" value="Subir" class="button-primary"><?php
                    ?>
                </td>
            </tr>
        </table>

        <h3>URL de perfil</h3>
        <table class="form-table">
            <tr>
                <th>
                    <label for="userpic">URL de la imágen del usuario</label>
                </th>
                <td>
                    <input type="text" name="userpic" id="userpic" value="<?php echo
                    esc_attr( get_the_author_meta( 'userpic', $user->ID ) ); ?>" class="regular-text" /><br/>
                    <span class="description">Por favor introduzca la URL de la imágen</span>
                </td>
            </tr>
        </table>

        <h3>Redes Sociales</h3>
        <table class="form-table">
            <tr>
                <th>
                    <label for="twitter">Twitter</label>
                </th>
                <td>
                    <input type="text" name="twitter" id="twitter" value="<?php echo
                    esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br/>
                    <span class="description">Por favor, introduzca su usuario de Twitter</span>
                </td>
            </tr>
            <tr>
                <th>
                    <label for="facebook">Facebook</label>
                </th>
                <td>
                    <input type="text" name="facebook" id="facebook" value="<?php echo
                    esc_attr( get_the_author_meta( 'facebook', $user->ID ) ); ?>" class="regular-text" /><br/>
                    <span class="description">Por favor, introduzca su página de Facebook</span>
                </td>
            </tr>
            <tr>
                <th>
                    <label for="linkedin">Linkedin</label>
                </th>
                <td>
                    <input type="text" name="linkedin" id="linkedin" value="<?php echo
                    esc_attr( get_the_author_meta( 'linkedin', $user->ID ) ); ?>" class="regular-text" /><br/>
                    <span class="description">Por favor, introduzca su página de Linkedin</span>
                </td>
            </tr>
        </table>

        <h3>Información de las Skills del usuario</h3>
        <table class="form-table">
            <tr>
                <th>
                    <label for="skill1">Skill 1</label>
                </th>
                <td>
                    <input type="text" name="skill1" id="skill1" value="<?php echo
                    esc_attr( get_the_author_meta( 'skill1', $user->ID ) ); ?>" class="regular-text" /><br/>
                    <span class="description">Por favor introduzca la descripción de la Skill 1</span>
                </td>
                <th>
                    <label for="skill1v">Valor Skill 1</label>
                </th>
                <td>
                    <input type="text" name="skill1v" id="skill1v" value="<?php echo
                    esc_attr( get_the_author_meta( 'skill1v', $user->ID ) ); ?>" class="regular-text" /><br/>
                    <span class="description">Por favor introduzca el valor de la Skill 1</span>
                </td>
            </tr>
            <tr>
                <th>
                    <label for="skill2">Skill 2</label>
                </th>
                <td>
                    <input type="text" name="skill2" id="skill2" value="<?php echo
                    esc_attr( get_the_author_meta( 'skill2', $user->ID ) ); ?>" class="regular-text" /><br/>
                    <span class="description">Por favor introduzca la descripción de la Skill 2</span>
                </td>
                <th>
                    <label for="skill2v">Valor Skill 2</label>
                </th>
                <td>
                    <input type="text" name="skill2v" id="skill2v" value="<?php echo
                    esc_attr( get_the_author_meta( 'skill2v', $user->ID ) ); ?>" class="regular-text" /><br/>
                    <span class="description">Por favor introduzca el valor de la Skill 2</span>
                </td>
            </tr>
            <tr>
                <th>
                    <label for="skill3">Skill 3</label>
                </th>
                <td>
                    <input type="text" name="skill3" id="skill3" value="<?php echo
                    esc_attr( get_the_author_meta( 'skill3', $user->ID ) ); ?>" class="regular-text" /><br/>
                    <span class="description">Por favor introduzca la descripción de la Skill 3</span>
                </td>
                <th>
                    <label for="skill3v">Valor Skill 3</label>
                </th>
                <td>
                    <input type="text" name="skill3v" id="skill3v" value="<?php echo
                    esc_attr( get_the_author_meta( 'skill3v', $user->ID ) ); ?>" class="regular-text" /><br/>
                    <span class="description">Por favor introduzca el valor de la Skill 3</span>
                </td>
            </tr>
            <tr>
                <th>
                    <label for="skill4">Skill 4</label>
                </th>
                <td>
                    <input type="text" name="skill4" id="skill4" value="<?php echo
                    esc_attr( get_the_author_meta( 'skill4', $user->ID ) ); ?>" class="regular-text" /><br/>
                    <span class="description">Por favor introduzca la descripción de la Skill 4</span>
                </td>
                <th>
                    <label for="skill4v">Valor Skill 4</label>
                </th>
                <td>
                    <input type="text" name="skill4v" id="skill4v" value="<?php echo
                    esc_attr( get_the_author_meta( 'skill4v', $user->ID ) ); ?>" class="regular-text" /><br/>
                    <span class="description">Por favor introduzca el valor de la Skill 4</span>
                </td>
            </tr>
        </table>

<?php
    }

    add_action( 'show_user_profile', 'add_custom_fields' );
    add_action( 'edit_user_profile', 'add_custom_fields' );

    function update_custom_fields($user_id){
        if ( !current_user_can( 'edit_user', $user_id ) ) return false;

        update_user_meta( $user_id, 'image_attachment_id', $_POST['image_attachment_id'] );

        update_user_meta( $user_id, 'userpic', $_POST['userpic'] );

        update_user_meta( $user_id, 'twitter', $_POST['twitter'] );
        update_user_meta( $user_id, 'facebook', $_POST['facebook'] );
        update_user_meta( $user_id, 'linkedin', $_POST['linkedin'] );

        update_user_meta( $user_id, 'skill1', $_POST['skill1'] );
        update_user_meta( $user_id, 'skill2', $_POST['skill2'] );
        update_user_meta( $user_id, 'skill3', $_POST['skill3'] );
        update_user_meta( $user_id, 'skill4', $_POST['skill4'] );

        update_user_meta( $user_id, 'skill1v', $_POST['skill1v'] );
        update_user_meta( $user_id, 'skill2v', $_POST['skill2v'] );
        update_user_meta( $user_id, 'skill3v', $_POST['skill3v'] );
        update_user_meta( $user_id, 'skill4v', $_POST['skill4v'] );
    }

    add_action( 'personal_options_update', 'update_custom_fields' );
    add_action( 'edit_user_profile_update', 'update_custom_fields' );

    function get_author_role($user_id){
        $user_info = get_userdata($user_id);
        return implode(' ',$user_info->roles);
    }

    /*Borrar campo en los comentarios*/
    /*function remove_comment_field($fields){
        unset($fields['url']);
        return $fields;
    }
    add_filter('comment_form_default_fields','remove_comment_field');

    //Añadir el campo de consentimiento en los comentarios
    function add_consent_comment($fields){
        $fields['consent'] = '<p>
            <input id="consent" name="consent" type="checkbox" value="on"/>
            <label for="consent">
                Acepte este campo para darnos permiso para publicar sus comentarios
                Aceptar nuestra <a href="#">política de privacidad</a>
            </label>
        </p>';
        return $fields;
    }
    add_filter('comment_form_default_fields','add_consent_comment');*/

    //Customizar el formulario completamente en 1 solo paso
    function customize_comment_form($fields){
        //author, email, comment, cookies, consent son los campos que queremos
        $auxfields['author'] = $fields['author'];
        $auxfields['email'] = $fields['email'];
        $auxfields['comment'] = $fields['comment']; 
        $auxfields['cookies'] = $fields['cookies'];
        
        $auxfields['consent'] = '<p class="comment-consent">
            <input id="consent" name="consent" type="checkbox" value="on"/>
            <label id="texto-consent" for="consent">
                Acepte este campo para darnos permiso para publicar sus comentarios.
                Aceptar nuestra <a href="#">política de privacidad</a>
            </label>
        </p>';

        return $auxfields;
    }
    add_action('comment_form_fields','customize_comment_form');

    //Guardar la política de privacidad
    function save_comment_policy_checkbox($comment_id){
        $contenido = $_POST['consent'];
        if($contenido == 'on'){
            $value = 'Checkbox seleccionado: Acepto la política de privacidad';
        }else{
            $value = 'Checkbox no seleccionado: No acepto la política de privacidad';
        }
        add_comment_meta($comment_id, 'consent', $value, true);
        //true es porque el campo es único
    }
    add_action('comment_post','save_comment_policy_checkbox');

    //Mostrar columna
    function edticomment_add_columns($columns){
        $columns = array(
            'cb' => '<input type = "checkbox"/>',
            'author' => 'Autor',
            'comment' => 'Comentario',
            'consent_column' => 'Política',
            'response' => 'En respuesta a',
            'date' => 'Fecha de publicación',
        );
        return $columns;
    }
    add_filter('manage_edit-comments_columns','edticomment_add_columns');

    //Mostrar la política de privacidad de ese comentario
    function mostrar_policy_column($col, $comment_id){
        switch($col){
            case 'consent_column':
            if($t = get_comment_meta($comment_id,'consent',true)){
                echo esc_html($t);
            }else{
                echo esc_html('');
            }
            break;
        }
    }
    add_action('manage_comments_custom_column','mostrar_policy_column', 10, 2);

    function rm_post_view_count(){
        if ( is_single() ){
            global $post;
            $count_post = esc_attr( get_post_meta( $post->ID, '_post_views_count', true) );
            if( $count_post == ''){
                $count_post = 1;
                add_post_meta( $post->ID, '_post_views_count', $count_post);
            }else{
                $count_post = (int)$count_post + 1;
                update_post_meta( $post->ID, '_post_views_count', $count_post);
            }
        }
    }
    add_action('wp_head', 'rm_post_view_count');
    
    function list_tags() {
        $tags = get_tags( array('orderby' => 'count', 'order' => 'DESC', 'number' => 15) );
        foreach ( (array) $tags as $tag ) {
            echo '<div class="alturachica m-0 p-0 d-flex flex-row flex-nowrap justify-content-between"><h6><i class="icon-tag"></i><a href="' . get_tag_link ($tag->term_id) . '" >' . $tag->name . '</a></h6><span>' . $tag->count . '</span></div>';
        }
    }
    
    function count_user_posts_by_type( $userid, $post_type = 'post' ) {
        global $wpdb;
        $where = get_posts_by_author_sql( $post_type, true, $userid );
        $count = $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->posts $where" );
        
        return apply_filters( 'get_usernumposts', $count, $userid );
    }
?>