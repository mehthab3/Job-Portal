<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">

<title>Manage Candidates</title>


<style>
table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 75%;
}

th, td {
    padding: 15px;
}
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
<body>
<?php if(session('info')): ?>
  <?php echo e(session('info')); ?>

  <?php endif; ?>
<!-- </body> -->
<br/>
<center>
<div class="btn-group-vertical">
  <input type="button" class="btn btn-info" value="Create SignUp for Candiate" onclick="location.href='cand_signup';">
  <input type="button" class="btn" value="Back" onclick="location.href='createaccount';" >
<br/>.<br/>
  <table border="3" width="500" height="300">
<tr>
<td colspan="10" align="center" bgcolor="grey"><strong><b><font size="6">Candidate List</font></b></strong></td>

  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Location</th>
    <th>Skills</th>
    <th>Experience</th>
    <th>Education</th>


  </tr>
  <?php if(count($candidates) > 0): ?>
    <?php $__currentLoopData = $candidates->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td><?php echo e($candidate->name); ?></td>
    <td><?php echo e($candidate->email); ?></td>
    <td><?php echo e($candidate->location); ?></td>
    <td><?php echo e($candidate->skills); ?></td>
    <td><?php echo e($candidate->experience); ?></td>
    <td><?php echo e($candidate->education); ?></td>
   </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php endif; ?>

</table>
</center>
</div>
</body>
</html>

