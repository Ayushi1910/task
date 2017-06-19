<html>
<head>
 <link rel="stylesheet" href="css/style.css">

<title>Sign Up</title>
</head>
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

<?php
require("config.inc.php");


if (!empty($_POST)) {

    if (empty($_POST['ename']) || empty($_POST['epassword'])) {
     
        $response["success"] = 0;
        $response["message"] = "Please Enter All Details....";       
        die(json_encode($response));
    }
    $query = "INSERT INTO login (ename,epassword) VALUES (:ename, :epassword) ";
	
    
    //Again, we need to update our tokens with the actual data:
    $query_params = array(
        ':ename' => $_POST['ename'],
		':epassword' => $_POST['epassword']
		    );
    
    //time to run our query, and create the user
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
	
   			session_start(); 
			$_SESSION['ename']= $_POST['ename']; 
			header("Location:First.php");
    
    
} else {
?>
	<div class='container'>
    <div class='panel panel-primary dialog-panel'>
      <div class='panel-heading'>
        <h5>Sign Up</h5>
      </div>
	      <div class='panel-body'>
		<form action="signup.php" class='form-horizontal' role='form' method="post"> 
	    <div class='form-group'>
			<label class='control-label col-md-2 col-md-offset-2' for='id_title'>Name</label>
	    
		<div class='col-md-2'>
		<input type="text" name="ename" value="" /> 
		</div>
		</div>
		
	    <br /><br /> 
		<div class='form-group'>
	    <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Password</label>
		<div class='col-md-2'>
	    <input type="password" name="epassword" value="" /> 
		</div>
		</div>
	    <br /><br /> 
		<div class='col-md-3'>
		<center>
	    <input class='btn-lg btn-danger' style='margin-left:390px' type="submit" value="Register" /> 
		</center>
		</div>
	</form>
	</div>
	</div>
	</div>
	</body>
	<?php
}

?>
<script src="js/index.js"></script>
	</body>
	
</html>


