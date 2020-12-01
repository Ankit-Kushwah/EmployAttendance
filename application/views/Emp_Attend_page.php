<!DOCTYPE html>
<html>
    <head>
        <title>
           Employe
        </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
        
        <style type="text/css">
           body { 
          margin: 0;
          font-family: Arial, Helvetica, sans-serif;
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
        .header .logo {
          font-size: 25px;
          font-weight: bold;
          border: 0;
        }
        .header .logo:hover{
          background-color: aquamarine;
          padding: 0.4em 1.8em;
          border-radius:8px;

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
          padding:12px;
          line-height:12px;
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
        <a style="padding 1px 6px; margin-right:10px" class="btn-pro" href="http://localhost/UbiAttendance/index.php/Attendance/webcam">Attendance</a>
            <button id="pro" class="btn-pro" >Profile</button>
             <div class="header-right">
              <a href="http://localhost/UbiAttendance/index.php/Attendance/unset_session_data">Logout</a>
            </div>
          </div>
            
 <div class="container">
        <div class="row">
        <?php foreach($data as $row) {?>
        <div class="col"><img src="http://localhost/UbiAttendance/assets/.<?php echo $row->image?>"></div>
        <?php }?>
        </div>
</div>
</div>

</body>
    
</html>
