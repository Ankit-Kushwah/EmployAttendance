<!DOCTYPE html>
<html>
	<style>
		body{
			background-image: url(w1.jpg);
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center center;
		}
		.reg{
			background-size: cover;
			background-color: rgba(218, 226, 226, 0.2);
			width: 350px;
			height: 550px;
			margin-top: 4%;
			margin-left: 35%;
			border:0;
			padding-left:40px ;
			overflow-wrap: inherit;
            color: black;
		}
		h1{
			font-size: 32px;
			width: 120px;
			height: 50px;
			margin-left: 90px;
			margin-top: 30px;
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
	<section id="#">
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
				</tbody>
					  
	   </table>
	   <button class="smt" type="submit"  value="Submit" name="form1" >Submit</button>
	</div>
</form>
</section>
</body>
</html>
