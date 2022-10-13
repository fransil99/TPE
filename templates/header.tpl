<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{BASE_URL}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mx Motos</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link>
</head>

<body>
    <!-- HEADER -->
    <header>
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">Sobre esta pagina</h4>
                        <p class="text-muted">En esta pagina, mostramos modelos de motos, de motocros y enduro, incltuyendo motos para principiantes hasta topes de gama de cada marca.</p>
                    </div>
                    <!--NAV  -->
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="home" class="navbar-brand d-flex align-items-center">
                    <img src="https://i.pinimg.com/originals/b6/82/95/b6829587db3ff9671f53f5419c7a87cf.jpg" width="30" height="30" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2"
                        viewBox="0 0 24 24">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                        <circle cx="12" cy="13" r="4" />
                    </img>
                    <strong>MX</strong>
                </a>
                <li class="bg-dark list-group-item"><a class="link-light" href="home">Home</a></li>
                <li class="bg-dark list-group-item"><a class="link-light" href="brands">Marcas</a></li>
                {if isset($smarty.session.IS_LOGGED)}
                    <li class="bg-dark list-group-item"><a class="link-light" href="formAddBike">Añadir moto</a></li>
                    <li class="bg-dark list-group-item"><a class="link-light" href="logout">Logout</a></li>
                    {else}
                        <li class="bg-dark list-group-item"><a class="link-light" href="login">Login</a></li>
                {/if}
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>