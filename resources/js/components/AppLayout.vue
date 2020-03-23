<template>
  <v-app id="inspire">
    <v-system-bar v-if="$slots['system-bar']">
      <slot name="system-bar"></slot>
    </v-system-bar>

    <v-navigation-drawer
      v-if="$slots['navigation-drawer']"
      v-model="drawer"
      clipped
      app
    >
      <slot name="navigation-drawer"></slot>
    </v-navigation-drawer>

    <v-app-bar clipped-lef app>
      <v-app-bar-nav-icon v-if="$slots['navigation-drawer']" @click.stop="drawer = !drawer"/>
      <v-toolbar-title>{{ title }}</v-toolbar-title>
    </v-app-bar>

    <v-content class="flex-grow">
      <v-container fluid fill-height>
        <slot name="content"></slot>
      </v-container>
    </v-content>

    <v-footer v-if="$slots.footer" app>
      <slot name="footer"></slot>
    </v-footer>
  </v-app>
</template>

<script lang="ts">
import { Component, Prop, Vue } from "vue-property-decorator";

@Component
export default class AppLayout extends Vue {
  @Prop({ default: 'Application' }) title!: string;
  drawer: boolean = false;
}
</script>

