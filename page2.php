<?php
  if(isset($_POST['next'])){
    header('Location:page3.php');
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
    	<form onsubmit="myfunc(event)" method="post">
            <div class="form second">
                <div class="deatils education">
                    <span class="title">Education details</span>

                    <div class="fields">
                        <div class="input-field2">
                            <label>HSC Institution Name<span style="color: red;">*</span><br></label>
                            <input type="text" id="hscname" placeholder="Enter Institution Name..." onkeypress='return event.charCode != 32' required>
                        </div>

                        <div class="input-field2">
                            <label>HSC Board<span style="color: red;">*</span><br></label>
                            <select id="hscboard" style="width: 100%; height: 30px; background-color: #dcf4f5; border-radius: 3px;" required>
                                <option>Choose board</option>
                                <option>CBSC</option>
                                <option>ICSC</option>
                                <option>State Board</option>
                            </select>
                        </div>

                        <div class="input-field2">
                            <label>Score in HSC(in percentage)<span style="color: red;">*</span><br></label>
                            <input type="number" step="any" id="hscscore" placeholder="Enter your score" onkeypress='return event.charCode != 32' required>
                        </div>

                        <div class="input-field2">
                            <label>SSC Institution Name<span style="color: red;">*</span><br></label>
                            <input type="text" id="sscname" placeholder="Enter Institution Name..." onkeypress='return event.charCode != 32' required>
                        </div>

                        <div class="input-field2">
                            <label>SSC Board<span style="color: red;">*</span><br></label>
                            <select id="sscboard" style="width: 100%; height: 30px; background-color: #dcf4f5; border-radius: 3px;" required>
                                <option>Choose board</option>
                                <option>CBSC</option>
                                <option>ICSC</option>
                                <option>State Board</option>
                            </select>
                        </div>

                        <div class="input-field2">
                            <label>Score in SSC(in percentage)<span style="color: red;">*</span><br></label>
                            <input type="number" step="any" id="sscscore" placeholder="Enter your score" onkeypress='return event.charCode != 32' required>
                        </div>

                        <div class="input-field2">
                            <label>Currently Pursuing Course<span style="color: red;">*</span><br></label>
                            <input type="text" id="course" placeholder="Enter the course name..." onkeypress='return event.charCode != 32' required>
                        </div>

                        <div class="input-field2">
                            <label>Current Institution Name<span style="color: red;">*</span><br></label>
                            <input type="text" id="cname" placeholder="Enter Institution Name..." onkeypress='return event.charCode != 32' required>
                        </div>

                        <div class="input-field2">
                            <label>Overall Percentage<span style="color: red;">*</span><br></label>
                            <input type="number" step="any" id="cscore" placeholder="Enter your overall score" onkeypress='return event.charCode != 32' required>
                        </div>

                        <div class="input-field2">
                            <label>Current Backlogs(If any)<span style="color: red;">*</span><br></label>
                            <select id="logs" style="width: 100%; height: 30px; background-color: #dcf4f5; border-radius: 3px;" required>
                                <option>-Select-</option>
                                <option>NO</option>
                                <option>1</option>
                                <option>More than 1</option>
                            </select>
                        </div>

                        <div class="buttons">
                            <div class="input-field">
                             <div class="backBtn" id="back">
                                <i class="arrow left"></i>
                                <span class="btnText">Back</span>
                             </div>
                            </div>

                            <div class="input-field">
                             <button class="nextBtn" id="Next2" name="next">
                                <span class="btnText">Next</span>
                                <i class="arrow right"></i>
                             </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
       </div>
       <script type="text/javascript">
          document.getElementById("back"). onclick = function () {
          location.href = "./";
         };

         function myfunc(event){
        var hname = document.getElementById("hscname").value;
        var hboard = document.getElementById("hscboard").value;
        var hscore = document.getElementById("hscscore").value;
        var sname = document.getElementById("sscname").value;
        var sboard = document.getElementById("sscboard").value;
        var sscore = document.getElementById("sscscore").value;
        var ccourse = document.getElementById("course").value;
        var cname = document.getElementById("cname").value;
        var cscore = document.getElementById("cscore").value; 
        var logs = document.getElementById("logs").value;

      localStorage.setItem('hscname', hname);
      localStorage.setItem('hscboard', hboard);
      localStorage.setItem('hscscore', hscore);
      localStorage.setItem('sscname', sname);
      localStorage.setItem('sscboard', sboard);
      localStorage.setItem('sscscore', sscore);
      localStorage.setItem('course', ccourse);
      localStorage.setItem('cname', cname);
      localStorage.setItem('cscore', cscore);
      localStorage.setItem('logs', logs);
       
       return false;    }
       </script>
</body>
</html>