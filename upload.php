<?php

if($_POST['categoryOption']=='kids'){
    $target_dir = "uploads/kids/";
}
else if ($_POST['categoryOption']=='weddings'){
    $target_dir = "uploads/weddings/";
}
else if ($_POST['categoryOption']=='nature'){
    $target_dir = "uploads/nature/";
}
else if ($_POST['categoryOption']=='portraits'){
    $target_dir = "uploads/portraits/";
}
if($_POST['heightOption']=='height'){
    $target_dir.='hg';
}
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

//if ($_FILES["fileToUpload"]["size"] > 1000000) {
 //   echo "Sorry, your file is too large.";
 //   $uploadOk = 0;
//}
$imageFileType = strtolower($imageFileType);
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";

} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>