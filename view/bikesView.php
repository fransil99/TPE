<?php

class BikesView
{

    public function showBikes($bikes)
    {
        require_once "templates/header.php";
        foreach ($bikes as $bike) {
            echo '
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                                <h3>' . $bike->nombre . '</h3>
                                <img src="' . $bike->imagen . '" width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                                    dy=".3em">' . $bike->descripcion . '</text>
                                    <p>Cilindrada:'.$bike->cilindrada.'</p>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    <ul class="list-group align-items-center" >
                                    <li class="list-group-item"><a href="view/'.$bike->id_moto.'">View</a></li>
                                    </ul>
                                    </div>
                                </div>
                            </div>
                </div>';
        }
        require_once "templates/footer.php";
    }

    public function showItem($item)
    {
        require_once "templates/header.php";
        echo '
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <h3>' . $item->nombre . '</h3>
                        <img src="' . $item->imagen . '" width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                            dy=".3em">' . $item->descripcion . '</text>
                            <p>Cilindrada:'.$item->cilindrada.'</p>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            <ul class="list-group align-items-center" >
                            </ul>
                            <small class="text-muted"> Precio:$'.$item->precio.'</small>
                            </div>
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                            <img src="' . $item->imagen_marca . '" width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                            dy=".3em">' . $item->descripcion_marca . '</text>
                            </div>

                        </div>
                    </div>
        </div>';
        require_once "templates/footer.php";
    }

    public function showError($msgError)
    {
    }
}
