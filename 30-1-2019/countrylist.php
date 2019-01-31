<?php
alert("here");
include("connect.php");

	$qry="SELECT * FROM `country`";
	$query_exe=mysqli_query($con,$qry);
	$cid=array();
	$cname=array();
	$l=0;

	if($query_exe){
		while($resultset=mysqli_fetch_assoc($query_exe)){
				$l++;
				$cid[$l]=$resultset['cid'];
				$cname[$l]=$resultset['cname'];
			}
	}
if ($l==0)
{
	echo "false";
}
else {
	$json="{ \"size\":\"".$l."\",\"admno\" : [";
	for($i=1;$i<=$l;$i++){

		if($i>=2)
			$json=$json.",";
		$json=$json."{
						\"cid\":\"".$cid[$i]."\",
						\"cname\":\"".$cname[$i]."\"

						}" ;
	}
	$json=$json.']}';
	echo $json;

}



?>
