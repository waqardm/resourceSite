
require('./bootstrap');

window.Vue = require('vue');

import Vue from 'buefy';

Vue.use(Buefy);

var app = new Vue({
    el: '#app',
    data: {}
});

