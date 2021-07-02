require('./bootstrap');

window.Vue = require('vue');

Vue.component('VacancyForm', require('./Components/Vacancy/New.vue').default);

const app = new Vue({
    el: '#app'
});