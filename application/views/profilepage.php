<!DOCTYPE html>
<html>
    <head>
        <style>
            .profile-page{
                width: 30%;
                height: 80%;
                position: relative;
                left: 25em;
                top: .6em;
                text-align: center;
                font-size: larger;
                background-color: gainsboro;
                }
            #pro-img{
                margin-top: 10px;
                background-color: bisque;
            }
            input{
                height:1.9em;
                width: 85%;
                margin-bottom: 0.1em;
                background: transparent;
                border: none;
                text-align:center;
              
                }
            input:hover{
                background-color: aquamarine;
                padding:1em 4em;
            }
            #pro-btn{
                padding: 0.5em 1.4em;
                font-size: x-large;
                color: black;
                outline: transparent;
                background: transparent;
                border: 0;
                font-family: sans-serif;  
            }
            #pro-btn:hover{
                background-color: red;
                border-radius: 5px;
                z-index: 12;
            }
            body { 
          margin: 0;
          font-family: Arial, Helvetica, sans-serif;
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
    <body id="div1">
        <div class="header">
            <button id="ed" class="logo">Attendance</button>
            <div class="header-right">
              <a href="http://localhost/UbiAttendance/index.php/Attendance/unset_session_data">Logout</a>
            </div>
          </div>
        <div class="profile-page">
                    <?php foreach($data as $row) {?>
                    <div><img src="http://localhost/UbiAttendance/assets<?php echo $row->Image ?>" id="pro-img" /></div>
                    <hr>
                    <input type="text" name="fname" value="<?php echo $row->First_Name ?>" >
                    <input type="text" name="lname" value="<?php echo $row->Last_Name ?>" >
                    <input type="text" name="email" value="<?php echo $row->Email ?>" >
                    <input type="text" name="password" value="<?php echo $row->Password ?>" >
                    <input type="text" name="mobile" value="<?php echo $row->Mobile ?>" >
                    <input type="text" name="address" value="<?php echo $row->Address ?>" >
                    <?php }?>
                    <button id="pro-btn"><b>EDIT</b></button>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
        <script>
          $(document).ready(function(){
            $("#ed").click(function(){
              $.ajax({url: "http://localhost/UbiAttendance/index.php/Attendance/home", success: function(result){
                $("#div1").html(result);
              }});
            });
          });
        </script>
    </body>
</html>