<?php
require("config.inc.php");
session_start(); 
$name = isset($_GET['name'])?$_GET['name']:$_SESSION['ename'];
	
if (!empty($name)) {


	$query = "SELECT * FROM report where name='".$name."'";
	
   
	try {
        $stmt   = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch (PDOException $ex) {
        // For testing, you could use a die and message. 
        //die("Failed to run query: " . $ex->getMessage());
        
        //or just use this use this one:
		echo "error";
        
    }
	
	if($row=$stmt->fetch())
  {
		
		//header("Content-type: image/jpeg");
		echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['rimg']).'"/>';
		//$rimg=$row['rimg'];
		$rname=$row['rname'];
		$name=$row['name'];
		$cno=$row['cno'];
		$ano=$row['ano'];
		$vcard=$row['vcard'];
		$mcard=$row['mcard'];
		//echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['vcard']->load()).'"/>';
		//echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['mcard']->load()).'"/>';
		$homedelivery=$row['homedelivery'];
		$affiliations=$row['affiliations'];
		$note=$row['note'];
		$outcomes=$row['outcomes'];
		$date=$row['date'];
		
		//header("Content-length: $size");
		//header("Content-type: $type");
		//header("Content-Disposition: attachment; filename=$name");
		
		
	}
	


}
else {
	echo 'Error!';
}
?>