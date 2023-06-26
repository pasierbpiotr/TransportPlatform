<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Transportation Platform</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body {
            background-color: #001C30;
        }

        .container {
            background-color: #001C30;
            padding: 10px;
            border-radius: 5px;
        }

        .btnwlasny {
            background-color: #176B87;
            color: #fff;
            border: none;
        }

        .btnwlasny:nth-child(1) {
            background-color: #176B87;
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

        .custom-input::placeholder {
            color: #ccc;
        }

        .custom-input:focus::placeholder {
            color: transparent;
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

            .custom-input {
                margin-bottom: 10px;
            }

            .scrollable-select {
                max-height: 200px;
                overflow-y: auto;
            }

            label {
                color:#DAFFFB;
            }

    </style>
</head>
<body>
    @include('include.header')
    <div style="margin-top: 70px;">
        <div class="mt-5 container">
            @if ($errors->any())
                <div class="col-12">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">
                            {{$error}}
                        </div>
                    @endforeach
                </div>
            @endif

            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{session('error')}}
                </div>
            @endif

            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif
        </div>
        <div class="container d-flex justify-content-center align-items-center vh-100">
            <form method="POST" action="" class="needs-validation" novalidate>
                @csrf
                <div class="form-group mb-2">
                    <label for="name" class="visually-hidden">Name</label>
                    <input id="name" name="name" type="text" class="form-control custom-input" placeholder="Name" required>
                </div><div class="form-group mb-2">
                    <label for="surname" class="visually-hidden">Surname</label>
                    <input id="surname" name="surname" type="text" class="form-control custom-input" placeholder="Surname" required>
                <div class="form-group mb-2 scrollable-select">
                    <label for="forwarder_id">Company:</label>
                    <select class="custom-input form-select custom-select" id="company_id" name="company_id">
                        @foreach ($companies as $c)
                            <option value="{{ $c->id }}">
                                {{ $c->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label for="login" class="visually-hidden">Login</label>
                    <input id="login" name="login" type="text" class="form-control custom-input" placeholder="Login" required>
                </div>
                <div class="form-group mb-2">
                    <label for="password" class="visually-hidden">Password</label>
                    <input id="password" name="password" type="password" class="form-control custom-input" placeholder="Password" required>
                </div>
                <div class="form-group mb-2">
                    <label for="password_confirmation" class="visually-hidden">Confirm Password</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" class="form-control custom-input" placeholder="Confirm Password" required>
                </div>
                <div class="text-center mt-4 mb-4">
                    <input class="btnwlasny btn btn-primary" type="submit" value="Register">
                </div>
            </form>
        </div>
    </div>
    @include('include.footer')
</body>
</html>
