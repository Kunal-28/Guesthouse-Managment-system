<?php
Include('header.php');

      $from_ret=$_GET['from_ret'];
	  $to_ret=$_GET['to_ret'];
	  $t_type=$_GET['t_type'];
	  $sel_type=$_GET['sel_type'];
	  
	  $date_f=strtotime($from_ret);
	  $date_t=strtotime($to_ret);
	  
?>
  <title>GENERATED_REPORT</title>
  <link rel="stylesheet" href="css/bootstrap.min2.css">
  <script src="js/jquery-3.4.1.js"></script>
  <script src="js/bootstrap.min2.js"></script>

  <u><h2>Hostel Report</h2></u>
  <?php
	if($sel_type==1) 
	{
		echo "<h2><u>V.V.I.P</u></h2><br>";
	}
	?>
  <?php
	if($sel_type==2) 
	{ 
        echo "<h2>Godawan</h2><br>";
	}
	?>
  <?php
	if($sel_type==3) 
	{ 
      if($t_type==4)
	  {
         echo "<h2>Transit(Official)</h2><br>";
	  }
	  
	   if($t_type==5)
	  {
         echo "<h2>Transit(Personal Guest)</h2><br>";
	  }
	}
    ?>	
  <p>Type something in the input field to search the table for applicant name,applicant designation or group:</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>

<table border="1" style="width:100%"  id="t01" class="table table-bordered table-striped pagination">

  <tr>
    <th>APPLICATION NUMBER</th>
	<?php
	if($sel_type==4)
	echo"<th>HOSTEL TYPE</th>";
    ?>
	<th>APPLICANT NAME</th>		
    <th>APPLICANT DESIGNATION</th>
	<th>APPLICANT GROUP</th>
	<?php
	if($sel_type==1 || $sel_type==2 || ($sel_type==3 && $t_type==4))
	{
    echo "<th>OFFICER NAME</th>";
	echo "<th>OFFICER DESIGNATION</th>";
	echo "<th>LAB NAME</th>";
	}
	
	if($sel_type==3)
	{
	if($t_type==5)
	{
	
	echo "<th>GUEST NAME</th>";
	echo "<th>GUEST ADDRESS</th>";
	echo "<th>GUEST NUMBER</th>";
	echo "<th>GUEST RELATION</th>";
	}
	}
	?>
	<th>NATURE OF BOOKING</th>
	<th>GUEST HOUSE</th>
	<th>FROM DATE</th>
	<th>TO DATE</th>
	<th>DURATION<br>(in days)</th>

	
	
  </tr>
   <tbody id="myTable">
<?php
    
if(isset($_GET['download']))
	{  
       $action=array("1"=>"V.V.I.P","2"=>"Godawan","3"=>"Transit" );
	   
	  if($sel_type==4 )
	  {	  
	   $sql="Select * from bookings where from_date >= '$from_ret'  and  from_date <= '$to_ret'  ORDER BY book_id DESC";
		$qr=mysqli_query($conn,$sql);
		
	 
		while($rows=mysqli_fetch_assoc($qr))
		{  
			
			  echo "<tr>";
			  echo "<td>".$rows["book_id"]."</td>";
              echo "<td>".$action[$rows["hostel_type"]]."</td>";
			  echo "<td>".$rows["app_name"]."</td>";
			  echo "<td>".$rows["app_desig"]."</td>";
			  echo "<td>".$rows["app_grp"]."</td>";
			  echo "<td>".$rows["nat"]."</td>";
			  echo "<td>".$rows["guest_house"]."</td>";
			  echo "<td>".$rows["from_date"]."</td>";
			  echo "<td>".$rows["to_date"]."</td>";
			  echo "<td>".$rows["stay_dur"]."</td>";
			  echo "</tr>";
		}

	  }
	  
	  
	  if($sel_type==1 || $sel_type==2 )
	  {	  
	   $sql="Select * from bookings where from_date >= '$from_ret'  and  from_date <= '$to_ret' and (hostel_type = '".$sel_type."'  ) ORDER BY book_id DESC";
		$qr=mysqli_query($conn,$sql);
		
	 
		while($rows=mysqli_fetch_assoc($qr))
		{  
			
			  echo "<tr>";
			  echo "<td>".$rows["book_id"]."</td>";
			  echo "<td>".$rows["app_name"]."</td>";
			  echo "<td>".$rows["app_desig"]."</td>";
			  echo "<td>".$rows["app_grp"]."</td>";
			  echo "<td>".$rows["off_name"]."</td>";
			  echo "<td>".$rows["off_desgn"]."</td>";
			  echo "<td>".$rows["lab_name"]."</td>";
			  echo "<td>".$rows["nat"]."</td>";
			  echo "<td>".$rows["guest_house"]."</td>";
			  echo "<td>".$rows["from_date"]."</td>";
			  echo "<td>".$rows["to_date"]."</td>";
			  echo "<td>".$rows["stay_dur"]."</td>";
			  echo "</tr>";
		}

	  }
     
   if($sel_type==3)
		  
   {
	    if($t_type==4)
	  {	  
	   $sql="Select * from bookings where from_date >= '$from_ret'  and  from_date <= '$to_ret' && transit_type = '".$t_type."' ORDER BY book_id DESC";
		$qr=mysqli_query($conn,$sql);
		$no = 0;
		  
		 
		while($rows=mysqli_fetch_assoc($qr))
						{  
			
			  $no=$no+1;
			  echo "<tr>";
			  echo "<td>".$rows["book_id"]."</td>";	
			  echo "<td>".$rows["app_name"]."</td>";
			  echo "<td>".$rows["app_desig"]."</td>";
			  echo "<td>".$rows["app_grp"]."</td>";
			  echo "<td>".$rows["off_name"]."</td>";
			  echo "<td>".$rows["off_desgn"]."</td>";
			  echo "<td>".$rows["lab_name"]."</td>";
			  echo "<td>".$rows["nat"]."</td>";
			  echo "<td>".$rows["guest_house"]."</td>";
			  echo "<td>".$rows["from_date"]."</td>";
			  echo "<td>".$rows["to_date"]."</td>";
			  echo "<td>".$rows["stay_dur"]."</td>";
			   echo "</tr>";
		}

	  }
	 
	if($t_type==5)
	  {	  
	   $sql="Select * from bookings where from_date >= '$from_ret'  and  from_date <= '$to_ret' && transit_type = '".$t_type."' ORDER BY book_id DESC";
		$qr=mysqli_query($conn,$sql);
		$no = 0;
		
		while($rows=mysqli_fetch_assoc($qr))
			{
			
			  $no=$no+1;
			  echo "<tr>";
			  echo "<td>".$rows["book_id"]."</td>";		 
			  echo "<td>".$rows["app_name"]."</td>";
			  echo "<td>".$rows["app_desig"]."</td>";
			  echo "<td>".$rows["app_grp"]."</td>";
			  echo "<td>".$rows["guest_name"]."</td>";
			  echo "<td>".$rows["guest_add"]."</td>";
			  echo "<td>".$rows["guest_no"]."</td>";
			  echo "<td>".$rows["guest_rel"]."</td>";
			  echo "<td>".$rows["nat"]."</td>";
			  echo "<td>".$rows["guest_house"]."</td>";
			  echo "<td>".$rows["from_date"]."</td>";
			  echo "<td>".$rows["to_date"]."</td>";
			  echo "<td>".$rows["stay_dur"]."</td>";
			   echo "</tr>";
		}

	  }
	
  
}
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


