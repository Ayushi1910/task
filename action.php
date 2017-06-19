<?php
	require("config.inc.php");
   session_start(); 
$rimg="";
$rname="";
$name=$_SESSION['ename'];
$cno="";
$ano="";
$vcard="";
$mcard="";
$homedelivery="";
$note="";
$outcomes="";
$affiliations="";
$date="";


if(isset($_FILES['mcard']))
{
	foreach($_FILES['mcard'] as $file){
		echo print_r($file)."<hr>";
	}
}

if(isset($_FILES['rimg']))
			{
        $rimg_target = "uploads/".$_FILES["rimg"]["name"];
		if (move_uploaded_file($_FILES["rimg"]["tmp_name"], $rimg_target)) {
					
				 echo "The file ". basename( $_FILES["rimg"]["name"]). " has been uploaded.";
				 }
		}
		
if(isset($_FILES['vcard']))
			{
        $vcard_target = "uploads/".$_FILES["vcard"]["name"];
		
		if (move_uploaded_file($_FILES["vcard"]["tmp_name"], $rimg_target)) {
					
				 echo "The file ". basename( $_FILES["vcard"]["name"]). " has been uploaded.";
				 }
		}
		
/*if(isset($_FILES['mcard']))
			{
			foreach($_FILES['mcard'] as $file){
		echo print_r($file)."<hr>";
      	$mcard_target = "uploads/".$file;
		
		
		if (move_uploaded_file($_FILES[$file]["tmp_name"], $mcard_target)) {
		 	
		 echo "The file ". basename($file). " has been uploaded.";
		 }
}
}
*/


if(isset($_REQUEST["rimg"])||($_REQUEST["rname"])||($_REQUEST["name"])||($_REQUEST["cno"])||($_REQUEST["ano"])||($_REQUEST["vcard"])||($_REQUEST["mcard"])||($_REQUEST["homedelivery"])||($_REQUEST["note"])||($_REQUEST["outcomes"])||($_REQUEST["affiliations"])||($_REQUEST["date"]))
   {
		$rimg=$_REQUEST["rimg"];
		$rname=$_REQUEST["rname"];
		$name=$_REQUEST["name"];
		$cno=$_REQUEST["cno"];
		$ano=$_REQUEST["ano"];
		$vcard=$_REQUEST["vcard"];
		$mcard=$_REQUEST["mcard"];
		$homedelivery=$_REQUEST["homedelivery"];
		$note=$_REQUEST["note"];
		$outcomes=$_REQUEST["outcomes"];
		$affiliations=$_REQUEST["affiliations"];
		$date=$_REQUEST["date"];
		$key=array($rimg,$rname,$name,$cno,$ano,$vcard,$mcard,$homedelivery,$note,$outcomes,$affiliations,$date);
		$data=array($rimg,$rname,$name,$cno,$ano,$vcard,$mcard,$homedelivery,$note,$outcomes,$affiliations,$date);
		
   }
     if(isset($_REQUEST["rimg"])||($_REQUEST["rname"])||($_REQUEST["name"])||($_REQUEST["cno"])||($_REQUEST["homedelivery"])||($_REQUEST["outcomes"])||($_REQUEST["date"]))
 {
 	$query='INSERT INTO report values("'.$rimg.'","'.$rname.'","'.$name.'","'.$cno.'","'.$ano.'","'.$vcard.'","'.$mcard.'","'.$homedelivery.'","'.$note.'","'.$outcomes.'","'.$affiliations.'","'.$date.'");';

try {
        $stmt   = $db->prepare($query);
        $result = $stmt->execute();
		//header("Location:view.php");
		
    }
    catch (PDOException $ex) {
        // For testing, you could use a die and message. 
        //die("Failed to run query: " . $ex->getMessage());
        
        //or just use this use this one:
        $response["success"] = 0;
        $response["message"] = "Database Error1. Please Try Again!";
        die(json_encode($ex));;
 
 }
 }
 else 
 //echo "Please Enter mandatory fields";
 ?>
