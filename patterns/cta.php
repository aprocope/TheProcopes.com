<?php
/**
 * Title: Call to Action
 * Slug: procopes-theme/cta
 * Categories: procopes-sections, call-to-action
 * Keywords: cta, call to action, contact, get in touch
 * Description: Dark museum CTA section with gold separator, ivory heading, and gold button.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"650px"}} -->
<div class="wp-block-group alignfull has-primary-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">

    <!-- wp:separator {"backgroundColor":"tertiary","className":"is-style-wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
    <hr class="wp-block-separator has-tertiary-color has-text-color has-alpha-channel-opacity has-tertiary-background-color has-background is-style-wide" style="margin-bottom:var(--wp--preset--spacing--40)"/>
    <!-- /wp:separator -->

    <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.2em"}},"textColor":"tertiary","fontSize":"small"} -->
    <p class="has-text-align-center has-tertiary-color has-text-color has-small-font-size" style="letter-spacing:0.2em;text-transform:uppercase">Take the Next Step</p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"textAlign":"center","level":2,"textColor":"ivory"} -->
    <h2 class="wp-block-heading has-text-align-center has-ivory-color has-text-color">Your CTA Heading Goes Here</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|30"}}},"textColor":"stone"} -->
    <p class="has-text-align-center has-stone-color has-text-color" style="margin-top:var(--wp--preset--spacing--10);margin-bottom:var(--wp--preset--spacing--30)">Supporting text that gives context to the call to action. What will they get or what happens next?</p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
    <div class="wp-block-buttons">
        <!-- wp:button {"backgroundColor":"tertiary","textColor":"primary","style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"2.5rem","right":"2.5rem"}},"typography":{"letterSpacing":"0.1em","textTransform":"uppercase","fontSize":"0.8rem"}}} -->
        <div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-tertiary-background-color has-text-color has-background wp-element-button" style="padding-top:1rem;padding-right:2.5rem;padding-bottom:1rem;padding-left:2.5rem;font-size:0.8rem;letter-spacing:0.1em;text-transform:uppercase">Get in Touch</a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->

</div>
<!-- /wp:group -->
