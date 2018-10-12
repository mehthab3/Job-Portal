<?php echo $__env->make('layout.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!DOCTYPE html>
<html>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Enter the Job</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>

<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
<body>

<table id="customers">

<tr>
<td><strong><b><font size="6">Jobs</font></b></strong></td>

  <tr>
    <th>Title</th>
    <th>Description</th>
    <th>Location</th>
    <th>Vacancies</th>
    <th>Experience</th>
    <th>Salary</th>
    <th colspan="2">Action</th>
  </tr>
  <?php if(count($jobs) > 0): ?>
    <?php $__currentLoopData = $jobs->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td><?php echo e($job->title); ?></td>
    <td><?php echo e($job->description); ?></td>
    <td><?php echo e($job->location); ?></td>
    <td><?php echo e($job->vacancies_count); ?></td>
    <td><?php echo e($job->experience); ?></td>
    <td><?php echo e($job->salary); ?></td>
    <td action = "<?php echo e(url('/edit',array($job->id))); ?>"><a href = <?php echo e(url('/update',array($job->id))); ?>>Update</a></td>
    <td action = "<?php echo e(url('/delete',array($job->id))); ?>"><a href = <?php echo e(url('/delete',array($job->id))); ?>>Delete</a></td>
    
  </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php endif; ?>

</table>
<button><a href= <?php echo e(url('/createjob')); ?>>Add New Job</a></button> 
</center>
 </br>
 </br>
  </br>
 </br>
  </br>
 </br>
  </br>
 </br>
 </form>
 </body>
</html>




