<?php
include "connection.php";
?>

<?php

if(isset($_POST['add']))
 {
	
		$rno=$_POST['rno'];
		$name=$_POST['name'];
		$class=$_POST['class'];
		$program=$_POST['pro'];
		$telecom=$_POST['tc'];
		$comp=$_POST['cc'];
		$ca=$_POST['ca'];
		$cg=$_POST['cg'];
		$cn=$_POST['cn'];
		$web=$_POST['web'];


		$sql="INSERT INTO `students`(`rno`, `Name`, `class`, `program`, `telecom`, `com_arch`, `compile_cons`, `computer_netw`, `computer_grap`, `web_eng`) VALUES ($rno, '$name', '$class', '$program', $telecom, $ca, $comp, $cg, $cn, $web )";


			$res=mysqli_query($conn, $sql);

			if(!$res)
			{
				die(mysqli_error($conn));
			}else
			{
				header("Location: abc.php");
			}

}

?>