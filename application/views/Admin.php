<!DOCTYPE html>

<html>
    <head>
        <title>
            MArkAttendance
        </title>
        <style>
            body { 
          margin: 0;
          font-family: Arial, Helvetica, sans-serif;
        }
        
        .header {
          overflow: hidden;
          background-color: #f1f1f1;
          padding: 10px 5px;
          
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
        
        .header a.logo {
          font-size: 25px;
          font-weight: bold;
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
        button{
            float: left;
            padding: 0.6em 2em;
            border: 0;
            background-color: lavenderblush;
            font-size: x-large;
            margin-left: 30px;

        }
        .Data{
          position:absolute;
          left:1%;
          top:15%;
        }
        
        </style>
    </head>
    <body>
        
   <div class="header">
        <button id="ed" >Employes Detail</button>
        <button id="ev" >Employes Registration</button>
        <button id="ec" >Employes Record</button>
        <div class="header-right">
        <a href="http://localhost/UbiAttendance/index.php/Attendance/unset_session_data">Logout</a>
        </div>
    
   </div>
      <div class="Data" id="div1">
        
      </div>
  
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script>
   $(document).ready(function(){
  $("#ev").click(function(){
    $.ajax({url: "http://localhost/UbiAttendance/index.php/Attendance/emp_reg", success: function(result){
      $("#div1").html(result);
    }});
  });
  
});
$(document).ready(function(){
  $("#ed").click(function(){
    $.ajax({url: "http://localhost/UbiAttendance/index.php/Attendance/Udata", success: function(result){
      $("#div1").html(result);
    }});
  });
  
});

$(document).ready(function(){
  $("#ec").click(function(){
    $.ajax({url: "http://localhost/UbiAttendance/index.php/Attendance/emp_rec", success: function(result){
      $("#div1").html(result);
    }});
  });
  
});
</script>
</body>
   </html>