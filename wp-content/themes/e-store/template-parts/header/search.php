<div class="search">
    <input class="search_box" type="checkbox" id="search_box">
    <label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
    <div class="search_form">
        <form method="post" action="<?php esc_url( home_url( '/' ) ) ?>">
            <input type="text" value="<?php get_search_query(); ?>" name="s" placeholder="Искать...">
            <input type="submit" value="Send">
        </form>
        <div class="search-result"></div>
    </div>
</div>