
<?php
$host = "localhost";
$username = "root";
$password = "";


try 
{
    $conn = new PDO("mysql:localhost=$host;dbname=plasmadetails", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
// FORM SUBMITTED DATA CAN ACCESSED BY:
// 1. $_REQUEST : CAN BE USED FOR BOTH get AND post METHOD
// 2. $_POST : CAN BE USED ONLY FOR post METHOD
// 3. $_GET : CAN BE USED ONLY FOR get METHOD

if(isset($_POST['save_contact']))
{
	//print_r($_POST);
	$sql = "INSERT INTO donor(name, Address, user_email, number, BloodGroup, gender, date ) VALUES('".addslashes($_POST['name'])."', '".addslashes($_POST['Address'])."', '".addslashes($_POST['user_email'])."', '".addslashes($_POST['number'])."', '".addslashes($_POST['BloodGroup'])."', '".addslashes($_POST['gender'])."', '".addslashes($_POST['date'])."')";
	$conn->query($sql);
	$echo="succesfully Registered!";
}   

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donors Form</title>
    <link rel="stylesheet" href="donorform.css">




    

    

</head>
<body>



<!-- head - Googlefonts link -->

<div id="outside">
<form id="survey-form" action="Result.php" method="POST">
  <h1 id="title">Regestration Form for Donors</h1>


  <p id="description"><b>Note:</b> Form is to be filled by those people who are recovered in past 15 Days and they are now healthy.</p>
  
  <!-- ------------------Personal Details---------------------------- -->
  <fieldset>
    <!-- groups of widgets that share the same purpose, for styling and semantic purposes -->
    <legend>Personal Details</legend>
    <!-- formally describes the purpose of the fieldset it is included inside. -->
    <div>
      <label id="name-label" for="name">Donors Name:</label>
      <input type="text" required id="name" name="name" placeholder="Enter name here">   </div>
    <div>
      <label for="address-label">Address:</label>
      <input type="Address" id="address" name="Address" placeholder="Enter address here">   </div>
    <div>
      <label id="email-label" for="Email">Email:</label>
      <input type="email" required id="email" name="user_email" placeholder="Enter email here">   </div>
    <div>
      <label id="number-label" for="phone">Phone Number:</label>
      <input type="number" id="number" name="number" placeholder="Enter 10 digit number">  </div>
    <div>
      <label id="iq-label" for="iq">BloodGroup:</label>
      <input type="text" id="iq" name="BloodGroup" placeholder="Enter BloodGroup here">   </div>

    <!-- ------------------Radio Buttons-------------------------------- -->
    <div>
      <label for="Gender">Gender</label>
      <p>
        <input type="radio" name="gender" value="male" checked> Male<br>
        <input type="radio" name="gender" value="female"> Female<br>
        <input type="radio" name="gender" value="other"> Other
      </p>
    </div>
    <label for="date-label">Date of Recovery</label>
    <input type="date" name="date">
  
  </fieldset>
  <!-- ------------------Checkboxes-------------------------------- -->
  
  
  <!-- -----------------Dropdown menus--------------------------------- -->
  
 

  <!-- --------------------Text Areas------------------------------ -->
  <div id="submitbutton">
    <button type="submit" id="submit" name="save_contact" >SUBMIT FORM</button>   </div>

</form>
  </div>

    
    
    
</body>
</html>

