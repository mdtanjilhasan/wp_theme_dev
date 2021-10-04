<?php
get_header();
?>

<div class="page-wrap d-flex flex-row align-items-center" style="background-color: lightgray;margin-top: 5rem;padding: 10rem 0;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <span class="display-1 d-block">404</span>
                <div class="mb-4 lead">The page you are looking for was not found.</div>
                <a href="<?php echo site_url();?>" class="btn btn-link">Back to Home</a>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>
