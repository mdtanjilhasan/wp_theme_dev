<?php
// Template Name: Service
get_header();
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

<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container">

        <div class="section-title">
            <h2>Services</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="icon-box">
                    <div class="icon"><i class="fas fa-heartbeat"></i></div>
                    <h4><a href="">Lorem Ipsum</a></h4>
                    <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                <div class="icon-box">
                    <div class="icon"><i class="fas fa-pills"></i></div>
                    <h4><a href="">Sed ut perspiciatis</a></h4>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                <div class="icon-box">
                    <div class="icon"><i class="fas fa-hospital-user"></i></div>
                    <h4><a href="">Magni Dolores</a></h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-box">
                    <div class="icon"><i class="fas fa-dna"></i></div>
                    <h4><a href="">Nemo Enim</a></h4>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-box">
                    <div class="icon"><i class="fas fa-wheelchair"></i></div>
                    <h4><a href="">Dele cardo</a></h4>
                    <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-box">
                    <div class="icon"><i class="fas fa-notes-medical"></i></div>
                    <h4><a href="">Divera don</a></h4>
                    <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- End Services Section -->


<!-- ======= Custom Category Section ======= -->
<section id="services" class="services">
    <div class="container">

        <div class="section-title">
            <h2>Custom Category</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
            <?php
                $customCategories = get_terms([
                    'taxonomy' => 'news_category',
                    'hide_empty' => false,// hide_empty for if a category has nos post will be displayed
                    'orderby' => 'name',
                    'order' => 'ASC', // ASC / DESC
                    'number' => 10, // limit
                    'parent' => 0, // for hide child category
                ]);

                foreach($customCategories as $key => $category):
                    $categoryImg = get_wp_term_image($category->term_id);
                    if (empty($categoryImg)) {
                        $categoryImg = 'https://via.placeholder.com/150';
                    }
            ?>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch <?php if($category > 0) {echo 'mt-4 mt-md-0';} ?>">
                <div class="icon-box">
                    <div class="icon"><img src="<?php echo $categoryImg; ?>" class="img-fluid" alt="news category image"></div>
                    <h4><a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a></h4>
                    <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
<!-- End Services Section -->

<!-- ======= Latest News Section ======= -->
<section id="services" class="services">
    <div class="container">

        <form action="" method="get">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="title" placeholder="Search title..." aria-label="Search title..." aria-describedby="button-addon2" value="<?php echo $_GET['title']; ?>">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
            </div>
        </form>

        <div class="section-title">
            <h2>Latest News</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
            <?php
            $searchTerm = null;
            if (!empty($_GET['title'])) {
                $searchTerm = $_GET['title'];
            }
            $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
            $queryParams = ['post_type' => 'news', 'post_status' => 'publish', 's' => $searchTerm, 'posts_per_page' => 1, 'paged' => $paged];
            $query = new WP_Query($queryParams);
            while ($query->have_posts()) : $query->the_post();
                $imagePathArray = wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
                ?>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="icon-box">
                        <div class="icon">
                            <img src="<?php echo $imagePathArray[0];?>" alt="<?php echo mb_strimwidth(get_the_title(), 0, 20, '...')?>" class="img-fluid">
                        </div>
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <p><?php echo mb_strimwidth(get_the_excerpt(), 0, 100, '...'); ?></p>
                    </div>
                </div>
            <?php
            endwhile;
            wp_pagenavi(['query' => $query]);
            ?>
        </div>

    </div>
</section><!-- End Latest News Section -->

<?php get_footer(); ?>
