<html>
<head>
<link rel="stylesheet" href="/css/style.css"></head>
 <!-- <script type="text/javascript">
function validatePassword(){
  var password = document.getElementById("password")
var cpass = document.getElementById("cpass");
  if(password.value != cpass.value) 
  password_error.innerHTML = "nOT MATCH";
  return false;
}
</script> -->
<body >
<center><h1>Candidate Information</h2></center>
<div class="container">
<form name="candform" action= "<?php echo e(url('/insertcandidate')); ?>" method="post" onsubmit="return validatePassword()">
<?php echo e(csrf_field()); ?>

<label>Full Name:</label>
<input type="text" name="name" required></td>
<label>Location:</label>
	<input type="text" name="location" required></td>
<label>Email:</label>
  <input type="email" name="email" placeholder="me@example.com" required></td>
  <label>Create Password:</label>
   <input type="password" name="password" required></td>
  <label>Experience : </label>

  <select name="experience">
		  <option value="1">Select</option><option value="0" label="0">0</option><option value="1" label="1">1</option><option value="2" label="2">2</option><option value="3" label="3">3</option><option value="4" label="4">4</option><option value="5" label="5">5</option><option value="6" label="6">6</option><option value="7" label="7">7</option><option value="8" label="8">8</option><option value="9" label="9">9</option><option value="10" label="10">10+</option></select>
      <label>Skills:</label>
        <input name="skills" type="text" />

  <label>Education : </label>
        <select name="education">
<option value="-1" label="Select">Select</option>
        <option value="Not Pursuing Graduation" label="Not Pursuing Graduation">Not Pursuing Graduation</option>
        <option value="B.A" label="B.A">B.A</option>
        <option value="B.Arch" label="B.Arch">B.Arch</option>
		<option value="BCA" label="BCA">BCA</option>
		<option value="5" label="B.B.A">B.B.A</option>
		<option value="6" label="B.Com">B.Com</option>
		<option value="7" label="B.Ed">B.Ed</option>
		<option value="8" label="BDS">BDS</option>
		<option value="9" label="BHM">BHM</option>
		<option value="10" label="B.Pharma">B.Pharma</option>
		<option value="11" label="B.Sc">B.Sc</option>
		<option value="12" label="B.Tech/B.E.">B.Tech/B.E.</option>
		<option value="13" label="LLB">LLB</option>
		<option value="14" label="MBBS">MBBS</option>
		<option value="15" label="Diploma">Diploma</option>
		<option value="16" label="BVSC">BVSC</option>
		<option value="9999" label="Other">Other</option></select>
        <label>Upload Resume: </label>
				<input type="file" name="resume" id="resume"/>

<input type="submit" name="submit" value="Submit"/>
<input type="reset" value="Reset"/>
</form>
</body></div>
<center><input type="submit" value="Cancel" onclick="location.href='candidatelist'";/></center>
</html>