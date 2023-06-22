<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <title>Transportation Platform</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <style>
            .container {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            .tile {
                display: block;
                width: 300px;
                height: 300px;
                margin: 10px;
                background-color: #ccc;
                text-align: center;
                line-height: 300px;
                font-size: 24px;
                text-decoration: none;
                color: #fff;
            }

            .tile:hover {
                background-color: #999;
            }
        </style>
    </head>

    <body>
        @include('include.header-after-login')

        <div class="container">
            <a class="tile" href="">View users</a>
        </div>

        <footer style="background-color: #e9ecef; text-align: center;">
            Developed by Piotr Pasierb - XXX&copy;
        </footer>
    </body>

</html>
