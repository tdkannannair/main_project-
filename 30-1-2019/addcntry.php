<?php
        
        include("connect.php");
                $cname=$_POST['cn'];
        echo($cname);
	$qry="INSERT INTO `country`( `cname`) VALUES ('$cname')";
    
    $query_exe=mysqli_query($con,$qry);
    
    if ($query_exe)
    {
		echo 1;
	}
    else 
    {
		echo 0;
	}

?>