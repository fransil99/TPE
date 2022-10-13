<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{BASE_URL}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mx Motos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css">
</head>

<body>
    <!-- HEADER -->
    <header role="banner">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
            <img src="images/braapLogo.jpg" width="30"
            height="30" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24">
                <div class="collapse navbar-collapse" id="navbarsExample05">
                    <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="brands">Marcas</a>
                        </li>
                        {if isset($smarty.session.IS_LOGGED)}
                        <li class="nav-item">
                            <a class="nav-link" href="formAddBike">Añadir Moto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout">Log Out</a>
                        </li>
                        {else}
                        <li class="nav-item">
                            <a class="nav-link" href="login">Log In</a>
                        </li>
                        {/if}
                    </ul>
                </div>
            </div>
        </nav>
    </header>
