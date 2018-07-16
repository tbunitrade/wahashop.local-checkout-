<?php
/*
  *
  * Template parts: contacts
  *
  *
  * */
?>

<div class="contactsMainContainer">

    <div class="contactsMainTitle">
        we are here to help 2
    </div>

    <ul class="contactsMainUl">
        <li class="contactsMainLi col-md-4">
<!--            <img src="./app/dist/img/2x/contact@2x.png">-->
            <img src="<?php echo get_field('contact_img'); ?>">
            <div class="contactsMainP">
                <span><?php echo get_field('contact_title'); ?></span>
                <?php echo get_field('contact_us'); ?>
            </div>
        </li>
        <li class="contactsMainLi col-md-4">
            <img src="<?php echo get_field('after_img'); ?>">
            <div class="contactsMainP">
                <span><?php echo get_field('after_title'); ?></span>
                <?php echo get_field('after_sale'); ?>
            </div>
        </li>
        <li class="contactsMainLi col-md-4">
            <img src="<?php echo get_field('our_img'); ?>">
            <div class="contactsMainP">
                <span><?php echo get_field('our_title'); ?></span>
                <?php echo get_field('our_office'); ?>
            </div>
        </li>
    </ul>
</div>