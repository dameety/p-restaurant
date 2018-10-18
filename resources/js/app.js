
require('./bootstrap');

window.Vue = require('vue');


Vue.component('special-signups', require('./components/SpecialSignups.vue'));
Vue.component('contact_form', require('./components/ContactForm.vue'));
Vue.component('map', require('./components/map.vue'));
Vue.component('reservation_booking_form', require('./components/ReservationBookingForm.vue'));

const app = new Vue({
    el: '#app'
});
