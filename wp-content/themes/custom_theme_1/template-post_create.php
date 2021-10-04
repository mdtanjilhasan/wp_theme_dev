<?php
// Template Name: Post Create
get_header();
?>

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

<?php
    if (isset($_POST['submit_button'])) {
        $id = wp_insert_post([ //  this function will return id of that post
            'post_type' => 'news',
            'post_status' => 'draft',
            'post_content' => $_POST['description'],
            'post_title' => $_POST['title']
        ]);

        // set category for this post
        wp_set_object_terms($id, $_POST['category_name'], 'news_category');
    }
?>

<section id="services" class="services">
    <div class="container">

        <div class="section-title">
            <h2>Post Creation</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
            <form method="post" action="">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control" id="description" cols="30" rows="10"></textarea>
                </div>

                <div class="mb-3">
                    <label for="categories" class="form-label">Categories</label>
                    <select class="form-select" name="category_name" id="categories">
                        <option selected>Open this select menu</option>
                        <?php
                        $customCategories = get_categories([
                            'taxonomy' => 'news_category',
                            'hide_empty' => false
                        ]);
                        foreach ($customCategories as $category):
                        ?>
                            <option value="<?php echo $category->name; ?>"><?php echo ucwords($category->name); ?></option>
                        <?php endforeach;?>
                    </select>
                </div>

                <button type="submit" name="submit_button" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>
</section>
<!-- End Services Section -->
<?php get_footer(); ?>
