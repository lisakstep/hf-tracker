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
            .data-display {
                font-size: 2rem;
                font-weight: 500;
                text-align: center;
                text-transform: uppercase;
            }
            .result {
                border-style: solid;
                margin: 0 2rem;
            }
            .result-text {
                font-size: 4rem;
            }
            .text-in-row {
                text-align: center;
                width: 100%;
            }
            .footnote {
                font-size: 1rem;
                font-weight: 200;
            }
            .danger-border {
                background-color: rgba(255, 182, 193, .5);
                border-color: red;
            }
            .success-border {
                background-color: rgba(144, 238, 144, .5);
                border-color: green;
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
