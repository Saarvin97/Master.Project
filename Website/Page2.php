<?php

include ('includes/connection.php');

if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 10;
        $offset = ($pageno-1) * $no_of_records_per_page;
		
 $total_pages_sql = "SELECT * FROM labeldata";
 $res = mysqli_query($Connection,$total_pages_sql);
 $total_rows = $res->num_rows;
 $total_pages = ceil($total_rows/$no_of_records_per_page);
 
$Query = "SELECT * FROM labeldata LIMIT $offset,$no_of_records_per_page";
$Result = mysqli_query($Connection, $Query);


mysqli_close($Connection);
include ('includes/header.php');

?>

<h1>
<div class="w3-content w3-section" style="max-width:500px "height="600">
  <img class="mySlides" src="image/UTM.png" style="width:40%"height="90">  Fake News Data

  
  </div>
</h1>

<?php
echo $AlertMsg; ?>
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
	
	</td>
  <td><select name="name" class ="search1" onchange="this.nextElementSibling.value=this.value" >     
  <option value=""> Select </option>      <option value ="True">True</Option>      <option value ="False">False</Option> </select>     </td>	
	<td> &nbsp;<input  class ="search1" type="text" name="name3" placeholder="Search Any Here" size="50"> &nbsp;</td>
	
	
	

	<td><input type="submit" name="submit" value="Search"></td>
</tr>
</table></center>
</form>
</body>
<center><h3>Overview</h3></center>

<div >
<table class="table table-striped table-bordered">
<ul class="pagination">
        <li><a href="?pageno=1">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
		
		
		
    </ul> 
<tr>
		

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
	echo "<div class='alert alert-warning'>You have no Clients yet. </div>";
}

mysqli_close($Connection);
?>
   
  
</table>
</div>

<?php
include ('includes/footer.php');

?>