<?php
require_once "php/db_connect.php";
require_once "php/functions.php";

  
?>

  
<!DOCTYPE html>
<html>
<head>

	<title>Image Post and Filter</title>
    <link rel="stylesheet" href="project1.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/freelancer.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>


</head>
<body id="page-top" class="index"  onload="initialize();">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
               
                <a class="navbar-brand" href="http://lamp.cse.fau.edu/~aawada/HW9/form.php">Upload Your Photos</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
           
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<div class="row">
			<div id="formParent" class="col-md-5 col-md-offset-1">
				<form id="form" class="form-horizontal" method="POST" action="wall.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name" class="control-label col-xs-1">Name</label>
                        <div class="col-xs-11">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-user fa-fw"></span></span>
                                <input type="text" class="form-control" id="name" name="name" 
                            maxlength="20" size="20" value="" required placeholder="Johnny" autofocus>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="title" class="control-label col-xs-1">Title</label>
                        <div class="col-xs-11">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-header fa-fw"></span></span>
                                <input type="text" class="form-control" id="title" name="title" 
                            maxlength="20" size="20" value="" required placeholder="Summer Vacation" autofocus>
                            </div>
                        </div>
                    </div>
                      
                    <div class="form-group">
                        <label for="text" class="control-label col-xs-1">Text</label>
                        <div class="col-xs-11">
                            <textarea class="form-control" id="text" name="text" maxlength="30" placeholder="30 characters" required></textarea>
                        </div>
                    </div>
                    
                       </div>
            
			
    	<div class="col-md-2 col-md-offset-2 ">
		<div id="Image_Place">
                        <label class="sr-only" for="image">Original Image</label>
                        <img id="image" name="image" src="/" width="500" height="340">
                        <input type="file" id="upload" name="upload" accept="image/*">
                     </div>
					 
					    
                    <div id="Bottom_Buttons"> 
                    <input type="submit" value="Upload My Photo!" class="btn btn-primary col-md-offset-1">
                  </div> 
                  
				</form>
                 
               
			</div>
           
                    
	</div>
        
		    <section id="header">
        <div class="container">
		<div class="col-md-5 col-md-offset-1 ">

                <h3>Edit Your Photo</h3>
               
                        <div class="checkbox-inline">
                          
                            <input button type="button" class="btn btn-primary" name="filter" id="MyNostalgia" value="Nostalgia"
                                   onclick="applyMyNostalgiaFilter();">
                        </div>
               
                        <div class="checkbox-inline">
                            
                            <input  type="button" class="btn btn-primary" name="filter" id="grayscale" value="Grayscale"
                                   onclick="applyGrayscaleFilter();">
                        </div>
               
                        
                         <div class="checkbox-inline">
                            
                            <input button type="button" class="btn btn-primary" name="filter" id="love" value="Love" onclick="applyLove();">
                        </div>
               
                     <div class="checkbox-inline">
                            
                            <input button type="button" class="btn btn-primary" name="filter" id="Blur" value="Blur"onclick="applyBlurry();">
                        </div>
               <br><br>
                                 
                        <div class="checkbox-inline">
                            
                            <input button type="button" class="btn btn-default" name="filter" id="lomo" value="Original"onclick="revertToOriginal();">
                        </div>
						</div>

						
               
               <br><br>
               
             
               
               <div class="btn-group">
                <button type="button" class="btn btn-primary" data-toggle="dropdown">
                Brightness <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                <li><a onclick="setBrightness();">25%</a></li>
                <li><a onclick="setBrightness2();">50%</a></li>
                <li><a onclick="setBrightness3();">70%</a></li>
   
                </ul>
                </div>
               
                
               <div class="btn-group">
               <button type="button" class="btn btn-primary" data-toggle="dropdown">
               Contrast <span class="caret"></span>
            </button>
                <ul class="dropdown-menu" role="menu">
                <li><a onclick="setContrast();">25%</a></li>
                <li><a onclick="setContrast2();">50%</a></li>
                <li><a onclick="setContrast3();">70%</a></li>
                </ul>
                </div>
				
				   
				<nav class="navbar-fixed-top">
					<form action="index.php">
						<input type="submit" class="btn btn-default navbar-btn Return Home" value="Return Home"/>
					</form>
				</nav>

	<!-- JavaScript placed at bottom for faster page loadtimes. -->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="js/bootstrap.min.js"></script>
  
	<script src="functions.js"></script>
	    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/freelancer.js"></script>
    <script src="functionsv2.js"></script>
    	<!-- JavaScript placed at bottom for faster page loadtimes. -->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="js/bootstrap.min.js"></script>
  
	<script src="functionsv2.js"></script>

</body>
</html>
<?php $db->close(); ?>