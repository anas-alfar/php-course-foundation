<?php
$a = 1234; // decimal number
$a = -123; // a negative number
$a = 0123; // octal number (equivalent to 83 decimal)
$a = 0x1A; // hexadecimal number (equivalent to 26 decimal)

//echo PHP_INT_SIZE;
//echo PHP_INT_MAX;

//CONVERT BASES
//decbin, decoct, dechex, hexdec, octdec, bindec
//var_dump(01090); // 010 octal = 8 decimal
// var_dump(0b010); //since 5.4

//OVERFLOW
//32-bit systems
//$large_number = 2147483647;
//var_dump($large_number);                     // int(2147483647)

//$large_number = 2147483648;
//var_dump($large_number);                     // float(2147483648)

//64-bit systems
//$large_number = 9223372036854775807;
//var_dump($large_number);                     // int(9223372036854775807)

//$large_number = 9223372036854775808;
//var_dump($large_number);                     // float(9.2233720368548E+18)

//echo intval(9223372036854775807); //things go ugly here

