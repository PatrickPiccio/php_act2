//         $students = array(
//             array("name"=>"Mary","age"=>17,"gender"=>"Female"),
//             array("name"=>"Joy","age"=>21,"gender"=>"Female"),
//             array("name"=>"Ben","age"=>30,"gender"=>"Male"),
//         );

//         foreach($students as $student){
//             foreach($student as $value){
//                 echo $value;
//             }
//         }

   
//     ?>
<!-- //             <h1>Students</h1>
// <ul>
//    <?php foreach($students as $student){ ?>
//         <li>My name <?php echo $student['name']; ?> is age <?php echo $student['age'] ?> is and i am <?php echo $student['gender'] ?></li>
//     <?php }
// ?>
// </ul> -->

 
<?php
            $username = "";

            $error_messages = [];

            if(isset($_REQUEST['btnSubmit'])){
                $username = $_REQUEST['username'];
               
                if($_REQUEST['username'] == ""){
                    array_push($error_messages, "Username is required!");
                }

                if($_REQUEST['password'] == ""){
                    array_push($error_messages, "Password is required!");
                }
            }
        ?>

        <!-- get send data thru url -->
        <!-- post send data thru http request -->
        <?php
            if(!empty($error_messages)){
                foreach($error_messages as $error){
                    echo $error ."<br>";
                }
            }    
        ?>
        <form action="php_practice.php" method="get">
            <label for="">Username:</label>
            <input type="text" name="username" value="<?php echo $username; ?>">
            <br>    
            <label for="">Password:</label>
            <input type="password" name="password">
            <br>
            <input type="submit" value="Login" name="btnSubmit">
        </form>
        <?php
            if(isset($_REQUEST['username']) and isset($_REQUEST['password'])){
                echo "Username: " . $_REQUEST['username'], "<br>";
                echo "Password: " . $_REQUEST['password'];
            }
        ?>
       
</body>
</html>
