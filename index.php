<?php get_header();?>
    <div class="row pagina-inicial">
    <div class="col-9">
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h4>
                <a href="<?php echo get_attachment_link(); ?>">
                    <?php the_title(); ?>
                </a>
            </h4>
            <p><?php the_content(); ?></p>

            <?php endwhile; else : ?>
                <p><?php _e( 'Nenhum post encontrado!' ); ?></p>
            <?php endif; ?>
</div>
<div class="col-3">
    <?php get_sidebar(); ?>
</div>
</div>

<?php get_footer();?>