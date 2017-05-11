<?php
session_start();
?>
<head>
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/jquery.fullPage.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.default.css">
        <link rel="stylesheet" href="css/lightbox.css">
        <link rel="stylesheet" href="css/main.css">
</head>
<form method='post' action='panel.php'>
Username:
<input type='text' name='username'>
Password:
<input type='password' name='passwd'>
Submit:
<input type='submit' value='Submit'>
<?php


$username = 'silvia';
$password = 'q5w1e3';

if(isset($_POST['username'])){
if($username==$_POST['username']&&$password==$_POST['passwd']){
	
	$_SESSION['username']='admin';
	if($_SESSION['username']=='admin')
	header('Location: /Photography/admin.php');

}
}
?>