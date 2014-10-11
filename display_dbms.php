<h1>Book List</h1>
<?php
	include 'connection_dbms.php'; 
	$query = "SELECT * FROM Books";

	$result = mysql_query($query);
	
	while($book = mysql_fetch_array($result)) {

	echo "<p>" . $book['Book_Name'] . "<p>"; 
	//echo "<p>" . $book['Author'] . "</p>";

	
	
}
?>
