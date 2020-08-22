<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<style type="text/css">

body {
  background-color: #ff726f;
}

input[type=text], select {
  width: 20%;
  padding: 6px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=password], select {
  width: 20%;
  padding: 6px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 10%;
  background-color: #FFFF66;
  color: blacke;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color:#7CFC00;
}

</style>

<body>
  <h1><center>Tell Us About Yourself</center></h1>
  <form action="/nonprofits.php">
    
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value=""><br><br>
    
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value=""><br><br>
    
    <label for="age">Age:</label><br>
  <input type="text" id="age" name="age" value=""><br><br>
    
    <label for="email">Email:</label><br>
  <input type="text" id="email" name="email" value=""><br><br>
    
 <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" pattern="(?=.*\d) (?=.*[a-z])(?=.*[A-Z]).{10,}" title="At least 10 characters, with 1+ uppercase and lowercase letters, and 1+ numerical digits" required>
   
    <p>Interests</p>
    <form action="" method="post">
  <input type="checkbox" name="interests" value="animals" /> Animals
    <input type="checkbox" name="interests" value="arts" /> Arts
  <input type="checkbox" name="interests" value="culture" /> Culture<br>
  <input type="checkbox" name="interests" value="disability" /> Disability
   <input type="checkbox" name="interests" value="disasterrelief" /> Disaster Relief
   <input type="checkbox" name="interests" value="education" /> Education<br>
   <input type="checkbox" name="interests" value="equality" /> Equality
   <input type="checkbox" name="interests" value="healthcare" /> Healthcare
   <input type="checkbox" name="interests" value="mentalhealth" />Mental Health<br>
   <input type="checkbox" name="interests" value="poverty" /> Poverty
   <input type="checkbox" name="interests" value="relief" />Relief  
   <input type="checkbox" name="interests" value="other" />Other
</form><br>
    
<script type="text/javascript">
checkCheck(document.forms.interests, 5)
</script>
    
    <center><input type="submit" value="SUBMIT"></center>
</form> 
