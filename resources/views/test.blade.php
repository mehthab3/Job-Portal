@include('layout.nav')
<!DOCTYPE html>
<html>
<head>
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
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Enter the Job</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
</head>
<center>
  <br/>
  <br/>
<form action = {{action('CandidateController@search')}} method="post">
{{ csrf_field() }}
<input type="text" name="searchbox" placeholder="Search Jobs"/><br/>
<button type="submit">Search</button></form>
<body>
  @if(session('info'))
  {{session('info')}}
  @endif
<form action=""method="get">

<table id="customers">
<tr>
<td colspan="10" align="center" bgcolor="grey"><strong><b><font size="6">Jobs</font></b></strong></td>

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
 </form>
 </body>
</html>