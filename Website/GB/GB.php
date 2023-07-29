<?php
session_start();


include ('../includes/connection.php');



mysqli_close($Connection);
include ('../includes/header.php');


?>
<h1>
<div class="w3-content w3-section" style="max-width:500px "height="600">
  <img class="mySlides" src="../image/UTM.png" style="width:40%"height="80">  Visualization

  
  </div>
</h1>
<?php
echo $AlertMsg; ?>
<style> 
div. {
    width: auto;
    margin: 0 auto !important;
}
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
div.chart_div table {
    width: auto;
    margin: 0 auto !important;
}

</style>
<table class="table table-striped table-bordered">
 

   <tr>   
        <th class="text-center">Visualization Name </th>
        <th class="text-center">Graph Type </th>
        <th class="text-center">View</th>	
    </tr>
     <tr>   
        <th class="text-center">Receiver Operating Chracteristic</th>
        <th class="text-center">Line Chart </th>
        <th class="text-center"><div ><a href="ROC_GB.php" type="button" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-eye-open"></span> View</a></div></th>	
    </tr>  
	  <tr>   
        <th class="text-center">Classification Report </th>
        <th class="text-center">Table </th>
        <th class="text-center"><div ><a href="CR_GB.php" type="button" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-eye-open"></span> View</a></div></th>	
    </tr> 


  
</table>
  <table class="table" >
   <tr>
		<td ><div class="text-center"><a href="../dashboard.php" type="button"style="width:103px" class="btn btn-sm btn-success"><span class="	glyphicon glyphicon-arrow-left"></span> Go Back </a></div>   </td>
   
	</tr>
	</table>
<?php
include ('../includes/footer.php');

?>