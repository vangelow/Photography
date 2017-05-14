<?php
$_SESSION['username']='admin';
  if($_SESSION['username']=='admin'){
?><!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
    <select name="categoryOption">
  <option value="kids">Деца</option>
  <option value="weddings">Сватби</option>
  <option value="nature">Природа</option>
  <option value="portraits">Портрети</option>
  </select>
  <select name="heightOption">
  <option value="height">Височина</option>
  <option value="width">Широчина</option>
</select>

</form>

</body>
</html> <?php }?>



