<!DOCTYPE html>

<html>
    <head>
        <body>
            <div class="container">
                <div class="row">
                <?php foreach($data as $row) {?>
                <div class="col">
                    <table>
                        <tr>
                            <td>
                                <img src="http://localhost/UbiAttendance/assets/.<?php echo $row->image ?>">
                            </td>
                            <td><input type="date" value="<?php echo $row->date ?>"></td>
                            <td><input type="time" value="<?php echo $row->time ?>"></td>
                            <td><input type="email" value="<?php echo $row->Email ?>"></td>
                            
                        </tr>
                    </table>

                </div>
                <?php }?>
                </div>
            </div>
        </body>
    </head>
</html>