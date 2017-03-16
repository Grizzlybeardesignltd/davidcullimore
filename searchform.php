<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
    <div class="row collapse">
        <div class="large-10 small-10 columns">
            <input type="text" value="" name="s" id="s" placeholder="<?php esc_attr_e('Search', 'reverie'); ?>">

            <input type="hidden" name="post_type" value="post" /> 
            <div class="large-2 small-2 columns">
                <button type="submit">Submit</button>
            </div>
        </div>
    </div>
</form>