<?php

$code = $_POST['code'];
$lauda = $_POST['argl'];


// if (isset($_POST['submit'])) {
$arg = 2;
// echo $arg;



$random = substr(md5(mt_rand()), 0, 7);
$filePath = "temp/" . $random . "." . "py";
$programFile = fopen($filePath, "w");
fwrite($programFile, $code);
fclose($programFile);

// $output = shell_exec("C:\Users\adars\Downloads\python_compiler\python.exe $filePath 2>&1");
// echo $output;

// running python 
$ret_val = shell_exec("python $filePath $lauda 2>&1");
echo $ret_val;

// print_r($argv);


// $ret_val = passthru("python $filePath $arg  2>&1", $output);
// // $ret_val = 'python $filePath ' . $arg;
// // $output = exec($ret_val);
// $output = exec($ret_val);
// echo $output;
// // echo $ret_val;
// // } else {
// //     echo "error";
// // }
