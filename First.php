
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Report</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>
<?php

session_start();
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
  <div class='container'>
    <div class='panel panel-primary dialog-panel'>
	
      <div class='panel-heading'>
	  <h2> Hello <?php  
	  				echo $_SESSION['ename'] 
					?>   </h2>
	  <br>
        <h5>Please fill the following form...</h5>
      </div>
	      <div class='panel-body'>
	  	<p class="required">* Required</p>
        <form class='form-horizontal' role='form' action="action.php" method="post" enctype="multipart/form-data">
		<div class='form-group'>
			<label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'><span>*</span>Resturant Picture</label>
           <div class='col-md-3 indent-small'>
			  <div class='form-group internal'>
			
		<input type='file' onChange="resimage(this);" name="rimg" required />
		
			
		<img id="rcard" src="http://placehold.it/180" alt="your image" />
  			<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    		<script src="js/index.js"></script>

				</div>
			</div>
			</div>
          <div class='form-group'>
		   
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'><span>*</span>Resturant Name</label>
            <div class='col-md-3 indent-small'>
			  <div class='form-group internal'>
               <input type="text" name="rname" id="rname" class='form-control' required>
			   </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'><span>*</span>Name</label>
                          
              <div class='col-md-3 indent-small'>
			  <div class='form-group internal'>
        <input class='form-control' id='id_first_name' name="name"type='text' value="<?php echo $_SESSION['ename'] ?> "  required>
                </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'><span>*</span>Contact Number</label>
            <div class='col-md-3 indent-small'>
             <div class='form-group internal'>
                  <input class='form-control' id='id_children_free' name="cno" type='number' required>
                </div>
              
          </div>
		  </div>
		  <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Alternate Number</label>
            <div class='col-md-3 indent-small'>
             <div class='form-group internal'>
                  <input class='form-control' id='id_children_free' name="ano" type='number'>
              </div>
          </div>
		  </div>
		  <div class='form-group'>
			<label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'>Visiting Card</label>
            <div class='col-md-3 indent-small'>
			  <div class='form-group internal'>
		<input type='file' onChange="visitingcard(this);" name="vcard" />
			
		<img id="vcard" src="http://placehold.it/180" alt="your image" />
  			<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    		<script src="js/index.js"></script>

				</div>
			</div>
			</div>
			<div class='form-group'>
			<label class='control-label col-md-2 col-md-offset-2' for='id_title'>Menu Card</label>
            <div class='col-md-3 indent-small'>
			  <div class='form-group internal'>
		<input type='file' onChange="menucard(this);" name="mcard[]" multiple="multiple"/>
			
		<img id="mcard" src="http://placehold.it/180" alt="your image" />
  			<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    		<script src="js/index.js"></script>
			
				</div>
			</div>
		  
          </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_equipment'><span>*</span>Home Delivery</label>
            <div class='col-md-3 indent-small'>
			  <div class='form-group internal'>
              <input type="radio" name="homedelivery" value="Yes" required>Yes
			  <input type="radio" name="homedelivery" value="No" required>No
              </div>
			  </div></div>
			  <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_equipment'><span>*</span>Any Affiliations</label>
            <div class='col-md-3 indent-small'>
			  <div class='form-group internal'>
              <input type="radio" onclick="document.getElementById('field1').disabled=false;" name="affili_1" value="Yes" id="radio_0"/>Yes
			  <input type="radio" onclick="document.getElementById('field1').disabled=true;" name="affiliations" value="No">No
			  </div>
			  <br>
			  <br>
			  <label class='control-label' for='id_equipment'>If Yes then..</label>
      <input type="text"  class='form-control' id="field1" name="affiliations" placeholder="" disabled="true" required/>

  
			  </div>
			  </div>
		   <div class='form-group'>
		   
            <label class='control-label col-md-2 col-md-offset-2' for='id_comments'>ShortNote About the meeting</label>
            <div class='col-md-3 indent-small'>
			
              <textarea class='form-control' id='id_comments' placeholder='Additional comments' name="note" rows='3'></textarea>
            </div>
          </div>
		  <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'><span>*</span>Outcomes of the visit</label>
            <div class='col-md-3 indent-small'>
              <input type="radio" name="outcomes" value="Positive" required>Positive
			  <input type="radio" name="outcomes" value="Negative" required>Negative
			  </div>
			  </div>
         
        <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'><span>*</span>Date of meeting</label>
            <div class='col-md-8'>
			
              
              <div class='col-md-3'>
                <div class='form-group internal input-group'>
                  <input class='form-control datepicker' id='id_checkin' name="date" required>
                  <span class='input-group-addon'>
                    <i class='glyphicon glyphicon-calendar'></i>
                  </span>
				  
                </div>
				[yyyy-mm-dd]
			  

                </div>
              </div>
			  </div>
         
            <div class='col-md-3'>
              <button class='btn-lg btn-danger' style='margin-left:400px' type='submit'>Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
  
    <script src="js/index.js"></script>
	</body>
	
</html>
