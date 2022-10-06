<?php
  if(isset($_POST['next'])){
    header('Location:page2.php');
        exit;
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

	<title>Registration Form</title>
</head>
<body>
    <div class="container">
    	<header>Registration</header>
    	<form onsubmit="myfunc(event)" method="post" name="myForm">
    		<div class="form first">
    			<div class="details personal">
    				<span class="title">Personal details</span>

    				<div class="fields">
    					<div class="input-field">
    						<label>Name<span style="color: red;">*</span><br></label>
    						<input type="text" id="first" placeholder="First" onkeypress='return event.charCode != 32' required>&nbsp
    						<input type="text" id="last" placeholder="Last" onkeypress='return event.charCode != 32' required>
    					</div>

    					<div class="input-field">
    						<label>Date of Birth<span style="color: red;">*</span><br></label>
    						<input type="Date" id="dob" style="width: 100%;" required>
    					</div>

    					<div class="input-field">
    						<label>Email<span style="color: red;">*</span><br></label>
    						<input type="Email" id="email" onkeypress='return event.charCode != 32' style="width: 100%;" required>
    					</div>

    					<div class="input-field">
    						<label>Father's name<span style="color: red;">*</span><br></label>
    						<input type="text" id="ffirst" placeholder="First" onkeypress='return event.charCode != 32' required>&nbsp
    						<input type="text" id="flast" placeholder="Last" onkeypress='return event.charCode != 32' required>
    					</div>

    					<div class="input-field">
    						<label>Mother's name<span style="color: red;">*</span><br></label>
    						<input type="text" id="mfirst" placeholder="First" onkeypress='return event.charCode != 32' required>&nbsp
    						<input type="text" id="mlast" placeholder="Last" onkeypress='return event.charCode != 32' required>
    					</div>

    					<div class="input-field1">
    						<label>Gender<span style="color: red;">*</span><br></label>
    						<input type="radio" id="gender" name="gender">M <br>
	                        <input type="radio" id="gender" name="gender">F
    					</div>

    					<div class="input-field">
    						<label>Nationality<span style="color: red;">*</span><br></label>
    						<input type="text" id="nation" onkeypress='return event.charCode != 32' style="width: 100%;" required>
    					</div>

    					<div class="input-field">
    						<label>Home Address<span style="color: red;">*</span><br></label>
    						<input type="text" id="street" placeholder="Street Address" onkeypress='return event.charCode != 32' style="width: 100%;" required><br>
    						<input type="text" id="city" placeholder="City" onkeypress='return event.charCode != 32' required>
    						<select id="country" style="width: 50%; height: 30px; background-color: #dcf4f5; border-radius: 3px;" required>
    							<option>Country</option>
    							<option>India</option>
    							<option>USA</option>
    							<option>UK</option>
    							<option>China</option>
    							<option>Russia</option>
    						</select>
    					</div>

    					<div class="input-field">
    						<label>Telephone-Home</label><br>
    						<input type="tel" id="phone" placeholder="###&nbsp###&nbsp####" style="width: 100%;" onkeypress='return event.charCode >= 48 && event.charCode <= 57 && event.length >= 10'>
    					</div>

    					<div class="input-field">
    						<label>Telephone-Mobile<span style="color: red;">*</span><br></label>
    						<input type="tel" id="mobile" placeholder="###&nbsp###&nbsp####" style="width: 100%;" onkeypress='return event.charCode >= 48 && event.charCode <= 57 && event.charCode != 32' required>
    					</div>
                            					
    					<div class="input-field">
    						<button class="nextBtn" id="next" name="next">
    							<span class="btnText">Next</span>
    							<i class="arrow right"></i>
    						</button>
    					</div>
    				</div>
    			</div>
    		</div>
    	</form>
    </div>
    <script type="text/javascript">
    function myfunc(event){
        var fname = document.getElementById("first").value;
        var lname = document.getElementById("last").value;
        var dob = document.getElementById("dob").value;
        var email = document.getElementById("email").value;
        var ffname = document.getElementById("ffirst").value;
        var flname = document.getElementById("flast").value;
        var mfname = document.getElementById("mfirst").value;
        var mlname = document.getElementById("mlast").value;
        var temp_gender = document.getElementById("gender").value;
        var nation = document.getElementById("nation").value; 
        var street = document.getElementById("street").value;
        var city = document.getElementById("city").value;
        var country = document.getElementById("country").value;
        var phone = document.getElementById("phone").value;
        var mobile = document.getElementById("mobile").value;

        temp_gender.checked ? gender = "M" : gender = "F";

      localStorage.setItem('first', fname);
      localStorage.setItem('last', lname);
      localStorage.setItem('dob', dob);
      localStorage.setItem('email', email);
      localStorage.setItem('ffirst', ffname);
      localStorage.setItem('flast', flname);
      localStorage.setItem('mfirst', mfname);
      localStorage.setItem('mlast', mlname);
      localStorage.setItem('gender', gender);
      localStorage.setItem('nation', nation);
      localStorage.setItem('street', street);
      localStorage.setItem('city', city);
      localStorage.setItem('country', country);
      localStorage.setItem('phone', phone);
      localStorage.setItem('mobile', mobile);
      document.getElementById("first").innerHTML = localStorage.getItem("first");
       
        var mobile = document.getElementById("mobile").value;
       if(mobile.length<10) {
        alert("Enter a 10 digit mobile number");
        
       }
       var fname = document.getElementById("first").value;
       if(fname=="") {
        alert("Name must not be null");
        document.myForm.mobile.focus();
        return false;
       }
    }
    </script>
</body>
</html>