<?php
/**
 * Title: Featured Posts — Live Query
 * Slug: procopes-theme/featured-posts
 * Categories: procopes-sections, posts, query
 * Keywords: posts, blog, articles, featured, latest, journal
 * Description: Live query block showing latest 3 posts in a grid. Dark museum palette.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">

    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">

        <!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group">
            <!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.2em"}},"textColor":"tertiary","fontSize":"small"} -->
            <p class="has-tertiary-color has-text-color has-small-font-size" style="letter-spacing:0.2em;text-transform:uppercase">The Journal</p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":2,"textColor":"ivory","style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}}} -->
            <h2 class="wp-block-heading has-ivory-color has-text-color" style="margin-top:var(--wp--preset--spacing--10)">Latest from the Blog</h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:paragraph {"textColor":"tertiary"} -->
        <p class="has-tertiary-color has-text-color"><a href="/blog" style="color:inherit">View All →</a></p>
        <!-- /wp:paragraph -->

    </div>
    <!-- /wp:group -->

    <!-- wp:query {"queryId":10,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
    <div class="wp-block-query alignwide">

        <!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-primary-background-color has-background">

                <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"spacing":{"margin":{"bottom":"0"}}}} /-->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">

                    <!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.1em"}},"textColor":"tertiary","fontSize":"small"} /-->

                    <!-- wp:post-title {"level":4,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"textColor":"ivory","fontSize":"large"} /-->

                    <!-- wp:post-excerpt {"moreText":"","excerptLength":15,"textColor":"muted"} /-->

                    <!-- wp:post-date {"textColor":"muted","fontSize":"small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05em"}}} /-->

                </div>
                <!-- /wp:group -->

            </div>
            <!-- /wp:group -->

        <!-- /wp:post-template -->

        <!-- wp:query-no-results -->
            <!-- wp:paragraph {"align":"center","textColor":"muted"} -->
            <p class="has-text-align-center has-muted-color has-text-color">No posts yet. Start writing!</p>
            <!-- /wp:paragraph -->
        <!-- /wp:query-no-results -->

    </div>
    <!-- /wp:query -->

</div>
<!-- /wp:group -->
