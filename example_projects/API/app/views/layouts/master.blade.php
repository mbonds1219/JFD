<html>
    <head>
        <title>JavaScript for Designers</title>
        <!-- Stylez -->
        {{
            HTML::style('/bower_components/lumx/dist/css/lumx.css'),
            HTML::style('/css/main.css')
        }}
    </head>
    <body ng-app="JFD">
        <div class="main">
            @yield('content')
        </div>
        <span>
            @include('partials.js')
        </span>
    </body>
</html>
