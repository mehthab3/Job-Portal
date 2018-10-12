<html>
<head> 
<link rel="stylesheet" href="/css/style.css">
<script type="text/javascript" src="/js/jquery.validation.js"></script>
</head>
<body>
  <center><h1>Employer Information</h1></center>
<div class="container">
<form action="<?php echo e(url("/insertemployer")); ?>" method="post" onsubmit="return validation()" >
<?php echo e(csrf_field()); ?>

    <label>Company Name</label>
    <input type="text" name="name"  required>
    
  <label>Email ID</label>
  <input type="email" name="email" placeholder="me@example.com" required>

   <label>Password</label>
   <input type="password" name="password" required>

   <label>Industry</label>
			<input type="text" name="industry" id="ind"/>
 
<input type="submit" name="submit" value="Submit" >
<input type="reset" name="reset" value="Reset">

 
 </form>
 <input type="submit" value="Cancel" onclick="location.href='adminlogin'";/>
</div>

 </body>
 </html>
 