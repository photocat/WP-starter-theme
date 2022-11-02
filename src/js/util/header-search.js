import $ from 'jquery';

const headerSearch = () => {
    const searchIcon = $('.js-search-button');
    searchIcon.on('click', function(e) {
        e.preventDefault();
        $(this).siblings('.js-search-input').toggle("slide:right");
        $(this).toggleClass('is-active');
    });
};

export default headerSearch;