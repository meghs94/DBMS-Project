<?php
	include 'connection_dbms.php';
	
$sname = $_POST["sName"];
$sauth = $_POST["sAuthor"];

	if(!$_POST['submit']) {

	echo "Please fill out the form"; 
	header('Location: search_dbms.php');
}
	else {
	
	$query = "SELECT * FROM Books where Book_Name='$sname' OR Author='$sauth'";
	$result = mysql_query($query);
	if(mysql_num_rows($result) != 0)
{
	while($book = mysql_fetch_array($result)) {

	echo "<h3>" . $book['Book_Name'] . "</h3>"; 
	echo "<p>" . $book['Author'] . "</p>";
	echo "<p>" . $book['Copies'] . "</p>";
	echo "<p>" . $book['Price'] . "</p>";	

	echo " ";
	echo "----Book Search Successful----";	
}
}
else
echo "----Book Search Usuccessful----";	
	
}

?>
	

	 

