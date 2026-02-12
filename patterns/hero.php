<?php
/**
 * Title: Hero Section
 * Slug: procopes-theme/hero
 * Categories: procopes-hero, featured
 * Keywords: hero, banner, header, welcome
 * Description: A full-width hero section with background image, heading, and call to action button.
 */
?>

<!-- wp:cover {"url":"https://images.unsplash.com/photo-1517705008128-361805f42e86?w=1920","dimRatio":40,"overlayColor":"secondary","minHeight":80,"minHeightUnit":"vh","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);min-height:80vh">
    <span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-40 has-background-dim"></span>
    <img class="wp-block-cover__image-background" alt="" src="https://images.unsplash.com/photo-1517705008128-361805f42e86?w=1920" data-object-fit="cover"/>

    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"layout":{"type":"constrained","contentSize":"700px"}} -->
        <div class="wp-block-group">

            <!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.2em"}},"textColor":"tertiary","fontSize":"small"} -->
            <h6 class="wp-block-heading has-text-align-center has-tertiary-color has-text-color has-small-font-size" style="letter-spacing:0.2em;text-transform:uppercase">Welcome to</h6>
            <!-- /wp:heading -->

            <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"surface","fontSize":"xxx-large"} -->
            <h1 class="wp-block-heading has-text-align-center has-surface-color has-text-color has-xxx-large-font-size" style="font-style:normal;font-weight:700">Create Your Beautiful Online Presence</h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|30"}}},"textColor":"tertiary","fontSize":"large"} -->
            <p class="has-text-align-center has-tertiary-color has-text-color has-large-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--30)">Elegant design meets powerful functionality. Build something extraordinary.</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons">
                <!-- wp:button {"backgroundColor":"primary","textColor":"surface","style":{"spacing":{"padding":{"top":"1.2rem","bottom":"1.2rem","left":"2.5rem","right":"2.5rem"}}}} -->
                <div class="wp-block-button"><a class="wp-block-button__link has-surface-color has-primary-background-color has-text-color has-background wp-element-button" style="padding-top:1.2rem;padding-right:2.5rem;padding-bottom:1.2rem;padding-left:2.5rem">Get Started</a></div>
                <!-- /wp:button -->

                <!-- wp:button {"backgroundColor":"transparent","textColor":"surface","style":{"spacing":{"padding":{"top":"1.2rem","bottom":"1.2rem","left":"2.5rem","right":"2.5rem"}},"border":{"width":"2px"}},"borderColor":"surface"} -->
                <div class="wp-block-button"><a class="wp-block-button__link has-surface-color has-transparent-background-color has-text-color has-background has-border-color has-surface-border-color wp-element-button" style="border-width:2px;padding-top:1.2rem;padding-right:2.5rem;padding-bottom:1.2rem;padding-left:2.5rem">Learn More</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->

        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->
