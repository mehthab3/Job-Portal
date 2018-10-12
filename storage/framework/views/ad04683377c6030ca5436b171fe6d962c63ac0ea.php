<html>
<head>  
<script type="text/javascript">
function checkvalue(ind)
{
var element=document.getElementById('ind');
    if(val==="10")
       document.getElementById('ind').style.display='block';
    else
       document.getElementById('ind').style.display='none'; 
}
</script> 
</head>
<body>
<form action=""method="post">

<br/>
<br/>
<br/>
<br/>
<center><table border="3" width="500" height="300">
<tr>
<td colspan="5" align="center" bgcolor="grey"><strong><b><font size="6">Employer Information</font></b></strong></td>
</tr>



  <tr>
    <td align="right"><font size="5">Company Name:</font></td><td><input type="text" name="jtitle" size="35" required></td>
  </tr>
  <tr>
    <td align="right"><font size="5">Email ID:</font></td><td><input type="text" name="email"  size="35" required></td>
  </tr>
  <tr>
    <td align="right"><font size="5">Password:</font></td><td><input type="password" name="pass" size="35" maxlength="20"required></td>
  </tr>
  <tr>
    <td align="right"><font size="5">Confirm Password:</font></td><td><input type="password" name="cpass" size="35" maxlength="20"></td>
  </tr>
  <tr>
    <td align="right"><font size="5">Industry:</font></td>
	<td width="501" height="20">
      <div align="left">

           <select style="width:280px;" name="ind" onchange='checkvalue(this.value)' required>
		      <option value="1" label="0"> Select </option><option value="1" label="1">Information Technology</option><option value="2" label="2">Manufacturing</option><option value="3" label="3">Financial Services</option><option value="4" label="4">Mechanical Industry</option><option value="5" label="5">Construction</option><option value="6" label="6">Electrical & Electronics</option><option value="7" label="7">Retailing</option><option value="8" label="8">Telecom</option><option value="9" label="9">Energy & Chemical</option><option value="10" label="10">Others</option></select>
			<input type="text" name="ind" id="ind" style='display:none'/>
	   </div></td>
  </tr>
	
	
  </tr>
  
  
  
  
 <tr>
<td colspan="5" align="center"><input type="submit" class="button button1" name="submit" value="SUBMIT">
<button type="reset" class="button button1" value="reset"><b>RESET</b></button></td>	
</tr>
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
 