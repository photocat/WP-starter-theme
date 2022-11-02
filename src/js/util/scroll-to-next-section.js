import $ from 'jquery';

//Scroll to next section
const scrollToNextSection = () => {
    $('.js-scroll-down').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $(this).closest('section').next().offset().top
        }, 500);
    })
}

export default scrollToNextSection;