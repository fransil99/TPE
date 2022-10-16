{include file="header.tpl"}
<form method="POST" action="addBrand" enctype="multipart/form-data">

    <div class="form-group">
        <label for="brand">Nombre de la marca</label>
        <input name="brand" type="text" class="form-control" id="exampleInputEmail1" required
            aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">Nombre de la marca.</small>
    </div>

    <div class="form-group">
        <label for="description">Descripcion de la marca</label>
        <input name="description" type="text" class="form-control"  required
            aria-describedby="emailHelp"> <small id="emailHelp" class="form-text text-muted">Breve
            descripcion de la marca</small>
    </div>

    <div class="form-group">
        <label for="image">Url de la imagen</label>
        <input name="imagen" type="file" class="form-control"  required
            aria-describedby="emailHelp"> <small id="emailHelp" class="form-text text-muted">Link de la imagen</small>
    </div>
    

    <button type="submit" class="btn btn-primary">Agregar Marca</button>
</form>

{include file="footer.tpl"}