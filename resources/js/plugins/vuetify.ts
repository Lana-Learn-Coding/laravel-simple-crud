import Vue from 'vue';
import Vuetify, {
  VAlert,
  VBtn,
  VCard,
  VCardText,
  VCardTitle,
  VCheckbox,
  VCol,
  VContainer,
  VForm,
  VRow,
  VTextField
} from 'vuetify/lib';

Vue.use(Vuetify, {
  components: {
    VContainer,
    VRow,
    VCol,
    VCard,
    VCardTitle,
    VCardText,
    VForm,
    VTextField,
    VCheckbox,
    VBtn,
    VAlert
  }
});

export default new Vuetify({
  theme: {
    dark: true,
  },
  icons: {
    iconfont: 'md',
  },
})
