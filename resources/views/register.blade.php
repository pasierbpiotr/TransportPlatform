<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Transportation Platform</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
                width: 300px;
                height: 300px;
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
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4" style="margin-right:5%;">
                <a class="tile" href="{{ route('register_driver')}}">Register as driver</a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4" style="margin-right:5%;">
                <a class="tile" href="{{ route('register_forwarder')}}">Register as forwarder</a>
            </div>
        </div>
    </div>
    @include('include.footer')
</body>
</html>
