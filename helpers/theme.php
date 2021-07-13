<?php

namespace CoDevelopers\StarterTheme\Helpers\Theme;

/**
 * Get the theme text domain.
 */
function get_text_domain()
{
    return wp_get_theme()->get('TextDomain');
}
