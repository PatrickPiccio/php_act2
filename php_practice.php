<!-- Hello World!!!

<h1>Hello World!</h1>

<style>
    h1 {
        color: blue;
    }
</style>

<script>
    alert("Hello World")
</script> -->

<?php
    // echo "Hello World";
    # echo "Hello World";
    #
    /* echo "Hello World";
     echo "Hello World";
     echo "Hello World";*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>This is my first PHP page</h1> -->
    <?php
        //echo "Hello World";
        //echo "Hello World"

        //variable

        // $a = 5;
        // var_dump($a);

        // var_dump("JOHN");
        // var_dump(3.14);
        // var_dump(true);
        // var_dump([1, 2, 3]);
        // var_dump(null);

        //variable scope
        // global can be use if declared or implemented

        // $a = 5;

        // // echo $a;

        // //local variable

        // function test()
        // {
        //    static $a = 6;
        //     echo $a;
        //     echo "<br>";
        //     $a++;
        // }
        // // test(); //6
        // // test(); //6
        //  test(); //6
        //  test(); //7
        // //echo $a;

        // echo & print statement

        // echo ("Hello! <br>"), ("Hello! <br>");
        // echo "Hello! <br>", "World! <br>";
        // print ("Hello! <br>");
        // print "Hello! <br>";
        // echo print ("Hi!"); //THIS ADDS A VALUE OF A

        // DATA TYPES

        // $a = "Charles"; //string        
        // $b = 5; //int
        // $c = 0.5; //float
        // $d = true; //bool
        // $e = [1, 2 ,3]; //array
        // $f = new stdClass(); //object
        // $g = null; //null
        // $h = fopen("php_practice.php", "r"); //resources

        // var_dump($a);
        // echo "<br>";
        // var_dump($b);
        // echo "<br>";
        // var_dump($c);
        // echo "<br>";
        // var_dump($d);
        // echo "<br>";
        // var_dump($e);
        // echo "<br>";
        // var_dump($f);
        // echo "<br>";
        // var_dump($g);
        // echo "<br>";
        // var_dump($h);
        // echo "<br>";


        //strings

        // $a = "blue";
        // $name = "<h1 style =\"color:$a\">Haring Manggi Miguelito Malakas";

        //$name = "haring manggi";
        //echo strlen($name), "<br>";
        //echo str_word_count($name), "<br>";
        //echo strpos($name, "manggi"), "<br>";
        //echo strtoupper($name), "<br>";
        //echo strtolower($name), "<br>";
        //echo str_replace("manggi", "Malakas", $name), "<br>";
        //echo strrev($name), "<br>";
       // echo trim($name), "<br>";
       // echo print_r (explode(" " , $name), "<br>");


        //CONCATINATE
      //  $x = "Hello";
      //  $y = "World";
      //  echo $x . " " . $y. "<br>";
      //  echo "$x $y <br>";
       // echo '$x $y <br>';


        //SLICING
        //echo substr($x, 1, 4), "<br>";
        //echo substr($x, 1), "<br>"; 
        //echo substr($x, -5, 2), "<br>"; 


        //ESCAPE CHARACTERS
        //$a = "sample";
       // $x = "John \"Pogi\" Doe";
       // echo $x;


        //NUMBERS
        $a = -1; //int
        $b = 1.0; //float
        $c = "5"; //string

    //    echo PHP_INT_MAX, "<br>";
    //    echo PHP_INT_MIN, "<br>";
    //    echo PHP_INT_SIZE, "<br>";
    //    echo is_int($c);

    //    echo PHP_FLOAT_MAX, "<br>";
    //    echo PHP_FLOAT_MIN, "<br>";
    //    echo PHP_FLOAT_DIG, "<br>";
    //    echo PHP_FLOAT_EPSILON, "<br>";

    //    echo is_float($b), "<br>";
    //    echo is_numeric($c);



    // $a = "John";
    // $b = 5;
    // $c = 3.14;
    // $d = true;
    // $e = [1,2,3];
    // $f = new stdClass();
    // $g = null;
    // $h = fopen("php_practice.php", "r");


    //CASTING - STRING
    // $a = (String)$a;
    // $b = (String)$b;
    // $c = (String)$c;
    // $d = (String)$d;
    // $e = $e;
    // $f = $f;
    // $g = (String)$g;
    // $h = (String)$h;



    //CASTING to INTEGER
    // $a = (int) $a;
    // $b = (int)$b;
    // $c = (int)$c;
    // $d = (int)$d;
    // $e = (int)$e;
    // $f = $f;
    // $g = (int)$g;
    // $h = (int)$h;


    //CASTING to FLOAT
    // $a = (float) $a;
    // $b = (float)$b;
    // $c = (float)$c;
    // $d = (float)$d;
    // $e = (float)$e;
    // $f = $f;
    // $g = (float)$g;
    // $h = (float)$h;


     //CASTING to BOOLEAN
    // $a = (bool) $a;
    // $b = (bool)$b;
    // $c = (bool)$c;
    // $d = (bool)$d;
    // $e = (bool)$e;
    // $f = (bool)$f;
    // $g = (bool)$g;
    // $h = (bool)$h;



    //CASTING to ARRAY
    // $a = (array) $a;
    // $b = (array)$b;
    // $c = (array)$c;
    // $d = (array)$d;
    // $e = (array)$e;
    // $f = (array)$f;
    // $g = (array)$g;
    // $h = (array)$h;



    

     //var_dump($a);
     //echo "<br>";
     //var_dump($b);
     //echo "<br>";
     //var_dump($c);
     //echo "<br>";
     //var_dump($d);
     //echo "<br>";
     //var_dump($e);
     //echo "<br>";
     //var_dump($f);
     //echo "<br>";
     //var_dump($g);
     //echo "<br>";
     //var_dump($h);
     //echo "<br>";



     //php mat
     //  $pi = pi();
     //  echo $pi, "<br>";

     //  $minNumber = min(300, 80, 4, 98, 3);
     //  $maxNumber = max(300, 80, 4, 98, 3);

     //  echo $minNumber, "<br>";
     //  echo $maxNumber, "<br>";
      
     //  $num = -5;

     //  echo abs($num), "<br>";

    //  $sqrt = sqrt(9);
    //  echo $sqrt, "<br>";

     //  $rounded = round(3.74);
     //  echo $rounded;

     //  echo PHP_INT_MAX, "<br>";
     //  echo PHP_INT_MIN, "<br>";
      //  echo rand(), "<br>";

     //  echo rand(5, 30), "<br>";



     // //PHP CONSTANT
     // define("GREETING", 39);
     // $x = 5;
 
     // function test(){

     //     echo GREETING; 
     // }

     // test();


     //PHP OPERATORS 
     // ARITHMETIC 
 
     //ADDITION + Sum
     //  echo 6 + 9 + 54, "<br>";

     //  // SUBTRACTION 
     //  echo 7 - 2 - 3, "<br>";

     //  echo 7 - 2 + 90, "<br>"; //PHP NOT USING PEMDAS

     //  // MULTIPLICATION    
      //  echo 7 * 2 * 10, "<br>";


     //  // DIVISION / QUOTIENT
     //  echo 7 / 2 / 10, "<br>";

     //  echo 7 * 2 / 10, "<br>"; 

     //  // md as 
     //  echo 13 + 6 / 2 * 2, "<br>";

     //  // MODULUS 
     //  echo 5 % 2, "<br>";

     //  // EXPONENT 
     //  echo 2**3;

     // ASSIGNMENT 
    //  $x = 5;

    //  // +=
    //  $x = $x + 10;

    //  echo $x;



    //COMPARISON

    // ==
    // var_dump(6 == "6");

    // // === IDENTICAL 
    // var_dump(6 === "6");

    // // !=
    // var_dump(100 != "99");

    // // !==
    // var_dump(100 !== "99");

    // // >
    // var_dump(6 >= 6);

    // // <
    // var_dump(6 >= 4);

    // // <=>
    // echo 6 <=>8 ;


    // ++  INCREMENT
    // $x = 5;
    // // PRE - INCREMENT
    // echo ++$x, "<br>";


    // $y = 5;
    // // POST INCREMENT
    // echo $y--, "<br>";

    // // -- DECREMENT


    // LOGICAL &&
        // var_dump(true and true); //true
        // echo "<br>";
        // var_dump(true and false); //false
        // echo "<br>";

        // // OR ||
        // var_dump(false or false); //false 
        // echo "<br>";
        // var_dump(6 == "6" || 6 > 9); //true
        // echo "<br>";


        // // XOR ||
        // var_dump(false xor true); //true (bawal both true it result to false)
        // echo "<br>";
        // var_dump(6 == "6" xor 6 > 9); //true
        // echo "<br>";

        // // NOT !
        // var_dump(!false); //true
        // echo "<br>";
        // var_dump(!6 == "6"); //false
        // echo "<br>";


        // STRING OPERATOR 
        //echo "Hello " . "World!";
        //$x = "Hello";
        //$x = $x . "World";
        //$x .= "World"; 

       // echo $x;

        
       //ternary
       //$color = 5 < 10 ? "More" : "Less";
       //echo $color
       

       //nul coalescing
       //$age = 10 ?? 20;
       //echo $age;

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
