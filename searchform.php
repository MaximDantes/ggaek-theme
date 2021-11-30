<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/')); ?>">
    <input class="input" type="text" placeholder="Поиск..."
           name="s" id="s" value="<?php echo get_search_query(); ?>"/>
    <button type="submit" id="searchsubmit" class="button button--icon button--circle">
        <i class="fa fa-search"></i>
    </button>
</form>