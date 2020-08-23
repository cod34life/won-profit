<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<style type="text/css">
body {
  background-color: #FFE5B4
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
  width: 15%;
  background-color: #FFFF66;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color:#7CFC00;
}


<body>
 <center><a href="https://ibb.co/cL1vGmB"><img src="https://i.ibb.co/gV375n2/kindpng-7893485.png" alt="kindpng-7893485" border="0"></a></center>
  <h1><center>Tell Us About Yourself</center></h1>
  <form action="/nonprofits.php">
    
    <b><label for="fname" style="font-family: Arial">First name:</label></b><br>
  <input type="text" id="fname" name="fname" value=""><br><br>
    
  <b><label for="lname" style="font-family: Arial">Last name:</label><br>
  <input type="text" id="lname" name="lname" value=""><b><br><br>
    
    <b><label for="age" style="font-family: Arial">Age:</label><b><br>
  <input type="text" id="age" name="age" value=""><br><br>
    
    <b><label for="email" style="font-family: Arial">Email:</label><b><br>
  <input type="text" id="email" name="email" value=""><br><br>
    
 <b><label for="password" style="font-family: Arial">Password:</label><br><b>
    <input type="password" required id="password" name="password" minlength=10 onblur = "isValid()"><br><br>
   
    <b><p style="font-family: Arial">Interests</p><b>
    <form id="checklist" name="checklist">
  <input type="checkbox" name="interests" value="animals" /> Animals<br><br>
    <input type="checkbox" name="interests" value="arts" /> Arts<br><br>
  <input type="checkbox" name="interests" value="culture" /> Culture<br><br>
  <input type="checkbox" name="interests" value="disability" /> Disability<br><br>
   <input type="checkbox" name="interests" value="disasterrelief" /> Disaster Relief<br><br>
   <input type="checkbox" name="interests" value="education" /> Education<br><br>
   <input type="checkbox" name="interests" value="equality" /> Equality<br><br>
   <input type="checkbox" name="interests" value="healthcare" /> Healthcare<br><br>
   <input type="checkbox" name="interests" value="mentalhealth" />Mental Health<br><br>
   <input type="checkbox" name="interests" value="poverty" /> Poverty<br><br>
   <input type="checkbox" name="interests" value="relief" />Relief<br><br>
   <input type="checkbox" name="interests" value="other" />Other
</form><br><br>
    
    <center><input type="submit" value="Submit"></center>
</form> 
    </body>
  </html>
