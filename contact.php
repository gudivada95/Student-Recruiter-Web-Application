<!DOCTYPE html>
<html>
<head>
<title> Simple PHP contact form with MySQL and Form Validation </title>
</head>
<body>
<h3> Please Enter Your Information Below!</h3>
<form action="thankyou.php" method="post">




		<li><h2><strong>I.  Personal Information</strong></h2></li>
		<fieldset>
    		<legend>Personal information:</legend>

  	First Name:<br>
  <input type="text" name="firstName" required><br>
  
  Last Name:<br>
  <input type="text" name="lastName" required><br>
 
 	Email: <br>
  <input type="email" name="email" required><br>
  <br>
 
 
  Phone (10 digits non spaced):<br>
  <input type="text" name="phone" required><br>
 

 
 
 
	  Gender:<br>
                  <select name="gender" required/>
                        <option value = "Female">Female</option>
                        <option value = "Male">Male</option>
                        <option value = "Transgender">Transgender</option>
                  </select><br>
 
	StreetAddress:<br>
  <input type="text" name="street" required><br>
  
   City:<br>
  <input type="text" name="city" required><br>
  
  State:<br>
  <input type="text" name="state" required><br>
  
  Zip Code:<br>
  <input type="text" name="zip" required><br>
  
  BirthDate(MM/DD/YYYY):<br>
  <input type="date" name="birth" required><br>
  
	    	  <li><h2><strong>II.  Personalize Your Campus Visit</strong></h2></li>
		        <fieldset>
    		    <legend>Campus Visit Schedule:</legend>
  

  

    
  
  Academic Session 1:<br>
                  <select name="dep1" required/>
                   
                        <option value = "1">Computer Science</option>
                        <option value = "2">English</option>
                        <option value = "3">Art</option>
                        <option value = "4">Biology</option>
                        <option value = "5">Philosophy</option>
                        <option value = "6">Physics</option>
                  </select><br>
  
 
 
 
 
   Academic Session 2:<br>
                  <select name="dep2" required/>
                  <option value = "0">None</option>
                        <option value = "1">Computer Science</option>
                        <option value = "2">English</option>
                        <option value = "3">Art</option>
                        <option value = "4">Biology</option>
                        <option value = "5">Philosophy</option>
                        <option value = "6">Physics</option>
                  </select><br>
  
  Academic Session 3:<br>
                  <select name="dep3" required/>
                  <option value = "0">None</option>
                        <option value = "1">Computer Science</option>
                        <option value = "2">English</option>
                        <option value = "3">Art</option>
                        <option value = "4">Biology</option>
                        <option value = "5">Philosophy</option>
                        <option value = "6">Physics</option>
                  </select><br>
  
     Athletic Session 1:<br>
                  <select name="ath1" required/>
                  <option value = "0">None</option>
                        <option value = "7">Soccer</option>
                        <option value = "8">Baseball</option>
                        <option value = "9">Swimming</option>
                        <option value = "10">Football</option>
                  </select><br>
  
  Athletic Session 2:<br>
                  <select name="ath2" required/>
                  <option value = "0">None</option>
                        <option value = "7">Soccer</option>
                        <option value = "8">Baseball</option>
                        <option value = "9">Swimming</option>
                        <option value = "10">Football</option>
                  </select><br>
  
        Would you like to opt out of a session? <br>
                  <select name="noSession" required/>
                        <option value = "0">No</option>
                        <option value = "1">Yes</option>
                  </select><br>
  
  
             Would you like a campus tour? <br>
                  <select name="tour" required/>
                        <option value = "0">No</option>
                        <option value = "1">Yes</option>
                  </select><br>
  
                  Will you join us for lunch on campus? <br>
                  <select name="lunch" required/>
                        <option value = "0">No</option>
                        <option value = "1">Yes</option>
                  </select><br>
  
             Would you like a financial aid session? <br>
                  <select name="aid" required/>
                        <option value = "0">No</option>
                        <option value = "1">Yes</option>
                  </select><br>
  

  
  
  
<input type="submit" value="Submit"><br>
</form>
</body>
</html>