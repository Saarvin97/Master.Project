<?php


include ('includes/connection.php');



mysqli_close($Connection);
include ('includes/header.php');


?>
<h1>
<div >
  <img class="mySlides" src="image/UTM.png" style="width:40%"height="100">  <center>Dashboard</center>

  
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
<html>
  <head>
 
    </script>
  </head>
  <body>
    <!--Table and divs that hold the pie charts-->
	
    <table class="columns">
      <tr>
        <td><div id="Sarah_chart_div" style="border: 1px solid #ccc"><img class="mySlides" src="image/LR.png" style="width:100%"height="200"></div>
		<br><div class="text-center"><a href="LR/LR.php" type="button" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-th-list"></span> Logistic Regression </a></div></br>
		</td>
		<td>&nbsp;</td>
        <td><div id="Anthony_chart_div" style="border: 1px solid #ccc"><img class="mySlides" src="image/SVM.png" style="width:100%"height="200"></div>
		<br><div class="text-center"><a href="SVC/SVC.php" type="button" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-th-list"></span> Support Vector Machine </a></div></br>
		</td>
		<td>&nbsp;</td>
		<td><div id="chart_div" style="border: 1px solid #ccc"><img class="mySlides" src="image/NB.png" style="width:100%"height="200"></div>
		<br><div class="text-center"><a href="NB/NB.php" type="button" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-th-list"></span> Naive Bayes Theorem </a></div></br>
		</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

      </tr>
	  <tr>
        <td><div id="Sarah_chart_div" style="border: 1px solid #ccc"><img class="mySlides" src="image/RF.png" style="width:100%"height="200"></div>
		<br><div class="text-center"><a href="RF/RF.php" type="button" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-th-list"></span> Random Forest </a></div></br>
		</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td><div id="Anthony_chart_div" style="border: 1px solid #ccc"><img class="mySlides" src="image/GB.png" style="width:100%"height="200"></div>
		<br><div class="text-center"><a href="GB/GB.php" type="button" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-th-list"></span> Gradient Boosting </a></div></br>
		</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td><div id="chart_div" style="border: 1px solid #ccc"><img class="mySlides" src="image/EN.png" style="width:100%"height="200"></div>
		<br><div class="text-center"><a href="EN/EN.php" type="button" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-th-list"></span> Ensemble Method </a></div></br>
		</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		
      </tr>
	  <tr>
        <td><div id="chart5_div" style="border: 1px solid #ccc"><img class="mySlides" src="image/CNN.png" style="width:100%"height="200"></div>
		<br><div class="text-center"><a href="CNN/CNN.php" type="button" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-th-list"></span> CNN (Convolutional 1D) </a></div></br>
		</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td><div id="chart_div" style="border: 1px solid #ccc"><img class="mySlides" src="image/DT.png" style="width:100%"height="200"></div>
		<br><div class="text-center"><a href="DT/DT.php" type="button" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-th-list"></span> Decision Tree </a></div></br>
		</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td><div id="chart_div" style="border: 1px solid #ccc"><img class="mySlides" src="image/EN_WE.png" style="width:100%"height="200"></div>
		<br><div class="text-center"><a href="EN_WE/EN_WE.php" type="button" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-th-list"></span> Sequential Method </a></div></br>
		</td>
      </tr>
    </table>
  </body>
  

</html>
  <table class="table" >
   <tr>
		<td ><div class="text-center"><a href="Page2.php" type="button"style="width:250px" class="btn btn-sm btn-success"><span class="	glyphicon glyphicon-arrow-left"></span> Go Back To Main Dashboard</a></div>   </td>
   
	</tr>
	</table>
 
<?php
include ('includes/footer.php');

?>