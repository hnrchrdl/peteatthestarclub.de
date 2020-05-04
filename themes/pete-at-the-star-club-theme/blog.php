<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package peteatthestarclub
 */

?>

<?php
    /**
     * Blog entries
     * Images that can be links
     */
    query_posts(array( 
        'post_type' => 'blog',
        'showposts' => 10 
    ) );  
?>
<?php while (have_posts()) : the_post(); ?>

    <?php
        $link = get_field('link');
        $image = get_field('image');
            ?>

    <?php if( !empty($image) ) :

        $renderAsLink = !empty($link);
        $img_url = esc_url($image['url']);
        $img_alt = esc_attr($image['alt']); ?>

        <div class="img-wrapper">
            <?php if( $renderAsLink ) :
                
                $href = esc_url( $link ); ?>

                <a href="<?php echo $href; ?>" title="<?php echo the_title(); ?>">
            <?php endif; ?>
            
            <img src="<?php echo $img_url; ?>" alt="<?php echo $img_alt; ?>" />

            <?php if( $renderAsLink ) : ?></a><?php endif; ?>
        </div>

    <?php endif; ?>
<?php endwhile;?>
