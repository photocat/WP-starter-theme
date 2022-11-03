import $ from 'jquery';

const addEventListeners = () => {
    const menuBtn = $('.js-mobile-menu');
    const menu = $('.header__main-navigation');
    let menuOpen = false;
    menuBtn.on('click', () => {
        if (!menuOpen) {
            menuBtn.addClass('open');
            menuOpen = true;
            menu.slideDown();
        } else {
            menuBtn.removeClass('open');
            menuOpen = false;
            menu.slideUp();
        }
    });
}

const mobileMenu = () => {
    let isMobile = $(window).width() < 1024;

    isMobile && addEventListeners();

    $(window).resize(function() {
        if ($(window).width() < 1024) {
            if (!isMobile) {
                isMobile = true;
                addEventListeners();
            }
        }
    });
}

export default mobileMenu;