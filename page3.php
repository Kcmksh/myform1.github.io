

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
    	<form method="post" onsubmit="myfunc(event)">
            <div class="form third">
                <div class="deatils documents">
                    <span class="title">Document details</span>

                    <div class="fields">
                        <div class="input-field3">
                            <label>Recent passport size photograph (image size less than 4MB)<span style="color: red;">*</span>:</label>
                            <input type="file" id="doc" placeholder="..." required>
                        </div>

                        <div class="input-field3">
                            <label>HSC mark sheet (image, PDF or docs size less than 4MB)<span style="color: red;">*</span>:</label>
                            <input type="file" id="hscdoc" placeholder="..." required>
                        </div>

                        <div class="input-field3">
                            <label>SSC mark sheet (image, PDF or docs size less than 4MB)<span style="color: red;">*</span>:</label>
                            <input type="file" id="sscdoc" placeholder="..." required>
                        </div>

                        <div class="input-field3">
                            <label>All semesters mark sheet in a single PDF or docs <br>(file size less than 10MB)<span style="color: red;">*</span>:</label>
                            <input type="file" id="semdoc" placeholder="..." required>
                        </div>

                        <div class="buttons">
                            <div class="input-field">
                             <div class="backBtn" id="back">
                                <i class="arrow left"></i>
                                <span class="btnText">Back</span>
                             </div>
                            </div>

                            <div class="input-field">
                             <button class="nextBtn" type="submit" name="submit">
                                <span class="btnText">Preview</span>
                             </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
             if(isset($_POST['submit'])) {
              include 'action.php'; 
            }
            ?>
        </form>
       </div>
       <script type="text/javascript">
        document.getElementById("back"). onclick = function () {
          location.href = "page2.php";
         };

         //function myfunc(event){
          function gotPhoto(doc) {
            var file = element.files[0];
            var reader = new FileReader()
            reader.onload = function(base64) {
            localStorage["file"] = base64;
          }
          reader.readAsDataURL(file);
         }
        //}
       </script>
</body>
</html>