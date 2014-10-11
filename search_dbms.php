<?php
	include 'connection_dbms.php'; 
	$query = "SELECT * FROM Books";

	$result = mysql_query($query);
	
	while($book = mysql_fetch_array($result)) {

	//echo "<h3>" . $book['Book_Name'] . "</h3>"; 
	//echo "<p>" . $book['Author'] . "</p>";
	
}
?>
<h1>Search Books</h1>
<h3>Enter either Book Name or Author Name or Both</h3>

<form action="sresult_dbms.php" method="post">
	Book_Name :<input type="text" name="sName" value="" /> <br />
	Author :<input type="text" name="sAuthor" value="" /> <br />
<br />
	<input type="submit" name="submit" />
</form>
