<?php
get_header();
the_post();
?>
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

    <div class="container">
        <div class="cs-blog-detail">
            <div class="cs-main-post">
                <?php $imagePathArray = wp_get_attachment_image_src(get_post_thumbnail_id(),'large'); ?>
                <a href="<?php echo $imagePathArray[0]; ?>" class="galelry-lightbox">
                    <img src="<?php echo $imagePathArray[0]; ?>" alt="<?php echo the_title(); ?>" class="img-fluid">
                </a>
            </div>
            <div class="cs-post-title">
                <div>
                    <figure>
                        <?php echo get_avatar( get_the_author_meta( 'ID' ), 32, '', 'Author Avatar', ['class' => 'rounded-circle mt-3']); ?>
                    </figure>
                    <div class="cs-text">
                        <a href="javascript:void(0)"><?php the_author(); ?></a>
                    </div>
                </div>
                <div class="post-option">
                    <span class="post-date"><a href="javascript:void(0)"><i class="cs-color icon-calendar6"></i><?php echo get_the_date(); ?></a></span>
                    <span class="post-comment"><a href="javascript:void(0)"><i class="cs-color icon-chat6"></i>4 Comments</a></span>
                </div>
            </div>
            <div class="cs-post-option-panel">
                <div class="rich-editor-text">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <?php comments_template(); ?>
        </div>
    </div>

<?php
get_footer();
?>