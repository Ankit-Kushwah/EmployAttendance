<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<style type="text/css">

    table{
        border:0;
        border-spacing:1px;
    }
    
    tr{
        width: 100%;
        height:3em;
        font-size: large;
        background-color: aquamarine;
        line-height: 0.5em;
    }
    td{
        height: 1em;
        font-size: medium;
        background-color:transparent;
        line-height: 0.5em;
        
    }
    input{
        background-color: transparent;
        border: 0;
        margin:0;
        width:10.2em;
        text-align: -webkit-center;
        font-size: large;
        overflow:auto;
    }
    
	</style>
</head>
<body>
 
   <div id="body">
        <table>
            <thead><h5 style="font-size:24px; margin: 0; text-align: center;"><b>Employees Data</b></h5></thead>
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
                <tr>
                    <!-- <td><input type="checkbox" id="key"> </td> -->
                    <td><input readonly  name="fname" value="<?php echo $row->id ?>"></td>
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