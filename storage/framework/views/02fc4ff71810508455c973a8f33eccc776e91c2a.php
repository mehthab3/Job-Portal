<?php echo $__env->make('layout.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!DOCTYPE html>
<html>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Jobs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>

<style>
.button {
    background-color: Green;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
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
</head>
<body>

<table id="jobs">

<h2><center><strong>Jobs</center></strong></h2>

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

</table><br/>
<center><input type="button" class="button button1" value="Add New" onclick="location.href='createjob';" > 
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




