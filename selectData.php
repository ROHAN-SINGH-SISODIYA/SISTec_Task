<?php
include('config.php');
$data['status']='failed';
if (!empty($_POST) && !empty($_POST['eid']) && !empty($_POST['custID']))
{
    $user=$_POST['custID'];
  	$eid=$_POST['eid']; 	
  	foreach($eid as $key) 
	{
		 $qry="SELECT allocation FROM `tbl_choice_fill` WHERE  choice_filled_by='$user' AND scode='$key' AND session='Jul-Dec 2017'";
         $allocation=mysqli_query($conn,$qry);
         $data = $allocation->fetch_assoc();
         // var_dump($data);exit();
         if($data['allocation']==='y')
         {
         	$qry="UPDATE `tbl_choice_fill` SET `allocation`='no' WHERE choice_filled_by='$user' AND scode='$key' AND session='Jul-Dec 2017'";
             mysqli_query($conn,$qry);
         }
         else
         {
         	 $qry="UPDATE `tbl_choice_fill` SET `allocation`='yes' WHERE choice_filled_by='$user' AND scode='$key' AND session='Jul-Dec 2017'";
             mysqli_query($conn,$qry);
         }
         
	} 
    $data['status']='success';
}
echo json_encode($data);die; 
?>