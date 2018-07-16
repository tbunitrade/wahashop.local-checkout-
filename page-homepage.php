<?php
/**
 * Template name: Front page
 *
 *
 */

get_header(big); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">



        <div class="catContainer">

            <div class="catTitle">
                <?php echo get_field('products_title');?>
            </div>

            <ul class="catList">
                <li class="catLi catKitchenware"><h3 class="catH3">Kitchenware</h3></li>
                <li class="catLi catLaundry"><h3 class="catH3">Laundry</h3></li>
                <li class="catLi catStorage"><h3 class="catH3">Storage</h3></li>
                <li class="catLi catPets"><h3 class="catH3">Pets</h3></li>
                <li class="catLi catGarden"><h3 class="catH3">Garden Storage</h3></li>
                <li class="catLi catStarplay"><h3 class="catH3">Starplay</h3></li>
            </ul>

        </div>

        <div class="storyContainer">

            <div class="storyTitle">
                <?php echo get_field('our_story_title');?>
            </div>

            <div class="ourStoryBanner">

                <div class="row ourStoryBannerUp">
                    <div class="col-md-6">

                        <p class="bigP">
                            <?php echo get_field('home_title');?>

                        </p>

                        <p class="smallP">
                            <?php echo get_field('home_description');?>


                        </p>
                        <a class="smallHref" target="_blank" href="<?php echo get_field('readmore'); ?>">read more</a>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="row">
                                <div class="col-md-6 bigNumbers">
                                    <?php echo get_field('first_number'); ?>
                                </div>
                                <div class="col-md-6 bigNumbers">
                                    <?php echo get_field('second_number'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 bigText ">
                                    <?php echo get_field('first_description'); ?>
                                </div>
                                <div class="col-md-6 bigText">
                                    <?php echo get_field('second_description'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="row">
                                <div class="col-md-6 bigNumbers">
                                    <?php echo get_field('third_number'); ?>
                                </div>
                                <div class="col-md-6 bigNumbers">
                                    <?php echo get_field('fourth_number'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 bigText">
                                    <?php echo get_field('third_description'); ?>
                                </div>
                                <div class="col-md-6 bigText">
                                    <?php echo get_field('fourth_description'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="indexTitleContainer">
                <div class="indexTitle">
                    <span> <?php echo get_field('contact_us');?></span>
                    <p>
                        <?php echo get_field('contacts_text');?>
                    </p>
                </div>
            </div>
        </div>


    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer();
