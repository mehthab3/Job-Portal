<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<title>Create Signup</title>

<body background="r.jpg">
<!-- </body> -->
<style>
form {
    border: 3px solid #f1f1f1;
}
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.t {
    width: 30%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}
.btn{
	background-color:#008CBA;
	border:none;
	color:white;
	padding:15px 32px;
	text-align:cente;
	text-decoration:none;
	display:inline-block;
	font-size:16px;
	margin:2px 2px;
	cursor:pointer;
	
}
.
.btn-info {border-radius:12px;}
</style>
<!-- <body> -->


  <div class="imgcontainer">
    <img src="JOB.png" alt="t" class="t">
  </div>
<center>
<div class="btn-group-vertical">
  <input type="button" class="btn btn-info" value="Manage Employers" onclick="location.href='adminlogin';">
   <input type="button" class="btn btn-info" value="Manage Candidates" onclick="location.href='candidatelist';">
   <input type="button" class="btn" value="Logout" onclick="location.href='home';" >
</center>
</div>
</body>
</html>

