@extends('layouts.app')

@section('content')
    <v-row class="justify-center">
        <v-col xl="3" lg="4" md="5" sm="7" cols="10">
            <v-card>
                <v-card-title>Update Product</v-card-title>
                <v-card-text>
                    <v-form method="POST">
                        @csrf
                        <v-text-field
                            name="name"
                            type="text"
                            label="Name"
                            autocomplate="name"
                            value="{{ $product->name }}"
                            @error('name')
                            error
                            error-messages="{{ $message }}"
                            @enderror
                        >
                        </v-text-field>
                        <v-textarea
                            label="Description"
                            name="description"
                            type="text"
                            value="{{ $product->description }}"
                            auto-grow
                            rows="3"
                        >
                        </v-textarea>
                        <v-text-field
                            label="Price"
                            name="price"
                            type="number"
                            value="{{ $product->price }}"
                            @error('price')
                            error
                            error-messages="{{ $message }}"
                            @enderror
                        >
                        </v-text-field>
                        <v-btn text type="submit">Update</v-btn>
                    </v-form>
                </v-card-text>
            </v-card>
        </v-col>
    </v-row>
@endsection
