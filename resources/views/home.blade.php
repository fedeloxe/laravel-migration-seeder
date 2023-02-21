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
    <div class="container">
        <h1 class="my-4"> Treni </h1>
        <div class="row">
            @foreach ($trains as $train )
                <div class="col-3 m-5 bg-secondary rounded-1">
                    <h5>Azienda:</h5>
                    {{$train["azienda"]}}
                    <h5>Stazione di partenza:</h5>
                    {{$train['stazione_di_partenza']}}
                    <h5>Stazioe di arrivo:</h5>
                    {{$train['Stazione_di_arrivo']}}
                    <h5>Orario di partenza:</h5>
                    {{$train['orario_di_partenza']}}
                    <h5>Orario di arrivo:</h5>
                    {{$train['Orario_di_arrivo']}}
                    <h5>Codice treno:</h5>
                    {{$train['Codice_Treno']}}
                    <h5>Numero Carrozze:</h5>
                    {{$train['Numero_Carrozze']}}
                    <h5>In orario</h5>
                    {{convertBoolean($train['In_orario'])}}
                    <h5>Cancellato</h5>
                    {{convertBoolean($train['Cancellato'])}}

                </div>
            @endforeach
        </div>
    </div>
    

</body>