<?php
/*
 *
 * This template file, include templates for Sidebar, from sidebar directory.
 * This Sidebar configuration is only for homepage.
 * Copy and rename this file as sidebar-page.php, can be used not for other page.
 *
 * */
?>

<aside id="sidebar">
    <div class="homepageSidebar">
        <?php
        include ('sidebar/menu.php');
        include ('sidebar/social.php');
        include ('sidebar/name.php');
        ?>
    </div>
</aside>
