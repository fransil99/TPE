{include file="header.tpl"}
<form method="POST" action="editBike">

    <div class="form-group">
        <label for="idFk">Seleccionar Marca</label>
        <select name="select">
            <p>Seleccionar Marca</p>
            {foreach from=$brands item=$brand}
                <option value="value1">{$brand->nombre_marca}</option>
            {/foreach}
        </select>
    </div>

    <div class="form-group">
        <label for="nombre">Nombre de la marca</label>
        <input name="nombre" type="text" class="form-control" id="exampleInputEmail1" required
            aria-describedby="emailHelp" value="{$bike->nombre}">
        <small id="emailHelp" class="form-text text-muted">Editar nombre</small>
    </div>

    <div class="form-group">
        <label for="descripcion">Descripcion de la marca</label>
        <input  name="descripcion" type="text" class="form-control" required aria-describedby="emailHelp"> <small
            id="emailHelp" class="form-text text-muted">Editar descripcion</small>
    </div>

    <div class="form-group">
        <label for="imagen">Url de la imagen</label>
        <input  name="imagen" type="text" class="form-control" required aria-describedby="emailHelp"> <small
            id="emailHelp" class="form-text text-muted">Editar link de la imagen.</small>
    </div>

    <div class="form-group">
        <label for="cilindrada">Cilindrada</label>
        <input  name="cilindrada" type="number" class="form-control" required aria-describedby="emailHelp"> <small
            id="emailHelp" class="form-text text-muted">Editar CC.</small>
    </div>

    <div class="form-group">
        <label for="precio">Precio</label>
        <input  name="precio" type="number" class="form-control" required aria-describedby="emailHelp"> <small
            id="emailHelp" class="form-text text-muted">Editar Precio.</small>
    </div>

    <button type="submit" class="btn btn-primary">Editar Item</button>
</form>

{include file="footer.tpl"}