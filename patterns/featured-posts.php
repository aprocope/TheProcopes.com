<?php
/**
 * Title: Featured Posts
 * Slug: procopes-theme/featured-posts
 * Categories: procopes-sections, posts, query
 * Keywords: posts, blog, articles, featured, latest
 * Description: A section displaying the latest blog posts in a grid layout.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">

    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">

        <!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group">
            <!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.15em"}},"textColor":"primary","fontSize":"small"} -->
            <h6 class="wp-block-heading has-primary-color has-text-color has-small-font-size" style="letter-spacing:0.15em;text-transform:uppercase">From the Blog</h6>
            <!-- /wp:heading -->

            <!-- wp:heading {"level":2,"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}}} -->
            <h2 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--10)">Latest Articles</h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:paragraph -->
        <p><a href="#">View All Posts →</a></p>
        <!-- /wp:paragraph -->

    </div>
    <!-- /wp:group -->

    <!-- wp:query {"queryId":10,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
    <div class="wp-block-query alignwide">

        <!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group">

                <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} /-->

                <!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05em"}},"fontSize":"small"} /-->

                <!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"fontSize":"large"} /-->

                <!-- wp:post-excerpt {"moreText":"","excerptLength":15,"textColor":"muted"} /-->

                <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--20)">
                    <!-- wp:post-date {"fontSize":"small"} /-->
                </div>
                <!-- /wp:group -->

            </div>
            <!-- /wp:group -->

        <!-- /wp:post-template -->

        <!-- wp:query-no-results -->
            <!-- wp:paragraph {"align":"center","textColor":"muted"} -->
            <p class="has-text-align-center has-muted-color has-text-color">No posts to display yet. Start creating content!</p>
            <!-- /wp:paragraph -->
        <!-- /wp:query-no-results -->

    </div>
    <!-- /wp:query -->

</div>
<!-- /wp:group -->
