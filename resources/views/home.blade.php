<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        @foreach ($trains as $train)
                            <div class="card col-3 p-3">
                                <h2>Treno N {{$train->codice_treno}}</h2>
                                <p>
                                    {{$train->azienda}}
                                </p>                               
                                <p> partito da: {{$train->stazione_partenza}}
                                </p>
                                <p> diretto a: {{$train->stazione_arrivo}}
                                </p>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </main>

</body>

</html>
