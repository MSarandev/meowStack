<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MeowStack</title>

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Mapping -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
          integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
          crossorigin=""/>

    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
            integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
            crossorigin=""></script>
    <!-- Mapping -->

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body class="d-flex flex-column h-100">

<main role="main" class="flex-shrink-0 pb-3">
    <div class="container-fluid justify-content-center bg-light">
        <h1 class="d-flex justify-content-center">
            MeowStack
        </h1>
        <sub class="d-flex justify-content-center">A Berlin public transport visualiser</sub>
    </div>
</main>

<div class="container-fluid justify-content-center">
    <div class="row h-90">
        <div class="col vh-100 justify-content-center">
            @component('components.map', ['data' => $data])
            @endcomponent
        </div>
        <div class="col-2 vh-100 justify-content-center bg-dark">
            <div class="d-flex justify-content-center h-100">
                <div class="col w-100 justify-content-center">
                    <div class="row w-100 justify-content-center mt-1 mb-2">
                        <img src="https://placebear.com/300/200" class="w-100 h-100">
                    </div>
                    <div class="row w-100 justify-content-center mt-1 mb-2">
                        <h3 class="align-self-center">Selectables</h3>
                    </div>
                    <div class="row w-100">
                        <button type="button" class="btn btn-outline-light w-100 align-self-center mb-1 mt-1"
                                id="recenter_map_btn" onclick="recenterMap()">
                            Re-center map
                        </button>
                    </div>
                    <div class="row w-100">
                        <button type="button" class="btn btn-outline-light w-100 align-self-center mb-1 mt-1">Primary
                        </button>
                    </div>
                    <div class="row w-100">
                        <button type="button" class="btn btn-outline-light w-100 align-self-center mb-1 mt-1">Primary
                        </button>
                    </div>
                    <div class="row w-100">
                        <button type="button" class="btn btn-outline-light w-100 align-self-center mb-1 mt-1">Primary
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer mt-auto py-3 justify-content-center bg-light">
    <div class="container d-flex justify-content-center">
        <span class="text-muted justify-content-center">PPC Project by <strong><a href="http://sudorambles.com"
                                                                                  target="_blank">SudoRambles</a></strong></span>
    </div>
</footer>
</body>