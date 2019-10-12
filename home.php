<?php
Include('header.php');
?>
<!DOCTYPE html>
<html>
    <head>
		 <title>HOSTEL</title>
		 <link rel="stylesheet" href="/npss/font-awesome/css/font-awesome.min.css">
		 <script src="js/jquery_validate.min.js"></script>
		 <script src="js/jquery_validate_additional.min.js"></script>
		 <script src="bootstrap-datepicker.js"></script>
		 <script src="moment-with-locales.js"></script>
		 <script src="rome.js"></script>
		  <link rel="stylesheet" type="text/css" href="bootstrap-datepicker.css">
		 
		 <style>
			.error{
				   color:indianred;    
				  }
         </style>
    </head>

<body>
   
   
	<div class="container">	 
	 
		<form id="signupForm" action="" method="post">
			<div class="ee"> 
				<U><h4>HOSTEL TYPE:</h4></U><br>
				  <select id="opted" name="opted">
					<option value="0">Select</option>
					<option value="1">V.V.I.P</option>
					<option value="2">Godawan</option>
					<option value="3">Transit</option>
				  </select>
		          <br><br><br><br>
		   
			    <div class="aa">   
				  <div class="form-group"> 		
					<label><h4>TYPE OF GUEST</h4></label><br>
					<select id="typed" name='typed'>
					<option value="0">Select</option>
					<option value="4" >Official</option>
					<option value="5">Personal Guest</option>
					</select>
				  </div>
			   </div>
		 


		      <div id= "form1" class="form1">  
					
					<div class="vvip"><u><h2>V.V.I.P</u></h2><br></div>
					<div class="Godawan"><u><h2>Godawan</h2></u><br></div>
					<div class="transit"><u><h2>Transit</h2></u></div>
											
				    <div class="row">
						<div class=" col-md-4 form-group"> 
							 <label for="app_name"><u>APPLICANT NAME</u></label><br>
							 <input type="text" name="app_name" id="app_name" placeholder="APPLICANT NAME "  class="form-control error " required >
							 
                        </div>
				
						<div class=" col-md-4 form-group"> 
							 <label for="app_desig"><u>APPLICANT DESIGNATION</u></label>
							 <input type="text" name="app_desig" id="app_desig" placeholder="APPLICANT DESIGNATION"  class="form-control error " required>
						</div>
						
						<div class="col-md-4 form-group"> 
						     <label for="app_grp"><u>APPLICANT GROUP</u> </label>
							 <input type="text" name="app_grp" id="app_grp" placeholder="APPLICANT GROUP"  class="form-control error " required> 
						</div>
					</div>	
					
				
				
				
					
				 <div class="official">
					<div class="row">
						<div class="col-md-4 form-group"> 
							 <label for="off_name"><u>OFFICER NAME</u></label><br>
							 <input type="text" name="off_name" id="off_name" placeholder="OFFICER NAME"  class="form-control error " >
						</div>
				
						<div class="col-md-4 form-group"> 
							 <label for="off_desgn"><u>OFFICER DESIGNATION</u></label>
							 <input type="text" name="off_desgn" id="off_desgn" placeholder="OFFICER DESIGNATION"   class="form-control error ">
						</div>

						<div class="col-md-4 form-group"> 
						  	<label for="lab_name"><u>NAME OF LAB</u></label>
							<input type="text" name="lab_name" id="lab_name" placeholder="NAME OF LAB" name"  class="form-control error " ><br>
						</div>
					</div>	
				</div>
					
					
					
				<div class="personal_guest">
					<div class="row">
						<div class="col-md-3 form-group"> 
							 <label for="guest_name"><u>GUEST NAME</u></label>
							 <input type="text" id="guest_name" name="guest_name" placeholder="GUEST NAME"  class="form-control error "  >
						</div>
				
						<div class="col-md-3 form-group"> 
							<label for="guest_add"><u>GUEST ADDRESS</u></label>
							<input type="text" id="guest_add" name="guest_add" placeholder="GUEST ADDRESS"  class="form-control error " >
						</div>

						<div class="col-md-3 form-group"> 
						  	<label for="guest_no"><u>GUEST CONTACT NUMBER</u></label>
							<input type="text" id="guest_no" name="guest_no" placeholder="GUEST CONTACT NUMBER"  class="form-control error " >
						</div>
						
						<div class="col-md-3 form-group"> 
				     		 <label for="guest_rel"><u>RELATION WITH APPLICANT</u></label>
						     <input type="text" id="guest_rel" name="guest_rel" placeholder="RELATION WITH APPLICANT"  class="form-control error " ><br>
						</div>
				     </div>	
				</div>
					

						
				<div class="row">
					 <div class="col-md-6 form-group"> 
						 <label><u>NATURE OF BOOKING:</u></label><br>
							   <select id="nat" name="nat" class="form-control " >
									<option value="">Select Nature</option>
									<option value="OFFICIAL">OFFICIAL</option>
									<option value="TD">TD</option>
									<option value="PERSONNEL">PERSONNEL</option>
									<option value="LTC">LTC</option>
									<option value="COURSE">COURSE</option>
								</select>		
					 </div>
	                                   							  			
					 <div class="col-md-6 form-group"> 		
				   		<label><u>TYPE OF GUEST HOUSE</u></label><br>
						<select id="guest_house" name="guest_house" class="form-control " >
								<option value="">Select Type</option>
								<option value="OFFICER TF">OFFICER TF</option>
								<option value="NGO TF">NGO TF</option>
						</select>
					</div>
		      </div>	
			  
			  
			  <div class="form-group"> 
				  <label for="date_of_booking"><u>DATE OF BOOKING</u></label><br>
				  <div class="row">
				              <div class="col-md-6 form group">FROM DATE
								 <input type="text" id="from_date" name="from_date" class="form-control error"  required ></div>
							 
						  		
						  	 
							    <div class="col-md-6 form group" >TO DATE
									<input type="text"  name="to_date" id="to_date" class="form-control error" required></div>
						        </div>
				   
			       </div>
			 
			 
						
			 <div class="row">
				 <div class="col-md-6 form-group"> 
				      <label for="stay_dur"><u>DURATION OF STAY</u></label><br>
					  <input type="text" name="stay_dur" id="stay_dur" placeholder="DURATION OF STAY" class="form-control " required ><br>
				 </div>		 
		    </div>
					  

						  
		   <div class="submission">
			   <input type="submit" id="submit" name="submit" class="btn btn-info" value="Submit">
			   <input type="reset" id="clear" name="clear" class="btn btn-warning" value="Reset">
		  </div>
			
		   </div>
	   </div>
	</form>
 </div>
 
 <script type="text/javascript">
 
$(document).ready(function () {
$("#from_date").datepicker({
   dateformat:'dd-mm-yy'
});
$("#to_date").datepicker({
  dateformat:'dd-mm-yy'
});
});

/*
var from_date=$("#from_date").datepicker();
var to_date=$("#to_date").datepicker();

rome(from_date, {
dateValidator: rome.val.beforeEq(to_date)
});

rome(to_date, {
dateValidator: rome.val.afterEq(from_date)
});*/



 </script>

  
<script type="text/javascript" src="jq.js"></script>





   <script type="text/javascript">
   $( document ).ready( function () {
			
			
			
		$('#signupForm').validate( {
				rules:
			{
				app_name:
				{   pattern:"[A-Za-z. ]{1,}",
				    required:true
				},
				app_desig:
	 			{  pattern:"[A-Za-z. ]{1,}",
				   required:true
				},
				app_grp:
				{  pattern:"[A-Za-z. ]{1,}",
				   required:true
				},
				off_name:
				{   pattern:"[A-Za-z. ]{1,}",
				    required:true
				},
				off_desgn:
				{   pattern:"[A-Za-z. ]{1,}",
				    required:true
				},
				lab_name:
				{   pattern:"[A-Za-z. ]{1,}",
				    required:true
				},
				guest_name:
				{   pattern:"[A-Za-z. ]{1,}",
				    required:true
				},
				guest_add:
				{   pattern:"[A-Za-z. ]{1,}",
				    required:true
				},
				guest_no:
				{   
				    required:true
				},
				guest_rel:
				{   pattern:"[A-Za-z. ]{1,}",
				    required:true
				},
				nat:
				{   
					required:true
				},
				guest_house:
				{   
					required:true
				},
				from_date:
				{   
					required:true
				},
				to_date:
				{   	
					required:true
				},
				stay_dur:
				{   
				    number:true,
					required:true
				}
			
				
			},
			messages:
			{
				app_name:
				{   pattern: "Please enter alphabets only",
					required:"Please enter the applicant name"
				},
				app_desig:
				{   pattern: "Please enter alphabets only",
					required:"Please enter the applicant designation"
				},
			    app_grp:
				{   pattern: "Please enter alphabets only",
					required:"Please enter the applicant group"
				},
				off_name:
				{   pattern: "Please enter alphabets only",
				    required:"Please enter the officer name"
				},
				off_desgn:
				{   pattern: "Please enter alphabets only",
				    required:"Please enter the officer designation"
				},
				lab_name:
				{   pattern: "Please enter alphabets only",
				    required:"Please enter the lab name"
				},
				guest_name:
				{   pattern: "Please enter alphabets only",
				    required:"Please enter the guest name"
				},
				guest_add:
				{   pattern: "Please enter alphabets only",
				    required:"Please enter the guest address"
				},
				guest_no:
				{
				    required:"Please enter guest number"
				},
				guest_rel:
				{   pattern: "Please enter alphabets only",
				    required:"Please enter guest relation"
				},
				nat:
				{
					required:"Please Select nature"
				},
				guest_house:
				{
					required:"Please Select guest house"
				},
			    from_date:
				{
					required:"Please choose from date",
				},
				to_date:
				{
					required:"Please choose to date",
				},
				stay_dur:
				{   
				     number:"Please enter numeric values",
					required:"Please choose stay duration"
				}
				
			}
			
		});


});

</script>
   </body>
</html>

<?php
   if(isset($_POST['submit']))
	{

	    $type=$_POST['opted']; 
		$part=$_POST['typed'];
	if($type==1 || $type==2)
		{
				$postdata=array(
					"$type"=>$_POST['opted'],
					"$part"=>'',
					"app_name"=>$_POST['app_name'],
					"app_desig"=>$_POST['app_desig'],
					"app_grp"=>$_POST['app_grp'],
					"off_name"=>$_POST['off_name'],
					"off_desgn"=>$_POST['off_desgn'],
					"lab_name"=>$_POST['lab_name'],
					"nat"=>$_POST['nat'],
					"guest_house"=>$_POST['guest_house'],
					"from_date"=>$_POST['from_date'],
					"to_date"=>$_POST['to_date'],
					"stay_dur"=>$_POST['stay_dur'],
					"avail"=>$_POST['avail'],
					"guest_name"=>'',
					"guest_add"=>'',
					"guest_no"=>'',
					"guest_rel"=>''
				);		
		}
		
		
	
			if($part==4)
			{
				    $postdata=array(
				    $type=>$_POST['opted'], 
		            $part=>$_POST['typed'],
					$app_name=>$_POST['app_name'],
					$app_desig=>$_POST['app_desig'],
					$app_grp=>$_POST['app_grp'],
					$off_name=>$_POST['off_name'],
					$off_desgn=>$_POST['off_desgn'],
					$lab_name=>$_POST['lab_name'],
					$nat=>$_POST['nat'],
					$guest_house=>$_POST['guest_house'],
					$from_date=>$_POST['from_date'],
					$to_date=>$_POST['to_date'],
					$stay_dur=>$_POST['stay_dur'],
					$avail=>$_POST['avail'],
					$guest_name=>'',
					$guest_add=>'',
					$guest_no=>'',
					$guest_rel=>'',
				);
			}
			if($part==5)
				{
					$postdata=array(
					$type=>$_POST['opted'], 
					$part=>$_POST['typed'],
					$app_name=>$_POST['app_name'],
					$app_desig=>$_POST['app_desig'],
					$app_grp=>$_POST['app_grp'],
					$off_name=>'',
					$off_desgn=>'',
					$lab_name=>'',
					$nat=>$_POST['nat'],
					$guest_house=>$_POST['guest_house'],
					$from_date=>$_POST['from_date'],
					$to_date=>$_POST['to_date'],
					$stay_dur=>$_POST['stay_dur'],
					$avail=>$_POST['avail'],
					$guest_name=>$_POST['guest_name'],
					$guest_add=>$_POST['guest_add'],
					$guest_no=>$_POST['guest_no'],
					$guest_rel=>$_POST['guest_rel'],
					);
				}
		
		

		
		$sql="INSERT INTO bookings (hostel_type,transit_type,app_name,app_desig,app_grp,off_name,off_desgn,lab_name,nat,guest_house,from_date,to_date,stay_dur,avail,guest_name,guest_add,guest_no,guest_rel) VALUES ('".$_POST['opted']."','".$_POST['typed']."','".$_POST['app_name']."','".$_POST['app_desig']."','".$_POST['app_grp']."','".$_POST['off_name']."','".$_POST['off_desgn']."','".$_POST['lab_name']."','".$_POST['nat']."','".$_POST['guest_house']."','".$_POST['from_date']."','".$_POST['to_date']."','".$_POST['stay_dur']."','".$_POST['avail']."','".$_POST['guest_name']."','".$_POST['guest_add']."','".$_POST['guest_no']."','".$_POST['guest_rel']."')";
	$result=mysqli_query($conn,$sql);
		if($result)
		{   
			echo "<h1>Application submitted successfully!!!</h1>";
		}
		else
		{
			echo "error";
		}
		
		
		
}
?>



