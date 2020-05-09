<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package peteatthestarclub
 */

get_header();
?>

<main class="grid_8" id="main">
    <h1>vier null vier</h1>
    <p>Hier ist nix. Versuchs mal <a href="/">hier</a>.</p>
</main>
<aside class="grid_4">
    <?php include('logo.php'); ?>
    <?php include('social.php'); ?>
    <?php include('bandinfo.php'); ?>
    <?php include('kontakt.php'); ?>
    <?php include('press.php'); ?>
</aside>
<!-- end .grid_12 -->
<div class="clear"></div>

<?php
get_footer();