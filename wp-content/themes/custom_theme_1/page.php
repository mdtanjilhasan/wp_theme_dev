<?php get_header(); the_post(); ?>

<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2><?php the_title(); ?></h2>
                <ol>
                    <li><a href="<?php echo site_url(); ?>">Home</a></li>
                    <li><?php the_title(); ?></li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class="thumbnail-image" style="display: block;text-align: center;margin-bottom: 30px;"><?php the_post_thumbnail([900,1200]); ?></div>
                    <div class="container">
                        <p><?php the_excerpt(); ?></p>
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>

    </section>

<!--    --><?php
//        echo "<br>";
//        echo "<h2>the_post_thumbnail</h2>";
//        the_post_thumbnail();
//        echo "<br>";
//        echo "<h2>the_post_thumbnail('thumbnail')</h2>";
//        the_post_thumbnail('thumbnail');
//        echo "<br>";
//        echo "<h2>the_post_thumbnail('medium')</h2>";
//        the_post_thumbnail('medium');
//        echo "<br>";
//        echo "<h2>the_post_thumbnail('large')</h2>";
//        the_post_thumbnail('large');
//        echo "<br>";
//        echo "<h2>the_post_thumbnail('full')</h2>";
//        the_post_thumbnail('full');
//        echo "<br>";
//        echo "<h2>the_post_thumbnail([900,1200])</h2>";
//        the_post_thumbnail([900,1200]);
//        echo "<br>";
//        echo "<h2>wp_get_attachment_image_src(get_post_thumbnail_id(),[300, 400]);</h2>";
//        print_r(wp_get_attachment_image_src(get_post_thumbnail_id()));
//        echo "<br>";
//        echo 'post thumbnail id => ' . get_post_thumbnail_id();
//        echo "<br>";
//
//    ?>

</main><!-- End #main -->

<?php get_footer(); ?>
