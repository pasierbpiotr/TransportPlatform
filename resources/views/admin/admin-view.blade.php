<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <title>Transportation Platform</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <style>

            .btn {
                background-color: #001C30;
                color: #fff;
                border: none;
            }

            .btn:hover {
                background-color: #DAFFFB;
                color: #001C30;
            }

            body {
                background-color: #001C30;
            }

            .container {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background-color: #001C30;
            }

            .tile {
                display: block;
                width: 200px;
                height: 350px;
                margin: 10px;
                background-color: #176B87;
                text-align: center;
                line-height: 300px;
                font-size: 24px;
                text-decoration: none;
                color: #DAFFFB;
                border-radius: 10%;
                overflow: hidden;
            }


            .tile:hover {
                background-color: #DAFFFB;
                color:#001C30;
            }

            .footer {
                padding: 0px;
                position: fixed;
                bottom: 0;
                left: 0;
                width: 100%;
            }

            .header {
                padding: 0px;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                z-index: 9999;
            }

        </style>
    </head>

    <body>
        @include('include.header')

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4" style="margin-right:5%;">
                    <a class="tile" href="{{route('view_users')}}">View users</a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4" style="margin-right:5%;">
                    <a class="tile" href="{{route('view_forwarders')}}">View forwarders</a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4" style="margin-right:5%;">
                    <a class="tile" href="{{route('view_drivers')}}">View drivers</a>
                </div>
            </div>
        </div>

        @include('include.footer')
    </body>

</html>
