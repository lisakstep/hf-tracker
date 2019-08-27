<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
            <div>
                <div class="container">
                    @yield('welcome')
                </div>
                <div class="container">
                    @yield('content')
                </div>
                <div class="data-entry">
                    @yield('entryForm')
                </div>
            </div>
    </body>
</html>
