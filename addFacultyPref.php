<?php include('header.php'); ?>
<div class="container">
	<div class="row">
		<center><h2><u>FACULTY SUBJECT PREFERENCE FORM</u></h2></center>
	</div>
   <form>
	<div class="col-md-8 col-md-offset-2" style="margin-top: 10px;border:0.1px solid #d5dbd6;padding: 10px;">
			   <div class="form-row">
				    <div class="form-group col-md-12">
				      <label for="inputName">Faculty Name</label>
				      <select class="form-control">
					      	  <?php 
						        include('config.php');
						        $qry="SELECT `staff_id`, `faculty_name` FROM `tbl_staff`";
						        $rows=mysqli_query($conn,$qry);
				                               if ($rows->num_rows > 0) 
				                               {
				                                    while($data = $rows->fetch_assoc())
				                                     {  
				                                     	?>
				                                     	 <option value="<?php echo $data['staff_id']; ?>">    <?php echo $data['faculty_name']; ?></option>
				                                     	<?php
				                                     }
				                                }
				               ?>                      	
					      </select> 
				    </div>
			  </div>

			  <div class="form-row">
				    <div class="form-group col-md-12">
				      <label for="inputSession">Session</label>
				      <select class="form-control">
					      	  <?php 
						        include('config.php');
						        $qry="SELECT * FROM `tbl_subject`";
						        $rows=mysqli_query($conn,$qry);
				                               if ($rows->num_rows > 0) 
				                               {
				                                    while($data = $rows->fetch_assoc())
				                                     {  
				                                     	?>
				                                     	 <option value="<?php echo $data['session']; ?>">    <?php echo $data['session']; ?></option>
				                                     	<?php
				                                     }
				                                }
				               ?>                      	
					      </select> 
				    </div>
			  </div>
        </div>	
        
        <div class="col-md-8 col-md-offset-2" style="margin-top: 20px;border:0.1px solid #d5dbd6;padding: 10px;">
        	 <center><h4>SUBJECT PREFERENCES</h4></center>
        	 <hr>
			   <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="inputEmail4">Theory Preferences</label>
                       <select class="form-control" style="margin-top: 5px;">
					      	  <option>Network Analysis (EE-222)</option>
					      	  <option>Analog Electronics (EE-223)</option>
					      	  <option>Signals and Systems (EE-224)</option>
					      	  <option>Communication Skills (HU-220)</option>
					    </select> 		
					    <select class="form-control" style="margin-top: 5px;">
					      	  <option>Network Analysis (EE-222)</option>
					      	  <option>Analog Electronics (EE-223)</option>
					      	  <option>Signals and Systems (EE-224)</option>
					      	  <option>Communication Skills (HU-220)</option>
					    </select> 		
					    <select class="form-control" style="margin-top: 5px;">
					      	  <option>Network Analysis (EE-222)</option>
					      	  <option>Analog Electronics (EE-223)</option>
					      	  <option>Signals and Systems (EE-224)</option>
					      	  <option>Communication Skills (HU-220)</option>
					    </select> 	
					     <select class="form-control" style="margin-top: 5px;">
					      	  <option>Network Analysis (EE-222)</option>
					      	  <option>Analog Electronics (EE-223)</option>
					      	  <option>Signals and Systems (EE-224)</option>
					      	  <option>Communication Skills (HU-220)</option>
					    </select> 				     
				    </div>
			  </div>

			  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="inputEmail4">Lab Preferences</label>
				       <select class="form-control" style="margin-top: 5px;">
					      	  <option>C++</option>
					      	  <option>java</option>
					      	  <option>python</option>
					      	  <option>ML</option>
					      	  <option>Html</option>
					    </select> 	
					     <select class="form-control" style="margin-top: 5px;">
					      	  <option>C++</option>
					      	  <option>java</option>
					      	  <option>python</option>
					      	  <option>ML</option>
					      	  <option>Html</option>
					    </select> 	
					     <select class="form-control" style="margin-top: 5px;">
					      	  <option>C++</option>
					      	  <option>java</option>
					      	  <option>python</option>
					      	  <option>ML</option>
					      	  <option>Html</option>
					    </select> 	
					     <select class="form-control" style="margin-top: 5px;">
					      	  <option>C++</option>
					      	  <option>java</option>
					      	  <option>python</option>
					      	  <option>ML</option>
					      	  <option>Html</option>
					    </select> 	
				    </div>
			  </div>
			<center><input type="submit" class="btn btn-lg" name="submit" value="Submit Info"></center>
        </div>		
    </form>
 </div>
 <?php include('footer.php'); ?>

