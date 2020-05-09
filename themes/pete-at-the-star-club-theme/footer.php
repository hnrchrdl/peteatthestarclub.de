<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package peteatthestarclub
 */

?>

<div class="grid_12" style="padding-top:20px;">
    <p style="text-align:center;">
        <?php if (is_page('impressum')) : ?>
        <a href="/">zurück</a>
        <?php
        else :
        ?>
        <a href="<?php echo get_page_link(get_page_by_path('impressum')); ?>">Impressum</a>
        <?php
        endif;
        ?>
    </p>
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>