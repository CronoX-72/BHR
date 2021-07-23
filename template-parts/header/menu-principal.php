<nav>
    <input type="checkbox" id="btn-menu">
    <div class="circulo-btn-menu">
        <label for="btn-menu"><i class="fas fa-bars"></i></label>
    </div>    
    <?php 
        wp_nav_menu(
            array(
                'theme_location' => 'header-menu'
            )
        );
    ?>
</nav>