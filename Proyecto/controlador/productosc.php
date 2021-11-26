<?php
require_once './Mensajes.php';
require_once '../modelo/productosM.php';

class ProductosC extends Productos {

    function __construct() {
        switch ($_REQUEST['accion']) {
            case "Consultar":
                $this->consultarPorCB();
                break;
            case "ConsultarImg":
                $this->consultarImagenes();
                break;
        }
    }

    function consultarPorCB() {
        require_once '../controlador/conexion.php';
        $sql = "SELECT * FROM Productos where cb='" . $_POST['cb'] . "'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            if ($row = $result->fetch_assoc()) {
                $p = array($row['cb'], $row['nombre'], $row['descripcion']);
                $myJSON = json_encode($p);
                echo $myJSON;
            }
        } else {
            Mensajes::info("El producto no se encuentra registrado.");
        }
        $conn->close();
    }

    function consultarImagenes() {
        require_once '../controlador/conexion.php';
        $sql = "SELECT * FROM Fotos where productoscb='" . $_POST['cb'] . "'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            ?>
            <!-- Carousel -->
            <div class="m-0 row justify-content-center">
                <div id="demo" class="carousel slide" data-bs-ride="carousel" style="width: 400px">



                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                        <?php
                        $i = 0;
                        while ($row = $result->fetch_assoc()) {
                            $a = $i == 0 ? "active" : "";
                            echo '<div class="carousel-item ' . $a . '">';
                            echo '<img src="img/' . $row['foto'] . '" alt="' . $row['descripcion'] . '" class="d-block w-100" style="width:300px">';
                            echo '</div>';
                            $i++;
                        }
                        ?>
                    </div>
                    <!-- Indicators/dots -->
                    <div class="carousel-indicators">
                        <?php
                        for ($j = 0; $j < $i; $j++) {
                            $a = $j == 0 ? "active" : "";
                            echo '<button type="button" data-bs-target="#demo" data-bs-slide-to="' . $j . '" class="' . $a . '"></button>';
                        }
                        ?>
                    </div>
                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>

            <?php
        } else {
            Mensajes::info("El producto no tiene imágenes");
        }
        $conn->close();
    }

}

new ProductosC();
