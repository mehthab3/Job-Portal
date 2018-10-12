<!DOCTYPE html>
<html>
<title>CANDIDATE LOGIN</title>
<body background="r.jpg">
</body>
<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 47%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 380px;
    border: none;
    cursor: pointer;
    width: 46.7%;
}

button:hover {
    opacity: 0.8;
}

.backbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.t {
    width: 20%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .backbtn {
       width: 100%;
    }
}
.button{
	background-color:#008CBA;
	border:none;
	color:white;
	padding:10px 15px;
	text-align:cente;
	text-decoration:none;
	display:inline-block;
	font-size:16px;
	margin:2px 2px;
	cursor:pointer;
	
}
.button1 {border-radius:12px;}
</style>
<body>
@if(session('info'))
  {{session('info')}}
  @endif
<h2><center>Candidate Login</center></h2>

<form action="{{ url("/validatecandidate") }}" method="POST">
{{ csrf_field() }}
  <div class="imgcontainer">
    <img src="cand.PNG" alt="t" class="t">
  </div>

  <div class="container">
 <center>
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="user" required><br>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>

 </center>       
    <button type="submit">Login</button>
  </div>

  <div class="container" style="background-color:#f2f1f2">
    <input type="button" class="button button1" value="Back" onclick="location.href='home';" >
    <input type="button" class="button button1" value="Skip" onclick="location.href='viewjob';" ><BR></BR>

  </div>
</form>

</body>
</html>