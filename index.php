<?php

$bool_var = FALSE; 
$string_var  = "variable"; 
$int_var = 1234; 
$float_var = 12.34; 


echo 'VARIABLES<br>';
echo "<br>";
echo "This is $string_var<br>";
print $int_var . "<br>";
echo $float_var . "<br>";


echo gettype($bool_var);
echo "<br>";
echo "<br>";


echo 'IF STATEMENT<br>';
echo "<br>";
if (is_int($int_var)) {
    $int_var -= 100;
}
echo "Result: $int_var<br>";
echo "<br>";


echo 'ARRAYS<br>';
echo "<br>";

echo "One-dimensional array<br>";
$mini_array = array(1, 2, 3, 4); 
echo "Info: ";
var_dump($mini_array);
echo "<br>Elements: ";
foreach ($mini_array as $el) {
    echo $el . ' ';
}
echo "<br>";
echo "<br>";

echo "Multi-dimensional associated array<br>";
$big_array = array( 
    "first" => "1-el",
    2    => "2-el",
    "inner-array" => array(
        "inner-inner-array" => array(
            "inner-inner-inner-array" => 3
        )
    )
);
echo "Info: ";
var_dump($big_array); 
echo "<br>Elements: ";
echo $big_array["first"] . " ";
echo $big_array[2]  . " ";
echo $big_array["inner-array"]["inner-inner-array"]["inner-inner-inner-array"] . "<br>";
echo "<br>";


echo 'STRINGS<br>';
echo "<br>";

$str1 = "Very long string";
$arr1 = explode(" ", $str1); 
echo "String $str1 to Array<br>";
echo "Array: ";
var_dump($arr1);
echo " : $arr1<br>";
echo "<br>";

$arr2 = ["Very", "long", "string"];
$str2 = implode(" .. ", $arr2); 
echo "Array to String<br>";
print "$str2<br>";
echo "<br>";


echo 'FUNCTIONS<br>';
echo "<br>";
function foo($var) 
{
    if ($var < 3) {
        echo "Not yet! - $var<br>";
        foo($var + 1);
    }
}

$var = 1;
foo($var);
echo "<br>";


echo 'CLASSES<br>';
echo "<br>";

include_once "parent-class.php";
include_once "child-class.php";
include_once "singleton.php";

$var1 = new ParentClass("first-var", "second-var");
$var2 = new ChildClass("first-var", "second-var", "third-var");

echo $var1;
echo "<br>";
echo $var2;
echo "<br>";

$var3 = $var2->getVar3();

echo $var3;
echo "<br>";
echo "<br>";


echo 'SINGLETON<br>';
echo "<br>";
$single_obj1 = Singleton::getInstance();
$single_obj2 = Singleton::getInstance();

if ($single_obj1 === $single_obj2)
    echo "It works!";
else
    echo "Smth wrong!";

echo "<br>";
echo "<br>";