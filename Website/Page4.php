<?php


include ('includes/connection.php');


if($_REQUEST['submit']){
$Text = $_POST['name3'];
$Status = $_POST['name3'];
$Status2 = $_POST['name'];
$Empclient = $_POST['name'];



$Query = "SELECT * FROM labeldata WHERE Label LIKE '%$Status2%' AND (Text LIKE'%$Text%'OR Label LIKE'%$Status%')" ;
$Result = mysqli_query($Connection, $Query);



mysqli_close($Connection);
include ('includes/header.php');
}
?>

<h1> Search Result</h1>

<?php

echo $AlertMsg;
 ?>
 <style> 
.search1 {
font-size: 16px;
  font-size: max(16px, 1em);
  font-family: inherit;
  padding: 0.25em 0.5em;
  background-color: #a9a9a9;
  border: 2px solid var(--input-border);
  border-radius: 4px;
}


input[type=button], input[type=submit], input[type=reset] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 4px 10px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 8px;
}

</style>
<body>
<form action="Page4.php" method="POST">
<center><h3></h3></center>
<center><table>
<tr>
	<td></td>
	<td><select name="name" class ="search1" onchange="this.nextElementSibling.value=this.value" >
   
<option value=""> Select </option>
<option value ="True">True</Option>      <option value ="False">False</Option>
</select>
	</td>
	
	<td> &nbsp;<input  class ="search1" type="text" name="name3" placeholder="Search Any Here" size="50"> &nbsp;</td>
	
	
	

	<td><input type="submit" name="submit" value="Search"></td>
</tr>
</table></center>
</form>
</body>

<center><h3>Search Result</h3></center>


<table class="table table-striped table-bordered">
 <tr>
         <td colspan="4"><div class="text-center"><a href="Page2.php" type="button" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-arrow-left"></span> Back </a></div></td>
   </tr>
    <tr>
	
		 <th>ID</th>
        <th>Text</th>
        <th>Status</th>
        <th>Graphs</th>
    </tr>
	
    
    <?php

if (mysqli_num_rows($Result) > 0) {
	while ($Row = mysqli_fetch_assoc($Result)) {
		echo "<tr>";
		echo "<td>" . $Row['ID'] . "</td><td>" . $Row['Text'] . "</td><td>" . $Row['Label'] . "</td>" ;
		echo '<td><a href="dashboard.php?ID=' . $Row['ID'] . ' "type="button" class="btn btn-primary btn-sm"><i class="	glyphicon glyphicon-folder-open"></i> </a></td>';
		
		echo "</tr>";
	}
}
else {
	echo "<div class='alert alert-warning'>You must type a word to search!. </div>";
}

mysqli_close($Connection);
?>
    
    
</table>

<?php
include ('includes/footer.php');

?>
