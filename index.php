<!-- Code by Anuj Narang
	 Dated: 16th March 2015
	 For: Teach For India
-->

<html>
<head>
<title> TFI Test App </title>
</head>

<body>

<center> <h1> TFI Test Application </h1> </center>
<br><br>


<!-- Creating a form for 3 fields -->
<form action="handle_form.php" method="post">

	<br><br>
	<INPUT Name = "Title" TYPE="TEXT" Placeholder="Title"> </INPUT>
	<span class="error">* <?php echo $TitleError;?></span>
	
	<br><br>
	<INPUT Name="Description" TYPE="TEXT" Placeholder= "Description"> </INPUT>
	<span class="error">* <?php echo $DescriptionError;?></span>

	<br><br>
	<INPUT Name="Author" TYPE="TEXT" Placeholder="Author"> </INPUT>
	<span class="error">* <?php echo $AuthorError;?></span>

	<br><br><br>
	<INPUT Name="Submit" TYPE="SUBMIT" Value="Submit Data"> </INPUT>
	
</form>


<!-- Viewing the Records -->
<br><br><br>
<p> 
	<a href="view_records.php"> 
		<h4 align="left"> <font color="black"> View Records  </font> </a>   </h4> </p>

		
	
</body>

</html>
