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

    function my_login_redirect( $redirect_to, $request, $user ) {
        //is there a user to check?
        if ( isset( $user->roles ) && is_array( $user->roles ) ) {
            //check for admins
            if ( in_array( 'author', $user->roles ) ) {
                // redirect them to the default place
                return $redirect_to;
            } else {
                return home_url('index.php/aulas');
            }
        } else {
            return $redirect_to;
        }
    }
     
    add_filter( 'login_redirect', 'my_login_redirect', 10, 3 );

?>