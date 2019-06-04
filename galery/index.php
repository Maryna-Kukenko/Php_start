<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
  <input type="file" name="my-file">
  <input type="submit" value="upload">
</form>
</body>
</html>

<?php
if($_FILES){
  $dir = "./file/";
  $uploadFile = $dir.$_FILES['my-file']['name'];

  if (!is_dir($dir)){
    mkdir("./file/");
  }

  if ($_FILES['my-file']["type"] == "image/jpeg" || $_FILES['my-file']["type"] == "application/pdf"){
    move_uploaded_file($_FILES['my-file']["tmp_name"], $uploadFile);
  } else {
    echo "It's not a picture";
  }

  if ($dirDocs = opendir($dir)){
    while (($file = readdir($dirDocs)) !== false){
      if ($file == ".") continue;
      if ($file == "..") continue;
      echo  "<img src=file/$file  style='width: 200px; height: 260px'/ >";
    }
    closedir($dirDocs);
  }
}