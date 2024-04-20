<!DOCTYPE html>
<html>
<head>
            <title>Simple Calculator</title>
</head>
<body>
             <h2>Simple Calculator</h2>
             <form method="post" action="<?php echo htmlspecialchars($_SERVER ["PHP_SELF"]);?>">
                          <label for="number1"> Enter first number:</label>
                          <input type="text" id="number1" name="number1" required><br></br>
                          <label for="number2"> Enter second number:</label>
                          <input type="text" id="number2" name="number2"required><br></br>
                          <input type="submit" name="submit" value="Calculator">
            </form>
           <br>
           <?php
          if($_SERVER["REQUEST_METHOD"]=="POST"){
            $num1=$_POST["number1"];
             $num2=$_POST["number2"];
 

           //Addition
         $sum=$num1+$num2;
         echo "Addition result:    "  .  $sum;


          //Multiplication
         $Product=$num1*$num2;
         echo "Multiplication  result:   "  .  $Product;

            //Division
           $Division=$num1/$num2;
         echo "Division result:   " .  $Division;
   }
 ?>
</body>
</html>