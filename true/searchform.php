<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/'))?>">
    <div>
        <label class="screen-reader" for="s">sup</label>
        <input type="text" value="<?php echo get_seach_query()?>" name="s" id="s">
    </div>
</form>