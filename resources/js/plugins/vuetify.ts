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
  VTextField,
  VListItem,
  VList,
  VListItemAvatar,
  VListItemTitle,
  VListItemSubtitle,
  VListItemContent,
  VListItemIcon,
  VDivider, VIcon,
  VListGroup,
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
    VAlert,
    VListItem,
    VList,
    VListItemAvatar,
    VListItemTitle,
    VListItemSubtitle,
    VListItemContent,
    VListItemIcon,
    VDivider,
    VIcon,
    VListGroup,
  }
});

export default new Vuetify({
  theme: {
    dark: true,
  },
  icons: {
    iconfont: 'md',
  },
});
