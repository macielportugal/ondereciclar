<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Onde Reciclar?</title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        html,
        body,
        main,
        #map {
            height: 100%;
        }
    </style>
</head>

<body>
    <header class="navbar sticky-top bg-light flex-md-nowrap p-0 shadow" data-bs-theme="dark">
        <a class="navbar-brand me-0 px-3 fs-10 text-black text-uppercase" href="#">
            <img src="logo.png" style="width: 50px" />
            Onde Reciclar
        </a>

        <div id="navbarSearch" class="navbar-search w-50 text-center centered" style="margin: 0 auto;">
            <input class="form-control w-50 rounded-0 border-0 bg-secondary --bs-success-border-subtle" type="text" placeholder="Seu CEP" aria-label="CEP">
        </div>
        <div class="px-3">
            <input type="button" class="btn btn-success" value="Adicionar um endereço">
        </div>
    </header>

    <main>
        <div id="map" class="row">
            <div id="map-result" class="col-8 bg-success"></div>
            <div class="col-4">
                <h3 class="text-center my-5">Endereços</h3>

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>Endereço</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>João</td>
                            <td>11 99999-9999</td>
                            <td>Rua 1, 123</td>
                        </tr>
                        <tr>
                            <td>Maria</td>
                            <td>11 99999-9999</td>
                            <td>Rua 2, 123</td>
                        </tr>
                        <tr>
                            <td>José</td>
                            <td>11 99999-9999</td>
                            <td>Rua 3, 123</td>
                        </tr>
                        <tr>
                            <td>João</td>
                            <td>11 99999-9999</td>
                            <td>Rua 1, 123</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <script>
        // Função para inicializar o mapa
        function initMap() {
            // Localização inicial (latitude e longitude)
            const location = {
                lat: -23.5505,
                lng: -46.6333
            }; // São Paulo como exemplo

            // Cria o mapa com o local inicial e zoom ajustado
            const map = new google.maps.Map(document.getElementById("map-result"), {
                zoom: 10,
                center: location,
            });

            // Adiciona um marcador na localização inicial
            new google.maps.Marker({
                position: location,
                map: map,
                title: "São Paulo",
            });
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJc9_jlxYR21z_KZ4of1M6vtgX8Xrw0BQ&callback=initMap" async defer></script>

</body>

</html>
