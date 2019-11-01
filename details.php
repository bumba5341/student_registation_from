



<?php

include 'db_connect.php';  // include the file 
mysqli_select_db($db,'IKMI') or die(mysqli_error($db));  // select the database named as IKMI

// collect all the value in php

$mobile_no=$_GET['mobile_no'];
$first_name=$_GET['first_name'];
//$data='five';
$stand=$_GET['stand'];


/*echo $mobile_no;
echo $first_name;
echo $stand;*/

   	if($stand=='V')
		$class='five';
   	else if($stand=='VI')
		$class='six';
	 else if($stand=='VII')
		$class='seven';
   	else if($stand=='VIII')
		$class='eigiht';
   	else if($stand=='IX')
		$class='nine';
	else if($stand=='X')
		$class='ten';
	else
		$class=$stand;

	$query="SELECT * FROM $class WHERE  mobile_no = $mobile_no AND first_name='$first_name'";

	$result=mysqli_query($db,$query) or die(mysqli_error($db));
	
	if(mysqli_num_rows($result)<=0)  // not a existence student . so he or she is a new student . For this the student must be  registered at first
		echo "You Are Not Register In Our School <br> Please Register Our From. ";
	else
	{

	$row=mysqli_fetch_assoc($result); // fetch the data in an associative array.

	$name= ucfirst($row['first_name']).' '.ucfirst($row['last_name']);  // concade first name and last neme with the first letter is caps
	$fathers_name=ucwords($row['father_name']);
	$mothers_name=ucwords($row['mother_name']);
	$address =$row['address'];
	$gender=$row['gender'];
	$stand=$row['standard'];
	$dob=$row['dob'];
	$last_markes=$row['last_markes'];
	$hobby=$row['hobby'];
	$doa=$row['date_of_addmit'];
	$mobile_no=$row['mobile_no'];
	$email_no=$row['email_no'];


// start the HTML portion.

// Show all the details in an existence student . The data which he entered at the time of register.

echo <<<ENDHTML  
<html>

<head>

<style>
 
 h3{
text-align:center;
font-size:30px;
margin-top:75px;
}

.php{

text-align:center;

}

.head{

text-align:right;
}

</style>

</head>

    <body>

		<h3  >    $name </h3>
		<h4 align="center"><em> Details</em></h4>
 <div style="text-align:center;">
	<table  cellspacing="2" cellpadding="2"style="width:70%;margin-left:auto;margin-right:auto;">
		<tr>
			<td class="head"><b> Father's Name : </b></td>
			<td class="php">$fathers_name</td>
		
			<td class="head"><b> Mother's Name :</b></td>
			<td class="php"> $mothers_name</td>
		</tr>

		<tr>
			<td class="head"><b> Address :</b></td>
			<td class="php">$address</td>
			<td class="head"><b>Gender :</b></td>
			<td class="php">$gender</td>
		</tr>

		<tr>
			<td class="head"><b>Standard : </b></td>
			<td class="php">$stand</td>
			<td class="head"><b>Date Of Birth :</td>
			<td class="php">$dob</td>
	</tr>

	<tr>
		<td class="head"><b>Last Markes :</b> </td>
		<td class="php">$last_markes %</td>
		<td class="head"><b>Hobby :</b></td>
		<td class="php">$hobby</td>
	</tr>

	<tr>
		<td class="head"><b>Date Of Admision :</b>
			<td class="php">$doa</td>
		<td class="head"><b>Mobile No: </b></td>
		<td class="php">$mobile_no</td>
	</tr>

	<tr>
		<td class="head"><b>Email No.</b></td>
		<td class="php"> $email_no </td>
	</tr>

	</table>

</div>
   </body>
</html>

	
ENDHTML;

}


?>


