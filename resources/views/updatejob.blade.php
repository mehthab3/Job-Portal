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
<form method = "POST" action = "{{ url('/edit',array($jobs->id)) }}">
{{ csrf_field() }}
<label>Job Title:</label>
  <input type="text" name="title" value ="<?php echo $jobs->title; ?>" required/>
  <label>Description:</label>
    <input type="text" name="description" value ="<?php echo $jobs->description; ?>"/>
    <label>Location:</label>
    <input type="text" name="location" value ="<?php echo $jobs->location; ?>" required/>
    <label>No.of Vacancies:</label>
    <input type="text" name="vacancies_count" value ="<?php echo $jobs->vacancies_count; ?>"/>
    <label>Experience:</label>
    <input type="text" name="experience" value ="<?php echo $jobs->experience; ?>"/>
    <label>Salary:</label>
    <input type="text" name="salary" value ="<?php echo $jobs->salary; ?>"/>
    
  <input type="submit" name="submit" value="Update">
<input type="reset" value="Reset"/>
<input type="submit" value="Cancel" onclick="location.href='job'";/>
 
 </form>
</div>
 </body>
</html>