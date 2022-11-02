import headerSearch from "../util/header-search";

export default {
  init() {
    // JavaScript to be fired on all pages
    console.log('common');
  },
  finalize() {
    headerSearch()
  },
};
