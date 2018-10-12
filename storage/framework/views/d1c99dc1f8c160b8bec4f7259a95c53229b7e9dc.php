<?php echo $__env->make('layout.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!DOCTYPE html>
<html>
<head>
<style>
#jobs {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#jobs td, #jobs th {
    border: 1px solid #ddd;
    padding: 8px;
}

#jobs tr:nth-child(even){background-color: #f2f2f2;}

#jobs tr:hover {background-color: #ddd;}

#jobs th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Search Result</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
</head>
<center>

<body>
  <?php if(session('info')): ?>
  <?php echo e(session('info')); ?>

  <?php endif; ?>

<br/>


<table id="jobs">

<h2><center><strong>Search Results</center></strong></h2>
  <tr>
    <th>Title</th>
    <th>Description</th>
    <th>Location</th>
    <th>Vacancies</th>
    <th>Experience</th>
    <th>Salary</th>
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
    
    
  </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php endif; ?>

</table>
</center>
 </br>
 </br>
  </br>
 </br>
  </br>
 </br>
  </br>
 </br>
 </body>
</html>