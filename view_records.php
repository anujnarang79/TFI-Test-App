<!-- Code by Anuj Narang
	 Dated: 16th March 2015
	 For: Teach For India
-->

<?php	
	
//connect to database
require_once('../mysqli_connect.php');  

	$q= "SELECT * FROM Table1";

	
//run the query- takes database connection as 1st argument, query itself as the 2nd argument
	$r = @mysqli_query($dbc, $q);	

	
// display the entered records
if($r)
{
	echo ('<table align="center" cellspacing="4" cellpadding="3" width="96%">
	<form> <tr>
		<td align="left"> <b> <font size=3> Title <font> </b> </td>
		<td align="left"> <b> <font size=3> Description <font>  </b> </td>
		<td align="left"> <b> <font size=3> Author <font></b> </td>
	</tr> </form>
	');

	while($row=mysqli_fetch_array($r,MYSQLI_ASSOC))
	{
		echo ('<tr>
			<td align="left"> ' . $row['Title'] . ' </td>
			<td align="left"> ' . $row['Description'] . ' </td>
			<td align="left"> ' . $row['Author'] . ' </td>
		</tr>
		');
	}   

	echo '</table>';  //close the table 

	mysqli_free_result($r); // free up the resources	
	
}
		
else
{
	echo "error error";
	echo mysqli_error($dbc);
}
	
	
echo
('
<br><br><br><br>
<p> 
	<a href="TFI_Test.html"> 
		<h5 align="left"> <font color="black"> Go back to enter more records </font>  </a>   </h5> </p>

')	
	
	?>	
	
