<?php
/**
 * Template Name: Finance calculator
 *
 * @package WordPress
 */
?>


<?php get_header(); ?>

    <main role="main">
        <!-- section -->
        <section>

            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <body onload="init('main')"> </body>
            </article>
            <!-- /article -->

        </section>
        <!-- /section -->
    </main>

<?php get_footer(); ?>

