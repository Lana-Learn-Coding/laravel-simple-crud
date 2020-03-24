import Vue from 'vue';
import vuetify from './plugins/vuetify';
// component registering
import AppLayout from './components/AppLayout.vue';
import AppLogoutListItem from './components/AppLogoutListItem.vue';
import ProductTable from './components/Product/ProductTable.vue';

Vue.component('app-layout', AppLayout);
Vue.component('app-logout-list-item', AppLogoutListItem);
Vue.component('product-table', ProductTable);
// app
new Vue({
  vuetify,
}).$mount('#app');
