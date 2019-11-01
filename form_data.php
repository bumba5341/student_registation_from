<html>
<head>
<style>
.display
{
   color:red;
   text-align:center;
   margin-top:100px;
 font-size:40px;
width:80%;
margin-left:auto;
margin-right:auto;


}

.are{
text-align:center;
font-size:20px;


}

.click{

text-align:center;
}


</style>
</head>
<body>

<?php
 


include 'db_connect.php';  // include the file.
mysqli_select_db($db,'IKMI') or die(mysqli_error($db)); // select the database named as IKMI
	
date_default_timezone_set("Asia/Kolkata");  // Set the Time Zone.
$date_of_admit=date("d/m/Y ,  h:i:s a"); // store the  register time. 
//echo $date_of_admit;

  $first_name=' ';
   $last_name=' ';
   $father_name=' ';
   $mother_name=' ';
   $address=' ';
   $gender=' ';
   $standard=' ';
    $dov=' ';
    $last_markes=' ';
     $mobile_no=' ';
     $hobby=' Null';
  $email=' Null';
   
   

		

  //  Checking the first name.

	if(empty($_POST["firstname"]))
   {
	 die( ' First name is required.');	
 
    }
	else
		$first_name=ucfirst($_POST["firstname"]);


 // checking the last name.

	if(empty($_POST["lastname"]))
	{
		die( '  Last name is required.');
	}
			
	else
		$last_name=ucfirst($_POST["lastname"]);

// checking the Father's name.

	if(empty($_POST["father's_name"]))
		die( " Father's name is required.");	
	else
		$father_name=ucwords($_POST["father's_name"]);
	
	// checking the mother's name. 

	if(empty($_POST["mother's_name"]))
		die( " Mother''s name is required.");	
	else
		$mother_name=ucwords($_POST["mother's_name"]);

 // checking the address. 

	if(empty($_POST["address"]))
		die( " Address  is required.");	
	else
		$address=$_POST["address"];

// checking the gender.

	if(empty($_POST["gender"]))
		die( " Gender   is required.");	
	else
		{
			$gender=$_POST["gender"];
		}

// checking the standard. 

	if(empty($_POST["standard"]))
		die(" Standard  is required.");	
	else
		$standard=$_POST["standard"];

// checking the DOB.

	if(empty($_POST["dob"]))
		die( " Date of Birth   is required.");	
	else
		$dov=$_POST["dob"];

// checking the last class markes. 
	
	if(empty($_POST["lastmarkes"]))
		die(" Last Marks   is required.");	
	else
		$last_markes=$_POST["lastmarkes"];

// checking the mobile no. 

	if(empty($_POST["mobile_no"]))
		die( " Mobile no   is required.");	
	else
		$mobile_no=$_POST["mobile_no"];

     // hobby and email not mandory 
	 
    $hobby=$_POST["hobby"];
    $email=$_POST["email"];

if($standard=='V')
	   {
		   // check first the student is already registered or a new student.
		
		$query="SELECT   *  FROM five  WHERE   first_name=  '$first_name' AND  mobile_no =  $mobile_no ";  
		$result = mysqli_query($db,$query) or die (mysqli_error($db));
		$rows=mysqli_num_rows($result);

		if($rows>0)  // if query returns  at least 1 row means the student is existence student . so the data not entered in database. 
		   {
			echo '  <p class="display"> Already Your  Data Entered. </p>';
			echo '<p class=" are">To View Details</p>';
			echo "<a href ='details.php?mobile_no= $mobile_no & first_name=$first_name & stand=$standard '>";
			echo '<p class="click">Click Here.</p>';
			echo '</a>'; 
		   }
		else    // If the student is new,the data is stored in database.  
		{

			$query="INSERT INTO five(
					    first_name,last_name ,father_name,mother_name,address,gender,standard,dob,last_markes,hobby,date_of_addmit,mobile_no,email_no)
					VALUES 
						('$first_name', '$last_name' , '$father_name' , ' $mother_name' ,  '$address' , ' $gender' , ' $standard'  , '$dov'  ,  '$last_markes'  ,  ' $hobby' ,  
							 '$date_of_admit'  ,  ' $mobile_no'  ,'$email' )  ";
	
			mysqli_query($db,$query) or die (mysqli_error($db));

// if the data successfully entred he or she will get a unique class roll no.

			echo'<p  class="display">Your Registration is  Successfully Completed. </p>';
			echo '<p class="are">To See Your Roll No .</p>';
			echo "<a href ='roll_no.php?mobile_no= $mobile_no & first_name=$first_name& standard=$standard'>";
			echo '<p class="click">Click here. </p>';
			echo '</a>'; 
		}

   	   }

else if($standard=='VI')
	   {
		// check first the student is already registered or a new student.
		
		$query="SELECT   *  FROM six  WHERE   first_name=  '$first_name' AND  mobile_no =  $mobile_no ";
		$result = mysqli_query($db,$query) or die (mysqli_error($db));
		$rows=mysqli_num_rows($result);

		if($rows>0) // if query returns  at least 1 row means the student is existence student . so the data not entered in database.
			{
				echo '  <p class="display"> Already Your  Data Entered. </p> ';
				echo '<p class=" are">To View Details </p>';
				echo "<a href ='details.php?mobile_no= $mobile_no & first_name=$first_name & stand=$standard '>";
				echo '<p class="click">Click Here.</p>';
				echo '</a>'; 
			}
		else  // If the student is new,the data is stored in database.  
		{

			$query="INSERT INTO six(
					    first_name,last_name ,father_name,mother_name,address,gender,standard,dob,last_markes,hobby,date_of_addmit,mobile_no,email_no)
					VALUES 
						('$first_name', '$last_name' , '$father_name' , ' $mother_name' ,  '$address' , ' $gender' , ' $standard'  , '$dov'  ,  '$last_markes'  ,  ' $hobby' ,  
							 '$date_of_admit'  ,  ' $mobile_no'  ,'$email' )  ";
	
			mysqli_query($db,$query) or die (mysqli_error($db));
			
			// if the data successfully entred he or she will get a unique class roll no.
 
			echo'<p class="display">Your Registration is  Successfully Completed.</p> ';
			echo '<p class="are">To See Your Roll No .</p>';
			echo "<a href ='roll_no.php?mobile_no= $mobile_no & first_name=$first_name & standard=$standard'>";
			echo '<p class="click">Click Here.</p>';
			echo '</a>'; 
		}

   	   }

else if($standard=='VII')  
	

	   {
		   // check first the student is already registered or a new student.
		
		$query="SELECT   *  FROM seven  WHERE   first_name=  '$first_name' AND  mobile_no =  $mobile_no ";
		$result = mysqli_query($db,$query) or die (mysqli_error($db));
		$rows=mysqli_num_rows($result);

		if($rows>0) // if query returns  at least 1 row means the student is existence student . so the data not entered in database.
			{
				echo ' <p class="display"> Already Your  Data Entered.  </p>';
				echo '<p class=" are">To View Details </p>';
				echo "<a href ='details.php?mobile_no= $mobile_no & first_name=$first_name & stand=$standard '>";
				echo '<p class="click">Click Here.</p>';
				echo '</a>'; 
			}
		else // If the student is new,the data is stored in database.  
		{

			$query="INSERT INTO seven(
					    first_name,last_name ,father_name,mother_name,address,gender,standard,dob,last_markes,hobby,date_of_addmit,mobile_no,email_no)
					VALUES 
						('$first_name', '$last_name' , '$father_name' , ' $mother_name' ,  '$address' , ' $gender' , ' $standard'  , '$dov'  ,  '$last_markes'  ,  ' $hobby' ,  
							 '$date_of_admit'  ,  ' $mobile_no'  ,'$email' )  ";
	
			mysqli_query($db,$query) or die (mysqli_error($db));
			
			// if the data successfully entred he or she will get a unique class roll no.

			echo'<p class="display">Your Registration is  Successfully Completed. </p>';
			echo '<p class="are">To See Your Roll No .</p>';
			echo "<a href ='roll_no.php?mobile_no= $mobile_no & first_name=$first_name & standard=$standard'>";
			echo '<p class="click">Click Here.</p>';
			echo '</a>'; 
		}

   	   }
else if($standard=='VIII')
	   {
		
		// check first the student is already registered or a new student.
		
		$query="SELECT   *  FROM  eigiht  WHERE   first_name=  '$first_name' AND  mobile_no =  $mobile_no ";
		$result = mysqli_query($db,$query) or die (mysqli_error($db));
		$rows=mysqli_num_rows($result);

		if($rows>0) // if query returns  at least 1 row means the student is existence student . so the data not entered in database.
		  {
			echo ' <p class="display"> Already Your  Data Entered. </p> ';
			echo '<p class=" are"> To See Your Roll No . </p>';
			echo "<a href ='details.php?mobile_no= $mobile_no & first_name=$first_name & stand=$standard '>";
			echo '<p class="click">Click Here.</p>';
			echo '</a>'; 
		  }
		else // If the student is new,the data is stored in database.  
		{

			$query="INSERT INTO eigiht(
					    first_name,last_name ,father_name,mother_name,address,gender,standard,dob,last_markes,hobby,date_of_addmit,mobile_no,email_no)
					VALUES 
						('$first_name', '$last_name' , '$father_name' , ' $mother_name' ,  '$address' , ' $gender' , ' $standard'  , '$dov'  ,  '$last_markes'  ,  ' $hobby' ,  
							 '$date_of_admit'  ,  ' $mobile_no'  ,'$email' )  ";
	
			mysqli_query($db,$query) or die (mysqli_error($db));
			
			// if the data successfully entred he or she will get a unique class roll no.

			echo'<p class="display">Your Registration is  Successfully Completed. ';
			echo '<p class="are">To See Your Roll No .</p>';
			echo "<a href ='roll_no.php?mobile_no= $mobile_no & first_name=$first_name& standard=$standard'>";
			echo '<p class="click">Click Here.</p>';
			echo '</a>'; 
		}

   	   }
else if($standard=='IX')
	   {
		   
		   // check first the student is already registered or a new student.
		
		$query="SELECT   *  FROM nine  WHERE   first_name=  '$first_name' AND  mobile_no =  $mobile_no ";
		$result = mysqli_query($db,$query) or die (mysqli_error($db));
		$rows=mysqli_num_rows($result);

		if($rows>0) // if query returns  at least 1 row means the student is existence student . so the data not entered in database.
		  {
			echo ' <p class="display"> Already   Your  Data Entered.</p> ';
			echo '<p class=" are">To View Details </p>';
			echo "<a href ='details.php?mobile_no= $mobile_no & first_name=$first_name & stand=$standard '>";
			echo '<p class="click">Click Here.</p>';
			echo '</a>'; 		
		  }
		else // If the student is new,the data is stored in database.  
		{

			$query="INSERT INTO nine(
					    first_name,last_name ,father_name,mother_name,address,gender,standard,dob,last_markes,hobby,date_of_addmit,mobile_no,email_no)
					VALUES 
						('$first_name', '$last_name' , '$father_name' , ' $mother_name' ,  '$address' , ' $gender' , ' $standard'  , '$dov'  ,  '$last_markes'  ,  ' $hobby' ,  
							 '$date_of_admit'  ,  ' $mobile_no'  ,'$email' )  ";
	
			mysqli_query($db,$query) or die (mysqli_error($db));
			
			// if the data successfully entred he or she will get a unique class roll no.

			echo'<p class="display">Your Registration is  Successfully Completed. ';
			echo '<p class="are">To See Your Roll No .</p>';
			echo "<a href ='roll_no.php?mobile_no= $mobile_no & first_name=$first_name & standard=$standard'>";
			echo '<p class="click">Click Here.</p>';
			echo '</a>'; 
		}

   	   }

else  if($standard=='X')
	   {
		
		// check first the student is already registered or a new student.
		
		$query="SELECT   *  FROM ten  WHERE   first_name=  '$first_name' AND  mobile_no =  $mobile_no ";
		$result = mysqli_query($db,$query) or die (mysqli_error($db));
		$rows=mysqli_num_rows($result);
		if($rows>0) // if query returns  at least 1 row means the student is existence student . so the data not entered in database.
		  {
			echo ' <p class="display"> Already Your  Data Entered. </p> ';
			echo '<p class=" are">To View Details </p>';
			echo "<a href ='details.php?mobile_no= $mobile_no & first_name=$first_name & stand=$standard '>";
			echo '<p class="click">Click Here.</p>';
			echo '</a>'; 
		  }
		else  // If the student is new,the data is stored in database.  
		{ 

			$query="INSERT INTO ten(
					    first_name,last_name ,father_name,mother_name,address,gender,standard,dob,last_markes,hobby,date_of_addmit,mobile_no,email_no)
					VALUES 
						('$first_name', '$last_name' , '$father_name' , ' $mother_name' ,  '$address' , ' $gender' , ' $standard'  , '$dov'  ,  '$last_markes'  ,  ' $hobby' ,  
							 '$date_of_admit'  ,  ' $mobile_no'  ,'$email' )  ";
	
			mysqli_query($db,$query) or die (mysqli_error($db));
			
			// if the data successfully entred he or she will get a unique class roll no.

			echo'<p class="display">Your Registration is  Successfully Completed. </p>';
			echo '<p class="are">To See Your Roll No .</p>';
			echo "<a href ='roll_no.php?mobile_no= $mobile_no & first_name=$first_name & standard=$standard'>";
			echo '<p class="click">Click Here.</p>';
			echo '</a>'; 
		}

   	   }




?>
</body>
</html>

