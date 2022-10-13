{include file="header.tpl"}
<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{$item->imagen}" alt="..." /></div>
            <div class="col-md-6">
                <img src="{$item->imagen_marca}" alt="{$item->nombre_marca}" width="60px" height="45px"
                    fill="#55595c" />
                <small>{$item->descripcion_marca}</small>
                <h1 class="display-5 fw-bolder">{$item->nombre}</h1>
                <div class="small mb-1">{$item->cilindrada}cc</div>
                <div class="fs-5 mb-5">
                </div>
                <p class="lead">{$item->descripcion}</p>
                <span>${$item->precio}</span>
                <a class="link-dark" href="showAll">Volver.</a>
                <div class="d-flex">
                </div>
            </div>
        </div>
    </div>
</section>
{include file="footer.tpl"}