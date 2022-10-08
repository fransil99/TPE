{include file="header.tpl"}
{foreach from=$bikes item=$bike}
    <h3>{$bike->nombre}</h3>
    <h5>Precio en USD: ${$bike->precio}</h5>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <h6>Cilindrada {$bike->cilindrada}</h6>
        <img src="{$bike->imagen}" alt="{$bike->nombre}" width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
            fill="#eceeef" dy=".3em">{$bike->descripcion}</text>
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
            </div>
            <ul class="list-group align-items-center ">
                <li class="list-group-item bg-dark"><a class="link-light" href="viewBike/{$bike->id_moto}">View</a></li>
            </ul>
            <ul class="list-group align-items-center">
                <li class="list-group-item bg-dark"><a class="link-light" href="editBike/{$bike->id_moto}">Edit</a></li>
            </ul>
            <ul class="list-group align-items-center">
                <li class="list-group-item bg-dark"><a class="link-light" href="deleteBike/{$bike->id_moto}">Delete</a></li>
            </ul>
        </div>
    </div>
{/foreach}

{include file="footer.tpl"}