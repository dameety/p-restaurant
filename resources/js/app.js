
require('./bootstrap');

window.Vue = require('vue');


Vue.component('special-signups', require('./components/SpecialSignups.vue'));

const app = new Vue({
    el: '#app'
});
