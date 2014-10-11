<?php
	include 'connection_dbms.php';
	
$name = $_POST["inputName"];
$auth = $_POST["inputAuthor"];
$publi = $_POST["inputPubli"];
$subcat = $_POST["inputSubCat_ID"];
$vend = $_POST["inputVendor_ID"];
$copies = $_POST["inputCopies"];
$price = $_POST["inputPrice"];

	if(!$_POST['submit']) {

	echo "Please fill out the form"; 
	header('Location: index_dbms.php');
}
	else {
	mysql_query("INSERT INTO `Books` (`Book_ID`, `Book_Name`, `Author`, `Publication`, `SubCat_ID`, `Vendor_ID`, `Copies`, `Price`) 
		    VALUES (NULL, '$name', '$auth', '$publi', '$subcat', '$vend', '$copies', '$price')") or die(mysql_error());
	echo "User has been added";
	header('Location: display_dbms.php');
}
	 

?>
