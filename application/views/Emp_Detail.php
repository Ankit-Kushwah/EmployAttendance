<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
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
    <?php
    // $query=$this->db->query('select * from empolyees_reg');
    ?>
   <div id="body">
        <table>
            <thead>Employees Data</thead>
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
                foreach($data as $row){
                    ?>
                <tr><td><input type="checkbox" id="key"> </td>
                   
                    <td><input readonly  name="fname" value="<?php echo $row->First_Name ?>"></td>
                    <td><input readonly  name="lname" value="<?php echo $row->Last_Name ?>"></td>
                    <td><input readonly  name="email" value="<?php echo $row->Email ?>"></td>
                    <td><input readonly  name="password" value="<?php echo $row->Password ?>"></td>
                    <td><input readonly  name="mobile" value="<?php echo $row->Mobile ?>"></td>
                    <td><input readonly  name="address" value="<?php echo $row->Address ?>"></td>
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