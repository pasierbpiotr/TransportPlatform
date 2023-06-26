<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <title>Transportation Platform</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <style>

            body {
                background-color: #001C30;
                display: flex;
                flex-direction: column;
                min-height: 100vh;
                margin: 0;
                padding: 0;
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

            .btnwlasny {
                background-color: #176B87;
                color: #fff;
                border: none;
            }

            .btnwlasny:hover {
                background-color: #DAFFFB;
            }

            .table {
                color: #fff;
                margin-top: 5%;
            }

            .table th {
                color: #DAFFFB;
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
        <div style="margin-top: 60px;">
            <div class="container d-flex justify-content-center align-items-center" style="margin-top:3%;">
                @if (session('update'))
                    <div class="alert alert-success">
                        {{ session('update') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                @if (session('delete'))
                <div class="alert alert-success">
                    {{ session('delete') }}
                </div>
            @endif
            </div>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Start</th>
                                    <th>Finish</th>
                                    <th>Merchandise</th>
                                    <th>Mass</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($driver->transports as $t)
                                    <tr>
                                        <td>{{$t->id}}</td>
                                        <td>{{$t->starting_place}}</td>
                                        <td>{{$t->finishing_place}}</td>
                                        <td>{{$t->merchandise}}</td>
                                        <td>{{$t->mass}}</td>
                                        <td>{{$t->transport_date}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @include('include.footer')
    </body>


</html>
