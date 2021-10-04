<?php
get_header();
$basePath = get_template_directory_uri();
?>
    <main id="main">
        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Blog</h2>
                    <ol>
                        <li><a href="<?php echo site_url(); ?>">Home</a></li>
                        <li>Blog</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs Section -->
        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9">
                        <div class="container">
                            <div class="section-title">
                                <h2>Blog</h2>
                                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                            </div>
                        </div>

                        <div class="container-fluid">
                            <div class="row no-gutters">

                                <?php
                                if (have_posts()):
                                    while (have_posts()) : the_post();
                                        $imagePathArray = wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
                                        ?>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="gallery-item">
                                                <a href="<?php echo $imagePathArray[0]; ?>" class="galelry-lightbox">
                                                    <img src="<?php echo $imagePathArray[0]; ?>" alt="<?php echo the_title(); ?>" class="img-fluid">
                                                </a>
                                                <p>
                                                    <a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a>
                                                </p>
                                            </div>
                                        </div>
                                    <?php
                                    endwhile;
                                    echo "<div class='d-flex justify-content-center pagination_control'>";
                                    echo paginate_links();
                                    echo '</div>';
                                else:
                                    ?>
                                    <p>No Post Found</p>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </section><!-- End Gallery Section -->


    </main><!-- End #main -->
<?php get_footer(); ?>