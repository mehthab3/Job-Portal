@include('layout.nav')
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
  @if(count($jobs) > 0)
    @foreach($jobs->all() as $job)
  <tr>
    <td>{{$job->title}}</td>
    <td>{{$job->description}}</td>
    <td>{{$job->location}}</td>
    <td>{{$job->vacancies_count}}</td>
    <td>{{$job->experience}}</td>
    <td>{{$job->salary}}</td>
    <td action = "{{ url('/edit',array($job->id)) }}"><a href = {{ url('/update',array($job->id)) }}>Update</a></td>
    <td action = "{{ url('/delete',array($job->id)) }}"><a href = {{ url('/delete',array($job->id)) }}>Delete</a></td>
    
  </tr>
    @endforeach
  @endif

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




