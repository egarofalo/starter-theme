<?php

namespace CoDevelopers\StarterTheme\Helpers\ConditionalTags;

function has_static_sidebar(string $name = '')
{
    return apply_filters('cdst_show_static_sidebar', true, $name);
}

function has_dynamic_sidebar(string $name)
{
    return is_active_sidebar($name) and !apply_filters('cdst_hide_dynamic_sidebar', false, $name);
}
