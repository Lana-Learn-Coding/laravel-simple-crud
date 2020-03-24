import Vue from 'vue';
import vuetify from './plugins/vuetify';

// component registering
import AppLayout from './components/AppLayout.vue';
import AppLogoutListItem from './components/AppLogoutListItem.vue';

Vue.component('app-layout', AppLayout);
Vue.component('app-logout-list-item', AppLogoutListItem);

// app
new Vue({
  vuetify,
}).$mount('#app');
