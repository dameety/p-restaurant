
require('./bootstrap');

window.Vue = require('vue');


Vue.component('contact_form', require('./components/ContactForm.vue'));
Vue.component('contact_map', require('./components/ContactMap.vue'));
Vue.component('reservation_booking_form', require('./components/ReservationBookingForm.vue'));

const app = new Vue({
    el: '#app'
});
