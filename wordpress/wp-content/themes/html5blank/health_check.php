<?php
/**
 * Template Name: Finance health check
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
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2" id="slides"></div>
                </div>
            </article>
            <!-- /article -->

        </section>
        <!-- /section -->
    </main>


<script>
    jQuery( document ).ready(function() {
        var deck = new SlideDeck('#slides', '/slide-flow/slides');
        deck.show();
    });
</script>

<?php get_footer(); ?>

