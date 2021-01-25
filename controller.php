<?php 

// class call

include_once("model.php");


// cretae object


$obj = new model();


//insert coding


if(isset($_REQUEST['sub1']))
{
  // variable declre
  
  $a = $_REQUEST['t1'];
  $b = $_REQUEST['t2'];
  $c = $_REQUEST['t3'];
  $d = $_REQUEST['t4'];
   $e = $_REQUEST['t5'];
    $f = $_REQUEST['t6'];
  
  // insert method call - class
  
  $obj->insert($a,$b,$c,$d,$e,$f);
  echo "<script>alert('Your Data Save..!');</script>";
  
}

// select query

$view = $obj->select();

?>
l