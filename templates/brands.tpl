{include file="header.tpl"}
{foreach from=$brands item=$brand}
    <ul class="list-group">
        <li class="list-group-item"><a href="bikeBrands/{$brand->id_marca}"><h6>{$brand->nombre_marca}</h6></a>
            <a class="btn btn-danger btn-sm" href="deleteBrand/{$brand->id_marca}">Eliminar Marca </a>-
            <a class="btn btn-primary" href="formEditBrand/{$brand->id_marca}">Editar Marca </a>
        </li>
    </ul>
{/foreach}
<ul>
<a class="link-success" href="createBrand">Añadir Marca</a>
{include file="footer.tpl"}