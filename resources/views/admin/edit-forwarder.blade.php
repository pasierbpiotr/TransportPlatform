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
                background-color: #01365c;
                color: white;
                border-color: #01365c;
            }

            .custom-input:focus {
                margin-bottom: 10px;
                background-color: #01365c;
                color: white;
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
            <form action="{{ route('update_forwarder',$forwarder->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control custom-input" id="name" name="name" placeholder="Enter name" value="{{ $forwarder->name }}">
                </div>
                <div class="form-group">
                    <label for="surname">Surname:</label>
                    <input type="text" class="form-control custom-input" id="surname" name="surname" placeholder="Enter surname" value="{{ $forwarder->surname }}">
                </div>
                <div class="form-group">
                    <label for="company">Company:</label>
                    <select class="custom-input form-select custom-select" id="company_id" name="company_id">
                        @foreach ($companies as $c)
                            <option value="{{ $c->id }}" {{ $forwarder->company_id == $c->id ? 'selected' : '' }}>
                                {{ $c->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <input type="submit" class="btnwlasny btn btn-primary" value="Edit">
            </form>
        </div>

        @include('include.footer')
    </body>

</html>
