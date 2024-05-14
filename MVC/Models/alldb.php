<?php
require_once('db.php');
function auth($id,$pass)
{
	$sql="select * from  login_info  where ID='$id' and PASSWORD='$pass'";
	$con=conn();
	$res= mysqli_query($con,$sql);
	$row=mysqli_num_rows($res);
	
	if($row==1)
	{
		while($resx = mysqli_fetch_assoc($res)){
			$_SESSION['name']=$resx['NAME'];
			$_SESSION['type']=$resx['TYPE'];
			return $resx;
		}
		
	}
	else
	{
		return false;
	}
}



?>