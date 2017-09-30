</php
echo "Hello</br>";
$str="Welcome to php";
echo "<center><h1>Welcome to php</h1><center>/br<>";

echo "</br>The string is: Welcome to php";

echo "<hr>";

echo "<h1></br>length of the string</h1>";

echo strlen($str);

echo "<hr>";

echo "</br><h1>Word count of the string</h1>";

echo str_word_count($str);

echo "<hr>";

echo "</br><h1>Reverse of the string</h1>";

echo strrev($str);

echo "<hr>";

echo "</br><h1>this will replace word</h1>";

echo str_replace("php","world",$str);

echo "<hr>";

echo "</br><h1>First character of each word in a string is in uppercase</h1>";

echo ucwords($str);

echo "<hr>";

echo "</br><h1>this will convert string to uppercase</h1>";

echo strtoupper($str);

echo "<hr>";

echo "</br><h1>this will convert string to lowercase</h1>";

echo strtolower($str);

echo "<hr>";

echo "</br><h1>this will repeat the string for 10 times</h1>"

echo str_repeat($str,10);

echo "<hr>";

echo "</br><h1>this will cut string</h1>";

echo substr($str,0,10);

echo "<hr>";

echo "</br><h1>some characters are removed from the string</h1>";

echo trim($str,"Wep");

echo "</br>";

echo "<hr>";

echo "<center><h1>following are array functions</h1></center>";

$arr=array("milk","tea","coffee");

echo "the array is";

print_r($srr);

echo "</br>";

echo "<h1>length of an array</h1>";

echo "</br>";

echo count($arr);

echo "<hr>";

echo "</br><h1>showing key as value and value as a key</h1>"

echo "</br>";

print_r(array_flip($arr));

echo "<hr>";

echo "</br><h1>shuffling the array</h1>";

echo "</br>";

shuffle($arr);

echo "<hr>";

echo "</br><h1>reverse of an array</h1>";

echo "</br>";

print_r(array_reverse($arr));

echo "<hr>";

echo "</br><h1>adding new elements in array</h1>";

echo "</br>";

array_push($arr,"cold drinks","water");

print_r($arr);

echo "<hr>";

echo "</br><h1>deleting last element of the array</h1>";

echo "</br>";

array_pop($arr);

print_r($arr);

echo "<hr>";

echo "</br><h1>combining arrays</h1>";

$fname=array("meet","milly","meeku");

$age=array("26","21","13");

echo "first name is: ";

echo "</br>";

print_r($fname);

echo "</br>";

echo "Second name is: ";

echo "</br>";

print_r($age);

echo "</br>final array is: ";

echo "</br>";

$c=array_combine($fname,$age);

print_r($c);

echo "<hr>";

echo "</br><h1>sum of an array</h1>";

$num=array(20,50,10);

echo "</br>";

print_r($num);

echo "</br>";

array_sum($num);

echo "</br>the sum is: ";

print_r($num);

echo "<hr>";

echo "</br><h1>difference between two arrays</h1>";

echo "</br>";

$d=array("red","black","blue","yeallow");

$e=array("black","blue","brown");

echo "</br>first array is: ";

print_r($d);

echo "</br>";

echo "second array is: ";

echo "</br>";

print_r($e);

echo "</br>the difference: ";

echo "</br>";

$result=array_diff($d,$e);

print_r($result);

echo "<hr>";

echo "</br><h1>searching from an array</h1>";

echo "</br>";

echo "</br>the array is: ";

echo "</br>";

$k=array(20,50,10);

print_r($k);

$1=array_search(50,$k);

print_r($k);

$1=array_search(50,$k);

print_r($k);

echo "<br>key of search no: ".$1;


?>


