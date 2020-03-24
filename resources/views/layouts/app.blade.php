<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <app-layout title="Product manager">
        <template slot="content">
            @yield('content')
        </template>

        <template slot="navigation-drawer">
            <v-list nav>
                <v-list-item two-line>
                    <v-list-item-avatar>
                        <img src="{{ asset('img/default-avatar.png') }}" alt="avatar">
                    </v-list-item-avatar>

                    <v-list-item-content>
                        <v-list-item-title>{{ Auth::check() ? Auth::user()->name : 'Anonymous' }}</v-list-item-title>
                        <v-list-item-subtitle>{{ Auth::check() ? 'Logged in' : 'Not logged in' }}</v-list-item-subtitle>
                    </v-list-item-content>
                </v-list-item>

                <v-divider></v-divider>

                <v-list-item
                    link
                    href="{{ route('home') }}"
                    @if(request()->routeIs('home')) class="v-list-item--active" @endif>
                    <v-list-item-icon>
                        <v-icon>home</v-icon>
                    </v-list-item-icon>
                    <v-list-item-title>Home</v-list-item-title>
                </v-list-item>

                <v-list-group>
                    <template v-slot:activator>
                        <v-list-item-icon>
                            <v-icon>account_circle</v-icon>
                        </v-list-item-icon>
                        <v-list-item-title>Account</v-list-item-title>
                    </template>

                    @if(!Auth::check())
                        <v-list-item
                            link
                            href="{{ route('login') }}"
                            @if(request()->routeIs('login')) class="v-list-item--active" @endif
                        >
                            <v-list-item-icon>
                                <v-icon>exit_to_app</v-icon>
                            </v-list-item-icon>
                            <v-list-item-title>Login</v-list-item-title>
                        </v-list-item>

                        <v-list-item
                            link
                            href="{{ route('register') }}"
                            @if(request()->routeIs('register')) class="v-list-item--active" @endif
                        >
                            <v-list-item-icon>
                                <v-icon>person_add</v-icon>
                            </v-list-item-icon>
                            <v-list-item-title>Register</v-list-item-title>
                        </v-list-item>
                    @else
                        <app-logout-list-item></app-logout-list-item>
                    @endif
                </v-list-group>
            </v-list>
        </template>
    </app-layout>
</div>
</body>
</html>
