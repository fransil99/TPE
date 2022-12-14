{include file="header.tpl"}
<form method="POST" action="editBike/{$bike->id_moto}" enctype="multipart/form-data">
    <div class="form-group">
        <label for="idFk">Seleccionar Marca</label> 
        <select name="idFk">
            <p>Seleccionar Marca</p>
            <option value="{$bike->id_marca}" selected>{$bike->nombre_marca}</option>
            {foreach from=$brands item=$brand}
                {if $brand->nombre_marca != $bike->nombre_marca}
                <option value="{$brand->id_marca}">{$brand->nombre_marca}</option>
                {/if}
            {/foreach}
        </select>
    </div>

    <div class="form-group">
        <label for="nombre">Nombre de la marca</label>
        <input value="{$bike->nombre}" name="nombre" type="text" class="form-control" id="exampleInputEmail1" required
            aria-describedby="emailHelp" >
        <small id="emailHelp" class="form-text text-muted">Editar nombre</small>
    </div>

    <div class="form-group">
        <label for="descripcion">Descripcion de la marca</label>
        <input value="{$bike->descripcion}" name="descripcion" type="text" class="form-control" required aria-describedby="emailHelp"> <small
            id="emailHelp" class="form-text text-muted">Editar descripcion</small>
    </div>

    <div class="form-group">
        <label for="imagen">Subir imagen</label>
        <input value="{$bike->imagen}" name="imagen" type="file" class="form-control"  aria-describedby="emailHelp"> <small
            id="emailHelp" class="form-text text-muted">Editar link de la imagen.</small>
    </div>

    <div class="form-group">
        <label for="cilindrada">Cilindrada</label>
        <input value="{$bike->cilindrada}"  name="cilindrada" type="number" class="form-control" required aria-describedby="emailHelp"> <small
            id="emailHelp" class="form-text text-muted">Editar CC.</small>
    </div>

    <div class="form-group">
        <label  for="precio">Precio</label>
        <input value="{$bike->precio}" name="precio" type="number" class="form-control" required aria-describedby="emailHelp"> <small
            id="emailHelp" class="form-text text-muted">Editar Precio.</small>
    </div>

    <button type="submit" class="btn btn-primary">Editar Item</button>
</form>

{include file="footer.tpl"}