<form role="search" method="get" class="search-form needs-validation with-loading-state" action="<?php echo esc_url(home_url('/')) ?>" novalidate>
    <label class="sr-only" for="s"><?php _e('Search:', 'starter-theme') ?></label>

    <div class="input-group">
        <input type="search" class="search-field form-control" placeholder="<?php esc_attr_e('Search &hellip;', 'starter-theme') ?>" value="<?php echo get_search_query() ?>" name="s" id="s" required />

        <div class="invalid-tooltip"><?php _e('You must enter what you want to search for', 'starter-theme') ?></div>

        <div class="input-group-append">
            <button type="submit" class="button">
                <span class="sr-only"><?php _e('Search', 'starter-theme') ?></span>
            </button>
        </div>
    </div>
</form>