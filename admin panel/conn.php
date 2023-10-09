<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$database = "law";

$conn=mysqli_connect($server_name,$user_name,$password,$database);

if(!$conn){
    die("connection failed".mysqli_connect_error());
}
else{
    // echo("connction created successfully");
}


// create database
// $sql = "create database law";
// if($conn->query($sql)){
//     echo "database! ";
// }
// else{
//     echo "database failed";
// }
// $sql = "create table criminal(
//     id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
//     Name varchar(255),
//     type varchar(255),
//     bstatus varchar(255),
//     bwork varchar(255),
//     beducation varchar(255),
//     btel varchar(255),
//     email varchar(255),
//     Image varchar(255)
// )";
// if($conn->query($sql)){
//     echo "table created";
// }
// else{
//     echo "table failed";
// }

// $sql = "CREATE TABLE user_registration(
//     id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     name varchar(255),
//     email varchar(255),
//     gender varchar(255),
//     address varchar(255),
//     city varchar(255),
//     tel varchar(255)
// )";
// if($conn->query($sql)){
//     echo "table created";
// }

//login table
// $sql = "Create Table user_log_sign( 
//     Id int not null auto_Increment Primary Key,
//     Username varchar(300) not null,
//     Email varchar(300) not null,
//     Password varchar(300) not null 
//     )";
//     if($conn->query($sql)){
//         echo "table created";
//     }

    
// $sql = "create table criminalLawyer(
//     id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
//     Name varchar(255),
//     type varchar(255),
//     bstatus varchar(255),
//     bwork varchar(255),
//     beducation varchar(255),
//     btel varchar(255),
//     email varchar(255),
//     Image varchar(255)
// )";
// if($conn->query($sql)){
//     echo "table created";
// }
// else{
//     echo "table failed";
// }

// $sql ="CREATE TABLE `lawyerreg` (
//     `id` int(255) NOT NULL,
//     `Image` varchar(255) NOT NULL,
//     `name` varchar(255) NOT NULL,
//     `DOB` date NOT NULL,
//     `f_hname` varchar(255) NOT NULL,
//     `nationality` varchar(255) NOT NULL,
//     `enroll_date` date NOT NULL,
//     `type` varchar(255) NOT NULL,
//     `status` varchar(255) NOT NULL,
//     `work` varchar(255) NOT NULL,
//     `education` varchar(255) NOT NULL,
//     `certificate1` varchar(255),
//     `certificate2` varchar(255),
//     `further_edu` varchar(300) NOT NULL,
//     `fee_voucher` varchar(255),
//     `contact` int(11) NOT NULL,
//     `email` varchar(255) NOT NULL,
//     `city` varchar(255) NOT NULL,
//     `cnic_no` int(20) NOT NULL
//   )";
//   if($conn->query($sql)){
//     echo "table created";
//   }
  
//create table affidavit
// $sql = "CREATE TABLE AFFIDAVIT (
//     id INT PRIMARY KEY AUTO_INCREMENT,
//     date1 VARCHAR(255),
//     affiant_name VARCHAR(255),
//     age VARCHAR(255),
//     email VARCHAR(255),
//     address VARCHAR(255),
//     statement VARCHAR(255),
//     city VARCHAR(255),
//     country VARCHAR(255),
//     date_of_submission_to_lawyer VARCHAR(255),
//     country1 VARCHAR(255),
//     affiants_signature VARCHAR(255),
//     lawyers_signature VARCHAR(255),
//     date_of_submission_to_court VARCHAR(255)
// )";
// if($conn->query($sql)){
// echo "table created";
// } 
// else{
//     echo "table failed";
// }

// $sql ="CREATE TABLE `lawyerregistration` (
//     `id` int(255) NOT NULL,
//     `Image` varchar(255) NOT NULL,
//     `name` varchar(255) NOT NULL,
//     `DOB` date NOT NULL,
//     `f_hname` varchar(255) NOT NULL,
//     `nationality` varchar(255) NOT NULL,
//     `enroll_date` date NOT NULL,
//     `type` varchar(255) NOT NULL,
//     `status` varchar(255) NOT NULL,
//     `work` varchar(255) NOT NULL,
//     `education` varchar(255) NOT NULL,
//     `certificate1` varchar(255),
//     `certificate2` varchar(255),
//     `further_edu` varchar(300) NOT NULL,
//     `fee_voucher` varchar(255),
//     `contact` int(11) NOT NULL,
//     `email` varchar(255) NOT NULL,
//     `city` varchar(255) NOT NULL,
//     `cnic_no` int(20) NOT NULL
//   )";
//   if($conn->query($sql)){
//     echo "table created";
//   }

?>
