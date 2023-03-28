<?php
// $x="Hello";
// echo $x . "<br>";
// print $x;
// comment
/* multiple */
//___________________________________
//variables:
// $name="Ali";
// $$name="Mahmoud";
// echo "My name is $name $Ali <br> ";
// echo "My name is $name ${$name}";
// $name="hagar";
// echo $name;
//_____________________________________
//constant:
// define("number","1234");
// echo number;
// define("number","6788");
// echo number;
//___________________________________
// integer 10 8 354  float 10.34 double 10.77899996. boolen true false . string and array
// $x=10;
// $y=30.5;
// $z="welcome";
// var_dump($x);
// var_dump($y);
// var_dump($z);
//  $x=10;
//  $y=11;
// var_dump($x<=>8); // = 0 > 1
// $z= $x+$y;
// echo $z;
// ________________________
//operators: + - /  *  % power **
// $num=10**2;
// echo $num;
// ____________________________
// 10 > 9 greater than 9  10< 20 less than 9
// $x=10;
// $y=9;
// $z=11;
// if ($x > $y || $x > $z  )   //&& true two conditon or
// {

//     echo "true";
// }
// else
// {
//     echo "false";
// }
//________________________________
//switch:
// $x=3;
// switch ($x)
// {
//     case 1:
//         echo "hello";
//         break;
//     case 2:
//         echo "welcome";
//         break;
//     default:
//         echo "wrong choice";
// }

// example :
//$name="hagar";
//$age=11;
//$gender="female";
//if($age >= 18)
//{
//    if ($gender = "female")
//    {
//        echo " Welcome Mrs $name";
//    }
//    else
//    {
//        echo"welcome Mr $name";
//    }
//}
//else if ($age < 18 && $age > 10 )
//{
//    echo "you cannot make an account. visit us soon ";
//}
//else if ($age <= 10)
//{
//    echo"you cannot make an account. ";
//}
//



//////////////////////////////////////



//$person = ["name" => "ahmed mohamed", "id" => 1, "age" => 20, "type" => "student"];

//echo "name : ". $person[0] ."<br>";
//echo "id : ". $person[1];

//print_r($person);



//echo $person["name"];
//var_dump($person);





//$students = ["ahmed", "mohamed", "eslam"];

//$students = array(
//    array("ahmed", 1, 20),
//    array("mohamed", 2, 20),
//    array("eslam", 3, 21),
//);

//echo "<pre>";
//var_dump($students);

//echo $students[2][2];



//$students = ["ahmed", "mohamed", "eslam"];
//
//$students2 = $students;
//
//echo "<pre>";
//var_dump($students2);




///////////////////////Loops
///
// while, do while, for


//while////////////////////

//$students = ["ahmed", "mohamed", "eslam"];
//
//$i = 0;
//while($i < 3) {
//    echo $students[$i]."<br>"; //ahmed mohamed eslam
//    $i++; //3
//}
//
//echo $i;


//do while////////////////////

//$students = ["ahmed", "mohamed", "eslam"];
//
//$i = 0;
// do{
//    echo $students[$i]."<br>";
//    $i++;
//}while($i < 3);
//



//for////////////////////

//$students = ["ahmed", "mohamed", "eslam", "mahmoud"];
//
//$sum = count($students);
//for($i = 0; $i < $sum; $i++) {
//    echo $students[$i]."<br>";
//}


//foreach////////////////////
//1d


//$students = ["ahmed", "mohamed", "eslam", "mahmoud"];
//
//foreach ($students as $student){
//    echo $student."<br>";
//}


//2d
//
//$students = array(
//    array("ahmed", 1, 20),
//    array("mohamed", 2, 20),
//    array("eslam", 3, 21),
//    array("eslam", 3, 21),
//    array("eslam", 3, 21),
//    array("eslam", 3, 21),
//);
//
//foreach ($students as $student) {
//    echo "Student Data:<br>";
//    foreach ($student as $key) {
//        echo $key."<br>";
//    }
//    echo "<br>";
//
//}




//$person = ["name" => "ahmed mohamed", "id" => 1, "age" => 20, "type" => "student"];


//echo "<table border='1'>";
//    echo "<tr>";
//        echo "<td>";
//            echo "ahmed";
//        echo "</td>";
//    echo "</tr>";
//echo "</table>";


//$students = array(
//    array("ahmed", 1, 20),
//    array("mohamed", 2, 20),
//    array("eslam", 3, 21),
//    array("eslam", 3, 21),
//    array("eslam", 3, 21),
//    array("eslam", 3, 21),
//);
//
//echo "<table border='1'>";
//foreach ($students as $student) {
//    echo "<tr>";
//        foreach ($student as $val) {
//            echo "<td>";
//                echo $val;
//            echo "</td>";
//        }
//    echo "</tr>";
//}
//echo "</table>";



