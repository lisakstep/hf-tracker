<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <!--- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <style>
            html, body {
                background-color: #fff;
                font-family: sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 30px 50px;
            }
            input {
                height: 5rem;
                font-size: 4rem;
                width: 12rem;
            }
            input[type=number]::-webkit-inner-spin-button,
            input[type=number]::-webkit-outer-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }
            .today-entry {
                font-size: 2rem;
                font-weight: 500;
                text-align: center;
                text-transform: uppercase;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
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
