<?php 

class model
{
   
   
   // connection
   
   public function confing()
   {
      $con = new mysqli("localhost","root","","demo_db");
	  
	  return $con;
   }
   
   // insert method
   
   public function insert($a,$b,$c,$d,$e,$f)
   {
     // connection method call
	 
	 $con=$this->confing();
	 
	 // insert query
	 
	 $i = "insert into p_tb(name,address,city,state,image,gender)values('$a','$b','$c','$d','$e','$f')";
	 
	 $ex = $con->query($i);
	 
   }
   
   // select query - alll
   
   public function select()
   {
      // connection method call
	 
	 $con=$this->confing();
	 
	 $s = "select * from p_tb";
	 $ex = $con->query($s);
	 return $ex;
	 
   }
   
   
   
   
}
?>