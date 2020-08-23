<?php
session_start();
require_once("include/db.php");

$salt = "<?S87t^58VJX)%vx";

$int = "";

if(isset($_POST["s"]))
{
	$_SESSION["email"] = htmlentities($_POST['email']);
	foreach($_POST["interests"] as $i)
	{
		$int .= $i.",";
	}
	$f = htmlentities($_POST['fname']);
	$l = htmlentities($_POST['lname']);
	$a = htmlentities($_POST['age']);
	$em = htmlentities($_POST['email']);
	$pw = sha1($_POST['fname'].$salt);
	
    $stmt = $db->prepare('INSERT INTO users (fname, lname, age, email, passwd, interests) VALUES (:fname, :lname, :age, :email, :passwd, :interests)') ;
    $stmt->execute(array(
						':fname' => $f, 
						':lname'=> $l, 
						':age' => $a, 
						':email' => $em, 
						':passwd' => $pw, 
						':interests' => $int));
	unset($_POST);
	echo "<center><a href='donationAllocation.php'>Click here proceed to next step.</a></center>";
	die();
}

?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Select your Interests</title>
  <link rel="stylesheet" href="content/style.css">

</head>
<body>
  <center>
  <h1>Tell Us About Yourself</h1>
  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
    
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="" required><br><br>
    
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value=""><br><br>
    
    <label for="age">Age:</label><br>
  <input type="text" id="age" name="age" value="" required><br><br>
    
    <label for="email">Email:</label><br>
  <input type="text" id="email" name="email" value="" required><br><br>
    
 <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required>
   
    <p>Interests</p>
  <input type="checkbox" name="interests[]" value="animals" /> Animals
  <input type="checkbox" name="interests[]" value="arts" /> Arts
  <input type="checkbox" name="interests[]" value="culture" /> Culture<br>
  <input type="checkbox" name="interests[]" value="disability" /> Disability
  <input type="checkbox" name="interests[]" value="disasterrelief" /> Disaster Relief
  <input type="checkbox" name="interests[]" value="education" /> Education<br>
  <input type="checkbox" name="interests[]" value="equality" /> Equality
  <input type="checkbox" name="interests[]" value="healthcare" /> Healthcare
  <input type="checkbox" name="interests[]" value="mentalhealth" />Mental Health<br>
  <input type="checkbox" name="interests[]" value="poverty" /> Poverty
  <input type="checkbox" name="interests[]" value="relief" />Relief  
  <input type="checkbox" name="interests[]" value="other" />Other
  <center><input type="submit" value="SUBMIT" name="s"></center>
</form><br>
</center>
</body>
</html>