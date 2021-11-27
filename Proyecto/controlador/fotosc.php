<html>
    <head>
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
</html>

<?php
 require_once './Mensajes.php';
$target_dir = "../img/";

 $imageFileType = strtolower(pathinfo($_FILES['foto']['name'],PATHINFO_EXTENSION));
 $nombreArchivo= basename($_POST['id'].'-'.$_POST['productoscb'].'.'.$imageFileType);
 $target_file = $target_dir . $nombreArchivo;

$uploadOk = 1;



// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["foto"]["tmp_name"]);
  if($check !== false) {
      Mensajes::info( "File is an image - " . $check["mime"] . ".");
    $uploadOk = 1;
  } else {
     Mensajes::danger( "File is not an image.");;
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  Mensajes::danger( "Sorry, file already exists.");
  $uploadOk = 0;
}

// Check file size
if ($_FILES["foto"]["size"] > 5000000) {
   Mensajes::danger( "Sorry, your file is too large.");
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
   Mensajes::danger( "Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
   Mensajes::danger( "Sorry, your file was not uploaded.");
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
      require_once './conexion.php';
     
      $sql="INSERT INTO Fotos VALUES('".$_POST['id']."','".$_POST['descripcion']."','".$nombreArchivo."','".$_POST['productoscb']."')";
      if ($conn->query($sql) === TRUE) {
            Mensajes::success("La foto se ha subido y registradio.");
        } else {
            Mensajes::danger($conn->error);
        }
      $conn->close();
  } else {
     Mensajes::danger( "Sorry, there was an error uploading your file.");
  }
}
?>
