<template>
  <v-card>
    <v-card-title>
      Product List
      <v-spacer></v-spacer>
      <v-btn text>
        <v-icon>add</v-icon>
        <span>New</span>
      </v-btn>
    </v-card-title>
    <v-card-text>
      <v-data-table
        disable-pagination
        hide-default-footer
        :headers="headers"
        :items="data"
      >
        <template #item.actions>
          <v-icon
            small
          >
            delete
          </v-icon>
          <v-icon
            small
          >
            edit
          </v-icon>
        </template>
      </v-data-table>
    </v-card-text>
  </v-card>
</template>

<script lang="ts">
import { Component, Prop, Vue } from 'vue-property-decorator';

@Component
export default class ProductTable extends Vue {
  @Prop({ default: (): Product[] => [] }) data!: Product[];

  get headers(): ProductTableHeader[] {
    return [
      { text: 'ID', value: 'id' },
      { text: 'Name', value: 'name' },
      { text: 'Price (USD)', value: 'price' },
      { text: 'Description', value: 'description' },
      { text: 'Actions', value: 'actions', sortable: false },
    ];
  }
}

interface Product {
  id: number;
  name: string;
  price: number;
  description?: string;
}

interface ProductTableHeader {
  text: string;
  value: string;
  align?: string;
  sortable?: boolean,
}
</script>
