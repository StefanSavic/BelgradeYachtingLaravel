/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('language-switcher', require('./components/LanguageSwitcher.vue').default);
Vue.component('by-navigation', require('./components/Navigation.vue').default);
Vue.component('scrollLink', require('./components/ScrollLink.vue').default);
Vue.component('hamburger', require('./components/Hamburger.vue').default);
Vue.component('by-hero', require('./components/Hero.vue').default);
Vue.component('by-about', require('./components/About.vue').default);
Vue.component('gallery', require('./components/Gallery.vue').default);
Vue.component('instafeed', require('./components/Instafeed.vue').default);
Vue.component('contact', require('./components/Contact.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
