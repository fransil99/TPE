{include file="header.tpl"}
{foreach from=$bikes item=$bike}
    <h3>{$bike->nombre}</h3>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    <h5>Cilindrada {$bike->cilindrada}</h5>
        <img src="{$bike->imagen}" alt="{$bike->nombre}" width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
            fill="#eceeef" dy=".3em">{$bike->descripcion}</text>
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
                </div>
                <ul class="list-group align-items-center ">
                    <li class="list-group-item bg-dark" ><a href="view/{$bike->id_moto}">View</a></li>
                </ul>
                <ul class="list-group align-items-center">
                    <li class="list-group-item bg-dark"><a href="edit/{$bike->id_moto}">Edit</a></li>
                </ul>
        </div>
    </div>
{/foreach}

{include file="footer.tpl"}