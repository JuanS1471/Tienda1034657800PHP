<!DOCTYPE html>
<html>
    <head>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            function enviar(accion) {
                var form = document.productosF;
                form.action = "controlador/productosC.php?accion=" + accion;
                //form.submit();
                ajax();

            }
            function ajax() {
                var cb = document.getElementById("cb").value;
                const xmlhttp = new XMLHttpRequest();
                xmlhttp.onload = function () {
                    try {
                        myObj = JSON.parse(this.responseText);
                        document.getElementById("nombre").value = myObj[1];
                        document.getElementById("descripcion").value = myObj[2];
                        ajaxImg(cb);
                    } catch (e) {
                        document.getElementById("nombre").value = "";
                        document.getElementById("descripcion").value = "";
                        document.getElementById("imgs").innerHTML = this.responseText;
                    }

                }
                xmlhttp.open("POST", "controlador/productosC.php");
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xmlhttp.send("accion=Consultar&cb=" + cb);
            }
            function ajaxImg(cb) {
                const xmlhttp = new XMLHttpRequest();
                xmlhttp.onload = function () {
                    document.getElementById("imgs").innerHTML = this.responseText;
                }
                xmlhttp.open("POST", "controlador/productosC.php");
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xmlhttp.send("accion=ConsultarImg&cb=" + cb);
            }
        </script>
    </head>
    <body>
        <form name="productosF" method="post">
            <table class="table table-bordered table-striped">
                <tr>
                    <td><label for="cb">Código de barras</label></td>
                    <td><input id="cb" class="form-control" name="cb" type="text"/></td>
                </tr>
                <tr>
                    <td><label for="nombre">Nombre</label></td>
                    <td><input id="nombre" class="form-control" name="nombre" type="text"/></td>
                </tr>
                <tr>
                    <td><label for="descripcion">Descripción</label></td>
                    <td><textarea id="descripcion" class="form-control" name="descripcion"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input id="consultar" class="btn btn-info" name="accion" type="button" value="Consultar" onclick="ajax()"/></td>
                </tr>
            </table>
            <div id="imgs">

            </div>

        </form>

        <hr/>
        
           
    </body>
</html>