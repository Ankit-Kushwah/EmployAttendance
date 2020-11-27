<!DOCTYPE html>
<html>
    <head>
        <title>
            MArkAttendance
        </title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    
        <style type="text/css">
           body { 
          margin: 0;
          font-family: Arial, Helvetica, sans-serif;
        }
        
          #results {
            position: relative;
            padding:20px;
            border:0; 
            width:8em;
            height:7em; 
            top:0em;
            left:-20em;
            }
          #my_camera{
            padding:20px;
            border:0;
            margin-left:24em;
            width:15em;
            height:15em;
          }
          #move{
            margin-left:20em;
            padding:5px 10px;
  
          }
        img{
          height: 10em;
          width: 10em;
          left:20em;
        }
         
        .header {
          overflow: hidden;
          background-color: #f1f1f1;
          padding: 20px 10px;
        }
        
        .header a {
          float: left;
          color: black;
          text-align: center;
          padding: 12px;
          text-decoration: none;
          font-size: 18px; 
          line-height: 25px;
          border-radius: 4px;
        }
        
        .header .btn-pro {
          font-size: 25px;
          font-weight: bold;
          border: 0;
        }
        .header .btn-pro:hover{
          background-color: aquamarine;
          padding: 0.4em 1.8em;
          border-radius:8px;

        }
        
        .header a:hover {
          background-color: #ddd;
          color: black;
        }
        
        .header a.active {
          background-color: dodgerblue;
          color: white;
        }
        
        .header-right {
          float: right;
        }
        #btn-press{
          left: 85%;
        }
        
        @media screen and (max-width: 500px) {
          .header a {
            float: none;
            display: block;
            text-align: left;
          }
          
          .header-right {
            float: none;
          }

          
        }
        </style>
    </head>
    
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script>
   $(document).ready(function(){
  $("#pro").click(function(){
    $.ajax({url: "http://localhost/UbiAttendance/index.php/Attendance/Profile", success: function(result){
      $("#div1").html(result);
    }});
  });
  
});
</script>
    <body id="div1">
        <div class="header">
            <button id="pro" class="btn-pro" >Profile</button>
             <div class="header-right">
              <a href="http://localhost/UbiAttendance/index.php/Attendance/unset_session_data">Logout</a>
            </div>
          </div>
            
<div class="container">
  <form method="POST" action="http://localhost/UbiAttendance/index.php/Attendance/photo_capture">
      <div class="row">
          <div class="col-md-6">
              <div id="my_camera">
              </div>
              <br/>
              <div id="btn-press" class="col-md-6">
                <input type=button  value="Press" onClick="take_snapshot()">
                <input type="hidden" name="image" class="image-tag"></div>
          </div>
          <div id="move" class="col-md-6">
              <table>
                <tr>
                  <td id="results"></td>
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
</body>
    
</html>
