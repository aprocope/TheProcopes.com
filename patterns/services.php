<?php
/**
 * Title: Services — Two Columns
 * Slug: procopes-theme/services
 * Categories: procopes-sections, services
 * Keywords: services, features, offerings, cards, two column
 * Description: Two-column services section with gold top border cards. Dark museum palette.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">

    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"700px"}} -->
    <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
        <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.2em"}},"textColor":"tertiary","fontSize":"small"} -->
        <p class="has-text-align-center has-tertiary-color has-text-color has-small-font-size" style="letter-spacing:0.2em;text-transform:uppercase">What We Do</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","level":2,"textColor":"ivory"} -->
        <h2 class="wp-block-heading has-text-align-center has-ivory-color has-text-color">Section Heading Goes Here</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","textColor":"stone"} -->
        <p class="has-text-align-center has-stone-color has-text-color">Supporting description for the services section. One to two sentences.</p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
    <div class="wp-block-columns alignwide">

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"},"border":{"top":{"color":"var:preset|color|tertiary","width":"2px"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-secondary-background-color has-background" style="border-top-color:var(--wp--preset--color--tertiary);border-top-width:2px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">

                <!-- wp:heading {"level":3,"textColor":"ivory","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
                <h3 class="wp-block-heading has-ivory-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--10)">Service One</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"textColor":"stone"} -->
                <p class="has-stone-color has-text-color">Description of your first service area. What you do, who it is for, and why it matters.</p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}},"typography":{"textTransform":"uppercase","letterSpacing":"0.05em"}},"textColor":"tertiary","fontSize":"small"} -->
                <p class="has-tertiary-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--20);letter-spacing:0.05em;text-transform:uppercase"><a href="#" style="color:inherit;text-decoration:none">Learn More</a></p>
                <!-- /wp:paragraph -->

            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"},"border":{"top":{"color":"var:preset|color|tertiary","width":"2px"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-secondary-background-color has-background" style="border-top-color:var(--wp--preset--color--tertiary);border-top-width:2px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">

                <!-- wp:heading {"level":3,"textColor":"ivory","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
                <h3 class="wp-block-heading has-ivory-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--10)">Service Two</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"textColor":"stone"} -->
                <p class="has-stone-color has-text-color">Description of your second service area. What you do, who it is for, and why it matters.</p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}},"typography":{"textTransform":"uppercase","letterSpacing":"0.05em"}},"textColor":"tertiary","fontSize":"small"} -->
                <p class="has-tertiary-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--20);letter-spacing:0.05em;text-transform:uppercase"><a href="#" style="color:inherit;text-decoration:none">Learn More</a></p>
                <!-- /wp:paragraph -->

            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->
