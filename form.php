<?php
// mvc - m - model - v - view - c - controller
include_once("controller.php");
?>
<h1 style="background-color:#990000; color:#CCCCCC">Enter Your Details</h1>
<form method="post">
<table>
<tr>
<td>Name :</td>
<td><input type="text" name="t1" placeholder="Enter Name"  /></td>
</tr>

<tr>
<td>Address:</td>
<td><textarea name="t2" ></textarea></td>
</tr>

<tr>
<td>City :</td>
<td><select name="t3"><option value="">--Select--</option><option value="Gandhinagar">Gandhinagar</option><option value="Modasa">Modasa</option></select></td>
</tr>

<tr>
<td>State :</td>
<td><select name="t4"><option value="">--Select--</option><option value="Gujarat">Gujarat</option><option value="Delhi">Delhi</option></select></td>
</tr>

<tr>
<td>Image :</td>
<td><input type="file" name="t5"  /></td>
</tr>

<tr>
<td>Gender :</td>
<td><input type="radio" name="t6" value="Male"  />Male<input type="radio" name="t4" value="Female"  />Female</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" name="sub1" value="Submit"  /></td>
</tr>
</table>
</form>
<h1 style="background-color:#990000; color:#CCCCCC">View Your Details</h1>
<table width="100%" border="1" table bgcolor="yellow">

<tr align="center">
<td>ID</td><td>Name</td><td>Address</td><td>City</td><td>State</td><td>Image</td><td>Gender</td><td>Status</td><td>Create Date</td></tr>
</tr>
<?php 
foreach($view as $v)
{
?>
<tr align="center">
<td><?php echo $v['id'];?></td><td><?php echo $v['name'];?></td><td><?php echo $v['address'];?></td><td><?php echo $v['city'];?></td><td><?php echo $v['state'];?></td><td><?php echo $v['image'];?></td><td><?php echo $v['gender'];?></td><td><?php echo $v['status'];?></td><td><?php echo $v['c_date'];?></td></tr>
</tr>
<?php } ?>
</table>
