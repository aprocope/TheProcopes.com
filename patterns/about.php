<?php
/**
 * Title: About Section
 * Slug: procopes-theme/about
 * Categories: procopes-sections, about
 * Keywords: about, bio, introduction, profile
 * Description: A two-column about section with image and text content.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
    <div class="wp-block-columns alignwide">

        <!-- wp:column {"width":"45%"} -->
        <div class="wp-block-column" style="flex-basis:45%">
            <!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"0"}}} -->
            <figure class="wp-block-image size-large has-custom-border"><img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=800" alt="About section image" style="border-radius:0;aspect-ratio:3/4;object-fit:cover"/></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">

            <!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.15em"}},"textColor":"primary","fontSize":"small"} -->
            <h6 class="wp-block-heading has-primary-color has-text-color has-small-font-size" style="letter-spacing:0.15em;text-transform:uppercase">About Me</h6>
            <!-- /wp:heading -->

            <!-- wp:heading {"level":2,"style":{"spacing":{"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|20"}}}} -->
            <h2 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--10);margin-bottom:var(--wp--preset--spacing--20)">Hello, I'm Sarah — a creative entrepreneur helping women build their dream businesses</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"muted"} -->
            <p class="has-muted-color has-text-color">I believe that every woman deserves a beautiful online presence that reflects her unique vision and values. With over a decade of experience in design and branding, I've helped hundreds of entrepreneurs create websites that not only look stunning but also convert visitors into loyal customers.</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"textColor":"muted"} -->
            <p class="has-muted-color has-text-color">When I'm not designing, you'll find me exploring new coffee shops, reading a good book, or spending time with my family. I'd love to hear about your business and how I can help you achieve your goals.</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
            <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)">
                <!-- wp:button -->
                <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Learn My Story</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->

        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->
