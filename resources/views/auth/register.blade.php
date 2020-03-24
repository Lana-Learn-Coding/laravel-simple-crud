@extends('layouts.app')

@section('content')
    <v-row class="justify-center">
        <v-col xl="3" lg="4" md="5" sm="7" cols="10">
            <v-card>
                <v-card-title>{{ __('Register') }}</v-card-title>
                <v-card-text>
                    <v-form method="POST" action="{{ route('register') }}">
                        @csrf
                        <v-text-field
                            name="name"
                            type="name"
                            autocomplete="name"
                            label="{{ __('Name') }}"
                            value="{{ old('name') }}"
                            @error('name') error @enderror
                            error-messages="{{ $message ?? '' }}"
                            autofocus
                            required
                        >
                        </v-text-field>
                        <v-text-field
                            name="email"
                            type="email"
                            autocomplete="email"
                            label="{{ __('E-Mail Address') }}"
                            value="{{ old('email') }}"
                            @error('email') error @enderror
                            error-messages="{{ $message ?? '' }}"
                            required
                        >
                        </v-text-field>
                        <v-text-field
                            name="password"
                            type="password"
                            label="{{ __('Password') }}"
                            autocomplete="new-password"
                            @error('password') error @enderror
                            error-messages="{{ $message ?? '' }}"
                            required
                        >
                        </v-text-field>
                        <v-text-field
                            label="{{ __('Confirm Password') }}"
                            name="password_confirmation"
                            type="password"
                            autocomplete="new-password"
                            required
                        >
                        </v-text-field>
                        <v-btn type="submit" class="mr-3">
                            {{ __('Register') }}
                        </v-btn>
                    </v-form>
                </v-card-text>
            </v-card>
        </v-col>
    </v-row>
@endsection
