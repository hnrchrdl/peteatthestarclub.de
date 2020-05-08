<?php

/**
 * Embed entries
 * Embeds, for example from bandcamp or youtube
 */
query_posts(array(
    'post_type' => 'embeds',
    'showposts' => 10,
    'orderby' => 'menu_order',
    'order' => 'asc'
));
?>

<style type="text/css" media="all">
.sidebar__embed {
    overflow: hidden;
}

.sidebar__embed--margin {
    margin-bottom: 80px;
}
</style>

<?php while (have_posts()) : the_post(); ?>

<?php
    $code = get_field('embed_code');
    $title = get_field('title');
    $margin_bottom = get_field('margin_bottom');
    $text_after = get_field('text_after')
    ?>


<div class="sidebar__embed<?php echo $margin_bottom ? ' sidebar__embed--margin' : '' ?>">
    <?php if (!empty($title)) :
            echo '<h1>' . $title . '</h1>';
        endif;
        ?>
    <?php if (!empty($code)) :
            echo $code;
        endif; ?>
    <?php
        if (!empty($text_after)) :
            echo '<p>' . $text_after . '</p>';
        endif;
        ?>

</div>
<?php endwhile; ?>