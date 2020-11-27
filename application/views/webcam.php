<!DOCTYPE html>
<html>
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <style type="text/css">
        #results {
          padding:20px;
          border:1px solid; 
          width:8em;
          height:7em; }
        #my_camera{
          padding:20px;
          border:0;
          margin-left:24em;
          width:8em;
          height:7em;
        }
        #move{
          margin-left:30em;
          padding:5px 10px;

        }
    </style>

  
<div class="container">
    <form method="POST" action="http://localhost/UbiAttendance/index.php/Attendance/photo_capture">
        <div class="row">
            <div  class="col-md-6">
                <div id="my_camera" >

                </div>
                <br/>
                
                <input type=button id="move" value="Press" onClick="take_snapshot()">
                <input type="hidden" name="image" class="image-tag"></div>
                
            </div>
            <div class="col-md-6">
                <table>
                  <tr>
                    <td id="results"></td> 
                   <td><input type="hidden" name="date" value="<?php echo date("Y/m/d") ?>"></td>
                   <td><input type="hidden" name="time" value="<?php echo date("h:i:sa") ?>"></td>
                    <td><button class="btn btn-success">Submit</button></td>
                  </tr>
                </table>
            </div>
            
        </div>
    </form>
</div>
<script language="JavaScript">
    Webcam.set({
        width: 220,
        height: 200,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
  
    Webcam.attach( '#my_camera' );
  
    function take_snapshot() {
        Webcam.snap( function(data_uri) {
            $(".image-tag").val(data_uri);
            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
        } );
    }
</script>
</head>
<body>