<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>@yield('title')</title>
    <style>
        .container-custom {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        @media (max-width: 767px) {
            .card-custom {
                width: 100%;
                margin: 0;
            }
            .container-custom {
                min-height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            body {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container-custom">
        @yield('content')
    </div>
</body>
</html>
