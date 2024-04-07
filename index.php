<?php

echo("<h1>Hello,# not works Herd!!!</h1>"); #it works haha

$testvr1 = 'It\'s just a ';
$testvr2 = 'variable test';
echo $testvr1 , $testvr2, "<br>";
// I'm using <br> all across this file bc \n doesn't work as expected

$num1 = 10;
$num2 = $num1;

# concatenation
echo "<h2>Concatenation</h2>";
echo $num1." ".$num2, "<br>";

$num1 = 16;

echo $num1." ".$num2."<br>";

$testvr1 .= $testvr2;

echo $testvr1."<br>";

# working with variables and strings
echo "<h2>Working with variables and strings</h2>";
/* So, previously I worked with assigning to variables diff values
and I'll continue */
$var3 = &$num1;
echo "Ref link var3 to num1 value: ".$var3."<br>";
$var3 = 99;
echo "var3 value: ".$var3." | \$num1 value: $var3<br>";

var_dump($num1);

//$looesy_var = 12 + "Hi";
//echo $looesy_var;
// Fatal error - as expected

$num4 = $num5 = $num6 = 1122;
echo "<br>$num4 $num5 $num6<br>";

$test_str = 'Not a string for test abba a a a a a';
echo "Number of words: ".str_word_count($test_str).". String length: ".strlen($test_str)."<br>";

echo "Reversed string: ".strrev($test_str)."<br>";

# Arrays
echo "<h2>Arrays</h2>";
$apples = ['red chief', 'gala', 'zelenka'];
echo "Array size is: ".count($apples)."<br>";
echo $apples[0]."<br>";
$apples[3] = "smereka";
echo $apples[3]."<br>";
echo "Looping through an array<br>";
foreach ($apples as $apple) {
    echo "$apple <br>";
}

$my_car = ['manufacturer'=>'BMW', 'model'=>'2114', 'cilinders'=>4];
echo var_dump($my_car)."<br>";
echo $my_car['manufacturer']."<br>";
$my_car['manufacturer'] = 'Lada';
echo var_dump($my_car)."<br>";
foreach ($my_car as $property => $value) {
    echo "$property: $value.<br>";
}

# Explode / Implode
echo "<h2>Explode/Implode</h2>";
// SO, it is methods which work with strings, so I'll take $test_str
echo $test_str."<br>";
$destroyed_str = explode(' ', $test_str);
var_dump($destroyed_str);
$new_str = implode(' ', $destroyed_str);
echo "<br>".$new_str."<br>";

/* Variable variables */
echo "<h2>Variable variables</h2>";
$a = 'Bikini';
$$a = 'Bottom';

# Literally same output
echo "$a {$$a}"."<br>";
echo "Bikini $Bikini"."<br>";

# Comparison
echo "<h2>Comparison operators</h2>";
#result of each comparison and displaying res
$exp_1 = 0 == '0';
echo "0 == '0': $exp_1."."<br>";
$exp_2 = 0 === '0';
echo "0 === '0': $exp_2."."<br>";
$exp_3 = 1 != 0;
echo "1 != 0: $exp_3."."<br>";
$exp_4 = 1 <> 0;
echo "1 <> 0: $exp_4."."<br>";
$exp_5 = 1 !== '1';
echo "1 !== '1': $exp_5."."<br>";
$exp_6 = 1 > 0;
echo "1 > 0: $exp_6."."<br>";
$exp_7 = 1 < 0;
echo "1 < 0: $exp_7."."<br>";
$exp_8 = 1 >= 1;
echo "1 >= 1: $exp_8."."<br>";
$exp_9 = 1 <= 1;
echo "1 <= 1: $exp_9."."<br>";
$exp_10 = 10 <=> 100;
echo "10 <=> 100: $exp_10."."<br>";

# Type casting
// I'll skip casting to Array or Object or NULL because these castings don't make sense
echo "<h2>Type casting</h2>";
$string_var = "You are my sunshine";
$int_var = 1000;
$float_var = 100.1;
$bool_var = true;

echo "Original vars and their values: <br>";
echo "String var: ".$string_var."<br>";
echo "Int var: ".$int_var."<br>";
echo "FLoat var: ".$float_var."<br>";
echo "Boolean var: ".$bool_var."<br>";

echo "<h3>String casting</h3>";
var_dump((string)$string_var);
echo "<br>";
var_dump((string)$int_var);
echo "<br>";
var_dump((string)$float_var);
echo "<br>";
var_dump((string)$bool_var);
echo "<br>";

echo "<h3>Integer casting</h3>";
var_dump((int)$string_var);
echo "<br>";
var_dump((int)$int_var);
echo "<br>";
var_dump((int)$float_var);
echo "<br>";
var_dump((int)$bool_var);
echo "<br>";

echo "<h3>Float casting</h3>";
var_dump((float)$string_var);
echo "<br>";
var_dump((float)$int_var);
echo "<br>";
var_dump((float)$float_var);
echo "<br>";
var_dump((float)$bool_var);
echo "<br>";

echo "<h3>Boolean casting</h3>";
var_dump((bool)$string_var);
echo "<br>";
var_dump((bool)$int_var);
echo "<br>";
var_dump((bool)$float_var);
echo "<br>";
var_dump((bool)$bool_var);
echo "<br>";
