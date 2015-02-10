<html>
    <head>
        <title>JavaScript for Designers</title>
        <!-- Stylez -->
        {{
            HTML::style('/bower_components/lumx/dist/lumx.css'),
            HTML::style('bower_components/mdi/materialdesignicons.css'),
            HTML::style('http://fonts.googleapis.com/css?family=Roboto:300,400,500,700'),
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
