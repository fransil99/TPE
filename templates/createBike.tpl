{include file="header.tpl"}
<form method="POST" action="createBike" enctype="multipart/form-data">
    <div class="form-group">
        <label for="idFk">Seleccionar Marca</label>
        <select name="idFk">
            <p>Seleccionar Marca</p>
            {foreach from=$brands item=$brand}
                <option value="{$brand->id_marca}">{$brand->nombre_marca}</option>
            {/foreach}
        </select>
    </div>

    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" class="form-control" required>
        <small  class="form-text text-muted">Editar nombre</small>
    </div>

    <div class="form-group">
        <label for="descripcion">Descripcion</label >
        <input name="descripcion" type="text" class="form-control" required>
        <small class="form-text text-muted">Breve descripcion de la moto</small>
    </div>

    <div class="form-group">
        <label for="imagen">Subir imagen</label>
        <input name="imagen" type="file" class="form-control" >
        <small class="form-text text-muted">Seleccionar imagen de tu computadora.</small>
    </div>

    <div class="form-group">
        <label for="cilindrada">Cilindrada</label>
        <input name="cilindrada" type="number" class="form-control"required>
        <small class="form-text text-muted"> CC.</small>
    </div>

    <div class="form-group">
        <label for="precio">Precio</label>
        <input name="precio" type="number" class="form-control" required> 
        <small class="form-text text-muted">Precio en USD</small>
    </div>


    <button type="submit" class="btn btn-primary">Agregar Moto</button>
</form>

{include file="footer.tpl"}