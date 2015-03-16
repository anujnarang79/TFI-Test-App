<!-- Code by Anuj Narang
	 Dated: 16th March 2015
	 For: Teach For India
-->


<?php

require_once('../mysqli_connect.php');  //connect to database


$title = $description = $author = "";
$TitleError = $DescriptionError = $AuthorError = "";
$bool = "true";


//validate the title
if(empty($_REQUEST['Title']))
	{
		$TitleError = "Title is required";
		$bool = "false";
	}
else
	{	
		$title = $_REQUEST['Title'];	
	}
	
	
	
if(empty($_REQUEST['Description']))
	{
		$DescriptionError = "Description is required";
		$bool = "false";
	}
else
	{	
		$description = $_REQUEST['Description'];	
	}



if(empty($_REQUEST['Author']))
	{
		$AuthorError = "Author is required";
		$bool = "false";
	}
else
	{	
		$author = $_REQUEST['Author'];	
	}
	
	
	

	//main query for insertion of values into table
	if($bool == "true")
	{
		$q= "INSERT INTO Table1(Title,Description,Author) VALUES ('$title','$description','$author')";

		
		//run the query- takes database connection as 1st argument, query itself as the 2nd argument		
		$r = @mysqli_query($dbc, $q);	


		//if query runs successfully
		if($r)  
			{ 	echo '<p> <h5> Record saved successfully </h5>'; 
			}

			
		//query fails to run
		else      
			{
				echo  mysqli_error($dbc) ;
			}	
	
	}

		include('index.php');
	
?>



