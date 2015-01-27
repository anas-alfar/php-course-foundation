<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

/**
 * 
 * 1- Keys could be (int) or (str)
 * 2- Values could be multi-types
 * 3- Unlimited array size
 * 4- In PHP, theres no limitation in the dimention for any level
 * 
 */

$arr1 = array();
$arr2 = array(1, 2, 3, 4, 5);

$arr3 = array(100);
$arr4 = array('PHP', 'Java', 'C++', 'Perl');
$arr5 = array(-1, 0, 3.45, 877, 90, -84.2);

$arr6 = array(-100, 'PHP', 3.45, 'Zarcon', 90, -84.2, false);

$arr7 = array(10=>1, 20=>2, 30=>3, 40=>4, 50=>5);
$arr8 = array(10=>1, 20=>2, 30=>3, 40=>4, 5);
$arr9 = array(10=>1, 20=>2, 3, 40=>4, 21=>5);


$arr11 = array(100=>1, 2, 3, 200=>4, 5);
$arr12 = array(10=>1, 20=>2, 30=>3, 40=>4, 20=>5);
$arr13 = array(10=>1, 'PHP'=>2, 30=>3, 40=>4, 50=>5);
$var1 = 'PHP2';
$arr13 = array(10=>1, "$var1"=>2, 30=>3, 40=>4, 50=>5);
$arr14 = array(10=>1, 'PHP'=>2, true=>3, false=>4, 50=>5);
$arr15 = array(10=>1, 'PHP'=>2, true=>3, false=>4, false=>5);
$arr16 = array(10=>1, 'PHP'=>2, 40.2=>3, 40.5=>4, 40.9=>5, -40.8=> 6);
//print_r($arr16);
//exit;
$arr17 = array('Zend'=>1, 'PHP'=>2, 3, 4, 5,);
$arr18 = array('phP'=>1, 'PHP'=>2, '', '', '', 'php'=>3, 'PhP'=>4, 'pHp'=>5);
//print_r($arr18);
//exit;
$arr19 = array(	'PHP' 	=> 'Zend.com', 
				'Java' 	=> 'Sun.com', 
				"C#" 	=> 'microsoft.com', );

$arr20 = array(
1=>array(10=>1, 100=>11, 1000=>111), 
2=>array(20=>2, 200=>22, 2000=>222), 
3=>array(30=>3, 300=>33, 3000=>333));

$arr21 = array(
1=>array(1, 11, 111), 
2=>array(2, 22, 222), 
3=>array(3, 33, 333));

$arr21_ = array(
		array(1, 11, 111),
		array(2, 22, 222),
		array(3, 33, 333));

$arr22 =  [
1=>array(1, 11), 
2=>array(2, 22, 222, 2222, 22222), 
3=>array(3, 33, 333, 3333),
4=>4];

$array = array(
		1    => "a",
		"1"  => "b",
		1.5  => "c",
		true => "d",
);

function getArray() {
	return array(1, 2, 3);
}

// previously
$tmp = getArray();
$secondElement = $tmp[1];


// on PHP 5.4
$secondElement = getArray()[1];


//echo (PHP_EOL . $arr19 ['Java']);
//echo (PHP_EOL . $arr19 ['C#']);
//echo (PHP_EOL . $arr19["PHP"]);
//echo (PHP_EOL . $arr19[]);
//echo (PHP_EOL . $arr19[0]);
//echo (PHP_EOL . $arr21[3][2]);
//print_r($arr21[1]);
//print_r($arr21[2]);
//print_r($arr21[3]);
print_r($arr22);