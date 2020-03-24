@extends('layouts.app')

@section('content')
    <v-row class="justify-center">
        <v-col xl="3" lg="4" md="5" sm="7" cols="10">
            <v-card>
                <v-card-title>Create new Product</v-card-title>
                <v-card-text>
                    <v-form method="POST">
                        @csrf
                        <v-text-field
                            name="name"
                            type="text"
                            label="Name"
                            autofocus
                        >
                        </v-text-field>
                        <v-textarea
                            label="Description"
                            name="description"
                            type="text"
                            auto-grow
                            rows="3"
                        >
                        </v-textarea>
                        <v-text-field
                            label="Price"
                            name="price"
                            type="number"
                        >
                        </v-text-field>
                        <v-btn text type="submit"> Create</v-btn>
                    </v-form>
                </v-card-text>
            </v-card>
        </v-col>
    </v-row>
@endsection
