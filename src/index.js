import $ from 'jquery';

import Router from './js/util/Router';
import common from './js/routes/common';
import home from './js/routes/home';

/**
 * Populate Router instance with DOM routes
 * @type {Router} routes - An instance of our router
 */
const routes = new Router({
  /** All pages */
  common,
  /** Home page */
  home,
  /** About Us page, note the change from about-us to aboutUs. */
});

/** Load Events */
$(document).ready(() => routes.loadEvents());
