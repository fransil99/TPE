<?php
/* Smarty version 4.2.1, created on 2022-09-30 22:11:15
  from 'C:\xampp\htdocs\TPE\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63374d63dad2a1_20741292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f223d49c90e8ac618c90b156b1ed2c4cb8694150' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\header.tpl',
      1 => 1664568428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63374d63dad2a1_20741292 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">

<head>
    <base href="<?php echo BASE_URL;?>
">
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
                        <h4 class="text-white">About</h4>
                        <p class="text-muted">Add some information about the album below, the author, or any other
                            background context. Make it a few sentences long so folks can pick up some informative
                            tidbits. Then, link them off to some social networking sites or contact information.</p>
                    </div>
                    <!--NAV  -->
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="home" class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2"
                        viewBox="0 0 24 24">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                        <circle cx="12" cy="13" r="4" />
                    </svg>
                    <strong>Galeria Motos</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>
    <!-- GALERIA -->
        
        <!--SELECT MARCA-->
        <ul class="list-group align-items-center" >
        <li class="list-group-item"><a href="home">Todas las motos</a></li>
        <li class="list-group-item"><a href="marcas/3">Honda</a></li>
        <li class="list-group-item"><a href="marcas/4">Yamaha</a></li>
        <li class="list-group-item"><a href="marcas/5">KTM</a></li>
        <li class="list-group-item"><a href="marcas/6">Husqvarna</a></li>
        <li class="list-group-item"><a href="marcas/7">Kawasaki</a></li>
        <li class="list-group-item"><a href="marcas/8">Suzuki</a></li>
        </ul>

        <!--TODAS LAS MOTOS-->
<?php }
}
