<html>
    <head>
        <title>Guest Book</title>
        <link rel="stylesheet" href="{{ asset('/library/bootstrap/css/bootstrap.min.css') }}">
    </head>
    <body class="container">
        <h1>Guest Book</h1>

        @if( !empty( Session::has('status') ) )
            <div class="alert alert-{{ Session::get('class') }}" role="alert">
                {{ Session::get('status') }}
            </div>
        @endif

        <div>
            @include('form')
        </div>
    </body>
</html>