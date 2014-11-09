<?php
require 'connect.php';
if(isset($_POST['title']) && isset($_POST['details']) && isset($_POST['prereq']) && isset($_POST['number']) && isset($_POST['category']) && isset($_POST['contact']) && isset($_POST['name']))
{
	$title=$_POST['title'];
	$details=$_POST['details'];
	$prereq=$_POST['prereq'];
	$number=$_POST['number'];
	$category=$_POST['category'];
	$contact=$_POST['contact'];
	$name=$_POST['name'];
	if(!empty($title) && !empty($details) && !empty($prereq) && !empty($category) && !empty($number) && !empty(contact) && !empty(name))
	{
		$query="INSERT INTO `projects` VALUES ('','".$title."','".$details."','".$prereq."','".$category."','".$number."','".$contact."','".$name."')";
		if($query_run=mysql_query($query))
		{
			header('Location: index.php');
		}
		else
		{
			echo "Query Failed.";
		}	
	}			
	else
	{
		echo "You must enter all fields.";
	}
}
?>
<form action="<?php echo $current_file; ?>" method="POST">
<!-- Enter book title: <input type="text" name="title"> <br/>
Enter details: <input type="text" name="details"><br/>
Price: <input type="text" name="price"> <br/>
Negotiable:<br /> <input type="radio" name="negotiation" value="y"> Yes<br>
<input type="radio" name="negotiation" value="n"> No <br> 
Category: 
<select name="category">
	<option value="">Select</option>
	<option value="A1">Chemical</option>
	<option value="A3">Electrical, Electronics and Instrumentation</option>
	<option value="A4">Mechanical</option>
	<option value="A7">Computer Science</option>
	<option value="B1">Biological Sciences</option>
	<option value="B2">Chemistry</option>
	<option value="B3">Economics</option>
	<option value="B4">Mathematics</option>
	<option value="B5">Physics</option>
	<option value="H1">Humanities Elective</option>
	<option value="O1">Others</option>
</select> <br/>
<input type="submit" value="Add">
</form> -->