<?php
	include 'connection_dbms.php'; 
	
?>
<h1>Add New Book</h1>
<form action="create_dbms.php" method="post">
	Book_Name :<input type="text" name="inputName" value="" /> <br />
	Author :<input type="text" name="inputAuthor" value="" /> <br />
	Publication :<input type="text" name="inputPubli" value="" /> <br />
	SubCat_ID :<input type="text" name="inputSubCat_ID" value="" /> <br />
	Vendor_ID :<input type="text" name="inputVendor_ID" value="" /> <br />
	Copies :<input type="text" name="inputCopies" value="" /> <br />	
	Price :<input type="text" name="inputPrice" value="" /> <br />
<br />
	<input type="submit" name="submit" />
</form>
