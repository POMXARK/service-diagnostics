// window._ = require('lodash'); // импортировать по отдельности

// /
//  * We'll load jQuery and the Bootstrap jQuery plugin which provides support
//  * for JavaScript based Bootstrap features such as modals and tabs. This
//  * code may be modified to fit the specific needs of your application.
//  */

try {
    window.$ = window.jQuery = require('jquery');
    window.Popper = require('@popperjs/core');
    window.bootstrap = require('bootstrap');
    window.PerfectScrollbar = require('perfect-scrollbar').default;
} catch (e) {}

// /
//  * We'll load the axios HTTP library which allows us to easily issue requests
//  * to our Laravel back-end. This library automatically handles sending the
//  * CSRF token as a header based on the value of the "XSRF" token cookie.
//  */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
