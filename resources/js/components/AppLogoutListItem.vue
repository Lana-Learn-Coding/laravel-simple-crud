<template>
  <v-list-item @click.stop="dialog = true">
    <v-list-item-icon>
      <v-icon>meeting_room</v-icon>
    </v-list-item-icon>
    <v-list-item-title>Logout</v-list-item-title>

    <v-dialog
      v-model="dialog"
      persistent
      max-width="300px"
    >
      <v-card>
        <v-card-title>Logout</v-card-title>
        <v-card-text>Are you sure?</v-card-text>
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn text @click="logout()">
            Logout
          </v-btn>
          <v-btn text @click="dialog = false">
            Cancel
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </v-list-item>
</template>

<script lang="ts">
import { Component, Vue } from 'vue-property-decorator';
import axios from 'axios';

@Component
export default class AppLogoutListItem extends Vue {
  dialog: boolean = false;

  logout(): void {
    axios
      .post('/logout')
      .then(() => window.location.reload())
      .catch((error: any) => console.log(error));
  }
}
</script>
