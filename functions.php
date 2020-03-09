<?php

    function my_login_logo() { ?>
        <style type="text/css">
            #login h1 a, .login h1 a {
                background-image: none;
                content: url('<?php bloginfo('template_url');?>/img/logo.png');
                height:177px;
                width:auto;
                background-size: 320px 65px;
                background-repeat: no-repeat;
                padding-bottom: 30px;
            }
        </style>
    <?php }
    add_action( 'login_enqueue_scripts', 'my_login_logo' );


    
    /* Redireciona o cliente após o login */

    function login_redirect( $redirect_to, $request, $user ){
        return home_url('index.php/aulas');
    }
    add_filter( 'login_redirect', 'login_redirect', 10, 3 );

?>