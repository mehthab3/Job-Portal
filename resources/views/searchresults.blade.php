@include('layout.nav')
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
  @if(session('info'))
  {{session('info')}}
  @endif

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
  @if(count($jobs) > 0)
    @foreach($jobs->all() as $job)
  <tr>
    <td>{{$job->title}}</td>
    <td>{{$job->description}}</td>
    <td>{{$job->location}}</td>
    <td>{{$job->vacancies_count}}</td>
    <td>{{$job->experience}}</td>
    <td>{{$job->salary}}</td>
    
    
  </tr>
    @endforeach
  @endif

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