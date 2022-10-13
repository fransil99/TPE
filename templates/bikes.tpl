{include file="header.tpl"}
{* {foreach from=$bikes item=$bike}
    <h3>{$bike->nombre}</h3>
    <h5>Precio en USD: ${$bike->precio}</h5>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <h6>Cilindrada {$bike->cilindrada}</h6>
        {if isset($bike->imagen)}<img src="{$bike->imagen}" alt="{$bike->nombre}" width="100%" height="100%"
            fill="#55595c" />{/if}<text x="50%" y="50%" fill="#eceeef" dy=".3em">{$bike->descripcion}</text>
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
            </div>
            <ul class="list-group align-items-center ">
                <li class="list-group-item bg-dark"><a class="link-light" href="viewBike/{$bike->id_moto}">View</a></li>
            </ul>
            {if isset($smarty.session.IS_LOGGED)}
                <ul class="list-group align-items-center">
                    <li class="list-group-item bg-dark"><a class="link-light" href="formEditBike/{$bike->id_moto}">Edit</a></li>
                </ul>
                <ul class="list-group align-items-center">
                    <li class="list-group-item bg-dark"><a class="link-light" href="deleteBike/{$bike->id_moto}">Delete</a></li>
                </ul>
            {/if}
        </div>
    </div>
{/foreach} *}
{if isset($brand)}
    <div class="d-flex justify-content-center">
    <img src="{$brand->imagen_marca}" alt="{$brand->nombre_marca}"  class="d-flex justify-content-center" width="15%" height="15%" fill="#55595c" />
    </div>
    <h6>{$brand->descripcion_marca}</h6>
{/if}
{foreach from=$bikes item=$bike}
<section style="background-color: #eee;">
    <div class="container py-5">
        <div class="row justify-content-center mb-3">
            <div class="col-md-12 col-xl-10">
                <div class="card shadow-0 border rounded-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                    <img src="{$bike->imagen}" class="w-100"/>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <h5>{$bike->nombre}</h5>
                                <div class="d-flex flex-row">
                                    <h6>{$bike->cilindrada}cc</h6>
                                </div>
                                <p class=" mb-4 mb-md-0 text-truncate">{$bike->descripcion}</p>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                <div class="d-flex flex-row align-items-center mb-1">
                                    <h4 class="mb-1 me-1">${$bike->precio}</h4>
                                </div>
                                <div class="d-flex flex-column mt-4">
                                    <button class="btn btn-primary btn-sm" type="button"><a class="link-light" href="viewBike/{$bike->id_moto}">View</a></button>
                                    {if isset($smarty.session.IS_LOGGED)}
                                    <button class="btn btn-primary btn-sm mt-2" type="button"><a class="link-light" href="formEditBike/{$bike->id_moto}">Editar</a></button>
                                    <button class="btn btn-outline-primary btn-sm mt-2" type="button"><a class="link-danger" href="deleteBike/{$bike->id_moto}">Eliminar</a></button>
                                    {/if}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
{/foreach}
{include file="footer.tpl"}