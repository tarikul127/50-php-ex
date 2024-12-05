<div class="container">
ex --------------- 1----
</div>
<?php 
$sub = null;
$add = null;
$multipication = null;
$divition = null;
$mod = null;
    if(isset($_POST['submit']))
    {
        $number1 = $_POST['first_number'];
        $number2 = $_POST['second_number'];
        $number3 = $number1 + $number2;
        $number4 = $number1 - $number2;
        $number5 = $number1 * $number2;
        $number6 = $number1 / $number2;
       



        $add = "THe Add Number is  " .  $number3;
        $sub = "THe sub Number is  " . $number4;
        $multipication = "THe multipication Number is  " . $number5;
        $divition = "THe divition Number is  " . $number6;
        
      

    }


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"  href="css/styel.css">
  </head>
  <body>





    <div class="container">
      <div class="row">
        <div class="col-lg-10">
          <!-- from -->
          <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
              <div class="mb-3">
                <label for="first_number" class="form-label">1st number</label>
                <input type="number" class="form-control first_number" id="first_number" name="first_number" placeholder="Enter Your 1st Number" required>
              </div>


              <div class="mb-3">
                <label for="second_number" class="form-label">2nd number</label>
                <input type="number" class="form-control second_number" id="second_number" name="second_number" placeholder="Enter Your 2nd Number" required>
              </div>


              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
          <!-- from -->


        </div>
      </div>
      <div class="container box">
        <h2 class="text-success">


        <?php 

          echo $add;
         
        ?>


      </h2>

        
        <h2 class="text-success">
        <?php 
 
          echo $sub;
          
        ?>
        </h2>
        <h2 class="text-success">
        <?php 

          
          echo $multipication;
          
        ?>
        </h2>
        <h2 class="text-success">
        <?php 

          
          echo $divition;
          
        ?>

      
        </h2>
        
      </div>
       EX ------------2 -------------
          <br> <br> 
          <?php
          echo "Hello, World!";
          ?>
          <br> <br>
          EX ---3 Variable Declaration--------------
          <br> <br>

        <?php
        $name = "John";
        $age = 25;
        echo "Name: $name, Age: $age";
        ?>
        <br> <br>
        EX ------------4 Simple Arithmetic------------------
        <br> <br>
        <?php
        $x = 10;
        $y = 5;
        echo $x + $y; 
        ?>
        <br><br>
        EX ---------------5 if else -------------
        <br><br>
       <?php
        $age = 20;
        if ($age >= 18) {
            echo "You are an adult.";
        } else {
            echo "You are a minor.";
        }
        ?>
        <br><br>
        Ex ------- 6 odd or even -----------------
        <br><br>
        <?php
        echo "20 number is odd or even ?";

        $num = 20;
        if($num %2 == 0)
        {echo "Answer:  the number is even.";
        } 
        else{
          echo "Answer:  the number is odd.";
        }
         ?>
         <br><br>
        Ex ------- 7 while loop -----------------
        <br><br>
        <?php
        $i = 0;
        while ($i < 5) {
            echo $i . " ";
            $i++;
          }
          ?>
             <br><br>
             <br><br>
        Ex ------- 8 for loop -----------------
        <br><br>

        <?php
        for ($i = 0; $i < 10; $i++) {
            echo $i . " ";
        }
        ?>
          <br><br>
        Ex ------- 9 foreace loop -----------------
        <br><br>
        <?php
          $fruits = array("Apple", "Banana", "Cherry","mango");
          foreach ($fruits as $fruit) {
              echo $fruit . " ";
          }
          ?>

          <br><br>
        Ex ------- 10 function -----------------
        <br><br>
          <?php
          function greet($name) {
              echo "Hello, $name!";
          }
          greet("Alice");
          ?>
            <br><br>
        Ex ------- 11 function add -----------------
        <br><br>
        <?php
        function sum($a, $b) {
            return $a + $b;
        }
        echo "The add is ". sum(5, 10);
        ?>

          <br><br>
        Ex ------- 12 function substactor -----------------
        <br><br>
        <?php
        function sub($a, $b) {
            return $a - $b;
        }
        echo " the sub is ". sub(10, 5);
        ?>
          <br><br>
        Ex ------- 13 function multification -----------------
        <br><br>
        <?php
        function mul($a, $b) {
            return $a * $b;
        }
        echo " the multification is ". mul(5, 10);
        ?>
          <br><br>
        Ex ------- 14 function divition -----------------
        <br><br>
        <?php
        function div($a, $b) {
            return $a / $b;
        }
        echo "The div is ". div(5, 10);
        ?>
        <br><br>
        Ex ------- 15 array -----------------
        <br><br>
        <?php
        $person = array("name" => "John", "age" => 25);
        echo $person["age"];

        ?>
        <br><br>
        Ex ------- 16 array -----------------
        <br><br>
        <?php
        $numbers = array(1, 2, 3, 4,5,6,7,8,9,10);
        echo "The count of the array is ". count($numbers);
        ?>
        <br><br>
        Ex ------- 17 array -----------------
        <br><br>
        <?php
        $arr1 = array(1, 2, 3);
        $arr2 = array(4, 5, 6);
        $merged = array_merge($arr1, $arr2);
        print_r($merged);
      
        ?>
        <br><br>
        Ex ------- 18 from (get) -----------------
        <br><br>
        <form method="get" action="process.php">
          Name: <input type="text" name="name">
          <input type="submit">
        </form>
        <br><br>
        Ex ------- 19 from (post) -----------------
        <br><br>
        <form method="post" action="process.php">
        Name: <input type="text" name="name">
        <input type="submit">
        </form>
        <br><br>
        Ex ------- 20 date and time -----------------
        <br><br>
        <?php
        echo date("Y-m-d H:i:s");
        ?>
        <br><br>
        Ex ------- 21 String Length -----------------
        <br><br>
        <?php
        $text = "Hello";
        echo strlen($text);
        ?>
        <br><br>
        Ex ------- 22 repleace -----------------
        <br><br> 
        <?php
        $text = "Hello, World!";
        echo "Hello, World!"."";
        echo str_replace("World", "PHP", $text);
        ?>
        <br><br>
        Ex ------- 23 upercase -----------------
        <br><br>
        <?php
        $text = "hello word";
        echo strtoupper($text);
        ?>
        <br><br>
        Ex ------- 24 lowercase-----------------
        <br><br>
        <?php
        $text = "HELLO WORD";
        echo strtolower($text);
        ?>
        <br><br>
        Ex ------- 25 search -----------------
        <br><br>
        <?php
        $fruits = array("Apple", "Banana", "Cherry");
        echo array_search("Banana", $fruits);
        ?>
        <br><br>
        Ex ------- 26 ramdom number -----------------
        <br><br>
        <?php
        echo rand(1, 100); // Random number between 1 and 100
        ?>
        <br><br>
        Ex ------- 27 position -----------------
        <br><br>
        <?php
        $string = "My county name is bangladesh";
        $position = strpos($string, "bangladesh");
        echo "The word 'bangladesh' is at position: " . $position;
        ?>
        <br><br>
        Ex ------- 28 array sum -----------------
        <br><br>
        <?php
        $numbers = array(1, 2, 3, 4, 5);
        echo "Sum: " . array_sum($numbers);
        ?>
        <br><br>
        Ex ------- 29 odd or even -----------------
        <br><br>
        <?php
        $num = 20;

        $num1 = 25;
        $a = 2;
        if($num % $a == 0 && $num1 % $a == 0)
        {
          echo"Tow number is even";
        }
        else
        {
          echo "Two number is not even";
        }


        ?>
        <br><br>
        Ex ------- 30 odd or even -----------------
        <br><br>
        <?php
        $num = 20;

        $num1 = 25;
        $a = 2;
        echo " number1 = 20 number2 = 25 "."<br>";
        if($num % $a == 0 && $num1 % $a == 0)
        {
          echo"Tow number is even " . "<br>";
        }
        elseif ($num % $a == 0 || $num1 % $a == 0)
        {
          echo" one number is even and one number is odd "."<br>";
        }
        else
        {
          echo "Two number is not even \n";
        }


        ?>
        <br><br>
        Ex ------- 31 sum of 1 - 10 -----------------
        <br><br>
        <?php
        $sum = 0;
        for ($i = 1; $i <= 10; $i++) {
            $sum += $i;
        }
        echo "The sum of numbers from 1 to 10 is: $sum";
        ?>
        <br><br>
        Ex ------- 32 sum of 1 - 10 -----------------
        <br><br>
        <?php
        $person = [
            "name" => "John",
            "age" => 25,
            "city" => "New York"
        ];
        echo "Name: " . $person["name"] . "<br>";
        echo "Age: " . $person["age"] . "<br>";
        echo "City: " . $person["city"] . "<br>";
        ?>
        <br><br>
        Ex ------- 33 average -----------------
        <br><br>
        <?php
        $numbers = [10, 20, 30, 40, 50];
        $sum = array_sum($numbers);
        $average = $sum / count($numbers);
        echo "The average is: $average";
        ?>
        <br><br>
        Ex ------- 34 cheek arrary  -----------------
        <br><br>
        <?php
        $fruits = ["Apple", "Banana", "Cherry"];
        if (in_array("Banana", $fruits)) {
            echo "Banana is in the array!";
        } else {
            echo "Banana is not in the array.";
        }
        ?>
        <br><br>
        Ex ------- 35 cheek arrary  -----------------
        <br><br>
        <?php
        $men = ["John","tamim","farok"];
        print_r($men)."<br>";
        echo "tasin are hear ? "."<br>";
        if (in_array("tasin", $men)) {
            echo "tasin is in the array!";
        } else {
            echo "tasin is not in the array.";
        }
        ?>
        <br><br>
        Ex ------- 36 max and min  -----------------
        <br><br>
        <?php
        $array = [10, 20, 30, 40, 50];
        $sum = array_sum($array);  // Sum of the array elements
        echo "Sum: $sum<br>";

        $max = max($array);  // Maximum value in the array
        echo "Max: $max<br>";

        $min = min($array);  // Minimum value in the array
        echo "Min: $min<br>";
        ?>
         <br><br>
        Ex ------- 37  -----------------
        <br><br>
        <?php
        $var = "";
        if (empty($var)) {
            echo "The variable is empty.";
        } else {
            echo "The variable is not empty.";
        }
        ?>
        <br><br>
        Ex ------- 38      -----------------
        <br><br>
        <form method="post">
        Number 1: <input type="number" name="num1">
        Number 2: <input type="number" name="num2">
        <input type="submit" value="Add">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $sum = $num1 + $num2;
            echo "The sum is: $sum";
        }
        ?>
        <br><br>
        Ex ------- 39  -----------------
        <br><br>
        <form method="post">
        Number 1: <input type="number" name="num1">
        Number 2: <input type="number" name="num2">
        <input type="submit" value="Add">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $sub = $num1 - $num2;
            echo "The sub is: $sub";
        }
        ?>
        <br><br>
        Ex ------- 40  -----------------
        <br><br>
        <form method="post">
        Number 1: <input type="number" name="num1">
        Number 2: <input type="number" name="num2">
        <input type="submit" value="Add">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $multipication = $num1 * $num2;
            echo "The multipication is: $multipication";
        }
        ?>
        <br><br>
        Ex ------- 41  -----------------
        <br><br>
        <form method="post">
        Number 1: <input type="number" name="num1">
        Number 2: <input type="number" name="num2">
        <input type="submit" value="Add">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $divition = $num1 / $num2;
            echo "The divition is: $divition";
        }
        ?>
        <br><br>
        Ex ------- 41  -----------------
        <br><br>
        is thies leep year?<br>
        <form method="post">
        year : <input type="number" name="year">
        <input type="submit" value="Add">

        </form>
        <?php
        $num2 = 4
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $year = $_POST["year"];
            $num2 = $_POST["num2"];
            $divition = $num1 % $num2;
            echo "The divition is: $divition";
        }
        ?>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>