
<div class="search-form-container">
    <h3 class="search-form-heading">Search</h3>
    <form role="search" method="get" action="<?php echo home_url('/'); ?>">
        <input type="search" class="search-form-text" placeholder="Search"
        value="<?php echo get_search_query(); ?>" name="s" title="Search" />
        <input type="submit" class="search-btn" value="Search" />
    </form>
</div>
