<?php
require("config.inc.php");
session_start(); 
$name = isset($_GET['name'])?$_GET['name']:$_SESSION['ename'];
	
if (!empty($name)) {


	$query = "SELECT * FROM report where name=?";
	$query_params= [$name];
   
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
	?>
	<body>
  <!DOCTYPE html>
<head>
  <link href='https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
  <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css' rel='stylesheet' type='text/css'>
  <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/css/bootstrap-switch.css' rel='stylesheet' type='text/css'>
  <link href='https://davidstutz.github.io/bootstrap-multiselect/css/bootstrap-multiselect.css' rel='stylesheet' type='text/css'>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/js/bootstrap.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/js/bootstrap-switch.min.js' type='text/javascript'></script>
  <script src='https://davidstutz.github.io/bootstrap-multiselect/js/bootstrap-multiselect.js' type='text/javascript'></script>
  
</head>
<body>
  <div class='container' >
  
    <div class='panel panel-primary dialog-panel' align="center">
	
	
      <div class='panel-heading'>
	  <h2>REPORT</h2>
	  </div>
	  <table border="2" cellpadding="15px" width="400px" class='panel panel-primary dialog-panel'>
	
	<tr>
	<div class='panel-heading'>
	<td>Resturant Image</td>
	<td>Resturant Name</td>
	<td>Name</td>
	<td>Contact Number</td>
	<td>Alternate Number</td>
	<td>Visiting Card</td>
	<td>Menu Card</td>
	<td>Home Delivery</td>
	<td>Affiliations</td>
	<td>Short Note</td>
	<td>Outcomes</td>
	<td>Date</td>
	</div>
	</tr>
	</div>
	<div class='panel-body'>
	<tr>
	

		
		<td><?php echo '<img src="uploads/'.$row['rimg'].'" width="50px"/>'; ?></td>
		<td><?php echo $row['rname']; ?></td>
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row['cno'];?></td>
		<td><?php echo $row['ano'];?></td>
		<?php $vcard=$row['vcard'];?>
		<?php $mcard=json_decode(stripslashes($row['mcard']), true);?>
		<td><?php echo '<img src="uploads/'.$vcard.'" width="50px"/>';?></td>
		<td width="100px"><?php foreach($mcard as $img){
			echo '<img src="uploads/'.$img.'" width="50px"/>';
		}	?></td>	

		<td><?php echo $row['homedelivery'];?></td>
		<td><?php echo $row['affiliations'];?></td>
		<td><?php echo $row['note'];?></td>
		<td><?php echo $row['outcomes'];?></td>
		<td><?php echo $row['date'];?></td>
		
		<?php
		
		
	}
	?>
</tr>
<?php
}
else {
	echo 'Error!';
}
?>
</div>
</table>
</div>
</div>
</div>
</body>
