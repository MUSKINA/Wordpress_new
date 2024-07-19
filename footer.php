   <h1>footer.....</h1> 
   <h2>hiiiii</h2>
   
   <?php
    wp_nav_menu(
        array(
            'theme_location' => 'primary-menu',
            'menu_id'        => 'primary-menu',
            'container'      => 'div',
            'container_class' => 'main-navigation',
            'menu_class'     => 'nav-menu',
        )
    );
    ?>
</body>
</html>