@extends('layouts.app')

@section('content')
    <v-row class="justify-center">
        <v-col xl="3" lg="4" md="5" sm="7" cols="10">
            <v-card>
                <v-card-title>{{ __('Register') }}</v-card-title>
                <v-card-text>
                    @if (session('resent'))
                        <v-alert type="success">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </v-alert>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}
                    <v-form method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <v-btn type="submit" text>{{ __('click here to request another') }}</v-btn>
                    </v-form>
                </v-card-text>
            </v-card>
        </v-col>
    </v-row>
@endsection
