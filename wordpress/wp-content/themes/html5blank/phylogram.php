<?php
/**
 * Template Name: Phylogram
 *
 * @package WordPress
 */
?>

        <!-- JS -->
        <script type="text/javascript" src="https://cdn.rawgit.com/mbostock/5577023/raw/5ee09dca6afdbef864de89d4d6caa3296f926f00/colorbrewer.min.js "></script>
        <script type="text/javascript" src="https://cdn.rawgit.com/jasondavies/newick.js/master/src/newick.js"></script>

<script>
    var treeOptions = {
        'mapping_file': 'http://meepmoop.com/wordpress/wp-content/themes/html5blank/phylogram_d3/dat/mapping.txt',
        'treeType': 'rectangular',
        'hideRuler': false,
        'skipBranchLengthScaling': false,
        'skipLabels': false,
    }
</script>


<?php get_header(); ?>

    <main role="main">
        <!-- section -->
        <section>

            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <body onload="init('http://meepmoop.com/wordpress/wp-content/themes/html5blank/phylogram_d3/dat/tree.tre', '#phylogram', treeOptions);">

                    <!-- div for tree -->
                    <div id='phylogram'></div>

                </body>
            </article>
            <!-- /article -->

        </section>
        <!-- /section -->
    </main>

<?php get_footer(); ?>

