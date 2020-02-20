<?php 
include('header.php'); 
include('config.php');
$msg = '';
if(isset($_POST['submit']))
{
	$uni_id=uniqid();
	$faculty_name=$_POST['facultyName'];
	$department_name=$_POST['department_name'];
	$join_date=$_POST['join_date'];
	$total_expe=$_POST['total_expe'];
	$mob_no=$_POST['mob_no'];
	$email_id=$_POST['email_id'];

	$sql = "INSERT INTO `tbl_staff`(`staff_id`, `faculty_name`, `mob_no`, `email_id`, `dept_name`, `date_of_joining`, `total_experience`) VALUES('$uni_id','$faculty_name',$mob_no,'$email_id','$department_name','$join_date',$total_expe);";

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
		<center><h2><u>ADD FACULTY</u></h2></center>
	</div>
	<hr>
   <form method="post" action="addFaculty.php">
   <div class="col-md-8 col-md-offset-2" style="margin-top: 10px;border:0.1px solid #d5dbd6;padding: 10px;">
   	          <center><h4><u><?php echo $msg; ?></u></h4></center>     
			<div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="inputName">Faculty Name</label>
				      <input type="text" class="form-control" name="facultyName" placeholder="ENTER NAME" required>
				    </div>
				    <div class="form-group col-md-6">
				      <label for="inputDeptName">Department Name</label>
				      <select class="form-control" name="department_name" required>
				      	  <option value="cse">CSE</option>
				      	  <option value="me">ME</option>
				      	  <option value="ec">EC</option>
				      	  <option value="ex">EX</option>
				      	  <option value="ce">CE</option>
				      </select> 
				    </div>
			  </div>

			  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="inputJoinDate">Date Of Joining</label>
				      <input type="date" class="form-control" name="join_date" required>
				    </div>
				    <div class="form-group col-md-6">
				         <label for="inputExperience">Total Teaching Experience</label>
					     <select class="form-control" name="total_expe" required>
					      	  <option value="1">1</option>
					      	  <option value="2">2</option>
					      	  <option value="3">3</option>
					      	  <option value="4">4</option>
					      	  <option value="5">5</option>
					      	  <option value="6">6</option>
					      	  <option value="7">7</option>
					      	  <option value="8">8</option>
					      </select> 
				    </div>
			  </div>
			   <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="inputMoNum">Mobile No.</label>
				      <input type="number" name="mob_no" class="form-control" required>
				    </div>
				    <div class="form-group col-md-6">
				         <label for="inputEmailID">Email ID</label>
					     <input type="email" name="email_id" class="form-control" placeholder="ENTER EMAIL" required>
				    </div>
			  </div>
			<center><input type="submit" class="btn btn-lg btn-primary" name="submit" value="Submit Info"></center>
        </div>	
        </div>		
    </form>

	<div class="col-md-9 col-md-offset-2" style="margin-top: 20px;">
		    <center>
		    <table class="table table-striped table-bordered">
		    <thead>
		      <tr>
		        <th>ID</th>
		        <th>Faculty Name</th>
		        <th>Mobile no</th>
		        <th>Email ID</th>
		        <th>Department Name</th>
		        <th>Date of Joining</th>
		        <th>Total Experience</th>
		      </tr>
		    </thead>
		    <tbody>
		    <?php 
		        include('config.php');
		        $qry="SELECT * FROM `tbl_staff`";
		        $rows=mysqli_query($conn,$qry);
                               if ($rows->num_rows > 0) 
                               {
                                    while($data = $rows->fetch_assoc())
                                     {
                                     	?>
                                     	  <tr>
									        <td><?php echo $data['id']; ?></td>
									        <td><?php echo $data['faculty_name']; ?></td>
									        <td><?php echo $data['mob_no']; ?></td>
									        <td><?php echo $data['email_id']; ?></td>
									        <td><?php echo $data['dept_name']; ?></td>
									        <td><?php echo $data['date_of_joining']; ?></td>
									        <td><?php echo $data['total_experience']; ?></td>
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

