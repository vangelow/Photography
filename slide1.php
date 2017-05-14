<?php
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
$target_dir = "uploads/slider/";
if($_POST['slideOption']=='slide1'){
	$target_file = $target_dir . '1' . '.jpg';
}
else if($_POST['slideOption']=='slide2'){
	$target_file = $target_dir . '2' . '.jpg';
}
else if($_POST['slideOption']=='slide3'){
	$target_file = $target_dir . '3' . '.jpg';
}
else if($_POST['slideOption']=='slide4'){
	$target_file = $target_dir . '4' . '.jpg';
}
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
header('Location: /Photography/index.php');
?>