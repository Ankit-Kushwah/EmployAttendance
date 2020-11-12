<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}
	#body {
		margin: 0 15px 0 15px;
	}
	</style>
</head>
<body>

   <div id="body">
	<h1>AdminPanel</h1>
	<div>
       <button class="btn-edit" id="btn"name="edit">Edit</button>
                    <button class="btn-delete" name="delete">Delete</button>
       </div>
        <table>
            <thead></thead>
            <tbody>
                <tr>
                    <th>User_Id &nbsp;</th>
                    <th>First_Name &nbsp;</th>
                    <th>Last_Name &nbsp;</th>
                    <th>Email &nbsp;</th>
                    <th>Password &nbsp;</th>
                    <th>Mobile &nbsp;</th>
                    <th>Address &nbsp;</th>
                </tr><?php
                foreach($row as $result){ 
                    ?>
                <tr><td><input type="checkbox" id="key" value="<?php echo $result["id"]; ?>" > </td>
                    <td><input readonly  name="key" value="<?php echo $result["id"]; ?>"></td>
                    <td><input readonly  name="fname" value="<?php echo $result["First_Name"]; ?>"></td>
                    <td><input readonly  name="lname" value="<?php echo $result["Last_Name"]; ?>"></td>
                    <td><input readonly  name="email" value="<?php echo $result["Email"]; ?>"></td>
                    <td><input readonly  name="password" value="<?php echo $result["Password"]; ?>"></td>
                    <td><input readonly  name="mobile" value="<?php echo $result["Mobile"]; ?>"></td>
                    <td><input readonly  name="address" value="<?php echo $result["Address"]; ?>"></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <div id = "div1" style = "background-color:cc0;">
            STAGE
        </div>
       
	
	</div>

</body>
</html>