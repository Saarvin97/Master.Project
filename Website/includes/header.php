<?php
error_reporting(0);

if (!isset($_SESSION['LoggedInUser']))
	{
	session_start();
	}

?>

<!DOCTYPE html>

<html>

    <head>
        <meta http-equiv="refresh" content="600;url=logout.php"/>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Client Address Book</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
  background-color: Black;
  color: #9d9d9d;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
    </head>
    
    <body style="padding-top: 60px;">            
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">

        <div class="container-fluid">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="Page2.php">Fake News  <strong> Detection</strong></a>
            </div>
            <ul class="nav navbar-nav">

                    <li>

                    <div class="dropdown">
                        <button class="dropbtn">Dashboard</button>
                        <div class="dropdown-content">
                            <a href="dashboard2.php">Dashboard</a>

                    </div>
                    </div>
                    </li>
                    <li>
                    </li>

                </ul>

            <div class="collapse navbar-collapse" id="navbar-collapse">
            
            <?php

if ($_SESSION['LoggedInUser'])
	{ ?>

                <ul class="nav navbar-nav">
                
					<li>
					<div class="dropdown">
						<button class="dropbtn">Customers</button>
						<div class="dropdown-content">
							<a href="clients_sum.php">My Customers</a>
							<a href="add.php">Add Customers</a>
					</div>
					</div>
					</li>
					<li>
					<div class="dropdown">
						<button class="dropbtn">Project</button>
						<div class="dropdown-content">
							<a href="viewlog.php">View Project</a>
							<a href="log.php">Add Project</a>
 
						</div>
					</div></li>
					<li><div class="dropdown">
						<button class="dropbtn">User</button>
						<div class="dropdown-content">
							<a href="User Log.php">User Log</a>
							<a href="viewuser.php">View User</a>
							
							<a href="Register.php">Register New User</a>
								<!--<a href="index.html">Dashboard</a>-->
							
						</div>
						</div></li>
					
                </ul>

                          
                    <?php
	} ?>
          </div>

        </div>

    </nav>
        
    <div class="container">