<?php
/*
  *
  * This template for products page on ourstory
  *
  *
  * */

?>

<div class="storyContainer">

    <div class="storyTitle">
        <?php get_field('our_story_title');?>
    </div>

    <div class="ourStoryBanner">

        <div class="row ourStoryBannerUp">
            <div class="col-md-6">

                <p class="bigP">
                    <?php get_field('home_title');?>

                </p>

                <p class="smallP">
                    <?php get_field('home_description');?>

                    <a class="smallHref" href="">read more</a>
                </p>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="row">
                        <div class="col-md-6 bigNumbers">
                            50
                        </div>
                        <div class="col-md-6 bigNumbers">
                            30


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 bigText ">
                            Years on<br>
                            the market
                        </div>
                        <div class="col-md-6 bigText">
                            Countries all <br>
                            over the world
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="row">
                        <div class="col-md-6 bigNumbers">
                        12
                        </div>
                        <div class="col-md-6 bigNumbers">
                            40

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 bigText">
                              Years on<br>
                            USA market
                        </div>
                        <div class="col-md-6 bigText">
                             Years of<br>
                            globalization
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>