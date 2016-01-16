<?php
    session_start();
    require_once 'php/db_connect.php';
    require_once "php/functions.php";

    if(isset($_POST['name']) && isset($_POST['title']) && isset($_POST['text']))
    {
        $name = sanitizeString($db, $_POST['name']);
        $title = sanitizeString($db, $_POST['title']);
        $text = sanitizeString($db, $_POST['text']);

        $time = $_SERVER['REQUEST_TIME'];
        $file_name = "$time.jpg";
        
        if($_FILES){
            $tmp_name = $_FILES['upload']['name'];
            $dstFolder = 'php/users';
            move_uploaded_file($_FILES['upload']['tmp_name'],"$dstFolder/$file_name");
            //echo "Uploaded image '$file_name'<br /><img src='$dstFolder/$file_name'/>";

            SavePostToDB($db, $name, $title, $text, $time, $file_name, $filter);
        }
        
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="icon" href="images/postIt.png" type="image/x-icon">
		
        <title>Photo Wall</title>
        <link rel="stylesheet" type="text/css" href="css/wall.css" >
        <!-- google fonts -->
        <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
    </head>
    
    <body>
        <div class="container">
            <nav class="navbar-fixed-top">
                <p class="welcome"><?php echo "Welcome, $username"; ?></p>
                <form action="index.php">
                    <input type="submit" class="btn btn-default navbar-btn Return Home" value="Return Home"/>
                </form>
            </nav>
            
            <div class="main container">
                <?php 
                    echo getPostcards($db);
                ?>
            </div>
            
            <nav class="navbar-fixed-bottom navbar-inverse">
                <form action="form.php">
                    <input type="submit" class="Post btn btn-default navbar-btn" value="Post Another Pic"/>
                </form>
            </nav>
        </div>
        
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>
<?php $db->close(); ?>