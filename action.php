

<!DOCTYPE html>
<html>
<head>
	<title>Check</title>
</head>
<body>
	<section style="border: 1px solid black;">
		<b>Personal Data:</b><br>
     <span id="result"></span>
     <span id="result1"></span><br>
     <span id="result2"></span><br>
     <span id="result3"></span><br>
     <span id="result4"></span>
     <span id="result5"></span><br>
     <span id="result6"></span>
     <span id="result7"></span><br>
     <span id="result8"></span><br>
     <span id="result9"></span><br>
     <span id="result10"></span><br>
     <span id="result11"></span><br>
     <span id="result12"></span><br>
     <span id="result13"></span><br>
     <span id="result14"></span><br><br>

     <b>Education Data:</b><br>
     <span id="result15"></span><br>
     <span id="result16"></span><br>
     <span id="result17"></span><br>
     <span id="result18"></span><br>
     <span id="result19"></span><br>
     <span id="result20"></span><br>
     <span id="result21"></span><br>
     <span id="result22"></span><br>
     <span id="result23"></span><br>
     <span id="result24"></span><br><br>

     <!--<b>Document Data:</b><br>
     <span id="result25"></span><br>
     <span id="result26"></span><br>
     <span id="result27"></span><br>
     <span id="result28"></span><br>-->
     <div class="input-field">
        <button class="nextBtn" type="button" name="submit" onclick="check();">
            <span class="btnText">Submit</span>
        </button>
     </div>
    </section>

     <script>
     	document.getElementById("result").innerHTML=localStorage.getItem("first");
     	document.getElementById("result1").innerHTML=localStorage.getItem("last");
     	document.getElementById("result2").innerHTML=localStorage.getItem("dob");
     	document.getElementById("result3").innerHTML=localStorage.getItem("email");
     	document.getElementById("result4").innerHTML=localStorage.getItem("ffirst");
     	document.getElementById("result5").innerHTML=localStorage.getItem("flast");
     	document.getElementById("result6").innerHTML=localStorage.getItem("mfirst");
     	document.getElementById("result7").innerHTML=localStorage.getItem("mlast");
     	document.getElementById("result8").innerHTML=localStorage.getItem("gender");
     	document.getElementById("result9").innerHTML=localStorage.getItem("nation");
     	document.getElementById("result10").innerHTML=localStorage.getItem("street");
     	document.getElementById("result11").innerHTML=localStorage.getItem("city");
     	document.getElementById("result12").innerHTML=localStorage.getItem("country");
     	document.getElementById("result13").innerHTML=localStorage.getItem("phone");
     	document.getElementById("result14").innerHTML=localStorage.getItem("mobile");

     	document.getElementById("result15").innerHTML=localStorage.getItem("hscname");
     	document.getElementById("result16").innerHTML=localStorage.getItem("hscboard");
     	document.getElementById("result17").innerHTML=localStorage.getItem("hscscore");
     	document.getElementById("result18").innerHTML=localStorage.getItem("sscname");
     	document.getElementById("result19").innerHTML=localStorage.getItem("sscboard");
     	document.getElementById("result20").innerHTML=localStorage.getItem("sscscore");
     	document.getElementById("result21").innerHTML=localStorage.getItem("course");
     	document.getElementById("result22").innerHTML=localStorage.getItem("cname");
     	document.getElementById("result23").innerHTML=localStorage.getItem("cscore");
     	document.getElementById("result24").innerHTML=localStorage.getItem("logs");

     	//document.getElementById("result25").innerHTML=localStorage.getItem("doc");
     	//document.getElementById("result26").innerHTML=localStorage.getItem("hscdoc");
     	//document.getElementById("result27").innerHTML=localStorage.getItem("sscdoc");
     	//document.getElementById("result28").innerHTML=localStorage.getItem("semdoc");

     	function check() {
     		alert("Thank you!");
     		location.href = "./";
     	}
     </script>
</body>
</html>