<?php
Include('header.php');

?>
<title>work</title>


  <u><h2>Hostel Approval</h2></u>
  
  <p>Type something in the input field to search the table for applicant name,applicant designation or group:</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>

     <table border="1" style="width:100%"  id="t01">
	       <tr>
			<th>APPLICATION NUMBER</th>
			<th>APPLICANT NAME</th>		
			<th>APPLICANT DESIGNATION</th>
			<th>APPLICANT GROUP</th>
			<th>ACTION</th>
	      </tr>
		  	  
 <tbody id="myTable">		  
<?php		   
     $sql="Select * from bookings";
	 $qr=mysqli_query($conn,$sql);
	 $no = 0;

	 
	 while($rows=mysqli_fetch_assoc($qr))
		{  
			$book_id=$rows["book_id"];
			
			  echo "<tr>";
			  echo "<td>".$rows["book_id"]."</td>";  
			  echo "<td>".$rows["app_name"]."</td>";
			  echo "<td>".$rows["app_desig"]."</td>";
			  echo "<td>".$rows["app_grp"]."</td>";	
			   echo "<td colspan='6'>";
			  if($rows["approved"]==1)
			  {
				 
?> 
            
           <div class="row">
			<div class="col-md-6 form-group"> 
			  <select id="app<?php echo $book_id; ?>" name='app<?php echo $book_id; ?>' class="form-control">
					<option value="1">Select</option>
					<option value="2">APPROVED</option>
					<option value="3">NOT APPROVED</option>
			  </select>
			  </div>		  
			  <div class="col-md-6 form-group">
			  <input type="button" name="submit<?php echo $book_id; ?>" id="submit<?php echo $book_id; ?>"  value='submit'  class="form-control btn btn-info">
			  </div>		  
		  </div>
		  <div id="message<?php echo $book_id; ?>" style="display:none;" class="alert alert-success" >
			    Success!
		</div> 
	<script type="text/javascript">
	   
		$(document).ready(function(){
			
		 $("#submit<?php echo $book_id; ?>" ).click(function(){
			 
			var aid=$("#app<?php echo $book_id; ?>").val();
			var book_id=<?php echo $book_id; ?>;
		 
			 
			$.ajax({
			 type:"POST",
			 url:"works.php",
			 datatype:"html",
		     data:{"app_id": aid,"bid": book_id},
			 success:function(result){
				 $("#message<?php echo $book_id; ?>").show();
				 $("#app<?php echo $book_id; ?>").hide();
				 $("#submit<?php echo $book_id; ?>").hide();
				 setTimeout(function(){ window.location.href="works.php"; }, 1000);
				  
				}
							  
		   });
		
		 });
		
		 
	 });	 


	</script>
	 
<?php   
       
		  
			  }

	  
	 

			  
			  else 
			  {
				  $action=array("2"=>"Approved","3"=>"Not-Approved");
				  echo $action[$rows["approved"]];
			  }
			  echo "</td>";
			  echo "</tr>";
	    }
		

?>
</tbody>
</table>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>	


<?php

  if(isset($_POST["bid"]))	  
	  {    
		    $aid=$_POST['app_id']; 
		    $book_id=$_POST['bid'];

		   $sql="UPDATE bookings SET approved ='".$aid."'  WHERE book_id='".$book_id."'";
		   $result=mysqli_query($conn,$sql);
		   echo "entry updated successfully";
	  }	  
	


?>



