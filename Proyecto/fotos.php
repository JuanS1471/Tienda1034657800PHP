<!DOCTYPE html>
<html>
    <head>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/popper.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
       
    </head>
    <body>
      
    <form method="post" enctype="multipart/form-data" action="controlador/fotosc.php">
        <table id="tablal" style="width: 400px" class="table table-hover table-bordered">
            <tr>
                 <td><label for="id">ID</label></td>
                 <td> <input id="id" name="id" class="form-control" type="number"/></td>
            </tr>
            <tr>
                 <td><label for="productoscb">productoscb</label></td>
                 <td><input id="productoscb" name="productoscb" class="form-control" type="text"/></td>
            </tr>
            <tr>
                 <td><label for="descripcion">descripción</label></td>
                 <td><textarea id="descripcion" name="descripcion" class="form-control" > 
        </textarea></td>
            </tr>
            <tr>
                 <td><label for="foto">Foto</label></td>
                 <td> <input id="foto" name="foto" class="form-control" type="file"/></td>
            </tr>
            <tr>
                 <td> <input id="" name="" class="btn btn-secondary" type="submit"/></td>
                 <td></td>
            </tr>
        </table>
    </form>
    </body>
</html>



