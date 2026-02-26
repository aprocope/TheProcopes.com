<?php
/**
 * Title: About Section
 * Slug: procopes-theme/about
 * Categories: procopes-sections, about
 * Keywords: about, bio, introduction, profile, story
 * Description: Two-column about section — image left, text right. Dark museum palette.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-primary-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
    <div class="wp-block-columns alignwide">

        <!-- wp:column {"width":"45%"} -->
        <div class="wp-block-column" style="flex-basis:45%">
            <!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","style":{"border":{"radius":"0"}}} -->
            <figure class="wp-block-image size-large has-custom-border"><img src="https://images.unsplash.com/photo-1487958449943-2429e8be8625?w=800" alt="About section image" style="border-radius:0;aspect-ratio:3/4;object-fit:cover"/></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">

            <!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.2em"}},"textColor":"tertiary","fontSize":"small"} -->
            <p class="has-tertiary-color has-text-color has-small-font-size" style="letter-spacing:0.2em;text-transform:uppercase">Who We Are</p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":2,"textColor":"ivory","style":{"spacing":{"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|20"}}}} -->
            <h2 class="wp-block-heading has-ivory-color has-text-color" style="margin-top:var(--wp--preset--spacing--10);margin-bottom:var(--wp--preset--spacing--20)">Your heading about the organization goes here</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"stone"} -->
            <p class="has-stone-color has-text-color">First paragraph about your organization, mission, or background. Keep it focused and compelling — one to three sentences.</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"textColor":"stone"} -->
            <p class="has-stone-color has-text-color">Second paragraph with supporting detail, specific work you do, or what sets you apart from others in your field.</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
            <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)">
                <!-- wp:button {"backgroundColor":"tertiary","textColor":"primary","style":{"spacing":{"padding":{"top":"0.9rem","bottom":"0.9rem","left":"2rem","right":"2rem"}},"typography":{"letterSpacing":"0.1em","textTransform":"uppercase","fontSize":"0.8rem"}}} -->
                <div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-tertiary-background-color has-text-color has-background wp-element-button" style="padding-top:0.9rem;padding-right:2rem;padding-bottom:0.9rem;padding-left:2rem;font-size:0.8rem;letter-spacing:0.1em;text-transform:uppercase">Learn More</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->

        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->
