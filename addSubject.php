<?php 
include('header.php'); 
include('config.php');
$msg = '';
if(isset($_POST['submit']))
{
	$uni_id=uniqid();
	$Sub_code=$_POST['Sub_code'];
	$sub_name=$_POST['sub_name'];
	$semester=$_POST['semester'];
	$branch=$_POST['branch'];
	$session=$_POST['session'];

	$sql = "INSERT INTO `tbl_subject`(`subject_uni_id`, `sub_code`, `sub_name`, `session`, `semester`, `branch`) VALUES ('$uni_id','$Sub_code','$sub_name','$session','$semester','$branch')";

	if ($conn->query($sql) === TRUE) {
	    $msg="New Record added successfully.";
	} else {
	    $msg="Something went wrong.";
	}
}
$conn->close();
?>
<div class="container">
	<div class="row">
		<center><h2><u>ADD SUBJECT</u></h2></center>
	</div>
   <form method="post" action="addSubject.php">
   <div class="col-md-8 col-md-offset-2" style="margin-top: 10px;border:0.1px solid #d5dbd6;padding: 10px;">
   	        <center><h4><u><?php echo $msg; ?></u></h4></center>     
			<div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="inputSubCode">Subject Code</label>
				      <input type="text" class="form-control" name="Sub_code" placeholder="ENTER SUBJECT CODE" required>
				    </div>
				    <div class="form-group col-md-6">
				      <label for="inputSubName">Subject Name</label>
				        <input type="text" class="form-control" name="sub_name" placeholder="ENTER SUBJECT NAME" required>
				    </div>
			  </div>

			  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="inputSemester">Semester</label>
				      <select class="form-control" name="semester" required>
					      	  <option>1</option>
					      	  <option>2</option>
					      	  <option>3</option>
					      	  <option>4</option>
					      	  <option>5</option>
					      	  <option>6</option>
					      	  <option>7</option>
					      	  <option>8</option>
					  </select> 
				    </div>
				    <div class="form-group col-md-6">
				         <label for="inputBranch">Branch</label>
					     <select class="form-control" name="branch" required>
					      	  <option>cse</option>
					      	  <option>ec</option>
					      	  <option>me</option>
					      	  <option>ce</option>
					      	  <option>ex</option>
					      </select> 
				    </div>
			  </div>
			   <div class="form-row">
				    <div class="form-group col-md-12">
				      <label for="inputMoNum">Session</label>
				      <input type="text" class="form-control" name="session" placeholder="Enter Session" required> 
				    </div>
			  </div>
              <div class="form-row">
              	<div class="form-group col-md-6">
              	   <input type="submit" class="btn btn-lg btn-primary" name="submit" value="Submit Info">
              	</div>			
              </div>
        </div>	
        </div>		
    </form>
	
	<div class="col-md-9 col-md-offset-2" style="margin-top: 20px;">
		    <center>
		    <table class="table table-striped table-bordered">
		    <thead>
		      <tr>
		        <th>ID</th>
		        <th>Subject Code</th>
		        <th>Subject Name</th>
		        <th>Session</th>
		        <th>Semester</th>
		        <th>Branch</th>
		      </tr>
		    </thead>
		    <tbody>
		    <?php 
		        include('config.php');
		        $qry="SELECT * FROM `tbl_subject`";
		        $rows=mysqli_query($conn,$qry);
                               if ($rows->num_rows > 0) 
                               {
                                    while($data = $rows->fetch_assoc())
                                     {
                                     	?>
                                     	  <tr>
									        <td><?php echo $data['id']; ?></td>
									        <td><?php echo $data['sub_code']; ?></td>
									        <td><?php echo $data['sub_name']; ?></td>
									        <td><?php echo $data['session']; ?></td>
									        <td><?php echo $data['semester']; ?></td>
									        <td><?php echo $data['branch']; ?></td>
									      </tr>
                                     	<?php
                                     }
                                }   
            ?>                        	
		    </tbody>
		  </table>
		  </center>
	  </div>

 </div>
 <?php include('footer.php'); ?>

