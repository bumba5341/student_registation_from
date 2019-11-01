<!-- This file for creating the database  -->

<?php

include 'db_connect.php';

$query='CREATE  DATABASE IF NOT EXISTS IKMI';

mysqli_query($db,$query) or die(mysqli_error($db));

mysqli_select_db($db,'IKMI') or die(mysqli_error($db)); 

// Creating a table named as five 

$query= 'CREATE TABLE IF NOT EXISTS five (
		rollno 		INTEGER UNSIGNED NOT NULL AUTO_INCREMENT 	PRIMARY KEY,
		first_name		VARCHAR(20)      NOT NULL,
		last_name     	 VARCHAR(20)   NOT NULL,
		father_name  	VARCHAR(20)    NOT NULL,
		mother_name	VARCHAR(20)    NOT NULL,
		address         	VARCHAR(200)     NOT NULL,
		gender          	VARCHAR(5)       NOT NULL,
		standard       	 VARCHAR(3)       NOT NULL,
		dob             		varchar(20)      NOT NULL,
		last_markes    	 TINYINT          NOT NULL,
		hobby           	VARCHAR(15),
		date_of_addmit  VARCHAR(40)       NOT NULL,
		mobile_no      	 VARCHAR(45)      NOT NULL,
		email_no        	VARCHAR(45)      ) ';

mysqli_query($db,$query) or die(mysqli_error($db));

// Creating a table named as six

$query= 'CREATE TABLE six (
		rollno 	INTEGER UNSIGNED NOT NULL AUTO_INCREMENT 	PRIMARY KEY,
		first_name	VARCHAR(20)      NOT NULL,
		last_name       VARCHAR(20)      NOT NULL,
		father_name  	VARCHAR(20)    NOT NULL,
		mother_name	VARCHAR(20)    NOT NULL,
		address         VARCHAR(200)     NOT NULL,
		gender          VARCHAR(5)       NOT NULL,
		standard        VARCHAR(3)       NOT NULL,
		dob             varchar(20)      NOT NULL,
		last_markes     TINYINT          NOT NULL,
		hobby           VARCHAR(15),
		date_of_addmit  VARCHAR(40)       NOT NULL,
		mobile_no       VARCHAR(45)      NOT NULL,
		email_no        VARCHAR(45)      ) ';

mysqli_query($db,$query) or die(mysqli_error($db));

// Creating a table named as seven 

$query= 'CREATE TABLE seven (
		rollno 	INTEGER UNSIGNED NOT NULL AUTO_INCREMENT 	PRIMARY KEY,
		first_name	VARCHAR(20)      NOT NULL,
		last_name       VARCHAR(20)      NOT NULL,
		father_name  	VARCHAR(20)    NOT NULL,
		mother_name	VARCHAR(20)    NOT NULL,
		address         VARCHAR(200)     NOT NULL,
		gender          VARCHAR(5)       NOT NULL,
		standard        VARCHAR(3)       NOT NULL,
		dob             varchar(40)      NOT NULL,
		last_markes     TINYINT          NOT NULL,
		hobby           VARCHAR(15),
		date_of_addmit  VARCHAR(20)       NOT NULL,
		mobile_no       VARCHAR(45)      NOT NULL,
		email_no        VARCHAR(45)      ) ';

mysqli_query($db,$query) or die(mysqli_error($db));

// Creating a table named as eight

$query= 'CREATE TABLE eigiht (
		rollno 	INTEGER UNSIGNED NOT NULL AUTO_INCREMENT 	PRIMARY KEY,
		first_name	VARCHAR(20)      NOT NULL,
		last_name       VARCHAR(20)      NOT NULL,
		father_name  	VARCHAR(20)    NOT NULL,
		mother_name	VARCHAR(20)    NOT NULL,
		address         VARCHAR(200)     NOT NULL,
		gender          VARCHAR(5)       NOT NULL,
		standard        VARCHAR(3)       NOT NULL,
		dob             varchar(20)      NOT NULL,
		last_markes     TINYINT          NOT NULL,
		hobby           VARCHAR(15),
		date_of_addmit  VARCHAR(40)       NOT NULL,
		mobile_no       VARCHAR(45)      NOT NULL,
		email_no        VARCHAR(45)      ) ';

mysqli_query($db,$query) or die(mysqli_error($db));


// Creating a table named as nine


$query= 'CREATE TABLE nine (
		rollno 	INTEGER UNSIGNED NOT NULL AUTO_INCREMENT 	PRIMARY KEY,
		first_name	VARCHAR(20)      NOT NULL,
		last_name       VARCHAR(20)      NOT NULL,
		father_name  	VARCHAR(20)    NOT NULL,
		mother_name	VARCHAR(20)    NOT NULL,
		address         VARCHAR(200)     NOT NULL,
		gender          VARCHAR(5)       NOT NULL,
		standard        VARCHAR(3)       NOT NULL,
		dob             varchar(20)      NOT NULL,
		last_markes     TINYINT          NOT NULL,
		hobby           VARCHAR(15),
		date_of_addmit  VARCHAR(40)       NOT NULL,
		mobile_no       VARCHAR(45)      NOT NULL,
		email_no        VARCHAR(45)      ) ';

mysqli_query($db,$query) or die(mysqli_error($db));

// Creating a table named as ten

$query= 'CREATE TABLE ten (
		rollno 	INTEGER UNSIGNED NOT NULL AUTO_INCREMENT 	PRIMARY KEY,
		first_name	VARCHAR(20)      NOT NULL,
		last_name       VARCHAR(20)      NOT NULL,
		father_name  	VARCHAR(20)    NOT NULL,
		mother_name	VARCHAR(20)    NOT NULL,
		address         VARCHAR(200)     NOT NULL,
		gender          VARCHAR(5)       NOT NULL,
		standard        VARCHAR(3)       NOT NULL,
		dob             varchar(20)      NOT NULL,
		last_markes     TINYINT          NOT NULL,
		hobby           VARCHAR(15),
		date_of_addmit  VARCHAR(40)       NOT NULL,
		mobile_no       VARCHAR(45)      NOT NULL,
		email_no        VARCHAR(45)      ) ';

mysqli_query($db,$query) or die(mysqli_error($db));

?>
