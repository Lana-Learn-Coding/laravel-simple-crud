@extends('layouts.app')

@section('content')
    <v-row class="justify-center">
        <v-col xl="3" lg="4" md="5" sm="7" cols="10">
            <v-card>
                <v-card-title>{{ __('Confirm Password') }}</v-card-title>
                <v-card-text>
                    <div>
                        {{ __('Please confirm your password before continuing.') }}
                    </div>

                    <v-form method="POST" action="{{ route('password.confirm') }}">
                        @csrf
                        <v-text-field
                            name="password"
                            type="password"
                            label="{{ __('Password')  }}"
                            value="{{ old('name') }}"
                            @error('password')
                            error
                            error-messages="{{ $message }}"
                            @enderror
                            autocomplete="current-password"
                            required
                        >
                        </v-text-field>
                        <div class="text-center">
                            <v-btn type="submit" class="mr-3">
                                {{ __('Confirm Password') }}
                            </v-btn>

                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </v-form>
                    <v-btn type="submit" class="mr-3">
                        {{ __('Login') }}
                    </v-btn>
                </v-card-text>
            </v-card>
        </v-col>
    </v-row>
@endsection
