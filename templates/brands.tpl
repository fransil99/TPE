{include file="header.tpl"}
{foreach from=$brands item=$brand}
<ul class="list-group">
<li class="list-group-item"><a href="bikeBrands/{$brand->id_marca_fk}">{$brand->nombre_marca}</a>-<a class="btn btn-danger btn-sm" href="deleteBrand/{$brand->id_marca_fk}">Eliminar Marca </a></li> 
</ul>
{/foreach}
<a href="createBrand">Añadir Marca</a>
{include file="footer.tpl"}