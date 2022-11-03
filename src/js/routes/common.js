import headerSearch from "../util/header-search";
import mobileMenu from "../util/mobile-menu";
export default {
  init() {
    // JavaScript to be fired on all pages
    console.log('common');
  },
  finalize() {
    headerSearch();
    mobileMenu();
  },
};
