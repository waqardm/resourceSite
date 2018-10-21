
require('./bootstrap');

import Vue from 'vue';
import Buefy from 'buefy';
window.Vue = require('vue');

Vue.use(Buefy);



const app = new Vue({
    el: '#app',
    el: '#manage'
});


// Manage profile drop down function

$(document).ready(function() {
    $('.button').hover(function(e) {
        $(this).toggleClass('is-open');
    });
});







