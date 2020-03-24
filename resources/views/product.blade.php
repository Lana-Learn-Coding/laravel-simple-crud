@extends('layouts.app')

@section('content')
    <v-row class="justify-center">
        <v-col cols="10">
            <product-table :data="{{ $products }}"></product-table>
        </v-col>
    </v-row>
@endsection
