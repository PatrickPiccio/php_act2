<?php 
    $firstname = "";
    $lastname = "";
    $gender = "";

    if(isset($_REQUEST['btnSubmit'])){
        if(!empty($_REQUEST['fname'])){
            $firstname = $_REQUEST['fname'];
        }

        if(!empty($_REQUEST['lname'])){
            $lastname = $_REQUEST['lname'];
        }

        if(!empty($_REQUEST['gender'])){
            $gender = $_REQUEST['gender'] == "male" ? "Mr." : "Ms.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(isset($_REQUEST['btnSubmit'])){ 
        echo "Welcome $gender $firstname $lastname!";
    }?>
</body>
</html>