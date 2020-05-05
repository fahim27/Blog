<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">


    </head>
    <body>

    <div id="app">
        <v-app>
            <v-container>
                <v-alert type="success">
                    I'm a success alert.
                </v-alert>
            </v-container>
        </v-app>

    </div>

    <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
