<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <title>Transportation Platform</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <style>
            .carousel-caption-title {
                background-color: rgba(51, 51, 51, 0.5);
                padding: 10px;
                color: #fff;
            }

            body {
                background-color: #001C30;
            }

            h1, h2, h3, h4, h5, h6 {
                color: #DAFFFB;
            }

            p, span, a {
                color: #DAFFFB;
            }

            a {
                text-decoration: none;
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

            .navbar {
                background-color: #176B87;
                color: #fff;
            }


            .footer {
                padding: 0px;
                position: fixed;
                bottom: 0;
                left: 0;
                width: 100%;
            }

            .card {
                            background-color: #176B87;
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
            <div>
                <h1>Welcome to our page!</h1>
                <p>We are XXX and support the work of transportation companies.</p>
            </div>
            <div>
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/tir1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="carousel-caption-title">Welcome to TransPlat</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/tir2.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="carousel-caption-title">Empowering the Transportation Industry</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/tir3.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="carousel-caption-title">Enabling Seamless Transport Solutions</h5>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <h2>The companies we work with:</h2>
            <div id="wycieczki" class="container mb-5">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-5 justify-content-center">
                    @forelse($companies as $index => $c)
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 mb-4">
                            <div class="card">
                                <img src="{{ asset($c->picture) }}" class="card-img-top" alt="zdjęcie">
                                <div class="card-body">
                                    <h5 class="card-title"><b>{{$c->name}}</b></h5>
                                    <p class="card-text">
                                        {{$c->street}}<br />
                                        {{$c->city}}<br />
                                        NIP: {{$c->NIP}}<br />
                                    </p>
                                </div>
                            </div>
                        </div>

                        @if(($index + 1) % 5 === 0)
                            </div>
                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-5 justify-content-center">
                        @endif
                    @empty
                        <p>Brak firm</p>
                    @endforelse
                </div>
            </div>
        </div>


    </body>
    @include('include.footer')
</html>
