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
  VDataTable,
  VDivider,
  VForm,
  VIcon,
  VList,
  VListGroup,
  VListItem,
  VListItemAvatar,
  VListItemContent,
  VListItemIcon,
  VListItemSubtitle,
  VListItemTitle,
  VRow,
  VTextField,
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
    VDataTable,
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
