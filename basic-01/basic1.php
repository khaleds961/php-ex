Hello world, Help me I am using PHP
<?php
print "<h1>Hello world, Help me I am using PHP
</h1>";
echo "I am getting errors but I can't see the errors";
$name = "khaled";
$email="info@gabykaram.com";
print "<br>My Name is $name and my Email is $email";
$height=174;
$width=20;
$area= $height*$width;
echo "<br> The Area is : $area";
$position="trainee";
$url="https://github.com/khaleds961/php";

/////////step4
echo "<br>Step4:<br>";
echo "1-Hello my name is ".$name." I'm a ".$position." my Github account is ".$url;
echo "<br>2-$name $position $url<br>";
echo '3- name '.$name.' email '.' url '.$url;

//////step5
echo "<br>Step5<br>";
$course_name="Rust, the language of no bugs";
$enrolled_students=20;
$price=20.5;
$on_discount=true;
echo "<br>
Course title: $course_name <br>
<br>Enrolled Students: $enrolled_students <br>
<br>Course price: $price $ USD <br>
<br>Course on discount: $on_discount<br><br>";

//////////step6
function calculateArea($height, $width){
    $area=$height*$width;
echo "Step6:<br>the area is :$area";
}
calculateArea(5,3);

///////step7
$birth_year=1995;
$current_year=2021;
echo "<br><br>Step7:";
if($current_year-$birth_year>18){
    echo "you can drive";
}else{
    echo "You still a kid, go and play GTA";
}
echo "<br><br>";

echo "Step8-a:<br>";
$item[0]="Eggs";
$item[1]="Milk";
$item[5]="Cheese";
$item[2]="Water Pack";
$item[3]="Tissues";
$item[4]="Watermelon";  
echo "Hello Sir, do you have $item[0], $item[1], $item[5]? Also if you sell fruits can I find a $item[4]? ";


echo "<br><br>Step8-b:<br>";
$class = array
(
    "eggs" => array
("mazare3", 
"balade"
),
"milk" => array
('Fresh', 'Taanayel'
),
"water-pack"=>array
( 'Tanoureen', 'Reem')
);
// Print the second name of the student from class V.
echo "Hey Sir, Please I need 1 pack of ".$class["eggs"][1]." eggs and 3 ".$class["water-pack"][1]." Water Pack."


?>
