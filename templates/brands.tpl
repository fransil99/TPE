{include file="header.tpl"}

{if $error}
    <div class="alert alert-danger mt-3">
        {$error}
        <a href="brands">Volver</a>
    </div>
{/if}
{foreach from=$brands item=$brand}
    <ul class="list-group">
        <li class="list-group-item"><a href="bikeBrands/{$brand->id_marca}">
                <h6>{$brand->nombre_marca}</h6>
            </a>
            {if isset($brand->imagen_marca)}
                <img src="{$brand->imagen_marca}" alt="{$brand->nombre_marca}" width="60px" height="45px" fill="#55595c" />
            {/if}
            
            {if isset($smarty.session.IS_LOGGED)}
                <a class="btn btn-danger btn-sm" href="deleteBrand/{$brand->id_marca}">Eliminar Marca </a>-
                <a class="btn btn-primary" href="formEditBrand/{$brand->id_marca}">Editar Marca </a>
            {/if}
        </li>
    </ul>
{/foreach}
<ul>
    {if isset($smarty.session.IS_LOGGED)}
        <img src="images\signoMasLogo.png" alt="SignoMasLogo" width="90px" height="70px" fill="#55595c" />
        <a class="link-success" href="createBrand">Añadir Marca</a>
    {/if}
{include file="footer.tpl"}