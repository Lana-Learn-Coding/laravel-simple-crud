import Vue from 'vue';
import './bootstrap'
// component registering
import ExampleComponent from './components/ExampleComponent.vue';

Vue.component('example-component', ExampleComponent);

// app
new Vue().$mount('#app');
