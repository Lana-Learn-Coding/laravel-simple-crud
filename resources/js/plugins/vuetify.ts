import Vue from 'vue';
import Vuetify, {
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
    VBtn
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
