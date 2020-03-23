import Vue from 'vue';
import vuetify from "./plugins/vuetify";
// component registering
import AppLayout from './components/AppLayout.vue';

Vue.component('app-layout', AppLayout);
// app
new Vue({
  vuetify,
}).$mount('#app');
