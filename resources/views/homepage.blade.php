<html>
    <head>
        <title>Guest Book</title>
        <link rel="stylesheet" href="{{ asset('/library/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/material-kit.css') }}">
        <style>
            .card {
                padding: 20;
            }
        </style>
    </head>
    <body class="container">
        <h1>Guest Book</h1>

        @if( !empty( Session::has('status') ) )
            <div class="alert alert-{{ Session::get('class') }}" role="alert">
                {{ Session::get('status') }}
            </div>
        @endif

        <div class="card">
            @include('form')
        </div>

        <div>
            @include('comments')
        </div>
    </body>
</html>