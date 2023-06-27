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

            .btnwlasny {
                background-color: #176B87;
                color: #fff;
                border: none;
            }

            .btnwlasny:hover {
                background-color: #DAFFFB;
            }

            body {
                background-color: #001C30;
                display: flex;
                flex-direction: column;
                min-height: 100vh;
                margin: 0;
                padding: 0;
            }

            .container {
                width: 100%;
                max-width: 400px;
                margin: auto;
                padding: 20px;
                flex: 1;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .custom-input {
                margin-bottom: 10px;
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

            label {
                color:#DAFFFB;
            }

        </style>
    </head>

    <body>
        @include('include.header')
        <div class="container">
            <form action="{{route('forwarder_create_trans')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="starting_place">Driver:</label>
                    <select class="custom-input form-select custom-select" id="driver_id" name="driver_id">
                        @foreach ($drivers as $d)
                            <option value="{{ $d->id }}">{{ $d->name }} {{$d->surname}}</option>
                        @endforeach
                </select>
                </div>
                <div class="form-group">
                    <label for="starting_place">Start:</label>
                    <input type="text" class="form-control custom-input" id="starting_place" name="starting_place" placeholder="Enter start">
                </div>
                <div class="form-group">
                    <label for="finishing_place">Finish:</label>
                    <input type="text" class="form-control custom-input" id="finishing_place" name="finishing_place" placeholder="Enter finish">
                </div>
                <div class="form-group">
                    <label for="merchandise">Merchandise:</label>
                    <input type="text" class="form-control custom-input" id="merchandise" name="merchandise" placeholder="Enter merchandise">
                </div>
                <div class="form-group">
                    <label for="mass">Mass:</label>
                    <input type="number" class="form-control custom-input" id="mass" name="mass" placeholder="Enter mass" step="0.01">
                </div>
                <div class="form-group">
                    <label for="transport_date">Date:</label>
                    <input type="date" class="form-control custom-input" id="transport_date" name="transport_date" placeholder="Enter date">
                </div>
                <input type="submit" class="btnwlasny btn btn-primary" value="Add">
            </form>
        </div>
        @include('include.footer')
    </body>

</html>
