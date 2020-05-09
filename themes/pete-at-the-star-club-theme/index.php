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
    <?php include('blog.php'); ?>
</main>
<aside class="grid_4">
    <?php include('logo.php'); ?>
    <?php include('social.php'); ?>
    <?php include('embeds.php'); ?>
    <?php include('bandinfo.php'); ?>
    <?php include('kontakt.php'); ?>
    <?php include('press.php'); ?>
</aside>
<!-- end .grid_12 -->
<div class="clear"></div>

<!-- GOOGLE ANALYTICS -->
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-36385486-1']);
_gaq.push(['_trackPageview']);

(function() {
    var ga = document.createElement('script');
    ga.type = 'text/javascript';
    ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') +
        '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ga, s);
})();
</script>
<!-- GOOGLE ANALYTICS -->


<?php get_footer(); ?>