<?php
/**
 * The template for displaying all pages
 *
 * @package Theme-Vision
 * @subpackage Agama
 * @since Agama 1.0
 */

get_header(); ?>

    <div class="wrapper">
        <div class="row">
            <div class="button-links container-fluid">
                <form action="http://salangan.com/ru/donate/">
                    <button class="donate col-xs-6 col-sm-3">Поддержать проект</button>
                </form>
                <form action="http://salangan.com/ru/news/">
                    <button class="news col-xs-6 col-sm-3">Новости</button>
                </form>
                <form action="http://salangan.com/ru/world/">
                    <button class="world col-xs-6 col-sm-3">Энциклопедия</button>
                </form>
                <form action="http://salangan.com/ru/faq/">
                    <button class="faq col-xs-6 col-sm-3">FAQ</button>
                </form>
            </div>
        </div>
    </div>

	<div id="primary" class="site-content <?php echo Agama::bs_class(); ?> container-fluid">

		<div id="content" role="main" class="container-fluid">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->

	</div><!-- #primary -->

<?php get_footer(); ?>