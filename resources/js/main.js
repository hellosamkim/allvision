/*
 * Polyfills
 */
import './polyfills/object-fit';
import './polyfills/add-body-class-on-page-load';
import './polyfills/add-fixed-header-class-on-scroll';
import './polyfills/add-body-class-if-is-touch';
import './polyfills/add-body-class-if-is-ios';
import './polyfills/add-body-class-if-is-ie';
import './polyfills/nav-is-hover-on-touch';
import './polyfills/btn-menu-on-click';
import './polyfills/init-btn-search';
import './polyfills/init-aos-animations';
import './polyfills/init-form-filter';
import './polyfills/init-popup-inline';
import './polyfills/init-popup-ajax';
import './polyfills/init-popup-main';
import './polyfills/init-counter-scroll';
import './polyfills/init-section-map';
import './polyfills/init-scroll-to';
import './polyfills/init-article-service';
import './polyfills/init-slider-brands';
import './polyfills/init-slider-main';
import './polyfills/init-vh';

/*
 * Modules
 */

import initParallax from './modules/init-parallax';
import InitCountUpScrollAnimation from './modules/init-count-up-scroll-animation';
import initAccordions from './modules/init-accordions';
import initGravityReset from './modules/init-gravity-reset';

initParallax();
InitCountUpScrollAnimation();
initAccordions();
initGravityReset();
