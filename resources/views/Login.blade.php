<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Transportation Platform</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <style>
        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 5%;
            background-color: #e9ecef;
            text-align: center;
        }

        .btnwlasny:nth-child(1) {
            background-color: #176B87; /* Change this to the desired background color */
        }

        body {
            background-color: #001C30; /* Change this to your desired body background color */
        }

        .btn {
            background-color: #001C30;
            color: #fff;
            border: none;
        }

        .btn:hover {
            background-color: #DAFFFB;
            color: #001C30;
        }
    </style>
</head>
<body>
    @include('include.header-before-login')
    <div class="row d-flex justify-content-center">
        <div class="col-10 col-sm-10 col-md-6 col-lg-4">
            <form method="POST" action="" class="needs-validation" novalidate>
                @csrf
                <div class="form-group mb-2">
                    <input id="login" name="login" type="text" class="form-control" value="{{ old('login') }}" placeholder="Login">
                </div>
                <div class="form-group mb-2">
                    <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                </div>
                <div class="text-center mt-4 mb-4">
                    <input class="btnwlasny btn btn-primary" type="submit" value="Wyślij">
                </div>
            </form>
        </div>
    </div>
    @include('include.footer')
</body>
</html>
