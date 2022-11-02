<?php
/* Custom search form */
?>
<form role="search" method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>"
      class="header__search-form">
    <div class="header__search__container">
        <input
            type="search"
            class="header__search__input js-search-input"
            placeholder="Search here..."
            aria-label="search"
            name="s"
            id="search-input"
            value="<?php echo esc_attr( get_search_query() ); ?>"
        >
        <a class="header__search__button js-search-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ai ai-Search">
                <path d="M21 21l-4.486-4.494M19 10.5a8.5 8.5 0 1 1-17 0 8.5 8.5 0 0 1 17 0z"/>
            </svg>
        </a>
    </div>
</form>