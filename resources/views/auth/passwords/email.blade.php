@extends('layouts.app')

@section('content')
    <v-row class="justify-center">
        <v-col xl="3" lg="4" md="5" sm="7" cols="10">
            <v-card>
                <v-card-title>{{ __('Reset Password') }}</v-card-title>
                <v-card-text>
                    @if (session('status'))
                        <v-alert type="success">
                            {{ session('status') }}
                        </v-alert>
                    @endif

                    <v-form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <v-text-field
                            name="email"
                            type="email"
                            autocomplete="email"
                            label="{{ __('E-Mail Address') }}"
                            value="{{ $email ?? old('email') }}"
                            @error('email')
                            error
                            error-messages="{{ $message }}"
                            @enderror
                            autofocus
                            required
                        >
                        </v-text-field>
                        <v-btn type="submit" text>{{ __('Send Password Reset Link') }}</v-btn>
                    </v-form>
                </v-card-text>
            </v-card>
        </v-col>
    </v-row>
@endsection
