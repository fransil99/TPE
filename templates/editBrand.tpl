{include file="header.tpl"}
<h3>Editar Marca:</h3>
<form action="editBrand/{$brand->id_marca}" method="POST" enctype="multipart/form-data" >

    <div class="form-group">
        <label for="nombre">Nombre de la marca</label>
        <input value="{$brand->nombre_marca}" name="nombre" type="text" class="form-control" id="exampleInputEmail1"
            required aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">Editar nombre</small>
    </div>

    <div class="form-group">
        <label for="descripcion">Descripcion de la marca</label>
        <input value="{$brand->descripcion_marca}" name="descripcion" type="text" class="form-control" required
            aria-describedby="emailHelp"> <small id="emailHelp" class="form-text text-muted">Editar descripcion</small>
    </div>

    <div class="form-group">
        <label for="imagen">Url de la imagen</label>
        <input value="{$brand->imagen_marca}" name="imagen" type="file" class="form-control" required
            aria-describedby="emailHelp"> <small id="emailHelp" class="form-text text-muted">Editar link de la
            imagen.</small>
    </div>

    <button type="submit" class="btn btn-warning">Editar Marca</button>

</form>

{include file="footer.tpl"}