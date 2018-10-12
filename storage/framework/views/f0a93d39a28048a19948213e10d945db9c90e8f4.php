<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/css/style.css">
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Enter the Job</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
</head>
<body>

<div class="container">
<h1>Job Description</h1>
<form method = "POST" action = "<?php echo e(url("/insert")); ?>">
<?php echo e(csrf_field()); ?>

<label>Job Title:</label>
  <input type="text" name="title"  required/>
  <label>Description:</label>
    <input type="text" name="description"/>
    <label>Location:</label>
    <input type="text" name="location" required/>
    <label>No.of Vacancies:</label>
    <input type="text" name="vacancies_count"/>
    <label>Experience:</label>
    <input type="text" name="experience"/>
    <label>Salary:</label>
    <input type="text" name="salary"/>
    
  <input type="submit" name="submit" value="SUBMIT">
<input type="reset" value="RESET"/>
 
 </form>
</div>
 </body>
</html>