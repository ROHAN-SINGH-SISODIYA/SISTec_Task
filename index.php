<?php include('header.php'); ?>
<div class="container">
	<div class="row">
		<center><h2><u>SELECT FACULTY</u></h2></center>
	</div>
   <form method="post" action="#">
	<div class="col-md-8 col-md-offset-2" style="margin-top: 10px;border:0.1px solid #d5dbd6;padding: 10px;">
			   <div class="form-row">
				    <div class="form-group col-md-12">
					      <label for="inputDeptName">Faculties</label>
					      <select name="Select_user" class="form-control" id="custID">
					      	  <?php 
						        include('config.php');
						        $qry="SELECT * FROM `Faculty_users`";
						        $rows=mysqli_query($conn,$qry);
				                               if($rows->num_rows > 0) 
				                               {
				                                    while($data = $rows->fetch_assoc())
				                                     {  
				                                     	?>
				                                     	 <option value="<?php echo $data['id']; ?>"><?php echo $data['name']; ?></option>
				                                     	<?php
				                                     }
				                                }
				               ?>                      	
					      </select> 
				    </div>
			  </div>
			  <div class="form-row">
				    <div class="form-group col-md-6">
			          <input type="submit" class="btn btn-lg" name="submit_user" value="select">
		           </div>
	          </div>
        </div>		
    </form>
    <?php
        if(isset($_POST['submit_user']))
	     {
	           $userID=$_POST['Select_user'];
               $qry="SELECT * FROM `tbl_choice_fill` WHERE choice_filled_by='$userID' LIMIT 1";
	           $rows=mysqli_query($conn,$qry);
                           if($rows->num_rows > 0) 
                           {
                                while($data = $rows->fetch_assoc())
                                 {  
                                 	?>
                                           <div class="col-md-10 col-md-offset-1" style="margin-top: 30px;border:0.1px solid #d5dbd6;padding: 10px;">
									    	<div class="row">
									    		<div class="col-md-2">
									    			<img src="logo.png" width="120" height="120">
									    		</div>
									    		<div class="col-md-10">
									    			<center><h3 style="margin:0px"><b>SAGAR INSTITUTE OF SCIENCE & TECHNOLOGY BHOPAL</b></h3></center>
									    			<center><h3 style="margin:0px">DEPARTMENT OF ELECTRICAL & ELECTRONICS ENGINEERING</h3></center>
									    			<center><h3 style="margin:0px"><b><u>FACULTY SUBJECT PREFERENCES FORM</u></b></h3></center>
									    		</div>
									    	</div>

									        <div class="row" style="margin-top: 10px">
									    		<div class="col-md-12">
									    		<table class="table table-bordered">
												  <tbody>
												<?php  	
												 $qry="SELECT * FROM `Faculty_users` WHERE id='$userID' LIMIT 1";
	                                             $rows=mysqli_query($conn,$qry);
						                           if($rows->num_rows > 0) 
						                           {
						                                while($Userdata = $rows->fetch_assoc())
						                                 {   
						                                    ?> 	
															    <tr>
															      <th>Faculty Name</th>
															      <td colspan="4"><?php echo $Userdata['name']; ?></td>
															    </tr>
															    <tr>
															      <th>Department Name</th>
															      <td colspan="4"><?php echo $Userdata['dept']; ?></td>
															    </tr>
															    <tr>
															      <th>Date of Joining</th>
															      <td colspan="4"><?php echo $Userdata['doj']; ?></td>
															    </tr>
															    <tr>
															      <th>Total Teaching Experience</th>
															      <td colspan="4"><?php echo $Userdata['expericence']; ?></td>
															    </tr>
															<?php
														}
													}
												?>			    
												  </tbody>
												</table>
												</div>
									    	</div>
									 
									    	<div class="row" style="margin-top: 10px">
									    		<div class="col-md-12">
									    		<center><h3><b><u>SUBJECT PREFERENCES</u></b></h3></center>	
									    		<table class="table table-bordered">
												  <thead>
												    <tr>
													      <th scope="col" colspan="2">S.N.</th>
													      <th scope="col" colspan="2">Subject Name With Code</th>
													      <th scope="col" colspan="2">Type</th>
													      <th scope="col" colspan="2">No. of Times Subject Taught</th>
													      <th scope="col" colspan="2">Justification for allocation</th>
													      <th scope="col" colspan="2">Allocation Status</th>
												    </tr>
												  </thead>
												  <tbody>
												  	<?php  	
													 $qry="SELECT CONCAT(tbl_subject.scode,' ',tbl_subject.subject_name) as sub,tbl_choice_fill.scode,tbl_choice_fill.session,tbl_choice_fill.justification,tbl_choice_fill.no_of_time_taught,tbl_choice_fill.type FROM tbl_subject INNER JOIN tbl_choice_fill ON tbl_subject.scode=tbl_choice_fill.scode  WHERE tbl_choice_fill.choice_filled_by='$userID' AND tbl_choice_fill.session='Jul-Dec 2017'";
		                                             $rows=mysqli_query($conn,$qry);
							                         if($rows->num_rows > 0) 
							                          {
							                          	$i=1;
						                                while($Userdata = $rows->fetch_assoc())
						                                 {  	
						                                    ?> 
															    <tr>
															      <th scope="row" colspan="2"><?php echo $i; ?></th>
															      <td colspan="2"><?php echo $Userdata['sub']; ?></td>
															      <td colspan="2"><?php echo $Userdata['type']; ?></td>
															      <td colspan="2"><?php echo $Userdata['no_of_time_taught']; ?></td>
															      <td colspan="2"><?php echo $Userdata['justification']; ?></td>
															      <td colspan="2">
															      	 <label class="switch ">
																          <input type="checkbox" class="primary eidClass" data-id="<?php echo $Userdata['scode']; ?>">
																          <span class="slider"></span>
																     </label>
															      </td>
															    </tr>
															<?php
															$i++;
														}
													  }
											        ?>	
											        <tr>
											        	<td colspan="12">
											        	<button style="float: right;" class="btn btn-primary btn-xs" id="SubmitHere">Submit</button>
											        	</td>
											        </tr>	  		    
												  </tbody>
												</table>
												</div>
									    	</div>

									    	<div class="row" style="margin-top: 10px">
									    		<div class="col-md-12">
									    		<center><h3><b><u>HISTORY OF SUBJECT TAUGHT</u></b></h3></center>	
									    		<table class="table table-bordered">
												  <thead>
												    <tr>
												      <th scope="col" colspan="2">Session</th>
												      <th scope="col" colspan="2">Subject 1</th>
												      <th scope="col" colspan="2">Subject 2</th>
												      <th scope="col" colspan="2">Subject 3</th>
												      <th scope="col" colspan="2">Subject 4</th>
												    </tr>
												  </thead>
												  <tbody>
												  <?php  	
												    $qry="select group_concat(scode) as sub,session from tbl_choice_fill where allocation='y' and choice_filled_by=1 group by session";
	                                                $rows=mysqli_query($conn,$qry);
						                            if($rows->num_rows > 0) 
						                             {
						                                while($allocationData = $rows->fetch_assoc())
						                                 {   
						                                 	$arr = explode (",",$allocationData['sub']); 
						                                    ?> 	
															    <tr>
															      <th scope="row" colspan="2"><?php echo $allocationData['session']; ?></th>
															      <?php
															      foreach ($arr as $key) {
															      	?>
															      	   <td colspan="2"><?php echo $key; ?></td>
															      	<?php 
															      }
															      ?>
															    </tr>
												           <?php
												         }
												       }
												    ?>          
												  </tbody>
												</table>
												</div>
									    	</div>
									    </div>
                                 	<?php
                                 }
                            }
                            else{
                            	?>
                            	  <div class="col-md-10 col-md-offset-1" style="margin-top: 30px;border:0.1px solid #d5dbd6;padding: 10px;">
                            	  	   <center><h2>No Data Found!</h2></center>
                            	  </div>
                            	<?php
                            }     	
	     }
    ?> 
 </div>
<script type="text/javascript">
 $(document).on('click','#SubmitHere',function()
	 {       
			var custID = $('#custID option:selected').val();		
			var eid = [];
			$(".eidClass").each(function()
			{
				if ($(this).prop('checked'))
				{
					eid.push($(this).attr('data-id'));

				}
		    });
	    $.ajax({
			type: "POST",
			url:'selectData.php',			
			data: {'custID':custID,'eid':eid},
			dataType: 'JSON',
			success: function (data) 
			{	
				console.log(data);
				if(data.status=='success')
				{   
              	   alert("Success");
              	   setTimeout(function(){ location.reload() });					
				}
				else
				{
					alert("Failed")
					setTimeout(function(){ location.reload() });
				}
			}
		});
		return false;
			
	});
 </script>
 <?php include('footer.php'); ?>

