<?php

use function CoDevelopers\StarterTheme\Helpers\ConditionalTags\has_static_sidebar;

if (has_static_sidebar()) : ?>
    <aside class="sidebar-area static-sidebar">
        <?php get_template_part('template-parts/sidebar', 'static') ?>
    </aside>
<?php endif;
