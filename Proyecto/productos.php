<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Productos</title>

        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/popper.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            function ajax() {
                var d = document.getElementById("cb").value;
                const xmlhttp = new XMLHttpRequest();
                xmlhttp.onload = function () {
                    try {
                        myObj = JSON.parse(this.responseText);//[1013,Juan,Milena,Herrera,García,jua@h.com]
                        document.getElementById("cb").value = myObj[1];
                        document.getElementById("nombre").value = myObj[2];
                        document.getElementById("descripcion").value = myObj[3];
                    } catch (e) {
                        document.getElementById("cb").value = "";
                        document.getElementById("nombre").value = "";
                        document.getElementById("descripcion").value = "";
                        document.getElementById("ver").innerHTML = this.responseText;
                    }

                }
                xmlhttp.open("POST", "controlador/productosc.php");
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xmlhttp.send("accion=Consultar&Documento=" + d);

            }



            function enviarF(accion) {
                var form = document.enviar;
                form.action = "controlador/productosc.php?accion=" + accion;
                var d = document.getElementById("Documento");
                var pn = document.getElementById("pnombre");
                var pa = document.getElementById("papellido");
                var sub = true;
                if (accion == "Guardar") {
                    if (d.value == "") {
                        sub = false;
                        d.style = "border-color:red;";
                    }
                    if (pn.value == "") {
                        sub = false;
                        pn.style = "border-color:red;";
                    }
                    if (pa.value == "") {

                        sub = false;
                        pa.style = "border-color:red;";
                    }
                }
                if (accion == "Eliminar") {
                    if (d.value == "") {
                        sub = false;
                        d.style = "border-color:red;";
                    }
                }
                if (accion == "Consultar") {
                    sub = false;
                    if (d.value == "") {
                        d.style = "border-color:red;";
                    } else {
                        ajax();
                    }
                }
             if (sub) {
                    form.submit();
                }
            }
        </script>
        <style type="text/css">
            input{
                padding: 5px;
                text-align: center;
                font-family: cursive;
            }
            #tabla1{
                width: 434px;

            }
        </style>
    </head>
    <body>


        <form action="" method="post" name="enviar">
            <table id="tabla1" class="table table-hover table-bordered">
                <tr>
                    <td><label for="cb" class="form-label">Codigo De Barras</label></td>
                    <td><input type="text" class="form-control" id="cb" name="cb" ></td>
                </tr>
                <tr>
                    <td><label for="nombre" class="form-label">Nombre</label></td>
                    <td><input type="text" class="form-control" id="nombre" name="nombre"></td>
                </tr>
                <tr>
                    <td><label for="descripcion" class="form-label">Descripcion</label></td>
                    <td><input type="text" class="form-control" id="descripcion" name="descripcion"></td>
                </tr>
                <tr>
                    <td><input type="button" value="Guardar" class="btn btn-success"  onclick="enviarF('Guardar')"></td>
                    <td><input type="button" value="Actualizar" class="btn btn-dark" onclick="enviarF('Actualizar')"></td>
                </tr>
                <tr>
                    <td><input type="button" value="Eliminar" class="btn btn-danger" onclick="enviarF('Eliminar')"></td>
                    <td><input type="button" value="Consultar" class="btn btn-info" onclick="enviarF('Consultar')"></td>
                </tr>
            </table>
        </form>
        <div id="ver">
        </div>
        <?php ?>
    </body>
</html>