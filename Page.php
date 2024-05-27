<?php
get_header();
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="post">
                <img src="<?php echo get_template_directory_uri(); ?>/sample.jpg" alt="Sample Image">
                <h2>Blog Post Title 1</h2>
                <p>This is the content of the first blog post. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex ipsa neque molestiae minus pariatur obcaecati sunt porro voluptate, magnam, iusto corporis dolore aliquid harum recusandae.<p>
            </div>
        </div>
        <div class="col-md-12">
            <div class="post">
                <img src="<?php echo get_template_directory_uri(); ?>/sample.jpg" alt="Sample Image">
                <h2>Blog Post Title 2</h2>
                <p>This is the content of the second blog post. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex ipsa neque molestiae minus pariatur obcaecati sunt porro voluptate, magnam, iusto corporis dolore aliquid harum recusandae.<p>
            </div>
        </div>
        <!-- Repeat for other posts -->
    </div>
</div>

<?php get_footer(); ?>
