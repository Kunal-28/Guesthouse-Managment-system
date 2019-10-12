<?php
Include('header.php');
?>
<script src="bootstrap-datepicker.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap-datepicker.css">

 <title>GENERATE</title>
 <div class="container">	
		<form action="generatereport.php" method="get">
			<div class="ff">
			<h3><u>DATA RETRIVAL FROM DATABASE</u></h3>		
				<div class="form-group"> 
					<label for="date_of_retrival"></label><br>
						  <div class="row">
				              <div class="col-md-3 form group">FROM DATE
					      	  <div class="input-group date" >			
								<input type="text" id="from_ret" name="from_ret" class="form-control error"></div>
								</div>
						  		
						  	 
							    <div class="col-md-3 form group" >TO DATE
								 <div class="input-group date" >
								<input type="text"  name="to_ret" id="to_ret" class="form-control error"></div>
						        </div>
				      						   
						   <div class="col-md-3 form-group"> 
						   <label>HOSTEL TYPE:</label>
							   <select id="sel_type" name="sel_type"  class="form-control error" >
									<option value="0">Select</option>
									<option value="1">V.V.I.P</option>
									<option value="2">Godawan</option>
									<option value="3">Transit</option>
									<option value="4">ALL</option>
							  </select>
						  </div>
						  
						  <div class="col-md-3 form-group"> 
							   <div class="zz">
								<label>TYPE OF GUEST</label>
									<select id="t_type" name='t_type' class="form-control error">
											<option>Select</option>
											<option value="4">Official</option>
											<option value="5">Personal Guest</option>
									</select>
								</div>	
						 </div>
					 </div>
				</div>
		 
			    <div class="submission">
				 <button type="submit" id="download" name="download" class="btn btn-success">GENERATE REPORT</button>
			   </div>
		  </div>	 
	   </form>
	</div>
	
	<script type="text/javascript">
 $(function() {
	 $('#from_ret').datepicker();
	 $('#to_ret').datepicker({
		 useCurrent: false 
	 });
	
 }); 
 </script>
	
	<script type="text/javascript" src="jq.js"></script>
	
	
	