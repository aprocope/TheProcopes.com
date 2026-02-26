<?php
/**
 * Title: Hero Section
 * Slug: procopes-theme/hero
 * Categories: procopes-hero, featured
 * Keywords: hero, banner, header, welcome, museum
 * Description: Full-width dark hero with overlay, heading, and gold CTA buttons.
 */
?>

<!-- wp:cover {"url":"https://images.unsplash.com/photo-1519167758481-83f550bb49b3?w=1920","dimRatio":35,"overlayColor":"primary","minHeight":90,"minHeightUnit":"vh","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);min-height:90vh">
    <span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-35 has-background-dim"></span>
    <img class="wp-block-cover__image-background" alt="" src="https://images.unsplash.com/photo-1519167758481-83f550bb49b3?w=1920" data-object-fit="cover"/>
    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"layout":{"type":"constrained","contentSize":"700px"}} -->
        <div class="wp-block-group">

            <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.25em","fontStyle":"normal","fontWeight":"400"}},"textColor":"tertiary","fontSize":"small"} -->
            <p class="has-text-align-center has-tertiary-color has-text-color has-small-font-size" style="font-style:normal;font-weight:400;letter-spacing:0.25em;text-transform:uppercase">Tagline Goes Here</p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.15"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"textColor":"ivory","fontSize":"xxx-large"} -->
            <h1 class="wp-block-heading has-text-align-center has-ivory-color has-text-color has-xxx-large-font-size" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20);font-style:normal;font-weight:700;line-height:1.15">Your Headline Goes Here</h1>
            <!-- /wp:heading -->

            <!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"backgroundColor":"tertiary","className":"is-style-wide"} -->
            <hr class="wp-block-separator has-tertiary-color has-text-color has-alpha-channel-opacity has-tertiary-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)"/>
            <!-- /wp:separator -->

            <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"textColor":"stone","fontSize":"medium"} -->
            <p class="has-text-align-center has-stone-color has-text-color has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--30)">Supporting text that describes your work or mission in one to two sentences.</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
            <div class="wp-block-buttons">
                <!-- wp:button {"backgroundColor":"tertiary","textColor":"primary","style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"2.5rem","right":"2.5rem"}},"typography":{"letterSpacing":"0.1em","textTransform":"uppercase","fontSize":"0.8rem"}}} -->
                <div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-tertiary-background-color has-text-color has-background wp-element-button" style="padding-top:1rem;padding-right:2.5rem;padding-bottom:1rem;padding-left:2.5rem;font-size:0.8rem;letter-spacing:0.1em;text-transform:uppercase">Primary CTA</a></div>
                <!-- /wp:button -->

                <!-- wp:button {"style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"2.5rem","right":"2.5rem"}},"border":{"width":"1px"},"color":{"text":"#EDE6DA","background":"transparent"},"typography":{"letterSpacing":"0.1em","textTransform":"uppercase","fontSize":"0.8rem"}}} -->
                <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="border-width:1px;color:#EDE6DA;background-color:transparent;border-color:#B08D57;padding-top:1rem;padding-right:2.5rem;padding-bottom:1rem;padding-left:2.5rem;font-size:0.8rem;letter-spacing:0.1em;text-transform:uppercase">Secondary CTA</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->

        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->
