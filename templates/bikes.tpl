{include file="header.tpl"}
{foreach from=$bikes item=$bike}
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <h3>{$bike->nombre}</h3>
        <img src="{$bike->imagen}" alt="{$bike->nombre}" width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
            fill="#eceeef" dy=".3em">{$bike->descripcion}</text>
        <p>Cilindrada:{$bike->cilindrada}</p>
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <ul class="list-group align-items-center">
                        <li class="list-group-item"><a href="view/{$bike->id_moto}">View</a></li>
                        </ul>
                        <ul class="list-group align-items-center">
                        <li class="list-group-item"><a href="edit/{$bike->id_moto}">Edit</a></li>
                        </ul>

                </div>
            </div>
        </div>
    </div>
{/foreach}

{include file="footer.tpl"}