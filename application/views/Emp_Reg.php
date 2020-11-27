<!DOCTYPE html>
<html>
	<style>
		.reg{
			background-size: cover;
			background-color: rgba(218, 226, 226, 0.2);
			width: 350px;
			height: 500px;
			margin-left: 110%;
			border:0;
			padding-left:40px ;
			overflow-wrap: inherit;
            color: black;
		}
		h1{
			font-size: 32px;
			width: 120px;
			height: 50px;
			margin-right: 135px;
            float: right;
			padding-top: 20px;
			text-decoration-line: underline;
			
		}
		.reg td{
			line-height: 10px;
			visibility: visible;
			font-size: 16px;
			padding-left: 10px;
			font-family: sans-serif;
		}
		.reg td input{
			background-color: inherit;
			border: none;
			box-shadow:0px 2px gray;
			width: 200px;
			height: 50px;
			font-size: 16px;
		}
		.smt{
					border: 1; 
					border-color:rgb(205, 245, 205) ;
					border-radius: 5px;
					padding:18px 80px; 
					background: none;
					margin-top: 50px;
					margin-left: 50px;
					margin-bottom: 5px;
					}
	 .smt:hover{
		padding:20px 90px; 
		font-optical-sizing: 20px;
		background-color: mediumturquoise;
		color: crimson;

	 }
	</style>
	
<head>
     <title>Employees Registration</title>  
</head>

	
<body>
	
		<form method="POST"  name="form1" action="http://localhost/UbiAttendance/index.php/Attendance/create">
<div class="reg">
	<h1>Register</h1>
	<table style="margin-top: 20px;">
		   <tbody>
			      <tr>
					<td>First_Name</td>
					<td><input type="text" required name="fname" placeholder="First_Name" id=""></td>
					</tr>
					<tr>
						<td>Last_Name</td>
						<td><input type="text" required name="lname"  placeholder="Last_Name" id=""></td>
					</tr>
					<tr>
						<td> Email</td>
						<td><input type="email" required name="email" placeholder="Abcd@XYZ.com" id=""></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" required name="password" placeholder="Password" id=""></td>
					</tr>
					<tr>
						<td>Mobile</td>
						<td><input type="number" required name="mobile" placeholder="Mobile" id=""></td>
					</tr>
					<tr>
						<td>Address</td>
						<td><input type="text" required name="addr" placeholder="Address" id=""></td>
					</tr>
					<tr>
						<td>Designation</td>
						<td><input type="text" readonly  name="designation" value="User"></td>
					</tr>
				</tbody>
					  
	   </table>
	   <button class="smt" type="submit"  value="Submit" name="form1" >Submit</button>
	</div>
</form>

</body>
</html>
