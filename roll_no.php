<html>
<head>

<title> Roll No Page </title>
<style>

body{

background-image: url("images2.jpeg");
  background-repeat: no-repeat;
background-size: cover;
 background-position: center;
//color:white;
  //opacity: 0.5;


}

.routine{

text-align:center;
margin-top:100px;

}

.roll_no
{
font-size:50px;
//color:#FFFF99;

}

a{
font-family:'Exo 2';
font-size:20px;
color:#1FC70F;
display:inline-block;
border: 1px solid  #1FC70F;
border-radius:5px;

line-height:3em;
padding-left:2em;
padding-right:2em;
}

</style>

</head>

<body>

<?php


include 'db_connect.php';  // Connect with the local server. 
mysqli_select_db($db,'IKMI') or die(mysqli_error($db));  // select the database named as IKMI

$mobile_no=$_GET['mobile_no'];
$first_nam=$_GET['first_name'];
$data='five';
$stand=$_GET['standard'];
//echo $mobile_no;
//echo $first_name;

//echo $stand;
	//$query= "SELECT  five_rollno  FROM  five  WHERE  mobile_no =  ".$mobile_no;  //.  " AND   first_name= ".$first_name;


 if($stand=='V')
   {

	$query= "SELECT  rollno  FROM  five  WHERE   first_name=  '$first_nam' AND  mobile_no =  $mobile_no ";   // return the roll no. 
			$result=mysqli_query($db,$query) or die ( 'Your error'.mysqli_error($db));
			
			$row=mysqli_fetch_assoc($result);
			$roll_no=$row['rollno'];

  // show the roll no to the student. 
	echo  <<< ENDHTML
  
   
	
		<div class= "routine">
 		  <p class="roll_no" >Your <b>Roll No </b>Is : $roll_no </p>
		<p  > Are You want To See Your Class Routine ? </p>
		<a href="five_routin.html"> CLICK HERE </a>
		</div>
ENDHTML;

  }

else if($stand=='VI')
   {

	$query= "SELECT  rollno  FROM  six  WHERE   first_name=  '$first_nam' AND  mobile_no =  $mobile_no ";   //.  $first_nam;
			$result=mysqli_query($db,$query) or die ( 'Your error'.mysqli_error($db));
			
			$row=mysqli_fetch_assoc($result);
			$roll_no=$row['rollno'];


	echo  <<< ENDHTML

		<div class= "routine">
 		  <p class="roll_no"> Your <b> Roll No </b> Is : $roll_no </p>
		<p > Are You want To See Your Class Routine ? </p>
		<a href="six_routin.html"> Click Here </a>
		</div>
ENDHTML;

  }


else if($stand=='VII')
   {

	$query= "SELECT  rollno  FROM  seven  WHERE   first_name=  '$first_nam' AND  mobile_no =  $mobile_no ";   //.  $first_nam;
			$result=mysqli_query($db,$query) or die ( 'Your error'.mysqli_error($db));
			
			$row=mysqli_fetch_assoc($result);
			$roll_no=$row['rollno'];


	echo  <<< ENDHTML

		<div class= "routine">
 		  <p class="roll_no"> Your <b>Roll No </b>Is : .$roll_no </p>
		<p > Are You want To See Your Class Routine ? </p>
		<a href="seven_routin.html"> Click Here </a>
		</div>
ENDHTML;

  }


else if($stand=='VIII')
   {

	$query= "SELECT  rollno  FROM  eigiht  WHERE   first_name=  '$first_nam' AND  mobile_no =  $mobile_no ";   //.  $first_nam;
			$result=mysqli_query($db,$query) or die ( 'Your error'.mysqli_error($db));
			
			$row=mysqli_fetch_assoc($result);
			$roll_no=$row['rollno'];

	echo  <<< ENDHTML

		<div class= "routine">
 		  <p class="roll_no"> Your <b> Roll No </b> Is : .$roll_no </p>
		<p > Are You want To See Your Class Routine ? </p>
		<a href="eigiht_routin.html"> Click Here </a>
		</div>
ENDHTML;

  }


else if($stand=='IX')
   {

	$query= "SELECT  rollno  FROM  nine  WHERE   first_name=  '$first_nam' AND  mobile_no =  $mobile_no ";   //.  $first_nam;
			$result=mysqli_query($db,$query) or die ( 'Your error'.mysqli_error($db));
			
			$row=mysqli_fetch_assoc($result);
			$roll_no=$row['rollno'];

	echo  <<< ENDHTML

		<div class= "routine">
 		  <p class="roll_no"> Your  <b>Roll No  </b>Is : .$roll_no </p>
		<p  > Are You want To See Your Class Routine ? </p>
		<a href="nine_routin.html"> Click Here </a>
		</div>
ENDHTML;

  }

else
   {

	$query= "SELECT  rollno  FROM  ten  WHERE   first_name=  '$first_nam' AND  mobile_no =  $mobile_no ";   //.  $first_nam;
			$result=mysqli_query($db,$query) or die ( 'Your error'.mysqli_error($db));
			
			$row=mysqli_fetch_assoc($result);
			$roll_no=$row['rollno'];

	echo  <<< ENDHTML

		<div class= "routine">
 		  <p class="roll_no"> Your <b> Roll No  </b>Is : $roll_no </p>
		<p > Are You want To See Your Class Routine ? </p>
		<a href="ten_routin.html"> Click Here </a>
		</div>
ENDHTML;

  }





?>
<body>
</html>
