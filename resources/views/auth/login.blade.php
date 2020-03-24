@extends('layouts.app')

@section('content')
    <v-row class="justify-center">
        <v-col xl="3" lg="4" md="5" sm="7" cols="10">
            <v-card>
                <v-card-title>{{ __('login') }}</v-card-title>
                <v-card-text>
                    <v-form method="POST" action="{{ route('login') }}">
                        @csrf
                        <v-text-field
                            type="email"
                            label="{{  __('E-Mail Address') }}"
                            @error('email')
                            error
                            error-messages="{{ $message }}"
                            @enderror
                            autocomplete="email"
                            autofocus
                            name="email"
                            required
                        >
                        </v-text-field>

                        <v-text-field
                            type="password"
                            label="{{  __('Password') }}"
                            @error('password')
                            error
                            error-messages="{{ $message }}"
                            @enderror
                            name="password"
                            autocomplete="current-password"
                            required
                        >
                        </v-text-field>
                        <v-checkbox
                            name="remember"
                            label="{{ __('Remember Me') }}"
                            value="true"
                        >
                        </v-checkbox>

                        <div class="text-center">
                            <v-btn type="submit" class="mr-3">
                                {{ __('Login') }}
                            </v-btn>

                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </v-form>
                </v-card-text>
            </v-card>
        </v-col>
    </v-row>
@endsection
