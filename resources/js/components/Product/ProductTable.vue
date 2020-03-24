<template>
  <v-card>
    <v-card-title>
      Product List
      <v-spacer></v-spacer>
      <v-btn text :href="`/products/create`">
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
        <template #item.actions="{ item }">
          <v-icon small @click="toEditPage(item)">
            edit
          </v-icon>

          <v-icon small @click="openDeleteDialog(item)">
            delete
          </v-icon>
        </template>
      </v-data-table>
    </v-card-text>

    <v-dialog
      v-model="deleteDialog"
      persistent
      max-width="350px"
    >
      <v-card>
        <v-card-title>Confirm Delete?</v-card-title>
        <v-card-text>
          <div>You are about to delete:</div>
          <div>
            [{{ productToDelete ? productToDelete.id : '' }}]&nbsp;
            {{ productToDelete ? productToDelete.name : '' }}
          </div>
        </v-card-text>
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn text color="red" @click="deleteProduct()">
            Delete
          </v-btn>
          <v-btn text @click="deleteDialog = false">
            Cancel
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </v-card>
</template>

<script lang="ts">
import { Component, Prop, Vue } from 'vue-property-decorator';
import axios from 'axios';

@Component
export default class ProductTable extends Vue {
  productToDelete: Product = null;
  deleteDialog: boolean = false;
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

  toEditPage(product: Product): void {
    window.location.href = `/products/${product.id}/update`;
  }

  openDeleteDialog(product: Product): void {
    this.productToDelete = product;
    this.deleteDialog = true;
  };

  deleteProduct(): void {
    if (this.productToDelete) {
      axios
        .post(`/products/${this.productToDelete.id}/delete`)
        .then(() => {
          this.deleteDialog = false;
          window.location.reload();
        });
    }
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
