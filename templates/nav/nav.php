<!-- ================== NAVBAR ================ -->

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="mainMenuContainer">


            <nav class="navbar navbar-default" role="navigation">
                <div class="containerPossible">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" style="display: none" href="<?php echo home_url(); ?>">
                            <?php bloginfo('name'); ?>
                        </a>
                    </div>
                    <?php
                    wp_nav_menu( array(
                            'menu'              => 'primary',
                            'theme_location'    => 'primary',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse pcMenu',
                            'container_id'      => 'bs-example-navbar-collapse-1',
                            'menu_class'        => 'nav navbar-nav',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker())
                    );
                    ?>
                </div>
            </nav>

            <div class=" headerSearch">
                <div class="searchHeader" data-toggle="modal" data-target="#exampleModal">

                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">

                            <div class="modal-body">
                                <img src="/wp-content/themes/starplast/app/dist/img/lupa_ico.png">

                                <!--<input type="search" placeholder="search product by name/num." name="search" id="search"> -->

                                <?php dynamic_sidebar('searchme'); ?>


                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <img src="/wp-content/themes/starplast/app/dist/img/search_ico.png">
                                </button>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- end of header search-->
        </div>
