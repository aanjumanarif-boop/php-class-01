
<?php
 echo '<a href="contact.php">Contact Us</a>';

echo'<h1>Hello world</h1>
 <p>this is p tag</p>
 <input type="text" name="" value="" placeholder="Enter Your Name">
 <h2>this is a heading tag</h2>

'; 
echo '<br>';
 $number1 =50;
 $name = 'Asha';
 $number2 = 50;
 $result = $number1+$number2;
 echo 'the result is ='.$result;

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-01</title>
</head>
<body>
 <h1>this is our first class on php</h1>  


 <?php
 echo 'Hello world form html body';
 echo '<h1>this is heading tag form html body</h1>';


   $marks = [74, 67, 98, 90];
//    echo $marks[0].'<br>';
//    echo $marks[1].'<br>';
//    echo $marks[2].'<br>';
//    echo $marks[3].'<br>';
   
 for($i=0; $i<=3; $i++){ // 0, 1, 2, 3

      echo $marks[$i]."<br>";
 }

 ?>

</body>
</html>