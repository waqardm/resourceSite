
require('./bootstrap');

import vue from 'vue';
import Buefy from 'buefy';
window.Vue = require('vue');

Vue.use(Buefy);

var App = new Vue({
    el: '#app', 
    el: '#login',
});


$(document).ready(function() {
    $('.button').hover(function(e) {
        $(this).toggleClass('is-open');
    });
});







