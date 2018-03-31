<html>
      <head>
            <meta charset=”utf-8”>
            <title>Registration Page</title>
          <style type = "text/css">
            @media all
		{
			a 	  { text-decoration: none;
    				  display: inline-block;
    				  padding: 8px 16px; }
			a:hover { background-color: #ddd;
    				  color: black; }
			.previous { background-color: #f1f1f1;
    				  color: black; }
			.next 	{ background-color: #4CAF50;
    				  color: white; }
		}
            @media print
	    </style>
      </head>
 
      <body>
	<form name = "insert" action="Registration_page.php" method="POST">
      	<autocomplete = “on”>
            <h1><strong><center>Campus Visit Registration Form</center></strong></h1>
            <p><h3><center>Please answer or select a response for each question listed.<center></h3>
            </p>
      <ul class="errorMessages"></ul>
      	    
 	    <p></p>
      <ul>



		<li><h2><strong>I.  Personal Information</strong></h2></li>
		<fieldset>
    		<legend>Personal information:</legend>

	         <p><label>Last Name:
                  <input type = “text” id = “lastName”
                        placeholder = LastName required/>
            </label></p>

            <p><label>First Name:
                  <input type = “text” id = “firstName”
                        placeholder = FirstName required/> 
            </label></p>

            <p><label>Street Address:
                  <input type = “text” id = “street”
                        placeholder = Street required/> 
            </label></p>

            <p><label>City of Residence?:
                  <input type = “text” id = “city”
                        placeholder = City required/> (City)
            </label></p>

            <p><label>State of Residence?:
                  <input type = “text” id = “state”
                        placeholder = State required/> (Ex. NC)
            </label></p>

            <p><label>Zip Code?:
                  <input type = “zip” id = “zip”
                        placeholder = ##### required/> (Ex.55555)
            </label></p>

            <p><label>Telephone Number?:
                  <input type = “tel” id = “telephone”
                        placeholder = ###-###-#### required/> (Ex. 555-555-5555)
            </label></p>

            <p>Gender:
                  <select id="gender" required/>
                        <option value = "Female">Female</option>
                        <option value = "Male">Male</option>
                        <option value = "Transgender">Transgender</option>
                  </select>
            </p>

            <p><label>Email:
                  <input type = “email” id = “Email”
                        placeholder = name@domain.com required/> (name@domain.com)
                  </label></p>

            <p><label>What is your birthdate?:
                       <input id = "birthDate" type = "date" required/>
               </label> (YYYY-MM-DD)
            </p>
            <p></p>




	    	  <li><h2><strong>II.  Personalize Your Campus Visit</strong></h2></li>
		        <fieldset>
    		    <legend>Campus Visit Schedule:</legend>
	         <p>Please select your a MAJOR or first department to visit for Session 1:
                  <select id=“department1” required/> (Please select from the drop down menu)
                        <option value="Science">Science</option>
                        <option value="Mathematics">Mathematics</option>
                        <option value="Business">Business</option>
                        <option value="Arts">Arts</option>
                        <option value="Humanities">Humanities</option>
                        <option value="Athletics">Athletics</option> 
                  </select>
            </p>
            <p>Please select your a MINOR or second department to visit for Session 2:
                  <select id=“department2” required/> (Please select from the drop down menu)
                        <option value="Science">Science</option>
                        <option value="Mathematics">Mathematics</option>
                        <option value="Business">Business</option>
                        <option value="Arts">Arts</option>
                        <option value="Humanities">Humanities</option>
                        <option value="Athletics">Athletics</option>
                  </select>
            </p>
            

            <p><Would like to attend a session on student financial aid?:
                  <select id=“studentAid” required/> (Please select 1 for yes or 0 for no)
                        <option value = "1">1</option>
                        <option value = "0">0</option>
                  </select>
            </p>

            <p><If you are attending an athletic session, please select your first athletic session.  If not, select No Session:
                  <select id="athletic1"  required/> (Please select your session from the drop down menu)
                        <option value="Basketball">Basketball</option>
                        <option value="Baseball">Baseball</option>
                        <option value="Football">Football</option>
                        <option value="Soccer">Soccer</option>
                        <option value="Swimming">Swimming</option>
                        <option value="Volleyball">Volleyball</option>
                        <option value="Track">Track</option>
                        <option value="Tennis">Tennis</option>
                        <option value="noSession">noSession</option>
                  </select>
            </p>

             <p><If you are attending a second athletic session, please select your second athletic session.  If not, select No Session:
                  <select id="athletic2" required/> (Please select your session from the drop down menu)
                        <option value="Basketball">Basketball</option>
                        <option value="Baseball">Baseball</option>
                        <option value="Football">Football</option>
                        <option value="Soccer">Soccer</option>
                        <option value="Swimming">Swimming</option>
                        <option value="Volleyball">Volleyball</option>
                        <option value="Track">Track</option>
                        <option value="Tennis">Tennis</option>
                        <option value="noSession">noSession</option>
                  </select>
            </p>

	        <p>Would you like a Campus Tour?:
                  <selct id="campusTour" required/> (Select 1 for Yes or 0 for No from the drop down menu)
                       <option value="1">1</option>
			                 <option value="0">0</option>
                  </select>
          </p>
 
          <p>Will you be having Lunch on Campus:
                  <selct id="lunch" required/> (Select 1 for Yes or 0 for No from the drop down menu)
                       <option value="1">1</option>
                       <option value="0">0</option>
                  </select>
          </p>

		      </li>
	 
	         <p></p>
	         <p><h2><strong>III.  Please click "Submit" to submit your registration or "Reset" to start over.</strong></h2></p>
		              <button type="submit" value="Submit">Submit</button>
  		            <button type="reset" value="Reset">Reset</button>
	         <p></p>
	         <p><center><a href="userpage.html" class="previous">&laquo; Previous</a></center></p>
        </form>
    </body>
</html>

<?php
function Connect()
{
 $dbhost = "localhost";
 $dbuser = "stude120_admin";
 $dbpass = "admin";
 $dbname = "stude120_SENGGroup";

 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

 return $conn;
}
 
$query = "INSERT INTO Student VALUES ('$_POST[firstName]','$_POST[lastName]','$_POST[street]','$_POST[city]''$_POST[state]','$_POST[zip]','$_POST[department1]','$_POST[department2]'$_POST[athletic1]','$_POST[athletic2]','$_POST[gender]','$_POST[email]''$_POST[birthDate]','$_POST[telephone]','$_POST[campusTour]','$_POST[lunch]'$_POST[studentAid]')";
$result = pg_query($query);
?>