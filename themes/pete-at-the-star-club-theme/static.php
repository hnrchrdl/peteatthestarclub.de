<?php /* Template Name: Static Page With Sidebar */ ?>

<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package peteatthestarclub
 */

get_header();
?>
<main class="grid_8" id="main">
    <?php
    $page = get_page_by_title('page-impressum');
    $content = apply_filters('the_content', $page->post_content);
    echo $content;
    ?>
    <h1><?php the_title(); ?></h1>
    <?php
    // TO SHOW THE PAGE CONTENTS
    while (have_posts()) : the_post(); ?>
    <!--Because the_content() works only inside a WP Loop -->
    <div class="entry-content-page">
        <?php the_content(); ?>
        <!-- Page Content -->
    </div><!-- .entry-content-page -->
    <?php
    endwhile; //resetting the page loop
    ?>
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


<?php get_footer(); ?>