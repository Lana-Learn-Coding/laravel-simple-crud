@extends('layouts.app')

@section('content')
    <v-row class="justify-center">
        <v-col cols="10">
            <product-table :data-page="{{ json_encode($products) }}"></product-table>
        </v-col>
    </v-row>
@endsection
