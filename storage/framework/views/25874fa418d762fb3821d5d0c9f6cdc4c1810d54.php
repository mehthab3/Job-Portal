<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">

<title>Online Job Portal</title>

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


<center>
<div class="btn-group-vertical">
  <input type="button" class="btn btn-info" value="Create SignUp for Employer" onclick="location.href='emp_signup';">


  <table border="3" width="500" height="300">
<tr>
<td colspan="10" align="center" bgcolor="grey"><strong><b><font size="6">Employer List</font></b></strong></td>

  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Industry</th>
  </tr>
  <?php if(count($employers) > 0): ?>
    <?php $__currentLoopData = $employers->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td><?php echo e($employer->name); ?></td>
    <td><?php echo e($employer->email); ?></td>
    <td><?php echo e($employer->industry); ?></td>
   </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php endif; ?>

</table>



   <!-- <input type="button" class="btn btn-info" value="Create SignUp for Candidate" onclick="location.href='cand_signup';"> -->

</center>
</div>
</body>
</html>

